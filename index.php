<?php
session_start();
if(isset($_SESSION['namauser']))
{
	print "<script>
	alert(\"Anda belum logout!\");
	location.href = \"home.php\";
	</script>";
}
else
{
	?>

<html>
<head>
	<title>Hebat-Art Login</title>
	<link rel="shortcut icon" type="image/jpg" href="images/bg.jpg">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<body>
		<center>
		<div class="container" style="width:530px;margin-top:15%;border:0px solid #000;">
			<div style="font-size:14px;color:#04B4AE;text-align:center;margin-bottom:10px;font-family:Segoe Print;"><!-- <b><i class="fa fa-envira"></i> Free Template's</b> --></div>

			<div style="font-size:40px;color:#e6be34;text-align:center;margin-bottom:20px;font-family:Bahnschrift SemiBold;"><b>Hebat-Art</b></div>
			<!-- <div style="font-size:14px;color:#eee;text-align:center;margin-bottom:40px;font-family:Candara;"><b>Sudah punya akun? <a href="" class="sa"><b style="font-size: 20px;"> Login! </b></a></b></div> -->
			<form action="aksi_login.php?act=login" method="post">
				<center>
					<input type="text" class="inp" placeholder="E Mail" name="user_name" style="width: 90%;" required/>
					<input type="password" class="inp" placeholder="Password" name="password" style="margin-bottom:25px; width: 90%;" required/>
					<center><button type="submit" style="width: 95px;" class="submit-last">Masuk</button></center>
				</center>
				<!-- <div style="font-size:14px;color:#fff;text-align:center;margin-bottom:15px;font-family:Calibri;"><b>Atau Login Dengan</b></div>
				<div class="container" style="border:0px solid #000;width:45%;">
					<a href="" class="salogo"><i  class ="logo-icon fa fa-facebook"></i></a>
					<a href="" class="salogo"><i  class ="logo-icon fa fa-twitter"></i></a>
					<a href="" class="salogo"><i  class ="logo-icon fa fa-pinterest"></i></a>
					<a href="" class="salogo"><i  class ="logo-icon fa fa-linkedin-square"></i></a>
					<Br></div>
				</div> -->
			</form>
		</body> 
		</center>
	</head>
	</html>
	<?php
}
	?>