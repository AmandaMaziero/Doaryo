@extends('layout.template')
@section('titulo','Editar Perfil')

@section('conteudo')

<div class="container text-center">
<h1 class='display-1 text-center'>Editar</h1>
<h2 class='text-center'>Edite as informações sobre a sua instituição abaixo:</h2>
</div>
<br>
<div class="container text-center">
    <div class="list-group list-group-horizontal">
        @if($type == "admin")
            <a class="list-group-item list-group-item-action btn btn-secondary" href="{{ url('perfil') }}">Verificar</a>
        @elseif($type == "user")
            <a class="list-group-item list-group-item-action btn btn-secondary" href="{{ url('perfil') }}">Doações</a>
        @else
            <a class="list-group-item list-group-item-action btn btn-secondary" href="{{ url('perfil') }}">Requisições</a>
        @endif
        <a class="list-group-item list-group-item-action btn btn-warning" href="{{ route('editar', $id) }}">Editar Perfil</a>
        <a class="list-group-item list-group-item-action btn btn-secondary" href="{{ route('sair')}}">Sair da Conta</a>
        <a class="list-group-item list-group-item-action btn btn-danger" href="{{ route('excluir', $id) }}">Excluir Conta</a>
    </div>
</div>
<br><br>

<div class="container text-center">
    <form method="POST" action="{{ route('atualizarinfo') }}">
        @csrf
        <div class="row">  
            <div class="col">
                <div class="form-group">
                    <label for="localizacao">Endereço:</label>
                    <input id="localizacao" type="text" class="form-control" name="localizacao">
                </div>
            </div>

            <div class="col">
                <div class="form-group">
                    <label for="fundacao">Fundada em:</label>
                    <input type="fundacao" class="form-control" name="fundacao">
                </div>
            </div>

            <div class="col">
                <div class="form-group">
                    <label for="acaosocial">Área que atua:</label>
                    <input type="acaosocial" class="form-control" name="acaosocial">
                </div>
            </div>  
        </div>

        <div class="form-group welcome-left d-flex align-items-center justify-content-center align-self-center">
            <label for="imagem"><p class="text-center"><img class="icon" src="{{ asset('imagens/upload.svg') }}" width="30%" ></p></label>
            <input type="file" class="form-control" name="imagem" id="imagem">
        </div>
            
        <div class="form-group">
            <a type="submit" class="btn btn-dark" href="{{ url('perfil') }}">Cancelar</a>
            <button type="submit" class="btn btn-danger">{{ __('Editar') }}</button>
        </div>   
    </form>
</div>

@endsection 