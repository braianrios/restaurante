<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notificaciones</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    <h1>Notificaciones</h1>
    <table>
        <thead>
            <tr>
                <th>Mensaje</th>
                <th>Mesa</th>
                <th>Estado</th>
                <th>Fecha</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($notifications as $notification)
                <tr>
                    <td>{{ $notification->message }}</td>
                    <td>{{ $notification->table_number }}</td>
                    <td>{{ $notification->status }}</td>
                    <td>{{ $notification->created_at->format('d/m/Y H:i') }}</td>
                    <td>
                        <a href="{{ route('notifications.show', $notification->id) }}">Ver Detalles</a> |
                        <a href="{{ route('notifications.edit', $notification->id) }}">Editar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('notifications.create') }}">Crear Nueva Notificación</a>
</body>
</html>
