<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <h2>MovilYa</h2> 
        <h3>Usuario: consultar disponibilidad</h3>
    </div>
    <div>
    <?php

        $con=mysql_connect("localhost", "movilya", "Movilya2018");

        $mydb=mysql_select_db("software2");

        if(isset($_POST["consultaparque"])){
            $parqueadero=$_POST["idparqueadero"];

            $log = mysql_query("SELECT * FROM parqueaderos WHERE id='$parqueadero'");
            
            while($result=mysql_fetch_array($log, MYSQL_ASSOC)){
                echo "<br/> Numero de parquedero: " . $result['id'];
                echo "<br/> Parqueadero: " . $result['nombre'];
                echo "<br/> Numero carros: " . $result['carros'];
                echo "<br/> Numero motos: " . $result['motos'];
                echo "<br/> Numero bicicletas: " . $result['bicicletas'];
            }
            /*$result = $conn->query($log);
            while($row = $result->fetch_assoc()) {
                echo "Numero parqueadero: " . $row["id"]. " - Nombre: " . $row["nombre"]. " - Carros:" . $row["carros"]. 
                " - Motos:" . $row["motos"]. " - Bicicletas:" . $row["bicicletas"];
            */
        }
        ?>
    </div>
    
    
</body>
</html>