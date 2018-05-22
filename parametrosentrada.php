<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>MovilYa</h2>
    <h3>Empleado: reportar entrada de vehículo a mantenimiento</h3>
    <form method="post" action="entradavehiculomantenimiento.php">
        1. Que vehículo quiere enviar a mantenimiento?
        <select name="vehiculoenviar">
            <option value="bicicletas">Bicicleta</option>
            <option value="carros">Carro</option>
            <option value="motos">Moto</option>
        </select>
        </br>
        2. Seleccione el parqueadero del vehículo que quiere mandar a mantenimiento... 
        <input type="text" name="vehiculoparqueadero">
        </br>
        <input type="submit" name="vehiculomant">
    </form>

    

</body>
</html>