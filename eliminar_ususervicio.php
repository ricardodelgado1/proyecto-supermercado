<?php 
 session_start();

 if( !isset( $_SESSION['nombreususis'] ) )
  {
     header("Location:index.php");
  }
 ?>
<?php 

	$mensaje = $_GET['mensaje'];

	$codigo  = $_GET['codigo'];

	include_once('funciones.php');

	$sSQL = "SELECT * FROM usuarios_servicio WHERE ususer_documento =?";

	$conexion = ConectarBD();


	try 
	{
	
		$pst = $conexion->prepare($sSQL);
		$pst -> bindParam(1,$codigo);
		$pst -> execute();

		$fila = $pst -> fetch();

		$apellidos = $fila['ususer_apellidos'];
    $nombres = $fila['ususer_nombres'];
    $direccion = $fila['ususer_direccion'];
    $telefono = $fila['ususer_telefono'];


	} 
	catch (Exception $e)
	{


		
	}


 ?>


<!DOCTYPE html>
<html land="es">
<head>
  <title>Productos</title>
  <meta charset="utf-8">
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

        $nombreususis==$_SESSION['nombreususis'];
 
        echo " Usuario: ".$nombreususis ;
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
      <li><a href="listar_transacciones">Listado general de productos</a></li>
     <li><a href="listar_operadores">Listado general de transacciones</a></li>
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
  <h1>Eliminasion De usuarios del servicio</h1>



 <form action="grabar_ususervicio.php" method="POST">
    
    <fieldset>

      <legend>Datos usuario de sistema</legend>

      <input type="hidden" name="hideaccion" value="E">
      <div>
      <label class="titulo"><h7>*</h7>documento</label>
      <input class="camponumero" type="number" name="ususer_documento" size="10px" readonly maxlength="10" value="<?php echo $codigo ?>">
      </div>
      <br>
          <div>
      <label class="titulo"><h7>*</h7>Apellidos</label>
      <input class="campo" type="text" name="ususer_apellidos" size="24px" readonly maxlength="100" value="<?php echo $apellidos ?>">
          </div>
          <br>
          <div>
      <label class="titulo"><h7>*</h7>Nombres</label>
      <input class="campo" type="text" name="ususer_nombres" size="24px" readonly maxlength="100"  value="<?php echo $nombres ?>">
          </div>
          <br>
          <div>
      <label class="titulo"><h7>*</h7> Direccion</label>
      <input class="campo" type="text" name="ususer_direccion" size="24px" readonly maxlength="100"  value="<?php echo $direccion ?>">
          </div>
          <br>
          <div>
      <label class="titulo"><h7>*</h7> Telefono</label>
      <input class="camponumero" type="number" name="ususer_telefono" size="30px" readonly maxlength="10" value="<?php echo $telefono ?>">
          </div>
         <br>
       
    

          <button type="submit" class="campo1">
          <img src="imagenes/eliminar3.png">
              Eliminar
            </button>
            <a href="usuariosdelservicio.php ">
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

    <script type="text/javascript">alert(" ELIMINE LOS DATOS DEL USUARIO DEL SERVICIO <?php echo $mensaje; ?>");</script>

</html>