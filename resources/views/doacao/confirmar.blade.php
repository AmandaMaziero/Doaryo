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
            <form action="" method="POST">
                <div class="form-group">
                    <label for="scales">Você concorda com os nossos <a href="#">Termos e Condições</a></label>
                    <input type="checkbox" id="scales" name="scales" checked>
                </div>
                <a href="#" class="btn btn-dark">Confirmar</a>

	</div>
@endif
@endsection 