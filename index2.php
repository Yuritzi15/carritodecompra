<!DOCTYPE html>
<html lang="en">
  <head>
    <title>La Providencia</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  
  <div class="site-wrap">
    <header class="site-navbar" role="banner">
      <div class="site-navbar-top">
        <div class="container">
          <div class="row align-items-center">

            <div class="col- col-md-4 order-2 order-md-1 text-left">
            <a href="index2.php" class="block-6">
              <img width="50%" heigth="50%" src="images/logo.jpg" alt="Logo" class="img-fluid rounded mb-6">
            </a>
            </div>

            <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
              <div class="site-logo">
                <a href="index2.php" class="js-logo-clone">La Providencia</a>
              </div>
            </div>

            <div class="col-6 col-md-4 order-3 order-md-3 text-right">
              <div class="site-top-icons">
                <ul>
                  <li><a href="#"><span class="icon icon-person"></span></a></li>
                  <li><a href="#"><span class="icon icon-heart-o"></span></a></li>
                  <li>
                    <a href="cart.html" class="site-cart">
                      <span class="icon icon-shopping_cart"></span>
                      <span class="count">2</span>
                    </a>
                  </li> 
                  <li class="d-inline-block d-md-none ml-md-0"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu"></span></a></li>
                </ul>
              </div> 
            </div>

          </div>
        </div>
      </div> 
      <nav class="site-navigation text-right text-md-center" role="navigation">
        <div class="container">
          <ul class="site-menu js-clone-nav d-none d-md-block">
            <li>
              <a href="index2.php">Inicio</a>
            </li>
            <li class="has-children">
              <a href="about.html">Conocenos</a>
              <ul class="dropdown">
                <li><a href="#">Misión</a></li>
                <li><a href="#">Visión</a></li>
                <li><a href="#">Ubicación</a></li>
              </ul>
            </li>
            <li><a href="index.php">Tienda</a></li>
          </ul>
        </div>
      </nav>
    </header>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 site-section-heading text-center pt-4">
            <h1>Tenemos lo que buscas</h1>
          </div>
        </div>
      </div>

    <div class="site-blocks-cover" style="background-image: url(images/frente.jpg);" data-aos="fade">
      <div class="container">
        <div class="row align-items-start align-items-md-center justify-content-end">
          </div>
        </div>
      </div>
    </div>

    <div class="site-section site-section-sm site-blocks-1">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="">
            <div class="icon mr-4 align-self-start">
              <span class="icon-truck"></span>
            </div>
            <div class="text">
              <h2 class="text-uppercase">Entregas gratuitas</h2>
              <p>Como parte del compromiso con nuestros clientes mantenemos gratuitas las entregas dentro del municipio de Miguel Alemán.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="100">
            <div class="icon mr-4 align-self-start">
              <span class="icon-refresh2"></span>
            </div>
            <div class="text">
              <h2 class="text-uppercase">Devoluciones Gratuitas</h2>
              <p>Si el producto no es lo que esperaba le hacemos un cambio de producto gratuito o en su defecto le hacemos la devolución de su dinero.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="200">
            <div class="icon mr-4 align-self-start">
              <span class="icon-help"></span>
            </div>
            <div class="text">
              <h2 class="text-uppercase">Ayuda al cliente</h2>
              <p>Mantenemos nuestros telefonos activos duarante el horario de atención para que nuestros clientas puedan utilizar nuestros servicios con confianza.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section site-blocks-2">
      <div class="container">
        <div class="row">
        <?php
                include('./php/conexion.php');
                $resultado = $conexion -> query("select * from categorias order by id DESC") or die($conexion -> error);
                while($fila =mysqli_fetch_array($resultado)){
                  
                
              ?>
          <div class="col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos="fade" data-aos-delay="">
            <a class="block-2-item" href="#">
              <figure class="image">
                <img src="images/<?php echo $fila['imagen']; ?>" alt="" class="img-fluid">
              </figure>
              <div class="text">
                <span class="text-uppercase">Categorías</span>
                <h3><?php echo $fila['nombre']; ?></h3>
              </div>
            </a>
          </div>
          <?php }?>
        </div>
      </div>
    </div>

    <div class="site-section block-8">
      <div class="container">
        <div class="row justify-content-center  mb-5">
          <div class="col-md-7 site-section-heading text-center pt-4">
            <h2>Aprovecha la oportunidad de comprar desde casa!</h2>
          </div>
        </div>
        <div class="row align-items-center">
          <div class="col-md-12 col-lg-7 mb-5">
            <a href="#"><img src="images/caja.jpg" alt="Image placeholder" class="img-fluid rounded"></a>
          </div>
          <div class="col-md-12 col-lg-5 text-center pl-md-5">
            <h2><a href="#">No hagas filas</a></h2>
            <p>En nuestras tienda encontrarás todo lo que necesitas diariamente, ya sea utilizando nuestra tienda online o acudiendo a la sucursal</p>
            <p><a href="#" class="btn btn-primary btn-sm">Visita la tienda en línea</a></p>
          </div>
        </div>
      </div>
    </div>

    <footer class="site-footer border-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <div class="row">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4">Navegación</h3>
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  <li><a href="#">Inicio</a></li>
                </ul>
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  <li><a href="#">Tienda en linea</a></li>
                </ul>
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                <li><a href="#">Conocenos</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
            <h3 class="footer-heading mb-4">Visitanos</h3>
            <a href="https://goo.gl/maps/ZTBvGSUvokWTX5VR6" class="block-6">
              <img src="images/ubicacion.jpg" alt="Visitanos" class="img-fluid rounded mb-4">
            </a>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="block-5 mb-5">
              <h3 class="footer-heading mb-4">Contacto</h3>
              <ul class="list-unstyled">
                <li class="address">Bruno Martínez 1110, Col. Hercilia, C.P. 88300 en Cd Miguel Alemán, Tam., Mex.</li>
                <li class="phone"><a href="tel://8979722096">897 972 2096</a></li>
                <li class="email">laprovidencia@gmail.com</li>
              </ul>
            </div>

            
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> Todos los derechos reservados | La Providencia  </p>
          </div>
          
        </div>
      </div>
    </footer>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>