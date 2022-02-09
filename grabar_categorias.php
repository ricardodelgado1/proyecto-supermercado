<?php 
 session_start();

 if( !isset( $_SESSION['nombreususis'] ) )
  {
     header("Location:index.php");
  }
 ?>
<?php 

  $accion = $_POST['hideaccion'];


  $codigo        =    $_POST['cat_codigo'];
  $nombre        =    $_POST['cat_nombre'];


 
  
  
  include_once("funciones.php");

  
  if( $accion == "A")     // Viene del formulario de Adicon
  {

      $conexion = ConectarBD();
      $sSQL     = "INSERT INTO categorias VALUES (?,?)";

      try
      {
          $pst = $conexion->prepare($sSQL);
    
          $pst->bindParam(1,$codigo);         
          $pst->bindParam(2,$nombre);

          $filas = $pst->execute();

          if( $filas > 0 )
          {
             $mensaje='EL REGISTRO FUE GRABADO CORRECTAMENTE';
          }
          else
          {
             $mensaje='EL REGISTRO NO SE PUDO GRABAR INTENTELO NUEVAMENTE GRACIAS';
              header("Location:formulariocategorias.php?mensaje=$mensaje");
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

      header("Location:categorias.php?mensaje=$mensaje");

      

  } 
  else if($accion == "E") // Viene del formulario de Eliminacion
  {

      $conexion = ConectarBD();
      $sSQL  = "DELETE FROM categorias WHERE cat_codigo=?";

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

      header("Location:categorias.php?mensaje=$mensaje");

  }
  else if($accion == "M") // Viene del formulario de Modificacion
  {
       $conexion = ConectarBD();
       $sSQL  = " UPDATE categorias SET cat_nombre =? WHERE cat_codigo=?";


         try
          {
              $pst = $conexion->prepare($sSQL);

              $pst->bindParam(1,$nombre);
              $pst->bindParam(2,$codigo);

              $filas = $pst->execute();

              if( $filas > 0 )
              {
                 $mensaje='EL REGISTRO FUE MODIFICADO CON EXITO';
              }
              else
              {
              $mensaje='EL REGISTRO NO SE PUDO MODIFICAR INTENTELO NUEVAMENTE GRACIAS';
              header("Location:modificar_categorias.php?mensaje=$mensaje");
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

          header("Location:categorias.php?mensaje=$mensaje");
      }