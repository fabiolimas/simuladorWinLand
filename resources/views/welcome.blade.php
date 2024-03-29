@extends('layouts.main')
@section('title', 'Home')

@section('content')
<div class="container box">
    <div class="row">

        <div class="row">

            <div class="col-md-12">
                <h2>Já conhece o simulador de crédito da WinLend?</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7 texto">
                <p>Para auxiliar no processo de compra e venda de um imóvel ou home-equity, disponibilizamos
                    um simulador de financiamento que te ajudará a ter uma ideia das condições disponíveis para a
                    operação e a planejar tudo da melhor maneira.</p>
                    <div class="botoes">
                        <div class="col-md-6">
                            <a href="/credito-imobiliario" class="btn btn-danger position-relative"  >Crédito Imobiliário <img src="/img/double.png" alt=""></a>
                        </div>
                        <div class="col-md-6">
                            <a href="/credito-com-garantia" class="btn btn-danger position-relative">Crédito com garantia <img src="/img/double.png" alt=""></a>
                        </div>
                    </div>
            </div>



        </div>

    </div>
</div>

@endsection
