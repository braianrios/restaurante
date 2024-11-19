<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagos</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    <h1>Pagos Realizados</h1>
    <table>
        <thead>
            <tr>
                <th>Número de Mesa</th>
                <th>Monto</th>
                <th>Método de Pago</th>
                <th>Fecha de Pago</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($payments as $payment)
                <tr>
                    <td>{{ $payment->table_number }}</td>
                    <td>${{ number_format($payment->amount, 2) }}</td>
                    <td>{{ ucfirst($payment->payment_method) }}</td>
                    <td>{{ $payment->created_at->format('d/m/Y H:i') }}</td>
                    <td><a href="{{ route('payments.show', $payment->id) }}">Ver Detalles</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('payments.create') }}">Realizar Nuevo Pago</a>
</body>
</html>
