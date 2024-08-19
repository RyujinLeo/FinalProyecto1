<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{url("/css/navbar.css")}}">
    <link rel="stylesheet" href="{{url("/css/estilousuarios.css")}}">
    <script
      src="https://kit.fontawesome.com/7e5b2d153f.js"
      crossorigin="anonymous"
    ></script>
    <link rel=”stylesheet” href=”https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css”rel=”nofollow” integrity=”sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I” crossorigin=”anonymous”>

    <title>Usuarios</title>
</head>
<body>


    <header class="header">
        <nav class="nav">
          <a href="#" class="logo nav-link">Usuarios</a>
          <button class="nav-toggle" aria-label="Abrir menú">
            <i class="fas fa-bars"></i>
          </button>
          <ul class="nav-menu">
            <li class="nav-menu-item">
              <a href="{{url("/mostrar")}}" class="nav-menu-link nav-link">Rentas</a>
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
            <li class="nav-menu-item">
              <a href="{{url("/agregarusuario")}}" class="nav-menu-link nav-link nav-menu-link_active"
                >Crear Usuario</a
              >
            </li>
          </ul>
          
          <div class="search-container">
            <form id="formbusqueda" action="{{ route('buscar.usuarios') }}" method="POST" >
              @csrf
            <div class="form-group">
              <input type="text" placeholder="Buscar por Codigo..." aria-label="Buscar" id="idusuario" name="idusuario" required>
              <button type="submit" aria-label="Buscar">Buscar</button>
            </div>
             
          </form>
  
        </div>
        </nav>
      </header>


      <main>
        <section class="grid-container">
            <!-- Añade más elementos aquí según sea necesario -->
            @foreach ($Usersdatos as $cliente)
            <a href="{{url("/usuarios/mostrar/{$cliente->idCliente}")}}" class="grid-item">
              <p>Codigo de Cliente:{{$cliente->idCliente}}</p>
              <p>nombre:{{$cliente->nombre}}</p>
              <p>apellido:{{$cliente->apellido}}</p>
              <p>correo:{{$cliente->email}}</p>
            
            </a>
            @endforeach
            <!-- Puedes seguir añadiendo más elementos -->
        </section>
      </main>



</body>
</html>