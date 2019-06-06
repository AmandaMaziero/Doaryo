@extends('layout.template')
@section('titulo','Contato')

@section('conteudo')
<div class="container">
    <h1 class='display-1 text-center'>Contato</h1>
</div>

<div class="container text-center">
    <h2>Em caso de dúvidas, críticas ou sugestões entre em contato conosco</h2>

    <form>
        <div class="form-group">
            <label>Email:</label>
            <input type="text" class="form-control" name="email">
        </div>

        <div class="form-group">
            <label>Mensagem:</label>
            <textarea class="form-control" name="msg" cols="16" rows="5"></textarea>
        </div>

        <div class="form-group">
            <button class="btn btn-dark">Enviar</button>
        </div>   

    </form>
</div>

@endsection 