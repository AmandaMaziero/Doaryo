@extends('layout.template')
@section('titulo','Cadastro de Doações')

@section('conteudo')

<div class="container">
	<h1 class='display-1 text-center'>Cadastro de Requisições</h1>
</div>

<div class="container text-center">
	<h2>Cadastre suas requisições abaixo:</h2>

	<form>
		<div class="row">  
			<div class="col">
				<div class="form-group">
					<label>Nome:</label>
					<input type="text" class="form-control" name="nome">
				</div>
			</div>
		</div>
		<div class="row">  
			<div class="col">
				<div class="form-group">
					<label>Imagem</label>
					<select class="form-control">
						<option selected>Escolha de acordo com a sua requisição...</option>
						<option id="roupas">Roupas</option>
						<option id="sapatos">Sapatos</option>
						<option id="alimentos">Alimentos não perecíveis</option>
						<option id="brinquedos">Brinquedos</option>
						<option id="racoes">Rações</option>
						<option id="utensilios">Utensílios de animais no geral</option>
					</select>
				</div>
			</div>
			<div class="col">
				<div class="form-group">    
					<label>Quantidade</label>
					<input type="number" class="form-control" name="quantidade">
				</div>
			</div>
		</div>
		<div class="row">  
			<div class="col">
				<div class="form-group">
					<label>Descrição:</label>
					<input type="text" class="form-control" name="descricao">
				</div>
			</div>
		</div>
		<div class="form-group">
			<button class="btn btn-dark">Cadastrar</button>
		</div>   
	</form>
</div>

@endsection