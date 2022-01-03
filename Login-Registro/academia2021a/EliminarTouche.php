<HTML>
<center>
<?php
include("Biblioteca.php");
include ("touche.php");
CabeceraPagina();
$id=$_GET[id];
$ok=$_GET[ok];
if ($ok==0) {
echo "Seguro que Eliminara al usuario con codigo : $id ?<br>";
echo "<a href=EliminarTouche.php?cod=$id&ok=1> Si </a> o ";
echo "<a href = ../ver_dato.php> No </a>";
} else {
$sql="DELETE FROM usuarios WHERE usuario =".$id;
$resultado=mysqli_query($conexion,$sql);
echo "Usuario con codigo $id fue Eliminado";
echo "<p align = 'center'><a href = ../ver_dato.php>Volver</a></p>";
}
PiePagina();
?>
</center>
</HTML>


<