<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Orden</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    <h1>Editar Orden</h1>
    <form action="{{ route('orders.update', $order->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="table_number">Número de Mesa:</label>
        <input type="text" name="table_number" id="table_number" value="{{ $order->table_number }}" required><br>

        <label for="status">Estado de la Orden:</label>
        <select name="status" id="status" required>
            <option value="Pending" {{ $order->status == 'Pending' ? 'selected' : '' }}>Pendiente</option>
            <option value="In Progress" {{ $order->status == 'In Progress' ? 'selected' : '' }}>En Progreso</option>
            <option value="Completed" {{ $order->status == 'Completed' ? 'selected' : '' }}>Completada</option>
        </select><br>

        <label for="total_price">Precio Total:</label>
        <input type="number" name="total_price" id="total_price" value="{{ $order->total_price }}" step="0.01" required><br>

        <button type="submit">Actualizar Orden</button>
    </form>
</body>
</html>
