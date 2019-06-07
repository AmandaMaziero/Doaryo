@extends('layout.template')
@section('titulo','Doações')

@section('conteudo')

<div class="container">
    <h1 class='display-1 text-center'>Doações</h1>
</div>

<div class="container">
    <div class="row">

        <div class="col-3">
            <div class="container text-left">
                <div class="card" style="width: 15rem;">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a href='#'>Crianças e Adolescentes</a></li>
                        <li class="list-group-item"><a href='#'>Animais</a></li>
                        <li class="list-group-item"><a href='#'>Idosos</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-9">
            <div class="container text-center">
                <div class="row">

                    <div class="col-4">
                        <div class="card" style="width: 15rem;">
                            <img src="{{ asset('imagens/doacao1.jpg') }}" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">Conjunto feminino de todos os tamanhos</h5>
                                <a href="#" class="btn btn-dark">Saber mais...</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="card" style="width: 15rem;">
                            <img src="{{ asset('imagens/doacao2.jpg') }}" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">Conjunto masculino tamanho 6</h5>
                                <a href="#" class="btn btn-dark">Saber mais...</a>
                            </div>
                        </div>
                    </div>


                    <div class="col-4">
                        <div class="card" style="width: 15rem;">
                            <img src="{{ asset('imagens/doacao3.jpg') }}" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">Conjunto masculino tamanho 3</h5>
                                <a href="#" class="btn btn-dark">Saber mais...</a>
                            </div>
                        </div>
                    </div>

                </div>    
            </div>
        </div>

    </div>
</div>

@endsection 