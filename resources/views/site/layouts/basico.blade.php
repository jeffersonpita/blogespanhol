<!DOCTYPE html>
<html>
  <head>

    <title>Espanhol para você</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed&family=PT+Serif&display=swap" rel="stylesheet">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

      <link rel="stylesheet" href="{{ asset('css/estilo.css') }}"/>
  </head>
  <body>

<header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('site.index') }}">Espanhol para você</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link {{ Request::path()=='blog' ? 'active' : '' }}" href="{{ route('site.blog') }}">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::path()=='sobre-nos' ? 'active' : '' }}" href="{{ route('site.sobrenos') }}">Sobre nós</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::path()=='contato' ? 'active' : '' }}" href="{{ route('site.contato') }}">Contato</a>
        </li>
        {{-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li> --}}
        {{-- <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li> --}}
      </ul>
      {{-- <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> --}}
    </div>
  </div>
</nav>
</header>
    @yield('conteudo')





    <div class="container-fluid mx-auto footer">
      <div class="row">
          <div class="d-md-flex px-5 justify-content-around bd-highlight col-md-12 pt-5 pb-5 mb-3">
              <div class="p-4 flex-fill bd-highlight mb-5 mb-md-0">
                  <h3>Espanhol para você</h3> <small>Copyright &copy @php print date('Y') @endphp</small>
              </div>
              <div class="p-4 flex-fill bd-highlight mb-3 mb-md-0">
                  <h5 class="places">Mapa do Site</h5>
                  <p class="mb-0">
                    <a href="{{ route('site.index') }}">Início</a>
                  </p>
                  <p class="mb-0">
                    <a href="{{ route('site.sobrenos') }}">Sobre nós</a>
                  </p>
                  <p class="mb-0">
                    <a href="{{ route('site.contato') }}">Contato</a>
                  </p>
              </div>
              <div class="p-4 flex-fill bd-highlight mb-3 mb-md-0">
                  <h5 class="places">Siga-nos</h5>
                  <p class="mb-0">
                    <a href="#">Facebook</a>
                  </p>
                  <p class="mb-0">
                    <a href="#">Instagram</a>
                  </p>
                  <p class="mb-0">
                    <a href="#">espanholparavoce@gmail.com</a>
                  </p>
              </div>
          </div>
      </div>
  </div>

  </body>
</html>
