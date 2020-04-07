<?php
    session_start();
    if(!isset($_SESSION['loggedIn']))
        $_SESSION['loggedIn'] = false;
    if(!isset($_SESSION['msg']))
        $_SESSION['msg'] = "Blank";
    if(!isset($_SESSION['pageName']))
        $_SESSION['pageName'] = "";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Visualizer-19<?php echo $_SESSION['pageName']; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="MainStyle.css">
        <link rel = "icon" href = "Images/Visualizer19Logo1.png">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
         
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
    </head>
    <body>
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" id = "closeNav" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="V19MainPage.php?loc=news"><i class="fa fa-fw fa-newspaper-o"></i> News</a>
            <a href="V19Map.php"><i class="fa fa-fw fa-map-o"></i> Maps</a>
            <a href="V19MainPage.php?loc=lilockdown"><i class="fa fa-fw fa-lock"></i> Life in lockdown</a>
            <a href="V19MainPage.php?loc=tyknowledge"><i class="fa fa-fw fa-question"></i> Test your knowledge</a>
            <a href="V19MainPage.php?loc=aboutus"><i class="fa fa-fw fa-info-circle"></i> About us</a>
            <?php 
                if($_SESSION['loggedIn'])
                    include("loggedIn.php");
                else
                    include("loggedOut.php");
            ?>
        </div>

        <div id="main">
            <nav class="navbar navbar-dark bg-dark">
                <a class="navbar-brand" href="#" onclick="navOnOff()"><i class="fa fa-fw fa-bars"></i> Visualizer-19</a>
                <!-- <button class="navbar-toggler" type="button"  onclick="navOnOff()"  aria-expanded="false" aria-label="Toggle navigation">
                     Visualizer-19 -->
                    <!-- <span class="navbar-toggler-icon"></span>
                </button> -->
            </nav>
            <div id = "inner" onclick="closeNav()" class = "my-5">
                <?php
                    include("HandleLinks.php");
                ?>
                <?php 
                    // echo "Logged in status: ";
                    // if($_SESSION['loggedIn'])
                    //     echo "True";
                    // else
                    //     echo "False";
                    // echo "<br>Message: ".$_SESSION['msg'];
                ?>
            </div>
            <footer class="footer-section bg-with-black">
            <div class="footer-top-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="single-fta">
                                <h3 class="fta-title">Designed By</h3>
                                <img src="Skins/DoodleLogoDemo.png" alt="" height="60" width = "150">
                                <ul class="fta-list">
                                    <li><a href="V19MainPage.php?loc=aboutus"><i class="fa fa-fw fa-info-circle"></i> About us</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="single-fta">
                                <h3 class="fta-title">Find us in</h3>
                                <ul class="fta-list">
                                    <li><a href="#"><i class="fa fa-facebook-square"></i> Facebook</a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i> Twitter</a></li>
                                    <li><a href="#"><i class="fa fa-google"></i> Google</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="single-fta">
                                <h3 class="fta-title">Contact Us</h3>
                                <ul class="fta-list">
                                    <li><i class="fa fa-fw fa-address-card"></i> Address: XYZ</li>
                                    <li><i class="fa fa-fw fa-phone"></i> Phone: (+1) 96 716 6879</li>
                                    <li><a href = "mailto:"><i class="fa fa-fw fa-envelope"></i> Email: contact@site.com</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="single-fta">
                                <h3 class="fta-title">In association with</h3>
                                <ul class="fta-list single-line">
                                    <li><a href = "https://kathford.edu.np/" target="_blank"><img src = "Images/kathfordlogo.jfif" class = "rounded-circle" height="70" title="Kathford Nepal"></a></li>
                                    <li><a href = "https://edusanjal.com/event/code-cause-kathford-intl-college/" target="_blank"><img src = "Images/codeforcause.png" class = "rounded-circle" height="70" title="Kathford | Code For Cause 2020"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom-area">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="footer-bottom">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="fba-copyright">
                                            <p>Copyright © <?php echo date('Y'); ?> Visualizer-19. Designed by Doodle. All rights reserved.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </footer>
        </div>

        <script>
            var navOn = false;
            function navOnOff(){
                if(navOn)
                    closeNav();
                else
                    openNav();
            }
            function openNav() {
                document.getElementById("mySidenav").style.width = "205px";
                document.getElementById("main").style.marginLeft = "205px";
                document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
                navOn = !navOn;
            }
            function closeNav() {
                document.getElementById("mySidenav").style.width = "0";
                document.getElementById("main").style.marginLeft= "0";
                document.body.style.backgroundColor = "white";
                navOn = !navOn;
            }
    //         function doStuff(name, type) {
    //     // var options = {
    //     //     modal : true,
    //     //     height : 300,
    //     //     width : 500
    //     // };
    //     $('#demo-modal').load('test.php?type='+type+'&modal=' + name,
    //             function() {
    //                 $('#bootstrap-modal').modal({
    //                     show : true
    //                 });
    //             });
    // }
        </script>
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
    <!-- Footer -->

</html> 
<!-- MODALS -->

<!-- Login Form Modal -->
<div id="LoginForm" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Login Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-signin" method = "post">
                    <div class="form-label-group">
                        <label for="inputEmail">Username</label>
                        <input type="text" id="inputEmail" class="form-control" placeholder="Username" name = "LoginUsername" required autofocus>
                    </div>
                    <div class="form-label-group">
                        <label for="inputPassword">Password</label>
                        <input type="password" id="inputPassword" class="form-control" placeholder="Password" name = "LoginPassword" required> 
                    </div><br>
                    <button class="btn btn-lg btn-primary btn-block text-uppercase" id="submit" type="submit" name = "loginSubmit">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END OF LOGIN FORM MODAL -->
<!-- <div class="modal fade" id="bootstrap-modal" role="dialog">
        <div id="demo-modal"></div>
    </div> -->
<!-- END OF MODALS -->
