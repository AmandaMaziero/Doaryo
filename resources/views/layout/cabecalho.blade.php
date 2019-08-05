<header>
  <nav class="navbar navbar-expand-md navbar-light shadow-sm" style="background-color: #D484E8;">
  <div class="container">
      <a class="navbar-brand" href="/"><img src="{{ asset('imagens/Doaryo.svg') }}" class="col-md-6 img-fluid" alt="logo"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{ asset('doacao') }}">Doações</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{ asset('instituicoes') }}">Parceiras</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{ asset('contato') }}">Contato</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{ asset('sobrenos') }}">Sobre Nós</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{ asset('login') }}">Entrar</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{ asset('perfil') }}">Perfil</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{ asset('carrinho') }}">Carrinho Solidário</a>
            </li>
        </ul>
        
      <ul class="navbar-nav ml-auto">
        <form class="form-inline my-2 my-lg-0">
          <div class="form-group">
            <input class="form-control mr-sm-2" type="search" placeholder="Digite aqui..." aria-label="Search">
            <button class="btn btn-dark my-2 my-sm-0" type="submit">Pesquisar</button>
          </div>
        </form>
      </ul>

      </div>
    </div>
  </nav>
</header>

