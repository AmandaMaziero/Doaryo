@extends('layout.template')
@section('titulo','Perfil')

@section('conteudo')

<div class="container">
    <h1 class='display-1 text-center'>Perfil</h1>
</div>
<br>

<div class="container text-center">

    <div class="list-group list-group-horizontal">
        <a class="list-group-item list-group-item-action btn btn-secondary" href="{{ url('perfil') }}">Requisições Pendentes</a>
        <a class="list-group-item list-group-item-action btn btn-warning" href="{{ route('editar', $id) }}">Editar Perfil</a>
        <a class="list-group-item list-group-item-action btn btn-secondary" href="{{ route('sair')}}">Sair da Conta</a>
        <a class="list-group-item list-group-item-action btn btn-danger" href="{{ route('excluir', $id) }}">Excluir Conta</a>
    </div>
</div>
<br><br>

<div class="container text-center">
    @if(count($req) == 0) 
        <h1>Não há doações recebidas</h1>
    @else
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Requisições Recebidas</th>
                    </tr>
                </thead>
        @foreach($req as $reqs)
                <tbody>
                    <tr>
                        <td>{{$reqs->Nome}}</td>
                    </tr>
                </tbody>
        @endforeach 
            </table>      
    @endif
</div>
<br><br>

<div class="container text-center">
    <div class="list-group list-group-horizontal">
        <a class="list-group-item list-group-item-action btn btn-secondary" href="{{route('cadastro')}}">Adicionar Requisição</a>
        <a class="list-group-item list-group-item-action btn btn-success" href="{{route('recebidas')}}">Doações Recebidas</a>
        <a class="list-group-item list-group-item-action btn btn-warning" href="{{route('aguardo')}}">Requisições em Espera</a>
    </div>
</div>
@endsection 