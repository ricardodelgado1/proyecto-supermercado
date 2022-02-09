<?php 
 session_start();

 if( !isset( $_SESSION['nombreususis'] ) )
  {
     header("Location:index.php");
  }
 ?>
  <?php 
    $mensaje = $_GET['mensaje'];
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
			<li><a href="#">Usuarios del Sistema</a></li>
			<li><a href="#">Usuarios del Servicio</a></li>
		</ul>
		</li>
	  <li class="nivel1"><a href="#" class="nivel1">Consultas</a>
		<ul>
			<li><a href="listar_transacciones">Listado general de productos</a></li>
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
    <br>
    <br>
    <br>		
	<h1>Ingreso De nuevos Usuarios del sistema</h1>



	<form action="grabar_ususistema.php" method="POST">
		
		<fieldset>

			<legend>Datos usuario de sistema</legend>

			<input type="hidden" name="hideaccion" value="A">
			<div>
			<label class="titulo"><h7>*</h7>documento</label>
			<input class="camponumero" type="number" name="ususis_documento" size="10px" autofocus required maxlength="10" placeholder = "documento">
			</div>
			<br>
	        <div>
			<label class="titulo"><h7>*</h7>Apellidos</label>
			<input class="campo" type="text" name="ususis_apellidos" size="24px" autofocus required maxlength="100" placeholder = "apellidos">
	        </div>
	        <br>
	        <div>
			<label class="titulo"><h7>*</h7>Nombres</label>
			<input class="campo" type="text" name="ususis_nombres" size="24px" autofocus required maxlength="100"placeholder = "nombres">
	        </div>
	        <br>
	        <div>
			<label class="titulo"><h7>*</h7> Direccion</label>
			<input class="campo" type="text" name="ususis_direccion" size="24px" autofocus required maxlength="100"placeholder = "direccion">
	        </div>
	      	<br	>
	        <div>
			<label class="titulo"><h7>*</h7> cargo</label>
			<input class="campo" type="text" name="ususis_cargo" size="24px" autofocus required maxlength="50" placeholder = "cargo">
	        </div>	      	
	      	<br	>
	        <div>
			<label class="titulo"><h7>*</h7> Pais</label>
     
                 <select name="selPai" class="camponumero">
                    <?php  
                         include_once("select_paises.php");
                     ?>
                 </select>
               
	        </div>                      
	        <br>
	        <div>
			<label class="titulo"><h7>*</h7> Telefono</label>
			<input class="camponumero" type="number" name="ususis_telefono" size="30px" autofocus required maxlength="10"placeholder = "telefono">
	        </div>
	        <br>
	        <div>
			<label class="titulo"><h7>*</h7> clave</label>
			<input class="camponumero" type="password" name="ususis_clave" size="10px" autofocus required maxlength="5" placeholder = "clave">
	        </div>
	        <br>
	        <div>
	        <label class="titulo"><h7>*</h7> verificar clave</label>
			<input class="camponumero" type="password" name="ususis_clave2" size="10px" autofocus required maxlength="5" placeholder = "verificar clave">
	        </div>
	        <br>
	     
		

	        <button type="submit" class="campo1">
	        <img src="imagenes/adicionar2.png">
	         Registrar
            </button>
            <a href="usuariosdelsistema.php">
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

    <script type="text/javascript">alert-danger(" BIENVENIDO INGRESE SUS DATOS<?php echo $mensaje; ?>");</script>


	</center>



	</body>



</html>
