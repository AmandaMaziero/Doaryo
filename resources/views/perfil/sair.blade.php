@extends('layout.template')
@section('titulo','Perfil')

@section('conteudo')

<div class="container text-center">
<h1 class='display-1 text-center'>Excluir</h1>
</div>
<br>
<div class="container text-center">
    <div class="list-group list-group-horizontal">
        <a class="list-group-item list-group-item-action" href="{{ url('perfil') }}">Doações</a>
        <a class="list-group-item list-group-item-action" href="{{ route('editar', $id) }}">Editar Perfil</a>
        <a class="list-group-item list-group-item-action" href="{{ route('logout')}}">Sair da Conta</a>
        <a class="list-group-item list-group-item-action" href="{{ route('excluir', $id) }}">Excluir Conta</a>
    </div>
</div>
<br><br>
<div class="panel panel-danger">
    <div class="container text-center">
        <a type="submit" class="btn btn-dark" href="{{ url('perfil') }}">Cancelar</a>
        <a type="submit" class="btn btn-danger" href="">Excluir</a>
    </div>
</div>


@endsection 