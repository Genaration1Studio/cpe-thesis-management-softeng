<?php
session_start();
include("conn.php");
include("auth.php");
?>
<!DOCTYPE html>
<html lang="th"><!-- InstanceBegin template="/Templates/login.dwt.php" codeOutsideHTMLIsLocked="false" -->

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- InstanceBeginEditable name="doctitle" -->
<title>Login</title>
<!-- InstanceEndEditable -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1.0">
	<link rel="icon" type="image/png" href="images/icon/favicon.ico"/>
	<link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
	<link href="bootstrap/dist/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="Login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="Login/fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="Login/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="Login/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="Login/vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="Login/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="Login/vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="Login/css/util.css">
	<link rel="stylesheet" type="text/css" href="Login/css/main.css">
	<style>
		#labelH_form2_font {
			font-family: 'Sukhumvit Set';
			font-weight: 400;
			font-size: 18px;
			color: #FFFFFF;
		}

		.fitbot {
			position: fixed;
			left: 0;
			bottom: 0;
		}

		.nobreak {
			white-space: nowrap;
			overflow: hidden;
			text-overflow: ellipsis;
		}

		.destoydiv1 {
			margin-left: 23%;
		}

		.destoydiv2 {
			margin-left: 8%;
		}

		@media screen and (max-width: 1000px) {
			.destoydiv1 {
				margin-left: 23%;
			}
			.destoydiv2 {
				margin-left: 0%;
			}
		}

		@media screen and (max-width: 800px) {
			.destoydiv1 {
				margin-left: 23%;
			}
			.destoydiv2 {
				margin-left: 0%;
			}
			.nobreak {
				display: none;
			}
		}

		@media screen and (max-width: 500px) {
			.destoydiv1 {
				margin-left: 1%;
			}
			.destoydiv2 {
				margin-left: 0%;
			}
			.nobreak {
				display: none;
			}
		}
	</style>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>

<body id="page-site-index" style="padding-bottom: 70px">

	<div class="limiter">
		<div id="banner">
			<div id="wrapper">
				<div id="container">
					<img class="banner-img" src="images/login_01.jpg" alt="">
					</a>
				</div>
			</div>
		</div>
	</div>
	<nav class="nav">
     <marquee direction="left" scrollamount="6" style="font-family: 'PSL Kanda Modern'; font-size: 28px; color: #FFF; font-weight: bold;">
				  ♥ ยินดีต้อนรับเข้าสู่ระบบฐานข้อมูลปริญญานิพนธ์ สาขาวิชาวิศวกรรมคอมพิวเตอร์ คณะวิศวกรรมศาสตร์และสถาปัตยกรรมศาสตร์ มหาวิทยาลัยเทคโนโลยีราชมงคลอีสาน ศูนย์กลางนครราชสีมา ♥
	 </marquee>
	</nav>
	<main>
		<!-- InstanceBeginEditable name="Content" -->
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="ck_login.php" method="post" name="login">
					<span class="login100-form-title p-b-26">
						เข้าสู่ระบบ
					</span>
					<div class="wrap-input100 validate-input" data-validate = "กรุณาใส่ Username">
						<input class="input100" type="text" name="username" data-toggle="tooltip" data-placement="bottom" title="กรอก Username" autofocus>
						<span class="focus-input100" data-placeholder="Username"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="กรุณาใส่ Password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="pass" data-toggle="tooltip" data-placement="bottom" title="กรอก Password">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<a href="#">
							<button class="login100-form-btn">
								เข้าสู่ระบบ
							</button>
						</a>						</div>
					</div>

					<div class="text-center p-t-30 p-b-50">
						<a class="txt1" href="#"  data-toggle="tooltip" data-placement="bottom" title="คุณลืมรหัสผ่านใช่หรือไม่ ?">
							ลืมรหัสผ่าน ?
						</a>
						<span class="txt1" href="#">
							/
						</span>
						<a class="txt1" href="register.php"  data-toggle="tooltip" data-placement="bottom" title="คุณยังไม่มีบัญชีผู้ใช้ ?">
							สร้างบัญชีผู้ใช้
						</a>
					</div>
				</form>
			</div>
  </div>
</div>
<script src="Login/vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="Login/vendor/animsition/js/animsition.min.js"></script>
<script src="Login/vendor/bootstrap/js/popper.js"></script>
<script src="Login/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="Login/vendor/select2/select2.min.js"></script>
<script src="Login/vendor/daterangepicker/moment.min.js"></script>
<script src="Login/vendor/daterangepicker/daterangepicker.js"></script>
<script src="Login/vendor/countdowntime/countdowntime.js"></script>
<script src="Login/js/main.js"></script>
    <!-- InstanceEndEditable -->
	</main>

	<div class="limiter">
		<div id="banner">
			<div id="wrapper">
				<div id="container">
					<img class="banner-img" src="images/login_09.jpg" alt="">
					</a>
				</div>
			</div>
		</div>
	</div>
	<script src="jquery/jquery-3.3.1.js"></script>
	<script src="bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="bootstrap/dist/js/bootstrap.bundle.js"></script>
	<script>
		$(document).ready(function()
		{
			$('[data-toggle="tooltip"]').tooltip({ trigger: "hover" });
		});
	</script>
	<!---->
</body>

<!-- InstanceEnd --></html>
