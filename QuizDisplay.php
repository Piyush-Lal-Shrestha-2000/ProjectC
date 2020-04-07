<title>Display Quiz</title>
<?php
    function getNumberOfQuestions($C){
        //Getting number of questions in the database table
        $sql_code = "SELECT COUNT(*) FROM test_your_knowledge_quiz";
        $res = mysqli_query($C, $sql_code);
        $number_of_questions = 0;
        while($R = mysqli_fetch_array($res))
            $number_of_questions = $R[0];
        return $number_of_questions;
    }
    function getQuizRow($C, $id){
        $sql_code = "SELECT * FROM test_your_knowledge_quiz WHERE quiz_id = '".$id."'";
        $res = mysqli_query($C, $sql_code);
        return mysqli_fetch_array($res);   
    }
    function checkAnswer($a, $b){
        if( strcmp($a, $b) == 0 )
            return true;
        return false;
    }
?>
<?php
    //Connecting to the database
    $C = mysqli_connect("localhost", "root", "", "visualizer_19") or die("Error connecting to the database");
    $cols = getNumberOfQuestions($C);
    $i = 1;
    echo "<fieldset><form>";
        echo "Display a quiz by quiz id: <select name = 'selected_quiz_id'>";
        while($i <= $cols){
            echo "<option value = '".$i."'>".$i."</option>";
            $i++;
        }echo "</select>";
        echo " <input type = 'submit' value = 'Display' name = 'display_quiz' />";
    echo "</form>";
    if(isset($_GET['display_quiz'])){
        echo "<fieldset>";
        $quiz_id = $_GET['selected_quiz_id'];
        echo "<legend>Quiz ID: ".$quiz_id."</legend>";
        $row = getQuizRow($C, $quiz_id);
        $i = 0;
        $opt_num = 3;
        $option_head = array('A', 'B', 'C', 'D');
        echo "<form>";
            echo $quiz_id.". ".$row[1]."<br>";
            while($i < $row[2]){
                echo "<input type = 'submit' name = 'selected_option' value = '".$option_head[$i].". ".$row[$opt_num++]."' style = 'width: 200px;'><br>";
                $i++;
            }echo "<input type = 'hidden' name = 'correct_answer' value = '".$row['7']."'/>";
        echo "</form>";
        echo "</fieldset>";
    }echo "</fieldset>";
    if(isset($_GET['selected_option'])){
        $choice = $_GET['selected_option'];
        echo "Selected choice: ".$_GET['selected_option'][0];
        if(checkAnswer($_GET['selected_option'][0], $_GET['correct_answer']))
            echo " (Correct answer)";
        else{
            echo " (Incorrect answer)<br>";
            echo "Correct answer: ".$_GET['correct_answer'];
        }
    }
?>
