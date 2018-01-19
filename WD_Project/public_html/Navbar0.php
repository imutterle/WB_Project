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
                            <a class="navbar-brand" href="homepage.php">Spatial<br>Tourism</a>
                            
                        </div>
                         <!-- Insieme di links, forms, and altri componenti per la navbar -->
                        <div class="collapse navbar-collapse" id="navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li>
                                    <a href="aboutUs.php">About us</a>
                                </li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="Projects.php">Projects</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="projects/SpatialTourism.php">Spatial Tourism</a></li>
                                        <li><a href="projects/SpaceSatelliteLaunch.php">Satellite Launch</a></li>
                                        <li><a href="projects/Rockets.php">Rockets</a></li>
                                        <li><a href="projects/Engine.php">Engine</a></li>
                                        <li><a href="projects/SpaceSuit.php">Spacesuit</a></li>
                                        <li><a href="projects/Security.php">Security</a></li>
                                        
                                    </ul>
                                
                                </li>
                                <li>
                                    <a href="news.php">News</a>
                                </li>
                                 <li>
                                    <a href="blog.php">Blog</a>
                                </li>
                                <li>
                                    <a href="gallery/gallery.php">Gallery</a>
                                </li>
                                <li>
                                    <a href="shop/shop.php">Shop</a>
                                </li>

                            </ul>
                            <ul class="nav navbar-nav navbar-center">
                                <li>
                                    <a data-toggle="modal" data-target="#FormNav"><span class="glyphicon glyphicon-user"></span>Accedi</a>
                                </li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                            <span class="glyphicon glyphicon-search white"></span>
                               <input type="text" name="search" placeholder="Search..">
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
                                                    <a href="#"> <img src="../img/icona-facebook.png" width="30px" height="auto"> <button type="button" class="btn" style="background-color: skyblue">Login with facebook</button></a> 
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
                                              <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="First and last name">
                                              </div>
                                              <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="E-mail">
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