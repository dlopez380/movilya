<?php
	
		$con=mysql_connect("localhost", "root", "");

	$mydb=mysql_select_db("software2");

	if(isset($_POST["registrarse"])){
		$usuario=$_POST["user"];
		$pass=$_POST["pass"];
		$tipousuario=$_POST["tipousuario"];

		$log = mysql_query("INSERT INTO usuarios (usuario,pass,tipousuario) values ('$usuario','$pass','$tipousuario')");

		header('Location: index.html');
	}	
?>

<html>
<head><title> Registro </title></head>
<body>
<form action="registrarse.php" method="post">
<h2>MovilYa</h2>
<h3>Registrarse: introduzca sus datos</h3>

Usuario:<input type="text" name="user">
<div>
	Contaseña:<input type="text" name="pass">
</div>

		<div> 
		  1. Que tipo de usuario es? 
          <select name="tipousuario">
            <option value="cliente">Cliente</option> 
            <option value="empleado">Empleado</option> 
          </select>
		</div>	

<input type="submit" name="registrarse" value="Registrarse">

</form>
</body>
</html>