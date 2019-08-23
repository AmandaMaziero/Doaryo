@extends('layout.template')
@section('titulo','Editar Doações')

@section('conteudo')

<div class="container">
	<h1 class='display-1 text-center'>Editar Requisições</h1>
</div>

<div class="container text-center">
	<h2>Edite sua requisição abaixo:</h2>
<br>

<?php
$action = route('atualizar');
?>

@foreach($requisicao as $requi)
	<form action="{{ $action }}" method="POST">
	@csrf
	<input type="hidden" class="form-control" name="idRequisicao" value="{{$requi->idRequisicao}}">
		<div class="row">  
			<div class="col">
				<div class="form-group">
					<label>Nome:</label>
					<input type="text" class="form-control" name="nome" value="{{$requi->Nome}}">
				</div>
			</div>

			<div class="col">
				<div class="form-group">
					<label>Imagem</label>
					<select class="form-control" name="imagem">
						<option selected>Escolha de acordo com a sua requisição...</option>
						<option value="roupas">Roupas</option>
						<option value="sapatos">Sapatos</option>
						<option value="alimentos">Alimentos não perecíveis</option>
						<option value="brinquedos">Brinquedos</option>
						<option value="racoes">Rações</option>
						<option value="utensilios">Utensílios de animais no geral</option>
					</select>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col">
				<div class="form-group">    
					<label>Quantidade</label>
					<input type="number" class="form-control" name="quantidade" value="{{$requi->Quantidade}}">
				</div>
			</div>
  
			<div class="col">
				<div class="form-group">
					<label>Descrição:</label>
					<input type="text" class="form-control" name="descricao" value="{{$requi->Descricao}}">
				</div>
			</div>

			<div class="col">
				<div class="form-group">
					<label for="categoria">Categoria</label>
					<select class="form-control" name="categoria">
						<option selected>Escolha de acordo com a sua requisição...</option>
						<option value="animais">Animais</option>
						<option value="criancas_adolescentes">Crianças e Adolescentes</option>
						<option value="idosos">Idosos</option>
					</select>
				</div>
			</div>
		</div>
<br>
		<div class="form-group">
			<button class="btn btn-dark">Editar</button>
		</div>   
	</form>
</div>
	@endforeach
@endsection