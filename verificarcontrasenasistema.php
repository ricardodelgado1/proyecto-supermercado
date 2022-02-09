<?php

session_start();

$usuario  = $_POST['txtususis'];
$contrasena = $_POST['txtconsis'];


$conexion = mysql_connect("localhost","root","anaobando") or die ("PROBLEMAS AL CONECTAR EL SERVIDOR");

mysql_select_db("supermercado", $conexion) or die ("ERROR AL TRATAR DE CONECTAR CON LA BASE DE DATOS");

$estandar = mysql_query("SELECT * FROM usuarios_sistema where ususis_nombres = '".$usuario."' and ususis_clave = '".$contrasena."'", $conexion);


if ($row = mysql_fetch_array($estandar)){

	header("Location: principalsistema.php");
	$_SESSION['nombreususis'] = $usuario;

}
else{
	$mensaje='USUARIO O CONTRASEÑA INCORRECTOS INTENTELO NUEVAMENTE GRASIAS ';
	header("Location: indexsistema.php?mensaje=$mensaje");
}

?>
