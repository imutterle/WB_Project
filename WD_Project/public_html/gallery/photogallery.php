<html lang="it">
<?php include ("../head1.html"); ?>
    <body>
        
        <!-- NAVBAR -->
        <?php include("../Navbar1.php"); ?>
        
        <div class="container">
            <div class="path">
                    <a href="../homepage.php">Home</a> / <a href="gallery.php">Gallery</a> / <a href="photogallery.php">Photogallery</a>
            </div>
            <div class="col-md-8 col-md-offset-2">
                <img class="img-responsive" src="../../img/1.jpg">
                <div class="col-md-8">
                    <h3>description</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas quis diam maximus, rhoncus sapien in, eleifend dolor. Suspendisse luctus dui vitae consectetur placerat. Nulla at nulla ligula. Praesent sollicitudin tempus dolor ac volutpat. Mauris justo ligula, ultricies et lorem quis, tristique ullamcorper ante. Praesent eget sollicitudin justo. Mauris maximus nisi sed orci condimentum vulputate. Vivamus dignissim metus at nulla ullamcorper cursus. Nunc pharetra libero vel sagittis imperdiet. Sed condimentum tellus ligula, et consectetur erat volutpat sed. Nunc augue libero, lacinia ornare nunc id, pellentesque venenatis ipsum.</p>
                </div>
                <div class="col-md-8">
                    <p><b>tags:</b> tag1,tag2,tag3,...</p>
                </div>
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