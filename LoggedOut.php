<?php
    if(isset($_POST['loginSubmit'])){
        $un = $_POST['LoginUsername'];
        $pw = $_POST['LoginPassword'];
        $C = mysqli_connect("localhost", "root", "", "visualizer_19") or die("Connection error");
        $code = "SELECT * FROM user_login_details WHERE username = '".$un."'";
        $res = mysqli_query($C, $code);
        while($R = mysqli_fetch_array($res)){
            if(password_verify($pw, $R['user_password'])){
                $_SESSION['loggedIn'] = true;
                $_SESSION['msg'] = "Hello admin!";
            }else{
                $_SESSION['msg'] = "ERROR!";
            }
        }header("Location: V19Settings.php");
    }
?>
<div>
    <a class='nav-link' tabindex='-1' aria-disabled='false' data-toggle='modal' data-target='#LoginForm' href="V19MainPage.php?loc=login"><i class="fa fa-fw fa-sign-in"></i> Login</a>
</div>
