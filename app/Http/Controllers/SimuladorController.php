<?php

namespace App\Http\Controllers;

use App\Models\Banco;
use Illuminate\Http\Request;

class SimuladorController extends Controller
{
   public function index(Request $request   ){

        $valorImovel=$request->val_imovel;
        $valRange=$request->val_financiar;

        $bancos = Banco::join('correcaos','correcaos.id','bancos.correcaos_id')
        ->join('tabelas','tabelas.id','bancos.tabelas_id')
        ->select('bancos.*', 'correcaos.nome as nomeCorrecao', 'tabelas.nome as nomeTabela')
        ->where('status',1)
        ->where('tipo_credito',0)
        ->get();





    return view('simulador',compact('valorImovel', 'valRange', 'bancos'));
   }

   public function index2(Request $request   ){

    $valorImovel=$request->val_imovel;
    $valRange=$request->val_financiar;
    $valEntrada=$request->val_entrada;
    $bancos = Banco::join('correcaos','correcaos.id','bancos.correcaos_id')
        ->join('tabelas','tabelas.id','bancos.tabelas_id')
        ->select('bancos.*', 'correcaos.nome as nomeCorrecao', 'tabelas.nome as nomeTabela')
        ->where('status',1)
    ->where('tipo_credito',1)
    ->get();





return view('simulador-garantia',compact('valorImovel', 'valRange', 'bancos', 'valEntrada'));
}


   /*public function index2(Request $request   ){

    $valorImovel=$request->val_imovel;
    $valRange=$request->val_financiar;
    $valEntrada=$request->val_entrada;
    $url='https://olinda.bcb.gov.br/olinda/servico/taxaJuros/versao/v2/odata/TaxasJurosMensalPorMes?$top=100&$format=json&$select=Modalidade,InstituicaoFinanceira,TaxaJurosAoMes,TaxaJurosAoAno,cnpj8';
    $ch=curl_init($url);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $resultado=json_decode(curl_exec($ch));

return view('simulador-garantia',compact('valorImovel', 'valRange','valEntrada','resultado'));
}*/

/*
public function storeBancos(){

    $url='https://olinda.bcb.gov.br/olinda/servico/taxaJuros/versao/v2/odata/TaxasJurosMensalPorMes?$top=100&$format=json&$select=Modalidade,InstituicaoFinanceira,TaxaJurosAoMes,TaxaJurosAoAno,cnpj8';

    $ch=curl_init($url);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $resultado=json_decode(curl_exec($ch));



    foreach($resultado->value as $result){
        $banco = new Banco();
        $banco->nome=$result->InstituicaoFinanceira;
        $banco->correcao=$result->Modalidade;
        $banco->taxa_juros_mes=$result->TaxaJurosAoMes;
        $banco->taxa_juros_ano=$result->TaxaJurosAoAno;
        $banco->cet=12.5;
        $banco->logo=$result->cnpj8;
        $banco->save();


    }*/

    public function editBanco($id){
        $banco= Banco::findOrFail($id);


         return view('admin.editbanche', compact('banco'));
     }


}
