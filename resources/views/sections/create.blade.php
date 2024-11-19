<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Sección</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    <h1>Crear Nueva Sección</h1>
    <form action="{{ route('sections.store') }}" method="POST">
        @csrf
        <label for="name">Nombre de la Sección:</label>
        <input type="text" name="name" id="name" required><br>

        <label for="image">Imagen de la Sección:</label>
        <input type="file" name="image" id="image"><br>

        <button type="submit">Guardar Sección</button>
    </form>
</body>
</html>
