posibilidad de editarlos
<?php
include("Biblioteca.php");
include ("conexion.php");
CabeceraPagina();

if(isset($_GET['cod'])){
$id = $_GET['cod'];
$sql = mysqli_query($conexion,"SELECT * FROM alumno WHERE cod_alumno =".$id ) or die (mysql_error());
$row = mysqli_fetch_array($sql);
$mensaje = "Actualizar los datos del Estudiante <b>$row[Nom_alumno]</b>";
}
if(isset($_POST['actualizar']) && $_POST['actualizar'] == 'Actualizar')
{
if(!empty($_POST['Cod']) && !empty($_POST['Nom']) && !empty($_POST['Ape']))
{
$cod_alumno = $_POST['Cod'];
$esp_alumno = $_POST['Esp'];
$nom_alumno = $_POST['Nom'];
$ape_alumno = $_POST['Ape'];
$sex_alumno = $_POST['Sex'];
$fna_alumno = $_POST['Fna'];
$tel_alumno = $_POST['Tel'];
$dir_alumno = $_POST['Dir'];
$sqlUpdate = mysqli_query($conexion, "UPDATE alumno SET
Cod_alumno='$cod_alumno',
Esp_alumno='$esp_alumno',
Ape_alumno='$ape_alumno',
Nom_alumno='$nom_alumno',
Sex_alumno='$sex_alumno',
Fna_alumno='$fna_alumno',
Tel_alumno='$tel_alumno',
Dir_alumno='$dir_alumno'
WHERE Cod_alumno=".$id ) or die(mysql_error());
echo "<center>Registro actualizado correctamente </center>";
}else{
echo "debe llenar todos los campos";
}
}else{
echo "<center>";
echo "<p>".$mensaje."</p>";
?>
<FORM name="actualizar-registro" method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
Est. Codigo: <input type="text" name="Cod" value="<?php echo $row['Cod_alumno']; ?>" /><br />
Especialidad: <input type="text" name="Esp" value="<?php echo $row['Esp_alumno']; ?>" /><br />
Est Apellido: <input type="text" name="Ape" value="<?php echo $row['Ape_alumno']; ?>" /><br />
Est. Nombre: <input type="text" name="Nom" value="<?php echo $row['Nom_alumno']; ?>" /><br />
Est. su Sexo: <input type="text" name="Sex" value="<?php echo $row['Sex_alumno']; ?>" /><br />
Fecha_Nacim: <input type="text" name="Fna" value="<?php echo $row['Fna_alumno']; ?>" /><br />
Est Telefono: <input type="text" name="Tel" value="<?php echo $row['Tel_alumno']; ?>" /><br />
Su Direccion: <input type="text" name="Dir" value="<?php echo $row['Dir_alumno']; ?>" /><br />
<TABLE border="0" bordercolor="#800000" cellpadding="1" >
<tr>
<td align="right">Foto :</td>
<td>
<?php
$sql="SELECT * FROM fotos WHERE Cod_alumno=".$id;
$result1=mysqli_query($conexion, $sql);
if($row=mysqli_fetch_array($result1))
{
$fotox=$row[1];
echo "<img src=$fotox name='foto' border='0' align=center>";
$foto=0;
}else {
echo "No hay foto disponible";
$foto=1;
}
?>

</td>
</tr>
</TABLE>
<input type="hidden" name="usuario_ID" value="<?php echo $row['Cod_alumno']; ?>" />
<input type="submit" name="actualizar" value="Actualizar" />
</FORM>
<?php }
echo "<p align='center'><a href=Alumno.php>Volver</a></p>";
PiePagina();
?>