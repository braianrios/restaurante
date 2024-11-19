<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Plato</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    <h1>Crear Nuevo Plato</h1>
    <form action="{{ route('dishes.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="name">Nombre del Plato:</label>
        <input type="text" name="name" id="name" required><br>

        <label for="description">Descripción:</label>
        <textarea name="description" id="description" required></textarea><br>

        <label for="price">Precio:</label>
        <input type="number" name="price" id="price" step="0.01" required><br>

        <label for="image">Imagen:</label>
        <input type="file" name="image" id="image"><br>

        <label for="section_id">Sección:</label>
        <select name="section_id" id="section_id" required>
            @foreach ($sections as $section)
                <option value="{{ $section->id }}">{{ $section->name }}</option>
            @endforeach
        </select><br>

        <button type="submit">Guardar Plato</button>
    </form>
</body>
</html>
