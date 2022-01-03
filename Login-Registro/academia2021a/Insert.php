<?php
include("Biblioteca.php");
include("conexion.php");
CabeceraPagina();
$sql="SELECT Cod_alumno FROM alumno ORDER BY Cod_alumno";
$result=mysqli_query($conexion, $sql);
if($row=mysqli_fetch_array($result))

	{
do
{ $ultimo_reg=$row[0];
}while ($row=mysqli_fetch_array($result));
}
$nuevo_cod_reg=$ultimo_reg+1;
?>
<HTML>
<BODY>
<center>
INGRESAR un nuevo Estudiante
<FORM method="POST" action="Insertar.php">
<TABLE border="0" width="30%" height="250" bgcolor="#BBEFEF" >
<tr>
<td align="right"><b>CODIGO:</b></td>
<td>
<?php
echo "<input type='text' value=$nuevo_cod_reg name='c1' size='10' tabindex='1'>";
?>
</td>
</tr>
<tr>
<td align="right">ESPECIALIDAD :</td>
<td > <select size="1" name="c2" tabindex="2">
<option>1.Tecnico Analista Programador </option>
<option>2.Tecnico en Contabilidad Comp.</option>
<option>3.Tecnico en Secretariado Comp.</option>
<option>4.Asistente Informatico en Ing.</option>
</select></td>
</tr>
<tr>
<td align="right">APELLIDOS : </td>
<td><input type="text" name="c3" size="20" tabindex="3"></td>
</tr>
<tr>
<td align="right">NOMBRES : </td>
<td><input type="text" name="c4" size="20" tabindex="4"></td>
</tr>
<tr>
<td align="right">SEXO : </font></td>
<td > <select size="1" name="c5" tabindex="5">
<option>0.Femenino</option>
<option>1.Masculino</option>
</select></td>

</tr>
<tr>
<td align="right">FECHA NAC.:</font></td>
<td><input type="text" name="c6" size="12" tabindex="6"></td>
</tr>
<tr>
<td align="right">TELEFONO : </td>
<td><input type="text" name="c7" size="12" tabindex="7"></td>
</tr>
<tr>
<td align="right">DIRECCION : </font></td>
<td><input type="text" name="c8" size="22" tabindex="8"></td>
</tr>
<tr>
<td align="right">FOTOS : </td>
<td><input type="checkbox" name="foto" value="ON" checked tabindex="12"></td>
</tr>
</TABLE>

<INPUT type="submit" value="Aceptar" name="B1">
<INPUT type="reset" value="Limpiar" name="B2">
</FORM>
<FORM method="POST" action="Alumno.php">
<INPUT type="submit" name="volver" value="Volver">
</FORM>
</center>
</BODY>
<?
PiePagina();
?>
</HTML>