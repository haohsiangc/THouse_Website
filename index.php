<!DOCTYPE html>
<html>

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>梯.浩室Teahouse</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/creative.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="./img/portfolio/fullsize/logo.png" alt="T.House" width="70px" height="60px">  T.House</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">關於我們</a>
            <!-- </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Menu</a>
            </li> -->
             <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="./signin.php">會員登入</a>
            </li>
             <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="reservation.php">店內預約</a>
            </li>
             <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="pre-order.php">商品訂購</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">聯絡我們</a>
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

    <header class="masthead text-center text-white d-flex">
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h1 class="text-uppercase">
              <strong>梯.浩室</strong>
            </h1>
            <hr>
          </div>
          <div class="col-lg-8 mx-auto">
            <p class="text-faded mb-5">真要說一件關於你的事<br>那便是,你一轉身<br>我的想念就開始</p>
            <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">了解更多</a>
          </div>
        </div>
      </div>
    </header>

    <section class="bg-primary" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white">花點時間感受點不同的氣氛吧</h2>
            <hr class="light my-4">
            <p class="text-faded mb-4">希望你在這裡能找到自己心中<br>可以逃離到最安靜的地方</p>
            <a class="btn btn-light btn-xl js-scroll-trigger" href="./signin.php">開始吧</a>
          </div>
        </div>
      </div>
    </section>

    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">Let's Get In Touch!</h2>
            <hr class="my-4">
            <p class="mb-5">Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 ml-auto text-center">
            <i class="fas fa-phone fa-3x mb-3 sr-contact-1"></i>
            <p>07-5252000</p>
          </div>
          <div class="col-lg-4 mr-auto text-center">
            <i class="fas fa-envelope fa-3x mb-3 sr-contact-2"></i>
            <p>
              <a href="mailto:your-email@your-domain.com">T.House@teahouse.com</a>
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.min.js"></script>

  </body>

</html>
