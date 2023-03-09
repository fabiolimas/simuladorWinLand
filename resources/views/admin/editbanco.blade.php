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
    <form action="/admin/updateBanco/{{$banco->id}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="imagae">Logo:</label>
            <input type="file" class="form-control" name="logo" id="image" value="{{$banco->logo}}">
        </div>
        <div class="form-group">
            <label for="nome">Instituição:</label>
            <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome da instituição" value="{{$banco->nome}}">
        </div>
        <div class="form-group">
            <label for="tabela" >Tabela:</label>
            <select name="tabela_id" id="tabela" class="form-control" required>

                <option value="{{$banco->tabela}}">{{$banco->tabela}}</option>
                <option value="Price">Price</option>
                <option value="Sac">SAC</option>

            </select>
        </div>
        <div class="form-group">
            <label for="correcao" >Correção:</label>
            <select name="correcao" id="correcao" class="form-control" required>
                <option value="{{$banco->correcao}}">{{$banco->correcao}}</option>
                <option value="TR">TR</option>
                <option value="Poupança">Poupança</option>
                <option value="Prefixada">Prefixada</option>

            </select>
        </div>

        <div class="form-group">
            <label for="taxa_juros_ano">Juro ao ano:</label>
            <input type="number" step="any" class="form-control"  name="taxa_juros_ano" id="taxa_juros_ano" value="{{$banco->taxa_juros_ano}}">
        </div>
        <div class="form-group">
            <label for="cet">CET anual:</label>
            <input type="number" step="any" class="form-control"  name="cet" id="cet" placeholder="CET anual" value="{{$banco->cet}}">
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
