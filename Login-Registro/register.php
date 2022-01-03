<?php 
    
    include 'code-register.php';

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Registro - Touche</title>
    <link rel="stylesheet" href="css/estilos.css">

    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
     <style type="text/css">
    
        .logo{
            border-radius: 100px;
        }
    
    </style>
 
    <link rel="icon" href="logo.jpg">
    
    <!--recatcha-->
    
     <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <!--recatcha-->
    
    
    

</head>

<body>

    <div class="container-all">

        <div class="ctn-form">
            <img src="images/logo1.jpg" alt="" class="logo">
            <h1 class="title">Registrarse</h1>

            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <!--recatcha-->
                
               <center></center>
                <label for="">Nombre </label>
               
                <input type="text" name="username" placeholder="Ingresar Nombre">
                  
                <span class="msg-error"><?php echo $username_err; ?></span>
                <label for="">Correo</label>
                <input type="text" name="email" placeholder=" Ingresar Correo">
                <span class="msg-error"> <?php echo $email_err; ?></span>
                <label for="">Clave</label>
                <input type="password" name="password" placeholder=" Ingresar Clave">
                <span class="msg-error"> <?php echo $password_err; ?></span>
                
                <br>
                
                <div class="g-recaptcha" data-sitekey="6Lefr8kdAAAAAPUW9fMO923tSmgGYVBZiykYdN6j"></div>
                
                
                <!--clave secreta recatcha--
                6Lefr8kdAAAAAIRe0qX1_Te5WyW5pV_bh7UWA9yT

-->
                
                
                
                


                <input type="submit" value="Registrarse">

            </form>

            <span class="text-footer">¿Ya te has registrado?
                <a href="login.php">Iniciar Sesión</a>
               <br> <a href="ver_dato.php">VER DATO</a>
            </span>
        </div>

        <div class="ctn-text">
       
            <h1 class="title-description">Touche.</h1>
            <p class="text-description">Registrate y conoce todos los beneficios que tenemos para ti</p>
        </div>

    </div>

</body>

</html>
