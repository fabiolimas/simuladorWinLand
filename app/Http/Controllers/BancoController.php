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

    if($request->hasFile('image') && $request->file('image')->isValid()){
        $imagem=$request->image;
        $extensao=$imagem->extension();
        $imagemName=md5($imagem->getClientOriginalName(). strtotime("now").".".$extensao);

        $imagem->move(public_path('img/logos'), $imagemName);
        $banco->logo=$imagemName;


    }

    $banco->save();
    return redirect()->route('bancos');
   }
}