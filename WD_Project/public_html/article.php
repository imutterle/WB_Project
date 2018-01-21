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
            <div class="container">
                <h1>Title</h1>
                <div class="col-md-4">
                    <img class="img-responsive" src="../img/1.jpg">
                </div>
                <div class="col-md-4">
                    <img class="img-responsive" src="../img/1.jpg">
                </div>
            </div>
             <div class="container">
                <div class="col-md-5">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consectetur ultricies urna, non convallis ex pellentesque pellentesque. Integer eu mollis risus, quis aliquet turpis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed viverra semper molestie. Integer ac aliquam erat. Nullam vel consequat nunc, vitae scelerisque sapien.</p>
                        <h3>Go to the comment section</h3>
                        <a data-toggle="modal" data-target="#Comments"><button type="button" class="btn">Comments</button></a> 
                </div>
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
                                        <div class="col-md-8 col-md-offset-2">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consectetur ultricies urna, non convallis ex pellentesque pellentesque. Integer eu mollis risus, quis aliquet turpis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed viverra semper molestie. Integer ac aliquam erat. Nullam vel consequat nunc, vitae scelerisque sapien.</p>
                                        </div>
                                        <div class="col-md-8 col-md-offset-2">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consectetur ultricies urna, non convallis ex pellentesque pellentesque. Integer eu mollis risus, quis aliquet turpis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed viverra semper molestie. Integer ac aliquam erat. Nullam vel consequat nunc, vitae scelerisque sapien.</p>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="col-md-12">
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
        <div class="divEdett"></div>
        <!--FOOTER -->
        <?php include("footer0.php"); ?>   
   </body>
</html>