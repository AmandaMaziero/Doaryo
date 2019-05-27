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
        <div class="form-group">
            <a href="{{ asset('cadastro') }}" class="text-decoration-none">Não possui uma conta? Cadastre-se agora!</a>
        </div>
        <div class="form-group">
            <a href="#" class="text-decoration-none">Esqueceu a senha? Clique aqui para recuperar.</a>
        </div>
            <button class="btn btn-light">Entrar</button>
        
    </form>
</div>

@endsection 