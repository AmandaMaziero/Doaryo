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
        <a class="dropdown-item" href="{{ route('categoria', 'criancas_adolescentes') }}" value="criancas_adolescentes">Crianças e Adolescentes</a>
        <a class="dropdown-item" href="{{ route('categoria', 'animais') }}" value="animais">Animais</a>
        <a class="dropdown-item" href="{{ route('categoria', 'idosos') }}" value="idosos">Idosos</a>
    </div>
    </div>
</div>
<br><br>

<div class="container">
    <div class="row">

        <div class="col">
            <div class="container text-center">
                <div class="row">
                @foreach ($categoria as $cate)
                    <div class="col">
                        <div class="card" style="width: 15rem;">
                            <img src="{{ asset('imagens/{$cate->Categoria}') }}" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">{{$cate->Nome}}</h5>
                                <a href="{{ route('requisicao', ['idRequisicao' => $cate->idRequisicao]) }}" class="btn btn-dark">Saber mais...</a>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
        </div>

    </div>
</div>
@endforeach
@endsection