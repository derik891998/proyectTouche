<HTML>
<HEAD><link rel="stylesheet" href="css/style2.css" /></HEAD>
<BODY>
<?php
include("conexion.php");
$totalderegistros=1;
$result = mysqli_query($conexion, "SELECT * FROM curso order by cod_curso");
echo "<CENTER>";
echo "<h3> Cursos de alumnos de ITEL</h3>";
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
echo "<TD><a href = VerDatos.php?cod=$fila[0] >Ver</a> ";
echo "<TD><a href = Eliminar.php?cod=$fila[0] >Eliminar</a>";
echo "<TD><a href = Actualiza.php?cod=$fila[0] >Actualizar</a>";
++$totalderegistros;
}
echo "</TABLE>";
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
</BODY>
</HTML>