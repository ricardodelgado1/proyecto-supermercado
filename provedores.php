<?php 
 session_start();

 if( !isset( $_SESSION['nombreususis'] ) )
  {
     header("Location:index.php");
  }
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
      <li><a href="listar_productos">Listado general de productos</a></li>
      <li><a href="listar_transaccionesgene">Listado general de transacciones</a></li>
      <li><a href="listar_operadores">transacciones por producto</a></li>
      <li><a href="listar_porfecha">transacciones por fecha</a></li>      
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
    <h1>PRINCIPAL PROVEEDORES</h1>


	  <section id="cuerpo2">

				<form  id="frmbuscar" method="POST" action="">

						<a href="formularioprovedores.php">
							<img src="imagenes/adicionar.png">
						</a>

						<label id="lblbuscar">Buscar</label>

							<select id="selbuscar" name="selcampo">
								<option value="todos">Todos</option>
								<option value="codigo">Codigo</option>
								<option value="nombre">Nombre</option>
							</select>

						<input type="text" name="txtbuscar" size="50" height="5px" class="campobuscar">

						<button type="submit" name="btnbuscar" class="botonbuscar">
							<img src="imagenes/lupa.png">
						</button>
				</form>
				<br>

				<table >

				 <tr id="titulo2prod">
				    <th id="codigo">
				        codigo
				     </th>		 		  
				      <th  id="nombre">
				        nombre
				     </th>			     
				 <tr>

				<?php 

				include_once ("funciones.php");

				$con  = ConectarBD();

				if (isset($_POST['btnbuscar']))
				{
				
					$buscar = $_POST['txtbuscar'];
					$campo  = $_POST['selcampo'];
						
					

					if ($campo =="todos")
					 {
						$where = "";			
					 }	
					 else if ($campo =="codigo")
					 {
					 	$where = " WHERE prove_codigo LIKE'%$buscar%' ";
					 }	
					
					 else if ($campo =="nombre")
					 {
					 	$where = " WHERE prove_nombre LIKE'%$buscar%' ";
					 }
				
				 }

				$sSQL = "SELECT * FROM Proveedores".$where;

				$datos = $con->query($sSQL);

				foreach( $datos as $fila)
				{

				 echo '<tr id="contenido">';
				 	echo '<td id="codigo">';
				       echo $fila['prove_codigo'];
				    echo '</td>';    
				    echo '<td id="nombre">';
				       echo $fila['prove_nombre'];
				    echo '</td>';

				    echo '<td class="imgicon">';
				       echo '<a href="modificar_provedores.php?codigo='.$fila['prove_codigo'].'"><img class="imgicon" src="imagenes/editar.png" > </a>';
				    echo '</td>';
				    echo '<td class="imgicon">';
				       echo '<a href="eliminar_provedores.php?codigo='.$fila['prove_codigo'].'"><img class="imgicon" src="imagenes/eliminar.png" > </a>';
				    echo '</td>';

				 echo '</tr>';

				}

				DesconectarBD($con);

			?>

		</table>


      </section>


	 <?php 

	 include_once("pie.php");

	  ?>

                 
</center>	
</body>
<script type="text/javascript">alert(" BIENVENIDO <?php echo $mensaje; ?>");</script>
</html>