<?php
    session_start();
    include("connMysql.php");
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(!mysqli_select_db($db_link,"teahouse")){
            die('couldnt connect database'.mysqli_error());
        }
        $email = $_POST['mEmail'];
        $paswd = $_POST['mPaswd']; 
        if($email == "" || $paswd == ""){
            echo '<script type="text/javascript"> alert("請輸入帳號和密碼!"); location.href="./signin.php"; </script>';
        }
        $sql_query = "SELECT `mEmail`,`mPaswd` FROM member WHERE mEmail = '$email' AND mPaswd = '$paswd'";
        $result = mysqli_query($db_link,$sql_query);
        $count = mysqli_num_rows($result);
        if($count == 1){
            $_SESSION['login_user'] = $email;
            header("location:index.html");
        } else{
            echo "invalid Email or Password";
        }
    }
?>