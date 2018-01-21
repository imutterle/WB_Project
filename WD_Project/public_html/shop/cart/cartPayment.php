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
                      <label>Card Expiry Date</label>
                          <span><input class="form-control" style="width: 50px">/</span>
                          <span><input class="form-control" style="width: 50px"></span>
                </div>
                <div class="form-group">
                      <label>CCV</label>
                      <input class="form-control">
                </div>
                <div class="row">
                    <div class="col-md-6 col-md-offset-5">
                        <button type="button" class="btn" onclick="location.href='cartPurchase.php'">Proceed to Purchase</button>
                    </div>
                    <div class="stepwizard">
                    <div class="stepwizard-row">
                        <div class="stepwizard-step">
                            <a href="cartDelivery.php"><button type="button" class="btn btn-default btn-circle" style="background-color: green">1</button></a>
                            <p><a href="cartDelivery.php"> Delivery </a></p>
                        </div>
                        <div class="stepwizard-step">
                            <button type="button" class="btn btn-primary btn-circle" style="background-color: blue">2</button>
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