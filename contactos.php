<!DOCTYPE html>
<html>
<head>
	<title>mi pagina de informacion de inicio</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet" type="text/css" href="css/normalizer.css">
	<link rel="stylesheet" type="text/css" href="css/bottstrap/bootstrap.min.css">
	<meta charset="utf-8">
</head>
<body class="cuerpo">
<center>
			
	<?php 

	 include_once("cabecerapaginawed.php");

	?>


   <div class="mapa">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d510610.5478011099!2d-77.48737827847104!3d1.0527100773940288!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e2ed485722503fd%3A0x298f1ef26abc8a75!2sPasto%2C+Nari%C3%B1o%2C+Colombia!5e0!3m2!1ses-419!2sit!4v1446240293237" width="1080" height="450" border-radius="25" frameborder="0" style="border:2" allowfullscreen> </iframe>
	</div>

	<div class="row" id="contenedorcon1">
		<div class="col-md-4" id="contenedorcon1-1">
			<h1 class="titulocontactofinal" >Direccion</h1>
			<p>
			8901 Marmora Road, 
            Glasgow, D04 89GR.
            <br>
            Freephone: +1 800 559 6580 
            <br>
            Telephone: +1 800 603 6035
            <br>
      		FAX: +1 800 889 9898
      		<br>
			E-mail: mail@demolink.org

			</p>
			
		</div>

		<div class="col-md-8" id="contenedorcon1-2">
			<h1 class="titulocontactofinal2">Ponerse en contacto</h1>
			<form class="for-contacto">
				<fieldset class="titulofielset">bienvenido </fieldset>
				<br>
				<label class="titulo">Nombre :</label>
				<input class="campo" size="50px">
				<br>
				<br>
				<label class="titulo">Correo :</label>
				<input class="campo" size="50px">
				<br>
			    <br>
				<label class="titulo">telefono :</label>
				<input class="camponumero" size="20px">	
				<br>
				<br>
				<fieldset class="titulofielset">comentarios </fieldset>
				<textarea class="campogrande"></textarea>
				<br>
				<button class="btn btn-primary enviar" >enviar</button>

			</form>
		</div>
		
	</div>


	
	<div class="contenedorfinal">	
	
		<ul class=" imagen">
		    <li class="btn btn-primary imagen2">
		        <a href="www.facebook.com" class="vinculo">
		            <img src="imagenes/facebook.png">
		        </a>
		    </li>
		    <li class="btn btn-warning imagen2">
		        <a href="wwww.google+.com" class="vinculo">
		            <img src="imagenes/g+.png">
		        </a>
		    </li>
		    <li class="btn btn-danger imagen2">
		        <a href="www.youtube.com" class="vinculo">
		            <img src="imagenes/youtube.png">
		        </a>
		    </li>	
		    <li class="btn btn-info imagen2">
		        <a href="www.twiter.com" class="vinculo">
		            <img src="imagenes/twiter.png">
		        </a>
		    </li>
		    <li class="btn btn-success imagen2">
		        <a href="#" class="vinculo">
		            <img src="imagenes/in.png">
		        </a>
		    </li>	    
		  </ul>
</div>	

   <?php 

	include_once("pie.php");

	?>


</center>

</body>
</html>