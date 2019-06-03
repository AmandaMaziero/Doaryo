@extends('layout.template')
@section('titulo','Entrar')

@section('conteudo')

<div class="container">
    <h1 class='display-1 text-center'>Entrar</h1>
</div>

<div class="container text-center">
    <h2>Entre no sistema abaixo:</h2>
    <form>
        <div class="form-group">
            <label>Email:</label>
            <input type="text" class="form-control" name="email" placeholder="Insira seu email...">
        </div>
        <div class="form-group">
            <label>Senha:</label>
            <input type="text" class="form-control" name="senha" placeholder="Insira sua senha...">
        </div>
        <div class="form-group row">
            <div class="container text-center">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="remember">
                        {{ __('Lembre-me ') }}
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <a href="{{ asset('register') }}" class="text-decoration-none">Não possui uma conta? Cadastre-se agora!</a>
        </div>
        <div class="form-group">
            @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Esqueceu a senha? Clique aqui para recuperar.') }}
                </a>
            @endif
        </div>
            <button class="btn btn-light">Entrar</button>
        
    </form>

</div>

@endsection 