@extends('layout.template')
@section('titulo','Requisição')

@section('conteudo')

<br>
<div class="container text-center">
	@foreach($requisicao as $requi)
	<h2>{{$requi->Nome}}</h2><br>
	<div class="row">
		<div class="col"><h4>Requerido por: {{$requi->name}}</h4></div>
		<div class="col"><h4>{{$requi->Descricao}}</h4></div>
	</div>
</div>
<br>

<div class="container text-center">
	<div class="row">
		<div class="col">
			<img src="{{asset("imagens/$requi->Imagem")}}" alt="{{$requi->Nome}}" style="width:50%;">
		</div>
	@if(auth()->user()->type == "user")
		<div class="col">
			<form action="{{ route('addCarrinho') }}" method="POST">
			@csrf
				<div class="form-group">    
					<input type="hidden" class="form-control" name="idRequisicao" value="{{$requi->idRequisicao}}">
				</div>

				<div class="form-group">
					<button class="btn btn-dark">Adicionar ao Cesto</button>
				</div> 
			</form>
		</div>
	@endif

	</div>
</div>
	@endforeach
@endsection
