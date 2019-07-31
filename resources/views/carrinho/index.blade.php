@extends('layout.template')
@section('titulo','Carrinho Solidário')

@section('conteudo')
<div class="container">
	<h1 class='display-1 text-center'>Carrinho Solidário</h1>
</div>
<br>

<div class="container text-center">
	<table class="table table-bordered">
		<thead>
			<tr>
				<th scope="col">Imagem</th>
				<th scope="col">Descrição</th>
				<th scope="col">Quantidade</th>
				<th scope="col">Instituição Solicitante</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>1</td>
				<td><strong>2</strong></td>
				<td>
					<form>
						<div class="form-group">
							<input type="number" name="quantdade" class="form-control">
						</div>
					</form>
				</td>
				<td>4</td>
			</tr>
		</tbody>
	</table>
	<br>
	<div class="row">
		<div class="col-6">
			<button class="btn btn-dark my-2 my-sm-0" type="submit">Apagar Todas</button>
		</div>

		<div class="col-6">
			<button class="btn btn-dark my-2 my-sm-0" type="submit">Finalizar Doação</button>
		</div>
	</div>
</div>

@endsection 