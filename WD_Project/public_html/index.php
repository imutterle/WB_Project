<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="it">
<head>
<!-- Viewport -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Tag META -->
<meta name="description" content="Descrizione della pagina">
<meta name="author" content="2R2M">
<!-- CSS -->
<link href="../css/bootstrap.css" rel="stylesheet">
<link href="https://getbootstrap.com/docs/3.3/examples/grid/grid.css" rel="stylesheet">

<!-- Head stuffs -->
<title>Progetto Web Design</title>

<meta http-equiv="description" content="page description" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />   
    
<!-- Custom CSS -->
<link href="../css/styleSheetProgetto.css" rel="stylesheet">
<link href="../css/footerWebPage.css" rel="stylesheet">
<!-- Script -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
</head>
<body>
    
        <div id="header" class="container-12">
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
                        <a class="navbar-brand">SpaceInvaderz</a>
                    </div>
                     <!-- Insieme di links, forms, and altri componenti per la navbar -->
                    <div class="collapse navbar-collapse" id="navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="#">About us</a>
                            </li>
                            <li>
                                <a href="#">Projects</a>
                            </li>
                            <li>
                                <a href="#">News</a>
                            </li>
                             <li>
                                <a href="#">Blog</a>
                            </li>
                            <li>
                                <a href="#">Gallery</a>
                            </li>
                            <li>
                                <a href="#">Shop</a>
                            </li>

                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <!-- Dichiarazione del munu --> 
                            <input type="text" name="search" placeholder="Search..">
                            
                        </ul>
                    </div>  
                 </div>
                </nav>
        </div>
        <div id="container" class="container-12">
        </div>    
            
        <?php include("footer.html"); ?>
</body>
</html>