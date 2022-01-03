<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link href="style1.css" rel="stylesheet">
       <!-- Favicon -->
    <link rel="icon" href="logo.jpg">
      
    <style type="text/css">
      
        #logo{
            width: 100px;
            height: 100px;
            border-radius: 100px;
        }
      
        
        /*REGISTRO*/        
        iframe{
            width: 100%;
            height: 300px;
        }
    /*REGISTRO*/    
      </style>


    <title>Registro</title>
  </head>
  <body>
   <section class="contact-box">
       <div class="row no-gutters bg-dark">
           <div class="col-xl-5 col-lg-12 register-bg">
            <div class="position-absolute testiomonial p-4">
                <h3 class="font-weight-bold text-light">Registrate y enterate de todo lo nuevo .</h3>
                <p class="lead text-light">Touche.          
                </p>
                <img id="logo"  src="logo.jpg">
            </div>
           </div>
           <div class="col-xl-7 col-lg-12 d-flex">
                <div class="container align-self-center p-6">
                    <h1 class="font-weight-bold mb-3">Crea tu cuenta gratis</h1>
                    <div class="form-group">
                        <a href="https://accounts.google.com/signin/v2/identifier?hl=es-419&continue=https%3A%2F%2Fwww.google.com%3Fhl%3Des-419&ec=GAlA8wE&flowName=GlifWebSignIn&flowEntry=AddSession">
                        <button class="btn btn-outline-dark d-inline-block text-light mr-2 mb-3 width-100"><i class="icon ion-logo-google lead align-middle mr-2"></i> Google </button>
                        </a>
                        <a href="">
                        
                        <button class="btn btn-outline-dark d-inline-block text-light mb-3 width-100"><i class="icon ion-logo-facebook lead align-middle mr-2"></i> Facebook</button>
                        </a>
                    </div>
                    <p class="text-muted mb-5">Ingresa la siguiente información para registrarte.</p>

                    <?php
include("conexion.php");
if(isset($_POST["actualizar"]))
{
$id = $_POST["id"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$coreo = $_POST["coreo"];
$password = $_POST["password"];


$query="INSERT INTO inscripcion VALUES('$id','$nombre','$apellido','$coreo','$password' )";


$result=mysqli_query($conexion,$query);
echo"<br>";
echo "<p align='center'>¡Registro Guardado!</p>";
echo "<br>";
echo "<p align='center'><a href='index.php'>Registrarse</a></p>";
echo "<p align='center'><a href='ver.php'>Examinar</a></p>";
echo "<p align='center'><a href='login.php'>Iniciar Sesion</a></p>";

    
}
else
{
?>
               
                    
                        <form method="POST" action="">


                      
                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Correo electrónico <span class="text-danger">*</span></label>
                            <input type="email" name="coreo" class="form-control" placeholder="Ingresa tu correo electrónico">
                        </div>
                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Contraseña <span class="text-danger">*</span></label>
                            <input type="password" name="password" class="form-control" placeholder="Ingresa una contraseña">
                        </div>
                        <div class="form-group mb-5">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label text-muted">Al seleccionar esta casilla aceptas nuestro aviso de privacidad y los términos y condiciones</label>
                            </div>
                        </div>
                        <button name="actualizar" value="Guardar" class="btn btn-primary width-100">Regístrar
                            
                            
                            </button>
                        <button class="btn btn-primary width-100">Cancelar</button>
                                
                            
                          
<br><br>
                            
                            
<a class="btn btn-primary width-100" href='ver.php'>Examinar</a>

<?php
}
?>
                    </form>
                    <small class="d-inline-block text-muted mt-5">Todos los derechos reservados | © 2019 Touche</small>
                </div>
           </div>
       </div>
   </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      
      
      
      
     <!--REGISTRO--
<br>

 <nav id="registro">
  <ul>
  <li><A href="itel/contenido.html" target="formularios">Presentación </A></li>
  <li><A href="itel/programa.html" target="formularios">Programa</A></li>
  <li><a href="itel/inscripcion1.php" target="formularios">Inscripción </a></li>
  <li><A href="itel/ver.php" target="formularios">Inscritos </A></li>
  <li><A href="itel/examen.html" target="formularios">Continuacion </A></li>
  <li><A href="itel/ver.php" target="formularios">Inscritos </A></li>


  </ul>
</nav>
<section id="seminario">
  <iframe name="formularios" src="contenido.html"></iframe>
</section> 

<!--REGISTRO-->

            
  </body>
    
  
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
   