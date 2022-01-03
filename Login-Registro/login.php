<?php
    
    require "code-login.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login - Touche</title>
    <link rel="stylesheet" href="css/estilos.css">

    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    
    
    
    <style type="text/css">
    
        .logo{
            border-radius: 100px;
        }
    
    </style>
    <link rel="icon" href="logo.jpg">

    
</head>

<body>

    <div class="container-all">

        <div class="ctn-form">
            <img src="images/logo1.jpg" alt="" class="logo">
            <h1 class="title">Iniciar Sesión</h1>

            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

                <label for="">Email</label>
                <input type="text" name="email" placeholder="Email">
                <span class="msg-error"><?php echo $email_err; ?></span>
                <label for="">Clave</label>
                <input type="password" name="password" placeholder="Clave">
                <span class="msg-error"><?php echo $password_err; ?></span>

                <input type="submit" value="Iniciar">

            </form>

            <span class="text-footer">¿Aún no te has regsitrado?
                <a href="register.php">Registrate</a>
            </span>
        </div>

        <div class="ctn-text">
           
            <h1 class="title-description">Touche.</h1>
            <p class="text-description">Registrate y conoce todos los beneficios que tenemos para ti</p>
        </div>

    </div>

</body>

</html>
