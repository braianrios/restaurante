<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles de la Orden</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    <h1>Detalles de la Orden</h1>

    <p><strong>Número de Mesa:</strong> {{ $order->table_number }}</p>
    <p><strong>Estado:</strong> {{ $order->status }}</p>
    <p><strong>Precio Total:</strong> ${{ number_format($order->total_price, 2) }}</p>
    <p><strong>Fecha de Orden:</strong> {{ $order->created_at->format('d/m/Y H:i') }}</p>

    <h2>Items de la Orden</h2>
    <ul>
        @foreach ($order->items as $item)
            <li>{{ $item->dish->name }} - {{ $item->quantity }} x ${{ number_format($item->dish->price, 2) }}</li>
        @endforeach
    </ul>

    <a href="{{ route('orders.index') }}">Volver al Listado de Ordenes</a>
</body>
</html>
