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
            <div class="col-md-6 col-md-offset-3">
                <h2>Shipping Details</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consectetur ultricies urna, non convallis ex pellentesque pellentesque. Integer eu mollis risus, quis aliquet turpis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed viverra semper molestie. Integer ac aliquam erat. Nullam vel consequat nunc, vitae scelerisque sapien. Donec fermentum commodo turpis quis finibus. Suspendisse porta, ipsum id rutrum vestibulum, erat massa eleifend lacus, sagittis fringilla eros erat nec quam. In viverra justo et neque faucibus viverra. Nullam gravida ligula hendrerit mauris mattis, in consequat erat sodales. Suspendisse elementum velit vitae nunc blandit, eget suscipit mi viverra. Ut in scelerisque elit.</p>
            </div>
            <div class="col-md-6 col-md-offset-3">
                <h2>Delivery Details</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consectetur ultricies urna, non convallis ex pellentesque pellentesque. Integer eu mollis risus, quis aliquet turpis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed viverra semper molestie. Integer ac aliquam erat. Nullam vel consequat nunc, vitae scelerisque sapien. Donec fermentum commodo turpis quis finibus. Suspendisse porta, ipsum id rutrum vestibulum, erat massa eleifend lacus, sagittis fringilla eros erat nec quam. In viverra justo et neque faucibus viverra. Nullam gravida ligula hendrerit mauris mattis, in consequat erat sodales. Suspendisse elementum velit vitae nunc blandit, eget suscipit mi viverra. Ut in scelerisque elit.</p>
            </div>
            <div class="col-md-6 col-md-offset-3">
                <h2>Payment Method</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consectetur ultricies urna, non convallis ex pellentesque pellentesque. Integer eu mollis risus, quis aliquet turpis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed viverra semper molestie. Integer ac aliquam erat. Nullam vel consequat nunc, vitae scelerisque sapien. Donec fermentum commodo turpis quis finibus. Suspendisse porta, ipsum id rutrum vestibulum, erat massa eleifend lacus, sagittis fringilla eros erat nec quam. In viverra justo et neque faucibus viverra. Nullam gravida ligula hendrerit mauris mattis, in consequat erat sodales. Suspendisse elementum velit vitae nunc blandit, eget suscipit mi viverra. Ut in scelerisque elit.</p>
            </div>
            <div class="col-md-6 col-md-offset-3">
                <h2>Price Details</h2>
                <div class="col-md-9">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consectetur ultricies urna, non convallis ex pellentesque pellentesque. Integer eu mollis risus, quis aliquet turpis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed viverra semper molestie. Integer ac aliquam erat. Nullam vel consequat nunc, vitae scelerisque sapien. Donec fermentum commodo turpis quis finibus. Suspendisse porta, ipsum id rutrum vestibulum, erat massa eleifend lacus, sagittis fringilla eros erat nec quam. In viverra justo et neque faucibus viverra. Nullam gravida ligula hendrerit mauris mattis, in consequat erat sodales. Suspendisse elementum velit vitae nunc blandit, eget suscipit mi viverra. Ut in scelerisque elit.</p>
                </div>
                <div class="col-md-3">
                    <h3>&#36 12,65</h3>
                    <h3>&#36 5,00</h3>
                    <h3>&#36 16,00</h3>
                    <h3>&#36 5,00</h3>
                </div>
            </div>
            <div class="col-md-6 col-md-offset-3">
                    <h2>Order Total</h2>
                    <h3>&#36 38,65</h3>
            </div>
            <div class="row">
                <div class="col-md-6 col-md-offset-5">
                    <button type="button" class="btn" data-toggle="modal" data-target="#formPurchase">Purchase</button>
                </div>
                <div class="col-md-6 col-md-offset-4">
                    <button type="button" class="btn-secondary">Delivery</button>
                    <button type="button" class="btn-secondary">Payment</button>
                    <button type="button" class="btn-success">Purchase</button>
                </div>
            </div>
        </div>
        
        
        <!-- costruzione popup avvenuto pagamento -->
        <div id="formPurchase" class="modal fade" role="dialog" style="color: green">
          <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body">
                <a href="#"> <img src="../../../img/ok.png" width="50px" height="auto"> </a> 
                <p>Congrats! Your order has been accepted!</p>
              </div>
              <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal" onclick="location.href='../shop.php'">Return to store</button>
              </div>
            </div>
          </div>
        </div>
        
         <!--FOOTER -->
        <?php include("../../footer2.php"); ?>
    </body>
</html>