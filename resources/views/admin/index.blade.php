<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    <h1>Bienvenido al Panel de Administración</h1>

    <h2>Gestionar Platos</h2>
    <a href="{{ route('dishes.index') }}">Ver Platos</a> | 
    <a href="{{ route('dishes.create') }}">Crear Plato</a><br>

    <h2>Gestionar Secciones</h2>
    <a href="{{ route('sections.index') }}">Ver Secciones</a> | 
    <a href="{{ route('sections.create') }}">Crear Sección</a><br>

    <h2>Gestionar Mesas</h2>
    <a href="{{ route('tables.index') }}">Ver Mesas</a> | 
    <a href="{{ route('tables.create') }}">Crear Mesa</a><br>

    <h2>Gestionar Pedidos</h2>
    <a href="{{ route('orders.index') }}">Ver Pedidos</a><br>

    <h2>Gestionar Pagos</h2>
    <a href="{{ route('payments.index') }}">Ver Pagos</a><br>

    <h2>Gestionar Notificaciones</h2>
    <a href="{{ route('notifications.index') }}">Ver Notificaciones</a><br>
</body>
</html>
