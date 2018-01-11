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
            
            <div class="row"><a href="homepage.php">Home</a> / <a href="Projects.php">Projects</a> / <a href="SpatialTourism.php">Spatial Tourism</a></div>
            
            <div class="spatialTourism">
                <h1>Spatial Tourism</h1>
                <h3>Description of the section</h3>
                <h5>Lorem ...</h5>
            </div>
            <!-- primo gruppo di esperienze-->
              <div class="row">
                    <div class="col-md-3">
                        <a href="../public_html_php/dettaglioExperiences/dettaglioCircumlunarMission.php">
                            <img class="img-responsive" src="../img/spaceProjects.jpg">
                            <h3>Circumlunar Mission</h3>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <img class="img-responsive" src="../img/spaceProjects2.jpg">
                        <h3>Space Station</h3>
                    </div>
                    <div class="col-md-3">
                        <img class="img-responsive" src="../img/spaceProjects3.jpg">
                         <h3>Spacewalk</h3>
                    </div>
                    <div class="col-md-3">
                        <img class="img-responsive" src="../img/spaceProjects4.jpg">
                         <h3>Suborbital Spaceflight</h3>
                    </div>
              </div>
            <!--secondo gruppo di esperienze-->
             <div class="row">
                    <div class="col-md-4">
                        <img class="img-responsive" src="../img/spaceProjects5.jpg">
                         <h3>Launch Tour</h3>
                    </div>
                    <div class="col-md-4">
                        <img class="img-responsive" src="../img/spaceProjects6.jpg">
                        <h3>Spaceflight Training</h3>
                    </div>
                    <div class="col-md-4">
                        <img class="img-responsive" src="../img/spaceProjects7.jpg">
                        <h3>Zero Gravity Flight</h3>
                    </div>
              </div>
       </div>   
        
        
        <!--FOOTER -->    
        
        <?php include("footer0.html"); ?>
    
    </body>
</html>