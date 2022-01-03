<HTML>
<center>
<?php
include("Biblioteca.php");
include ("conexion.php");
CabeceraPagina();
$id=$_GET[cod];
$ok=$_GET[ok];
if ($ok==0) {
echo "Seguro que Eliminara al alumno con codigo : $id ?<br>";
echo "<a href=Eliminar.php?cod=$id&ok=1> Si </a> o ";
echo "<a href = ../ver_dato.php> No </a>";
} else {
$sql="DELETE FROM alumno WHERE cod_alumno =".$id;
$resultado=mysqli_query($conexion,$sql);
echo "Alumno con codigo $id fue Eliminado";
echo "<p align = 'center'><a href = ../ver_dato.php>Volver</a></p>";
}
PiePagina();
?>
</center>
</HTML>