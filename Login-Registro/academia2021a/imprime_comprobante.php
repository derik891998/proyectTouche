<?php
require("fpdf/fpdf.php");
include("conexion.php"); 
$pdf=new FPDF();
$pdf->AddPage();

//Título de la pagina
	$pdf->SetFillColor(255,255,255);
	$pdf->SetFont('courier','B',20);
	$pdf->SetY(30);
	$pdf->SetX(30);
	$pdf->Image('imagenes/logo1.jpg',5,5,30); //('imagen', x,y,ancho)
	$pdf->Cell(150,10,"Comprobante de Inscripción",'',0,'C');	
	$pdf->Ln();	
	$pdf->Image('imagenes/logo1.jpg',165,5,30); //('imagen', x,y,ancho)
	$pdf->Ln();    

//Colores, ancho de línea y fuente en negrita para ancabezado de columna
    $pdf->SetFillColor(200,200,200);
    $pdf->SetTextColor(0);
    $pdf->SetDrawColor(0,0,0);
    $pdf->SetLineWidth(0.2);
    $pdf->SetFont('Arial','',14);
	
//Encabezado de las columnas 
	$w = array(50,50,50,50,50,50);
	$header = array('id','usuarios','email','clave');
    for($i = 0; $i < count($header); $i++)
	{
		$pdf->SetY(40+10*($i+1));$pdf->SetX(30);
		// celda(ancho, alto,contenido,bordes_ver(Left,Right,Top,Botton),0, alineacion L/C/R)		 
		$pdf->Cell($w[$i],7,$header[$i],1,0,'C',1);
    };
	
//Restauración de colores y fuentes
    $pdf->SetFillColor(224,235,255);
    $pdf->SetTextColor(0);
    $pdf->SetFont('helvetica','',10);

//listado de los inscritos
	$codig = $_GET[cod];
	$query = "select * from usuarios where id = ".$codig;  /*codigo dato numerico */
	$result = mysqli_query($conexion,$query);

while ($fila = mysqli_fetch_array($result)) 	// visualización de DATOS
        {		
		for($i = 0; $i < count($header); $i++)
			{
			 $pdf->SetY(40+10*($i+1));
			 $pdf->SetX(80);
			 $pdf->Cell($w[$i]+30,7,$fila[$i],'LRTB',0,'C'); 			
			}
        };

		 // celda ancho, alto,contenido,bordes_ver(Left,Right,Top,Botton),0, alineacion Left/Center/Right		 
		 {		
		 $pdf->SetY(60);$pdf->SetX(80);$pdf->Cell($w[0],7,$fila[0],'LRTB',0,'C'); 
		 $pdf->SetY(70);$pdf->SetX(80);$pdf->Cell($w[1],7,$fila[1],'LRTB',0,'L');  
		 $pdf->SetY(80);$pdf->SetX(80);$pdf->Cell($w[2],7,$fila[2],'LRTB',0,'L');
		 $pdf->SetY(90);$pdf->SetX(80);$pdf->Cell($w[3],7,$fila[3],'LRTB',0,'L'); 
         $pdf->SetY(100);$pdf->SetX(80);$pdf->Cell($w[4],7,$fila[4],'LRTB',0,'C'); 
	     $pdf->SetY(110);$pdf->SetX(80);$pdf->Cell($w[5],7,$fila[5],'LRTB',0,'C');
         $pdf->Ln();
        };

		#$pdf->Cell(170,0,'Por medio de la presente se hace constar que el ciudadano '.$row1['nombre'].' cursa el semestre '.$row1['semestre'].' en el lapso '.$row1['lapso'],0,0,'C');
 
		# campos: codigo nombres apellidos categoria ciudad pago
 
		$cadenaTxt = ' AHORA '.$fila[codigo].'El que suscribe, Lic. José Jimenez Castro, certifica que Don ...,' .$fila[2].'  Y    NOMBRES,    identificado(a)    con    DNI    N.º $fila[4], ha laborado/viene laborando en esta empresa, ocupando el cargo de (CARGO), durante el siguiente periodo:Fecha de inicio:Día, mes, añoFecha de término:Día, mes, año(si continúa laborando, colocar: Hasta la actualidad).Se  expide  la  presente  constancia  a  solicitud  de  la  parte  interesada  para  los  fines que estime convenientes.Ciudad, día, mes y año de expedición.';
		$pdf->Ln(10); // salta 10 lineas
		$pdf->SetFont('Arial','B',10);
		$pdf->MultiCell(190,5,$cadenaTxt);

		//$pdf->MultiCell(180,25,$txt,1,'L',1);   // ancho, alto, cadenaTxt, borde-0, align-J, fill-false
	
//Restauración de colores y fuentes para firmas		
		$pdf->SetFillColor(224,235,255);
		$pdf->SetTextColor(0);
		$pdf->SetFont('times','',10);		
		$pdf->Image('imagemes/logo1.jpg',20,140,70); // ('imagen', x, y, ancho)
		$pdf->SetY(130);$pdf->SetX(130);	$pdf->Cell(60,15,"Tacna, ".date('d/m/Y'),'',0,'C');	// fecha	
		$pdf->SetY(170);$pdf->SetX(30);		$pdf->Cell(50,7,"SECRETARIA",'T',0,'C'); 
		$pdf->SetY(176);$pdf->SetX(30);		$pdf->Cell(50,7,"Firma y Sello",'',0,'C'); 
		$pdf->SetY(170);$pdf->SetX(110);	$pdf->Cell(50,7,"DIRECTOR",'T',0,'C'); 
		$pdf->SetY(176);$pdf->SetX(110);	$pdf->Cell(50,7,"Firma y Sello",'',0,'C'); 
		
		$pdf->SetY(260);
		$pdf->SetFont('Arial','I',10);
		$pdf->Cell(0,10,'Page '.$pdf->PageNo().'/{nb}',0,0,'C');
$pdf->Output();
?> 
