<html>
    <head>
        <?php include ("head1.html"); ?>
    </head>
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
                            <a class="navbar-brand" href="../homepage.php">Spatial<br>Tourism</a>
                            
                        </div>
                         <!-- Insieme di links, forms, and altri componenti per la navbar -->
                        <div class="collapse navbar-collapse" id="navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li>
                                    <a href="../aboutUs.php">About us</a>
                                </li>
                                <li>
                                    <a href="../Projects.php">Projects</a>
                                </li>
                                <li>
                                    <a href="../news.php">News</a>
                                </li>
                                 <li>
                                    <a href="../blog.php">Blog</a>
                                </li>
                                <li>
                                    <a href="../gallery/gallery.php">Gallery</a>
                                </li>
                                <li>
                                    <a href="../shop/shop.php">Shop</a>
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
        <!--manca colore grigio, ridimensionare lungo tutta la linea e sistemare ordine -->
        <div id="FormNav" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <form class="form-horizontal" action=" " method="post"  id="contact_form">
                            <fieldset>
                                <legend>LOG-IN
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <div class="social">
                                            <a href="#"> <img src="../../img/icona-facebook.png" width="30px" height="auto"> <button type="button" class="btn" style="background-color: skyblue">Login with facebook</button></a> 
                                        </div>
                                </legend>
                                    <div class="form-group">
                                        <div class="col-md-12 nameUS">
                                            <div class="col-md-6 formUS">
                                                <input class="form-control" name="username" placeholder="Username" type="text">
                                            </div>
                                            <div class="col-md-6 passUS">
                                                <input class="form-control" name="password" placeholder="Password" type="text">
                                            </div>
                                            <div class="col-md-12 submitUS" style="text-align: right"> 
                                                <div class="col-md-12 formUS">
                                                    <button type="button" class="btn">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <hr style="border-bottom-color: black">-->
                                        <h3>Register now</h3>   
                                        <div class="col-md-12 emailUS">
                                                <div class="col-md-12 formUS">
                                                    <input class="form-control" name="NomeCognome" placeholder="First and last name" type="text">
                                                </div>
                                        </div>
                                        <div class="col-md-12 emailUS">
                                                <div class="col-md-12 formUS">
                                                    <input class="form-control" name="mail" placeholder="E-mail" type="text">
                                                </div>
                                        </div>
                                        <div class="col-md-12 nameUS">
                                            <div class="col-md-6 formUS">
                                                <input class="form-control" name="username" placeholder="Username" type="text">
                                            </div>
                                            <div class="col-md-6 passUS">
                                                <input class="form-control" name="password" placeholder="Password" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-12 listUS">
                                            <div class="col-md-12 formUS">
                                                <select name="country" class="form-control selectpicker">
                                                      <option>Select country</option>
                                                      <option>Italy</option>
                                                      <option>France</option>
                                                      <option>UK</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12 submitUS">
                                                <div class="col-md-12 formUS"><button type="button" class="btn">Submit</button></div>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
        </div>
    </body>
</html>