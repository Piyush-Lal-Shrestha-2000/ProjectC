<?php
    session_start();
    $C = mysqli_connect("localhost", "root", "", "visualizer_19") or die("Error connecting to the database");
    if(!isset($_SESSION['visitedNumbers'], $_SESSION['totalScore'], $_SESSION['playCount'], $_SESSION['totalQues'] )){
        $_SESSION['visitedNumbers'] = array(); 
        $_SESSION['totalScore'] = 0;
        $_SESSION['playCount'] = 0;
        $_SESSION['totalQues'] = 0;
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Visualizer-19 | QUIZ BOX</title>
        <meta charset="utf-8">
        <style type="text/css">
            input{
                width: 500px!important;
            }
        </style>
        <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet"> 
    </head>
    <body>
        <a href = "V19MainPage.php"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back to the main page</a>
        <?php
            $_SESSION['totalQues'] = getQuestionCount($C); 
            loadQuestion($C, $_SESSION['totalQues']);
        ?>
    </body>
</html>
<?php 
    //functions
    function getQuestionCount($C){
        $sql = "SELECT COUNT(*) FROM test_your_knowledge_quiz";
        $count = 0;
        $R = mysqli_query($C, $sql);
        while($res = mysqli_fetch_array($R))
            $count = $res[0];
        return $count;
    }
    function getQuestion($C, $id){
        $sql = "SELECT * FROM test_your_knowledge_quiz WHERE quiz_id = '".$id."'";
        $RS = mysqli_query($C, $sql);
        return mysqli_fetch_array($RS);
    }
    function displayQuestion($row){
        echo "<fieldset>";
        echo "<legend>Quiz ID: ".$row['quiz_id']."</legend>";
        $i = 0;
        $opt_num = 3;
        $option_head = array('A', 'B', 'C', 'D');
        echo "<form method = 'post'>";
            echo ($_SESSION['playCount']+1).". ".$row[1]."<br>";
            while($i < $row[2]){
                echo "<input type = 'submit' name = 'selected_option' value = '".$option_head[$i].". ".$row[$opt_num++]."' style = 'width: 200px;'><br>";
                $i++;
            }echo "<input type = 'hidden' name = 'correct_answer' value = '".$row[7]."'/>";
        echo "</form>";
        echo "</fieldset>";
    }
    function loadQuestion($C, $totalQues){
        if($_SESSION['playCount'] == 5){
            exitGame();
            return;
        }
        $rn = 0;
        while(true){
            $rn = rand(1, $totalQues);
            if(!in_array($rn, $_SESSION['visitedNumbers'])){
                array_push($_SESSION['visitedNumbers'], $rn);
                break;
            }
        }
        $row = getQuestion($C, $rn);
        displayQuestion($row);
        $_SESSION['playCount']++;
    }
    function checkAnswer($cor, $sel){
        if( strcmp($cor, $sel[0]) == 0 )
            return true;
        return false;
    }
    function exitGame(){
        echo "<br>End of game";
        echo "<br>Final score: ".$_SESSION['totalScore'];
        echo "<br><a href = 'temp.php?again=yes'>Play again?</a>";
    }
    if(isset($_POST['selected_option'])){
        if(checkAnswer($_POST['correct_answer'], $_POST['selected_option'])){
            $_SESSION['totalScore']++;
        }    
    }
    if(isset($_GET['again'])){
        //session_destroy();
        unset($_SESSION['visitedNumbers']); 
        unset($_SESSION['totalScore']);
        unset($_SESSION['playCount']);
        unset($_SESSION['totalQues']);
        header("Location: temp.php");
    }
?>
