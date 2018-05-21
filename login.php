<?php
	$con=mysql_connect("localhost", "root", "");
	$mydb=mysql_select_db("software2");
	if(isset($_POST["login"])){
		$usuario=$_POST["user"];
        $pass=$_POST["pass"];
        
        $log = mysql_query("SELECT * FROM usuarios WHERE usuario='$usuario' AND pass='$pass'");
        
		/*$log2 = mysql_query("SELECT * FROM usuarios WHERE (usuario='$usuario' AND pass='$pass' AND tipousuario=empleado");
        */	
        
		$row=mysql_fetch_array($log, MYSQL_ASSOC);
				if (mysql_num_rows($log)>0){
					if($row['tipousuario'] == 'empleado'){
					/*if (mysql_num_rows($log2)>0){
						header('Location: postlogeoempleado.html');*/
						header('Location: postlogeoempleado.html');
					}else{
						header('Location: postlogeo.html');
						}
					}
				}
			
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Ingreso al sistema</title>
</head>
<body>
<body>
    <main class="hero is-vertical is-bold">
        <div class="hero-head">
            <nav class="navbar">
                <div class="container">
                    <div class="navbar-brand">
                        <a class="navbar-item" href="#">
                            <img class="logo" src="static/marca/1x/logo_normal.png" alt="Logo"> MóvilYa
                        </a>
                    </div>
                    <div id="navbarMenu" class="navbar-menu">
                        <div class="navbar-end">
                            <div class="tabs is-right">
                                <ul>
                                    <!--<li>
                                        <a href="./registrarse.php">Registrarse</a>
                                    </li>-->
                                </ul>
                                <span class="navbar-item">
                                    <a class="button is-danger" href="./login.php">
                                        <span title="Salir">Salir</span>
                                    </a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="columns">
                    <div class="column">
                        <img src="./static/marca/2x/logo_normal@2x.png" alt="" srcset="">
                    </div>
                </div>
                <div class="columns">
                    <div class="column">
						<form action="./login.php" method="post">

						</form>
                    </div>
                </div>

            </div>
        </div>
    </main>
</body>
</body>
</html>


<html>
<head><title> Login </title></head>
<body>
<form action="login.php" method="post">
<h2>MovilYa</h2>
<h3>Login: introduzca sus datos</h3>

Usuario:<input type="text" name="user">
Contaseña:<input type="text" name="pass">
<input type="submit" name="login" value="Logearse">

</form>
</body>
</html>