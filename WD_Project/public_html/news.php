<html lang="it">
    <?php include ("head0.html"); ?>
    <body>
        <!-- NAVBAR -->
        <?php include("Navbar0.php"); ?>
        
        <!--NEWS-->
        <div class="container">
            <div class="path">
                <a href="homepage.php">Home</a> / <a href="news.php">News</a>
            </div>
                <h1>Latest news</h1>
                <div class="container">
                    <!--prima notizia-->
                    <div class="col-md-4">
                        <img class="img-responsive" src="../img/1.jpg">
                    </div>
                    <div class="col-md-8">
                        <h1>Description</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consectetur ultricies urna, non convallis ex pellentesque pellentesque. Integer eu mollis risus, quis aliquet turpis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed viverra semper molestie. Integer ac aliquam erat. Nullam vel consequat nunc, vitae scelerisque sapien.</p>
                        <p><b>tags:</b><a href="search/tag1.php">#Tag 1</a>,<a href="search/tag1.php">#Tag 2</a>,<a href="search/tag1.php">#Tag 3</a></p>
                    </div>
                </div>
                
                <div class="container">
                    <!--seconda notizia-->
                    <div class="col-md-4">
                        <img class="img-responsive" src="../img/2.jpg">
                    </div>
                    <div class="col-md-8">
                        <h1>Description</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consectetur ultricies urna, non convallis ex pellentesque pellentesque. Integer eu mollis risus, quis aliquet turpis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed viverra semper molestie. Integer ac aliquam erat. Nullam vel consequat nunc, vitae scelerisque sapien.</p>
                        <p><b>tags:</b><a href="search/tag1.php">#Tag 1</a>,<a href="search/tag1.php">#Tag 2</a>,<a href="search/tag1.php">#Tag 3</a></p>
                    </div>
                </div>
        </div>        
        <div class="divEdett"></div>
        <!--FOOTER -->
        <?php include("footer0.php"); ?> 
   </body>
</html>