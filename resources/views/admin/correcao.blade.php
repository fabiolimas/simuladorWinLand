@extends('adminlte::page')

@section('title', 'Nova Correção')

@section('content_header')
<h1><i class="fas fa-university"></i> Nova Correção</h1>

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
    <form action="/admin/correcao" method="post" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="nome">Correção:</label>
            <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome da correção" required>
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
