@extends('adminlte::page')

@section('title', 'Editar Banco')

@section('content_header')
<h1><i class="fas fa-university"></i> Editar Banco</h1>

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
    <form action="/admin/update/{{$banco->id}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="image">Logo:</label>
            <input type="file" class="form-control" name="logo" id="image" value="{{$banco->logo}}">
        </div>
        <div class="form-group">
            <label for="nome">Instituição:</label>
            <input type="text" class="form-control" name="nome" id="nome" value="{{$banco->nome}}">
        </div>
        <div class="form-group">
            <label for="tabela" >Tabela:</label>
            <select name="tabela" id="tabela" class="form-control" required>
                <option value="{{$banco->idTabela}}">{{$banco->nomeTabela}}</option>
                @foreach($tabelas as $tabela)
                    <option value="{{$tabela->id}}">{{$tabela->nome}}</option>
                @endforeach

            </select>
        </div>
        <div class="form-group">
            <label for="tipo_credito" >Tipo de Crédito:</label>
            <select name="tipo_credito" id="tipo_credito" class="form-control" required>
                @switch($banco->tipo_credito)
                    @case(0)
                    <option value="{{$banco->tipo_credito}}">Imóvel</option>
                    @break

                    @case(1)
                    <option value="{{$banco->tipo_credito}}">Auto</option>
                    @break
                @endswitch

                <option value="0">Imóvel</option>
                <option value="1">Auto</option>

            </select>
        </div>
        <div class="form-group">
            <label for="correcao" >Correção:</label>
            <select name="correcaos_id" id="correcao" class="form-control" required>


                <option value="{{$banco->idCorrecao}}">{{$banco->nomeCorrecao}}</option>
                @foreach($correcoes as $correcao)
                    <option value="{{$correcao->id}}">{{$correcao->nome}}</option>
                @endforeach

            </select>
        </div>

        <div class="form-group">
            <label for="taxa_juros_ano">Juro ao ano:</label>
            <input type="number" step="any" class="form-control"  name="taxa_juros_ano" id="taxa_juros_ano" value="{{$banco->taxa_juros_ano}}">
        </div>
        <div class="form-group">
            <label for="cet">CET anual:</label>
            <input type="number" step="any" class="form-control"  name="cet" id="cet" value="{{$banco->taxa_juros_ano}}">
        </div>



        <input type="submit" class="btn btn-primary" value="Editar">

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
