<?php
session_start();
include("conn.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Abount me</title>
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
	<!-- style -->
  <!--===============================================================================================-->
	<style>
			a.thesis-link{
				font-family: tahoma;
				font-size: 16px;
			}
			a.na-link {
			font-size: 16px;
			line-height: 1.7;
			color: #FFFFFF;
			margin: 0px;
			transition: all 0.4s;
			-webkit-transition: all 0.4s;
			-o-transition: all 0.4s;
			-moz-transition: all 0.4s;
			display: block;
			padding: .5rem 1rem;
			}

			a.na-link:focus {
			outline: none !important;
			}

			a.na-link:hover {
			text-decoration: none;
			/* color: #6a7dfe; */
				color: #FFFFFF;
		 text-shadow: 1px 1px 2px #6a7dfe, 0 0 25px #6a7dfe, 0 0 5px #6a7dfe;
			}
	</style>
	<!--===============================================================================================-->
  </head>
  <body>
		<div class="jumbotron jumbotron-fluid">
  <div class="container-fluid ">
		 <!-- <img src="public/images/LOGO_CPE_W.png" width="200px"/><br -->
    	<!-- <span class="titel-head-main">ระบบจัดการฐานข้อมูลปริญญานิพนธ์</span>
    <p class=""><span class="titel-head-main2">สาขาวิศวกรรมคอมพิวเตอร์  คณะวิศวกรรมศาสตร์และสถาปัตยกรรมศาสตร์ </span></p> -->
  </div>
</div>
	<!-- <header class="">
		<div class="container-fluid con-header align-items-center">
			<div class="row align-items-center">
		    <div class="col-md-4" style="text-align: right;">
		      <img src="public/images/LOGO_CPE_W.png" width="200px"/>
		    </div>
		    <div class="col">
					<div class="row">
							<span class="titel-head-main">ระบบจัดการฐานข้อมูลปริญญานิพนธ์</span>
					</div>
					<div class="row">
						<span class="titel-head-main2">สาขาวิศวกรรมคอมพิวเตอร์  คณะวิศวกรรมศาสตร์และสถาปัตยกรรมศาสตร์ </span>
					</div>
		    </div>
		  </div>
		</div>
	</header> -->
	<nav class="navbar navbar-expand-lg navbar-dark  bg-nave" style="padding: .1rem 1rem">
	  <div class="container">
	    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>

	    <div class="collapse navbar-collapse" id="navbarsExample07">
	      <ul class="navbar-nav mr-auto">
	        <li class="nav-item">
	          <a class="na-link" href="main.php" data-toggle="tooltip" data-placement="bottom"
 							 title="หน้าแรก">หน้าแรก <span class="sr-only">(current)</span></a>
	        </li>
					<li class="nav-item">
						<a class="na-link" href="conta.php" data-toggle="tooltip" data-placement="bottom"
 							 title="เกี่ยวกับเรา">เกี่ยวกับเรา <span class="sr-only">(current)</span></a>
					</li>
	        <!-- <li class="nav-item dropdown">
	          <a class="dropdown-toggle" href="#" id="dropdown07" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">การจัดการฐานข้อมูล</a>
	          <div class="dropdown-menu" aria-labelledby="dropdown07">
	            <a class="dropdown-item" href="#">ปริญญานิพนธ์</a>
	            <a class="dropdown-item" href="#">ประเภทปริญญานิพนธ์</a>
	            <a class="dropdown-item" href="#">ผู้จัดทำปริญญานิพนธ์</a>
							<a class="dropdown-item" href="#">ที่ปรึกษาปริญญานิพนธ์</a>
							<a class="dropdown-item" href="#">คณะ</a>
							<a class="dropdown-item" href="#">สาขาวิชา</a>
							<a class="dropdown-item" href="#">หลักสูตร</a>
							<a class="dropdown-item" href="#">คำนำหน้าชื้อ</a>
	          </div>
	        </li>
					<li class="nav-item dropdown">
						<a class="dropdown-toggle" href="#" id="dropdown07" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">การจัดการบัญชีสมาชิก</a>
						<div class="dropdown-menu" aria-labelledby="dropdown07">
							<a class="dropdown-item" href="#">สมาชิก</a>
							<a class="dropdown-item" href="#">ประเภทสมาชก</a>
						</div>
					</li> -->
	      </ul>
	      <form class="form-inline my-2 my-md-0">
					<ul class="navbar-nav mr-auto Font_Link">
						<li class="nav-item" >
								<a class="na-link" href="#" data-toggle="tooltip" data-placement="bottom"
     							 title="คุณคือผู้ใช้งานขณะนี้">
									<?php
												$username = $_SESSION[ "MemberID" ];
												 $sql = "SELECT titlename.TitleName_Th,member.Fname,member.Lname FROM titlename,member WHERE titlename.TitleNameID = member.TitleName AND member.MemID = '$username';";
												 $result = $link->query( $sql );
												if ( $result->num_rows == 0 ) {

													echo "เออเร่อ";
											}else{

												$row = $result->fetch_object();

												$name = $row->Fname;
												echo $row->TitleName_Th.$row->Fname." ".$row->Lname;
											}
										 ?>
								</a>
						</li>
						<li class="nav-item" >
								<a class="na-link" href="logout.php" data-toggle="tooltip" data-placement="bottom"
     							 title="ออกจากระบบ">ออกจากระบบ</a>
						</li>
					</ul>
	      </form>
	    </div>
	  </div>
	</nav>
  <div id="main">
		<div class="limiter">
		<div class="container-about">
			<div class="wrap-about">
				  <div class='col-md-10 col-md-offset-1 head-label-form-font'>
						  เกี่ยวกับเรา
			  </div>
					  <hr width="100%" color="#FFFFFF"><p>
				<div class="container-fluid" style="text-align: center">
						<img src="public/images/pic.png" width="500px"><br>
				</div>
			  <div  role="alert" style="text-align: center">
				<br>
				นายยุทธศาสตร์  นอขุนทด 59172110214-1<br>
				Email : Yudthasard.no@rmuti.ac.th <br>
				YouTube: Generation1Studio<br>
				FB: GolFza Pc'Yutthasard<br>
				Tel: 086-451-3711<br>
				<br>
				นายธรณัส	หิรัญอร 59172110240-5<br>
				Email : tharanat.hi@rmuti.ac.th <br>
				FB: T'Tharanat Hiranon<br>
				Tel: 096-006-5039<br>
        <br>
				นายวสุพล  พวงจันทึก 59172110376-7<br>
				Email : pon0814371860@gmail.com<br>
				FB: โมโลโซ แกร๊บฟู๊ดแพนด้า ผลิตจู๊ค<br>
				Tel: 094-521-5454<br>
				<br>
        นายธีรพล	ขอสินกลาง 59172110525-6<br>
				Email : s200441@hotmail.com <br>
				FB: Thiraphon khosinklang<br>
				Tel: 093-121-3889<br>
				<br>
        นายพิพัฒพงศ์	สุธรรมวิจิตร 59172110410-9<br>
				Email : phiphatphong@rmuti.ac.th <br>
				FB: Tuk Pipatpong<br>
				Tel: 087-0114929<br>
				<br>
				CPE.59241 <br>
				We're F is Coming. Computer Engineering #8.
				</div>



			</div>
			</div>

		</div>
  </div>
</div>
  <footer class="text-white-50 text-center Copyright-text">
		<small>
			Copyright &copy; 2019. Create By F is Coming. Computer Engineering #8. </br>
			Rajamangala University of Technology ISAN, Nakhonrachasima.
	 </small>
 </footer>
</body>

<!--===============================================================================================-->
 <script>
         function getSelectValue()
         {
             var selectedValue = document.getElementById("sq").value;
             if((selectedValue != '')&&(selectedValue != 'NULL'))
 			{
 					document.getElementById("keyword").disabled = false;
 			}else
 			{
 				document.getElementById("keyword").disabled = true;
 			}
         }
   </script>
 <!--===============================================================================================-->
	 <script>
		 (function()
			{
			 'use strict';
				 window.addEventListener('load', function()
			 {
				 var forms = document.getElementsByClassName('needs-validation');
				 // Loop over them and prevent submission
				 var validation = Array.prototype.filter.call(forms, function(form)
				 {
							 form.addEventListener('submit', function(event)
						 {
							 if (form.checkValidity() === false )
							 {
								 event.preventDefault();
								 event.stopPropagation();
							 }
							 form.classList.add('was-validated');
							 }, false);
				 });
				}, false);
		 })();
	 </script>
  <!--===============================================================================================-->
    <script src="public/select2/select2.min.js"></script>
  <!--===============================================================================================-->
    <script src="public/tilt/tilt.jquery.min.js"></script>
     <script >
		  $('.js-tilt').tilt({
        scale: 1.1
      })
    </script>
  <!--===============================================================================================-->
		<script>
			$(document).ready(function()
			{
				$('[data-toggle="tooltip"]').tooltip({ trigger: "hover" });
			});
		</script>
	<!--===============================================================================================-->
    <script src="public/js/login/main.js"></script>
  <!--===============================================================================================-->
</body>
</html>
