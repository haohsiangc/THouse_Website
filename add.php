<?php
     $addr = $_POST['city'].$_POST['county'].$_POST['addr'];

    include("connMysql.php");
    if(!mysqli_select_db($db_link, "teahouse")){
        die('couldnt connect database:' .mysqli_error());
    }
    $sql_query = "INSERT INTO `member` (`mName`, `mPhone`, `mEmail`, `mAddr`, `mPaswd`) VALUES (";
	$sql_query .= "'".$_POST["mName"]."',";
    $sql_query .= "'".$_POST["mPhone"]."',";
    $sql_query .= "'".$_POST["mEmail"]."',";
    $sql_query .= "'".$addr."',";
    $sql_query .= "'".$_POST["mPaswd"]."')";
    if(mysqli_query($db_link,$sql_query)){
        //echo "data inserted"."<br>";
        echo '<script type="text/javascript"> alert("註冊成功!"); location.href="./index.html"; </script>';
    }
    else{
        echo "Error inserting database:" .mysqli_error();
    }
 ?>