@extends('layouts.main')
@section('title', 'Home')

@section('content')
    <div class="container box">
        <div class="row d-flex justify-content-center text-center">
            <div class="row">

                <div class="col-md-12">
                    <h2>Simulador de Crédito com <b>Garantia</b>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7 texto">

                    <div class="row">
                        <form action="#" method="get" class="d-flex justify-content-start formulario">
                            @csrf

                            <div class="form-group">
                                <div class="row">
                                    <div class=" col col-mb-6">
                                        <label for="val_imovel" class="form-label">Valor do Imóvel</label>
                                        <input type="text" class="form-control" step="any" id="val_imovel"
                                            name="val_imovel" value="R$ {{ number_format($valorImovel, 2, ',', '.') }}"
                                            readonly>
                                    </div>
                                    <input type="hidden" id="valor" name="valor" value="{{$valorImovel}}">
                                    <div class=" col col-mb-6">
                                        <label for="val_entrada" class="form-label">Entrada</label>
                                        <input type="text" class="form-control" step="any" id="val_entrada"
                                            name="val_entrada" value="R$ {{ number_format($valEntrada, 2, ',', '.') }}"
                                            readonly>
                                    </div>
                                    <div class="col col-md-6">
                                        <label for="val_financiar" class="form-label">Valor a financiar</label>
                                        <input type="range" class="form-range" min="0" max="{{$valorImovel}}"
                                            step="0.01" name="val_financiar" id="val_financiar"
                                            value="{{ $valRange }}" disabled>
                                        <div class="row">
                                            <div class="col col-md-8">
                                                <span id="valrange">
                                                    <div id="porcentagem"></div> R$
                                                    {{ number_format($valRange, 2, ',', '.') }}
                                                </span>
                                            </div>
                                            <div class="col col-md-4">
                                                <span class="taxa">8,5% ao ano</span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="btnform text-center">
                                        <a href="/" class="btn btn-danger">Nova simulação <i
                                                class="fas fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                    </div>
                    </form>
                    <div class="apresenta">
                        <div class="row">
                            <div class="col-md-12 mt-4">
                                <p>Os valores listados abaixo foram determinados sem uma análise de perfil.
                                    Precisamos de uma avaliação mais aprofundada vamos entrar em contato com você.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mt-4 ">
                            <p class="text-start">Valor do imóvel</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-start">
                            <input class="form-check-input ms-5 parcelas" type="radio" name="parcelas" value="60" id="p60"><label for="p60">60x</label>
                            <input class="form-check-input ms-5 parcelas" type="radio" name="parcelas" value="90" id="p90"><label for="p90">90x</label>
                            <input class="form-check-input ms-5 parcelas" type="radio" name="parcelas" value="120" id="p120"><label for="p120">120x</label>
                            <input class="form-check-input ms-5 parcelas" type="radio" name="parcelas" value="150" id="p150"><label for="p150">150x</label>
                            <input class="form-check-input ms-5 parcelas" type="radio" name="parcelas" value="180" id="p180"><label for="p180">180x</label>
                            <input class="form-check-input ms-5 parcelas" type="radio" name="parcelas" value="240"  id="p240"><label for="p240">240x</label>
                        </div>
                    </div>

                </div>
                <div class="col-md-9 boxb">
                    <div class="tabela mt-4">
                        <div class="row table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col">Tabela</th>
                                        <th scope="col">Correção</th>
                                        <th scope="col"> Juros a.m.</th>
                                        <th scope="col"> CET anual</th>
                                        <th scope="col"> 1ª Parcela</th>
                                        <!--<th scope="col"> 240ª Parcela</th>-->
                                    </tr>
                                </thead>
                                <tbody>
                                    <input type="hidden" id="contador" value="{{$contador=count($bancos)}}">
                                    @foreach ($bancos as $result)

                                        <tr>
                                            <th scope="row"><img src="/img/logos/{{ $result->logo }}"></th>
                                            <td>{{ $result->nomeTabela }}</td>
                                            <td>{{$result->nomeCorrecao}}</td>
                                            <input type="hidden" value="{{$result->taxa_juros_mes}}" id="taxames{{$loop->index+1}}">
                                            <!--<td id="jurosano{{$loop->index+1}}">{{ number_format($result->taxa_juros_ano, 2, ',', '.') }}%</td>-->
                                            <td id="jurosmes{{$loop->index+1}}">{{number_format($result->taxa_juros_mes, 2, ',', '.')}}</td>
                                            <td id="cet{{$loop->index+1}}">{{$result->cet}}%</td>
                                            <td id="parcela{{$loop->index+1}}"></td>
                                            <!--<td id="ultimaparcela"></td>-->
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>

            </div>

        </div>



    </div>
    </div>
    </div>
    <script defer src="https://unpkg.com/imask"></script>
    <script>
        $(document).ready(function() {

            var telefone = IMask(document.getElementById('telefone'), {
                mask: '(00)0 0000-0000'
            });

        });
    </script>
@endsection
