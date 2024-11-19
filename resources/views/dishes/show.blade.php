<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Plato</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    <h1>Detalles del Plato</h1>

    <p><strong>Nombre:</strong> {{ $dish->name }}</p>
    <p><strong>Descripción:</strong> {{ $dish->description }}</p>
    <p><strong>Precio:</strong> ${{ number_format($dish->price, 2) }}</p>
    <p><strong>Sección:</strong> {{ $dish->section->name }}</p>

    <a href="{{ route('dishes.index') }}">Volver al Listado de Platos</a>
</body>
</html>
