<?php

$con = mysql_connect("localhost", "movilya", "Movilya2018");

$mydb = mysql_select_db("software2");

if (isset($_POST[ "vehiculomant" ])) {
    $vehiculoenviar = $_POST[ "vehiculoenviar" ];
    $vehiculoparqueadero = $_POST[ "vehiculoparqueadero" ];

    $log1 = mysql_query("SELECT $vehiculoenviar FROM parametrosmantenimiento WHERE id = 1");

    while($result=mysql_fetch_array($log1, MYSQL_ASSOC)){
         $result[$vehiculoenviar];
    }

    $log2 = mysql_query("UPDATE parqueaderos SET $vehiculoenviar = $vehiculoenviar - 1 WHERE id = '$vehiculoparqueadero'");
}

?>

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
    </br>
    <form>
        </br>
        2. El vehículo tiene <?php echo $result['$vehiculo'] ?>
    </form>
    
</body>
</html>