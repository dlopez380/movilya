<?php

$con=mysql_connect("localhost", "root", "");

$mydb=mysql_select_db("software2");

if(isset($_POST["consultapar"])){
    $parqueadero=$_POST["parqueadero"];

    $log = mysql_query("SELECT * FROM parqueaderos WHERE parqueadero='$parqueadero'");
    
    while($result=mysql_fetch_array($log, MYSQL_ASSOC)){
        echo "<br/> Numero de parquedero: " . $result['id'];
        echo "<br/> Parqueadero: " . $result['nombre'];
        echo "<br/> Numero carros: " . $result['carros'];
        echo "<br/> Numero motos: " . $result['motos'];
        echo "<br/> Numero bicicletas: " . $result['bicicletas'];
    }
    header('Location: parqueaderoconsultado.php');
}
?>

<html>

    <head>

    </head>
    <body>
        <h2>MovilYa</h2> 
        <h3>Usuario: consultar disponibilidad</h3>

        <form action="parqueaderoconsultado.php" method="POST">
            Inserte el numero de parquedero al que quiere consultar disponibilidad:
            <input type="text" name="idparqueadero">
            <div>
                <input type="submit" name="consultaparque"value="Checkear">
            </div>
        </form>
        <table>
            <tr>
                <th>Numero</th>
                <th>Nombre parqueadero</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Galerias</td>

            </tr>
            <tr>
                <td>2</td>
                <td>Gratamira</td>

            </tr>
            <tr>
                <td>3</td>
                <td>Registraduria</td>

            </tr>
            <tr>
                <td>4</td>
                <td>Parking car</td>

            </tr>
            <tr>
                <td>5</td>
                <td>Quickly parking</td>

            </tr>
            <tr>
                <td>6</td>
                <td>Bellavista</td>

            </tr>
            <tr>
                <td>7</td>
                <td>Helechales</td>

            </tr>
            <tr>
                <td>8</td>
                <td>Lenguerke</td>

            </tr>
            <tr>
                <td>9</td>
                <td>Basilica</td>

            </tr>
            <tr>
                <td>10</td>
                <td>San Carlos</td>

            </tr>
            <tr>
                <td>11</td>
                <td>El bueno</td>

            </tr>
            <tr>
                <td>12</td>
                <td>Gran Monarca</td>

            </tr>
            <tr>
                <td>13</td>
                <td>La Sexta</td>

            </tr>
            <tr>
                <td>14</td>
                <td>Genesis</td>

            </tr>
            <tr>
                <td>15</td>
                <td>Central</td>

            </tr>
            <tr>
                <td>16</td>
                <td>Trapiches</td>

            </tr>
            <tr>
                <td>17</td>
                <td>Housecar57</td>

            </tr>
        </table>

    </body>

</html>