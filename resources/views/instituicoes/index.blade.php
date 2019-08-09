@extends('layout.template')
@section('titulo','Parceiras')

@section('conteudo')
<div class="container">
    <h1 class='display-1 text-center'>Instituições Parceiras</h1>
</div>

<div class="container text-center">
    <div class="row">
        <div class="col-3">
            <a href='#CriancaFeliz' data-toggle="collapse" role="button" aria-expanded="false" aria-controls="CriancaFeliz"><img src="{{ asset('imagens/CriancaFeliz1.png') }}" class="img-fluid" alt="Criança Feliz"></a>
        </div>

        <div class="col-3">
            <a href='#AnimaisCia' data-toggle="collapse" role="button" aria-expanded="false" aria-controls="AnimaisCia"><img src="{{ asset('imagens/AnimaisCia1.png') }}" class="img-fluid" alt="Animais e cia"></a>
        </div>

        <div class="col-3">
            <a href='#LarAmores' data-toggle="collapse" role="button" aria-expanded="false" aria-controls="LarAmores"><img src="{{ asset('imagens/LarAmores1.png') }}" class="img-fluid" alt="Lar dos Amores"></a>
        </div>

        <div class="col-3">
            <a href='#CantinhoLua' data-toggle="collapse" role="button" aria-expanded="false" aria-controls="CantinhoLua"><img src="{{ asset('imagens/CantinhoLua1.png') }}" class="img-fluid" alt="Cantinho da Lua"></a>
        </div> 

    </div>
</div>

<br><br>
<div id="CriancaFeliz" class="collapse">
    <div class="container text-center">
        <h2 id="CriancaFeliz">Criança Feliz</h2>
        <p class="lead text-justify">É uma instituição localizada em x, fundada por y em 1900 e bolinha. Trabalha com crianças e adolescentes.</p>
    </div>
</div>

<div id="AnimaisCia" class="collapse">
    <div class="container text-center">
        <h2 id="AnimaisCia">Animais e Cia</h2>
        <p class="lead text-justify">É uma instituição localizada em x, fundada por y em 1900 e bolinha. Trabalha com cachorros e gatos.</p>
    </div>
</div>

<div id="LarAmores" class="collapse">
    <div class="container text-center">
        <h2 id="LarAmores">Lar dos Amores</h2>
        <p class="lead text-justify">É uma instituição localizada em x, fundada por y em 1900 e bolinha. Trabalha com idosos.</p>
    </div>
</div>

<div id="CantinhoLua" class="collapse">
    <div class="container text-center">
        <h2 id="CantinhoLua">Cantinho da Lua</h2>
        <p class="lead text-justify">É uma instituição localizada em x, fundada por y em 1900 e bolinha. Trabalha com crianças e adolescentes.</p>
    </div>
</div>

@endsection 