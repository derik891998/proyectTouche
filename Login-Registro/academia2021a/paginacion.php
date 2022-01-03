<HTML>
<HEAD>
<TITLE> Ejemplo de paginación</TITLE>



<!--SUBIR ARCHIVO-->
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<meta name ="author" content ="Norfi Carrodeguas">
<style type="text/css" media="screen">
body{font-size:1.2em;}
</style>
<!--SUBIR ARCHIVO-->

</HEAD>
<BODY>
<div align="center"> Pagination de Resultados para Alumnos </div>
<hr>
<?php
include("conexion.php");
$res = mysqli_query($conexion, "SELECT * FROM Alumno");
$numeroRegistros = mysqli_num_rows($res);
if($numeroRegistros<=0)
{
echo "<div align='center'>";
echo "<font face='verdana' >No se encontraron resultados</font>";
echo "</div>";
}
else
{
$orden = "Cod_alumno";
$tamPag = 10; // tamaño de la página 10 filas
if(!isset($_GET["pagina"])) // pagina actual si no está definida y limites
{
$pagina = 1;
$inicio = 1;
$final = $tamPag;
}
else
{ $pagina = $_GET["pagina"]; }
$limitInf = ($pagina-1)*$tamPag; //calculo del limite inferior
$numPags = $numeroRegistros/$tamPag; //calculo del numero de paginas
if(!isset($pagina))
{
$pagina = 1;
$inicio = 1;
$final = $tamPag;
}
else
{
$seccionActual = intval(($pagina-1)/$tamPag);
$inicio = ($seccionActual*$tamPag)+1;
if($pagina<$numPags)
{
$final = $inicio + $tamPag - 1;
}
else
{
$final = $numPags;
}
if ($final>$numPags)
{
$final = $numPags;
}
} // fin de calculo
// creacion de la consulta con limites
$sql = "SELECT * FROM Alumno ORDER BY ".$orden." ASC LIMIT ".$limitInf.",".$tamPag;
$res = mysqli_query($conexion, $sql);
echo "<div align='center'>";
echo "<font face='verdana' size='-2'>Se encontraron ".$numeroRegistros." registros<br>";
echo "ordenados por <b>".$orden."</b>";
echo "</font></div>";
echo "<TABLE align='center' width='50%'>";
echo "<tr><td colspan='3'><hr></td></tr>";

echo "<th>Codigo</th>";
echo "<th>Nombre</th>";
echo "<th>Apellido</th>";
echo "<th>Numero</th>";


while($registro = mysqli_fetch_array($res))
{
?>
<!-- tabla de resultados -->
<tr bgcolor="#DDD999" ('<?php echo "[".$registro["Cod_alumno"]."]
".$registro["Nom_alumno"]." - ".$registro["Ape_alumno"]; ?>');">
<td><?php echo $registro["Cod_alumno"]; ?></td>
<td><?php echo $registro["Nom_alumno"]; ?></td>
<td><?php echo $registro["Ape_alumno"]; ?></td>
<td><?php echo $registro["Tel_alumno"]; ?></td>


<?php echo "<TD><a href = VerDatos.php?cod=$registro[0] >Ver</a>";?>
<?php echo "<TD><a href = Eliminar.php?cod=$registro[0] >Eliminar</a>";?>
<?php echo "<TD><a href = Actualiza.php?cod=$registro[0] >Actualizar</a>";?>







</tr>
<!-- fin tabla resultados -->
<?php
} //fin while
echo "</TABLE>";
} //fin if else
// aqui inicia la paginacion
?>
<br>
<TABLE align="center">
<tr><td align="center" >
<?php
if($pagina>1)
{
echo "<a class='p' href='".$_SERVER["PHP_SELF"]."?pagina=".($pagina-1)."'>";
echo "<font face='verdana' >Anterior</font>";
echo "</a> ";
}
for($i = $inicio; $i<=$final; $i++)
{
if($i==$pagina)
{ echo "<font face='verdana' ><b>".$i."</b> </font>"; }
else
{ echo "<a class='p' href='".$_SERVER["PHP_SELF"]."?pagina=".$i."'>";
echo "<font face='verdana' >".$i."</font></a> ";
}
}
if($pagina<$numPags)
{ echo " <a class='p' href= '".$_SERVER["PHP_SELF"]."?pagina=".($pagina+1)."'>";
echo "<font face='verdana' >Siguiente</font></a>";
}





$numero = mysqli_num_rows($result);
echo "<hr><center><b>Número de alumnos : $numero</center></b>";
echo "<TABLE border=0 cellpadding=1 >";
echo "<TR>";
echo "<FORM METHOD=POST Action = Insert.php>";
echo "<TD><input type=submit name=Añadir value=Nuevos_registros></TD>";
echo "</FORM>";
echo "<FORM METHOD=POST Action=Buscar.php>";
echo "<TD><input type=submit name=buscar value=Buscador ></TD>";
echo "</FORM>";
echo "</TR>";
echo "<br>";
echo "<p align='center'><a href=zona.html>Volver</a></p>";
echo "</CENTER>";
?>




</td></tr>
</TABLE>
<hr>
<br>

<!--SUBIR ARCHIVO-->
<hr>
<div id="capa">
<div id="subcapa">
<div id="header">
<div class="logo">
	
</div>
</div>
<br>
<div id="izquierdo">


<form enctype="multipart/form-data" action="" method="POST">
<input name="uploadedfile" type="file">
<input type="submit" value="Subir archivo">
</form> 
<?php
$uploadedfileload="true";
$uploadedfile_size=$_FILES['uploadedfile'][size];
echo $_FILES[uploadedfile][name];
if ($_FILES[uploadedfile][size]>200000)
{$msg=$msg."El archivo es mayor que 200KB, debes reduzcirlo antes de subirlo<BR>";
$uploadedfileload="false";}

if (!($_FILES[uploadedfile][type] =="image/pjpeg" OR $_FILES[uploadedfile][type] =="image/gif" OR $_FILES[uploadedfile][type] =="image/png"))
{$msg=$msg." Tu archivo tiene que ser JPG o GIF. Otros archivos no son permitidos<BR>";
$uploadedfileload="false";}

$file_name=$_FILES[uploadedfile][name];
$add="uploads/$file_name";
if($uploadedfileload=="true"){

if(move_uploaded_file ($_FILES[uploadedfile][tmp_name], $add)){
echo " Ha sido subido satisfactoriamente";
}else{echo "Error al subir el archivo";}

}else{echo $msg;}
?>
<hr>
	<!--SUBIR ARCHIVO-->



</BODY>
</HTML>
<?php
mysqli_close($conexion);
?>