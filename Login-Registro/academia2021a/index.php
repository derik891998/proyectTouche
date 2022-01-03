<!DOCTYPE html>
<HTML amp='amp' lang='es'>
<html lang="zxx">


<html>

<head>
	<title>COLEGIO</title>

	<meta charset=utf-8/>
<link rel="stylesheet" href="css/style1.css" /> <!-- stiyle.css Es el mismo que se realizó en la práctica anterior -->
<link rel="icon" href="logo.jpg" type="image/png">

<title>CIMA - Educación</title>


  
<!--CARGA-->
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">    
    <link rel="stylesheet" href="main.css">  
      
<!--    <link rel="stylesheet" href="preloaderCSSpuro.css">  -->
      
    <link rel="shortcut icon" href="#" />  
    
      
    <!-- Plugin Animated Circles CSS -->  
    <link rel="stylesheet" href="plugin_animated_circles/css/gspinner.css">    
    
    <!-- Plugin introLoader CSS -->    
    <link rel="stylesheet" href="plugin_IntroLoader/css/introLoader.min.css">
 <!--CARGA-->
     


<!--CONTENIDO TARJETA-->
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cajas selecionbles con efecto Hover - </title>

    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/estilos.css">



<!--CONTENIDO TARJETA-->







<!--FOOTER-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
<!--FOOTER-->





<!--BANNER--> 
    <link rel="stylesheet" href="css/nivo-slider.css">
    <link rel="stylesheet" href="css/mi-slider.css">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type="text/javascript"></script>
    <script src="js/jquery.nivo.slider.js"></script>

    <script type="text/javascript"> 
        $(window).on('load', function() {
            $('#slider').nivoSlider(); 
        }); 
    </script>
<!--BANNER-->









<!--ESTILO DE CABECERA-->
<script src="HeroSlider/js/bootstrap.min.js"></script>
    <script src="HeroSlider/js/main.js"></script>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="css-cabecera/style.css">
<!--ESTILO DE CABECERA-->




<style type="text/css">

/*ESTILO DE LOGO*/
    #cima_logo{
        width: 70px;
    }
/*ESTILO DE LOGO*/




iframe{
    width: 100%;
    height: 300px;
}




/*ESTILO DE CABECERA REGISTRO*/
#registro{
    display: inline-block;
}
/*ESTILO DE CABECERA REGISTRO*/


</style>


</head>
<body>


<!--CARGA-->

<header>
      
      </header>
     
    <!--Loader con CSS Puro-->
      <!--<div id="loader"></div>-->
      
    <!--Plugin animated_cicles_spinner-->  
    <div id="contenedor-loader">
        <div id="loader"></div>  
    </div>
      
    <!--Plugin introLoader -->    
    <!--<div id="element" class="introLoading"></div>-->
      
      
    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="popper/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>      
    
     <!-- Plugin Animated Circles JS -->  
    <script src="plugin_animated_circles/js/g-spinner.js"></script>  
      
    <!-- Plugin introLoader JS -->      
    <script src="plugin_IntroLoader/js/jquery.introLoader.pack.min.js"></script>
      
    <script type="text/javascript">     
    //Loader con CSS Puro    
        //El evento onload se ejecuta cuando se carga completamente la página
        /*window.onload = function(){          
            $("#loader").fadeOut(2000); //ocultamos la imagen de pre-carga cuando la página ha terminado de cargar    
        }  */   
    
    //Loader con plugin animated_cicles_spinner    
        var $loader = $("#loader");  //referenciamos el div #loader  
        $loader.gSpinner();   //iniciamos la carga    

        window.onload = function(){                                               
        setTimeout(function(){
            $("#contenedor-loader").fadeOut();
            $loader.gSpinner("hide")            
        },3000);                                      
        };
            
    
    //Loader con plugin introLoader    
        //Ejemplo - 1 básico
        /*$("#element").introLoader({
            animation: {
                name: 'simpleLoader', //nombre de la animación
                options: {
                    exitFx:'slideDown', //efecto de salida de la animación
                    ease: "easeOutSine",
                    style: 'ocean', //estilos de colores
                    delayBefore: 10000, //tiempo en ms que dura la animación, luego de que se cargó la página
                    exitTime: 500 //tiempo en ms que dura la animación de salida                   
                }
            },    
            spinJs: {
                lines: 13, // The number of lines to draw
                length: 20, // The length of each line
                width: 10, // The line thickness
                radius: 30, // The radius of the inner circle
                corners: 1, // Corner roundness (0..1)
                color: '#fff', // #rgb or #rrggbb or array of colors
            }
        });*/
        
        //Ejemplo - 2 con porcentajes
        /*$("#element").introLoader({
            animation: {
                name: 'counterLoader',
                options: {
                    ease: "easeOutSine",
                    style: 'dark',
                    animationTime: 1000
                }
            }
        });*/
    </script>        
