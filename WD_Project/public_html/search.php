<html lang="it">
    <?php include ("head0.html"); ?>
    <body>
        <!-- NAVBAR -->
        <?php include("Navbar0.php"); ?>
        
        <div class="container">
            <div class="path">
                <a href="homepage.php">Home</a> / <a href="search.php">Search</a>
            </div>
            
            <div class="searchInbox col-md-12">
                <div class="col-md-4">
                    <div class="row">
                        <button class="glyphicon glyphicon-search black"></button>
                        <input type="text" name="search" placeholder="Search..">
                    </div>
                    <div class="row">
                        <span class="glyphicon glyphicon-search black"></span>
                        <input type="text" name="search" placeholder="Search..">
                    </div>
                </div>
                
                <div class="col-md-4">
                    <span class="glyphicon glyphicon-search black"></span>
                    <input type="text" name="search" placeholder="Search..">
                </div>
                
                <div class="col-md-4">
                    <span class="glyphicon glyphicon-search black"></span>
                    <input type="text" name="search" placeholder="Search..">
                </div>
            </div>
            
            <div class="exp-details col-md-12">
                <h3>Search Results:</h3>
            </div>
        </div>
        <div class="divEdett"></div>
        <!-- FOOTER -->
        <?php include("footer0.php"); ?>  
    </body>
</html>