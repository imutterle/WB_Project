<!--pagina di dettaglio dell'esperienza, farlo su un unico documento come about us-->

<!--forse ne va fatta una per ogni esperienza-->
<html lang="it">
     <head>
                <!-- Viewport -->
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <!-- Tag META -->
                <meta name="description" content="Descrizione della pagina">
                <meta name="author" content="2R2M">
                <!-- CSS -->
                <link href="../../css/bootstrap.css" rel="stylesheet">
                <link href="https://getbootstrap.com/docs/3.3/examples/grid/grid.css" rel="stylesheet">
               
                <!-- Head stuffs -->
                <title>Progetto Web Design</title>
                
                
                <!-- Custom CSS -->
                <link href="../../css/Navbar.css" rel="stylesheet">
                <link href="../../css/MediaQueries.css" rel="stylesheet">
                <link href="../../css/Carousel.css" rel="stylesheet">
                <link href="../../css/spaceProject.css" rel="stylesheet">
                <link href="../../css/footerWebPage.css" rel="stylesheet">
                <link href="../../css/footer.css" rel="stylesheet">
                <link href="../../css/icone.css" rel="stylesheet">
                <!-- Script -->
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
                <script src="../../js/bootstrap.js"></script>
    </head>
    <body>
        <!-- NAVBAR -->
        
        <?php include("../Navbar1.html"); ?>
        
        <div class="container" style="margin-top: 50px">
            
            <div class="row"><a href="../homepage.php">Home</a> / <a href="../Projects.php">Projects</a> / <a href="../SpatialTourism.php">Spatial Tourism</a> / <a href="dettaglioCircumlunarMission.php">Circumlunar Mission</a></div>
            
            <div>
                <h1>Circumlunar Mission</h1>
            </div>
            <div>
                <h2>description</h2>
                <a href="#">img</a> <p>testo</p>
            </div>
            <div>
                <h2>Mission Details</h2>
                    <p>Testo</p>
            </div>
            <div class="exp-details">
                <h1>Prices</h1>
                    <p>testo</p>
            </div>
            <div class="exp-details">
                <h1>Contact Directly: <a href="#">url</a></h1>
            </div>
            <div class="exp-details">
                <h1>Gallery</h1>
                <p>collegamento a <a href="../gallery/galleryCircumlunarMission.html"> gallery </a></p>
            </div>
        </div>
        

        <!--FOOTER -->
        
        <?php include("../footer1.html"); ?>
        
    </body>
</html>