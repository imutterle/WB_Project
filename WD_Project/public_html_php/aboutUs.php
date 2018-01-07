<!--PER ABOUT US FACCIAMO UN UNICO FILE HTML, DIVIDIAMO ALL'INTERNO LE 5 PARTI. SE DALLA NAVBAR SI CLICCHERA' SU UNA DI QUESTE SI ARRIVERA' SEMPRE IN QUESTA PAGINA MA PIU GIU O SU IN BASE ALL'ARGOMENTO SELEZIONATO, ATTRAVERSO DEI LINK INTERNI ALLA PAGINA (href alla classe) -->
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
                <!-- Script -->
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
                <script src="../js/bootstrap.js"></script>
    </head>
    <body>
        <!-- NAVBAR -->
        
        <?php include("Navbar.html"); ?>
        
        <!--VOCI VARIE MENU -->
        
        <div class="container" style="margin-top: 50px">
            <div class="exp-details">
                <h1>OVERVIEW</h1>
                    <p>Ho del testo di presentazione</p>
            </div>
            <div class="exp-details">
                <h1>TEAM</h1>
                    <p>Scrivo cose riguardo le persone del team</p>
            </div>
            <div class="exp-details">
                <h1>CARRIERS</h1>
                    <p>Ci possono essere collegamenti a contact us o altro</p>
            </div>
            <div class="exp-details">
                <h1>PARTNERSHIP</h1>
                <p>qualcosa sui partner</p>
            </div>
            <div class="exp-details">
                <h1>FAQ</h1>
                    <p>scrivere qualcosa delle FAQ e sicurezza (che vuole pitta)</p>
            </div>
        </div>
        
        <!-- FOOTER -->
        
        <?php include("footer.html"); ?>
        
    </body>
</html>