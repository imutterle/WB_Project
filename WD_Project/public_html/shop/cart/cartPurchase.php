<html lang="it">
    <head>
    <?php include("../../head2.html"); ?>
    </head>

    <body>
        <!-- NAVBAR -->
        <?php include("../../Navbar2.php"); ?>
        
        <!--SEZIONE MENU-->
		<div class="container">
            <div class="path">
                    <a href="../../homepage.php">Home</a> / <a href="../shop.php">Shop</a> / <a href="../cart/cartDesktop.php">Cart</a> / <a href="cartDelivery.php"> Delivery </a> / <a href="cartPayment.php"> Payment</a> / <a href="cartPurchase.php">Purchase</a>
            </div>
            <div class="col-md-12">
                <h2>Shipping Details</h2>
                <h4>qualcosa</h4>
            </div>
            <div class="col-md-12">
                <h2>Delivery Details</h2>
                <h4>qualcosa</h4>
            </div>
            <div class="col-md-12">
                <h2>Payment Method</h2>
                <h4>qualcosa</h4>
            </div>
            <div class="col-md-12">
                <h2>Price Details</h2>
                <h4>qualcosa + soldi a dx dei prodotti di prima</h4>
            </div>
            <div class="col-md-12">
                <h2>Order Total</h2>
                <h4>soldi</h4>
            </div>
            <div class="row">
                <div class="col-md-6 col-md-offset-5">
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#formPurchase">Purchase</button>
                </div>
                <div class="col-md-6 col-md-offset-4">
                    <button type="button" class="btn-secondary">Delivery</button>
                    <button type="button" class="btn-secondary">Payment</button>
                    <button type="button" class="btn-success">Purchase</button>
                </div>
            </div>
        </div>
        
        
        <!-- costruzione popup avvenuto pagamento -->
        <div id="formPurchase" class="modal fade" role="dialog">
          <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body">
                <h1>icona e farlo verde</h1>
                <p>Congrats! Your order has been accepted!</p>
              </div>
              <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal" onclick="location.href='../shop.php'">return to store</button>
              </div>
            </div>
          </div>
        </div>
        
         <!--FOOTER -->
        <?php include("../../footer2.php"); ?>
    </body>
</html>