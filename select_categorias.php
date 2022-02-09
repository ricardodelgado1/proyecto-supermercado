<?php  
	include_once("funciones.php");

	$conPais = ConectarBD();

	$sSQL  	 =  'SELECT cat_nombre FROM categorias';

	$datos 	 = $conPais->query($sSQL);

	foreach ($datos as $fila) 
	{
		$nombre = $fila['cat_nombre'];

		if($nombre == $categoria)
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