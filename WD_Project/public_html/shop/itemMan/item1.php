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
                    <a href="../../homepage.php">Home</a> / <a href="../shop.php">Shop</a> / <a href="../shopMan.php">Man products</a> / <a href="item1.php">Selected item</a>
            </div>
            
            <div class="row">
                <div class="col-md-5">
                    <div class="row">
                        <img class="img-responsive" src="../../../img/1.jpg">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <a ><button type="button" class="btn">Add to Cart</button></a> 
                        </div>
                        <div class="col-md-6">
                            <a ><button type="button" class="btn">Buy Now</button></a> 
                        </div>
                    </div>
                </div>
                
                <div class="col-md-7">
                    <div class="productName">
                        <h1>Product Name</h1>
                    </div>
                    <div class="expense">
                        <h3>&#36 15,99</h3>
                    </div>
                    <div class="colors">
                        <h5>colors form</h5>
                    </div>
                    <div class="size">
                        <h5>size form</h5>
                    </div>
                    <div class="seller">
                        <h3>Seller</h3>
                        <h5>Description of the section</h5>
                    </div>
                    <div class="productDescription">
                        <h3>Product Description</h3>
                        <h5>Description of the section</h5>
                    </div>
                    <div class="tags">
                        <h3>Tags</h3>
                        <h5>Description of the section</h5>
                    </div>
                </div>
            </div>            
            
		</div>
        <div class="vuoto"></div>
        <!--FOOTER -->
        <?php include("../../footer2.php"); ?>
        
    </body>
</html>