<!--CARGA-->










<!--ENCABEZADO-->
    <header class="full-width NavBarP">
    <a href="https://www.colegiocima.edu.pe/"> <div class="full-width NavBarP-Logo"><img id="cima_logo" src="imagenes/cima_logo.png"></div></a>    
        <nav class="full-width NavBarP-Nav">
            <ul class="full-width list-unstyled">
                <li><a href="zona.html">Inicio</a></li>
               <li><a href="#!">ADMISION</a></li>   
             <li><a href="#!">PROPUESTA</a></li>
                <li><a href="#!">CEDES</a></li>
                <li>
                    <a href="#!" class="btn-login"><i class="fa fa-user" aria-hidden="true"></i> Log In</a>

                    <div class="full-width Login">
                      <!--LOGIN-->
<center>
        <aside>
        <h1>Login de Usuarios</h1>
    <hr />
                <form method="post" action="checklogin.php">
                    <label>Usuario:</label><br>
                <input name="username" type="text" id="username" required>
<br>
<label>Password:</label><br>
<input name="password" type="password" id="password" required>
<br><br>
<input type="submit" name="Submit" value="LOGIN">
<input type="submit" name="Submit" value="CANCELAR">
 <p class="text-center">¿Aún no tienes cuenta?</p>
            <a href="#!">CRÉATE UNA GRATIS</a>

</form>
<hr />
<footer>
&copy;2020 <a href="http://www.itel.com">www.Itel.com</a>
</footer>
</aside>
</section>    
</center>

<!--LOGIN-->
                    </div>
                </li>
            </ul>
        </nav>
        <i class="fa fa-bars visible-xs btn-menuMobile ShowMenuMobile" aria-hidden="true"></i>
    </header>
<!--ENCABEZADP-->


 










<!--BANNER-->
<div class="slider-wrapper theme-mi-slider">
        <div id="slider" class="nivoSlider">     
            <img src="imagenes/colegio.jpg" alt="" title="#htmlcaption1" />    
            <img src="imagenes/itel3.png" alt="" title="#htmlcaption2" />    
            <img src="imagenes/1.jpg" alt="" title="#htmlcaption3" />     
        </div> 
        <div id="htmlcaption1" class="nivo-html-caption">     
            <h1>Sean Bienvenidos</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </div>
        <div id="htmlcaption2" class="nivo-html-caption">     
            <h1>Acerca de Nosotros</h1>
        </div>
        <div id="htmlcaption3" class="nivo-html-caption">     
            <h1>Gracias por visitar</h1>
        </div>
    </div>
<!--BANNER-->










<!--REGISTRO-->
<br>

 <nav id="registro">
  <ul>
  <li><A href="contenido.html" target="formularios">Presentación </A></li>
  <li><A href="programa.html" target="formularios">Programa</A></li>
  <li><a href="inscripcion.php" target="formularios">Inscripción </a></li>
  <li><A href="ver.php" target="formularios">Inscritos </A></li>
  <li><A href="examen.html" target="formularios">Continuacion </A></li>
  <li><A href="ver.php" target="formularios">Inscritos </A></li>
  </ul>
</nav>
<section id="seminario">
  <iframe name="formularios" src="contenido.html"></iframe>
</section> 
<!--REGISTRO-->








