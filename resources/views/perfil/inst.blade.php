@extends('layout.template')
@section('titulo','Perfil')

@section('conteudo')

<div class="container">
    <h1 class='display-1 text-center'>Perfil</h1>
</div>
<br>

<div class="container text-center">

    <div class="list-group list-group-horizontal">
        <a class="list-group-item list-group-item-action" href="{{ url('perfil') }}">Requisições</a>
        <a class="list-group-item list-group-item-action" href="{{ route('editar', $id) }}">Editar Perfil</a>
        <a class="list-group-item list-group-item-action" href="{{ route('sair')}}">Sair da Conta</a>
        <a class="list-group-item list-group-item-action" href="{{ route('excluir', $id) }}">Excluir Conta</a>
    </div>
</div>
<br><br>

<div class="container text-center">
    @if(!isset($req)) 
        <h1>Não há requisições solicitadas</h1>
    @else
        @foreach($req as $reqs)
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Requisição</th>
                        <th scope="col">Quantidade</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$reqs->Nome}}</td>
                        <td>
                            <div class="row">
                                <div class="col-6"><p>{{$reqs->Quantidade}}</p></div>
                                <div class="col-6">
                                    <div class="list-group list-group-horizontal">
                                        <a class="list-group-item list-group-item-action" href="#">Excluir</a>
                                        <a class="list-group-item list-group-item-action" href="{{ route('editarRequi', ['idRequisicao' => $reqs->idRequisicao]) }}">Editar</a>
                                    </div>
                                </div> 
                            </div>    
                        </td>
                    </tr>
                </tbody>
            </table>
        @endforeach       
    @endif
</div>
<br><br>

<div class="container text-center">
    <div class="list-group list-group-horizontal">
        <a class="list-group-item list-group-item-action" href="#">Excluir todas</a>
        <a class="list-group-item list-group-item-action" href="{{route('cadastro')}}">Adicionar Requisição</a>
        <!---<a class="list-group-item list-group-item-action" href="#">Requisições Pendentes</a>-->
        <a class="list-group-item list-group-item-action" href="#">Doações Recebidas</a>
    </div>
</div>
@endsection 