@extends('layout.template')
@section('titulo','Perfil')

@section('conteudo')

<div class="container">
    <h1 class='display-1 text-center'>Perfil</h1>
</div>
<br>

<div class="container text-center">

    <div class="list-group list-group-horizontal">
        <button type="button" class="list-group-item list-group-item-action" href="#">Informações do Doáryo</button>
        <button type="button" class="list-group-item list-group-item-action" href="#">Editar Perfil</button>
        <button type="button" class="list-group-item list-group-item-action" href="#">Sair da Conta</button>
        <button type="button" class="list-group-item list-group-item-action" href="#">Excluir Conta</button>
    </div>
</div>
<br><br>

<div class="container text-center">
    <h2>Verificar:</h2>
    <div class="list-group list-group">
        <button type="button" class="list-group-item list-group-item-action" href="#">Doadores</button>
        <button type="button" class="list-group-item list-group-item-action" href="#">Instituições</button>
        <button type="button" class="list-group-item list-group-item-action" href="#">Requisições</button>
        <button type="button" class="list-group-item list-group-item-action" href="#">Doações</button>
    </div>
</div>
<br><br>

@endsection 