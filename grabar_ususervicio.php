<?php 


 
  $accion = $_POST['hideaccion'];

  $codigo     =    $_POST['ususer_documento'];
  $apellidos  =    $_POST['ususer_apellidos'];
  $nombres    =    $_POST['ususer_nombres'];
  $direccion  =    $_POST['ususer_direccion'];
  $telefono   =    $_POST['ususer_telefono'];
  $clave      =    $_POST['ususer_clave'];
  $clave2     =    $_POST['ususer_clave2'];
  
  include_once("funciones.php");

 
 
  
      if( $accion == "A")     // Viene del formulario de Adicon
      {

     $fine = false;
            
            $pas1 = $clave;
            $pas2 = $clave2;
            
            
     if($pas1 == $pas2){
                
         $fine = true; 
                
                
     }       

    if($fine == true){

      $conexion = ConectarBD();
      $sSQL     = "INSERT INTO usuarios_servicio VALUES (?,?,?,?,?,?)";

      try
      {
          $pst = $conexion->prepare($sSQL);
          $pst->bindParam(1,$codigo);
          $pst->bindParam(2,$apellidos);
          $pst->bindParam(3,$nombres);
          $pst->bindParam(4,$direccion);
          $pst->bindParam(5,$telefono); 
          $pst->bindParam(6,$clave);

          $filas = $pst->execute();

          if( $filas > 0 )
          {
            $mensaje='EL REGISTRO FUE CREADO CON EXITO';
           
          }
          else
          {
             $mensaje='EL REGISTRO NO SE PUDO GRABAR INTENTELO NUEVAMENTE GRACIAS';
              header("Location:formulariousuariosservicio.php?mensaje=$mensaje");
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
      

        header("Location:indexservicio.php?mensaje=$mensaje");
     

      

       } 

       else if ($fine == false){
     $mensaje='CONTRASEÑA INCORRECTA INGRESELA CORRECTAMENTE';
     header("Location:formulariousuariosservicio.php?mensaje=$mensaje");

    
    }

   }

  
  
  else if($accion == "E") // Viene del formulario de Eliminacion
  {

      $conexion = ConectarBD();
      $sSQL  = "DELETE FROM usuarios_servicio WHERE ususer_documento=?";

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

       header("Location:uariosDELservicio.php?mensaje=$mensaje");

  }
  else if($accion == "M") // Viene del formulario de Modificacion
  {


       $conexion = ConectarBD();
       $sSQL  = " UPDATE usuarios_servicio SET ususer_apellidos=?,ususer_nombres=?,ususer_direccion=?,ususer_telefono=? WHERE ususer_documento=?";


         try
          {
              $pst = $conexion->prepare($sSQL);
             
              $pst->bindParam(1,$apellidos);
              $pst->bindParam(2,$nombres);
              $pst->bindParam(3,$direccion);
              $pst->bindParam(4,$telefono);
              $pst->bindParam(5,$codigo);

              $filas = $pst->execute();

              if( $filas > 0 )
              {
                 $mensaje='EL REGISTRO FUE MODIFICADO CON EXITO';
              }
              else
              {
               $mensaje='EL REGISTRO NO SE PUDO MODIFICAR INTENTELO NUEVAMENTE GRACIAS';
              header("Location:modificar_ususervicio.php?mensaje=$mensaje");
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

          header("Location:usuariosdelservicio.php?mensaje=$mensaje");


  }


 ?>
