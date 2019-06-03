@extends('layout.template')
@section('titulo','Instituições')

@section('conteudo')
<div class="container">
    <h1 class='display-1 text-center'>Instituições Parceiras</h1>
</div>

<div class="container text-center">
    <div class="row">
        <div class="col-3">
            <a href='#'><img src="{{ asset('imagens/crianca.png') }}" class="col-9 img-fluid" alt="Criança Feliz"></a>
        </div>

        <div class="col-3">
            <a href='#'><img src="{{ asset('imagens/cachorro.png') }}" class="col-9 img-fluid" alt="Animais e cia"></a>
        </div>

        <div class="col-3">
            <a href='#'><img src="{{ asset('imagens/idoso.png') }}" class="col-9 img-fluid" alt="Lar dos Amores"></a>
        </div>

        <div class="col-3">
            <a href='#'><img src="{{ asset('imagens/idoso.png') }}" class="col-9 img-fluid" alt="Cantinho da Lua"></a>
        </div>
        
    </div>
</div>

@endsection 