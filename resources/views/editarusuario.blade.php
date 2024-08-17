<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Usuario</title>
</head> 
<body>

    <h3>Id del Usuario: {{$alumnoEditar->numeroCuenta}}</h3>

    <div class="form-container">
        <form action="{{ route('alumno.editar.guardar', $alumnoEditar->numeroCuenta) }}" method="PUT">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Nombre:</label>
            </div>
            <input type="text" id="name" name="name" value={{$alumnoEditar->nombre}} required>
            <div class="form-group">
                <label for="text">Apellido:</label>
                <input type="text" id="apellido" name="apellido" value={{ $alumnoEditar->apellido}} required>
            </div>
            <div class="form-group">
                <label for="email">Correo:</label>
                <input type="email" id="correo" name="correo" value= {{$alumnoEditar->correo}} required>
            </div>
            <div class="form-group">
                <label for="telefono">Telefono:</label>
                <input type="text" id="telefono" name="telefono" value={{$alumnoEditar->telefono}} required>
            </div>
            <div class="form-group">
                <label for="identidad">Identidad:</label>
                <input type="text" id="identidad" name="identidad" value={{$alumnoEditar->identidad}} required>
            </div>
            <button type="submit">Guardar</button>
        </form>
    </div>
    
</body>
</html>