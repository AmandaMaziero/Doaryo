@extends('layout.template')
@section('titulo','Carrinho Solidário')

@section('conteudo')
<div class="container">
	<h1 class='display-1 text-center'>Cesto Solidário</h1>
</div>
<br>
@if (count($carrinho)== 0)
	<div class="container text-center">
		<h1>Não há nenhum item aqui!</h1>
	</div>
@else
	<div class="container text-center">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th scope="col">Nome</th>
					<th scope="col">Instituição Solicitante</th>
				</tr>
			</thead>
	@foreach($carrinho as $carrinhos)
				<tbody>
					<tr>
						<td><strong>{{$carrinhos->Nome}}</strong></td>
						<td>
							<div class="row">
								<div class="col">
									<p>{{$carrinhos->id}}</p>
								</div>
								<div class="col">
									<a href="{{ route('apagarInd', ['idCarrinho' => $carrinhos->idCarrinho]) }}" class="btn btn-dark">Excluir</a>
								</div>
							</div>
						</td>
					</tr>
				</tbody>
	@endforeach
			</table>
			<br>
			<div class="row">
				<div class="col">
					<a href="{{ route('apagarTodos') }}" class="btn btn-dark">Apagar Todas</a>
				</div>

				<div class="col">
					<a href="{{ route('finalizar') }}" class="btn btn-dark">Finalizar Doação</a>
				</div>
			</div>
		</div>
@endif
@endsection 