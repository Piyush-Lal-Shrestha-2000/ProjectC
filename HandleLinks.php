<?php
    if(isset($_GET['loc'])){
        $loc = $_GET['loc'];
        if($loc == "news"){
            include("V19News.php");
        }
        if($loc == "map"){
            include("V19Map.php");
        }
        if($loc == "lilockdown"){
            include("V19LifeInLockdown.php");
        }
        if($loc == "tyknowledge"){
            include("V19TestYourKnowledge.php");
        }
        if($loc == "aboutus"){
            include("V19AboutUs.php");
        }
        if($loc == "settings"){
            
            include("V19Settings.php");
        }
        if($loc == "logout"){
            echo "<p>Logged out...</p>";    
            session_destroy();
            header("Location: V19MainPage.php"); 
        }
    }else{
        //echo "<p>Default content here...</p>";
        include("V19News.php");
    }
?>
