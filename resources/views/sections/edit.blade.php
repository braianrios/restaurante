<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Sección</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    <h1>Editar Sección</h1>
    <form action="{{ route('sections.update', $section->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label for="name">Nombre de la Sección:</label>
        <input type="text" name="name" id="name" value="{{ $section->name }}" required><br>

        <label for="image">Imagen de la Sección:</label>
        <input type="file" name="image" id="image"><br>

        @if ($section->image)
            <p><img src="{{ asset('storage/' . $section->image) }}" alt="Imagen de la Sección" style="max-width: 200px;"></p>
        @endif

        <button type="submit">Actualizar Sección</button>
    </form>
</body>
</html>
