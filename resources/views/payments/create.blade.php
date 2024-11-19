<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Realizar Pago</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    <h1>Realizar Pago</h1>
    <form action="{{ route('payments.store') }}" method="POST">
        @csrf
        <label for="table_number">Número de Mesa:</label>
        <input type="text" name="table_number" id="table_number" required><br>

        <label for="amount">Monto:</label>
        <input type="number" name="amount" id="amount" step="0.01" required><br>

        <label for="payment_method">Método de Pago:</label>
        <select name="payment_method" id="payment_method" required>
            <option value="credit_card">Tarjeta de Crédito</option>
            <option value="cash">Efectivo</option>
            <option value="transfer">Transferencia</option>
        </select><br>

        <button type="submit">Realizar Pago</button>
    </form>
</body>
</html>
