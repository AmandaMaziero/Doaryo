@extends('layout.template')
@section('titulo','Entrar')

@section('conteudo')

<div class="container">
    <h1 class='display-1 text-center'>Entrar</h1>
</div>

<div class="container text-center">
    <h2>Entre no sistema abaixo:</h2>
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-group">
            <label for="email">{{ __('Email:') }}</label>
            <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Insira seu email..." required autocomplete="email" autofocus>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="password">{{ __('Senha:') }}</label>
            <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Insira sua senha..." required autocomplete="current-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror        
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
            <br><br>
            <button class="btn btn-dark" type="submit">{{ __('Entrar') }}</button>
        </div>
        
    </form>

</div>

@endsection 