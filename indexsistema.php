<html>
<head>
	<title>usuario</title>
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
    <br>
 	<h1>Ingrese sus datos para Ingresar</h1>

	
    <form action="verificarcontrasenasistema.php" method="POST">
		
		<fieldset id="titulo">
          
			<legend>Datos Del usuario del sistema</legend>

			
		    <div>
			<label class="titulo"><h7>*</h7> nombre</label>
			<input class="campo" type="text" name="txtususis" autofocus required  size="25px" placeholder = "usuario">
			</div>
			<br>
	        <div>
			<label class="titulo"><h7>*</h7> contraseña</label>
			<input class="camponumero" type="password" name="txtconsis" autofocus required maxlength="10" size="12px" placeholder = "contraseña">
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