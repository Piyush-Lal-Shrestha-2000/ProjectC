<title>Insert Quiz</title>
<style type="text/css">
    input{
        width: 1000px;
    }
</style>
<fieldset>
    <legend>Insert Quiz</legend>
    <form>
        <input type = "text" name = "quiz_question" placeholder = "Enter question here." required/><br>
        <input type = "number" name = "quiz_options" placeholder = "Enter number of options(min 2, max 4)." min = "2" max = "4" required/><br>
        <input type = "text" name = "quiz_option_A" placeholder = "Enter option A."/><br>
        <input type = "text" name = "quiz_option_B" placeholder = "Enter option B."/><br>
        <input type = "text" name = "quiz_option_C" placeholder = "Enter option C."/><br>
        <input type = "text" name = "quiz_option_D" placeholder = "Enter option D."/><br>
        Select correct answer: 
        <select name = "quiz_correct_answer">
            <option value = 'A'>A</option>
            <option value = 'B'>B</option>
            <option value = 'C'>C</option>
            <option value = 'D'>D</option>
        </select><br>
        <input type = "submit" name = "add_quiz" value = "Add Quiz" />
        <input type = "reset"
         value = "Clear Data" />
    </form>
</fieldset>
<?php
    if(isset($_GET['add_quiz'])){
        $C = mysqli_connect("localhost", "root", "", "visualizer_19") or die("Error connecting to the database");
        $quiz_question = $_GET['quiz_question'];
        $quiz_options = $_GET['quiz_options'];
        $quiz_option_A = $_GET['quiz_option_A'];
        $quiz_option_B = $_GET['quiz_option_B'];
        $quiz_option_C = $_GET['quiz_option_C'];
        $quiz_option_D = $_GET['quiz_option_D'];
        $quiz_correct_answer = $_GET['quiz_correct_answer'];
        $sql = "INSERT INTO test_your_knowledge_quiz(quiz_question, quiz_number_of_options, quiz_option_A, quiz_option_B, quiz_option_C, quiz_option_D, quiz_correct_answer_option_name) VALUES ('".$quiz_question."', '".$quiz_options."', '".$quiz_option_A."', '".$quiz_option_B."', '".$quiz_option_C."', '".$quiz_option_D."', '".$quiz_correct_answer."')";
        mysqli_query($C, $sql);
        echo "<a href = 'QuizDisplay.php' >Check newly inserted quiz.</a>";
    }
?>
