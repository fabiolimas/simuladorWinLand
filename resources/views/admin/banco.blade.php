@extends('adminlte::page')

@section('title', 'Novo Banco')

@section('content_header')
<h1><i class="fas fa-university"></i> Novo Bancos</h1>

     <hr>
@stop

@section('content')

<div class="content col-md-12">
    <div class="col-md-5 offset-md-1 dashboard-title-container">


    </div>
    <div class="fluid-container ">
        <div class="content col-md-8">
        <div class="row destaque">


    </div>
    <form action="/admin/banco" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="imagae">Logo:</label>
            <input type="file" class="form-control" name="logo" id="image" placeholder="Logo" required>
        </div>
        <div class="form-group">
            <label for="nome">Instituição:</label>
            <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome da instituição" required>
        </div>
        <div class="form-group">
            <label for="tabela" >Tabela:</label>
            <select name="tabela" id="tabela" class="form-control" required>
                <option value="">Selecione um tipo</option>
                @foreach($tabelas as $tabela)

                <option value="{{$tabela->id}}">{{$tabela->nome}}</option>
            @endforeach

            </select>
        </div>
        <div class="form-group">
            <label for="tipo_credito" >Tipo de Crédito:</label>
            <select name="tipo_credito" id="tipo_credito" class="form-control" required>
                <option value="">Selecione um tipo</option>
                <option value="0">Imóvel</option>
                <option value="1">Auto</option>

            </select>
        </div>
        <div class="form-group">
            <label for="correcao" >Correção:</label>
            <select name="correcao" id="correcao" class="form-control" required>
                <option value="">Selecione um tipo</option>
                @foreach($correcoes as $correcao)

                    <option value="{{$correcao->id}}">{{$correcao->nome}}</option>
                @endforeach

            </select>
        </div>

        <div class="form-group">
            <label for="taxa_juros_ano">Juro ao mes:</label>
            <input type="number" step="any" class="form-control"  name="taxa_juros_mes" id="taxa_juros_ano" placeholder="Taxa de juros ao ano" required>
        </div>
        <div class="form-group">
            <label for="cet">CET anual:</label>
            <input type="number" step="any" class="form-control"  name="cet" id="cet" placeholder="CET anual" required>
        </div>



        <input type="submit" class="btn btn-primary" value="Cadastrar">

    </form>
    </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
