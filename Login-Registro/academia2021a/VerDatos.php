<?php
require("fpdf/fpdf.php");
include("conexion.php");
$pdf=new FPDF();
$pdf->AddPage();

$pdf->SetFont('Helvetica','I',20);
$pdf->Cell(180,20,'COMPROBANTE DE PAGO',1,1,'C',FALSE); // LCR
$pdf->Cell(180,5,'DERIK',1,1,'C',FALSE); // LCR
$pdf->Ln(6);
$pdf->SetFont('Arial','B',18);
$pdf->Cell(180,5,'Inscrito ',1,1,C);
$pdf->Ln(10);
$pdf->SetFont('Arial','B',14);




//Colores, ancho de línea y fuente en negrita para ancabezado de columna
$pdf->SetFillColor(50,100,50);
$pdf->SetTextColor(120);
$pdf->SetDrawColor(1,0,0);
$pdf->SetLineWidth(0.2);
$pdf->SetFont('Arial','B',14);

//Encabezado de las columnas
	$w = array(30,30,30,30,30,30,30,30,80);
$header = array('Cod_alumno','Esp_alumno','Ape_alumno','Non_alumno','Sex_alumno','Fna_alumno',
	'Tel_alumno','Dir_alumno','Fot_alumno');
    for($i = 0; $i < count($header); $i++)
	{
		$pdf->SetY(50+7*($i+1));$pdf->SetX(50);
		// celda(ancho, alto,contenido,bordes_ver(Left,Right,Top,Botton),0, alineacion L/C/R)		 
		$pdf->Cell($w[$i],7,$header[$i],0,0,'C',1);

    };
//Restauración de colores y fuentes
$pdf->SetFillColor(50,100,50);
$pdf->SetTextColor(100);
$pdf->SetFont('helvetica','',10);

//listado de los inscritos

$cod = $_GET[cod];
$query = "SELECT * FROM alumno WHERE Cod_alumno=".$cod;

$result = mysqli_query($conexion,$query);

while ($fila = mysqli_fetch_array($result)) 	// visualización de DATOS, fila almacena y llama
        {		
		for($i = 0; $i < count($header); $i++)
			{
			 $pdf->SetY(51+7*($i+1));
			 $pdf->SetX(78);
			 $pdf->Cell($w[$i]+0,5,$fila[$i],'',1,'C');

			}
        };



{

//posicion celda, alto,contenido,bordes_ver(Left,Right,Top,Botton),0, alineacion Left/Center/Right

//$pdf->SetY(80);$pdf->SetX(90);$pdf->Cell($w[1],5,$fila[1],'LRTB',0,'C'); 

		 $pdf->SetY(0);$pdf->SetX(0);$pdf->Cell($w[1],7,$fila[1],'LRTB',0,'L');  
		 $pdf->SetY(0);$pdf->SetX(0);$pdf->Cell($w[2],7,$fila[2],'LRTB',0,'L');
		 $pdf->SetY(0);$pdf->SetX(0);$pdf->Cell($w[3],7,$fila[3],'LRTB',0,'L'); 
         $pdf->SetY(0);$pdf->SetX(0);$pdf->Cell($w[4],7,$fila[4],'LRTB',0,'C'); 
	     $pdf->SetY(0);$pdf->SetX(0);$pdf->Cell($w[5],7,$fila[5],'LRTB',0,'C');
	     $pdf->SetY(0);$pdf->SetX(0);$pdf->Cell($w[6],7,$fila[6],'LRTB',0,'C');

	     $pdf->Image('imagenes/platillo2.jpg',50,130,90); //('imagen', x,y,ancho)



	



$pdf->Ln();
};

$pdf->Output();

?>



