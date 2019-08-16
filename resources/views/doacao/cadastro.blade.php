@extends('layout.template')
@section('titulo','Cadastro de Doações')

@section('conteudo')

<div class="container">
	<h1 class='display-1 text-center'>Cadastro de Requisições</h1>
</div>

<div class="container text-center">
	<h2>Cadastre suas requisições abaixo:</h2>
<br>
<?php
$action = route('adicionar');
?>
	<form action="{{ $action }}" method="POST">
	  @csrf
		<div class="row">  
			<div class="col">
				<div class="form-group">
					<label for="nome">Nome:</label>
					<input type="text" class="form-control" name="nome">
				</div>
			</div>

			<div class="col">
				<div class="form-group">
					<label for="imagem">Imagem</label>
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
					<label for="quantidade">Quantidade</label>
					<input type="number" class="form-control" name="quantidade">
				</div>
			</div>
  
			<div class="col">
				<div class="form-group">
					<label for="descricao">Descrição:</label>
					<input type="text" class="form-control" name="descricao">
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
		<button class="btn btn-dark" type="submit">Cadastrar</button>
	</form>
</div>

@endsection
