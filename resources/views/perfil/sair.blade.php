@extends('layout.template')
@section('titulo','Perfil')

@section('conteudo')

<div class="container text-center">
<h1 class='display-1 text-center'>Sair</h1>
</div>
<br>
<div class="container text-center">
    <div class="list-group list-group-horizontal">
        @if($type == "admin")
            <a class="list-group-item list-group-item-action btn btn-secondary" href="{{ url('perfil') }}">Verificar</a>
        @elseif($type == "user")
            <a class="list-group-item list-group-item-action btn btn-secondary" href="{{ url('perfil') }}">Doações</a>
        @else
            <a class="list-group-item list-group-item-action btn btn-secondary" href="{{ url('perfil') }}">Requisições</a>
        @endif
        <a class="list-group-item list-group-item-action btn btn-warning" href="{{ route('editar', $id) }}">Editar Perfil</a>
        <a class="list-group-item list-group-item-action btn btn-secondary" href="{{ route('sair')}}">Sair da Conta</a>
        <a class="list-group-item list-group-item-action btn btn-danger" href="{{ route('excluir', $id) }}">Excluir Conta</a>
    </div>
</div>
<br><br>
<div class="panel panel-danger">
    <div class="container text-center">
        <a type="submit" class="btn btn-dark" href="{{ url('perfil') }}">Cancelar</a>
        <a type="submit" class="btn btn-danger" href="{{ url('/logout') }}">Sair</a>
    </div>
</div>


@endsection 