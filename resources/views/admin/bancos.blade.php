@extends('adminlte::page')

@section('title', 'Bancos')

@section('content_header')
<h1><i class="fas fa-university mb-3"></i> Bancos Cadastrados</h1>
     <div id="novoBanco"><a href="/admin/banco" class="btn btn-success novo"><i class="fas fa-plus-circle"></i>Novo</a></div>
     <hr>
@stop

@section('content')
<div class="col-lg-12 col-7">
@if($bancos->count()<1)
    <p>Nenhum banco cadastrado</p>
@else
    <table class="table table-bordered text-center">
    <thead>
    <tr>
    <th>Logo</th>
    <th>Banco</th>
<<<<<<< HEAD
    <th>Juros ao Ano</th>
=======
    <th>Tipo de Crédito</th>
>>>>>>> b753602b4b2d05b433b0343c76ba39d0c6ec834e
    <th>Status</th>
    <th>Ações</th>

    </tr>
    </thead>
    <tbody>
        @foreach($bancos as $banco)
            <tr>
                <td><img src="/img/logos/{{$banco->logo}}"></td>
                <td>{{$banco->nome}}</td>
<<<<<<< HEAD
                <td>{{$banco->taxa_juros_ano}}%</td>
=======
                @switch($banco->tipo_credito)
                    @case(0)
                    <td>Imóvel</td>
                    @break
                    @case(1)
                    <td>Auto</td>
                    @break
                @endswitch
>>>>>>> b753602b4b2d05b433b0343c76ba39d0c6ec834e
                <td>Ativo</td>
                <td><a href="/admin/edit-banco/{{$banco->id}}"><button type="button" class="btn btn-success" title="Editar"><i class="fa fa-edit"></i></button></a> | <a href="/admin/delete-banco/{{$banco->id}}"><button type="button" class="btn btn-dark" title="Excluir"><i class="fas fa-trash"></i></button></a></td>
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
