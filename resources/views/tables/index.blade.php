<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mesas</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    <h1>Mesas</h1>
    <ul>
        @foreach ($tables as $table)
            <li>Mesa #{{ $table->id }} - Estado: {{ ucfirst($table->status_id) }} 
                <a href="{{ route('tables.edit', $table->id) }}">Editar</a> | 
                <a href="{{ route('tables.show', $table->id) }}">Ver Detalles</a>
            </li>
        @endforeach
    </ul>
    <a href="{{ route('tables.create') }}">Crear Nueva Mesa</a>
</body>
</html>
