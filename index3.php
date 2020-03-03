<?php
session_start();
include("conn.php");
include("auth.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
	<!-- icon -->
	<!--===============================================================================================-->
		<link rel="icon" type="image/png" href="public/favicon.ico"/>
  <!-- css -->
  <!--===============================================================================================-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous">
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="public/animate/animate.css">
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="public/css-hamburgers/hamburgers.min.css">
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="public/select2/select2.min.css">
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="public/css/login/util.css">
    <link rel="stylesheet" type="text/css" href="public/css/login/main.css">
  <!--===============================================================================================-->
    <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
  <!--===============================================================================================-->
  <!-- script -->
  <!--===============================================================================================-->
    <script src="public/js/app.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" crossorigin="anonymous"></script>
  <!--===============================================================================================-->
    <script src="https://kit.fontawesome.com/790878a58b.js" crossorigin="anonymous"></script>
  <!--===============================================================================================-->
  <!-- sweetalert -->
  <!--===============================================================================================-->
    <link href="public/css/sweetalert/sweetalert2.css" rel="stylesheet" />
    <script src="public/js/sweetalert/sweetalert2.min.js"></script>
  <!--===============================================================================================-->
  </head>
  <body class="d-flex flex-column">
    <div id="page-content">
      <!-- <div class="container text-center">
        <div class="row justify-content-center">
          <div class="col-md-7">
            <h1 class="font-weight-light mt-4 text-white">Sticky Footer using Flexbox</h1>
            <p class="lead text-white-50">Use just two Bootstrap 4 utility classes and three custom CSS rules and you will have a flexbox enabled sticky footer for your website!</p>
          </div>
        </div>
      </div> -->
      <div class="container-bg100">
    		<div class="container-login100">
    			<div class="wrap-login100">
            <span class="login100-form-title-head">
              ระบบจัดการฐานข้อมูลปริญญานิพนธ์ สาขาวิศวกรรมคอมพิวเตอร์
              <p style="padding-top: 0.5rem"></p>
              <hr width="100%" color="#FFFFF"/>
            </span>
    				<div class="login100-pic js-tilt" data-tilt>
    					<img src="public/images/logo_login.png" alt="IMG">
    				</div>

    				<form class="login100-form validate-form" action="ck_login.php" method="post">
    					<span class="login100-form-title">
    						เข้าสู่ระบบ
    					</span>
              <span class="login100-form-title-2" >
    						ระบบจัดการฐานข้อมูลปริญญานิพนธ์ <br />
                สาขาวิสาขาวิศวกรรมคอมพิวเตอร์
                <hr width="100%" color="#FFFFF"/>
    					</span>

    					<div class="wrap-input100 validate-input" data-validate = "กรุณากรอกชื่อบัญชีผู้ใช้งาน">
    						<input class="input100" type="text" name="username" placeholder="ชื่อบัญชีผู้ใช้">
    						<span class="focus-input100"></span>
    						<span class="symbol-input100">
                  <i class="fas fa-user" aria-hidden="true"></i>
    						</span>
    					</div>

    					<div class="wrap-input100 validate-input" data-validate = "กรุณากรอกรหัสผ่าน">
    						<input class="input100" type="password" name="pass" id="pass" placeholder="รหัสผ่าน">
    						<span class="focus-input100"></span>
    						<span class="symbol-input100">
    							<i class="fa fa-lock" aria-hidden="true"></i>
    						</span>
    					</div>

              <div class="wrap-show-hide-pass">
                <span  onclick="ShowPassword()">
                  <i class="far fa-eye" id="show-pass-icon"></i><i class="far fa-eye-slash" id="hide-pass-icon" style="display:none"></i>
                  <span id="text_pass">
                    แสดงรหัสผ่าน
                  </span>
                </span>
              </div>

    					<div class="container-login100-form-btn">
    						<button class="login100-form-btn">
    						  เข้าสู่ระบบ
    						</button>
    					</div>

    					<div class="text-center p-t-12">
    						<a class="txt2" href="#"  data-toggle="tooltip" data-placement="bottom" title="คุณลืมรหัสผ่านใช่หรือไม่ ?">
    							ลืมรหัสผ่าน ?
    						</a>
                <span class="txt1">
                  /
                </span>
                <a class="txt2" href="register.php">
                  สมัครสมาชิก
                </a>
    					</div>
    				</form>
    			</div>
    		</div>
    	</div>
    </div>
    <footer id="sticky-footer" class="py-4  text-white-50">
      <div class="container text-center">
        <small>Copyright &copy; Your Website</small>
      </div>
    </footer>
  </body>
</html>