<!--WASAP-->
<link rel="stylesheet" href="whats.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">


 <link rel="stylesheet" href="whats2.css">
<div class="nav-bottom">
           <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
            <div class="popup-whatsapp fadeIn">
                <div class="content-whatsapp -top"><button type="button" class="closePopup">
                      <i class="material-icons icon-font-color">close</i>
                    </button> 
                  
                   <p>  <img src="secretary.png" width="50">  Hola, ¿en que podemos ayudarle? </p>
                   
                </div>
                <div class="content-whatsapp -bottom">
                  <input class="whats-input" id="whats-in" type="text" Placeholder="Enviar mensaje..." />
                   
                   
                  
          
                    <button class="send-msPopup" id="send-btn" type="button">
                        <i class="material-icons icon-font-color--black">send</i>
                    </button>

                </div>
            </div>
            <button type="button" id="whats-openPopup" class="whatsapp-button">
                <div class="float" >
  <i class="fa fa-whatsapp my-float"></i></div>
            </button>
            <div class="circle-anime"></div>
        </div>
        <script  src="script2.js"></script>



<!--WASAP-->




<!--CONTENIDO TARJETA-->
 <main>

        <h1 class="title">cima</h1>

        <div class="container-box">

            <div class="box box1">
                <img src="imagenes/itel2.png" alt="">
                <h2>Inic</h2>
                
                <div class="container-p">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos minus non voluptatibus rem harum iste vero magnam voluptate, id laboriosam?...</p>
                </div>

                <div class="check">
                    <i class="fas fa-check"></i>
                </div>
            </div>

            <div class="box box2">
                <img src="imagenes/itel2.png" alt="">
                <h2>Prim</h2>
                <div class="container-p">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos minus non voluptatibus rem harum iste vero magnam voluptate, id laboriosam?...</p>
                </div>

                <div class="check">
                    <i class="fas fa-check"></i>
                </div>
            </div>

            <div class="box box3">
                <img src="imagenes/itel.png" alt="">
                <h2>Secun</h2>
                <div class="container-p">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.. Dignissimos minus non voluptatibus rem harum iste vero magnam voluptate, id laboriosam?...</p>
                </div>

                <div class="check">
                    <i class="fas fa-check"></i>
                </div>
            </div>

        </div>

    </main>

    <script src="js/script.js"></script>



<!---CONTENIDO TARJETA-->
<br><br>




<!--GALERIA-->
<CENTER>
<H1>GALERIA</H1>
    
<img src="imagenes/itel3.png">

</CENTER>
<!--GALERIA-->



<BR><BR>
















<!--FOOTER-->
      <footer>

        <div class="container__footer">
            <div class="box__footer">
                <div class="logo">
                    <img src="imagenes/cima_logo.png" alt="">
                </div>
                <div class="terms">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas impedit cum cumque velit libero officiis quam doloremque reprehenderit quae corporis! Delectus architecto officia praesentium atque laudantium, nam deleniti sapiente deserunt.</p>
                </div>
            </div>
            <div class="box__footer">
                <h2>Soluciones</h2>
                <a href="https://www.google.com">App Desarrollo</a>
                <a href="#">App Marketing</a>
                <a href="#">IOS Desarrollo</a>
                <a href="#">Android Desarrollo</a>
            </div>

            <div class="box__footer">
                <h2>Compañia</h2>
                <a href="#">Acerca de</a>
                <a href="#">Trabajos</a>
                <a href="#">Procesos</a>
                <a href="#">Servicios</a>              
            </div>

            <div class="box__footer">
                <h2>SIGUENOS EN:</h2>
                <a href="#"> <i class="fab fa-facebook-square"></i> Facebook</a>
                <a href="#"><i class="fab fa-twitter-square"></i> Twitter</a>
                <a href="#"><i class="fab fa-linkedin"></i> Linkedin</a>
                <a href="#"><i class="fab fa-instagram-square"></i> Instagram</a>
            </div>

        </div>

        <div class="box__copyright">
            <hr>
            <p>Todos los derechos reservados © 2021 <b>CIMA</b></p>
        </div>
    </footer>



<!--FOOTER-->









</body>
</html>