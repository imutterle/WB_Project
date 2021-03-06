<html>
    <?php include ("head0.html"); ?>
    <body>
        <div class="container">
            <!-- Navigation -->
                <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                      <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                                <span class="sr-only">Toggle navigazione</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                            <!-- Brand -->
                            <a class="navbar-brand" href="../../homepage.php">Spatial<br>Tourism</a>
                        </div>
                          
                          <div class="navbar-header pull-right">
                          <ul class="nav navbar-nav">
                                <li>
                                    <a data-toggle="modal" data-target="#FormNav"><span class="glyphicon glyphicon-user"></span>Access</a>
                                </li>
                              <li>
                                    <form class="search" action="../../search/search1.php" method="get">
                                        <fieldset class="searchFieldset">
                                            <button class="searchButton" alt="Cerca" title="Search.."><span class="glyphicon glyphicon-search black"></span></button>
                                            <button class="searchButton" data-toggle="dropdown"><span class="glyphicon glyphicon-cog black"></span></button>
                                            <div class="dropdown-menu dropdown-options" role="menu">
                                                 <div>                                                     
                                                     <div class="row">
                                                        <h5>Options:</h5>
                                                    </div>
                                                    <div class="row">
                                                        <button class="btn">Search as a tag</button>
                                                         <button class="btn">Search as a keyword</button>
                                                    </div>
                                                     <div class="row">
                                                        <h5>Select a category:</h5>
                                                    </div>
                                                    <div class="row">
                                                        <select class="form-control searchInfo">
                                                              <option>Man Products</option>
                                                              <option>Woman Products</option>
                                                              <option>Kid Products</option>
                                                        </select>
                                                    </div>
                                                    <div class="row">
                                                        <h5>Sort by:</h5>
                                                    </div>
                                                    <div class="row">
                                                        <select class="form-control searchInfo">
                                                              <option>Most recent</option>
                                                              <option>Last recent</option>
                                                        </select>
                                                    </div>
                                                     <div class="row">
                                                        <button type="submit" class="searchButton"><span class="glyphicon glyphicon-search"></span></button>
                                                     </div>
                                                  </div>
                                            </div>
                                            <input class="searchBarNav" type="text" name="search" placeholder="Search..">
                                        </fieldset>
                                    </form>
                              </li>
                            </ul>
                          </div>
                         <!-- Insieme di links, forms, and altri componenti per la navbar -->
                        <div class="collapse navbar-collapse" id="navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li>
                                    <a href="../../aboutUs.php">About us</a>
                                </li>
                                <li class="dropdown">
                                    <a href="../../Projects.php">Projects </a>
                                        <ul class="dropdown-menu">
                                        <li><a href="../../projects/SpatialTourism.php">Spatial Tourism</a></li>
                                        <li><a href="../../projects/SpaceSatelliteLaunch.php">Satellite Launch</a></li>
                                        <li><a href="../../projects/Rockets.php">Rockets</a></li>
                                        <li><a href="../../projects/Engine.php">Engine</a></li>
                                        <li><a href="../../projects/SpaceSuit.php">Spacesuit</a></li>
                                        <li><a href="../../projects/Security.php">Security</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="../../news.php">News</a>
                                </li>
                                 <li>
                                    <a href="../../blog.php">Blog</a>
                                </li>
                                <li>
                                    <a href="../../gallery/gallery.php">Gallery</a>
                                </li>
                                <li>
                                    <a href="../../shop/shop.php">Shop</a>
                                </li>

                            </ul>
                            
                        </div>
                     </div>
                </nav>
        </div>

        <!-- Costruzione Accedi -->
        <div id="FormNav" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                    <div class="modal-content">
                            <div class="modal-body">
                                <form class="form-horizontal" action=" " method="post"  id="contact_form">
                                    <fieldset>
                                        <legend class="centro">LOG-IN
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <div class="social">
                                                    <a href="#"> <img src="../../../img/icona-facebook.png" width="30px" height="auto"> <button type="button" class="btn" style="background-color: skyblue">Login with facebook</button></a>
                                                </div>
                                        </legend>
                                    </fieldset>
                                    <fieldset>
                                        <form>
                                              <div class="form-row">
                                                <div class="form-group col-md-6">
                                                  <input type="email" class="form-control" placeholder="Username">
                                                </div>
                                                <div class="form-group col-md-6">
                                                  <input type="password" class="form-control" placeholder="Password">
                                                </div>
                                              </div>
                                              <button type="button" class="btn" style="text-align:right"> Submit</button>
                                        </form>
                                    </fieldset>
                                    <fieldset>
                                        <h3 class="centro">Register now</h3>
                                        <form>
                                              <div class="container">
                                                  <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="First and last name" style="width:300px">
                                                  </div>
                                                  <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="E-mail" style="width:300px">
                                                  </div>
                                            </div>
                                              <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                      <input type="email" class="form-control" placeholder="Username">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                      <input type="password" class="form-control" placeholder="Password">
                                                    </div>
                                              </div>
                                              <div class="form-group col-md-12">
                                                    <select name="country" class="form-control selectpicker">
                                                          <option>Select country</option>
                                                          <option>Italy</option>
                                                          <option>France</option>
                                                          <option>UK</option>
                                                    </select>
                                              </div>
                                              <button type="button" class="btn">Submit</button>
                                        </form>
                                    </fieldset>
                                </form>
                        </div>
                </div>
            </div>
        </div>
    </body>
</html>
