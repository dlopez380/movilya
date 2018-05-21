<?php

  $con = mysql_connect("localhost", "root", "bpi01bFDW34A");

  $mydb = mysql_select_db("software2");

  if (isset($_POST[ "valores" ])) {
    $vehiculo = $_POST[ "vehiculo" ];
    $alquilar = $_POST[ "alquilarparqueadero" ];
    $minutos = $_POST[ "minutos" ];
    $lugar = $_POST[ "lugarentrega" ];
    $reservadopor = $_POST[ "reservadopor" ];

    $log = mysql_query("INSERT INTO reservas (vehiculo,parqueadero,minutos,lugarentrega,reservadopor) values 
      ('$vehiculo','$alquilar','$minutos','$lugar','$reservadopor')");

    $log2 = mysql_query("UPDATE parqueaderos SET $vehiculo = $vehiculo - 1 WHERE id = '$alquilar'");

    $log2 = mysql_query("UPDATE parqueaderos SET $vehiculo = $vehiculo + 1 WHERE id = '$lugar'");


    header('Location: postlogeo.html');
  }

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Móvil Ya - Crear una reserva</title>
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
<section class="section">
    <div class="content">
        <div class="columns">
            <div class="column is-12-mobile is-5-desktop">
                <div class="box">
                    <h1 class="title">
                        <div class="icon is-large">
                            <i class="mdi mdi-plus-circle"></i>
                        </div>
                        Reservar un vehículo
                    </h1>
                </div>
            </div>
        </div>
    </div>

    <div id="mapa"></div>
</section>
<script src="./js/sweetalert2.all.min.js"></script>
<script src="./js/main.js"></script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA0o0TyvrHx31FywTtLbqNkBigvfrDFTyA&callback=iniciarMapa">
</script>

</body>
</html>