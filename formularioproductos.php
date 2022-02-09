<?php 
 session_start();

 if( !isset( $_SESSION['nombreususis'] ) )
  {
     header("Location:index.php");
  }
 ?>

<?php 
   
	include_once('funciones.php');

	$conexion = ConectarBD();

	$sSQL = "SELECT max(prod_codigo) as maximo from productos";

    $datos = $conexion->query($sSQL);
    $fila = $datos -> fetch();
    $vrnumeromov=$fila["maximo"]+1;		

 ?>
<!DOCTYPE html>
<html>
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

        $nombreususis==$_SESSION['nombreususis'];
 
        echo  " Usuario: ".$nombreususis ;
        echo "  ";
       

        ?>
    </div>    
  </section>

	<div id="menu2">
	<ul>
	  <li class="nivel1">
	    <a href="principalsistema.php" class="nivel1">Inicio</a>
	  </li>
		  <li class="nivel1"><a href="#" class="nivel1">Archivo</a>
		<ul>		
			<li><a href="productos.php">Productos</a></li>
			<li><a href="provedores.php">Proveedores</a></li> 
            <li><a href="categorias.php">categorias</a></li>			
		</ul>
	  </li>
	  <li class="nivel1"><a href="#" class="nivel1">Usuarios</a>
		<ul>
			<li><a href="usuariosdelsistema.php">Usuarios del Sistema</a></li>
			<li><a href="usuariosdelservicio.php">Usuarios del Servicio</a></li>
		</ul>
		</li>
	  <li class="nivel1"><a href="#" class="nivel1">Consultas</a>
		<ul>
			<li><a href="listar_transaccionesgene">Listado general de productos</a></li>
			<li><a href="listar_operadores">transacciones por producto</a></li>
			<li><a href="listar_provedores">Listado general de proveedores</a></li>
            <li><a href="listar_categorias">listado general de categorias </a></li>			
		</ul>
	  </li>
	  <li class="nivel1"><a href="#" class="nivel1">procesos</a>
		<ul>
			<li><a href="cerrar_sesion.php">cerrar sesion</a></li>
		</ul>
	  </li>
    </ul>
    </div>
  	<br/>
	<br/>	
	<h1>Ingreso De Productos</h1>



	<form  action="grabar_productos.php" method="POST" enctype="multipart/form-data" >
		
		<fieldset>

			<legend>Datos De Productos</legend>

			<input type="hidden" name="hideaccion" value="A">
			<div>
			<label class="titulo"><h7>*</h7> codigo</label>
			<input class="camponumero" type="text" name="prod_codigo" size="5px"   maxlength="5" value="<?php echo $vrnumeromov; ?>">
			</div>
	        <br>
	        <div>
			<label class="titulo"><h7>*</h7> nombre</label>
			<input class="campo" type="text" name="prod_nombre" size="24px" autofocus required maxlength="15">
	        </div>
	        <br>
	        <div>
			<label class="titulo"><h7>*</h7> Fecha de Ingreso</label>
			<?php $fecha=date('d-m-Y');?>
			<input class="campo" type="date" name="prod_fecha" size="5px" autofocus required value="<?php echo $fecha;?>">
	        </div>
	        <br>
	       <div>
	        <label class="titulo"><h7>*</h7> Categoria</label>
                <select name="selcat" class="camponumero" >
                    <?php  
                         include_once("select_categorias.php");
                     ?>
                 </select>             
	        </div> 
	        <br> 
	        <div>
	        <label class="titulo"><h7>*</h7> Provedor</label>
                <select name="selprov" class="camponumero">
                    <?php  
                         include_once("select_provedores.php");
                     ?>
                 </select>             
	        </div> 
	        <br>
	        <div>
			<label class="titulo"><h7>*</h7> Precio</label>
			<input class="camponumero" type="number" name="prod_precio" size="24px" autofocus required maxlength="20">
	        </div>
	        <br> 
	        <div>
			<label class="titulo"><h7>*</h7> Descripcion</label>
			<input class="campo" type="text" name="prod_descripcion" size="24px" autofocus required maxlength="100">
	        </div>
	        <br>		
		    <div>
			<label class="titulo"><h7>*</h7> Imagen</label>
			<input id="imgsub" type="file" name="imagen" size="90px" autofocus required >
	        </div>
	        <br>


	        <button type="submit" class="campo1">
	        <img src="imagenes/adicionar2.png">
	        Registrar
            </button>
            <a href="productos.php" >
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
	  <script type="text/javascript">alert(" INGRESE LOS DATOS DEL PRODUCTO <?php echo $mensaje; ?>");</script>


  </center>
	</body>



</html>





