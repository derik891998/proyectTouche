<HTML>
<HEAD><link rel="stylesheet" href="css/style2.css" />


<!--SUBIR ARCHIVO-->
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Subir archivos al servidor</title>
<meta name ="author" content ="Norfi Carrodeguas">
<style type="text/css" media="screen">
body{font-size:1.2em;}
</style>
<!--SUBIR ARCHIVO-->

</HEAD>
<BODY>
<?php
include("conexion.php");
$totalderegistros=1;
$result = mysqli_query($conexion, "SELECT * FROM usuarios order by id");
echo "<CENTER>";
echo "<h3> Mantenimiento de alumnos de ITEL</h3>";
echo "<hr>";
echo "<TABLE >";
echo "<TR class='titulotabla'> <TD>Nro. <TD> Codigo <TD>Nombre y Apellido
<TD>Ver<TD>Eliminar<TD>Modificar</TR>";
while ($fila = mysqli_fetch_array($result))
{ echo "<TR class='listado'><TD>";
echo "$totalderegistros<TD>";
echo $fila[0];
echo "<TD>";
echo $fila[3]." ".$fila[2];
echo "<TD><a href = VerTouche.php?cod=$fila[0] >Ver</a> ";
echo "<TD><a href = Eliminar.php?cod=$fila[0] >Eliminar</a>";
echo "<TD><a href = Actualiza.php?cod=$fila[0] >Actualizar</a>";
++$totalderegistros;
}
echo "</TABLE>";
$numero = mysqli_num_rows($result);
echo "<p align='center'><a href=../ver_dato.php>Volver</a></p>";
echo "<TABLE border=0 cellpadding=1 >";
echo "<br>";
echo "<TR>";
echo "<FORM METHOD=POST Action = Insert.php>";
echo "<TD><input type=submit name=Añadir value=Nuevos_registros></TD>";
echo "</FORM>";
echo "<FORM METHOD=POST Action=Buscar.php>";
echo "<TD><input type=submit name=buscar value=Buscador ></TD>";
echo "</FORM>";
echo "<hr><center><b>Número de alumnos : $numero</center></b>";
echo "</TR>";
echo "</CENTER>";
echo "<br>";
?>










<!--SUBIR ARCHIVO-->

<div id="capa">
<div id="subcapa">
<div id="header">
<div class="logo">
	
</div>
</div>

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
	<!--SUBIR ARCHIVO-->






</BODY>
</HTML>