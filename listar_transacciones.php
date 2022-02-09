<?php 


 session_start();
 
 if( !isset( $_SESSION['nombreususer'] ) )
  {
     header("Location:indexservicio.php");
  }


 ?>
<?php  
	require("fpdf/fpdf.php");
	require("funciones.php");
	$conexion = ConectarBD();

	$pdf = new fpdf("P","mm","Letter");

	$pdf->SetMargins(10,10);

	$pdf->SetFont("Arial",'',10);

	$pdf->AddPage();

	$pdf->Cell(0,5,"supermercado max-economico",0,1,'C');
	$pdf->Cell(0,2,"",0,1,'C');
	$pdf->Cell(50,5,"Sistema de supermercados max-economico Ver. 1.0",0,0,'L');
	$pdf->Cell(96,5," ",0,0,' ');
	$pdf->Cell(50,5,"Fecha: ".date('d-m-Y'),0,1,'R');
	$pdf->Cell(146,5,"Listado General de transacciones",0,0,'L');	
	$pdf->Cell(50,5,"Pagina No. ".$pdf->PageNo(),0,1,'R');

	$pdf->Ln();

	$pdf->Cell(5,5,"",0,0,'C');
	$pdf->Cell(20,5,"Codigo",1,0,'C');	
    $pdf->Cell(30,5,"Fecha",1,0,'C');
    $pdf->Cell(40,5,"Producto",1,0,'C');
    $pdf->Cell(40,5,"Usuario",1,0,'C');
    $pdf->Cell(30,5,"Cantidad",1,0,'C');
    $pdf->Cell(30,5,"valor total",1,1,'C'); 

 

	$sSQL = "SELECT * FROM detalle_transaccion  WHERE trande_usuario LIKE'%$nombreususer%'";
	$datos = $conexion->query($sSQL);

	foreach($datos as $fila)
	{
	   	$pdf->Cell(5,5,"",0,0,'C');	
		$pdf->Cell(20,5,utf8_decode($fila['trande_codigo']),0,0,'C');
		$pdf->Cell(30,5,utf8_decode($fila['trande_fecha']),0,0,'C');
		$pdf->Cell(40,5,utf8_decode($fila['trande_producto']),0,0,'C');
		$pdf->Cell(40,5,utf8_decode($fila['trande_usuario']),0,0,'C');
		$pdf->Cell(30,5,utf8_decode($fila['trande_cantidad']),0,0,'C');
		$pdf->Cell(30,5,utf8_decode($fila['trande_valortotal']),0,1,'C');		
	}

	DesconectarBD($conexion);

	
	$pdf->Output();



?>