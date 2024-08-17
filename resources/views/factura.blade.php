<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recibo de Renta de Auto</title>
    <link rel="stylesheet" href="{{url("/css/estilorecibo.css")}}">
</head>
<body>

    <div class="receipt-container">
        <!-- Número de Recibo -->
        <div class="receipt-number">
            <h2><a href="recibo-details.html">Recibo No. 123456</a></h2>
        </div>

        <!-- Información del Arrendatario -->
        <div class="tenant-info">
            <h1>Información del Arrendatario</h1>
            <p><strong>Nombre:</strong> <a href="usuario-details.html">Juan Pérez</a></p>
            <p><strong>Identidad:</strong> 123456789</p>
            <p><strong>Licencia:</strong> LIC-98765</p>
            <p><strong>Correo:</strong> juan.perez@example.com</p>
            <p><strong>Teléfono:</strong> +52 555 123 4567</p>
        </div>

        <!-- Información del Auto y Alquiler -->
        <div class="car-info">
            <h1>Detalles del Auto</h1>
            <p><strong>Nombre del Auto:</strong> <a href="auto-details.html">Ferrari</a></p>
            <p><strong>Tipo de Auto:</strong> Deportivo</p>
            <p><strong>Año:</strong> 2021</p>
            <p><strong>Placa:</strong> ABC-123</p>
            <p><strong>Kilometraje Recibido:</strong> 15,000 km</p>
            <p><strong>Kilometraje Devuelto:</strong> 15,500 km</p>
            <p><strong>Ciudad de Renta:</strong> Ciudad de México</p>
            <p><strong>Ciudad de Devolución:</strong> Guadalajara</p>
            <p><strong>Fecha del Pago:</strong> 15/08/2024</p>
            <p><strong>Reparaciones:</strong> Necesarias</p>
        </div>
    </div>


    <div class="button-container">
        <button class="btn-exit" onclick="window.location.href='{{ url('/mostrar') }}';">Salir</button>
    </div>


</body>
</html>
