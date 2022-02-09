<?php 


 session_start();

 if( !isset( $_SESSION['nombreususer'] ) )
  {
     header("Location:indexservicio.php");
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
			<li><a href="#">Transacciones</a></li>	
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
	<h1>PRINCIPAL TRANSACCIONES</h1>

	 <section id="cuerpo2">

				<form  id="frmbuscar" method="POST" action="">


						<label id="lblbuscar">Buscar</label>

							<select id="selbuscar" name="selcampo">
								<option value="todos">Todos</option>
								<option value="codigo">Codigo</option>
								<option value="producto">producto</option>
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
				        cantidad
				     </th>
				    <th  id="nombre">
				        producto
				     </th>
				     <th  id="nombre">
				        valor producto
				     </th>
                     <th  id="nombre">
				        valor total
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
						$where = "  ";			
					 }	
					 else if ($campo =="codigo")
					 {
					 	$where = " AND trande_codigo LIKE'%$buscar%' ";
					 }	
					
					 else if ($campo =="producto")
					 {
					 	$where = " AND trande_producto LIKE'%$buscar%' ";
					 }
				
				 }

				$sSQL = "SELECT * FROM detalle_transaccion WHERE trande_usuario LIKE'%$nombreususer%' ".$where;

				$datos = $con->query($sSQL);

				foreach( $datos as $fila)
				{

				 echo '<tr id="contenido">';
				 	echo '<td id="codigo">';
				       echo $fila['trande_codigo'];
				    echo '</td>';
				    echo '<td id="nombre">';
				       echo $fila['trande_cantidad'];
				    echo '</td>';
				    echo '<td id="descripcion">';
				       echo $fila['trande_producto'];
				    echo '</td>';
				    echo '<td id="nombre">';
				       echo $fila['trande_valorproducto'];
				    echo '</td>';
				    echo '<td id="nombre">';
				       echo $fila['trande_valortotal'];
				    echo '</td>';
				    echo '<td class="imgicon">';
				       echo '<a href="modificar_transaccion.php?codigo='.$fila['trande_codigo'].'"><img class="imgicon" src="imagenes/editar.png" > </a>';
				    echo '</td>';
				    echo '<td class="imgicon">';
				       echo '<a href="eliminar_transaccion.php?codigo='.$fila['trande_codigo'].'"><img class="imgicon" src="imagenes/eliminar.png" > </a>';
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