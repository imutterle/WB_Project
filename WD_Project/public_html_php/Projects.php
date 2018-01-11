<html lang="it">
    <head>
                <!-- Viewport -->
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <!-- Tag META -->
                <meta name="description" content="Descrizione della pagina">
                <meta name="author" content="2R2M">
                <!-- CSS -->
                <link href="../css/bootstrap.css" rel="stylesheet">
                <link href="https://getbootstrap.com/docs/3.3/examples/grid/grid.css" rel="stylesheet">
               
                <!-- Head stuffs -->
                <title>Progetto Web Design</title>
                
                
                <!-- Custom CSS -->
                <link href="../css/Navbar.css" rel="stylesheet">
                <link href="../css/MediaQueries.css" rel="stylesheet">
                <link href="../css/Carousel.css" rel="stylesheet">
                <link href="../css/spaceProject.css" rel="stylesheet">
                <link href="../css/footerWebPage.css" rel="stylesheet">
                <link href="../css/footer.css" rel="stylesheet">
                <link href="../css/icone.css" rel="stylesheet">
                <!-- Script -->
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
                <script src="../js/bootstrap.js"></script>
    </head>
    <body>
        <!-- NAVBAR -->
        
        <?php include("Navbar0.html"); ?>
        
        <!--ESPERIENZE -->
        <div class="container" style="margin-top: 50px">
            
            <div class="row"><a href="homepage.php">Home</a> / <a href="Projects.php">Projects</a></div>
            
            <div class="spatialTourism">
                <h1>Projects</h1>
                <h3>Description of the section</h3>
                <h5>Lorem ...</h5>
           </div>
            <!-- primo gruppo di esperienze-->
              <div class="row">
                    <div class="col-md-4">
                        <a href="SpatialTourism.php">
                            <img class="img-responsive" src="img">
                            <h3>Spatial tourism</h3>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <img class="img-responsive" src="img">
                        <h3>Space Satellite Launch</h3>
                    </div>
                    <div class="col-md-4">
                        <img class="img-responsive" src="img">
                         <h3>Rockets</h3>
                    </div>
              </div>
            <!--secondo gruppo di esperienze-->
             <div class="row">
                    <div class="col-md-4">
                        <img class="img-responsive" src="img">
                         <h3>Engine</h3>
                    </div>
                    <div class="col-md-4">
                        <img class="img-responsive" src="img">
                        <h3>Spacesuit</h3>
                    </div>
                    <div class="col-md-4">
                        <img class="img-responsive" src="img">
                        <h3>Security</h3>
                    </div>
              </div>
        </div>   
                
        <!--FOOTER -->
        
        <?php include("footer0.html"); ?>
        
    </body>
</html>