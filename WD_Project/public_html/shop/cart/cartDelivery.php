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
                    <a href="../../homepage.php">Home</a> / <a href="../shop.php">Shop</a> / <a href="../cart/cartDesktop.php">Cart</a> / <a href="cartDelivery.php"> Delivery </a>
            </div>
            
            <div class="col-md-8 col-md-offset-2">
                <fieldset>
                    <legend>Delivery Address</legend> 
                </fieldset>
                <div class="form-group">
                      <label>First Name</label>
                      <input class="form-control">
                </div>
                <div class="form-group">
                      <label>Last Name</label>
                      <input class="form-control">
                </div>
                <div class="form-group">
                      <label>Phone Number</label>
                      <input class="form-control">
                </div>
                <div class="form-group">
                      <label>Country</label>
                      <input class="form-control">
                </div>
                <div class="form-group">
                      <label>City</label>
                      <input class="form-control">
                </div>
                <div class="form-group">
                      <label>Address</label>
                      <input class="form-control">
                </div>
                <div class="form-group">
                      <label>Zipcode</label>
                      <input class="form-control">
                </div>
                <div class="row">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="button" class="btn" onclick="location.href='cartpayment.php'">Continue with payment</button>
                    </div>
                    <div class="btn-group" style="margin-bottom:70px">
                        <button type="button" class="btn btn-primary">Delivery</button>
                        <button type="button" class="btn">Payment</button>
                        <button type="button" class="btn">Purchase</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="vuoto"></div>
        <!--FOOTER -->
        <?php include("../../footer2.php"); ?>
    </body>
</html>