<?php 
 session_start();

 if( !isset( $_SESSION['nombreususis'] ) )
  {
     header("Location:index.php");
  }
 ?>
<?php 

  $accion = $_POST['hideaccion'];


  $codigo        =    $_POST['prod_codigo'];
  $nombre        =    $_POST['prod_nombre'];
  $fecha         =    $_POST['prod_fecha'];
  $categoria     =    $_POST['selcat'];
  $provedor      =    $_POST['selprov'];
  $precio        =    $_POST['prod_precio'];
  $descripcion   =    $_POST['prod_descripcion'];
  

  $ruta="imagenes";
  $archivo=$_FILES['imagen']['tmp_name'];
  $nombrearchivo=$_FILES['imagen']['name'];
  move_uploaded_file($archivo,$ruta."/".$nombrearchivo);
  $ruta2=$ruta."/".$nombrearchivo;
 
  
  
  include_once("funciones.php");

  
  if( $accion == "A")     // Viene del formulario de Adicon
  {

      $conexion = ConectarBD();
      $sSQL     = "INSERT INTO productos VALUES (?,?,?,?,?,?,?,?)";

      try
      {
          $pst = $conexion->prepare($sSQL);
    
          $pst->bindParam(1,$codigo);         
          $pst->bindParam(2,$nombre);
          $pst->bindParam(3,$fecha);
          $pst->bindParam(4,$categoria);
          $pst->bindParam(5,$provedor);
          $pst->bindParam(6,$precio);
          $pst->bindParam(7,$descripcion);
          $pst->bindParam(8,$ruta2);


          $filas = $pst->execute();

          if( $filas > 0 )
          {
             $mensaje='EL REGISTRO FUE GRABADO CORRECTAMENTE';
          }
          else
          {
             $mensaje='EL REGISTRO NO SE PUDO GRABAR INTENTELO NUEVAMENTE GRACIAS';
              header("Location:formularioproductos.php?mensaje=$mensaje");
          }    


      }
      catch (Exception $e)
      {

         echo "NO SE PUDO REALIZAR LA CONEXION";
         echo '<br>';
         echo "Mensaje:".$e->getMessage(); 
         exit();
      }

      DesconectarBD($conexion);

      header("Location:productos.php?mensaje=$mensaje");

      

  } 
  else if($accion == "E") // Viene del formulario de Eliminacion
  {

      $conexion = ConectarBD();
      $sSQL  = "DELETE FROM productos WHERE prod_codigo=?";

       try 
        {
        
          $pst = $conexion->prepare($sSQL);
          $pst -> bindParam(1,$codigo);
          $pst -> execute();

          $fila = $pst -> fetch();

              $mensaje='EL REGISTRO FUE ELIMINADO CORRECTAMENTE';
     

        } 
 
      catch (Exception $e)
      {

         echo "NO SE PUDO REALIZAR LA CONEXION";
         echo '<br>';
         echo "Mensaje:".$e->getMessage(); 
         exit();
      }

      DesconectarBD($conexion);

      header("Location:productos.php?mensaje=$mensaje");

  }
  else if($accion == "M") // Viene del formulario de Modificacion
  {
       $conexion = ConectarBD();
       $sSQL  = " UPDATE productos SET prod_nombre =?,prod_fecha =?,prod_categoria =?,prod_provedor =?,prod_precio =?,prod_descripcion =?,prod_imagen =? WHERE prod_codigo=?";


         try
          {
              $pst = $conexion->prepare($sSQL);

              $pst->bindParam(1,$nombre);
              $pst->bindParam(2,$fecha);
              $pst->bindParam(3,$categoria);
              $pst->bindParam(4,$provedor);
              $pst->bindParam(5,$precio);
              $pst->bindParam(6,$descripcion);
              $pst->bindParam(7,$ruta2);
              $pst->bindParam(8,$codigo);

              $filas = $pst->execute();

              if( $filas > 0 )
              {
                 $mensaje='EL REGISTRO FUE MODIFICADO CON EXITO';
              }
              else
              {
              $mensaje='EL REGISTRO NO SE PUDO MODIFICAR INTENTELO NUEVAMENTE GRACIAS';
              header("Location:modificar_productos.php?mensaje=$mensaje");
              }    


          }
          catch (Exception $e)
          {

             echo "NO SE PUDO REALIZAR LA CONEXION";
             echo '<br>';
             echo "Mensaje:".$e->getMessage(); 
             exit();
          }

          DesconectarBD($conexion);

          header("Location:productos.php?mensaje=$mensaje");
      }


?>