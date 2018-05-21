<?php

$con=mysql_connect("localhost", "movilya", "Movilya2018");

$mydb=mysql_select_db("software2");

if(isset($_POST["subirtarjetacredito"])){
    $numeroreserva=$_POST["numeroreserva"];
    $numerotarjetacredito=$_POST["numerotarjetacredito"];
    $codigoseguridad=$_POST["codigoseguridad"];

    $log1 = mysql_query("INSERT INTO pagostarjetacredito (reservapagada,numerotarjetacredito,ccv) values 
    ('$numeroreserva','$numerotarjetacredito','$codigoseguridad')");

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
    <h3>Empleado: confirmar alquiler (tarjeta de credito)</h3>

    <form action="pagotarjetacredito.php" method="post">
        <div>
            Confirme la reserva que quiere pagar: 
            <input type="text" name="numeroreserva">
        </div>
        <div>
            Escribe tu numero de tarjeta de credito: 
            <input type="text" name="numerotarjetacredito">
        </div>
        <div>
            Escribe tu numero de seguridad:
            <input type="text" name="codigoseguridad">
        </div>

        <input type="submit" value="Pagar" name="subirtarjetacredito">
    </form>
</br>


    
</body>
</html>