<html lang="it">
    <?php include ("head0.html"); ?>
    <body>
        
        <!-- NAVBAR -->
        
        <?php include("Navbar0.php"); ?>
        
        <!--NEWS-->
        <div class="container">
            <div class="path">
                <a href="homepage.php">Home</a> / <a href="blog.php">Blog</a>
            </div>
            <!-- corpo blog -->
            <div class="container">
                <div class="col-md-4">
                    <img class="img-responsive" src="../img/1.jpg">
                </div>
                <div class="col-md-8">
                    <h1>title</h1>
                    <p>testo vario</p>
                    <button class="btn" type="button" onclick="location.href='article.php'">read more</button>
                </div>
            </div>
            <div class="container">
                <div class="col-md-4">
                    <img class="img-responsive" src="../img/1.jpg">
                </div>
                <div class="col-md-8">
                    <h1>title</h1>
                    <p>testo vario</p>
                    <button class="btn" type="button" onclick="location.href='article.php'">read more</button>
                </div>
            </div>
        </div>

        <!--FOOTER -->
        <?php include("footer0.php"); ?>   
   </body>
</html>