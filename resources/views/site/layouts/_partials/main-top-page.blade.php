  <nav class="navbar navbar-expand-lg main-top__page">
      <div class="container-fluid">

          <a class="navbar-brand" href="{{route('home')}}"><img src="{{asset('images/logo.png')}}" class="main-top__logo" alt=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
              aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
              <ul class="navbar-nav">
                  <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="{{route('home')}}">HOME</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        USERS
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">CONSULTAR</a></li>
                        <li><a class="dropdown-item" href="#">EDITAR</a></li>
                        <li><a class="dropdown-item" href="{{route('users-adicionar')}}">ADICIONAR</a></li>
                        <li><a class="dropdown-item" href="#">APAGAR</a></li>
                    </ul>
                </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        CLIENTES
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">CONSULTAR</a></li>
                        <li><a class="dropdown-item" href="#">EDITAR</a></li>
                        <li><a class="dropdown-item" href="{{route('clientes-verefica-contribuinte')}}">ADICIONAR</a></li>
                        <li><a class="dropdown-item" href="#">APAGAR</a></li>
                    </ul>
                </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#">Features</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#">Pricing</a>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                          aria-expanded="false">
                          Dropdown link
                      </a>
                      <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Action</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                      </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout')}}">Sair</a>
                  </li>
              </ul>
          </div>
      </div>
  </nav>
