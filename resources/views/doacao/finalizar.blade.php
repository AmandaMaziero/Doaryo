@extends('layout.template')
@section('titulo','Finalizar Doação')

@section('conteudo')
<div class="container">
	<h1 class='display-1 text-center'>Finalizar Doação</h1>
</div>
<br>
@if (count($doacao)== 0)
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
	    @foreach($doacao as $doacoes)
				<tbody>
					<tr>
						<td><strong>{{$doacoes->Nome}}</strong></td>
						<td>{{$doacoes->id}}</td>
					</tr>
				</tbody>
	    @endforeach
			</table>
			<br>
            <form action="{{route('confirmar')}}" method="POST">
			@csrf
                <div class="form-group">
                    <label for="concorda">Você deve concordar com os nossos <a href="{{route('termos')}}" target="_blank">Termos e Condições</a> para confirmar esta doação</label>
                    <input type="checkbox" id="concorda" name="concorda">
                </div>

				<div class="row">
					<div class="col">
						<a href="{{route('carrinho')}}" class="btn btn-dark">Voltar</a>
					</div>

					<div class="col">
						<button type="submit" class="btn btn-dark">Confirmar</button>
					</div>
				</div>
				

	</div>
@endif
@endsection 