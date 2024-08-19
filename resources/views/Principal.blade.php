<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{url("/css/style.css")}}">
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
          <a href="#" class="logo nav-link">Carros</a>
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
              <a href="{{url("/registros")}}" class="nav-menu-link nav-link">Registros</a>
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
            <input type="text" placeholder="Buscar..." aria-label="Buscar">
            <button type="button" aria-label="Buscar">Buscar</button>
        </div>
        </nav>
      </header>


      <main>
        <section class="grid-container">
            <!-- Añade más elementos aquí según sea necesario -->
           @if(isset($Cardatos) && !empty($Cardatos))
                    @foreach($Cardatos as $vehiculo)
                    <a href="{{url("/inventario/mostrar/{$carro->vin}")}}" class="grid-item"><p>nombre:{{$carro->marca}}</p>
                      <p>apellido:{{$carro->modelo}}</p>
                      <p>correo:{{$carro->disponibilidad}}</p>
                      <p>correo:{{$carro->precioDiario}}</p>
                    </a>
                    @endforeach
        @else
            <p>No se encontraron vehículos en el inventario.</p>
        @endif
            <!-- Puedes seguir añadiendo más elementos -->
        </section>
      </main>



</body>
</html>