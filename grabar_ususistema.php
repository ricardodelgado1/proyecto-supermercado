<?php 


 
  $accion = $_POST['hideaccion'];

  $codigo     =    $_POST['ususis_documento'];
  $apellido   =    $_POST['ususis_apellidos'];
  $nombre     =    $_POST['ususis_nombres'];
  $direccion  =    $_POST['ususis_direccion'];
  $cargo      =    $_POST['ususis_cargo'];
  $pais       =    $_POST['selPai'];
  $telefono   =    $_POST['ususis_telefono'];
  $clave      =    $_POST['ususis_clave'];
  $clave2     =    $_POST['ususis_clave2'];
  
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
      $sSQL     = "INSERT INTO usuarios_sistema VALUES (?,?,?,?,?,?,?,?)";

      try
      {
          $pst = $conexion->prepare($sSQL);
          $pst->bindParam(1,$codigo);
          $pst->bindParam(2,$apellido);
          $pst->bindParam(3,$nombre);
          $pst->bindParam(4,$direccion);
          $pst->bindParam(5,$cargo);
          $pst->bindParam(6,$pais);     	
          $pst->bindParam(7,$telefono);
          $pst->bindParam(8,$clave);

          $filas = $pst->execute();

          if( $filas > 0 )
          {
             $mensaje='EL REGISTRO FUE CREADO CON EXITO';
          }
          else
          {
             $mensaje='EL REGISTRO NO SE PUDO GRABAR INTENTELO NUEVAMENTE GRACIAS';
              header("Location:formulariousuariossistema.php?mensaje=$mensaje");
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

      header("Location:usuariosdelsistema.php?mensaje=$mensaje");


      
      }
      else if ($fine == false){

     $mensaje='CONTRASEÑA INCORRECTA INGRESELA CORRECTAMENTE';
     header("Location:formulariousuariossistema.php?mensaje=$mensaje");

    
      } 

   }
 


  else if($accion == "E") // Viene del formulario de Eliminacion
  {

      $conexion = ConectarBD();
      $sSQL  = "DELETE FROM usuarios_sistema WHERE ususis_documento=?";

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

       header("Location:usuariosdelsistema.php?mensaje=$mensaje");

  }


  else if($accion == "M") // Viene del formulario de Modificacion
  {


       $conexion = ConectarBD();
       $sSQL  = " UPDATE usuarios_sistema SET ususis_apellidos=?,ususis_nombres=?,ususis_direccion=?,ususis_cargo=?,ususis_pais=?,ususis_telefono=? WHERE ususis_documento=?";


         try
          {
              $pst = $conexion->prepare($sSQL);
             
              $pst->bindParam(1,$apellido);
              $pst->bindParam(2,$nombre);
              $pst->bindParam(3,$direccion);
              $pst->bindParam(4,$cargo);
              $pst->bindParam(5,$pais);
              $pst->bindParam(6,$telefono);          
              $pst->bindParam(7,$codigo);

              $filas = $pst->execute();

              if( $filas > 0 )
              {
                 $mensaje='EL REGISTRO FUE MODIFICADO CON EXITO';
              }
              else
              {
               $mensaje='EL REGISTRO NO SE PUDO MODIFICAR INTENTELO NUEVAMENTE GRACIAS';
              header("Location:modificar_ususistema.php?mensaje=$mensaje");
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

          header("Location:usuariosdelsistema.php?mensaje=$mensaje");


  }


 ?>
