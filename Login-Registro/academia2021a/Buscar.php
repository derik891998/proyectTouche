<?php
include("conexion.php");
include("Biblioteca.php");
CabeceraPagina();
$texto = ''; // el resultado
$registros = ''; // el número de registros encontrados
if($_POST)
{
$busqueda = trim($_POST['buscar']);
$sql = "SELECT * FROM alumno WHERE Ape_alumno LIKE '%" .$busqueda. "%' ORDER BY Ape_alumno";
$resultado = mysqli_query($conexion, $sql);
if (mysqli_num_rows($resultado) > 0)
{
$registros = '<p>' . mysqli_num_rows($resultado) . ' encontrados </p>';
while($fila = mysqli_fetch_assoc($resultado))
{ $texto .= $fila['Ape_alumno'] . '<br />'; }
}
else
{ $texto = "No se hallaron coincidencias"; }
}
?>
<!DOCTYPE html>
<html lang="es-ES">
<head>
<meta charset='utf-8'>
<link rel="stylesheet" href="css/style2.css" />
<head>
<body>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>" name="buscador">
<input type="search" name="buscar" placeholder="Apellidos..." autofocus>
<input type="submit" name="buscador" class="aceptar" value="buscar">
</form>
<?php
echo $registros;
echo $texto;
echo "<p><a href=Alumno.php>Volver</a></p>";
PiePagina();
?>
</body>
</html>