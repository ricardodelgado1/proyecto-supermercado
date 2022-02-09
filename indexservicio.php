<html>
<head>
	<title>usuario servicio</title>
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

		<a id="ingresar" href="paginainicio.php"><img class="iconingresar" src="imagenes/ingresar">ingresar</a>
	</section>
    
  <div id="menu">
	<ul>
	  <li class="nivel1 menu-item">
	    <a href="inicio.php" class="nivel1 boton">PRINCIPAL</a>
	  </li>
	  <li class="nivel1 menu-item">
	   <a href="sobrenosotros.php" class="nivel1 boton">ACERCA DE</a>
	  </li>
	  <li class="nivel1 menu-item">
	   <a href="servicios.php" class="nivel1 boton">SERVICIOS</a>
	  </li>
	  <li class="nivel1 menu-item">
	   <a href="galeria.php" class="nivel1 boton">GALERIA</a>
	  </li>
	  <li class="nivel1 menu-item">
	   <a href="contactos.php" class="nivel1 boton">CONTACTOS</a>
	  </li>
	</ul>
   </div>

    <br>
    <br>
    <br>
 	<h1>Ingrese sus datos para Ingresar</h1>

	
    <form action="verificarcontrasenaservicio.php" method="POST">
		
		<fieldset>

			<legend>Datos Del usuario del servicio</legend>

			
		    <div>
			<label class="titulo"><h7>*</h7> nombre</label>
			<input class="campo" type="text" name="txtusu" autofocus required  size="25px" placeholder = "usuario">
			</div>
			<br>
	        <div>
			<label class="titulo"><h7>*</h7> contraseña</label>
			<input class="camponumero" type="password" name="txtcon" autofocus required maxlength="10" size="12px" placeholder = "contraseña">
	        </div>
	        <br>
	      

	      <button type="submit" class="campo1" >
	      <img src="imagenes/registrar.png">
	         Ingresar
          </button>
           <a href="paginainicio.php" >
          <button type="button" class="campo1">
          <img src="imagenes/regresar.png"> 
             Regresar  	      
          </button>
          </a> 
			
		</fieldset>	


	</form>

    <br>
    <br>
    <br>

	 <?php 

	 include_once("pie.php");

	  ?>
	   <script type="text/javascript">alert(" BIENVENIDO INISIE SESION <?php echo $mensaje; ?>");</script>

</center>  

</body>
</html>