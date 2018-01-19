<html lang="it">
<?php include ("../head1.html"); ?>
    <body>
        
        <!-- NAVBAR -->
        <?php include("../Navbar1.php"); ?>
        
        <div class="container">
            <div class="path">
                    <a href="../../homepage.php">Home</a> / <a href="../gallery/gallery.php">Gallery</a> / <a href="../gallery/photogallery.php">Photogallery</a>
            </div>
            <div class="col-md-8 col-md-offset-2">
                <img class="img-responsive" src="../../img/1.jpg">
                <h3>description</h3>
                <h4>tags</h4>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <img class="img-responsive" src="../../img/1.jpg">
                </div>
                
                <!-- immagine sfocata per indicare che è quella scelta-->
                <div class="col-md-3" style="filter: blur(2px)"> 
                    <img class="img-responsive" src="../../img/1.jpg">
                </div>
                <div class="col-md-3">
                    <img class="img-responsive" src="../../img/1.jpg">
                </div>
                <div class="col-md-3">
                    <img class="img-responsive" src="../../img/1.jpg">
                </div>
            </div>
        </div>
        
        <!--FOOTER -->    
        <?php include("../footer1.php"); ?>
        
   </body>
</html>