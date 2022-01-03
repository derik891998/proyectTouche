<?php
require('fpdf/fpdf.php');
 
$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'Hello World!');
$pdf->SetY(30);
$pdf->SetX(30);
$pdf->Image('gato.jpg',150,5,30); //('imagen', x,y,ancho)
$pdf->Ln();
$pdf->Output();
?>
