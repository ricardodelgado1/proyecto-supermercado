<?php 
 session_start();

  if( !isset( $_SESSION['nombreususer'] ) )
  {
     header("Location:indexsevicio.php");
  }
 ?>
<?php 

  $accion = $_POST['hideaccion'];

  $codigo        =    $_POST['trande_codigo'];
  $fecha         =    $_POST['trande_fecha'];
  $producto      =    $_POST['trande_producto'];
  $usuario       =    $_POST['trande_usuario'];
  $cantidad      =    $_POST['trande_cantidad'];
  $valorproducto =    $_POST['trande_valorproducto'];
  $valortotal    =    $_POST['trande_valortotal'];
  
  include_once("funciones.php");

  
  if( $accion == "A")     // Viene del formulario de Adicon
  {

      $conexion = ConectarBD();
      $sSQL     = "INSERT INTO detalle_transaccion VALUES (?,?,?,?,?,?,?)";

      try
      {
          $pst = $conexion->prepare($sSQL);
          $pst->bindParam(1,$codigo);
          $pst->bindParam(2,$fecha);
          $pst->bindParam(3,$producto);
          $pst->bindParam(4,$usuario);
          $pst->bindParam(5,$cantidad);
          $pst->bindParam(6,$valorproducto);         
          $pst->bindParam(7,$valortotal);      

          $filas = $pst->execute();

          if( $filas > 0 )
          {
             $mensaje=' EL REGISTRO FUE GRABADO CON EXITO';
          }
          else
          {
             $mensaje='EL REGISTRO NO SE PUDO GRABAR INTENTELO NUEVAMENTE GRACIAS';
              header("Location:formulariotransacciones.php?mensaje=$mensaje");
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

      header("Location:compraproductos.php?mensaje=$mensaje");

      

  } 
  else if($accion == "E") // Viene del formulario de Eliminacion
  {

      $conexion = ConectarBD();
      $sSQL  = "DELETE FROM detalle_transaccion WHERE trande_codigo=?";

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

      header("Location:transacciones.php?mensaje=$mensaje");

  }
  else if($accion == "M") // Viene del formulario de Modificacion
  {
       $conexion = ConectarBD();
       $sSQL  = " UPDATE detalle_transaccion SET trande_fecha =?,trande_producto =?,trande_usuario =?,trande_cantidad =?,trande_valorproducto =?,trande_valortotal =? WHERE trande_codigo=?";


         try
          {
              $pst = $conexion->prepare($sSQL);

              $pst->bindParam(1,$fecha);
              $pst->bindParam(2,$producto);
              $pst->bindParam(3,$usuario);
              $pst->bindParam(4,$cantidad);
              $pst->bindParam(5,$valorproducto);
              $pst->bindParam(6,$valortotal);
              $pst->bindParam(7,$codigo);

              $filas = $pst->execute();

              if( $filas > 0 )
              {
                 $mensaje='EL REGISTRO FUE MODIFICADO CON EXITO';
              }
              else
              {
              $mensaje='EL REGISTRO NO SE PUDO MODIFICAR INTENTELO NUEVAMENTE GRACIAS';
              header("Location:modificar_transacciones.php?mensaje=$mensaje");
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

          header("Location:transacciones.php?mensaje=$mensaje");
      }


?>