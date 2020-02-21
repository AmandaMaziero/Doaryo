@extends('layout.template')
@section('titulo','Verificar')

@section('conteudo')

<div class="container">
    <h1 class='display-1 text-center'>Verificar</h1>
</div>
<br>

<div class="container text-center">
    @if(count($user) == 0)
        <h1>Não há usuários deste tipo</h1>
    @else
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Tipo de Usuário</th>
                </tr>
            </thead>
            <tbody>
                @foreach($user as $users)
                    <tr>
                        <td><p>{{$users->name}}</p></td>
                        <td><p>{{$users->email}}</p></td> 
                        <td>
                            <div class="row">
                                <div class="col">
                                    <p>{{$users->type}}</p>
                                </div>
                                <div class="col">
                                    <a href="{{ route('alterarTipo', ['id' => $users->id]) }}" class="btn btn-dark">Alterar tipo de Usuário</a>
                                </div>
                            </div>
                        </td>      
                    </tr>
                @endforeach
            </tbody>
        </table>
            
    @endif
    <a href="{{ url('perfil') }}" class="btn btn-dark">Voltar</a>
</div>

@endsection 