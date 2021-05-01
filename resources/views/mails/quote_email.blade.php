<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<h, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>Se realizado una cotizacion a las {{ $quote->created_at->format('d m Y') }}.</p>
    <p>Estos son los datos del usuario que ha realizado la Cotizacion:</p>
    <ul>
        <li>Nombre: {{ $quote->name_client }}</li>
        <li>Correo: {{ $quote->email_client }}</li>
        <li>Telefono: {{ $quote->phone_client }}</li>
    </ul>
    <p>Y Cotizo el siguiente Modelo:</p>
    <ul>
        <li>Modelo: {{ $quote->car_model }}</li>
    </ul>
</body>

</html>