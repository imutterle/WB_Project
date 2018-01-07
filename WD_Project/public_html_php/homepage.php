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
        
        <?php include("Navbar.html"); ?>
        
        <!-- CAROUSEL -->

        <!-- mancano le immagini da inserire nel carousel -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner">
                    <div class="item active">
                      <img src="../img/1.jpg" alt="qualcosa">
                      <div class="carousel-caption">
                        <h3>...</h3>
                        <p>..</p>
                      </div>
                    </div>

                    <div class="item">
                      <img src="../img/2.jpg" alt="qualcosa">
                      <div class="carousel-caption">
                        <h3>..</h3>
                        <p>..</p>
                      </div>
                    </div>

                    <div class="item">
                      <img src="../img/3.jpg" alt="qualcosa">
                      <div class="carousel-caption">
                        <h3>..</h3>
                        <p>..</p>
                      </div>
                    </div>
              </div>

              <!-- Left and right controls -->
              <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
              </a>
        </div>
        
        <!--FOOTER -->
            
        <?php include("footer.html"); ?>
        
   </body>
</html>