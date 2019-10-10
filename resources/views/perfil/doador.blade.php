@extends('layout.template')
@section('titulo','Perfil')

@section('conteudo')

<div class="container">
    <h1 class='display-1 text-center'>Perfil</h1>
</div>
<br>
<div class="container text-center">
    <div class="list-group list-group-horizontal">
        <a class="list-group-item list-group-item-action btn btn-secondary" href="{{ url('perfil') }}">Doações</a>
        <a class="list-group-item list-group-item-action btn btn-warning" href="{{ route('editar', $id) }}">Editar Perfil</a>
        <a class="list-group-item list-group-item-action btn btn-secondary" href="{{ route('sair')}}">Sair da Conta</a>
        <a class="list-group-item list-group-item-action btn btn-danger" href="{{ route('excluir', $id) }}">Excluir Conta</a>
    </div>
</div>
<br><br>

<div class="container text-center">
    @if(!count($doa) == 0)
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Produto Doado</th>
                    <th scope="col">Instituição</th>
                    <th scope="col">Data</th>
                    <th scope="col">Confirmação</th>
                </tr>
            </thead>
            <tbody>
                @foreach($doa as $doas)
                <tr>
                    <td>{{$doas->Nome}}</td>
                    <td>{{$doas->name}}</td>
                    <td>{{$doas->dataDoacao}}</td>
                    <td>{{$doas->Status}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <h1>Você não realizou nenhuma doação!!!</h1>
    @endif
</div>

@endsection 