@extends('layout.template')
@section('titulo','Cadastro')

@section('conteudo')

<div class="container">
    <h1 class='display-1 text-center'>Cadastro</h1>
</div>

<div class="container text-center">
    <h2>Cadastre-se no sistema abaixo:</h2>

    <form>
        <div class="row">  
            <div class="col">
                <div class="form-group">
                    <label>Nome:</label>
                    <input type="text" class="form-control" name="nome">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label>Sobrenome:</label>
                    <input type="text" class="form-control" name="sobrenome">
                </div>
            </div>
        </div>
        <div class="row">  
            <div class="col">
                <div class="form-group">
                    <label>Email:</label>
                    <input type="email" class="form-control" name="email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col">
                <div class="form-group">    
                    <label>Data de Nascimento:</label>
                    <input type="date" class="form-control" name="dataNasc">
                </div>
            </div>
        </div>
        <div class="row">  
            <div class="col">
                <div class="form-group">
                    <label>Senha:</label>
                    <input type="password" class="form-control" name="email">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col">
                <div class="form-group">    
                    <label>Confirme sua Senha:</label>
                    <input type="password" class="form-control" name="senha">
                </div>
            </div>
        </div>
        <div class="form-group">
            <button class="btn btn-light">Cadastrar</button>
        </div>   
    </form>
</div>

@endsection 