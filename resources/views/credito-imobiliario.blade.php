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
                    <p class="subtitulo">Tipo de imóvel:
                        <span class="red">Residencial</span>
                        Comercial
                        Terreno
                    </p>
                    <div class="row">
                        <form action="#" method="post" class="d-flex justify-content-start formulario">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col col-mb-3">
                                        <label for="nome" class="form-label">Nome</label>
                                        <input type="text" class="form-control" id="nome" name="nome"
                                            placeholder="João da Silva" required>
                                    </div>
                                    <div class=" col col-mb-3">
                                        <label for="email" class="form-label">E-mail</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="joao@email.com" required>
                                    </div>
                                    <div class=" col col-mb-3">
                                        <label for="telefone" class="form-label">Telefone</label>
                                        <input type="text" class="form-control" id="telefone" name="telefone"
                                            placeholder="(41) 9 9123-4567" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class=" col col-mb-6">
                                            <label for="val-imovel" class="form-label">Valor do Imóvel</label>
                                            <input type="number" class="form-control" step="any" id="val-imovel"
                                                name="val-imovel" placeholder="R$ 750.000,00" required>
                                        </div>
                                        <div class="col col-md-6">
                                            <label for="val-financiar" class="form-label">Valor a financiar</label>
                                            <input type="range" class="form-range" min="0" max="1000000"
                                                step="0.01" name="val-financiar" id="val-financiar">
                                            <div class="row">
                                                <div class="col col-md-8">
                                                    <span id="valrange">45% R$ </span>
                                                </div>
                                                <div class="col col-md-4">
                                                    <span class="taxa">8,5% ao ano</span>
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
@endsection
