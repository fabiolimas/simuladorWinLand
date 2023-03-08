<?php

namespace App\Http\Controllers;

use App\Models\Banco;
use App\Models\Tabela;
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
    $tabelas=Tabela::all();

    return view('admin.banco', compact('correcoes', 'tabelas'));
   }

   public function storeBanco(Request $request){

        $banco = new Banco();

        $banco->nome=$request->nome;
        $banco->taxa_juros_mes=0;
        $banco->taxa_juros_ano=$request->taxa_juros_ano;
        $banco->cet=$request->cet;
        $banco->status=1;
        $banco->tipo_credito=$request->tipo_credito;
        $banco->tabelas_id=$request->tabela;
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
<<<<<<< HEAD
    $banco= Banco::findOrFail($id);


     return view('admin.editbanco', compact('banco'));
 }

 public function updateBanco(Request $request){
=======

    $banco=Banco::join('correcaos','correcaos.id','bancos.correcaos_id')
    ->join('tabelas','tabelas.id','bancos.tabelas_id')
        ->select('bancos.*', 'correcaos.nome as nomeCorrecao', 'correcaos.id as idCorrecao','tabelas.id as idTabela', 'tabelas.nome as nomeTabela')
    ->first();

    $correcoes=Correcao::all();
    $tabelas=Tabela::all();



    return view('admin.editar-banco', compact('banco','correcoes', 'tabelas'));
   }

   public function updateBanco(Request $request){
>>>>>>> b753602b4b2d05b433b0343c76ba39d0c6ec834e

    $data=$request->all();


    if($request->hasFile('logo') && $request->file('logo')->isValid()){
        $imagem=$request->logo;
        $extensao=$imagem->extension();
        $imagemName=md5($imagem->getClientOriginalName(). strtotime("now").".".$extensao);

<<<<<<< HEAD
        $imagem->move(public_path('img/logos'), $imagemName);
        $data['logo']=$imagemName;


    }
=======
        $imagem->move(public_path('img/logos/'), $imagemName);

        $data['logo']=$imagemName;



    }

>>>>>>> b753602b4b2d05b433b0343c76ba39d0c6ec834e
    Banco::findOrFail($request->id)->update($data);




     return redirect('/admin/bancos')->with('msg','Banco editado com sucesso!');
 }

<<<<<<< HEAD
 public function destroyBanco($id){
    Banco::findOrFail($id)->delete();

    return redirect('/admin/bancos')->with('msg', 'Banco deletado com sucesso');
=======
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

   /*tabelas*/

   public function tabelas(){

    $tabelas=Tabela::all();
    return view('admin.tabelas', compact('tabelas'));
   }
   public function destroyTabela($id){

    Tabela::findOrFail($id)->delete();

        return redirect()->route('tabelas')->with('msg', 'Tabela deletada com sucesso');

   }

   public function createTabela(Request $request){


        return view('admin.tabela');

   }
   public function storeTabela(Request $request){

    $tabela= new Tabela();


    $tabela->nome=$request->nome;
    $tabela->save();

    return redirect()->route('tabelas');

>>>>>>> b753602b4b2d05b433b0343c76ba39d0c6ec834e
}
}
