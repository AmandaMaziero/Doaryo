@extends('layout.template')
@section('titulo','Carrinho Solidário')

@section('conteudo')
<div class="container">
	<h1 class='display-1 text-center'>Carrinho Solidário</h1>
</div>
<br>
@if (empty($carrinho))
	<div class="container text-center">
		<h1>Não há nenhum item aqui!</h1>
	</div>
@else
	@foreach($carrinhos as $carrinho)
		<div class="container text-center">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th scope="col">Nome</th>
						<th scope="col">Quantidade</th>
						<th scope="col">Instituição Solicitante</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><strong>{{$carrinho->Nome}}</strong></td>
						<td>
							<form action="{{route('addCarrinho')}}" method="POST">
							@csrf
								<div class="form-group">
									<input type="number" name="quantdade" class="form-control" value="{{$carrinhos->Quantidade}}">
								</div>
							</form>
						</td>
						<td>{{$carrinho->id}}</td>
					</tr>
				</tbody>
			</table>
			<br>
			<div class="row">
				<div class="col-6">
					<a href="#" class="btn btn-dark my-2 my-sm-0" type="submit">Apagar Todas</a>
				</div>

				<div class="col-6">
					<a href="#" class="btn btn-dark my-2 my-sm-0" type="submit">Finalizar Doação</a>
				</div>
			</div>
		</div>
	@endforeach
@endif
@endsection 