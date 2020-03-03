
<?php
session_start();
include("conn.php");
?>
<!DOCTYPE html>
<html lang="th"><!-- InstanceBegin template="/Templates/login.dwt.php" codeOutsideHTMLIsLocked="false" -->

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- InstanceBeginEditable name="doctitle" -->
<title>Register</title>
<!-- InstanceEndEditable -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1.0">
	<link rel="icon" type="image/png" href="Login/images/icons/icon.ico"/>
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
		<!-- InstanceBeginEditable name="Content" --><div class="limiter">
	<div class="container-login100">
		<div class="wrap-register">
      		  <form action="add_mem.php" class='needs-validation form-horizontal' role='form' medthod="post"  novalidate>
				  <div class='col-md-10 col-md-offset-1 labelH_form_font'>
					  ระบบสมัครสมาชิก
				  </div>
				  <hr width="100%" color="#FFFFFF"><p>
          <div class='form-group row'>
            <label class='col-md-3 col-form-label offset-md-1 label_form_font'  for="type" style="text-align: right">สถานะการสมัคร</label>
           <div class='col-md-3'>
             <select class='form-control cc-select font_ek_14' name="type" id"type" autofocus required>
					<option value="" selected="selected">กรุณาเลือก</option>	
                	<?php
							$sql = "SELECT * FROM membertype ORDER BY MemberTypeID ASC";
							$result = $link->query( $sql );
							while($row=$result->fetch_object())
							{
					?>
							<option value="<?php echo $row->MemberTypeID;?>"><?=$row->MemberType;?></option>
					<?php
							}
					?>
            </select>
			  <div class="invalid-tooltip">
          กรุณาเลือกสถานะการสมัคร
        </div>
          </div>
        </div>
		<div class="form-group row">
				 <label class='col-form-label col-md-2 offset-md-2 label_form_font' for="username" style="text-align: right">ชื่อผู้ใช้งาน</label>
			<div class='col-md-3'>
				<input class='form-control font_ek_14' name="username" placeholder='ชื่อผู้ใช้งาน' type='text' required>
				  <div class="invalid-tooltip">
        กรุณากรอก Username
        </div>
			</div>
		</div>
		<div class="form-group row">
			<label class='col-form-label col-md-2 offset-md-2 label_form_font'for="password" style="text-align: right">รหัสผ่าน</label>
			<div class='col-md-3'>
				<input class='form-control font_ek_14' name="password" placeholder='รหัสผ่าน' type='password' required>
				<div class="invalid-tooltip">
       		 กรุณากรอก Password
        </div>
			</div>
		</div>
		<!--<div class="form-group row">
			<label class='col-form-label col-md-3 offset-md-1' id='label_form_font'for="re_password">ยืนยันรหัสผ่าน</label>
			<div class='col-md-3'>
				<input class='form-control' name="re_password" placeholder='ยืนยันรหัสผ่าน' type='password' required>
				<div class="invalid-tooltip">
        กรุณายืนยัน Password
        </div>
			</div>
		</div>-->
		<div class='form-group row'>
			<label class='col-form-label col-md-2 offset-md-2 label_form_font' for="title_name" style="text-align: right">คำนำหน้าชื่อ</label>
			<div class='col-md-3'>
				<select class='form-control cc-select font_ek_14' name="title_name" required>
				<option value="">กรุณาเลือก</option>
						<?php
							$sql = "SELECT * FROM titlename ORDER BY TitleNameID ASC";
							$result = $link->query( $sql );
							while($row=$result->fetch_object())
							{
						?>
							<option value="<?php echo $row->TitleNameID;?>"><?=$row->TitleName_Th;?></option>
						<?php
							}
						?>
				</select>
				<div class="invalid-tooltip">
        กรุณาเลือกคำนำหน้าชื่อ
        </div>
			</div>
		</div>
		<div class="form-group row">
			<label class='col-form-label col-md-2 offset-md-2 label_form_font' for="m_fname" style="text-align: right">ชื่อ</label>
			<div class='col-md-4'>
				<input class='form-control font_ek_14' name="fname" placeholder='ชื่อ' type='text' required>
				<div class="invalid-tooltip">
        กรุณากรอกชื่อ
        </div>
			</div>
		</div>
		<div class="form-group row">
			<label class='col-form-label col-md-2 offset-md-2 label_form_font'  for="m_lname" style="text-align: right">นามสกุล</label>
			<div class='col-md-4'>
				<input class='form-control font_ek_14' name="lname" placeholder='นามสกุล' type='text' required>
				<div class="invalid-tooltip">
        กรุณากรอกนามสกุล
        </div>
			</div>
		</div>
		<div class="form-group row">
			<label class='col-form-label col-md-2 offset-md-2 label_form_font' for="m_email" style="text-align: right">อีเมล</label>
			<div class='col-md-4'>
				<input class='form-control font_ek_14' name="email" placeholder='อีเมล' type='email' pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
      autocomplete="off">
				<div class="invalid-tooltip">
        กรุณากรอกอีเมล
        </div>
			</div>
		</div>
		<!--<div class="form-group row">
			<label class='col-form-label col-md-2 offset-md-2' id='label_form_font' for="re_m_email">ยืนยันอีเมล</label>
			<div class='col-md-4'>
				<input class='form-control' name="re_email" placeholder='ยืนยันอีเมล' type='email' required>
				<div class="invalid-tooltip">
        กรุณาใส่ ยืนยันอีเมล
        </div>
			</div>
		</div>-->
		<div class="form-group row">
			<label class='col-form-label col-md-2 offset-md-2 label_form_font'  for="m_tel" style="text-align: right">เบอร์โทรศัพท์</label>
			<div class='col-md-4'>
				<input class='form-control font_ek_14' name="tel" placeholder='เบอร์โทรศัพท์' type='text'  pattern="^0([8|9|6])([0-9]{8}$)" autocomplete="off" >
				<div class="invalid-tooltip">
        กรุณากรอกเบอร์โทรศัพท์ 10 หลัก
        </div>
			</div>
		</div>
		<div class='form-group row'>
			<label class='col-form-label col-md-2 offset-md-2 label_form_font'  for="fact_name" style="text-align: right">คณะ</label>
			<div class='col-md-4'>
				<select name="fact_name" class='form-control cc-select font_ek_14' id="fact_name" onChange="getSelectValue();">
					<option value="NULL" selected="selected">กรุณาเลือก</option>
					<?php
							$sql = "SELECT * FROM faculty ORDER BY FacultyID ASC";
							$result = $link->query( $sql );
							while($row=$result->fetch_object())
							{
					?>
							<option value="<?php echo $row->FacultyID;?>"><?=$row->FacultyName_Th;?></option>
					<?php
							}
					?>
				</select>
			</div>
		</div>
		<div class='form-group row' id="dapt_name" >
			<label class='col-form-label col-md-2 offset-md-2 label_form_font' for="dapt_name" style="text-align: right">สาขาวิชา</label>
			<div class='col-md-4'>
				<select name="dept_name_se" class='form-control cc-select font_ek_14' id="dapt_name_se" >
					<option value="NULL" >กรุณาเลือกคณะ</option>
				</select>
				<select name="dept_bs" class='form-control cc-select font_ek_14' id="dapt_bs" style="display: none">
					<option  value=" " selected="selected">กรุณาเลือก</option>
					<?php
							$sql = "SELECT * FROM `department` WHERE DepartmentID BETWEEN 1500 AND 1599  ORDER BY DepartmentID ASC";
							$result = $link->query( $sql );
							while($row=$result->fetch_object())
							{
					?>
							<option value="<?php echo $row->DepartmentID;?>"><?=$row->DaptName_Th;?></option>
					<?php
							}
					?>
				</select>
				<select name="dept_bs"  class='form-control cc-select font_ek_14' id="dapt_bs" style="display: none">
					<option  value="NULL" selected="selected">กรุณาเลือก</option>
					<?php
							$sql = "SELECT * FROM `department` WHERE DepartmentID BETWEEN 1500 AND 1599  ORDER BY DepartmentID ASC";
							$result = $link->query( $sql );
							while($row=$result->fetch_object())
							{
					?>
							<option value="<?php echo $row->DepartmentID;?>"><?=$row->DaptName_Th;?></option>
					<?php
							}
					?>
				</select>
				<select name="dept_sci" class='form-control cc-select font_ek_14' id="dapt_sci" style="display: none">
					<option  value="NULL" selected="selected">กรุณาเลือก</option>
					<?php
							$sql = "SELECT * FROM `department` WHERE DepartmentID BETWEEN 1600 AND 1699  ORDER BY DepartmentID ASC";
							$result = $link->query( $sql );
							while($row=$result->fetch_object())
							{
					?>
							<option value="<?php echo $row->DepartmentID;?>"><?=$row->DaptName_Th;?></option>
					<?php
							}
					?>
				</select>
				<select name="dept_ea" class='form-control cc-select font_ek_14' id="dapt_ea" style="display: none">
					<option value=" " selected="selected">กรุณาเลือก</option>
					<?php
							$sql = "SELECT * FROM `department` WHERE DepartmentID BETWEEN 1700 AND 1799  ORDER BY DepartmentID ASC";
							$result = $link->query( $sql );
							while($row=$result->fetch_object())
							{
					?>
							<option value="<?php echo $row->DepartmentID;?>"><?=$row->DaptName_Th;?></option>
					<?php
							}
					?>
				</select>
				<select name="dept_art" class='form-control cc-select font_ek_14' id="dapt_art" style="display: none">
					<option  value="NULL" selected="selected">กรุณาเลือก</option>
					<?php
							$sql = "SELECT * FROM `department` WHERE DepartmentID BETWEEN 1800 AND 1899  ORDER BY DepartmentID ASC";
							$result = $link->query( $sql );
							while($row=$result->fetch_object())
							{
					?>
							<option value="<?php echo $row->DepartmentID;?>"><?=$row->DaptName_Th;?></option>
					<?php
							}
					?>
				</select>
			</div>
		</div>
          <div class='form-group row' style="margin-top: 40px; text-align: center">
            <div class='offset-md-3 col-md-3' style="margin-left: 180px">
				<input type="submit" name="submit_re"  class="btn btn-primary label_form_font" value="บันทึก"
					   data-toggle="tooltip" data-placement="bottom" title="สร้างบัญชีผู้ใช้"/>
            </div>
            <div class='col-md-1'>
				<input type="button" name="cen_re"  class="btn btn-danger label_form_font" value="ยกเลิก" onClick="window.location='index.php'"
					   data-toggle="tooltip" data-placement="bottom" title="ยกเลิก"/>
            </div>
          </div>
        </form>
		</div>
	</div>
