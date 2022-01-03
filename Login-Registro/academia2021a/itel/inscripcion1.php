<HTML>
<HEADER><title>Sistema de Inscipcion</title></HEADER>
<BODY>
<div align="center">
<h1> I concurso de musica</h1>
<hr>
<?php
include("conexion.php");
if(isset($_POST["actualizar"]))
{
$id_participantes = $_POST["id_participantes"];
$grupo_musical = $_POST["grupo_musical"];
$integrantes = $_POST["integrantes"];
$genero = $_POST["genero"];
$procedencia = $_POST["procedencia"];
$email = $_POST["email"];
$Observaciones = $_POST["Observaciones"];


$query="INSERT INTO inscripcion VALUES('$id_participantes','$grupo_musical','$integrantes', '$genero', '$procedencia', '$email' ,'$Observaciones' )";


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
Añadir Nuevo integrante
<form method="POST" action="">
<div align="center"><center>
<table border="1">
<tr>
<td align ="right">id_participantes</td>
<td><input type="text" name="id_participantes" value ="" size = "10"></td>
</tr>
<tr>
<td align ="right">grupo_musical</td>
<td><input type="text" name="grupo_musical" value ="" size = "20"></td>
</tr>
<tr>
<td align ="right">integrantes</td>
<td><input type="text" name="integrantes" value ="" size = "20"></td>
</tr>
<tr>
<td align="right">genero</td>
<td>
<select name='genero'>
<option value='Medico' selected>Medico - 100</option>
<option value='Estudiante' selected>Estudiante - 80</option>
<option value='Asociado' selected>Asociado - 50</option>
</select>
</td>
</tr>
<tr>
<td align ="right">procedencia</td>
<td>
<input type="text" name="procedencia" value ="" size = "20">
</td>
</tr>
<tr>
<td align ="right">email</td>
<td><input type="text" name="email" value ="" size = "10"></td>
</tr>

<td align ="right">Observaciones</td>
<td><input type="text" name="Observaciones" value ="" size = "10"></td>
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