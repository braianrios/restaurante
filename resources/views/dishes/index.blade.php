<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Platos</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    <h1>Lista de Platos</h1>
    <a href="{{ route('dishes.create') }}">Crear Nuevo Plato</a>

    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Sección</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dishes as $dish)
                <tr>
                    <td>{{ $dish->name }}</td>
                    <td>{{ $dish->description }}</td>
                    <td>${{ number_format($dish->price, 2) }}</td>
                    <td>{{ $dish->section->name }}</td>
                    <td>
                        <a href="{{ route('dishes.show', $dish->id) }}">Ver</a> |
                        <a href="{{ route('dishes.edit', $dish->id) }}">Editar</a> |
                        <form action="{{ route('dishes.destroy', $dish->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
