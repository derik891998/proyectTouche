<?php
include("Biblioteca.php");
include("conexion.php");
CabeceraPagina();
$c1=$_POST['c1'];
$c2=$_POST['c2'];
$c3=$_POST['c3'];
$c4=$_POST['c4'];
$c5=$_POST['c5'];
$c6=$_POST['c6'];
$c7=$_POST['c7'];
$c8=$_POST['c8'];
$c9=$_POST['c9'];
$sql="INSERT INTO usuarios(id, usuario, ape_alumno, nom_alumno, sex_alumno, fna_alumno, tel_alumno,
Dir_alumno,Fot_alumno)
values ('$c1','$c2','$c3','$c4','$c5','$c6','$c7','$c8','$c9')";
//$sql="INSERT INTO alumno VALUES ('$c1','$c2','$c3','$c4','$c5','$c6','$c7','$c8','$c9')";
if(mysqli_query($conexion, $sql))
{
?>
<b><font color="#0000FF">Se ingreso el siguiente registro.</font></b><br>
<TABLE border="1" width="80%">
<tr>
<td><b>codigo</b></td>
<td><b>especialidad</b></td>
<td><b>apellidos</b></td>
<td><b>nombres</b></td>
<td><b>sexo</b></td>
<td><b>fechaNac</b></td>
<td><b>telefono</b></td>
<td><b>Direccion</b></td>
</tr>
<?php
echo "<tr bgcolor='#BBEFEF'>";
echo "<td>$c1</td>";
echo "<td>$c2</td>";
echo "<td>$c3</td>";
echo "<td>$c4</td>";
echo "<td>$c5</td>";
echo "<td>$c6</td>";
echo "<td>$c7</td>";
echo "<td>$c8</td>";
echo "<td>$c9</td>";
echo '</tr></TABLE>';
if($foto)
{
?>
<b><br><font color="#0000FF">Ahora solo falta subir la Foto:</font></b>
<TABLE border="0" width="55%" cellspacing="3" cellpadding="0" height="63">
<tr>
<td>
<FORM method="POST" action="subir_foto.php" enctype="multipart/form-data">
<INPUT name="archivo" type="file"> <?php printf("<input name='cod' type='text' size='6' value=%s>",$c1); ?>
</td>
<td> <INPUT value="Anexar Foto" name="subir" type="submit"></td>
</FORM>
</tr>
</TABLE>
<?php
//--------------------------------
if ($band=='1')
{
$conexionf="SELECT * FROM foto_alumno WHERE codigo=$codalu";
$resultadof=mysqli_query($conexion, $conexionf);
if($rowf=mysqli_fetch_array($resultadof))
{

echo '<table><tr>';
echo "<td ><img border='0' src=$rowf[1] width='96' height='65'></td>";
echo '</tr></table>';

}
}
//---------------------------------
}
} else {
?>
<center>
<b><font color="#0000FF">Error en el Ingreso de datos.</font></b>
</center>
<?php
}
?>
<p align="center"><font color="#0000FF"><b>
<a href="Alumno.php?valid=1">Volver</a></b></font></p>
<p align="center"></p>
</BODY>
<?
PiePagina();
?>

TAREA