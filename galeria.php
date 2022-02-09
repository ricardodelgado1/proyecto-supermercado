<!DOCTYPE html>
<html>
<head>
	<title>mi pagina de informacion de inicio</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet" type="text/css" href="css/normalizer.css">
	<link rel="stylesheet" type="text/css" href="css/bottstrap/bootstrap.min.css">
	<meta charset="utf-8">

				<!-- Start VisualLightBox.com HEAD section -->
		<link rel="stylesheet" href="index_files/vlb_files1/vlightbox1.css" type="text/css" />
		<link rel="stylesheet" href="index_files/vlb_files1/visuallightbox.css" type="text/css" media="screen" />
        <script src="index_files/vlb_engine/jquery.min.js" type="text/javascript"></script>
		<script src="index_files/vlb_engine/visuallightbox.js" type="text/javascript"></script>
		<!-- End VisualLightBox.com HEAD section -->

</head>
<body class="cuerpo">
<center>
	<?php 

	 include_once("cabecerapaginawed.php");

	?>


	<div class="row"  id="contenedorgaleria2">	

   <br>
   <div class="alert alert-info " id="titulogaleria">BIENVENIDO MIRA NUESTRA GALERIA DE FOTOS</div>
		<div class="col-md-12" id="contenedorgaleria">

	<div id="vlightbox1">
	<a class="vlightbox1" href="index_files/vlb_images1/4.jpg" title="el mejor supermercado"><img src="index_files/vlb_thumbnails1/4.jpg" alt="4" id="imggaler" /></a>
<a class="vlightbox1" href="index_files/vlb_images1/7.jpg" title="el mejor supermercado"><img src="index_files/vlb_thumbnails1/7.jpg" alt="7" id="imggaler"/></a>
<a class="vlightbox1" href="index_files/vlb_images1/8.jpg" title="el mejor supermercado"><img src="index_files/vlb_thumbnails1/8.jpg" alt="8" id="imggaler"/></a>
<a class="vlightbox1" href="index_files/vlb_images1/9.jpg" title="el mejor supermercado"><img src="index_files/vlb_thumbnails1/9.jpg" alt="9" id="imggaler"/></a>
<a class="vlightbox1" href="index_files/vlb_images1/10.jpg" title="el mejor supermercado"><img src="index_files/vlb_thumbnails1/10.jpg" alt="10" id="imggaler"/></a>
<a class="vlightbox1" href="index_files/vlb_images1/11.jpg" title="el mejor supermercado"><img src="index_files/vlb_thumbnails1/11.jpg" alt="11" id="imggaler"/></a>
<a class="vlightbox1" href="index_files/vlb_images1/12.jpg" title="el mejor supermercado"><img src="index_files/vlb_thumbnails1/12.jpg" alt="12" id="imggaler"/></a>
<a class="vlightbox1" href="index_files/vlb_images1/13.jpg" title="el mejor supermercado"><img src="index_files/vlb_thumbnails1/13.jpg" alt="13" id="imggaler"/></a>
<a class="vlightbox1" href="index_files/vlb_images1/14.jpg" title="el mejor supermercado"><img src="index_files/vlb_thumbnails1/14.jpg" alt="14" id="imggaler"/></a>
<a class="vlightbox1" href="index_files/vlb_images1/15.jpg" title="el mejor supermercado"><img src="index_files/vlb_thumbnails1/15.jpg" alt="15" id="imggaler"/></a>
<a class="vlightbox1" href="index_files/vlb_images1/16.jpg" title="el mejor supermercado"><img src="index_files/vlb_thumbnails1/16.jpg" alt="16" id="imggaler"/></a>
<a class="vlightbox1" href="index_files/vlb_images1/17.jpg" title="el mejor supermercado"><img src="index_files/vlb_thumbnails1/17.jpg" alt="17" id="imggaler"/></a>
<a class="vlightbox1" href="index_files/vlb_images1/18.jpg" title="el mejor supermercado"><img src="index_files/vlb_thumbnails1/18.jpg" alt="18" id="imggaler"/></a>
<a class="vlightbox1" href="index_files/vlb_images1/19.jpg" title="el mejor supermercado"><img src="index_files/vlb_thumbnails1/19.jpg" alt="19" id="imggaler"/></a>
<a class="vlightbox1" href="index_files/vlb_images1/20.jpg" title="el mejor supermercado"><img src="index_files/vlb_thumbnails1/20.jpg" alt="20" id="imggaler"/></a>
<a class="vlightbox1" href="index_files/vlb_images1/21.jpg" title="el mejor supermercado"><img src="index_files/vlb_thumbnails1/21.jpg" alt="21"id="imggaler"/></a>

	</div>
	<script src="index_files/vlb_engine/vlbdata1.js" type="text/javascript"></script>
	<!-- End VisualLightBox.com BODY section -->

		</div>
		
	</div>



  <div class="row"  id="contenedorgaleria3">	

	<div class="col-md-12" id="contenedorgaleria">

   <div class="container cont cent">
   <br>
   <div class="alert alert-info">BIENVENIDO MIRA ESTE VIDEO</div>

   <video width="87%" controls>
   <source src="multimedia/ie_commercial.webm" type="video/webm">
   <source src="multimedia/ie_commercial.mp4" type="video/mp4">
     TU NAVEGADOR NO SOPORTA LOS <abbr title="REPRODUCTORES">REP.</abbr> DE HTML5.
   </video>
     <br>
     <br>
   <div class="alert alert-info">MIRA ESTE VIDEO ES MUY DIVERTIDO</div>

   <video width="87%" controls>
   <source src="multimedia/ie_commercial.webm" type="video/webm">
   <source src="multimedia/ie_commercial.mp4" type="video/mp4">
     TU NAVEGADOR NO SOPORTA LOS <abbr title="REPRODUCTORES">REP.</abbr> DE HTML5.
   </video>
  
     </div>
   </div>	
 </div>


	<?php 

	include_once("pie.php");

	?>


</center>

</body>
</html>