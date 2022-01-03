<HTML>
<HEAD><TITLE> Ejemplo de paginación</TITLE></HEAD>
<BODY>
<div align="center"> PAGINACION de Resultados para Cursos </div>
<hr>
<?php
include("conexion.php");
$res = mysqli_query($conexion, "SELECT * FROM curso");
$numeroRegistros = mysqli_num_rows($res);
if($numeroRegistros<=0)
{
echo "<div align='center'>";
echo "<font face='verdana' >No se encontraron resultados</font>";
echo "</div>";
}
else
{
$orden = "cod_profesor";
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
$sql = "SELECT * FROM curso ORDER BY ".$orden." ASC LIMIT ".$limitInf.",".$tamPag;
$res = mysqli_query($conexion, $sql);
echo "<div align='center'>";
echo "<font face='verdana' size='-2'>Se encontraron ".$numeroRegistros." registros<br>";
echo "ordenados por <b>".$orden."</b>";
echo "</font></div>";
echo "<TABLE align='center' width='50%'>";
echo "<tr><td colspan='3'><hr></td></tr>";
echo "<th>Codigo curso</th>";
echo "<th>Nombre del curso</th>";
echo "<th>Precio</th>";
echo "<th>Ver</th>";
echo "<th>Borrar</th>";
echo "<th>Modificar</th>";








while($registro = mysqli_fetch_array($res))
{
?>
<!-- tabla de resultados -->
<tr bgcolor="#DDD999" ('<?php echo "[".$registro["Cod_profesor"]."]
".$registro["Nom_curso"]." - ".$registro["Nom_curso"]; ?>');">
<td><?php echo $registro["Cod_profesor"]; ?></td>
<td><?php echo $registro["Nom_curso"]; ?></td>
<td><?php echo $registro["Precio"]; ?></td>

<?php echo "<TD><a href = VerDatosCurso.php?cod=$registro[0] >Ver</a> ";?>
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
// fin de la paginacion
?>
</td></tr>
</TABLE>
<hr>
</BODY>
</HTML>
<?php
mysqli_close($conexion);
?>