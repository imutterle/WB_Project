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
                        <form class="search" action="search/search1.php" method="get">
                            <fieldset class="searchFieldset">
                                <button class="searchButton" alt="Cerca" title="Search.."><span class="glyphicon glyphicon-search black"></span></button>
                                <input type="text" name="search" placeholder="Search..">
                            </fieldset>
                        </form>
                    </div>
                    <div class="row">
                        <button class="btn">Search as a tag</button>
                        <button class="btn">Search as a keyword</button>
                    </div>
                </div>                
                <div class="col-md-4">
                    <div class="row">
                        <h5>Select a category</h5>
                    </div>
                    <div class="row">
                        <select class="form-control searchInfo">
                              <option>Man Products</option>
                              <option>Woman Products</option>
                              <option>Kid Products</option>
                        </select>
                    </div>
                </div>                
                <div class="col-md-4">
                    <div class="row">
                        <h5>Sort by</h5>
                    </div>
                    <div class="row">
                        <select class="form-control searchInfo">
                              <option>Most recent</option>
                              <option>Last recent</option>
                        </select>
                    </div>
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