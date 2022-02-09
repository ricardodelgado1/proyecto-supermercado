<?php  
	include_once("funciones.php");

	$conPais = ConectarBD();

	$sSQL  	 =  'SELECT nombre FROM paises';

	$datos 	 = $conPais->query($sSQL);

	foreach ($datos as $fila) 
	{
		$nombre = $fila['nombre'];

		if($nombre == $pais)
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