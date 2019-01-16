<?php
    //connection configure
    //connect server
    $db_link = mysqli_connect("127.0.0.1","root","rootroot");
    if(!$db_link){
        die('database connect failed!'.mysqli_error());
    }
?>