<?php

$con=mysql_connect("localhost", "root", "");

$mydb=mysql_select_db("software2");

if(isset($_POST["valores"])){
  $vehiculo=$_POST["vehiculo"];
  $alquilar=$_POST["alquilarparqueadero"];
  $lugar=$_POST["lugarentrega"];
  $reservadopor=$_POST["reservadopor"];

  $log = mysql_query("INSERT INTO reservas (vehiculo,parqueadero,lugarentrega,reservadopor) values 
    ('$vehiculo','$alquilar','$lugar','$reservadopor')");


  header('Location: postlogeo.html');
} 

?>

<!DOCTYPE html>
<html>

    <h2>MovilYa</h2> 
    <h3>Usuario: crear reserva</h3>
    1. Quiero alquilar un vehiculo... 
  <!--<select name="vehiculo">
    <option value="carro">Carro</option> 
    <option value="moto">Moto</option> 
    <option value="bicicleta">Bicicleta</option>
  </select>-->
  <input type="text" name="vehiculo">
  <div>
    2. Quiero alquilar un vehiculo del parqueado... 
    <input type="text" name="alquilarparqueadero">
  </div>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Simple markers</title>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 45%;
        width: 35%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script>

      function initMap() {
        var myLatLng = {lat: -25.363, lng: 131.044};

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: myLatLng
        });

        var pos = {lat: 7.116476, lng:-73.105437};
        var bucaramanga1 = {lat: 7.1160507, lng: -73.1114196};
        var bucaramanga2 = {lat: 7.1153437, lng: -73.105408};
        var bucaramanga3 = {lat: 7.1161588, lng: -73.1090731};
        var bucaramanga4 = {lat: 7.1143302, lng: -73.1101437};
        var bucaramanga5 = {lat: 7.1143853, lng: -73.1099519};
        var florida1 = {lat: 7.0685395, lng: -73.0974235};
        var florida2 = {lat: 7.0698939, lng: -73.1008341};
        var giron1 = {lat: 7.0669264, lng: -73.1646974};
        var giron2 = {lat: 7.0684089, lng: -73.1686528};
        var giron3 = {lat: 7.0694204, lng: -73.1725474};
        var giron4 = {lat: 7.0795938, lng: -73.1610201};
        var giron5 = {lat: 7.0683146, lng: -73.1692983};
        var piedecuesta1 = {lat: 6.9859824, lng: -73.0523676};
        var piedecuesta2 = {lat: 6.9855006, lng: -73.0506108};
        var piedecuesta3 = {lat: 6.9862329, lng: -73.0501427};
        var piedecuesta4 = {lat: 6.9899826, lng: -73.0540494};
        var piedecuesta5 = {lat: 6.9855743, lng: -73.0508226};



        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: pos
        });

        var bucaramanga1 = new google.maps.Marker({
          position: bucaramanga1,
          map: map,
          title: 'Parqueadero 1'
        });

        var bucaramanga2 = new google.maps.Marker({
          position: bucaramanga2,
          map: map,
          title: 'Parqueadero 2'
        });

        var bucaramanga3 = new google.maps.Marker({
          position: bucaramanga3,
          map: map,
          title: 'Parqueadero 3'
        });

        var bucaramanga4 = new google.maps.Marker({
          position: bucaramanga4,
          map: map,
          title: 'Parqueadero 4'
        });

        var bucaramanga5 = new google.maps.Marker({
          position: bucaramanga5,
          map: map,
          title: 'Parqueadero 5'
        });

        var florida1 = new google.maps.Marker({
          position: florida1,
          map: map,
          title: 'Parqueadero 6'
        });

        var florida2 = new google.maps.Marker({
          position: florida2,
          map: map,
          title: 'Parqueadero 7'
        });

        var giron1 = new google.maps.Marker({
          position: giron1,
          map: map,
          title: 'Parqueadero 8'
        });

        var giron2 = new google.maps.Marker({
          position: giron2,
          map: map,
          title: 'Parqueadero 9'
        });

        var giron3 = new google.maps.Marker({
          position: giron3,
          map: map,
          title: 'Parqueadero 10'
        });

        var giron4 = new google.maps.Marker({
          position: giron4,
          map: map,
          title: 'Parqueadero 11'
        });

        var giron5 = new google.maps.Marker({
          position: giron5,
          map: map,
          title: 'Parqueadero 12'
        });

        var piedecuesta1 = new google.maps.Marker({
          position: piedecuesta1,
          map: map,
          title: 'Parqueadero 13'
        });

        var piedecuesta2 = new google.maps.Marker({
          position: piedecuesta2,
          map: map,
          title: 'Parqueadero 14'
        });

        var piedecuesta3 = new google.maps.Marker({
          position: piedecuesta3,
          map: map,
          title: 'Parqueadero 15'
        });

        var piedecuesta4 = new google.maps.Marker({
          position: piedecuesta4,
          map: map,
          title: 'Parqueadero 16'
        });

        var piedecuesta5 = new google.maps.Marker({
          position: piedecuesta5,
          map: map,
          title: 'Parqueadero 17'
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBt7MA7_ileeh2KYYM-4VEvgenTRChEENI&callback=initMap">
    </script>
  </body>

    <div>
  3. El lugar de entrega sera en el parqueadero... 
  <input type="text" name="lugarentrega">
    </div>

  <div>
    4. El usuario que reservo el vehiculo es... 
    <input type="text" name="reservadopor">
  </div>

    <input type="submit" name="valores" value="Hacer reserva">

</html>