</div>
  <script>
        function getSelectValue()
        {
            var selectedValue = document.getElementById("fact_name").value;
            if(selectedValue == '1500')
			{
				$('#dapt_name_se').hide();
				$('#dapt_bs').show();
				$('#dapt_sci').hide();
				$('#dapt_art').hide();
				$('#dapt_ea').hide();

			}
			else if(selectedValue == '1600')
			{

				$('#dapt_name_se').hide();
				$('#dapt_bs').hide();
				$('#dapt_sci').show();
				$('#dapt_art').hide();
				$('#dapt_ea').hide();
			}
			else if(selectedValue == '1800')
			{

				$('#dapt_name_se').hide();
				$('#dapt_bs').hide();
				$('#dapt_sci').hide();
				$('#dapt_art').show();
				$('#dapt_ea').hide();

			}
			else if(selectedValue == '1700')
			{

				$('#dapt_name_se').hide();
				$('#dapt_bs').hide();
				$('#dapt_sci').hide();
				$('#dapt_art').hide();
				$('#dapt_ea').show();
			}
			else
			{
				$('#dapt_name_se').show();
				$('#dapt_bs').hide();
				$('#dapt_sci').hide();
				$('#dapt_art').hide();
				$('#dapt_ea').hide();

			}
        }
  </script>
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function()
 {
  'use strict';
  	window.addEventListener('load', function()
	{
		// Fetch all the forms we want to apply custom Bootstrap validation styles to
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