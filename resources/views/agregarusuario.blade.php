<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{url("/css/estilocrearusuario.css")}}">
    <title>Agregar usuario</title>
</head> 
<body>
    <div class="form-container">
        <form action="{{ route('guardar.usuario') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="idusuario">Código de Usuario:</label>
                <input type="text" id="idusuario" name="idusuario" required>
            </div>
            <div class="form-group">
                <label for="name">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="apellido">Apellido:</label>
                <input type="text" id="apellido" name="apellido" required>
            </div>
            <div class="form-group">
                <label for="email">Correo:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <input type="text" id="telefono" name="telefono" required>
            </div>
            <div class="form-group">
                <label for="direccion">Dirección:</label>
                <input type="text" id="direccion" name="direccion" required>
            </div>
            <button type="submit">Guardar</button>
        </form>
    </div>
</body>
</html>