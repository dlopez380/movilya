<?php

$con = mysql_connect("localhost", "movilya", "Movilya2018");

$mydb = mysql_select_db("software2");

if (isset($_POST[ "valoresmant" ])) {
    $vehiculoenviar = $_POST[ "vehiculoenviar" ];
    $vehiculoparqueadero = $_POST[ "vehiculoparqueadero" ];

    $log1 = mysql_query("INSERT INTO vehiculosmantenimiento (vehiculo,parqueadero) VALUES ('$vehiculoenviar','$vehiculoparqueadero')");

    $log2 = mysql_query("UPDATE parqueaderos SET $vehiculoenviar = $vehiculoenviar - 1 WHERE id = '$vehiculoparqueadero'");

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
    <h3>Empleado: reportar entrada de vehículo a mantenimiento</h3>
    </br>
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
            <!--2. El vehículo tiene -->         
        <input type="submit" name="valoresmant" value="Mandar a mantenimiento">
    </form>

    <?php

        $log3 = mysql_query("SELECT * FROM vehiculosmantenimiento");

        while($result=mysql_fetch_array($log3, MYSQL_ASSOC)){
            echo "<br/> Id mantenimiento: " . $result['id'];
            echo "<br/> Vehiculo: " . $result['vehiculo'];
            echo "<br/> Parqueadero proveniente: " . $result['parqueadero'];
            echo "<br/>____________________________________";

        }

    ?>
    <script>



    </script>
</body>

</html>