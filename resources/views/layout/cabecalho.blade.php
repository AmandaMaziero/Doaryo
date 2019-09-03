<header>
  <nav class="navbar navbar-expand-md navbar-light shadow-sm" style="background-color: #85ffe6;">
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
            @if (Route::has('login'))
                @auth
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{ url('perfil') }}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Perfil</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ asset('perfil') }}">Perfil</a>
                      <a class="dropdown-item" href="{{ url('/logout') }}">Sair</a>
                    </div>
                  </li>

                  @if(auth()->user()->type == "user")
                    <li class="nav-item">
                    <a class="nav-link" href="{{ asset('carrinho') }}"><i class="large material-icons" style="font-size:40px; color:black;">shopping_basket</i></a>
                    </li>
                  @endif
                @else
                  <li class="nav-item">
                  <a class="nav-link" href="{{ asset('login') }}">Entrar</a>
                  </li>
                @endauth
            @endif
              

            
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

