<?php 
    session_start();
    if($_SESSION['loggedIn'] == false){
        echo "<p>Nothing to display in here...</p>";
        return;
    }
    $_SESSION['pageName'] = " | Settings";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Visualizer-19 | Settings</title>
        <style type="text/css">
            body{
                background: rgb(247, 248, 252);
            } a{
                outline: 0;
            }
        </style>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet"> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <a href = "V19MainPage.php"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back to the main page</a>
        <div class="container">

            <h2>Settings</h2>
            <ul class="nav nav-pills">
                <li class="active"><a data-toggle="pill" href="#home">News</a></li>
                <li><a data-toggle="pill" href="#menu1">Maps</a></li>
                <li><a data-toggle="pill" href="#menu2">Life in lockdown</a></li>
                <li><a data-toggle="pill" href="#menu3">Test your knowledge</a></li>
            </ul>
            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                    <?php include("FormDemo.php"); ?>
                </div>
                <div id="menu1" class="tab-pane fade">
                    <?php include("FormDemo.php"); ?>
                </div>
                <div id="menu2" class="tab-pane fade">
                    <?php include("FormDemo.php"); ?>
                </div>
                <div id="menu3" class="tab-pane fade">
                        <?php include("FormDemo.php"); ?>
                </div>
            </div>
        </div>
    </body>
</html>
