@extends('layout.template')
@section('titulo','Perfil')

@section('conteudo')

<div class="container">
    <h1 class='display-1 text-center'>Perfil</h1>
</div>
<br>

<div class="container text-center">

    <div class="list-group list-group-horizontal">
        <button type="button" class="list-group-item list-group-item-action" href="#">Requisições</button>
        <button type="button" class="list-group-item list-group-item-action" href="#">Editar Perfil</button>
        <button type="button" class="list-group-item list-group-item-action" href="#">Sair da Conta</button>
        <button type="button" class="list-group-item list-group-item-action" href="#">Excluir Conta</button>
    </div>
</div>
<br><br>

<div class="container text-center">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Requisição</th>
                <th scope="col">Quantidade</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>
                    <div class="row">
                        <div class="col-6"><p>teste</p></div>
                        <div class="col-6">
                            <div class="list-group list-group-horizontal">
                                <button type="button" class="list-group-item list-group-item-action" href="#">Excluir</button>
                                <button type="button" class="list-group-item list-group-item-action" href="#">Editar</button>
                            </div>
                        </div> 
                    </div>    
                </td>
            </tr>
        </tbody>
    </table>
</div>
<br><br>

<div class="container text-center">
    <div class="list-group list-group-horizontal">
        <button type="button" class="list-group-item list-group-item-action" href="#">Excluir todas</button>
        <button type="button" class="list-group-item list-group-item-action" href="#">Adicionar Requisição</button>
        <button type="button" class="list-group-item list-group-item-action" href="#">Requisições Pendentes</button>
        <button type="button" class="list-group-item list-group-item-action" href="#">Doações Recebidas</button>
    </div>
</div>

@endsection 