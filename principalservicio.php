<?php 


 session_start();

 if( !isset( $_SESSION['nombreususer'] ) )
  {
     header("Location:indexservicio.php");
  }

 ?>
<!DOCTYPE html>
<html land="es">
<head>
	<title>supermercado ver 1.0</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet" type="text/css" href="css/normalizer.css">
	<link rel="stylesheet" type="text/css" href="css/bottstrap/bootstrap.min.css">
</head>
<body class="cuerpo">


<center>
	<section class="contenedorinicio1">
		<br>
		<h1 class="tituloinicio1">
     	 Max-
		</h1>
		<h2 class="tituloinicio2"> 
    	 Economico
		</h2>
		<h3 class="tituloinicio3">
		  SUPERMERCADO  		
		</h3>

		
		<a id="ingresar" href="cerrar_sesion.php"><img class="iconingresar" src="imagenes/cerrar">salir</a>
	 	<br>
	 	 <div id="usuario">
	     <?php 

        $nombreususer==$_SESSION['nombreususer'];
 
        echo  " Usuario: ".$nombreususer ;
        echo "  ";
       

        ?>
        </div>
  </section>

    <div id="menu2">
	<ul>
	  <li class="nivel1">
	    <a href="principalservicio.php" class="nivel1">Inicio</a>
	  </li>
	  <li class="nivel1"><a href="#" class="nivel1">Archivo</a>
		<ul>	
			<li><a href="transacciones.php">Transacciones</a></li>	
		</ul>
	  </li>
	  <li class="nivel1"><a href="#" class="nivel1">Productos</a>
		<ul>
			<li><a href="compraproductos.php">Comprar un producto</a></li>
		
		</ul>
		</li>
	  <li class="nivel1"><a href="#" class="nivel1">Consultas</a>
		<ul>
			<li><a href="listar_transacciones">Listado general de mis transacciones</a></li>		
		</ul>
	</li>
	<li class="nivel1"><a href="#" class="nivel1">procesos</a>
		<ul>
			<li><a href="cerrar_sesion.php">cerrar sesion</a></li>
		</ul>
	</li>
	</ul>
    </div>
    <br>
	<br>	
	<h1>PRINCIPAL SERVICIO</h1>
    <h1>Bienvenido Usuario : <?php  echo  "".$nombreususer ; echo "  "; ?></h1>

	 <img id="imgsis" src="imagenes/imagensobrenosotros2" width="900px;" height="300px;">

    <?php 

	 include_once("pie.php");

	?>	
 		
			

	</center>
                 	
</body>
</html>