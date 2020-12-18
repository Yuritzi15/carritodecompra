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
                <a href="index.php" class="js-logo-clone">La Providencia</a>
              </div>
            </div>

            <div class="col-6 col-md-4 order-3 order-md-3 text-right">
              <div class="site-top-icons">
                <ul>
                  <li><a href="#"><span class="icon icon-person"></span></a></li>
                  <li><a href="#"><span class="icon icon-heart-o"></span></a></li>
                  <li>
                    <a href="cart.php" class="site-cart">
                      <span class="icon icon-shopping_cart"></span>
                      <span class="count">
                      <?php
                      if(isset($_SESSION['carrito'])){
                        echo count($_SESSION['carrito']);
                      }else{
                        echo '0';
                      }
                      ?>
                      </span>
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

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index2.php">Inicio</a> <span class="mx-2 mb-0">/</span>
           <strong class="text-black">Tienda</strong></div>
        </div>
      </div>
    </div>