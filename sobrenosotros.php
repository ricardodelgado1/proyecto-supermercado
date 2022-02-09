<!DOCTYPE html>
<html>
<head>
	<title>mi pagina de informacion de inicio</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet" type="text/css" href="css/normalizer.css">
	<script type="text/javascript" src="jquery/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bottstrap/bootstrap.min.css">
	<meta charset="utf-8">
</head>
<body class="cuerpo">
<center>
	<?php 

	 include_once("cabecerapaginawed.php");

	?>
<div class="row" id="contenedorbienvenido1">

<div class="col-md-8 container cont" id="contenedorbienvenido1-2">

	  <div id="myCarousel" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner" id="carousel">
			<div class="item" id="img2">
				<img src="imagenes/imagenessupermercado/5.jpg" alt="" id="img2">
				<div class="carousel-caption" id="parrafosobre" >
					<h4>LOS MEJORES: PRODUCTOS</h4>
					<p >Productos en el mejor estado para ustedes nuestros clientes.</p>
				</div>
			</div>
			<div class="item" id="img2">
				<img src="imagenes/imagenessupermercado/6.jpg" alt="" id="img2">
				<div class="carousel-caption" id="parrafosobre">
					<h4>LOS MEJORES: ALIMENTOS</h4 >
					<p >Le ofrecemos una amplia variedad de alimentos desde frutas a enlatados todo lo que se puede imaginar.</p>
				</div>
			</div>
			<div class="item active" id="img2">
				<img src="imagenes/imagenessupermercado/15.jpg" alt="" id="img2">
				<div class="carousel-caption" id="parrafosobre">
					<h4>LOS MEJORES: <em>ELECTRODOMESTICOS</em></h4>
					<p >Electrodomesticos con la mayor garantia del mercado para todos ustedes.</p>
				</div>
			</div>
		</div>
		<a class="left carousel-control " href="#myCarousel" data-slide="prev" >
		<span class = "glyphicon glyphicon-chevron-left "></span>			
		</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next" >
			<span class = "glyphicon glyphicon-chevron-right "></span>
		</a>
	</div>


 </div>
   	 
  <div class="col-md-4" id="contenedorbienvenido1-2">
	  <p class="text-muted" id="parrafo">
			<h1 class="titulobienvenido">¡Sobre max-economico!</h1>
En la venta al por menor antes del surgimiento de los supermercados, generalmente los productos eran distribuidos por un comerciante mientras los clientes esperaban delante de un mostrador indicando los elementos que querían. Además, la mayoría de los alimentos y mercancías no venían en paquetes individuales, por lo que el comerciante tenía que medir y envolver la cantidad exacta deseada por el consumidor. El proceso de compra era lento, ya que el número de clientes que podían  ser atendidos era limitado por el número de personas empleadas en la tienda ser atendidos era limitado por el número de personas empleadas en la tienda. clientes que podían ser atendidos era limitado por el número de personas empleadas en la tienda. 
			<br>
			<small>leer mas<src="icon.css" alt="iconos" class="icono icon-checkmark-circle"></small>
			</p>
		</div>

</div>




	<div class="row"  id="contenedorsobrenosotros1">	

		<h1 class="titulosobrenosotros" >Sobre Nosotros</h1>
		<div class="col-md-6" id="contenedorsobrenosotros1-1">
		       <div class="alert alert-info" id="titulomision">MISION</div>
	       <p class="text" id="parrafo">
			
En la venta al por menor antes del surgimiento de los supermercados, generalmente los productos eran distribuidos por un comerciante mientras los clientes esperaban delante de un mostrador indicando los elementos que querían. Además, la mayoría de los alimentos y mercancías no venían en paquetes individuales, por lo que el comerciante tenía que medir y envolver la cantidad exacta deseada por el consumidor. El proceso de compra era lento, ya que el número de clientes que podían ser atendidos era limitado por el número de personas empleadas en la tienda. 
		    <br>
			<small>leer mas<src="icon.css" alt="iconos" class="icono icon-checkmark-circle"></small>
			</p>
		    <br>		
		   <img class="imagensobrenosotros1" src="imagenes/imagenessupermercado/18.jpg"></img>

		</div>
		
		<div class="col-md-6" id="contenedorsobrenosotros1-1">
			   <div class="alert alert-info" id="titulomision">VISION</div>
	       <p class="text" id="parrafo">
			
En la venta al por menor antes del surgimiento de los supermercados, generalmente los productos eran distribuidos por un comerciante mientras los clientes esperaban delante de un mostrador indicando los elementos que querían. Además, la mayoría de los alimentos y mercancías no venían en paquetes individuales, por lo que el comerciante tenía que medir y envolver la cantidad exacta deseada por el consumidor. El proceso de compra era lento, ya que el número de clientes que podían ser atendidos era limitado por el número de personas empleadas en la tienda.
 			<br>
			<small>leer mas<src="icon.css" alt="iconos" class="icono icon-checkmark-circle"></small>
			</p>
		   <br> 
		   <img class="imagensobrenosotros1" src="imagenes/imagenessupermercado/10.jpg"></img>

		</div>
	</div>



	<?php 

	include_once("pie.php");

	?>


</center>

</body>
</html>