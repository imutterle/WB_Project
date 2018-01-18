<html lang="it">
<?php include ("head0.html"); ?>
    <body>
        
        <!-- NAVBAR -->
        
        <?php include("Navbar0.php"); ?>
        
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
            
        <?php include("footer0.php"); ?>
        
   </body>
</html>