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
                @foreach($Useridencontrado->alquiler as $arquiler)
                    @if($arquiler->pago->estadoPago == 0)
                        <li><a>Transacción {{ json_encode($arquiler->pago->fechaPago) }}  - {{ json_encode($arquiler->costoTotal) }} <span class="status pending">Pendiente</span></a></li>
                    @else
                        <li><a>Transacción {{ json_encode($arquiler->pago->fechaPago) }} - {{ json_encode($arquiler->costoTotal) }} <span class="status completed">Completada</span></a></li>
                    @endif
                @endforeach
            </ul>
        </div>
    </div>

    <div class="button-container">
        <button class="btn-exit" onclick="window.location.href='{{ url('/mostrar') }}';">Salir</button>
    </div>
    
</body>
</html>