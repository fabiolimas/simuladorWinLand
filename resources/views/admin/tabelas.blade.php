@extends('adminlte::page')

@section('title', 'Tabelas')

@section('content_header')
<h1><i class="fas fa-university mb-3"></i>Tabelas</h1>
     <div id="novaTabela"><a href="/admin/tabela" class="btn btn-success novo"><i class="fas fa-plus-circle"></i>Novo</a></div>
     <hr>
@stop

@section('content')
<div class="col-lg-12 col-7">
@if($tabelas->count() <1)
    <p>Nenhuma Correção cadastrada</p>
@else
    <table class="table table-bordered text-center">
    <thead>
    <tr>
    <th>Tabelas</th>
    <th>Ações</th>

    </tr>
    </thead>
    <tbody>
        @foreach($tabelas as $tabela)
            <tr>

                <td>{{$tabela->nome}}</td>
                <td><a href="/admin/delete-tabela/{{$tabela->id}}"><button type="button" class="btn btn-dark" title="Excluir"><i class="fas fa-trash"></i></button></a></td>
            </tr>
        @endforeach
    @endif
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
