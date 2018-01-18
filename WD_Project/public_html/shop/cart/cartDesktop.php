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
                    <a href="../../homepage.php">Home</a> / <a href="../shop.php">Shop</a> / <a href="../cart/cartDesktop.php">Cart</a>
            </div>
            
            <!-- primo prodotto -->
            
            <div class="row">
                <div class="col-md-12">
                    <h2>
                        <span class="sinistra">My cart items</span>
                        <span class="destra">Total &#36 15,99</span>
                    </h2>
                </div>
                <div class="col-md-5">
                    <img class="img-responsive" src="../../../img/1.jpg" align="left">  
                </div>
                <div class="col-md-7">
                    <div class="productName">
                        <h2>Product Name</h1>
                    </div>
                    <div class="sconto">
                        <h4>flat 24% off | <del>&#36 16,45</del></h3>
                    </div>
                    <div class="size">
                        <h5>size </h5>
                    </div>
                    <div class="quantity">
                        <h5>
                        <span class="sinistra">quantity
                            <select name="quantità" class="dropdown">    
                                  <option>1</option>
                                  <option>2</option>
                                  <option>3</option>
                                  <option>4</option>
                                  <option>5 more</option>
                            </select>
                        </span>
                        <span class="destra">
                            <a href="#"> <button type="button" class="btn">remove</button></a> 
                        </span>
                    </h5>
                    </div>
                </div>
            </div>         
        
        <!-- secondo prodotto -->
        
            <div class="row">
                    <div class="col-md-12">
                        <h2>
                            <span class="sinistra">My cart items</span>
                            <span class="destra">Total &#36 14,25</span>
                        </h2>
                    </div>
                    <div class="col-md-5">
                        <img class="img-responsive" src="../../../img/1.jpg" align="left">  
                    </div>
                    <div class="col-md-7">
                        <div class="productName">
                            <h2>Product Name</h1>
                        </div>
                        <div class="sconto">
                            <h4>flat 32% off | <del>&#36 21,45</del></h3>
                        </div>
                        <div class="size">
                            <h5>size </h5>
                        </div>
                        <div class="quantity">
                            <h5>
                            <span class="sinistra">quantity
                                <select name="quantità" class="dropdown">    
                                      <option>1</option>
                                      <option>2</option>
                                      <option>3</option>
                                      <option>4</option>
                                      <option>5 more</option>
                                </select>
                            </span>
                            <span class="destra">
                                <a href="#"> <button type="button" class="btn">remove</button></a> 
                            </span>
                        </h5>
                        </div>
                    </div>
                </div> 
            
            <div class="row">
                <div class="col-md-6 col-md-offset-5">
                    <h3>Order total &#36 26,70</h1> 
                    <button type="button" class="btn">place order</button>
                </div>
            </div>
        </div>
        <div class="container">
        <h1>con questa classe container riesco a vedere tutta la pagina altrimenti no </h1>
        </div>
        <!--FOOTER -->
        <?php include("../../footer2.php"); ?>
    </body>
</html>