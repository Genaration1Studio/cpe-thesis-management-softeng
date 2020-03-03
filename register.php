
<?php
session_start();
include("conn.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
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
  <body>
		<div class="limiter">
			<div class="container-bg100">
				<div class="container-resgister">
					<div class="wrap-resgister">
						<form action="add_mem.php" class='needs-validation form-horizontal' role='form' medthod="post"  novalidate>
							<div class='col-md-10 col-md-offset-1 head-titel-register'>
							   <i class="fas fa-user-plus"></i>	ระบบสมัครสมาชิก
							</div>
							<hr width="100%" color="#FFFFFF"><p>
							<div class='form-group row'>
								<label class='col-md-3 col-form-label offset-md-1 label-form-register'  for="type">สถานะการสมัคร</label>
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
						<div class="invalid-tooltip"  data-placement="right">
							กรุณาเลือกสถานะการสมัคร
						</div>
							</div>
						</div>
							<div class="form-group row">
									 <label class='col-form-label col-md-2 offset-md-2 label-form-register' for="username">ชื่อผู้ใช้งาน</label>
								<div class='col-md-3'>
									<input class='form-control font_ek_14' name="username" placeholder='ชื่อผู้ใช้งาน' type='text' required>
										<div class="invalid-tooltip">
									กรุณากรอกชื่อบัญชีผู้ใช้งาน
									</div>
								</div>
							</div>
							<div class="form-group row">
								<label class='col-form-label col-md-2 offset-md-2 label-form-register'for="password" >รหัสผ่าน</label>
								<div class='col-md-3'>
									<input class='form-control font_ek_14' name="password" placeholder='รหัสผ่าน' type='password' required>
									<div class="invalid-tooltip">
										 กรุณากรอกรหัสผ่าน
									</div>
								</div>
							</div>
							<!--<div class="form-group row">
								<label class='col-form-label col-md-3 offset-md-1' id='label-form-register'for="re_password">ยืนยันรหัสผ่าน</label>
								<div class='col-md-3'>
									<input class='form-control' name="re_password" placeholder='ยืนยันรหัสผ่าน' type='password' required>
									<div class="invalid-tooltip">
									กรุณายืนยัน Password
									</div>
								</div>
							</div>-->
							<div class='form-group row'>
								<label class='col-form-label col-md-2 offset-md-2 label-form-register' for="title_name" >คำนำหน้าชื่อ</label>
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
								<label class='col-form-label col-md-2 offset-md-2 label-form-register' for="m_fname" >ชื่อ</label>
								<div class='col-md-4'>
									<input class='form-control font_ek_14' name="fname" placeholder='ชื่อ' type='text' required>
									<div class="invalid-tooltip">
									กรุณากรอกชื่อ
									</div>
								</div>
							</div>
							<div class="form-group row">
								<label class='col-form-label col-md-2 offset-md-2 label-form-register'  for="m_lname" >นามสกุล</label>
								<div class='col-md-4'>
									<input class='form-control font_ek_14' name="lname" placeholder='นามสกุล' type='text' required>
									<div class="invalid-tooltip">
									กรุณากรอกนามสกุล
									</div>
								</div>
							</div>
							<div class="form-group row">
								<label class='col-form-label col-md-2 offset-md-2 label-form-register' for="m_email" >อีเมล</label>
								<div class='col-md-4'>
									<input class='form-control font_ek_14' name="email" placeholder='อีเมล' type='email' pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
								autocomplete="off">
									<div class="invalid-tooltip">
									กรุณากรอกอีเมล
									</div>
								</div>
							</div>
							<!--<div class="form-group row">
								<label class='col-form-label col-md-2 offset-md-2' id='label-form-register' for="re_m_email">ยืนยันอีเมล</label>
								<div class='col-md-4'>
									<input class='form-control' name="re_email" placeholder='ยืนยันอีเมล' type='email' required>
									<div class="invalid-tooltip">
									กรุณาใส่ ยืนยันอีเมล
									</div>
								</div>
							</div>-->
							<div class="form-group row">
								<label class='col-form-label col-md-2 offset-md-2 label-form-register'  for="m_tel" >เบอร์โทรศัพท์</label>
								<div class='col-md-4'>
									<input class='form-control font_ek_14' name="tel" placeholder='เบอร์โทรศัพท์' type='text'  pattern="^0([8|9|6])([0-9]{8}$)" autocomplete="off" >
									<div class="invalid-tooltip">
									กรุณากรอกเบอร์โทรศัพท์ 10 หลัก
									</div>
								</div>
							</div>
							<div class='form-group row'>
								<label class='col-form-label col-md-2 offset-md-2 label-form-register'  for="fact_name" >คณะ</label>
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
								<label class='col-form-label col-md-2 offset-md-2 label-form-register' for="dapt_name" >สาขาวิชา</label>
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
							<div class="form-row">
								 <div class="form-group col-md-12 form-botton-register"  >
									 <input type="submit" name="submit_re"  class="btn btn-primary label-form-register" value="บันทึก"
										data-toggle="tooltip" data-placement="bottom" title="สร้างบัญชีผู้ใช้" />
										<input type="button" name="cen_re"  class="btn btn-danger label-form-register" value="ยกเลิก" onClick="window.location='index.php'"
									 data-toggle="tooltip" data-placement="bottom" title="ยกเลิก"  style="margin-left: 2rem"/>
								 </div>
					 	 </div>
							<!-- <div class='form-row' style="margin-top: 40px; text-align: center">
								<div class='col-md-3 col-sm-3' >
									<input type="submit" name="submit_re"  class="btn btn-primary label-form-register" value="บันทึก"
									 data-toggle="tooltip" data-placement="bottom" title="สร้างบัญชีผู้ใช้"/>
								</div>
								<div class='col-md-3 col-sm-3'>
									<input type="button" name="cen_re"  class="btn btn-danger label-form-register" value="ยกเลิก" onClick="window.location='index.php'"
								 data-toggle="tooltip" data-placement="bottom" title="ยกเลิก"/>
								</div>
							</div> -->
					</form>
				</div>
			</div>
		</div>
	</div>
	<!--===============================================================================================-->
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
