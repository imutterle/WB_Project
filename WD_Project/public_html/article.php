<html lang="it">
    <?php include ("head0.html"); ?>
    <body>
        
        <!-- NAVBAR -->
        
        <?php include("Navbar0.php"); ?>
        
        <!--NEWS-->
        <div class="container">
            <div class="path">
                <a href="homepage.php">Home</a> / <a href="blog.php">Blog</a> / <a href="article.php"> Article </a>
            </div>
            <!-- corpo blog -->
            <h1>title</h1>
            <div class="col-md-4">
                <img class="img-responsive" src="../img/1.jpg">
            </div>
            <div class="col-md-4">
                <img class="img-responsive" src="../img/1.jpg">
            </div>
            <div class="col-md-5">
                <p>lorem</p>
                <h3>go to the comment section</h3>
                <a data-toggle="modal" data-target="#Comments"><button type="button" class="btn">Comments</button></a> 
            </div>
        </div>
        
         <!-- Costruzione Comments -->
        <div id="Comments" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                    <div class="modal-content">
                            <div class="modal-body">
                                <form class="form-horizontal" action=" " method="post"  id="contact_form">
                                    <fieldset>
                                        <legend>Comments<button type="button" class="close" data-dismiss="modal">&times;</button></legend> 
                                    </fieldset>
                                    <div class="form-group">
                                        <div class="col-md-8">
                                            <p>testo</p>
                                        </div>
                                        <div class="col-md-8">
                                            <p>testo</p>
                                        </div>
                                        <div class="col-md-12 messageUS">
                                            <div class="col-md-12 formUSmex">
                                                <textarea class="form-control" name="message" type="text"></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-md-offset-4">
                                                <button type="button" class="btn">Add you comment</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                        </div>
                </div>
            </div>
        </div>
        <!--FOOTER -->
        <?php include("footer0.php"); ?>   
   </body>
</html>