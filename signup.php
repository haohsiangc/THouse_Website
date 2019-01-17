<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Join Us</title>
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
            <form action="add.php" method="POST">
                
                <!-- basic information -->
                <div class="form-group row">
                    <div class="col-sm-2">
                        <input type="text" class="form-control" name="mName" value="" placeholder="你的名字" required>
                    </div>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="mPhone" value="" placeholder="手機號碼" required>
                    </div>
                    <div class="col-sm-5">
                        <input type="email" class="form-control" name="mEmail" value="" placeholder="電子郵件" required>
                    </div>
                </div>
                <!-- End basic information -->
                
                <!-- member address -->
                <div class="form-group row">
                    <div class="col-sm-2">
                        <select class="form-control" name="city" required>
                            <option value="基隆市">基隆市</option>
                            <option value="台北市">台北市</option>
                            <option value="新北市">新北市</option>
                            <option value="宜蘭縣">宜蘭縣</option>
                            <option value="桃園市">桃園市</option>
                            <option value="新竹縣">新竹縣</option>
                            <option value="新竹市">新竹市</option>
                            <option value="苗栗縣">苗栗縣</option>
                            <option value="台中市">台中市</option>
                            <option value="彰化縣">彰化縣</option>
                            <option value="雲林縣">雲林縣</option>
                            <option value="南投縣">南投縣</option>
                            <option value="嘉義縣">嘉義縣</option>
                            <option value="嘉義市">嘉義市</option>
                            <option value="台南市">台南市</option>
                            <option value="高雄市">高雄市</option>
                            <option value="屏東縣">屏東縣</option>
                            <option value="台東縣">台東縣</option>
                            <option value="花蓮縣">花蓮縣</option>
                            <option value="澎湖縣">澎湖縣</option>
                            <option value="連江縣">連江縣</option>
                            <option value="金門縣">金門縣</option>
                            <option value="地址" selected disabled hidden>地址</option>
                        </select>
                    </div>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="county" value="" placeholder="區/鄉/鎮/市" required>
                    </div>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" name="addr" value="" placeholder="路名/街道/巷弄/戶號/樓層" required>
                    </div>
                </div>
                <!-- End member address -->

                <!--create password-->

                <!-- End create password -->
                <div class="form-group row">
                    <div class="col-sm-4">
                        <input type="password" id="paswd" class="form-control" name="mPaswd" value="" placeholder="建立密碼">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-4">
                        <input type="password" id="confirm_paswd" class="form-control" placeholder="確認密碼">
                    </div>
                </div>
                <!-- submit & reset button -->
                <div class="form-group row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-3">
                        <button type="submit" class="btn btn-primary btn-lg">加入梯浩室！</button>
                    </div>
                    <div class="col-sm-3">
                        <button type="reset" class="btn btn-outline-secondary btn-lg">啊！填錯了！</button>
                    </div>
                    <div class="col-sm-3"></div>
                </div>
                <!-- End submit & reset button -->
            
            </form>
        </div>
        <script src="text/javascript">
            str1 = document.getElementById('paswd');
            str2 = document.getElementById('confirm_paswd');
            if(str1 == str2){
                alert("密碼不一致，請重新確認");
                location.href="signup.html";
            }
        </script>
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    </body>
</html>