<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Pago</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    <h1>Detalles del Pago</h1>
    
    <p><strong>Número de Mesa:</strong> {{ $payment->table_number }}</p>
    <p><strong>Monto:</strong> ${{ number_format($payment->amount, 2) }}</p>
    <p><strong>Método de Pago:</strong> {{ ucfirst($payment->payment_method) }}</p>
    <p><strong>Fecha de Pago:</strong> {{ $payment->created_at->format('d/m/Y H:i') }}</p>

    <a href="{{ route('payments.index') }}">Volver al Listado de Pagos</a>
</body>
</html>
