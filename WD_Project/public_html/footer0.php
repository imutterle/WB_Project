<html>
    <?php include ("head0.html"); ?>
    <body>
        <div class="FP"></div>
        <footer class="footer footer-inverse navbar-fixed-bottom">

            <div class="footer-up">
                <div class="VociFooterAlte">
                    <a data-toggle="modal" data-target="#FormCU"><button type="button" class="btn">Contact Us</button></a>
                    <a data-toggle="modal" data-target="#FormNL"><button type="button" class="btn">Newsletter</button></a>
                </div>
            </div>

            <div class="footer">
                <div class="container">
                    <div class="social">
                               <a href="#"> <img src="../img/icona-facebook.png" width="30px" height="auto"> </a>
                               <a href="#"> <img src="../img/icona-twitter.png" width="30px" height="auto"> </a>
                               <a href="#"> <img src="../img/icona-YouTube.png" width="30px" height="auto"> </a>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <div class="VociFooterBasse">
                    <a href="terminiUso.php" class="FooterBasso">Terms of use</a>&nbsp;|
                    <a href="privacy.php" class="FooterBasso">Privacy</a>&nbsp;|
                    <a href="siteIndex.php" class="FooterBasso">Site Index</a>
                </div>
            </div>
        </footer>

        <!-- Costruzione Form Contact Us -->
        <div id="FormCU" class="modal fade" tabindex="-1" role="dialog">
              <div class="modal-dialog">
                    <div class="modal-content">
                            <div class="modal-body">
                                <form class="form-horizontal" action=" " method="post"  id="contact_form">
                                    <fieldset>
                                        <legend class="centro">Contact Us!<button type="button" class="close" data-dismiss="modal">&times;</button></legend>
                                    </fieldset>
                                    <div class="form-group">
                                            <div class="col-md-12">
                                                        <input class="form-control" name="first_name" placeholder="Enter full Name" type="text">
                                            </div>
                                            <div class="col-md-12">
                                                <select name="numero" class="form-control selectpicker">
                                                      <option>Select the reason to contact us</option>
                                                      <option>Job opportunity</option>
                                                      <option>General question</option>
                                                      <option>Question about experiences</option>
                                                      <option>Error reporting</option>
                                                      <option>Complaint</option>
                                                </select>
                                            </div>
                                            <div class="col-md-12">
                                                    <input class="form-control" name="e_mail" placeholder="Enter e-mail" type="text">
                                            </div>
                                            <div class="col-md-12">
                                                    <textarea class="form-control" name="message" placeholder="Message" type="text"></textarea>
                                            </div>
                                            <div class="col-md-12">
                                                    <button type="button" class="btn">Submit</button>
                                            </div>
                                     </div>
                                </form>
                            </div>
                    </div>
                </div>
        </div>

        <!-- Costruzione Form Newsletter -->
        <div id="FormNL" class="modal fade" tabindex="-1" role="dialog">
              <div class="modal-dialog">
                    <div class="modal-content">
                            <div class="modal-body">
                                <form class="form-horizontal" action=" " method="post"  id="contact_form">
                                    <fieldset>
                                        <legend class="centro">Newsletter<button type="button" class="close" data-dismiss="modal">&times;</button></legend>
                                    </fieldset>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <input class="form-control" name="e_mail" placeholder="Enter e-mail" type="text">
                                        </div>
                                        <div class="col-md-12">
                                            <button type="button" class="btn">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                    </div>
             </div>
        </div>
    </body>
</html>
