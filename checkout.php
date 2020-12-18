<!DOCTYPE html>
<html lang="en">
  <head>
    <title>La providencia</title>
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
    <?php include("./layouts/header.php"); ?> 

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12">
            <div class="border p-4 rounded" role="alert">
              Ya tienes cuenta <a href="#">Da clic aquí</a>para ingresar
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-5 mb-md-0">
            <h2 class="h3 mb-3 text-black">Dirección de entrega</h2>
            <div class="p-3 p-lg-5 border">
              <div class="form-group">
                <label for="c_country" class="text-black">Ciudad <span class="text-danger">*</span></label>
                <select id="c_country" class="form-control">
                  <option value="1">Selecciona un país</option>    
                  <option value="2">México</option>    
                  <option value="3">Estados Unidos</option>     
                </select>
              </div>
              <div class="form-group row">
                <div class="col-md-6">
                  <label for="c_fname" class="text-black">Nombre <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_fname" name="c_fname">
                </div>
                <div class="col-md-6">
                  <label for="c_lname" class="text-black">Apellido<span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_lname" name="c_lname">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <label for="Calle" class="text-black">Calle y No.</label>
                  <input type="text" class="form-control" id="calle" name="calle">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <label for="c_address" class="text-black">Colonia o Población <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="dir1" name="dir2" placeholder="Colonia o población">
                </div>
              </div>

              <div class="form-group">
                <input type="text" class="form-control" placeholder="Municipio">
              </div>

              <div class="form-group row">
                <div class="col-md-6">
                  <label for="c_state_country" class="text-black">Estado <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_state_country" name="c_state_country">
                </div>
                <div class="col-md-6">
                  <label for="c_postal_zip" class="text-black">Código Postal <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_postal_zip" name="c_postal_zip">
                </div>
              </div>

              <div class="form-group row mb-5">
                <div class="col-md-6">
                  <label for="c_email_address" class="text-black">Correo<span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_email_address" name="c_email_address">
                </div>
                <div class="col-md-6">
                  <label for="c_phone" class="text-black">Telefono <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_phone" name="c_phone" placeholder="">
                </div>
              </div>

              <div class="form-group">
                <label for="c_create_account" class="text-black" data-toggle="collapse" href="#create_an_account" role="button" aria-expanded="false" aria-controls="create_an_account"><input type="checkbox" value="1" id="c_create_account"> Crear una cuenta?</label>
                <div class="collapse" id="create_an_account">
                  <div class="py-2">
                    <p class="mb-3">Favor de llenar la información para recibir su pedido</p>
                    <div class="form-group">
                      <label for="c_account_password" class="text-black">Contraseña</label>
                      <input type="email" class="form-control" id="c_account_password" name="c_account_password" placeholder="">
                    </div>
                  </div>
                </div>
              </div>



              <div class="form-group">
                <label for="c_order_notes" class="text-black">Detalles</label>
                <textarea name="c_order_notes" id="c_order_notes" cols="30" rows="5" class="form-control" placeholder="Danos detalles sobre tu compra..."></textarea>
              </div>

            </div>
          </div>
          <div class="col-md-6">

            <div class="row mb-5">
           
            </div>
            
            <div class="row mb-5">
              <div class="col-md-12">
                <h2 class="h3 mb-3 text-black">Tu orden</h2>
                <div class="p-3 p-lg-5 border">
                  <table class="table site-block-order-table mb-5">
                    <thead>
                      <th>Productos</th>
                      <th>Total</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Frijoles Bayos Isadora 600gr <strong class="mx-2">x</strong> 1</td>
                        <td>$16.00</td>
                      </tr>
                      <tr>
                        <td class="text-black font-weight-bold"><strong> Subtotal</strong></td>
                        <td class="text-black">$16.00</td>
                      </tr>
                      <tr>
                        <td class="text-black font-weight-bold"><strong>Total</strong></td>
                        <td class="text-black font-weight-bold"><strong>$16.00</strong></td>
                      </tr>
                    </tbody>
                  </table>

                  <div class="border p-3 mb-3">
                    <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsebank" role="button" aria-expanded="false" aria-controls="collapsebank">Pago con tarjeta</a></h3>

                    <div class="collapse" id="collapsebank">
                      <div class="py-2">        
                        <p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                      </div>
                    </div>
                  </div>

                  <div class="border p-3 mb-3">
                    <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsecheque" role="button" aria-expanded="false" aria-controls="collapsecheque">Paypal</a></h3>

                    <div class="collapse" id="collapsecheque">
                      <div class="py-2">
                        <p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                      </div>
                    </div>
                  </div>

        

                  <div class="form-group">
                    <button class="btn btn-primary btn-lg py-3 btn-block" onclick="window.location='thankyou.html'">Terminar orden</button>
                  </div>

                </div>
              </div>
            </div>

          </div>
        </div>
        <!-- </form> -->
      </div>
    </div>

    <?php include("./layouts/footer.php"); ?> 
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