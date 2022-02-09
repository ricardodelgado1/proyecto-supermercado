<!DOCTYPE>
<html land="es">
<head>
	<title>usuarios servicio</title>
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
	   <a href="#" class="nivel1 boton">SERVICIOS</a>
	  </li>
	  <li class="nivel1 menu-item">
	   <a href="#" class="nivel1 boton">PRODUCTOS</a>
	  </li>
	  <li class="nivel1 menu-item">
	   <a href="#" class="nivel1 boton">CONTACTOS</a>
	  </li>
	</ul>
   </div>

	<br>
    <br>
    <br>	
	<h1>Ingreso De nuevos Usuarios del servicio</h1>



	<form action="grabar_ususervicio.php" method="POST">
		
		<fieldset>

			<legend>Datos usuario de servicio</legend>

			<input type="hidden" name="hideaccion" value="A">
			<div>
			<label class="titulo"><h7>*</h7> documento</label>
			<input class="camponumero" type="number" name="ususer_documento" size="10px" autofocus required maxnumber="10" placeholder = "documento">
			</div>
			<br>
	        <div>
			<label class="titulo"><h7>*</h7> Apellidos</label>
			<input class="campo" type="text" name="ususer_apellidos" size="24px" autofocus required maxlength="100" placeholder = "apellidos">
	        </div>
	        <br>
	        <div>
			<label class="titulo"><h7>*</h7> Nombres</label>
			<input class="campo" type="text" name="ususer_nombres" size="24px" autofocus required maxlength="100" placeholder = "nombres">
	        </div>
	        <br>
	        <div>
			<label class="titulo"><h7>*</h7> Direccion</label>
			<input class="campo" type="text" name="ususer_direccion" size="24px" autofocus required maxlength="100" placeholder = "direccion">
	        </div>
	        <br>
	        <div>
			<label class="titulo"><h7>*</h7> Telefono</label>
			<input class="camponumero" type="number" name="ususer_telefono" size="20px" autofocus required maxlength="10" placeholder = "telefono">
	        </div>
	        <br>
	        <div>
			<label class="titulo"><h7>*</h7> clave</label>
			<input class="camponumero" type="password" name="ususer_clave" size="10px" autofocus required maxlength="5" placeholder = "clave">
	        </div>
	        <br>
	        <div>
	        <label class="titulo"><h7>*</h7> verificar clave</label>
			<input class="camponumero" type="password" name="ususer_clave2" size="10px" autofocus required maxlength="5" placeholder = "verificar clave">
	        </div>
	        <br>
	     
		

	        <button type="submit" class="campo1">
	        <img src="imagenes/adicionar2.png">
	         Registrar
            </button>
            <a href="paginainicio.php" >
            <button type="button" class="campo1">
            <img src="imagenes/regresar.png">
             Regresar  	           
            </button>
            </a> 
		</fieldset>	

	</form>
    <?php 

	 include_once("pie.php");

	 ?>
	  <script type="text/javascript" class="script">alert(" BIENVENIDO INGRESE SUS DATOS <?php echo $mensaje; ?>");</script>





	</center>



	</body>



</html>
