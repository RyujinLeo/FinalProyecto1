<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{url("/css/estilosagregarauto.css")}}">
    <title>Agregar Auto</title>
</head> 
<body>

    <div class="form-container">
        <form action="{{route('guardar.auto')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="text">Vin:</label>
                <input type="text" id="vin" name="vin" required>
            </div>
            <div class="form-group">
                <label for="text">Marca:</label>
                <input type="text" id="marca" name="marca" required>
            </div>
            <div class="form-group">
                <label for="text">Modelo:</label>
                <input type="text" id="modelo" name="modelo" required>
            </div>
            <div class="form-group">
                <label for="text">Año:</label>
                <input type="text" id="anio" name="anio" required>
            </div>
          
            <div class="form-group">
                <label for="text">Color:</label>
                <input type="text" id="color" name="color" required>
            </div>
            <div class="form-group">
                <label for="text">disponibilidad:</label>
                <input type="text" id="disponibilidad" name="disponibilidad" required>
            </div>
            <div class="form-group">
                <label for="text">precio Diario:</label>
                <input type="text" id="precioDiario" name="precioDiario" required>
            </div>
            <div class="form-group">
                <label for="text">idCiudad:</label>
                <input type="text" id="idCiudad" name="idCiudad" required>
            </div>
            <div class="form-group">
                <label for="text">imagenauto:</label>
                <input type="text" id="imagenAuto" name="imagenAuto" required>
            </div>
            <button type="submit">Guardar</button>
        </form>
    </div>
    
</body>
</html>