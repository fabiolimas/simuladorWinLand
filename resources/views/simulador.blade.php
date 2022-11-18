@extends('layouts.main')
@section('title', 'Home')

@section('content')
    <div class="container boxb">
        <div class="row d-flex justify-content-center text-center">
            <div class="row">

                <div class="col-md-12">
                    <h2>Simulador de Crédito <b>Imobiliário</b></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7 texto">

                    <div class="row">
                        <form action="{{ route('simulador') }}" method="get" class="d-flex justify-content-start formulario">
                            @csrf

                            <div class="form-group">
                                <div class="row">
                                    <div class=" col col-mb-6">
                                        <label for="val_imovel" class="form-label">Valor do Imóvel</label>
                                        <input type="number" class="form-control" step="any" id="val_imovel"
                                            name="val_imovel" value="{{ $valorImovel }}" readyonly>
                                    </div>
                                    <div class="col col-md-6">
                                        <label for="val_financiar" class="form-label">Valor a financiar</label>
                                        <input type="range" class="form-range" min="0" max="1000000"
                                            step="0.01" name="val_financiar" id="val_financiar"
                                            value="{{ $valRange }}" disabled>
                                        <div class="row">
                                            <div class="col col-md-8">
                                                <span id="valrange">
                                                    <div id="porcentagem"></div> R$ {{ number_format($valRange, 2, ',', '.') }}
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
                            <input class="form-check-input ms-5" type="radio" name="parcelas" value="60">60x
                            <input class="form-check-input ms-5" type="radio" name="parcelas"  value="90">90x
                            <input class="form-check-input ms-5" type="radio" name="parcelas" value="120">120x
                            <input class="form-check-input ms-5" type="radio" name="parcelas" value="150">150x
                            <input class="form-check-input ms-5" type="radio" name="parcelas" value="180">180x
                            <input class="form-check-input ms-5" type="radio" name="parcelas" value="240" checked>240x
                        </div>
                    </div>
                    <div class="tabela mt-4">
                        <div class="row table-responsive">
                            <table class="table table-dark table-borderless">
                                <thead>
                                  <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Tabela</th>
                                    <th scope="col">Correção</th>
                                    <th scope="col"> Juros a.a.</th>
                                    <th scope="col"> CET anual</th>
                                    <th scope="col"> 1ª Parcela</th>
                                    <th scope="col"> 240ª Parcela</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>@mdo</td>
                                    <td>@mdo</td>
                                    <td>@mdo</td>
                                  </tr>

                                </tbody>
                              </table>

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
