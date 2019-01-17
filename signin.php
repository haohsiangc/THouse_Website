<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Sign In</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <style>
            .page-content{position: absolute; top: 15%; left: 10%;}
        </style>    
    </head>
    <body>
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="index.html"><img src="./img/portfolio/fullsize/logo.png" alt="T.House"
                        width="70px" height="60px"> T.House</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#about">關於我們</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#services">Menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#about">會員專區</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#about">店內預約</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#about">商品訂購</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#portfolio">Photo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#contact">聯絡我們</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="page-content container py-5 main">
            <form action="login.php" method="POST">

                <!-- enter e-mail section -->
                <div class="form-group row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6">
                        <input type="email" class="form-control" name="mEmail" value="" placeholder="電子信箱">
                    </div>
                    <div class="col-sm-3"></div>
                </div>
                <!-- End enter e-mail section -->

                <!-- enter password section -->
                <div class="form-group row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6">
                        <input type="password" class="form-control" name="mPaswd" value="" placeholder="密碼">
                    </div>
                    <div class="col-sm-3"></div>
                </div>
                <!-- End enter password section -->

                <!-- sign in & sign up button -->
                <div class="form-group row">
                    <div class="col-sm-5"></div>
                    <div class="col-sm-1">
                        <button type="submit" class="btn btn-primary">登入</button>
                    </div>
                    <div class="col-sm-1">
                        <a href="signup.php"><button type="button" class="btn btn-outline-secondary">註冊</button></a>
                    </div>
                    <div class="col-sm-5"></div>
                </div>
                <!-- End sign in & sign up button -->
                
            </form>
        </div>

        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    </body>
</html>