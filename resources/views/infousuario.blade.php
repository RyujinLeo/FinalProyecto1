<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{url("/css/estiloinfousuario.css")}}">
    <title>Usuario</title>
</head>
<body>
    <div class="container">
        <h1>Información del Cliente</h1>
    
        <div class="client-info">
            <h2>Detalles del Cliente</h2>
            <p><strong>Nombre:</strong> {{$Useridencontrado->nombre}}</p>
            <p><strong>Apellido:</strong> {{$Useridencontrado->apellido}}</p>
            <p><strong>Correo:</strong> {{$Useridencontrado->email}}</p>
            <p><strong>Teléfono:</strong>{{$Useridencontrado->telefono}}</p>
            <p><strong>Fecha de registro:</strong> {{$Useridencontrado->fechaRegistro}}</p>
        </div>
    
        <div class="transactions">
            <h2>Listado de Transacciones</h2>
            <ul class="transaction-list">
                <li><a href="transaccion1.html">Transacción 1 - $100.00 <span class="status completed">Completada</span></a></li>
                <li><a href="transaccion2.html">Transacción 2 - $250.00 <span class="status pending">Pendiente</span></a></li>
                <li><a href="transaccion3.html">Transacción 3 - $75.00 <span class="status pending">Pendiente</span></a></li>
                <li><a href="transaccion4.html">Transacción 4 - $200.00 <span class="status completed">Completada</span></a></li>
                <li><a href="transaccion5.html">Transacción 5 - $50.00 <span class="status pending">Pendiente</span></a></li>
            </ul>
        </div>
    </div>

    <div class="button-container">
        <button class="btn-exit" onclick="window.location.href='{{ url('/mostrar') }}';">Salir</button>
    </div>
    
</body>
</html>