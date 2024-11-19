<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Mesa</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    <h1>Editar Mesa</h1>
    <form action="{{ route('tables.update', $table->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="status_id">Estado:</label>
        <select name="status_id" id="status_id" required>
            <option value="available" {{ $table->status_id == 'available' ? 'selected' : '' }}>Disponible</option>
            <option value="occupied" {{ $table->status_id == 'occupied' ? 'selected' : '' }}>Ocupada</option>
            <option value="pending" {{ $table->status_id == 'pending' ? 'selected' : '' }}>Pendiente</option>
        </select><br>

        <label for="total_price_id">Precio Total:</label>
        <input type="number" name="total_price_id" id="total_price_id" value="{{ $table->total_price_id }}" required><br>

        <label for="dishes_name">Nombre de los Platos:</label>
        <input type="text" name="dishes_name" id="dishes_name" value="{{ $table->dishes_name }}"><br>

        <label for="dishes_description">Descripción de los Platos:</label>
        <textarea name="dishes_description" id="dishes_description">{{ $table->dishes_description }}</textarea><br>

        <button type="submit">Actualizar Mesa</button>
    </form>
</body>
</html>
