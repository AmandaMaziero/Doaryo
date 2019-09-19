@extends('layout.template')
@section('titulo','Home')

@section('conteudo')

<div class="container">
    <h1 class="display-1 text-center">Doáryo</h1>
</div>
<br>
<div class="container text-center">
    @if(session()->has('sucesso'))
			<div class="alert alert-success col-12">
				{{ session()->get('sucesso') }}
			</div>
	@endif
    <h2>Seja Bem-Vindo ao site Doáryo</h2>
    <h3>Quem você deseja ajudar?</h3>
</div>
<br>
<div class="container text-center">
    <div class="row">
        <div class="col-4">
            <a href="{{ route('categoria', 'criancas_adolescentes') }}"> <i class="large material-icons" style="font-size:115px; color:black;">child_care</i></a>
            <br>
            <p>Crianças</p>
        </div>

        <div class="col-4">
            <a href="{{ route('categoria', 'animais') }}"><i class="large material-icons" style="font-size:115px; color:black;">pets</i></a>
            <br>
            <p>Animais</p>
        </div>

        <div class="col-4">
            <a href="{{ route('categoria', 'idosos') }}"><i class="large material-icons" style="font-size:115px; color:black;">wc</i></a>
            <br>
            <p>Idosos</p>
        </div>
    </div>
</div>

@endsection 