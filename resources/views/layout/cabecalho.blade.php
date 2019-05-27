<header>
    <nav class="navbar navbar-light" style="background-color: #D484E8;">
  <a class="navbar-brand" href="/"><img src="{{ asset('imagens/logo_transparent.png') }}" class="col-md-6 img-fluid" alt="logo"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
        <a class="nav-link" href="{{ asset('/') }}">Página Inicial<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
        <a class="nav-link" href="{{ asset('doacao') }}">O que posso doar?</a>
        </li>
        <li class="nav-item active">
        <a class="nav-link" href="{{ asset('instituicoes') }}">Instituições Parceiras</a>
        </li>
        <li class="nav-item active">
        <a class="nav-link" href="{{ asset('contato') }}">Contato</a>
        </li>
        <li class="nav-item active">
        <a class="nav-link" href="{{ asset('sobrenos') }}">Sobre Nós</a>
        </li>
        <li class="nav-item active">
        <a class="nav-link" href="{{ asset('login') }}">Entrar</a>
        </li>
    
    <form class="form-inline my-2 my-lg-0">
      <div class="form-group">
        <input class="form-control mr-sm-2" type="search" placeholder="Digite aqui..." aria-label="Search">
        <button class="btn btn-light my-2 my-sm-0" type="submit">Pesquisar</button>
      </div>
    </form>
</div>
    </nav>
</header>

