<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Mesa</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    <h1>Crear Nueva Mesa</h1>
    <form action="{{ route('tables.store') }}" method="POST">
        @csrf
        <label for="status_id">Estado:</label>
        <select name="status_id" id="status_id" required>
            <option value="available">Disponible</option>
            <option value="occupied">Ocupada</option>
            <option value="pending">Pendiente</option>
        </select><br>

        <label for="total_price_id">Precio Total:</label>
        <input type="number" name="total_price_id" id="total_price_id" value="0.00" required><br>

        <label for="dishes_name">Nombre de los Platos:</label>
        <input type="text" name="dishes_name" id="dishes_name"><br>

        <label for="dishes_description">Descripción de los Platos:</label>
        <textarea name="dishes_description" id="dishes_description"></textarea><br>

        <button type="submit">Guardar Mesa</button>
    </form>
</body>
</html>
