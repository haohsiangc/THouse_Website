<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>預約成功</title>
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
  	</style>
</head>
<body>
	<h1 class="orange" align="center">預約成功</h1>
	<div align="center">
		<button type="submit" class="button" style="vertical-align:middle" onclick="location.href='index.php'"><span>回首頁</span></button>
	</div>	
</body>
</html>