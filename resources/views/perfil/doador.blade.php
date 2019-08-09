@extends('layout.template')
@section('titulo','Perfil')

@section('conteudo')

<div class="container">
    <h1 class='display-1 text-center'>Perfil</h1>
</div>
<br>

<div class="container text-center">

    <div class="list-group list-group-horizontal">
        <button type="submit" class="list-group-item list-group-item-action" href="#">Doações</button>
        <button type="submit" class="list-group-item list-group-item-action" href="#">Editar Perfil</button>
        <button type="submit" class="list-group-item list-group-item-action" href="#">Sair da Conta</button>
        <button type="submit" class="list-group-item list-group-item-action" href="#">Excluir Conta</button>
    </div>
</div>
<br><br>

<div class="container text-center">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Produto Doado</th>
                <th scope="col">Instituição</th>
                <th scope="col">Data</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>UIPA</td>
                <td>12/12/2018</td>
            </tr>
        </tbody>
    </table>
</div>

@endsection 