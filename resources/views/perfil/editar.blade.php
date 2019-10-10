@extends('layout.template')
@section('titulo','Editar Perfil')

@section('conteudo')

<div class="container text-center">
<h1 class='display-1 text-center'>Editar</h1>
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
    @foreach($user as $users)
        <form method="POST" action="{{ route('atualizarUser') }}">
            @csrf
            <div class="row">  
                <div class="col">
                <input type="hidden" class="form-control" name="id" value="{{ $users->id }}">
                    <div class="form-group">
                        <label for="name">{{ __('Name') }}</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $users->name }}" required autocomplete="name" autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                </div>

                <div class="col">
                    <div class="form-group">
                        <label for="email">{{ __('E-Mail Address') }}</label>
                        <input type="email" class="form-control" name="email" value="{{ $users->email }}">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row">  
                <div class="col">
                    <div class="form-group">
                        <label for="password">{{ __('Password') }}</label>
                        <input type="password" id="password" minlength="8" maxlength="16" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" value="{{ $users->password }}">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">    
                        <label for="password-confirm">{{ __('Confirm Password') }}</label>
                        <input type="password" minlength="8" maxlength="16" class="form-control" name="password_confirmation" required autocomplete="new-password" value="{{ $users->password_confirmation }}">
                    </div>
                </div>
            </div>
            @if($type=="admin")
                <div class="col">
                    <div class="form-group">
                        <label for="type">{{ __('Type') }}</label>
                        <select class="form-control @error('type') is-invalid @enderror" name="type" value="{{ $users->type }}" required autocomplete="type" autofocus>
                            <option selected>Escolha o tipo de usuário</option>
                            <option value="admin">Administrador</option>
                            <option value="inst">Instituição</option>
                            <option value="user">Doador</option>
                        </select>
                        @error('type')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            @else
                <input type="hidden" class="form-control" name="type" value="{{ $users->type }}">
            @endif
            <div class="form-group">
                <a type="submit" class="btn btn-dark" href="{{ url('perfil') }}">Cancelar</a>
                <button type="submit" class="btn btn-danger">{{ __('Editar') }}</button>
            </div>   
        </form>
    @endforeach
</div>

@endsection 