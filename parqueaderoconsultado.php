<?php

$con=mysql_connect("localhost", "root", "");

$mydb=mysql_select_db("software2");

if(isset($_POST["consultapar"])){
    $parqueadero=$_POST["parqueadero"];

    $log = mysql_query("SELECT * FROM parqueaderos WHERE parqueader='$parqueadero'");
    
    while($result=mysql_fetch_array($log, MYSQL_ASSOC)){
        echo "<br/> Numero de parquedero: " . $result['id'];
        echo "<br/> Parqueadero: " . $result['nombre'];
        echo "<br/> Numero carros: " . $result['carros'];
        echo "<br/> Numero motos: " . $result['motos'];
        echo "<br/> Numero bicicletas: " . $result['bicicletas'];
    }
}
?>