<?php
require("fpdf/fpdf.php");
include("touche.php");
$pdf=new FPDF();
$pdf->AddPage();
//Título de la pagina
$pdf->SetFillColor(255,255,255);
$pdf->SetFont('courier','B',20);
$pdf->SetY(30);
$pdf->SetX(30);
$pdf->Image('fotos/logo.jpg',5,5,30); //('imagen', x,y,ancho)
$pdf->Cell(150,10,"Listado de Pedido",'LRTB',0,'C');
$pdf->Image('fotos/logo.jpg',165,5,30); //('imagen', x,y,ancho)
$pdf->Ln();
//Colores, ancho de línea y fuente en negrita para ancabezado de columna
$pdf->SetFillColor(200,200,200);
$pdf->SetTextColor(0);
$pdf->SetDrawColor(0,0,0);
$pdf->SetLineWidth(0.2);
$pdf->SetFont('Arial','B',14);
//Encabezado de las columnas
$header=array('id','usuario','email','clave');
$w=array(20,20,40,40,20,20);
for($i=0;$i<count($header);$i++)
$pdf->Cell($w[$i],7,$header[$i],1,0,'C',1);
$pdf->Ln();
//Restauración de colores y fuentes
$pdf->SetFillColor(224,235,255);
$pdf->SetTextColor(0);
$pdf->SetFont('helvetica','',10);
//listado de los inscritos
$result = mysqli_query($conexion, "select * from usuarios order by id");
while ($row = mysqli_fetch_array($result))
{

//posicion celda, alto,contenido,bordes_ver(Left,Right,Top,Botton),0, alineacion Left/Center/Right
$pdf->Cell($w[0],5,$row[0],); //cod
$pdf->Cell($w[1],5,$row[1],); //Apell
$pdf->Cell($w[2],5,$row[2],); //nomb
$pdf->Cell($w[3],5,$row[3],); //Especialidad
$pdf->Cell($w[4],5,$row[4],); //Especialidad

$pdf->Ln();
};
//Restauración de colores y fuentes para firmas
$pdf->SetFillColor(224,235,255);
$pdf->SetTextColor(0);
$pdf->SetFont('times','',10);
$pdf->Image('imagenes/firma.jpg',10,140,70);
$pdf->Image('imagenes/firma2.jpg',100,140,70);
$pdf->SetY(130);$pdf->SetX(130); $pdf->Cell(60,15,"Tacna, 21 de diciembre del 2020",'LRTB',0,'C');
$pdf->SetY(170);$pdf->SetX(30); $pdf->Cell(50,10,"SECRETARIA",'T',0,'C');
$pdf->SetY(180);$pdf->SetX(30); $pdf->Cell(50,10,"Firma y Sello",'',0,'C');
$pdf->SetY(170);$pdf->SetX(110); $pdf->Cell(50,10,"DIRECTOR",'T',0,'C');
$pdf->SetY(180);$pdf->SetX(110); $pdf->Cell(50,10,"Firma y Sello",'',0,'C');

//pie de pagina/numero de pagina
$pdf->SetY(260);
$pdf->SetFont('Arial','I',10);
$pdf->Cell(0,10,'Page '.$pdf->PageNo().'/{nb}',0,0,'C');
$pdf->Output();
?>