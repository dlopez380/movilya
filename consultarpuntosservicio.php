<?php



?>

<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Simple markers</title>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 60%;
        width: 50%
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
    <div>
        <h2>MovilYa</h2> 
        <h3>Usuario: consultar puntos de servicio cercano</h3>
    </div>

    <div id="map"></div>
    <script>

      function initMap() {
        var myLatLng = {lat: 7.116458, lng: -73.105443};

        var bucaramanga1 = {lat: 7.1160507, lng: -73.1114196};
        var bucaramanga2 = {lat: 7.1153437, lng: -73.105408};
        var bucaramanga3 = {lat: 7.1161588, lng: -73.1090731};
        var bucaramanga4 = {lat: 7.1143302, lng: -73.1101437};
        var bucaramanga5 = {lat: 7.1143853, lng: -73.1099519};

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: myLatLng
        });

        var contentString = '<div id="content">'+
            '<div id="siteNotice">'+
            '<div id="bodyContent">'+
            '<p><b>Usted está aquí</b></p>'+
            '</div>'+
            '</div>';

        var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          title: 'Usted está aquí.'
        });

        var infowindow = new google.maps.InfoWindow({
          content: contentString
        });

        marker.addListener('click', function() {
          infowindow.open(map, marker);
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
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBt7MA7_ileeh2KYYM-4VEvgenTRChEENI&callback=initMap">
    </script>
  </body>
</html>