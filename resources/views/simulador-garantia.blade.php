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
                                            readyonly>
                                    </div>
                                    <div class=" col col-mb-6">
                                        <label for="val_entrada" class="form-label">Entrada</label>
                                        <input type="text" class="form-control" step="any" id="val_entrada"
                                            name="val_entrada" value="R$ {{ number_format($valEntrada, 2, ',', '.') }}"
                                            readyonly>
                                    </div>
                                    <div class="col col-md-6">
                                        <label for="val_financiar" class="form-label">Valor a financiar</label>
                                        <input type="range" class="form-range" min="0" max="1000000"
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
                            <input class="form-check-input ms-5 parcelas" type="radio" name="parcelas" value="240" checked id="p240"><label for="p240">240x</label>
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
                                        <th scope="col">Banco</th>
                                        <th scope="col">Correção</th>
                                        <th scope="col"> Juros a.a.</th>
                                        <th scope="col"> Juros a.M</th>
                                        <th scope="col"> 1ª Parcela</th>
                                        <th scope="col"> 240ª Parcela</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($resultado->value as $result)
                                        <tr>
                                            <th scope="row">{{ $result->cnpj8 }}</th>
                                            <td>{{ $result->InstituicaoFinanceira }}</td>
                                            <td>TR</td>
                                            <td id="jurosano">{{ number_format($result->TaxaJurosAoAno, 2, ',', '.') }}</td>
                                            <td id="jurosmes">{{ number_format($result->TaxaJurosAoMes, 2, ',', '.') }}</td>
                                            <td id="1parcela"></td>
                                            <td id='ultimaparcela'></td>
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
