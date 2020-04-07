<html>
  <head>
        <title>Visualizer 19 | Home</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel = "stylesheet" href = "SideBarStyle.css">
        <link rel = "stylesheet" href = "PositionStyling.css">
        <link rel = "icon" href = "Images/Visualizer19Logo.png">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark headerNav">
        <a class="navbar-brand text-light" href="#">
            <img src="Images/Visualizer19Logo.png" height="25" width="20">
            Visualizer 19
        </a>
    </nav>
    <nav class="main-menu menuNav" style="margin-top: 57px; height: auto;">
            <ul>
                <li>
                    <a href="SideBarDemo.php?data=Home">
                        <i class="fa fa-home fa-2x"></i>
                        <span class="nav-text">Home</span>
                    </a>
                </li>
                <li>
                   <a href="SideBarDemo.php?data=Maps">
                        <i class="fa fa-map-marker fa-2x"></i>
                        <span class="nav-text">
                            Maps
                        </span>
                    </a>
                </li>
                <li>
                   <a href="SideBarDemo.php?data=Life%20in%20quarantine">
                        <i class="fa fa-lock fa-2x"></i>
                        <span class="nav-text">
                            Life in quarantine
                        </span>
                    </a>
                </li>
                <li>
                    <a href="SideBarDemo.php?data=Test%20your%20knowledge">
                        <i class="fa fa-question fa-2x"></i>
                        <span class="nav-text">
                            Test your knowledge
                        </span>
                    </a>
                    
                </li>
                <li>
                    <a href="SideBarDemo.php?data=Login">
                       <i class="fa fa-sign-in fa-2x"></i>
                        <span class="nav-text">
                            Login
                        </span>
                    </a>
                </li>
            </ul>

            <ul class="logout">
                <li>
                   <a href="SideBarDemo.php?data=Settings">
                        <i class="fa fa-cog fa-2x"></i>
                        <span class="nav-text">
                            Settings
                        </span>
                    </a>
                </li>
                <li>
                   <a href="SideBarDemo.php?data=Logout">
                        <i class="fa fa-power-off fa-2x"></i>
                        <span class="nav-text">
                            Logout
                        </span>
                    </a>
                </li>  
            </ul>
        </nav>
    <div class="area" style = "margin: 0 0 0 60px; padding: 5px; width: inherit; height: auto;">
        <?php
            echo "This is <u>";
            if(isset($_GET['data']))
                echo $_GET['data'];      
            else
                echo "Home";
            echo "</u> section.";
        ?>
    </div>
    <footer>
        
    </footer>
  </body>
</html>
