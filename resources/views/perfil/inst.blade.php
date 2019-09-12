@extends('layout.template')
@section('titulo','Perfil')

@section('conteudo')

<div class="container">
    <h1 class='display-1 text-center'>Perfil</h1>
</div>
<br>

<div class="container text-center">

    <div class="list-group list-group-horizontal">
        <a class="list-group-item list-group-item-action" href="{{ url('perfil') }}">Requisições Pendentes</a>
        <a class="list-group-item list-group-item-action" href="{{ route('editar', $id) }}">Editar Perfil</a>
        <a class="list-group-item list-group-item-action" href="{{ route('sair')}}">Sair da Conta</a>
        <a class="list-group-item list-group-item-action" href="{{ route('excluir', $id) }}">Excluir Conta</a>
    </div>
</div>
<br><br>

<div class="container text-center">
    @if(count($req) == 0) 
        <h1>Não há requisições solicitadas</h1>
    @else
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Requisição</th>
                        <th scope="col">Quantidade</th>
                    </tr>
                </thead>
        @foreach($req as $reqs)
                <tbody>
                    <tr>
                        <td>{{$reqs->Nome}}</td>
                        <td>
                            <div class="row">
                                <div class="col-6"><p>{{$reqs->Quantidade}}</p></div>
                                <div class="col-6">
                                    <div class="list-group list-group-horizontal">
                                        <a class="list-group-item list-group-item-action" href="{{ route('removerUm', ['idRequisicao' => $reqs->idRequisicao]) }}">Excluir</a>
                                        <a class="list-group-item list-group-item-action" href="{{ route('editarRequi', ['idRequisicao' => $reqs->idRequisicao]) }}">Editar</a>
                                    </div>
                                </div> 
                            </div>    
                        </td>
                    </tr>
                </tbody>
        @endforeach 
            </table>      
    @endif
</div>
<br><br>

<div class="container text-center">
    <div class="list-group list-group-horizontal">
        @if(count($req)!= 0)<a class="list-group-item list-group-item-action" href="{{route('removerTodos')}}">Excluir todas</a>@endif
        <a class="list-group-item list-group-item-action" href="{{route('cadastro')}}">Adicionar Requisição</a>
        <a class="list-group-item list-group-item-action" href="{{route('recebidas')}}">Doações Recebidas</a>
    </div>
</div>
@endsection 