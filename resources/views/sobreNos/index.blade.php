@extends('layout.template')
@section('titulo','Sobre Nós')

@section('conteudo')

<div class="container">
    <h1 class='display-1 text-center'>Sobre Nós</h1>
</div>

<div class="container">
    <p class="lead text-justify">Somos alunos do Instituto Federal de Ciência, Educação e Tecnologia do Estado de São Paulo - campus Itapetininga, e estamos fazendo esse site em meio a disciplina de Projeto Integrador. Analisando possíveis temas para o nosso projeto pensamos em realizar um site que ajudasse as variadas instituições benefientes e automizar a maneira cujo as pessoas realizam doações em nossa cidade.</p>
</div>

<div class="container text-center">
    <h2>Criadores:</h2>
    <br>
    <div class="row">
        <div class="col-3">
            <div class="card" style="width: 16rem;">
                <img src="{{ asset('imagens/amanda.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Amanda Aparecida Julio Maziero</h5>
                </div>
            </div>
        </div>

        <div class="col-3">
            <div class="card" style="width: 16rem;">
                <img src="{{ asset('imagens/jullia.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Ana Jullia Silvério de Pontes</h5>
                </div>
            </div>
        </div>

        <div class="col-3">
            <div class="card" style="width: 16rem;">
                <img src="{{ asset('imagens/rafael.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Rafael Leandro Damiam dos Santos</h5>
                </div>
            </div>
        </div>

        <div class="col-3">
            <div class="card" style="width: 16rem;">
                <img src="{{ asset('imagens/rafaela.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Rafaela Toro de Oliveira Barbiere</h5>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection 
