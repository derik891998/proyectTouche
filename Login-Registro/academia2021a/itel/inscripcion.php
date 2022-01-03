<HTML>
<HEADER><title>Sistema de Inscipcion</title></HEADER>
<BODY>
<div align="center">
<h1> III Seminario de Informatica</h1>
<hr>
<?php
include("conexion.php");
if(isset($_POST["actualizar"]))
{
$codigo = $_POST["codigo"];
$nombres = $_POST["nombres"];
$apellidos = $_POST["apellidos"];
$categoria = $_POST["categoria"];
$ciudad = $_POST["ciudad"];
$pago = $_POST["pago"];
$query="INSERT INTO inscripcion VALUES('$codigo','$nombres','$apellidos', '$categoria', '$ciudad', '$pago')";
$result=mysqli_query($conexion,$query);
echo"<br>";
echo "¡Registro Guardado!";
echo "<br>";
echo "<p align='center'><a href='inscripcion.php'>Volver_a_Inscripcion</a></p>";
echo "<p align='center'><a href='ver.php'>Examinar</a></p>";
}
else
{
?>
Añadir Nuevo participante
<form method="POST" action="">
<div align="center"><center>
<table border="1">
<tr>
<td align ="right">Código</td>
<td><input type="text" name="codigo" value ="" size = "10"></td>
</tr>
<tr>
<td align ="right">Nombres</td>
<td><input type="text" name="nombres" value ="" size = "20"></td>
</tr>
<tr>
<td align ="right">Apellidos</td>
<td><input type="text" name="apellidos" value ="" size = "20"></td>
</tr>
<tr>
<td align="right">categoria</td>
<td>
<select name='categoria'>
<option value='Medico' selected>Medico - 100</option>
<option value='Estudiante' selected>Estudiante - 80</option>
<option value='Asociado' selected>Asociado - 50</option>
</select>
</td>
</tr>
<tr>
<td align ="right">Ciudad</td>
<td>
<input type="text" name="ciudad" value ="" size = "20">
</td>
</tr>
<tr>
<td align ="right">Monto</td>
<td><input type="text" name="pago" value ="" size = "10"></td>
</tr>
</table>
<input type ="Submit" name="actualizar" value="Guardar">
<input type ="Reset" value="Cancelar">
<a href='ver.php'>Examinar</a>
</form>
<?php
}
?>
</BODY>
</HTML>