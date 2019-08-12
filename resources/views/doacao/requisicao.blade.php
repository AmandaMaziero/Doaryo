@extends('layout.template')
@section('titulo','Requisição')

@section('conteudo')

<br>
<div class="container text-center">
	<h2>Vestido tamanho 12 Infantil</h2>
	<h3>Requerido por: </h3>
</div>
<br>

<div class="container text-center">
	<div class="row">
		<div class="col">
			<img src="{{ asset('imagens/doacao1.jpg') }}" alt="requisicao" style="width:100%;">
		</div>
		<div class="col">
			<form>
				<div class="form-group">    
					<label>Quantidade</label>
					<input type="number" class="form-control" name="quantidade">
				</div>
				<div class="form-group">
					<button class="btn btn-dark">Adicionar ao Carrinho</button>
				</div> 
			</form>
		</div>

	</div>
</div>

@endsection