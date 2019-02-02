<?php

$con = mysql_connect("localhost", "root", "Movilya2018");

$mydb = mysql_select_db("software2");

if (isset($_POST[ "valoresmant2" ])) {
    $vehiculosacar = $_POST[ "vehiculosacar" ];

    $log1 = mysql_query("DELETE FROM vehiculosmantenimiento WHERE vehiculosmantenimiento.id = $vehiculosacar");

   
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
    <h3>Empleado: reportar salida de vehículo a mantenimiento</h3>
    </br>
    <form method="post" action="salidavehiculomantenimiento.php">
        1. Que id de mantenimiento quiere eliminar (sacar vehiculo de mantenimiento)?
        <input type="text" name="vehiculosacar">
        </br>
            <!--2. El vehículo tiene -->         
        <input type="submit" name="valoresmant2" value="Sacar de mantenimiento">
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