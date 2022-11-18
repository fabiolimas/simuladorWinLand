<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SimuladorController extends Controller
{
   public function index(Request $request   ){

        $valorImovel=$request->val_imovel;
        $valRange=$request->val_financiar;

    return view('simulador',compact('valorImovel', 'valRange'));
   }

   public function index2(Request $request   ){

    $valorImovel=$request->val_imovel;
    $valRange=$request->val_financiar;
    $valEntrada=$request->val_entrada;

return view('simulador-garantia',compact('valorImovel', 'valRange','valEntrada'));
}


}
