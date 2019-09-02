@extends('layout.template')
@section('titulo','Verificar')

@section('conteudo')

<div class="container">
    <h1 class='display-1 text-center'>Verificar</h1>
</div>
<br>

<div class="container text-center">
    @if(!empty($users))
        @foreach($user as $users)
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Usuários</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="row">
                                <div class="col-6"><p>{{$users->name}}</p></div>
                                <div class="col-6">
                                    <div class="list-group list-group-horizontal">
                                        <a class="list-group-item list-group-item-action" href="#">Excluir</a>
                                        <a class="list-group-item list-group-item-action" href="{{ route('editar', $users->id) }}">Editar</a>
                                    </div>
                                </div> 
                            </div>    
                        </td>
                    </tr>
                </tbody>
            </table>

            <a href="{{ url('perfil') }}" class="btn btn-dark">Voltar</a>
        @endforeach
    @else
        <h1>Não há usuários deste tipo</h1>
    @endif
</div>

@endsection 