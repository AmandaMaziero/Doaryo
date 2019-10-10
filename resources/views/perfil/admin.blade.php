@extends('layout.template')
@section('titulo','Perfil')

@section('conteudo')

<div class="container">
    <h1 class='display-1 text-center'>Perfil</h1>
</div>
<br>

<div class="container text-center">

    <div class="list-group list-group-horizontal">
        <a class="list-group-item list-group-item-action btn btn-secondary" href="{{ url('perfil') }}">Verificar</a>
        <a class="list-group-item list-group-item-action btn btn-warning" href="{{ route('editar', $id) }}">Editar Perfil</a>
        <a class="list-group-item list-group-item-action btn btn-secondary" href="{{ route('sair')}}">Sair da Conta</a>
        <a class="list-group-item list-group-item-action btn btn-danger" href="{{ route('excluir', $id) }}">Excluir Conta</a>
    </div>
</div>
<br><br>

<div class="container text-center">
    <div class="list-group list-group">
        <a class="list-group-item list-group-item-action btn btn-secondary" href="{{ route('dadosDoador') }}">Doadores</a>
        <a class="list-group-item list-group-item-action btn btn-secondary" href="{{ route('dadosInst') }}">Instituições</a>
        <a class="list-group-item list-group-item-action btn btn-secondary" href="{{ asset('doacao') }}">Requisições</a>
    </div>
</div>
<br><br>

@endsection 