@extends('adminlte::page')

@section('title', 'Correções')

@section('content_header')
<h1><i class="fas fa-university mb-3"></i>Correções</h1>
     <div id="novaCorrecao"><a href="/admin/correcao" class="btn btn-success novo"><i class="fas fa-plus-circle"></i>Novo</a></div>
     <hr>
@stop

@section('content')
<div class="col-lg-12 col-7">
@if($correcoes->count() <1)
    <p>Nenhuma Correção cadastrada</p>
@else
    <table class="table table-bordered text-center">
    <thead>
    <tr>
    <th>Correção</th>
    <th>Ações</th>

    </tr>
    </thead>
    <tbody>
        @foreach($correcoes as $correcao)
            <tr>

                <td>{{$correcao->nome}}</td>
                <td><a href="/admin/delete-correcao/{{$correcao->id}}"><button type="button" class="btn btn-dark" title="Excluir"><i class="fas fa-trash"></i></button></a></td>
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
