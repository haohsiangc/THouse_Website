<!DOCTYPE html>
<?php
  session_start();
    if(!isset($_SESSION['loggedin'])){
        echo '<script type="text/javascript"> alert("請先登入或註冊!"); location.href="./index.php"; </script>';
    }
if(isset($_POST["action"])&&($_POST["action"]=="add")){
  include("connMysql.php");
  if (!@mysqli_select_db($db_link, "teahouse")) die("資料庫選擇失敗！");
  $sql_query = "INSERT INTO `orderlist` (`cName` ,`cPhone` ,`pName` ,`pQuantity` ,`pAddress`) VALUES (";
  $sql_query .= "'".$_POST["cName"]."',";
  $sql_query .= "'".$_POST["cPhone"]."',";
  $sql_query .= "'".$_POST["pName"]."',";
  $sql_query .= "'".$_POST["pQuantity"]."',";
  $sql_query .= "'".$_POST["pAddress"]."')";
  mysqli_query($db_link, $sql_query);
  //重新導向回到主畫面
  header("Location: preorder_success.php");
} 
?>
<html>          
<head>
  <meta charset="utf-8">
  <title>商品訂購</title>
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
  <!-- <h2 class="orange" align="center">商品訂購</h2> -->
  <!-- <p class="orange" align="center"><a href="index.php">梯.浩室</a></p> -->
  <form action="" method="post" name="formAdd" id="formAdd">
    <table align="center" cellpadding="4">
      <tr>
        <td><label class="orange">會員姓名</label></td><td><input type="text" style="padding:10px" name="cName" id="cName" placeholder="你的名字"></td>
      </tr>
      <tr>
        <td><label class="orange">手機號碼</label></td><td><input type="text" style="padding:10px" name="cPhone" id="cPhone" placeholder="手機號碼"></td>
      </tr>
      <tr>
        <td><label class="orange">訂購產品</label></td><td>
        <input type="radio" name="pName" id="radio" value="紅茶包" checked>紅茶包(100元)<br>
        <input type="radio" name="pName" id="radio" value="綠茶包">綠茶包(150元)<br>
        <input type="radio" name="pName" id="radio" value="烏龍茶包">烏龍茶包(100元)<br>
        <input type="radio" name="pName" id="radio" value="鐵觀音">鐵觀音(80元)
        </td>
      </tr>
      <tr>
        <td><label class="orange">訂購數量</label></td><td><input type="text" style="padding:10px" name="pQuantity" id="pQuantity" placeholder="訂購數量"></td>
      </tr>
      <tr>
        <td><label class="orange">寄送地址</label></td><td><input name="pAddress" type="text" style="padding:10px" id="pAddress" size="50" placeholder="寄送地址"></td>
      </tr>
      <tr>
        <td colspan="2" align="center">
        <input name="action" type="hidden" value="add">
        <button type="submit" class="button" style="vertical-align:middle"><span>訂購商品</span></button>
        </td>
      </tr>
    </table>
  </form>
</body>
</html>