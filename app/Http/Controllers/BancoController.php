<?php

namespace App\Http\Controllers;

use App\Models\Banco;
use App\Models\Correcao;
use Illuminate\Http\Request;

class BancoController extends Controller
{
   public function index(){
    $bancos=Banco::all();



    return view('admin.bancos', compact('bancos'));
   }

   public function create(){
    $correcoes=Correcao::all();

    return view('admin.banco', compact('correcoes'));
   }

   public function storeBanco(Request $request){

        $banco = new Banco();

        $banco->nome=$request->nome;
        $banco->taxa_juros_mes=0;
        $banco->taxa_juros_ano=$request->taxa_juros_ano;
        $banco->cet=$request->cet;
        $banco->status=1;
        $banco->tipo_credito=$request->tipo_credito;
        $banco->tabela=$request->tabela;
        $banco->correcaos_id=$request->correcao;

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

    $banco=Banco::join('correcaos','correcaos.id','bancos.correcaos_id')
        ->select('bancos.*', 'correcaos.nome as nomeCorrecao', 'correcaos.id as idCorrecao')
    ->first();

    $correcoes=Correcao::all();



    return view('admin.editar-banco', compact('banco','correcoes'));
   }

   public function updateBanco(Request $request){

    $data=$request->all();


    if($request->hasFile('logo') && $request->file('logo')->isValid()){
        $imagem=$request->logo;
        $extensao=$imagem->extension();
        $imagemName=md5($imagem->getClientOriginalName(). strtotime("now").".".$extensao);

        $imagem->move(public_path('img/logos/'), $imagemName);

        $data['logo']=$imagemName;



    }

    Banco::findOrFail($request->id)->update($data);




     return redirect('/admin/bancos')->with('msg','Banco editado com sucesso!');
 }

   public function destroy($id){

    Banco::findOrFail($id)->delete();

        return redirect('/admin/bancos')->with('msg', 'Banco deletado com sucesso');

   }

   /*Correções*/

   public function correcoes(){

    $correcoes=Correcao::all();
    return view('admin.correcoes', compact('correcoes'));
   }

   public function createCorrecao(Request $request){


        return view('admin.correcao');

   }

   public function storeCorrecao(Request $request){

    $correcao= new Correcao();


    $correcao->nome=$request->nome;
    $correcao->save();

    return redirect()->route('correcoes');

}
public function destroyCorrecao($id){

    Correcao::findOrFail($id)->delete();

        return redirect()->route('correcoes')->with('msg', 'Correcao deletada com sucesso');

   }
}
