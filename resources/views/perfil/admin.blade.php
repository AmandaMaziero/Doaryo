@extends('layout.template')
@section('titulo','Perfil')

@section('conteudo')

<div class="container">
    <h1 class='display-1 text-center'>Perfil</h1>
</div>
<br>

<div class="container text-center">

    <div class="list-group list-group-horizontal">
        <a class="list-group-item list-group-item-action" href="#">Informações do Doáryo</a>
        <a class="list-group-item list-group-item-action" href="#">Editar Perfil</a>
        <a class="list-group-item list-group-item-action" href="#">Sair da Conta</a>
        <a class="list-group-item list-group-item-action" href="#">Excluir Conta</a>
    </div>
</div>
<br><br>

<div class="container text-center">
    <h2>Verificar:</h2>
    <div class="list-group list-group">
        <a class="list-group-item list-group-item-action" href="#">Doadores</a>
        <a class="list-group-item list-group-item-action" href="#">Instituições</a>
        <a class="list-group-item list-group-item-action" href="#">Requisições</a>
        <a class="list-group-item list-group-item-action" href="#">Doações</a>
    </div>
</div>
<br><br>

@endsection 