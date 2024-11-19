<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles de la Sección</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    <h1>Detalles de la Sección {{ $section->name }}</h1>

    <p><strong>Nombre de la Sección:</strong> {{ $section->name }}</p>

    @if ($section->image)
        <p><strong>Imagen:</strong></p>
        <img src="{{ asset('storage/' . $section->image) }}" alt="Imagen de la Sección" style="max-width: 200px;">
    @else
        <p><strong>Imagen:</strong> No disponible.</p>
    @endif

    <a href="{{ route('sections.index') }}">Volver al Listado de Secciones</a>
</body>
</html>
