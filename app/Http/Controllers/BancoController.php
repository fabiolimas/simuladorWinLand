<?php

namespace App\Http\Controllers;

use App\Models\Banco;
use Illuminate\Http\Request;

class BancoController extends Controller
{
   public function index(){
    $bancos=Banco::all();

    return view('admin.bancos', compact('bancos'));
   }

   public function create(){

    return view('admin.banco');
   }

   public function storeBanco(Request $request){

        $banco = new Banco();

        $banco->nome=$request->nome;
        $banco->correcao=$request->correcao;
        $banco->taxa_juros_mes=0;
        $banco->taxa_juros_ano=$request->taxa_juros_ano;
        $banco->cet=$request->cet;
        $banco->status=1;
        $banco->tabela=$request->tabela;

    /*upload logo */

    if($request->hasFile('logo') && $request->file('logo')->isValid()){
        $imagem=$request->logo;
        $extensao=$imagem->extension();
        $imagemName=md5($imagem->getClientOriginalName(). strtotime("now").".".$extensao);

        $imagem->move(public_path('img/logos'), $imagemName);
        $banco->logo=$imagemName;


    }

    $banco->save();
    return redirect()->route('bancos');
   }

   public function editBanco($id){
    $banco=Banco::findOrFail($id);


    return view('admin.editar-banco', compact('banco'));
   }

   public function updateBanco(Request $request){

    $data=$request->all();


    if($request->hasFile('logo') && $request->file('logo')->isValid()){
        $imagem=$request->logo;
        $extensao=$imagem->extension();
        $imagemName=md5($imagem->getClientOriginalName(). strtotime("now").".".$extensao);

        $imagem->move(public_path('img/logos'), $imagemName);
        $data['logo']=$imagemName;


    }
    Banco::findOrFail($request->id)->update($data);




     return redirect('/admin/bancos')->with('msg','Banco editado com sucesso!');
 }

   public function destroy($id){

    Banco::findOrFail($id)->delete();

        return redirect('/admin/bancos')->with('msg', 'Banco deletado com sucesso');

   }
}
