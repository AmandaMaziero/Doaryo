@extends('layout.template')
@section('titulo','Doações')

@section('conteudo')

<div class="container">
    <h1 class='display-1 text-center'>Doações</h1>
</div>

<div class="container text-left">
    <div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Categorias
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="#">Crianças</a>
        <a class="dropdown-item" href="#">Animais</a>
        <a class="dropdown-item" href="#">Idosos</a>
    </div>
    </div>
</div>
<br><br>

<div class="container">
    <div class="row">

        <div class="col">
            <div class="container text-center">
                <div class="row">

                    <div class="col">
                        <div class="card" style="width: 15rem;">
                            <img src="{{ asset('imagens/doacao1.jpg') }}" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">Conjunto feminino de todos os tamanhos</h5>
                                <a href="{{ asset('doacao/requisicao') }}" class="btn btn-dark">Saber mais...</a>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
        </div>

    </div>
</div>

@endsection