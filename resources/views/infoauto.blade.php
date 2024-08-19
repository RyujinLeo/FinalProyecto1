<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Información del Cliente</title>
    <link rel="stylesheet" href="{{url("/css/estiloinfoauto.css")}}">

</head>
<body>

    <div class="container">
        <!-- Información del Auto -->
        <div class="auto-info">
            <h1>Información del Auto</h1>
            <div class="auto-details">
                <p><strong>Auto:</strong> Ferrari</p>
                <p><strong>Tipo de Auto:</strong> Deportivo</p>
                <p><strong>Año:</strong> 2021</p>
                <p><strong>Placa:</strong> ABC-123</p>
                <p><strong>Kilometraje:</strong> 15,000 km</p>
                <p><strong>Ciudad:</strong> Tegucigalpa</p>
                <p><strong>Estado:</strong> Reparacion</p>
            </div>
        </div>

        <!-- Listado de Usuarios que Rentaron el Auto -->
        <div class="rental-history">
            <h2>Historial de Rentas</h2>
            <ul class="rental-list">
                <li><a href="{{url("/usuarios/mostrar")}}">Usuario 1 - 01/01/2024</a></li>
                <li><a href="{{url("/usuarios/mostrar")}}">Usuario 2 - 15/02/2024</a></li>
                <li><a href="{{url("/usuarios/mostrar")}}">Usuario 3 - 20/03/2024</a></li>
                <li><a href="{{url("/usuarios/mostrar")}}">Usuario 4 - 05/04/2024</a></li>
                <li><a href="{{url("/usuarios/mostrar")}}">Usuario 5 - 10/05/2024</a></li>
            </ul>
        </div>
    </div>

    <div class="button-container">
        <button class="btn-exit" onclick="window.location.href='{{ url('/mostrar') }}';">Salir</button>
    </div>

    <div class="button-container">
        <button class="btn-exit" onclick="window.location.href='{{ url('/renta') }}';">Rentar</button>
    </div>


</body>
</html>
