<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Plato</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    <h1>Editar Plato</h1>
    <form action="{{ route('dishes.update', $dish->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label for="name">Nombre del Plato:</label>
        <input type="text" name="name" id="name" value="{{ old('name', $dish->name) }}" required><br>

        <label for="description">Descripción:</label>
        <textarea name="description" id="description" required>{{ old('description', $dish->description) }}</textarea><br>

        <label for="price">Precio:</label>
        <input type="number" name="price" id="price" step="0.01" value="{{ old('price', $dish->price) }}" required><br>

        <label for="image">Imagen:</label>
        <input type="file" name="image" id="image"><br>

        <label for="section_id">Sección:</label>
        <select name="section_id" id="section_id" required>
            @foreach ($sections as $section)
                <option value="{{ $section->id }}" {{ $section->id == $dish->section_id ? 'selected' : '' }}>
                    {{ $section->name }}
                </option>
            @endforeach
        </select><br>

        <button type="submit">Actualizar Plato</button>
    </form>
</body>
</html>
