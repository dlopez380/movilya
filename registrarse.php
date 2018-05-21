<?php

  $con = mysql_connect("localhost", "root", "bpi01bFDW34A");

  $mydb = mysql_select_db("software2");

  if (isset($_POST[ "registrarse" ])) {
    $usuario = $_POST[ "user" ];
    $pass = $_POST[ "pass" ];
    $tipousuario = $_POST[ "tipousuario" ];

    $log = mysql_query("INSERT INTO usuarios (usuario,pass,tipousuario) values ('$usuario','$pass','$tipousuario')");

    header('Location: index.html');
  }
?>

<html lang="es-CO">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Móvil Ya - Entrar</title>
    <link rel="stylesheet" href="./css/main.css">
</head>

<body>
<section class="hero is-info is-bold is-fullheight">
    <div class="hero-body">
        <div class="container has-text-centered">
            <div class="column is-4 is-offset-4">
                <h3 class="title">¡Es un placer tenerte aquí con nosotros!</h3>
                <p class="subtitle">Completa tus datos y comienza a moverte.</p>
                <div class="box">
                    <a href="index.html" target="_self">
                        <figure class="avatar">
                            <img src="./img/marca/SVG/logo_normal.svg" width="189" height="189">
                        </figure>
                    </a>
                    <form action="registrarse.php" method="post">

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


                        <div class="field">
                            <div class="control has-icons-left">
                                <div class="select is-large is-fullwidth">
                                    <select name="tipousuario">
                                        <option value="cliente">Soy un usuario</option>
                                        <option value="empleado">Soy un empleado</option>
                                    </select>
                                </div>
                                <div class="icon is-small is-left">
                                    <i class="mdi mdi-account"></i>
                                </div>
                            </div>
                        </div>

                        <button type="submit" name="registrarse" class="button is-block is-info is-large
                        is-fullwidth">Registrarse
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