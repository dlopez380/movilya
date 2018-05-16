<?php

$con=mysql_connect("localhost", "root", "");

$mydb=mysql_select_db("software2");

if(isset($_POST["submit2"])){
    $reservaconfirmar=$_POST["reservaconfirmar"];
    $metodopago=$_POST["metodopago"];

    $log3 = mysql_query("INSERT INTO metodopago (reservapagada,metodopago) values ('$reservaconfirmar','$metodopago')");


    if($metodopago='tarjetacredito'){
        header('Location: pagotarjetacredito.php');
    }
    
    if($metodopago='tarjetainteligente'){
        header('Location: pagotarjetainteligente.php');
    }
    
    if($metodopago='efectivo'){
        header('Location: pagoefectivo.php');
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

    <h2>MovilYa</h2>
    <h3>Empleado: confirmar alquiler</h3>

    <form action="mostrarreservasusuario.php" method="post">
        Que numero de reserva quiere confirmar?
        <input type="text" name="reservaconfirmar">
        </br>
        Con que metodo de pago el cliente va a completar el alquiler?
        <select name="metodopago">
            <option value="tarjetacredito">Tarjeta de credito</option> 
            <option value="tarjetainteligente">Tarjeta inteligente</option>
            <option value="efectivo">Efectivo</option> 
        </select>       
        </br>
        <input type="submit" name="submit2" value="Proceder">

    </form>
        
    <?php
        if(isset($_POST["submit"])){
            $usuariocons=$_POST["usuariocons"];

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
    
</body>
</html>