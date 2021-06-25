<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link href="{{url('css/app.css')}}" rel="stylesheet">
  <script src="https://kit.fontawesome.com/dc98b45b0c.js" crossorigin="anonymous"></script>
  <title>Concessionária Hope</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="/home">Hope</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item {{ Request::is('home') ? 'active' : '' }}">
            <a class="nav-link" aria-current="page" href="/home"><i class="fas fa-home"></i> Home</a>
          </li>
          <li class="nav-item {{ Request::is('sobre') ? 'active' : '' }}">
            <a class="nav-link" href="/sobre"><i class="fas fa-address-card"></i> Sobre</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle {{ Request::is('veiculos') ? 'active' : '' }} {{ Request::is('/') ? 'active' : '' }}" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             <i class="fas fa-car-side"></i> Veículos
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item {{ Request::is('veiculos') ? 'active' : '' }}" href="/veiculos"><i class="fas fa-calendar-alt"></i> Reservar veículos</a></li>
              <li><a class="dropdown-item {{ Request::is('/') ? 'active' : '' }}" href="/"><i class="fas fa-list-alt"></i> Lista de veículos (adm)</a></li>
            </ul>
          </li>
          <li class="nav-item {{ Request::is('clientes_table') ? 'active' : '' }}">
            <a class="nav-link" href="/clientes_table"><i class="fas fa-users"></i> Clientes (ADM)</a>
          </li>
          <li class="nav-item {{ Request::is('login') ? 'active' : '' }}">
            <a class="nav-link" href="/login"><i class="fas fa-sign-in-alt"></i> Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</body>