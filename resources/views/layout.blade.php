<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Gestão de controle de Hotel</title>
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary absolute-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Hotel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{'/'}}">Home</a>
        </li>
 
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Cliente
          </a>
          <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="{{ route('show-formulario-cadastro-cliente') }}">Cadastrar</a></li>
            <li><a class="dropdown-item" href="#">Pesquisar</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Deletar</a></li>
            <li><a class="dropdown-item" href="#">Alterar</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Funcionário
          </a>
          <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="{{ route('show-formulario-cadastro-funcionario') }}">Cadastro</a></li>
            <li><a class="dropdown-item" href="#">Pesquisar</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Deletar</a></li>
            <li><a class="dropdown-item" href="#">Alterar</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Quarto
          </a>
          <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="{{ route('show-formulario-cadastro-quarto') }}">Cadastro</a></li>
            <li><a class="dropdown-item" href="#">Pesquisar</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Deletar</a></li>
            <li><a class="dropdown-item" href="#">Alterar</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Reserva
          </a>
          <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="{{ route('show-formulario-cadastro-reserva') }}">Cadastro</a></li>
            <li><a class="dropdown-item" href="#">Pesquisar</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Deletar</a></li>
            <li><a class="dropdown-item" href="#">Alterar</a></li>
          </ul>
        </li>
      </ul>
 
    </div>
  </div>
</nav>

    </header>
    <main>
        @yield('content')

    </main>
    <footer>

    
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</html>