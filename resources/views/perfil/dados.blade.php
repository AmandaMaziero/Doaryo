@extends('layout.template')
@section('titulo','Verificar')

@section('conteudo')

<div class="container">
    <h1 class='display-1 text-center'>Verificar</h1>
</div>
<br>

<div class="container text-center">
    @foreach($user as $users)
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Email</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div class="row">
                            <div class="col-6"><p>{{$user->Email}}</p></div>
                            <div class="col-6">
                                <div class="list-group list-group-horizontal">
                                    <button type="button" class="list-group-item list-group-item-action" href="">Excluir</button>
                                    <button type="button" class="list-group-item list-group-item-action" href="{{ route('editar', $user->id) }}">Editar</button>
                                </div>
                            </div> 
                        </div>    
                    </td>
                </tr>
            </tbody>
        </table>
    @endforeach
</div>

@endsection 