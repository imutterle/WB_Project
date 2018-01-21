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
                    
                    
                    <div class="stepwizard">
                    <div class="stepwizard-row">
                        <div class="stepwizard-step">
                            <button type="button" class="btn btn-default btn-circle" style="background-color: blue">1</button>
                            <p>Delivery</p>
                        </div>
                        <div class="stepwizard-step">
                            <button type="button" class="btn btn-primary btn-circle"disabled="disabled">2</button>
                            <p>Payment</p>
                        </div>
                        <div class="stepwizard-step">
                            <button type="button" class="btn btn-default btn-circle" disabled="disabled">3</button>
                            <p>Purchase</p>
                        </div> 
                    </div>
                </div>
                    
                    
                    
                </div>
            </div>
        </div>
        
        <!--FOOTER -->
        <?php include("../../footer2.php"); ?>
    </body>
</html>