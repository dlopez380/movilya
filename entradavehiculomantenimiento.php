<?php

$con = mysql_connect("localhost", "movilya", "Movilya2018");

$mydb = mysql_select_db("software2");

if (isset($_POST[ "valores" ])) {
    $vehiculoparqueadero = $_POST[ "vehiculoparqueadero" ];
    $vehiculo = $_POST[ "vehiculo" ];
    
    $minutos = $_POST[ "minutos" ];
    $lugar = $_POST[ "lugarentrega" ];
    $reservadopor = $_SESSION[ "loginusuario" ];
    //$_SESSION['loginusuario'] = $_POST['reservadopor'];

    //$reservadopor = $_SESSION[ "loginusuario" ];    

    $log1 = mysql_query("SELECT ");

    $log = mysql_query("INSERT INTO reservas (vehiculo,parqueadero,minutos,lugarentrega,reservadopor) values 
        ('$vehiculo','$alquilar','$minutos','$lugar','$reservadopor')");

    /*$log = mysql_query("INSERT INTO reservas (vehiculo,parqueadero,minutos,lugarentrega,reservadopor) values 
        ('$vehiculo','$alquilar','$minutos','$lugar','$reservadopor')");*/

    $log2 = mysql_query("UPDATE parqueaderos SET $vehiculo = $vehiculo - 1 WHERE id = '$alquilar'");

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
    </br>
    <form>
        1. Seleccione el parqueadero del vehículo que quiere mandar a mantenimiento... 
        <input type="text" name="vehiculoparqueadero">
        </br>
        2. Seleccione el tipo de vehículo... 
        <select name="vehiculo">
            <option value="bicicleta">Bicicleta</option>
            <option value="carro">Carro</option>
            <option value="moto">Moto</option>
        </select>
        3. El vehículo tiene <?php ?>
    </form>
    
</body>
</html>