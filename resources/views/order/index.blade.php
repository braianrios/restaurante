<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordenes</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    <h1>Ordenes</h1>
    <table>
        <thead>
            <tr>
                <th>Número de Mesa</th>
                <th>Estado</th>
                <th>Precio Total</th>
                <th>Fecha</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr>
                    <td>{{ $order->table_number }}</td>
                    <td>{{ $order->status }}</td>
                    <td>${{ number_format($order->total_price, 2) }}</td>
                    <td>{{ $order->created_at->format('d/m/Y H:i') }}</td>
                    <td>
                        <a href="{{ route('orders.show', $order->id) }}">Ver Detalles</a> |
                        <a href="{{ route('orders.edit', $order->id) }}">Editar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('orders.create') }}">Crear Nueva Orden</a>
</body>
</html>
