<?php
	$con=mysql_connect("localhost", "root", "");

	$mydb=mysql_select_db("software2");

	if(isset($_POST["login"])){
		$usuario=$_POST["user"];
		$pass=$_POST["pass"];

		$log = mysql_query("SELECT * FROM usuarios WHERE usuario='$usuario' AND pass='$pass'");
				if (mysql_num_rows($log)>0){
					header('Location: postlogeo.html');
				}
			}
			
?>

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