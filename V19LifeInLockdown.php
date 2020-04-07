<?php 
    $_SESSION['pageName'] = " | Life in lockdown";
    $_SESSION['inc'] = array(5, 5, 5, 5, 5, 5, 5);
    if(isset($_GET['index'])){
        $_SESSION['inc'][$_GET['index']] += 5; 
        /*Will use JQuery and all later on to properly address to it...*/
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Visualizer-19 | Life in lockdown</title>
</head>
<body>
    <?php 
        $cat = array();
        $C = mysqli_connect("localhost", "root", "", "visualizer_19") or die("ERROR");
        $sql = "SELECT DISTINCT life_in_lockdown_data_category FROM life_in_lockdown_data";
        $R = mysqli_query($C, $sql);
        $c = -1;
        while($res = mysqli_fetch_array($R)){
            $cat[++$c] = $res[0];
        }
        for($i = 0 ; $i <= $c ; $i++ ){
          
    ?>
            <div class="jumbotron m-5">
                <ul class="list-group" style="z-index: -1;">
                    <li  class="list-group-item bg-dark text-light"><h3 class="ml-2"><?php echo $cat[$i]; ?></h3></li>
                    <?php 
                        $sql0 = "SELECT life_in_lockdown_data_name, life_in_lockdown_data_link FROM life_in_lockdown_data WHERE     life_in_lockdown_data_category = '".$cat[$i]."' LIMIT ".$_SESSION['inc'][$i];
                        $R0 = mysqli_query($C, $sql0);
                        while($res0 = mysqli_fetch_array($R0)){
                            if($res0[1]!='')
                                echo "<li class='list-group-item'><a href = '".$res0[1]."' target='_blank'>".$res0[0]."</a></li>";
                            else
                                echo "<li class='list-group-item'>".$res0[0]."</li>";
                        }
                    ?>
                </ul>
                <button type="button" class="btn-info mt-1"><a href = "V19MainPage.php?loc=lilockdown&index=<?php echo $i; ?>" name = 'clicked' style="text-decoration:none; color:white;">Show more</a></button>
            </div>
    <?php 
        }
    ?>
</body>
</html>
