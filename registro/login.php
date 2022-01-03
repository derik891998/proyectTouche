



<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
    
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
      
        
      
      </style>
    
    

</head>
<body>
  <section class="contact-box">
       <div class="row no-gutters bg-dark">
           <div class="col-xl-5 col-lg-12 register-bg">
            <div class="position-absolute testiomonial p-4">
                <h3 class="font-weight-bold text-light">Inicia sesion y enterada de tus platos .</h3>
                <p class="lead text-light">Touche.          
                </p>
                <img id="logo"  src="logo.jpg">
            </div>
           </div>
           <div class="col-xl-7 col-lg-12 d-flex">
                <div class="container align-self-center p-6">
                    <h1 class="font-weight-bold mb-3">Login</h1>
                    <div class="form-group">
                        <a href="https://accounts.google.com/signin/v2/identifier?hl=es-419&continue=https%3A%2F%2Fwww.google.com%3Fhl%3Des-419&ec=GAlA8wE&flowName=GlifWebSignIn&flowEntry=AddSession">
                        <button class="btn btn-outline-dark d-inline-block text-light mr-2 mb-3 width-100"><i class="icon ion-logo-google lead align-middle mr-2"></i> Google </button>
                        </a>
                        <a href="">
                        
                        <button class="btn btn-outline-dark d-inline-block text-light mb-3 width-100"><i class="icon ion-logo-facebook lead align-middle mr-2"></i> Facebook</button>
                        </a>
                    </div>
                    <p class="text-muted mb-5">Inicia sesion.</p>

                    
                    
                    
                    
                    
                    
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

                        <div class="form-row mb-2">
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold">&#128273;Usuario <span class="text-danger">*</span></label>
                                <input type="text"  name="email"   class="form-control" placeholder="email">
                                <span class="msg-error"><?php echo $email_err; ?></span>

                            </div>
                           
                        </div>
     
            <div class="form-group col-md-6">
                                <label class="font-weight-bold">&#128273;Contraseña <span class="text-danger">*</span></label>
                                <input type="password"  name="password"   class="form-control" placeholder="Clave">
                                <span class="msg-error"><?php echo $password_err; ?></span>

                
                            </div>
     
                        <div class="form-group mb-5">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label text-muted">Al seleccionar esta casilla aceptas nuestro aviso de privacidad y los términos y condiciones</label>
                            </div>
                        </div>
                       
                     <input type="submit" value="Iniciar" class="btn btn-primary width-100">
                    </form>
                                          
<br><br>
       
      
                            


</body>
</html>
