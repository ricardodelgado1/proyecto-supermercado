<?php  

	include_once("funciones.php");

	$conOperador = ConectarBD();

	$sSQL  =  'SELECT prod_codigo,prod_nombre FROM productos';

	$datos 	= $conOperador->query($sSQL);

	foreach ($datos as $fila) 
	{
		$codigo = $fila['prod_codigo'];
		$nombre = $fila['prod_nombre'];

		if($nombre == $operador)
		{
			$elegido = "selected";
		}
		else
		{
			$elegido = "";
		}

		

		echo "<option value=$codigo $elegido >$nombre</option>";

	}

	DesconectarBD($conOperador);


?>