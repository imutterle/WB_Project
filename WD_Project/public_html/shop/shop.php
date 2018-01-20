<html lang="it">
    <?php include ("../head1.html"); ?>
    <body>
        
        <!-- NAVBAR -->
        
        <?php include("../Navbar1.php"); ?>
        
        <div class="container">       
            <div class="path">
                <a href="../homepage.php">Home</a> / <a href="shop.php">Shop</a>
            </div>
            
            <div class="row">
                <div class="col-md-4">
                    <a href="shopMan.php">
                        <img class="img-responsive" src="../../img/spaceProjects.jpg">
                        <h3>Man</h3>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="shopWoman.php">
                        <img class="img-responsive" src="../../img/spaceProjects2.jpg">
                        <h3>Woman</h3>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="shopKid.php">
                        <img class="img-responsive" src="../../img/spaceProjects3.jpg">
                        <h3>Kid</h3>
                    </a>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6">
                    <a ><button type="button" class="btn">Customer Service</button></a> 
                </div>
                <div class="col-md-6">
                    <a ><button type="button" class="btn" onclick="location.href='cart/cartDesktop.php'">Cart</button></a> 
                </div>
            </div>
            
            <div class="container">
                        <h2 class="col-md-12 col-md-offset-4">Best Seller Products</h2>
                    <div class="col-md-3 col-md-offset-1">
                          <img class="img-responsive" src="../../img/maglietta1.jpg">
                    </div>
                    <div class="col-md-3">
                          <img class="img-responsive" src="../../img/maglietta2.jpg">
                    </div>
                    <div class="col-md-3">
                          <img class="img-responsive" src="../../img/maglietta3.jpg">
                    </div>
            </div>
        </div>
        
        <!--FOOTER -->
            
        <?php include("../footer1.php"); ?>
        
    </body>
</html>