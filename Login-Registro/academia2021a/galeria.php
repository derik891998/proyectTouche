<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="theme-color" content="#bla"  />
 <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl"
      crossorigin="anonymous"/>
  <title></title>

</head>
<body>

</body>
</html>


<?php
if ($gestor = opendir('fotos'))
{
echo "<table border=1>";
echo "<tr>";
$i=0;
while (false !== ($archivo = readdir($gestor)))
{
if ($archivo!="." && $archivo!="..")
{
if ($i==4)
{
$i=0;
echo "</tr>";
echo "<tr>";
}
$i++;
echo "<td>";
echo "<a href=fotos/$archivo><img src=fotos/$archivo> </a>";
echo "</td>";
}
}
echo "</tr>";
echo "</table>";
closedir($gestor);
}
?>







<!--
<header class="container-fluid bg-dark position-sticky top-0">
      <ul
        class="nav nav-pills mb-3 py-3 container"
        id="pills-tab"
        role="tablist">
        
        <li class="nav-item text-primary" role="presentation">
          <a
            class="nav-link "
            id="pills-home-tab"
            data-bs-toggle="pill"
            data-bs-target="#pills-home"
            type="button"
            role="tab"
            aria-controls="pills-home"
            aria-selected="true"
            >Inicio</a
          >
        </li>
        <li class="nav-item" role="presentation">
          <a
            class="nav-link active"
            id="pills-profile-tab"
            data-bs-toggle="pill"
            data-bs-target="#pills-profile"
            type="button"
            role="tab"
            aria-controls="pills-profile"
            aria-selected="false"
            >Productos</a
          >
        </li>
        <li class="nav-item" role="presentation">
          <a
            class="nav-link"
            id="pills-contact-tab"
            data-bs-toggle="pill"
            data-bs-target="#pills-contact"
            type="button"
            role="tab"
            aria-controls="pills-contact"
            aria-selected="false"
            >Carrito</a
          >
        </li>
      </ul>
    </header>
  -->

   
    <div class="tab-content" id="pills-tabContent">
      <div
        class="tab-pane fade "
        id="pills-home"
        role="tabpanel"
        aria-labelledby="pills-home-tab">
        
      </div>
      <div
        class="tab-pane fade show active container"
        id="pills-profile"
        role="tabpanel"
        aria-labelledby="pills-profile-tab">
        <h2 class="h4 m-4 text-primary"></h2>

        <div class="row row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4">

          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-primary">Pedido1</h5>
              <img src="imagenes/platillo1.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                
                <div class="d-grid gap-2">
              </div>
              </div>
            </div>
          </div>
          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-primary">Pedido 2</h5>
              <img src="imagenes/platillo2.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                
                <div class="d-grid gap-2">
              </div>
              </div>
            </div>
          </div>
          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-primary">Pedido 3</h5>
              <img src="imagenes/platillo3.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                
                <div class="d-grid gap-2">
              </div>
              </div>
            </div>
          </div>
          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-primary">Pedido 4</h5>
              <img src="imagenes/platillo4.jpg" class="card-img-top" alt="...">
              <div class="card-body">
               
                <div class="d-grid gap-2">
              </div>
              </div>
            </div>
          </div>
          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-primary">Pedido 5</h5>
              <img src="imagenes/platillo5.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                
                <div class="d-grid gap-2">
              </div>
              </div>
            </div>
          </div>
          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-primary">Pedido 6</h5>
              <img src="imagenes/platillo1.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                
                <div class="d-grid gap-2">
              </div>
              </div>
            </div>
          </div>
          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-primary">Pedido 7</h5>
              <img src="imagenes/platillo2.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                
                <div class="d-grid gap-2">
              </div>
              </div>
            </div>
          </div>
          <div class="col d-flex justify-content-center mb-4">
            <div class="card shadow mb-1 bg-dark rounded" style="width: 20rem;">
              <h5 class="card-title pt-2 text-center text-primary">Pedido 8</h5>
              <img src="imagenes/platillo3.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                
                <div class="d-grid gap-2">
              </div>
              </div>
            </div>
          </div>


        </div>

      </div>
      <div
        class="tab-pane fade carrito"
        id="pills-contact"
        role="tabpanel"
        aria-labelledby="pills-contact-tab"
      >
      <br>
      <table class="table table-dark table-hover">
        <thead>
          <tr class="text-primary">
            <th scope="col">#</th>
            <th scope="col">Productos</th>
            <th scope="col">Precio</th>
            <th scope="col">Cantidad</th>
          </tr>
        </thead>
        <tbody class="tbody">
          
        
          
        </tbody>
      </table>
      <br><br>
      <div class="row mx-4">
        <div class="col">
          <h3 class="itemCartTotal text-white">Total: 0</h3>
        </div>
        <div class="col d-flex justify-content-end">
        <a href="#"><button class="btn btn-success">COMPRAR</button></a>     
        </div>
      </div>
      
      </div>
    </div>
<!--INICIO-->

    <footer class="bg-dark p-3 mt-5">
      <center>
       <img src="imagenes/hamburgesa.jfif">
      <p class="text-center m-0 text-muted">COMIDA</p> 
      </center>
      
    </footer>
<!--INICIO-->
    <script
      src="https://code.jquery.com/jquery-3.5.1.js"
      integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
      crossorigin="anonymous"
    ></script>
    <!-- JavaScript Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
      crossorigin="anonymous"
    ></script>
    <script src="js/scriptss.js"></script>
