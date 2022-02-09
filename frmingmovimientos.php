<?php
   include("funciones.php");
   $f=fecha_actual();
   $vrenlace=conectar();
   $vrmaximo="select max(numeromov) as maximo from movimientos";
   $vrejeconsmax=mysqli_query($vrenlace,$vrmaximo);
   $vrregmax=mysqli_fetch_array( $vrejeconsmax);
   $vrnumeromov=$vrregmax["maximo"]+1;
   $vrconsahorradores="select * from ahorrador order by apellidos,nombres";
   $vrejeconsahorradores=mysqli_query($vrenlace,$vrconsahorradores);
?>

<html>
   <head>
     <title>Formulario de ingreso de movimientos</title>
   </head> 
   <body>
     <h1>Formulario de ingreso de movimientos</h1>
      <h3><?php echo $f; ?></h3>
      <form name="frmingmovimientos" action="ingmovimientos.php" method="post">
        Movimiento No. <?php echo $vrnumeromov; ?> <br />
	Ahorrador: 
        <select name="lstdocide">
          <?php
            while($vrregahorrador=mysqli_fetch_array($vrejeconsahorradores)){
	      	$vrdocide=$vrregahorrador["docide"];
               	$vrapellidos=$vrregahorrador["apellidos"];
		$vrnombres=$vrregahorrador["nombres"];
          ?>
            <option value='<?php echo $vrdocide; ?>'>  <?php echo "$vrapellidos $vrnombres"; ?></option>
          <?php  
  	    }
          ?>
        </select>
	<br />
        Tipo de movimiento:<br />
         <input type="radio" name="opttipomov" value="c"> Consignaci&oacute;n
         <input type="radio" name="opttipomov" value="r"> Retiro
         <br />
	Fecha de movimiento:  
        <input type="text" name="txtfecmov" size="10" maxlength="10"  value='<?php echo obtener_fecha(); ?>'><br />
        Valor del movimiento: 
        <input type="text" name="txtvalormov" size="10" maxlength="10"><br />
         <input type="hidden" name="txtnumeromov"  value= '<?php echo $vrnumeromov; ?>'>
	<input type="submit" name="btnAdicionar" value="Adicionar">
        <input type="reset" name="btnLimpiar" value="Limpiar">
      </form>
   </body>
</html>
