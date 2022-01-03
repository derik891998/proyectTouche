<?php
	require('fpdf/fpdf.php');
	//$pdf=new FPDF();
	$pdf=new FPDF('P','pt','A4');  // L o P, pt, mm, cm in  
	$pdf->AddPage();
    	$pdf->Ln(10);

	$pdf->SetFont('Helvetica','I',32);
	$pdf->Cell(540,50,'TOUCHE',0,0,'C',FALSE); // LCR
	$pdf->Ln(65);
	$pdf->SetFont('Arial','B',18);

	$pdf->Cell(540,20,'PROMOCION COMIDA X2',1,1,C);
	$pdf->Ln(20);
	$pdf->SetFont('Arial','B',10);

	$pdf->Cell(540,30,'Promocion que consiste por la comprar de un plato el segundo a mitad de precio',1,1,'C');
$pdf->SetFont('Arial','B',12);
	$pdf->Cell(520,20,'Touche derik');
	$pdf->Ln(24);
	$pdf->Cell(230,15,"Registarte y descubre lo nuevo para ti",'LRTB',0,'L');
	$pdf->Image('logo.jpg',11,10,80); //('imagen', x,y,ancho)

	$pdf->Image('logo.jpg',502,10,80); //('imagen', x,y,ancho)
	

	$pdf->Output();
?>