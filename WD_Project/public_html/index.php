<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="it">
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

        <meta http-equiv="description" content="page description" />
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />   

        <!-- Custom CSS -->
        <link href="../css/styleSheetProgetto.css" rel="stylesheet">
        <link href="../css/footerWebPage.css" rel="stylesheet">
        <link href="../css/Navbar.css" rel="stylesheet">
        <link href="../css/MediaQueries.css" rel="stylesheet">
        <link href="../css/Carousel.css" rel="stylesheet">
        <!-- Script -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="js/bootstrap.js"></script>
    </head>
    <body>
    
        <!-- navbar -->
        
        <?php include("header.html"); ?>

        <!-- CAROUSEL -->
        
        <!-- mancano le immagini da inserire nel carousel. Inoltre vedere come si fa a ridimensionare l'immagine a schermo intero -->
        <div id="myCarousel" class="carousel slide" style="margin-top: 70px">
		      <!-- indicatori -->
		      <ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
		      </ol>
		   
           <div class="carousel-inner">
               <div class="item active">
                <img src= "../img/Pagina1.jpg" alt="Welcome" class="centro">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1><center>Carousel</center></h1>
                            <p>prodotti, notizie e link</p>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <img src= "../img/Pagina2.jpg" alt="Hello world" class="centro">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1><center>Carousel</center></h1>
                            <p>prodotti, notizie e link</p>
                        </div>
                    </div>
                </div>

               <div class="item">
                   <img src= "../img/Pagina3.jpg" alt="top kek" class="centro">
                   <div class="container">
                        <div class="carousel-caption">
                            <h1><center>Carousel</center></h1>
                            <p>prodotti, notizie e link</p>
                        </div>
                    </div>
                </div>

                <!-- Pulsanti carousel -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>

                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>

            </div>
		</div>
    
        <!-- footer -->
    
        <?php include("footer.html"); ?>
    
    </body>
</html>