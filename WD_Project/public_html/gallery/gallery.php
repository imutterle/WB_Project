<html lang="it">
    <?php include ("../head1.html"); ?>
    <body>
        <!-- NAVBAR -->
        <?php include("../Navbar1.php"); ?>
        
        <!--SEZIONE MENU-->
		<div class="container">
               <div class="path">
                   <a href="../homepage.php">Home</a> / <a href="gallery.php">Gallery</a>
                </div>
                <div class="row" style="margin-top: 100px">
                    <div class="col-md-6">
                        <img class="img-responsive" src="../../img/gallery1.jpg">
                        <a href="photogallery.php"> <h1>Photo Gallery</h1> </a>
                    </div>
                    <div class="col-md-6">
                        <img class="img-responsive" src="../../img/gallery2.jpg">
                        <a href="videogallery.php"> <h1>Video Gallery</h1> </a>
                    </div>
                </div>
		</div>
        <div class="vuoto"></div>
        <!--FOOTER -->
        <?php include("../footer1.php"); ?>
    </body>
</html>