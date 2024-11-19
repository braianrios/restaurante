<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles de la Mesa</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    <h1>Detalles de la Mesa #{{ $table->id }}</h1>

    <p><strong>Estado:</strong> {{ ucfirst($table->status_id) }}</p>
    <p><strong>Precio Total:</strong> ${{ number_format($table->total_price_id, 2) }}</p>
    <p><strong>Platos Solicitados:</strong> {{ $table->dishes_name }}</p>
    <p><strong>Descripción de los Platos:</strong> {{ $table->dishes_description }}</p>

    <a href="{{ route('tables.index') }}">Volver al Listado de Mesas</a>
</body>
</html>
