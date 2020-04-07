<?php 
    $_SESSION['pageName'] = " | Test your knowledge";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Visualizer-19 | Test your knowledge</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php 
        $cat = array();
        $C = mysqli_connect("localhost", "root", "", "visualizer_19") or die("ERROR");
        $sql = "SELECT DISTINCT data_category FROM test_your_knowledge_related_data";
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
                        $sql0 = "SELECT data_description, data_category FROM test_your_knowledge_related_data WHERE data_category = '".$cat[$i]."'";
                        $R0 = mysqli_query($C, $sql0);
                        while($res0 = mysqli_fetch_array($R0)){
                            echo "<li class='list-group-item'>".$res0[0]."</li>";
                        }
                    ?>
                </ul>
            </div>
    <?php 
        }
    ?>
    <a href = "temp.php" class = "mx-5"><button class = 'btn-info'>Play Quiz</button></a>
    </body>
</html>
