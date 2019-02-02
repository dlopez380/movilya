<?php

$con = mysql_connect("localhost", "root", "");

$mydb = mysql_select_db("software2");

if (isset($_POST[ "valoresmant" ])) {
    $vehiculo = $_POST[ "vehiculo" ];
    $kms = $_POST[ "kms" ];
    
    $log = mysql_query("UPDATE parametrosmantenimiento SET $vehiculo = $kms WHERE parametrosmantenimiento.id = 1");

    header('Location: postlogeoadmin.html');
}
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
    <h3>Administrador: establecer parametros de mantenimiento</h3>
    <form action="establecerparametros.php" method="post">
        1. De que vehículo quiere modificar los parametros de mantenimiento?
        <select name="vehiculo">
            <option value="bicicletas">Bicicleta</option>
            <option value="carros">Carro</option>
            <option value="motos">Moto</option>
        </select>
        </br>
        2. A cuantos kilometros quiere meter el vehículo a mantenimiento?
        <input type="text" name="kms">
        </br>
        </br>
        <input type="submit" name="valoresmant" value="Cambiar parametros de mantenimiento">
    </form>
    <i>Todos los vehículos tendrán que entrar a mantenimiento por defecto cada</i> <b>10</b> <i>kilometros</i>
    
</body>
</html>