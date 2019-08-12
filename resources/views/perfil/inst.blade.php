@extends('layout.template')
@section('titulo','Perfil')

@section('conteudo')

<div class="container">
    <h1 class='display-1 text-center'>Perfil</h1>
</div>
<br>

<div class="container text-center">

    <div class="list-group list-group-horizontal">
        <a class="list-group-item list-group-item-action" href="#">Requisições</a>
        <a class="list-group-item list-group-item-action" href="{{ asset('perfil/editar') }}">Editar Perfil</a>
        <a class="list-group-item list-group-item-action" href="{{ route('logout')}}">Sair da Conta</a>
        <a class="list-group-item list-group-item-action" href="#">Excluir Conta</a>
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
        <a class="list-group-item list-group-item-action" href="#">Excluir todas</a>
        <a class="list-group-item list-group-item-action" href="#">Adicionar Requisição</a>
        <a class="list-group-item list-group-item-action" href="#">Requisições Pendentes</a>
        <a class="list-group-item list-group-item-action" href="#">Doações Recebidas</a>
    </div>
</div>

@endsection 