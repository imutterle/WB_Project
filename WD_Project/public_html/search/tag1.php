<html lang="it">
    <?php include ("../head1.html"); ?>
    <body>
        <!-- NAVBAR -->
        <?php include("../Navbar1.php"); ?>
        
        <div class="container">
            <div class="path">
                <a href="../homepage.php">Home</a> / <a href="../search.php">Search</a>
            </div>
            
            <div class="searchInbox col-md-12">
                <div class="col-md-4">
                    <div class="row">
                        <form class="search" action="search1.php" method="get">
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
                <h3>Search Results: <a href="tag1.php">#Tag</a></h3>
            </div>
            
            <div class="exp-details col-md-12">
                <div class="col-md-8">
                    <h3>Title of section</h3>
                    <h4>Category</h4>
                    <h5>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ut sapien est. Vestibulum vitae nibh augue. Nam tristique mauris pretium, ornare nisl non, posuere dolor. Aenean non efficitur ligula. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec interdum dui at massa mollis, a malesuada purus scelerisque.
                        </p>
                    </h5>                
                    <h4>Tags:<a href="tag1.php">#Tag 1</a>,<a href="tag1.php">#Tag 2</a>,<a href="tag1.php">#Tag 3</a></h4>
                </div>
                <div class="col-md-4">
                    <img class="img-responsive" src="../../img/1.jpg">
                </div>
            </div>
            
            <div class="exp-details col-md-12">
                <div class="col-md-8">
                    <h3>Title of section</h3>
                    <h4>Category</h4>
                    <h5>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ut sapien est. Vestibulum vitae nibh augue. Nam tristique mauris pretium, ornare nisl non, posuere dolor. Aenean non efficitur ligula. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec interdum dui at massa mollis, a malesuada purus scelerisque.
                        </p>
                    </h5>                
                    <h4>Tags:<a href="tag1.php">#Tag 1</a>,<a href="tag1.php">#Tag 2</a>,<a href="tag1.php">#Tag 3</a></h4>
                </div>
                <div class="col-md-4">
                    <img class="img-responsive" src="../../img/2.jpg">
                </div>
            </div>
            
            <div class="exp-details col-md-12">
                <div class="col-md-8">
                    <h3>Title of section</h3>
                    <h4>Category</h4>
                    <h5>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ut sapien est. Vestibulum vitae nibh augue. Nam tristique mauris pretium, ornare nisl non, posuere dolor. Aenean non efficitur ligula. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec interdum dui at massa mollis, a malesuada purus scelerisque.
                        </p>
                    </h5>                
                    <h4>Tags:<a href="tag1.php">#Tag 1</a>,<a href="tag1.php">#Tag 2</a>,<a href="tag1.php">#Tag 3</a></h4>
                </div>
                <div class="col-md-4">
                </div>
            </div>
            
            <div class="exp-details col-md-12">
                <div class="col-md-8">
                    <h3>Title of section</h3>
                    <h4>Category</h4>
                    <h5>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ut sapien est. Vestibulum vitae nibh augue. Nam tristique mauris pretium, ornare nisl non, posuere dolor. Aenean non efficitur ligula. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec interdum dui at massa mollis, a malesuada purus scelerisque.
                        </p>
                    </h5>                
                    <h4>Tags:<a href="tag1.php">#Tag 1</a>,<a href="tag1.php">#Tag 2</a>,<a href="tag1.php">#Tag 3</a></h4>
                </div>
                <div class="col-md-4">
                    <img class="img-responsive" src="../../img/3.jpg">
                </div>
            </div>
            
        </div>
        <div class="divEdett"></div>
        <!-- FOOTER -->
        <?php include("../footer1.php"); ?>  
    </body>
</html>