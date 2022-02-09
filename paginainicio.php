<!DOCTYPE html>
<html>
<head>
	<title>inicio programa</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet" type="text/css" href="css/normalizer.css">
	<link rel="stylesheet" type="text/css" href="css/bottstrap/bootstrap.min.css">
</head>
<body class="cuerpo">

<center>
	
	<?php 

	 include_once("cabecerapaginawed.php");

	?>
	<br>
	<br>
	<h1>seleccione que tipo de usuario es</h1>
	<br>
	
	  <section class="contenedorpaginainicio1">
	  	<a href="indexsistema">
		<h1 class="titulopaginainicio">usuarios del sistema </h1>
		<img class="imagenpaginainicio" src="imagenes/sistema.png">
	  	</a>
	  </section>



	  <section class="contenedorpaginainicio2">
	   <a href="indexservicio">
		<h1 class="titulopaginainicio">usuarios del servicio </h1>
		<img class="imagenpaginainicio" src="imagenes/servicio.png">
	   </a>		
	  </section>
      <a id="nuevousu" href="formulariousuariosservicio"><h2>Registrar un nuevo usuario</h2></a>
	
	
    <?php 

	 include_once("pie.php");

	?>
 </center>


</body>
</html>