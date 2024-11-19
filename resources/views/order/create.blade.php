<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Orden</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    <h1>Crear Nueva Orden</h1>
    <form action="{{ route('orders.store') }}" method="POST">
        @csrf
        <label for="table_number">Número de Mesa:</label>
        <input type="text" name="table_number" id="table_number" required><br>

        <label for="status">Estado de la Orden:</label>
        <select name="status" id="status" required>
            <option value="Pending">Pendiente</option>
            <option value="In Progress">En Progreso</option>
            <option value="Completed">Completada</option>
        </select><br>

        <label for="total_price">Precio Total:</label>
        <input type="number" name="total_price" id="total_price" step="0.01" required><br>

        <button type="submit">Crear Orden</button>
    </form>
</body>
</html>
