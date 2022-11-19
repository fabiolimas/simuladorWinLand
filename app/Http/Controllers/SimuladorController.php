<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SimuladorController extends Controller
{
   public function index(Request $request   ){

        $valorImovel=$request->val_imovel;
        $valRange=$request->val_financiar;

            $url='https://olinda.bcb.gov.br/olinda/servico/taxaJuros/versao/v2/odata/TaxasJurosMensalPorMes?$top=100&$format=json&$select=Modalidade,InstituicaoFinanceira,TaxaJurosAoMes,TaxaJurosAoAno,cnpj8';
            $ch=curl_init($url);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
           curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $resultado=json_decode(curl_exec($ch));



    return view('simulador',compact('valorImovel', 'valRange', 'resultado'));
   }

   public function index2(Request $request   ){

    $valorImovel=$request->val_imovel;
    $valRange=$request->val_financiar;
    $valEntrada=$request->val_entrada;
    $url='https://olinda.bcb.gov.br/olinda/servico/taxaJuros/versao/v2/odata/TaxasJurosMensalPorMes?$top=100&$format=json&$select=Modalidade,InstituicaoFinanceira,TaxaJurosAoMes,TaxaJurosAoAno,cnpj8';
    $ch=curl_init($url);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $resultado=json_decode(curl_exec($ch));

return view('simulador-garantia',compact('valorImovel', 'valRange','valEntrada','resultado'));
}


}
