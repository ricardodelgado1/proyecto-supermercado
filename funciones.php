<?php


    function ConectarBD()
    {

        $servidor = 'localhost';
        $usuario  = 'root';
        $clave    = 'anaobando';
        $base     = 'supermercado';

	    try 
	    {

	        $conexion = new PDO("mysql:host=$servidor;dbname=$base",$usuario,$clave,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

	        return $conexion;


	    }
	    catch (Exception $e)
	    {

	    	echo "No se pudo realizar la conexion";
	    	echo $e ->getMessage();
	    	exit();
	    }


    }  // Conectar BD


    function DesconectarBD($conexion)
    {
       $conexion = null;
    }




?>
