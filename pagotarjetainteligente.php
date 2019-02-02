<?php

$con=mysql_connect("localhost", "root", "");

$mydb=mysql_select_db("software2");

if(isset($_POST["subirtarjetainteligente"])){
    $numeroreserva=$_POST["numeroreserva"];
    $numerotarjetainteligente=$_POST["numerotarjetainteligente"];

    $log1 = mysql_query("INSERT INTO pagostarjetainteligente (reservapagada,numerotarjetainteligente) VALUES 
    ('$numeroreserva','$numerotarjetainteligente')");
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
<h3>Empleado: confirmar alquiler (tarjeta inteligente)</h3>

    <form action="pagotarjetainteligente.php" method="post">
        <div>
            Confirme la reserva que quiere pagar: 
            <input type="text" name="numeroreserva">
        </div>
        <div>
            Escribe tu numero de tarjeta inteligente (8 digitos): 
            <input type="text" name="numerotarjetainteligente">
        </div>

        <input type="submit" name="subirtarjetainteligente" value="Pagar">
    </form>


    
</body>
</html>