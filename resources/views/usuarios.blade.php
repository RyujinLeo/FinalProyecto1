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
            <input type="text" placeholder="Buscar..." aria-label="Buscar">
            <button type="button" aria-label="Buscar">Buscar</button>
        </div>
        </nav>
      </header>


      <main>
        <section class="grid-container">
            <!-- Añade más elementos aquí según sea necesario -->
            <a href="{{url("/usuarios/mostrar")}}" class="grid-item">Item 1</a>
            <a href="{{url("/usuarios/mostrar")}}" class="grid-item">Item 2</a>
            <a href="{{url("/usuarios/mostrar")}}" class="grid-item">Item 3</a>
            <a href="{{url("/usuarios/mostrar")}}" class="grid-item">Item 4</a>
            <a href="{{url("/usuarios/mostrar")}}" class="grid-item">Item 5</a>
            <a href="{{url("/usuarios/mostrar")}}" class="grid-item">Item 6</a>
            <a href="{{url("/usuarios/mostrar")}}" class="grid-item">Item 7</a>
            <a href="{{url("/usuarios/mostrar")}}" class="grid-item">Item 8</a>
            <a href="{{url("/usuarios/mostrar")}}" class="grid-item">Item 9</a>
            <!-- Puedes seguir añadiendo más elementos -->
        </section>
      </main>



</body>
</html>