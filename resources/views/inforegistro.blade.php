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
        <h1>Información del Registro</h1>
    
        <div class="client-info">
            <h2>Detalles del Registro</h2>
            <p><strong>Codigo de Alquiler:</strong> {{$alquiler->idAlquiler}}</p>
            <a href="/FinalProyecto1/public/usuarios/mostrar/{{$cliente->idCliente}}"><p><strong>Nombre de abonado:</strong> {{$cliente->nombre}} {{$cliente->apellido}}</p></a>
            <a href="/FinalProyecto1/public/inventario/mostrar/{{$vehiculo->vin}}"><p><strong>Auto Rentado:</strong> {{$vehiculo->marca}}  {{$vehiculo->modelo}}  {{$vehiculo->anio}}</p></a>
            <p><strong>Fecha Inicial:</strong> {{$alquiler->fechaInicio}}</p>
            <p><strong>Fecha Final:</strong>{{$alquiler->fechaFin}}</p>
            <p><strong>Costo Total:</strong> {{$alquiler->costoTotal}}</p>
            <p><strong>Ciudad de Origen:</strong> {{$alquiler->ciudadOrigen}}</p>
            <p><strong>Ciudad de Entrega:</strong> {{$alquiler->ciudadEntrega}}</p>

        </div>
    
    </div>
</div>
<div class="transactions">
    <h2>Listado de Transacciones</h2>
    <ul class="transaction-list">
            @if($alquiler->pago->estadoPago == 0)
                <li><a>Transacción {{ json_encode($alquiler->pago->fechaPago) }}  - {{ json_encode($alquiler->costoTotal) }} <span class="status pending">Pendiente</span></a></li>
            @else
                <li><a>Transacción {{ json_encode($alquiler->pago->fechaPago) }} - {{ json_encode($alquiler->costoTotal) }} <span class="status completed">Completada</span></a></li>
            @endif
    </ul>
</div>
</div>
    </div>

    <div class="button-container">
        <button class="btn-exit" onclick="window.location.href='{{ url('/mostrar') }}';">Salir</button>
    </div>
    
</body>
</html>