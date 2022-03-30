<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
    <title>AssoSystem</title>
</head>
<body>
    <header>
        <div>
          <a href="/">
            <img src="/images/Aspommer.png" alt="Logo Aspommer">
          </a>  
        </div>
        <div> Sistema de controle de associados</div>
    </header>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container-fluid">
                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>
                          <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                              <li class="nav-item">
                                <li class="nav-item dropdown">
                                  <a class="dropdown-toggle btn btn-sm btn-outline-primary" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Empresa
                                  </a>
                                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="{{ route('empresas.create') }}">Criar</a></li>
                                    <li><a class="dropdown-item" href="{{ route('empresas.index') }}">Consultar</a></li>
                                  </ul>
                                </li>
                              </li>
                              <li class="nav-item">
                                <li class="nav-item dropdown">
                                  <a class="dropdown-toggle btn btn-sm btn-outline-primary" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Bancos
                                  </a>
                                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="{{route('bancos.create') }}">Criar</a></li>
                                    <li><a class="dropdown-item" href="{{route('bancos.index')}}">Consultar</a></li>
                                  </ul>
                                </li>
                              </li>

                              <li class="nav-item dropdown">
                                <a class="dropdown-toggle btn btn-sm btn-outline-primary" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  Associados
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                  <li><a class="dropdown-item" href="{{route('associados.create')}}">Criar</a></li>
                                  <li><a class="dropdown-item" href="{{ route('associados.index')}}">Consultar</a></li>
                                </ul>
                              </li>

                              <li class="nav-item dropdown">
                                <a class="dropdown-toggle btn btn-sm btn-outline-primary" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  Veículos
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                  <li><a class="dropdown-item" href="{{route('veiculos.create')}}">Criar</a></li>
                                  <li><a class="dropdown-item" href="{{ route('veiculos.index')}}">Consultar</a></li>
                                </ul>

                              <li class="nav-item">
                                <li class="nav-item dropdown">
                                  <a class="dropdown-toggle btn btn-sm btn-outline-primary" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Sinistros
                                  </a>
                                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="{{ '/' /* route('sinistros.create') */ }}">Criar</a></li>
                                    <li><a class="dropdown-item" href="{{  '/' /* route('sinistros.index') */ }}">Consultar</a></li>
                                  </ul>
                                </li>
                              </li>

                              <li class="nav-item">
                                <li class="nav-item dropdown">
                                  <a class="dropdown-toggle btn btn-sm btn-outline-primary" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Pagamentos
                                  </a>
                                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="{{ '/' /* route('pagamentos.create') */ }}">Criar</a></li>
                                    <li><a class="dropdown-item" href="{{  '/' /* route('pagamentos.index') */ }}">Consultar</a></li>
                                  </ul>
                                </li>
                              </li>

                              {{-- <li class="nav-item">
                                <a  class="btn btn-sm btn-outline-primary" href="http://localhost:8000/associados">Configurações</a>
                              </li> --}}

                            </ul>
                            <form class="d-flex">
                              <input class="form-control me-2" type="search" placeholder="Busca" aria-label="Search">
                              <button class="btn btn-outline-success" type="submit">Busca</button>
                        </form>
                      </div>
                    </div>
                  </nav>
            </div>
        </div>
    </div>

    <main class="py-4">
        @yield('content')
    </main>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>