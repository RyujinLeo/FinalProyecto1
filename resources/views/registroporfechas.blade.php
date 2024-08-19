<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{url("/css/estiloregistroporfecha.css")}}">
    <title>Registros por fechas</title>
</head>
<body>
    <div class="container">
        <h1>Datos de Alquiler</h1>
        <form>
            <div class="form-group">
                <label for="numeroAlquiler">Número de Alquiler:</label>
                <input type="text" id="numeroAlquiler" name="numeroAlquiler" value="{{$URegistros->numeroAlquiler}}" readonly>
            </div>
            <div class="form-group">
                <label for="gananciaNeta">Ganancia Neta:</label>
                <input type="text" id="gananciaNeta" name="gananciaNeta" value="{{$URegistros->gananciaNeta}}" readonly>
            </div>
            <div class="form-group">
                <label for="clientesNuevos">Clientes Nuevos:</label>
                <input type="text" id="clientesNuevos" name="clientesNuevos" value="{{$URegistros->clientesNuevos}}" readonly>
            </div>
        </form>
    </div>


    <div class="button-container">
        <button class="btn-exit" onclick="window.location.href='{{ url('/mostrar') }}';">Salir</button>
    </div>
    
</body>



</html>