<!DOCTYPE html>
<?php 
session_start();
    if(!isset($_SESSION['loggedin'])){
        echo '<script type="text/javascript"> alert("請先登入或註冊!"); location.href="./index.php"; </script>';
    }
if(isset($_POST["action"])&&($_POST["action"]=="reser")){
  include("connMysql.php");
  if (!@mysqli_select_db($db_link, "teahouse")) die("資料庫選擇失敗！");
  $sql_query = "INSERT INTO `reservationlist` (`cName` ,`cPhone` ,`cQuantity` ,`cTime`) VALUES (";
  $sql_query .= "'".$_POST["cName"]."',";
  $sql_query .= "'".$_POST["cPhone"]."',";
  $sql_query .= "'".$_POST["cQuantity"]."',";
  $sql_query .= "'".$_POST["cTime"]."')";
  mysqli_query($db_link, $sql_query);
  //重新導向回到主畫面
  header("Location: reservation_success.php");
} 
?>
<html>          
<head>
  <meta charset="utf-8">
  <title>預約訂位</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <style type="text/css">
    .button {
      display: inline-block;
      border-radius: 4px;
      background-color: #f4511e;
      border: none;
      color: #FFFFFF;
      text-align: center;
      font-size: 28px;
      padding: 20px;
      width: 200px;
      transition: all 0.5s;
      cursor: pointer;
      margin: 5px;
    }
    .button span {
      cursor: pointer;
      display: inline-block;
      position: relative;
      transition: 0.5s;
    }

    .button span:after {
      content: '\00bb';
      position: absolute;
      opacity: 0;
      top: 0;
      right: -20px;
      transition: 0.5s;
    }

    .button:hover span {
      padding-right: 25px;
    }

    .button:hover span:after {
      opacity: 1;
      right: 0;
    }
    .orange{
      color: #f4511e;
    }
    #formAdd{
      position :absolute;
      top: 15%;
      left: 33%;
    }
  </style>
</head>
<body>
    <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
          <a class="navbar-brand js-scroll-trigger" href="index.php"><img src="./img/portfolio/fullsize/logo.png" alt="T.House"
                  width="70px" height="60px"> T.House</a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive"
              aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                      <a class="nav-link js-scroll-trigger" href="./index.php">關於我們</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link js-scroll-trigger" href="reservation.php">店內預約</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link js-scroll-trigger" href="pre-order.php">商品訂購</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link js-scroll-trigger" href="index.php">聯絡我們</a>
                  </li>
                  <li class="nav-item">
                      <span class="nav-link js-scroll-trigger text-white">
                          <?php
                              session_start();
                              if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
                              include("connMysql.php");
                              if(!mysqli_select_db($db_link, "teahouse")){
                                  die('couldnt connect database:' .mysqli_error());
                              }
                              $email = $_SESSION['login_user'];
                              $sql = "SELECT mName FROM member WHERE mEmail IN (SELECT mEmail FROM member WHERE mEmail = '$email')";
                              $result = mysqli_query($db_link,$sql);
                              $row = mysqli_fetch_assoc($result);
                                  echo "嗨".$row['mName'];
                              }
                          ?>
                      </span>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link js-scroll-trigger" href="logout.php">登出</a>
                  </li>
              </ul>
          </div>
      </div>
  </nav>
  <!-- <h1 class="orange" align="center">預約訂位</h1>
  <p class="orange" align="center"><a href="index.php">梯.浩室</a></p> -->
  <form action="" method="post" name="formAdd" id="formAdd">
    <table align="center" cellpadding="4">
      <tr>
        <td><label class="orange">會員姓名</label></td><td><input type="text" style="padding:10px" name="cName" id="cName" placeholder="你的名字"></td>
      </tr>
      <tr>
        <td><label class="orange">手機號碼</label></td><td><input type="text" style="padding:10px" name="cPhone" id="cPhone" placeholder="手機號碼"></td>
      </tr>
      <tr>
        <td><label class="orange">預約人數</label></td><td><input type="text" style="padding:10px" name="cQuantity" id="cQuantity" placeholder="預約人數"></td>
      </tr>
      <tr>
        <td><label class="orange">預約時間</label></td><td>
          <select name="cTime" style="padding:10px">
          　<option value="11:00">11:00</option>
          　<option value="13:00">13:00</option>
          　<option value="15:00">15:00</option>
            <option value="17:00">17:00</option>
          　<option value="19:00">19:00</option>
          </select></td>
      </tr>
      <tr>
        <td colspan="2" align="center">
        <input name="action" type="hidden" value="reser">
        <button type="submit" class="button" style="vertical-align:middle"><span>預約時間</span></button>
        </td>
      </tr>
    </table>
  </form>
</body>
</html>