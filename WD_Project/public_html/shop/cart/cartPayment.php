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
                    <a href="../../homepage.php">Home</a> / <a href="../shop.php">Shop</a> / <a href="../cart/cartDesktop.php">Cart</a> / <a href="cartDelivery.php"> Delivery </a> / <a href="cartPayment.php"> Payment </a>
            </div>
            
            <div class="col-md-12">
                <fieldset>
                    <legend>Payment Method</legend> 
                </fieldset>
                <div class="form-group">
                      <label>Card Owner's Name</label>
                      <input class="form-control">
                </div>
                <div class="form-group">
                      <label>Card Number</label>
                      <input class="form-control">
                </div>
                <div class="form-group">
                      <label>Card Expiry Date (vanno allineati)</label>
                          <span><input class="form-control" style="width: 50px">/</span>
                          <span><input class="form-control" style="width: 50px"></span>
                </div>
                <div class="form-group">
                      <label>CCV</label>
                      <input class="form-control">
                </div>
                <div class="row">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="button" class="btn" onclick="location.href='cartPurchase.php'">Proceed</button>
                    </div>
                    <div class="col-md-6 col-md-offset-3" style="margin-bottom:70px">
                        <button type="button" class="btn">Delivery</button>
                        <button type="button" class="green">Payment</button>
                        <button type="button" class="btn">Purchase</button>
                    </div>
                </div>
            </div>
        </div>
        <!--FOOTER -->
        <?php include("../../footer2.php"); ?>
    </body>
</html>