<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    <h1>Menú del Restaurante</h1>

    <h2>Platos</h2>
    <ul>
        @foreach ($dishes as $dish)
            <li>
                <strong>{{ $dish->name }}</strong><br>
                <em>{{ $dish->description }}</em><br>
                <span>${{ number_format($dish->price, 2) }}</span><br>
                <a href="{{ route('menu.show', $dish->id) }}">Ver Detalles</a><br><br>
            </li>
        @endforeach
    </ul>
</body>
</html>
