@extends('layout.template')
@section('titulo','Recuperar Senha')

@section('conteudo')

<div class="conatiner text-center">
    <h1 class="display-1 text-center">Recuperar Senha</h1>
</div>

<div class="container text-center">
    <h2>{{ __('Digite seus dados para recuperar a senha') }}</h2>
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <div class="form-group">
            <label for="email">{{ __('Email:') }}</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-dark">
                {{ __('Enviar') }}
            </button>
        </div>
    </form>

</div>
@endsection
