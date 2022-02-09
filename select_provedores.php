<?php  
	include_once("funciones.php");

	$conPais = ConectarBD();

	$sSQL  	 =  'SELECT prove_nombre FROM proveedores';

	$datos 	 = $conPais->query($sSQL);

	foreach ($datos as $fila) 
	{
		$nombre = $fila['prove_nombre'];

		if($nombre == $provedor)
		{
			$elegido = "selected";
		}
		else
		{
			$elegido = "";
		}

		echo "<option value=$nombre $elegido>$nombre</option>";

	}

	DesconectarBD($conPais);


?>