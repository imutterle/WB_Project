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
                           <a>
                                <button type="button" class="btn" onclick="location.href='../cart/cartDesktop.php'"> Buy Now </button>
                            </a>
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
                        <h4>colors</h4>
                        <button class="btn btn-default" type="submit" style="background-color:red"></button>
                        <button class="btn btn-default" type="submit" style="background-color:orange"></button>
                        <button class="btn btn-default" type="button" style="background-color:green"></button>
                        <button class="btn btn-default" type="submit" style="background-color:blue"></button>
                        <button class="btn btn-default" type="submit" style="background-color:white"></button>
                    </div>
                    <div class="size">
                        <h4>size</h4>
                        <button class="btn btn-default" type="submit">XS</button>
                        <button class="btn btn-default" type="submit">SM</button>
                        <button class="btn btn-default" type="button">M</button>
                        <button class="btn btn-default" type="submit">L</button>
                        <button class="btn btn-default" type="submit">XL</button>
                    </div>
                    <div class="seller">
                        <h3>Seller</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eget urna quis massa sodales finibus non ac lacus. Praesent metus mauris, laoreet quis tristique tristique, fringilla ut quam.</p>
                    </div>
                    <div class="warranty">
                        <h3>Warranty</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eget urna quis massa sodales finibus non ac lacus. Praesent metus mauris, laoreet quis tristique tristique, fringilla ut quam.</p>
                    </div>
                    <div class="productDescription">
                        <h3>Product Description</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eget urna quis massa sodales finibus non ac lacus. Praesent metus mauris, laoreet quis tristique tristique, fringilla ut quam.</p>
                    </div>
                    <div class="tags">
                        <p><b>tags:</b><a href="../../search/tag1.php">#Tag 1</a>,<a href="../../search/tag1.php">#Tag 2</a>,<a href="../../search/tag1.php">#Tag 3</a></p>
                    </div>
                </div>
            </div>            
            
		</div>
        
        <!--FOOTER -->
        <?php include("../../footer2.php"); ?>
        
    </body>
</html>