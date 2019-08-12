@extends('layout.template')
@section('titulo','Editar Perfil')

@section('conteudo')

<div class="container">
    <h1 class='display-1 text-center'>{{ __('Editar Perfil') }}</h1>
</div>

<div class="container text-center">
    <h2>Edite seus dados abaixo:</h2>

    <form method="POST" action="{{ route('editar') }}">
        @csrf
        <div class="row">  
            <div class="col">

                <div class="form-group">
                    <label for="name">{{ __('Name') }}</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
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
                    <input type="email" class="form-control" name="email">
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
                    <input type="password" id="password" minlength="8" maxlength="16" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            @if (Route::has('login'))
                @auth
                    <div class="col">
                        <div class="form-group">
                            <label for="password">{{ __('Type') }}</label>
                            <input type="password" id="password" minlength="8" maxlength="16" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            @error('Type')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                @endauth
            @endif
    </div>
        <div class="form-group">
             <button type="submit" class="btn btn-dark">{{ __('Editar') }}</button>
        </div>   
    </form>
</div>

@endsection 