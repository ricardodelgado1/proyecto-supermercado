<?php

session_start();

$usuario  = $_REQUEST['txtusu'];
$contrasena = $_REQUEST['txtcon'];



$conexion = mysql_connect("localhost","root","anaobando") or die ("PROBLEMAS AL CONECTAR EL SERVIDOR");

mysql_select_db("supermercado", $conexion) or die ("ERROR AL TRATAR DE CONECTAR CON LA BASE DE DATOS");

$estandar = mysql_query("SELECT * FROM usuarios_servicio where ususer_nombres = '".$usuario."'  and ususer_clave = '".$contrasena."'", $conexion);


if ($row = mysql_fetch_array($estandar)){

	header("Location: principalservicio.php");
	 $_SESSION['nombreususer'] = $usuario;
}
else{
	$mensaje='USUARIO O CONTRASEÑA INCORRECTOS <br/> INTENTELO NUEVAMENTE </br> GRASIAS ';
	header("Location: indexservicio.php?mensaje=$mensaje");
}



?>
