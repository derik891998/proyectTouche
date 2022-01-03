<h2 align="center">V Seminario Medico</h2>
<hr>
<?php
include("conexion.php");
$query = "SELECT * FROM registro ORDER BY codigo ASC";
$result = mysqli_query($conexion,$query);
if ($row=mysqli_fetch_array($result))
{
echo"<table border ='1' align=center>\n";
echo"<td><b>Codigo </b></td>\n";
echo"<td><b>Nombre </b></td>\n";
echo"<td><b>Apellidos </b></td>\n";
echo"<td><b>Categoria</b></td>\n";
echo"<td><b>Ciudad</b></td>\n";
echo"<td><b>Monto </b></td>\n";
do {
echo"<tr>\n";
echo"<td>".$row["codigo"]."</td>\n";
echo"<td>".$row["nombres"]."</td>\n";
echo"<td>".$row["apellidos"]."</td>\n";
echo"<td>".$row["categoria"]."</td>\n";
echo"<td>".$row["ciudad"]."</td>\n";
echo"<td>".$row["pago"]."</td>\n";
echo"</tr>\n";
} while($row = mysqli_fetch_array($result));
echo"</table>\n";
}
else
{
echo"¡La tablas esta vacia!";
}
echo "<center><a href='inscripcion.php'>Añadir nuevo inscrito</a></center>";
?>
<div align="center">
<hr>
<p> Av. Aviacion 934 – A.Alianza Tacna/Peru<br>
Fono: 311555 E-mail: <a ref="Mailto:jonyec@gmail.com">jonyec@gmail.com</a><br>
<font size="2"> Curso : Programacion Web<br>
</div>
</BODY>
</HTML>