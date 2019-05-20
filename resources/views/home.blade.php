@extends('layout.template')
@section('titulo','Home')

@section('conteudo')

<div class="container">
    <h1>Doáryo</h1>
</div>

<div class="container">
    <h2>Seja Bem-Vindo ao site Doáryo</h2>
    <h3>Quem você deseja ajudar?</h3>
</div>

<div class="container">
    <div class="row">
        <div class="col-4">
            <a href='#'><img src="{{ asset('imagens/crianca.png') }}" class="col-md-6" alt="crianças"></a>
        </div>

        <div class="col-4">
            <a href='#'><img src="{{ asset('imagens/cachorro.png') }}" class="col-md-6" alt="animais"></a>
        </div>

        <div class="col-4">
            <a href='#'><img src="{{ asset('imagens/idoso.png') }}" class="col-md-6" alt="idosos"></a>
        </div>
    </div>
</div>

@endsection 