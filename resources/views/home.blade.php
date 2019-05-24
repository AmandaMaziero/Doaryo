@extends('layout.template')
@section('titulo','Home')

@section('conteudo')

<div class="container">
    <h1 class="display-1 text-center">Doáryo</h1>
</div>

<div class="container text-center">
    <h2>Seja Bem-Vindo ao site Doáryo</h2>
    <h3>Quem você deseja ajudar?</h3>
</div>

<div class="container text-center">
    <div class="row">
        <div class="col-4">
            <a href='#'><img src="{{ asset('imagens/crianca.png') }}" class="col-md-6 img-fluid" alt="crianças"></a>
        </div>

        <div class="col-4">
            <a href='#'><img src="{{ asset('imagens/cachorro.png') }}" class="col-md-6 img-fluid" alt="animais"></a>
        </div>

        <div class="col-4">
            <a href='#'><img src="{{ asset('imagens/idoso.png') }}" class="col-md-6 img-fluid" alt="idosos"></a>
        </div>
    </div>
</div>

@endsection 