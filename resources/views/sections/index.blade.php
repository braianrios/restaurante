<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secciones</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    <h1>Secciones</h1>
    <ul>
        @foreach ($sections as $section)
            <li>{{ $section->name }}
                <a href="{{ route('sections.edit', $section->id) }}">Editar</a> | 
                <a href="{{ route('sections.show', $section->id) }}">Ver Detalles</a>
            </li>
        @endforeach
    </ul>
    <a href="{{ route('sections.create') }}">Crear Nueva Sección</a>
</body>
</html>
