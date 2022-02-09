<?php 


 session_start();

 if( !isset( $_SESSION['nombreususis'] ) )
  {
     header("Location:indexsistema.php");
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
    <h1>PRINCIPAL SISTEMA</h1>
    <h1>Bienvenido Usuario : <?php  echo  "".$nombreususis ; echo "  "; ?></h1>

    <img id="imgsis" src="imagenes/imagensobrenosotros1" width="900px;" height="300px;" >
 		 
	<?php 

	 include_once("pie.php");

	?>		

	</center>
                 	
</body>
</html>