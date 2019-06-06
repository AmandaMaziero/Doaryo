@extends('layout.template')
@section('titulo','Doações')

@section('conteudo')

<div class="container">
    <h1 class='display-1 text-center'>Doações</h1>
</div>

<div class="container text-center">
    <form class="form-inline my-2 my-lg-0">
        <div class="form-group">
            <input class="form-control mr-sm-2 form-control-lg" type="search" placeholder="Digite aqui..." aria-label="Search">
            <button class="btn btn-dark my-2 btn-lg" type="submit">Pesquisar</button>
        </div>
    </form>
</div>

<div class="container text-center">
    <div class="row">
        <div class="col-6">
            <div class="card" style="width: 18rem;">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href='#'>Crianças e Adolescentes</a></li>
                    <li class="list-group-item"><a href='#'>Animais</a></li>
                    <li class="list-group-item"><a href='#'>Idosos</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection 