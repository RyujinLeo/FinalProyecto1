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
        <form >
            @csrf
            <div class="form-group">
                <label for="name">Nombre:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="text">Año:</label>
                <input type="text" id="fecha" name="fecha" required>
            </div>
            <div class="form-group">
                <label for="text">Tipo de auto:</label>
                <input type="text" id="tipoauto" name="tipoauto" required>
            </div>
            <div class="form-group">
                <label for="text">kilometraje:</label>
                <input type="text" id="kilometraje" name="kilometraje" required>
            </div>
            <div class="form-group">
                <label for="text">Placa:</label>
                <input type="text" id="placa" name="placa" required>
            </div>
            <div class="form-group">
                <label for="text">ciudad:</label>
                <input type="text" id="ciudad" name="ciudad" required>
            </div>
            <button type="submit">Guardar</button>
        </form>
    </div>
    
</body>
</html>