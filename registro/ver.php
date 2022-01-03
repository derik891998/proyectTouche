
<style type="text/css">
            #logo_registro{
                border-radius: 100px;
                width: 100px;
                height: 100px;
            }
    
</style>


<h1 align="center">Registro Touche</h1>
<hr>
<?php
include("conexion.php");
$query = "SELECT * FROM inscripcion ORDER BY id ASC";
$result = mysqli_query($conexion,$query);
if ($row=mysqli_fetch_array($result))
{
echo"<table border ='0'   , size='5' align=center>\n";
echo"<td><b>id </b></td>\n";
echo"<td><b>nombre </b></td>\n";
echo"<td><b>apellido </b></td>\n";
echo"<td rouspan='20' ><b>coreo</b></td>\n";
echo"<td><b>password</b></td>\n";
do {
echo"<tr>\n";
echo"<th>".$row["id"]."</th>\n";
echo"<th>".$row["nombre"]."</th>\n";
echo"<th>".$row["apellido"]."</th>\n";
echo"<th>".$row["coreo"]."</th>\n";
echo"<th>".$row["password"]."</th>\n";
echo"</tr>\n";
} while($row = mysqli_fetch_array($result));
echo"</table>\n";
}
else
{
echo"¡La tablas esta vacia!";
}
echo "<center><a href='index.php'>Registrarse</a></center>";
echo "<center><a href='login.php'>Iniciar sesion</a></center>";


?>
<div align="center">
<hr>
<p> Dirreccion: 4127/ 5B-C Mislane Road, Gibraltar, UK </p><br>
    
TELEFONO: Principal 934-546-456<br>
Oficina: 102-808-8648<BR>
    
    <a ref="Mailto:jonyec@gmail.com">Touche@gmail.com</a><br>
<font size="5"> Restaurante : Touche<br>

    <img id="logo_registro" src="img/logo1.jpg">
    
    
    
    
</div>
    
    
    
    
    
    
    
    
    
<!--registro touche-->    
    


<h1 align="center">Registro Touche</h1>
<hr>
<?php
include("conexion.php");
$query = "SELECT * FROM usuarios ORDER BY id ASC";
$result = mysqli_query($conexion,$query);
if ($row=mysqli_fetch_array($result))
{
echo"<table border ='0'   , size='5' align=center>\n";
echo"<td><b>id </b></td>\n";
echo"<td><b>usuario </b></td>\n";
echo"<td><b>email </b></td>\n";
echo"<td><b>clave</b></td>\n";
do {
echo"<tr>\n";
echo"<th>".$row["id"]."</th>\n";
echo"<th>".$row["usuario"]."</th>\n";
echo"<th>".$row["email"]."</th>\n";
echo"<th>".$row["clave"]."</th>\n";
echo"</tr>\n";
} while($row = mysqli_fetch_array($result));
echo"</table>\n";
}
else
{
echo"¡La tablas esta vacia!";
}
echo "<center><a href='./register.php'>Registrarse</a></center>";
echo "<center><a href='./login.php'>Iniciar sesion</a></center>";


?>
<div align="center">
<hr>
<p> Dirreccion: 4127/ 5B-C Mislane Road, Gibraltar, UK </p><br>
    
TELEFONO: Principal 934-546-456<br>
Oficina: 102-808-8648<BR>
    
    <a ref="Mailto:jonyec@gmail.com">Touche@gmail.com</a><br>
<font size="5"> Restaurante : Touche<br>

    <img id="logo_registro" src="img/logo1.jpg">
    
    
    
    
</div>
    
    
    
    
    
    
    
    
    
    

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
</BODY>
</HTML>




