<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Notificación</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    <h1>Crear Nueva Notificación</h1>
    <form action="{{ route('notifications.store') }}" method="POST">
        @csrf

        <label for="message">Mensaje:</label>
        <textarea name="message" id="message" required></textarea><br>

        <label for="table_number">Número de Mesa:</label>
        <input type="text" name="table_number" id="table_number" required><br>

        <label for="status">Estado:</label>
        <select name="status" id="status" required>
            <option value="Unread">No Leída</option>
            <option value="Read">Leída</option>
        </select><br>

        <button type="submit">Enviar Notificación</button>
    </form>
</body>
</html>
