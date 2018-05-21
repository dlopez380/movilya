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
                    <div class="columns">
                        <div class="column">
                            <h1 class="title">
                                <div class="icon is-large">
                                    <i class="mdi mdi-plus-circle"></i>
                                </div>
                                Reservar un vehículo
                            </h1>
                        </div>
                    </div>

                    <!-- Termina columna del titulo -->
                    <div class="section">
                        <div class="columns">
                            <div class="column">
                                <h2>Quiero alquilar...</h2>
                                <div class="field">
                                    <div class="control">
                                        <label class="radio">
                                            <input type="radio" name="vehiculo" value="carros">
                                            <span class="icon"><i class="mdi mdi-car"></i></span>
                                            Un carro
                                        </label>
                                        <label class="radio">
                                            <input type="radio" name="vehiculo" value="motos">
                                            <span class="icon"><i class="mdi mdi-motorbike"></i></span>
                                            Una moto
                                        </label>
                                        <label class="radio">
                                            <input type="radio" name="vehiculo" value="bicicletas">
                                            <span class="icon"><i class="mdi mdi-bike"></i></span>
                                            Una bicicleta
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="columns">
                            <div class="column is-6">
                                <div class="field">

                                    <div class="control">
                                        <label class="label">Del punto:</label>
                                        <div class="select">
                                            <select name="alquilarparqueadero">
                                                <option>Escoge uno...</option>
                                                <option value="1">Galerías</option>
                                                <option value="2">Gratamira</option>
                                                <option value="3">Registraduría</option>
                                                <option value="4">Parking Car</option>
                                                <option value="5">QuicklyParking</option>
                                                <option value="6">Bellavista</option>
                                                <option value="7">Helechales</option>
                                                <option value="8">Lenguerke</option>
                                                <option value="9">Basílica</option>
                                                <option value="10">San Carlos</option>
                                                <option value="11">El Bueno</option>
                                                <option value="12"> Gran Monarca</option>
                                                <option value="13">La Sexta</option>
                                                <option value="14">Génesis</option>
                                                <option value="15">Central</option>
                                                <option value="16">Trapiches</option>
                                                <option value="17">Housecar57</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="column is-6">
                                <div class="field">
                                    <div class="control">
                                        <label class="label" for="minutos">Por
                                            <input name="minutos" class="input" type="number" min="15" step="15">
                                            <small class="has-text-right">minutos</small>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="columns">
                            <div class="column">
                                <div class="field">
                                    <div class="control">
                                        <label class="label" for="lugarentrega">Entregaré en:
                                            <div class="select">
                                                <select name="lugarentrega">
                                                    <option>Escoge uno...</option>
                                                    <option value="1">Galerías</option>
                                                    <option value="2">Gratamira</option>
                                                    <option value="3">Registraduría</option>
                                                    <option value="4">Parking Car</option>
                                                    <option value="5">QuicklyParking</option>
                                                    <option value="6">Bellavista</option>
                                                    <option value="7">Helechales</option>
                                                    <option value="8">Lenguerke</option>
                                                    <option value="9">Basílica</option>
                                                    <option value="10">San Carlos</option>
                                                    <option value="11">El Bueno</option>
                                                    <option value="12"> Gran Monarca</option>
                                                    <option value="13">La Sexta</option>
                                                    <option value="14">Génesis</option>
                                                    <option value="15">Central</option>
                                                    <option value="16">Trapiches</option>
                                                    <option value="17">Housecar57</option>
                                                </select>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="columns">
                            <div class="column">
                                <div class="field">
                                    <div class="control">
                                        <label class="label">
                                            Confirma tu nombre de usuario:
                                            <input type="text" class="input" name="reservadopor">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="columns">
                            <div class="column">
                                <button type="submit" class="button is-primary is-large is-fullwidth">Crear mi
                                    reserva
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="mapa"></div>
</section>
<script src="./js/main.js"></script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA0o0TyvrHx31FywTtLbqNkBigvfrDFTyA&callback=iniciarMapa">
</script>
</body>
</html>