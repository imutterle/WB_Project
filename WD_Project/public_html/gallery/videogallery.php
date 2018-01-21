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
                <video class="video-responsive" controls autoplay>
                    <source src="../../video/Why%20is%20the%20Solar%20System%20Flat_.mp4" type="video/mp4">
                    <source src="../../video/witssf.webm" type="video/webm">
                    Your browser does not support the video tag.
                </video>
                <div class="col-md-8">
                    <h3>description</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas quis diam maximus, rhoncus sapien in, eleifend dolor. Suspendisse luctus dui vitae consectetur placerat. Nulla at nulla ligula. Praesent sollicitudin tempus dolor ac volutpat. Mauris justo ligula, ultricies et lorem quis, tristique ullamcorper ante. Praesent eget sollicitudin justo. Mauris maximus nisi sed orci condimentum vulputate. Vivamus dignissim metus at nulla ullamcorper cursus. Nunc pharetra libero vel sagittis imperdiet. Sed condimentum tellus ligula, et consectetur erat volutpat sed. Nunc augue libero, lacinia ornare nunc id, pellentesque venenatis ipsum.</p>
                </div>
                <div class="col-md-8">
                    <p><b>tags:</b><a href="../search/tag1.php">#Tag 1</a>,<a href="../search/tag1.php">#Tag 2</a>,<a href="../search/tag1.php">#Tag 3</a></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <video class="video-responsive">
                        <source src="../../video/Flying%20Through%20Space%20(Epic).mp4" type="video/mp4">
                        <source src="../../video/ftse.webm" type="video/webm">
                        Your browser does not support the video tag.
                    </video>
                </div>
                
                <!-- immagine sfocata per indicare che è quella scelta-->
                <div class="col-md-3" style="filter: blur(2px)"> 
                    <video class="video-responsive">
                        <source src="../../video/Why%20is%20the%20Solar%20System%20Flat_.mp4" type="video/mp4">
                        <source src="../../video/witssf.webm" type="video/webm">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="col-md-3">
                    <video class="video-responsive">
                        <source src="../../video/space%20in%201%20minute%20and%20half..mp4" type="video/mp4">
                        <source src="../../video/si1mah.webm" type="video/webm">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="col-md-3">
                    <video class="video-responsive">
                        <source src="../../video/Flying%20Through%20Space%20(Epic).mp4" type="video/mp4">
                        <source src="../../video/ftse.webm" type="video/webm">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>
        
        <div class="divEdett"></div>
        <!--FOOTER -->    
        <?php include("../footer1.php"); ?>
        
   </body>
</html>