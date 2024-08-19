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
                <p><strong>Marca:{{$autoEncontrado->marca}}</p>
                <p><strong>Modelo:{{$autoEncontrado->modelo}}</p>
                <p><strong>Año:{{$autoEncontrado->anio}}</p>
                <p><strong>Ciudad:{{$ciudadEncontrada}}</p>
                @if($autoEncontrado->disponibilidad==0)
                    <p><strong>Estado: En Uso</p>
                @else
                    <p><strong>Estado: Disponible</p>
                @endif
                <p><strong>Precio Diario:{{$autoEncontrado->precioDiario}}</p>
                <img src={{$autoEncontrado->imagenAuto}} alt="Imagen Auto" style="width: 400px; height: auto;">     
            </div>
        </div>

        <!-- Listado de Usuarios que Rentaron el Auto -->
        <div class="rental-history">
            <h2>Historial de Mantenimientos</h2>
            <ul class="rental-list">
                @foreach($autoEncontrado->mantenimientos as $mantenimiento)
                    <li><a>Mantenimiento {{ json_encode($mantenimiento->fechaMantenimiento) }}  - Costo: {{ json_encode($mantenimiento->costo) }} - Descripción: {{ json_encode($mantenimiento->descripcion) }}  </a></li>
            @endforeach
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
