<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{url("/css/navbar.css")}}">
    <link rel="stylesheet" href="{{url("/css/estiloinventarios.css")}}">
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
          <a href="#" class="logo nav-link">Inventario</a>
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
                <a href="{{url("/usuarios/mostrar")}}" class="nav-menu-link nav-link">Usuarios</a>
              </li>
            <li class="nav-menu-item">
              <a href="{{url("/agregarauto")}}" class="nav-menu-link nav-link nav-menu-link_active"
                >Agregar auto</a
              >
            </li>
          </ul>

          <div class="search-container">

            <form id="formbusqueda" action="{{ route('buscar.modelomarca') }}" method="POST" >
              @csrf
            <div class="form-group">
              <input type="text" placeholder="Buscar..." aria-label="Buscar" id="modelomarca" name="modelomarca" required>
              <button type="submit" aria-label="Buscar">Buscar</button>
            </div>
             
          </form>

        </div>
        </nav>
      </header>


      <main>
        <section class="grid-container">
          <!-- Añade más elementos aquí según sea necesario -->
          @foreach ($Modelomarcaencontrado as $listamodelomarca)
          <a href="{{url("/inventario/mostrar/{$listamodelomarca->marca}")}}" class="grid-item"><p>nombre:{{$listamodelomarca->marca}}</p>
            <p>apellido:{{$listamodelomarca->modelo}}</p>
            <p>correo:{{$listamodelomarca->disponibilidad}}</p>
            <p>correo:{{$listamodelomarca->precioDiario}}</p>
          </a>
          <!-- Puedes seguir añadiendo más elementos -->
      </section>
      </main>



</body>
</html>