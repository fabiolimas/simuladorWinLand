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
}
