<?php
  $con = mysql_connect("localhost", "movilya", "Movilya2018");

  $mydb = mysql_select_db("software2");


  session_start(); 
  session_unset();
  
  if (isset($_POST[ "login" ])) {
    $usuario = $_POST[ "user" ];
    $pass = $_POST[ "pass" ];

    

    $log = mysql_query("SELECT * FROM usuarios WHERE usuario='$usuario' AND pass='$pass'");
    /*$log2 = mysql_query("SELECT * FROM usuarios WHERE (usuario='$usuario' AND pass='$pass' AND tipousuario=empleado");
*/
    $row = mysql_fetch_array($log, MYSQL_ASSOC);

    if (mysql_num_rows($log) > 0) {
      if ($row[ 'tipousuario' ] == 'empleado') {
        /*if (mysql_num_rows($log2)>0){
header('Location: postlogeoempleado.html');*/
        header('Location: postlogeoempleado.html');
      } elseif($row[ 'tipousuario' ] == 'cliente') {
        $_SESSION["loginusuario"] = $usuario;
        header('Location: postlogeo.html');
      }else{
        header('Location: postlogeoadmin.html');
      }
    }
  }

?>

<!DOCTYPE html>
<html lang="es-CO">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Móvil Ya - Entrar</title>
    <link rel="stylesheet" href="./css/main.css">
</head>

<body>
<section class="hero is-dark is-bold is-fullheight">
    <div class="hero-body">
        <div class="container has-text-centered">
            <div class="column is-4 is-offset-4">
                <h3 class="title">Ingresar al sistema</h3>
                <p class="subtitle">Debes ingresar antes de poder usar nuestros servicios.</p>
                <div class="box">
                    <a href="index.html" target="_self">
                        <figure class="avatar">
                            <img src="./img/marca/SVG/logo_normal.svg" width="189" height="189">
                        </figure>
                    </a>
                    <form action="login.php" method="post">
                        <div class="field">
                            <div class="control">
                                <input name="user" class="input is-large" type="text" placeholder="Tu usuario"
                                       autofocus>
                            </div>
                        </div>
                        <div class="field">
                            <div class="control">
                                <input name="pass" class="input is-large" type="password" placeholder="Tu clave">
                            </div>
                        </div>
                        <button type="submit" name="login" class="button is-block is-success is-large
                        is-fullwidth">Entrar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<script async type="text/javascript" src="./js/main.js"></script>
</body>

</html>