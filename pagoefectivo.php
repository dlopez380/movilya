<?php

$con=mysql_connect("localhost", "root", "");

$mydb=mysql_select_db("software2");

if(isset($_POST["subirefectivo"])){
    $numeroreserva=$_POST["numeroreserva"];
    $cantidadefectivo=$_POST["cantidadefectivo"];

    $log1 = mysql_query("INSERT INTO pagosefectivo (reservapagada,cantidadefectivo) VALUES 
    ('$numeroreserva','$cantidadefectivo')");
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
<h3>Empleado: confirmar alquiler (efectivo)</h3>

    <form action="pagoefectivo.php" method="post">
        <div>
            Confirme la reserva que quiere pagar: 
            <input type="text" name="numeroreserva">
        </div>
        <div>
            Introduzca la cantidad de dinero a pagar: 
            <input type="text" name="cantidadefectivo">
        </div>

        <input type="submit" name="subirefectivo" value="Pagar">
    </form>


    
</body>
</html>