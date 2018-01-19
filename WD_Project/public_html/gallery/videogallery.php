<html lang="it">
<?php include ("../head1.html"); ?>
    <body>
        
        <!-- NAVBAR -->
        <?php include("../Navbar1.php"); ?>
        
        <div class="container">
            <div class="path">
                    <a href="../homepage.php">Home</a> / <a href="gallery.php">Gallery</a> / <a href="videogallery.php">Videogallery</a>
            </div>
            <div class="col-md-8 col-md-offset-2">
                <video class="img-responsive" controls autoplay>
                    <source src="../../video/Why%20is%20the%20Solar%20System%20Flat_.mp4" type="video/mp4">
                    <source src="../../video/witssf.webm" type="video/webm">
                    Your browser does not support the video tag.
                </video>
                <h3>description</h3>
                <h4>tags</h4>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <video class="img-responsive">
                        <source src="../../video/Flying%20Through%20Space%20(Epic).mp4" type="video/mp4">
                        <source src="../../video/ftse.webm" type="video/webm">
                        Your browser does not support the video tag.
                    </video>
                </div>
                
                <!-- immagine sfocata per indicare che è quella scelta-->
                <div class="col-md-3" style="filter: blur(2px)"> 
                    <video class="img-responsive">
                        <source src="../../video/Why%20is%20the%20Solar%20System%20Flat_.mp4" type="video/mp4">
                        <source src="../../video/witssf.webm" type="video/webm">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="col-md-3">
                    <video class="img-responsive">
                        <source src="../../video/space%20in%201%20minute%20and%20half..mp4" type="video/mp4">
                        <source src="../../video/si1mah.webm" type="video/webm">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="col-md-3">
                    <video class="img-responsive">
                        <source src="../../video/Flying%20Through%20Space%20(Epic).mp4" type="video/mp4">
                        <source src="../../video/ftse.webm" type="video/webm">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>
        
        <!--FOOTER -->    
        <?php include("../footer1.php"); ?>
        
   </body>
</html>