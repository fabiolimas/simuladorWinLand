@extends('layouts.main')
@section('title', 'Home')

@section('content')
    <div class="container boxb">
        <div class="row d-flex justify-content-center text-center">
            <div class="row">

                <div class="col-md-12">
                    <h2>Simulador de Crédito com <b>Garantia</b>
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7 texto">
                    <p class="subtitulo">Tipo de imóvel:
                        <input class="form-check-input ms-5 tipoImovel" type="radio" name="tipoImovel" value="1.89" id="automovel"><label for="automovel" class='automovel'>Automovel</label>
                        <input class="form-check-input ms-5 tipoImovel" type="radio" name="tipoImovel" value="0.72" id="imovel"><label for="imovel" class='imovel'>Imovel</label>

                    </p>
                    <div class="row">
                        <form action="{{route('simulador2')}}" method="get" class="d-flex justify-content-start formulario">
                            @csrf
                            <div class="form-group">
                                <div class="row">
                                    <div class="col col-mb-3 mb-2">
                                        <label for="nome" class="form-label">Nome</label>
                                        <input type="text" class="form-control" id="nome" name="nome"
                                            placeholder="João da Silva" required>
                                    </div>
                                    <div class=" col col-mb-3 mb-2">
                                        <label for="email" class="form-label">E-mail</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="joao@email.com" required>
                                    </div>
                                    <div class=" col col-mb-3 mb-2">
                                        <label for="telefone" class="form-label">Telefone</label>
                                        <input type="text" class="form-control" id="telefone" name="telefone"
                                            placeholder="(41) 9 9123-4567" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class=" col col-mb-3 mb-2">
                                            <label for="val_imovel" class="form-label">Valor</label>
                                            <input type="number" class="form-control" step="any" id="val_imovel"
                                                name="val_imovel" placeholder="R$ 750.000,00" required>
                                        </div>
                                        <div class=" col col-mb-3 mb-2">
                                            <label for="val_entrada" class="form-label">Entrada</label>
                                            <input type="number" class="form-control" step="any" id="val_entrada"
                                                name="val_entrada" placeholder="R$ 10.000,00" required>
                                        </div>
                                        <div class="col col-md-6">
                                            <label for="val_financiar" class="form-label">Valor a financiar</label>
                                            <input type="range" class="form-range" min="0" max="1000000"
                                                step="0.01" name="val_financiar" id="val_financiar">
                                            <div class="row">
                                                <div class="col col-md-8 ">
                                                    <span id="valrange"><div id="porcentagem"></div></span>
                                                </div>
                                                <div class="col col-md-4">

                                                    <span class="taxa"></span>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="btnform text-center">
                                            <button type="submit" class="btn btn-danger">Simular agora <i
                                                    class="fas fa-angle-double-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>



            </div>
        </div>
    </div>
    <script defer src="https://unpkg.com/imask"></script>
<script>
    $(document).ready(function(){

        var telefone = IMask(document.getElementById('telefone'),{
            mask: '(00)0 0000-0000'
        });

    });


    $(document).ready(function(){

var valorTaxa = document.querySelector('.taxa');

var automovel=document.querySelector('#automovel');
var imovel=document.querySelector('#imovel');


var labelautomovel=document.querySelector('.automovel');
var labelimovel=document.querySelector('.imovel');
valorTaxa.innerHTML=automovel.value+"% ao ano";
 //automovel
 automovel.addEventListener('click', function () {
    labelautomovel.style.color="red";
    labelimovel.style.color="#fff";
    labelimovel.style.textDecoration="none";

    labelautomovel.style.textDecoration="underline";

   valorTaxa.innerHTML=automovel.value+"% ao ano";
});
 //imovel
 imovel.addEventListener('click', function () {
    labelautomovel.style.color="#fff";
    labelimovel.style.color="red";
    labelimovel.style.textDecoration="underline";

    labelautomovel.style.textDecoration="none";

   valorTaxa.innerHTML=imovel.value+"% ao ano";
});

});
</script>
@endsection

