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
        
        <!--NEWS-->
        <div class="container">
            <div style="margin-top: 70px">
                <h1>Latest news</h1>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6" style="float: left">
                            <img class="img-responsive" src="../img/1.jpg">  
<!--                        queste tre voci vanno affiancate all'immagine-->
                            <h2>description</h2>
                            <h3>lorem ... </h3>
                            <b><p>tags: #tag1, #tag2, ... </p></b>
                    </div>
                </div>
            </div>
        </div>
        
        <!--FOOTER -->
        
        <?php include("footer.html"); ?>
        
   </body>
</html>