<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{url("/css/navbar.css")}}">
    <link rel="stylesheet" href="{{url("/css/estiloregistros.css")}}">
    <script
      src="https://kit.fontawesome.com/7e5b2d153f.js"
      crossorigin="anonymous"
    ></script>
    <link rel=”stylesheet” href=”https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css”rel=”nofollow” integrity=”sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I” crossorigin=”anonymous”>
    <title>Inicio</title>
    
</head>
<body>

    <header class="header">
        <nav class="nav">
          <a href="#" class="logo nav-link">Registros</a>
          <button class="nav-toggle" aria-label="Abrir menú">
            <i class="fas fa-bars"></i>
          </button>
          <ul class="nav-menu">
            <li class="nav-menu-item">
              <a href="{{url("/usuarios/mostrar")}}" class="nav-menu-link nav-link">Usuarios</a>
            </li>
            <li class="nav-menu-item">
              <a href="#" class="nav-menu-link nav-link">Devoluciones</a>
            </li>
            <li class="nav-menu-item">
              <a href="{{url("/mostrar")}}" class="nav-menu-link nav-link">Rentas</a>
            </li>
            <li class="nav-menu-item">
                <a href="{{url("/inventario")}}" class="nav-menu-link nav-link">Inventarios</a>
              </li>
              <!-- Añade más elementos aquí según sea necesario 
            <li class="nav-menu-item">
              <a href="#" class="nav-menu-link nav-link nav-menu-link_active"
                >Crear Usuario</a
              >
            </li>
            -->
          </ul>
          <div class="search-container">
            <form id="formbusqueda" action="{{ route('buscar.registros') }}" method="POST" >
              @csrf
            <div id="formcontenedor" class="form-group">
              <input type="text" placeholder="Fecha inicio" aria-label="Buscar" id="fechaInicio" name="fechaInicio" required>
              <input type="text" placeholder="Fecha Fin" aria-label="Buscar" id="fechaFin" name="fechaFin" required>
              <button type="submit" aria-label="Buscar">Buscar</button>
            </div>
        </div>
        </nav>
      </header>


      <main>
        <section class="grid-container">
          <!-- Añade más elementos aquí según sea necesario -->
          @foreach($alquilerDTOs as $alquilerDTO)
            <a href="{{  url("/registros/mostrar/alquiler/{$alquilerDTO->alquiler->idAlquiler}/{$alquilerDTO->idCliente}/{$alquilerDTO->vehiculo->vin}")  }}" class="grid-item">
              <p>Codigo de Alquiler: {{$alquilerDTO->alquiler->idAlquiler}}</p>
              <p>Codigo de Usuario abonado: {{$alquilerDTO->idCliente}}</p>
              <p>Fecha de Inicio: {{$alquilerDTO->alquiler->fechaInicio}}</p>
              <p>Fecha Final: {{$alquilerDTO->alquiler->fechaFin}}</p>
            </a>
          @endforeach
          <!-- Puedes seguir añadiendo más elementos -->
      </section>
      </main>



</body>
</html>