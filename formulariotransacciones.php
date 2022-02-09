<?php 


 session_start();

 if( !isset( $_SESSION['nombreususer'] ) )
  {
     header("Location:indexservicio.php");
  }

 ?>
 <?php 

	$mensaje = $_GET['mensaje'];

	$codigo  = $_GET['codigo'];

	include_once('funciones.php');

	$sSQL = "SELECT * FROM productos WHERE prod_codigo =?";

	$conexion = ConectarBD();


	try 
	{
	
		$pst = $conexion->prepare($sSQL);
		$pst -> bindParam(1,$codigo);
		$pst -> execute();

		$fila = $pst -> fetch();

		$nombre = $fila['prod_nombre'];
        $precio = $fila['prod_precio'];
  
	} 
	catch (Exception $e)
	{


		
	}


 ?>
   <?php 
   
	include_once('funciones.php');

	$conexion = ConectarBD();

	$sSQL = "SELECT max(trande_codigo) as maximo from detalle_transaccion";

    $datos = $conexion->query($sSQL);
    $fila = $datos -> fetch();
    $vrnumeromov=$fila["maximo"]+1;		

 ?>

<!DOCTYPE html>
<html land="es">
<head>
	<title>Transacciones</title>
	<meta charset="utf-8">
	<script type="text/javascript" src="funciones.js"></script>
    <link rel="stylesheet" type="text/css"  href="css/estilo.css">
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
    <br>	
	<h1>INGRESO DE TRANSACCIONES</h1>



	<form action="grabar_transacciones.php" method="POST">
		
		<fieldset>

			<legend>Datos De Transacciones</legend>

			<input type="hidden" name="hideaccion" value="A">
			<div>
			<label class="titulo"><h7>*</h7> codigo</label>
			<input class="camponumero" type="text" name="trande_codigo" size="5px"  required maxlength="5" value="<?php echo $vrnumeromov; ?>">
			</div>
			<br>
	        <div>
			<label class="titulo"><h7>*</h7> Fecha</label>
			<input class="campo" type="date" name="trande_fecha" size="24px" autofocus required maxlength="10">
	        </div>
	        <br>
	        <div>
			<label class="titulo"><h7>*</h7> Producto</label>
			<input class="campo" type="text" name="trande_producto" size="24px" autofocus required maxlength="15" value="<?php echo $nombre ?>">
	        </div>
	        <br>
	        <div>
			<label class="titulo"><h7>*</h7> Usuario</label>
			<input class="campo" type="text" name="trande_usuario" size="24px" autofocus required maxlength="100" value="<?php echo $nombreususer ?>">
	        </div>
	        <br>
	        <div>
			<label class="titulo"><h7>*</h7> cantidad</label>
			<input class="camponumero" type="text" name="trande_cantidad" size="24px" autofocus required maxlength="20" id="Cantidad">
	        </div>
	        <br>
	        <div>
			<label class="titulo"><h7>*</h7> Valor Producto</label>
			<input class="camponumero" type="text" name="trande_valorproducto" size="24px" autofocus required maxlength="20" value="<?php echo $precio ?>" id="Valor">
	        </div>
	        <br>
	         <div>
			<label class="titulo"><h7>*</h7> Valor Total</label>
			<input class="camponumero" type="text" name="trande_valortotal" size="24px" autofocus required maxlength="40" id="Total">
	        </div>
	        <br>

	        <button type="submit" class="campo1">
	        <img src="imagenes/adicionar2.png">
	          Comprar
            </button>
            <a href="compraproductos.php" >
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

	</center>

	</body>
<script type="text/javascript">alert(" BIENVENIDO COMPLETE EL FORMULARIO<?php echo $mensaje; ?>");</script>



</html>


