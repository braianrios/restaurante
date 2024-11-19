<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles de la Notificación</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    <h1>Detalles de la Notificación</h1>

    <p><strong>Mensaje:</strong> {{ $notification->message }}</p>
    <p><strong>Número de Mesa:</strong> {{ $notification->table_number }}</p>
    <p><strong>Estado:</strong> {{ $notification->status }}</p>
    <p><strong>Fecha de Creación:</strong> {{ $notification->created_at->format('d/m/Y H:i') }}</p>

    <a href="{{ route('notifications.index') }}">Volver al Listado de Notificaciones</a>
</body>
</html>
