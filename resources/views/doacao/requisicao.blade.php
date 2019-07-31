@extends('layout.template')
@section('titulo','Requisição')

@section('conteudo')

<div class="container text-center">
	<h2>Vestido tamanho 12 Infantil</h2>
	<h3>Requerido por: </h3>
</div>

<div class="container text-center">
	<div class="row">
		<div class="col-6">
			<img src="" alt="requisicao">
		</div>
		<div class="col-6">
			<form>
				<div class="form-group">    
					<label>Quantidade</label>
					<input type="number" class="form-control" name="quantidade">
				</div>
				<div class="form-group">
					<button class="btn btn-dark">Cadastrar</button>
				</div> 
			</form>
		</div>

	</div>
</div>

@endsection