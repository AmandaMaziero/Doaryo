@extends('layout.template')
@section('titulo','Requisição')

@section('conteudo')

<br>
<div class="container text-center">
	@foreach($requisicao as $requi)
	<h2>{{$requi->Nome}}</h2>
	<h3>Requerido por: {{$requi->id}}</h3>
</div>
<br>

<div class="container text-center">
	<div class="row">
		<div class="col">
			<img src="{{ asset('imagens/{$requisicao->Imagem}') }}" alt="{{$requi->Nome}}" style="width:100%;">
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

			<a href="{{ asset('doacao/editar') }}" class="btn btn-dark">Editar</a>
		</div>

	</div>
</div>
@endforeach
@endsection