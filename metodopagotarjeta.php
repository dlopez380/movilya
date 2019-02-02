<?php

    $con=mysql_connect("localhost", "root", "");

    $mydb=mysql_select_db("software2");

    if(isset($_POST["submit2"])){
        $reservaconfirmar=$_POST["reservaconfirmar"];
        $metodopago=$_POST["metodopago"];

        /*if(pago con tarjeta, llenar historial de pago con tarjeta. si es con otro entonces otro historial)*/

        if($metodopago='tarjetacredito'){

            $log = mysql_query("INSERT INTO pagotarjetacredito (numerotarjeta,ccv) values ($");

        }

        $log = mysql_query("SELECT * FROM reservas WHERE reservadopor='$usuariocons'");
        /*$log2 = mysql_query("SELECT * FROM usuarios WHERE (usuario='$usuario' AND pass='$pass' AND tipousuario=empleado");
        */	

        while($result=mysql_fetch_array($log, MYSQL_ASSOC)){
            echo "<br/> Id de reserva: " . $result['id'];
            echo "<br/> Vehiculo reservado: " . $result['vehiculo'];
            echo "<br/> Parqueadero a recojer vehiculo: " . $result['parqueadero'];
            echo "<br/> Parqueadero a dejar vehiculo: " . $result['lugarentrega'];
            echo "<br/> Fecha en que se reservo: " . $result['fechareserva'];
            echo "<br/> Reservado por: " . $result['reservadopor'];
            echo "<br/>______________________________";
        }
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
    
</body>
</html>