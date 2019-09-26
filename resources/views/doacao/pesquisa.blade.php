@extends('layout.template')
@section('titulo','Doações')

@section('conteudo')

<div class="container">
    <h1 class='display-1 text-center'>Doações</h1>
</div>

<div class="container text-center">
    <div class="row">
        @if(count($search)==0)
            <div class="col-md-12 text-center">
				<h1>Não há resultados correspondentes ao que foi pesquisado</h1>
			</div>
        @else
            @foreach ($search as $searchs)
                <div class="col-4 p-2">
                    <div class="card" style="width: 15rem;">
                        <img src="{{ asset('imagens/{$requi->Categoria}') }}" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">{{$search->Nome}}</h5>
                            <a href="{{ route('requisicao', ['idRequisicao' => $search->idRequisicao]) }}" class="btn btn-dark">Saber mais...</a>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>    
</div>
@endsection