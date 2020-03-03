<?php
session_start();
include("conn.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CPE THESIS MANAGEMENT</title>
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
  </div>
</div>
	<nav class="navbar navbar-expand-lg navbar-dark  bg-nave" style="padding: .1rem 1rem">
	  <div class="container">
	    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarsExample07">
	      <ul class="navbar-nav mr-auto">
	        <li class="nav-item">
	          <a class="na-link" href="admin.php" data-toggle="tooltip" data-placement="bottom"
 							 title="หน้าแรก">หน้าแรก <span class="sr-only">(current)</span></a>
	        </li>
	        <li class="nav-item dropdown">
	          <a class="dropdown-toggle na-link" href="#" id="dropdown07" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >การจัดการฐานข้อมูล</a>
	          <div class="dropdown-menu" aria-labelledby="dropdown07">
							<a class="dropdown-item" href="admin.php" data-toggle="tooltip" data-placement="right" title="ปริญญานิพนธ์">ปริญานิพนธ์</a>
							<a class="dropdown-item" href="category.php" data-toggle="tooltip" data-placement="right" title="ประเภทปริญญานิพนธ์">ประเภทปริญานิพนธ์</a>
							<a class="dropdown-item" href="provider.php" data-toggle="tooltip" data-placement="right" title="ผู้จัดทำปริญญานิพนธ์">ผู้จัดทำปริญานิพนธ์</a>
							<a class="dropdown-item" href="advisor.php" data-toggle="tooltip" data-placement="right" title="อาจารย์ที่ปรึกษาปริญญานิพนธ์">อาจารย์ที่ปรึกษาปริญานิพนธ์</a>
							<a class="dropdown-item" href="faculty.php" data-toggle="tooltip" data-placement="right" title="คณะ">คณะ</a>
							<a class="dropdown-item" href="department.php" data-toggle="tooltip" data-placement="right" title="สาขาวิชา">สาขาวิชา</a>
							<a class="dropdown-item" href="course.php" data-toggle="tooltip" data-placement="right" title="หลักูตร">หลักูตร</a>
							<a class="dropdown-item" href="titlename.php" data-toggle="tooltip" data-placement="right" title="คำนำหน้าชื่อ">คำนำหน้าชื่อ</a>
	          </div>
	        </li>
					<li class="nav-item dropdown">
						<a class="dropdown-toggle na-link" href="#" id="dropdown07" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">การจัดการบัญชีสมาชิก</a>
						<div class="dropdown-menu" aria-labelledby="dropdown07">
							<a class="dropdown-item" href="member.php" data-toggle="tooltip" data-placement="right" title="สมาชิก">สมาชิก</a>
				<a class="dropdown-item" href="membertype.php" data-toggle="tooltip" data-placement="right" title="ประเภทสมาชิก">ประเภทสมาชิก</a>
						</div>
					</li>
	      </ul>
	      <form class="form-inline my-2 my-md-0">
					<ul class="navbar-nav mr-auto Font_Link">
						<li class="nav-item" >
								<a class="na-link" href="#" data-toggle="tooltip" data-placement="bottom"
		 							 title="คุณคือผู้ดูแลระบบ">
									<?php
												$username = @$_SESSION[ "AdminID" ];
												 $sql = "SELECT admin.Fname, admin.Lname FROM admin WHERE admin.AdminID = '$username';";
												 $result = $link->query( $sql );
												if ( $result->num_rows == 0 ) {

													echo "เออเร่อ";
											}else{
												$row = $result->fetch_object();
												echo $row->Fname." ".$row->Lname;
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
		 <div class="container-main">
			 <div class="wrap-main">
				 <form action="edit_thesis.php" class='needs-validation form-horizontal' role='form'  novalidate>
								 <div class='col-md-10 col-md-offset-1 labelH_form_font'>
									แก้ไขข้อมูลปริญญานิพนธ์
								 </div>
				 <hr width="100%" color="#FFFFFF"><p>
				 <div class="col-lg-12 col-md-offset-1">
									<table class="table table-striped" style="width: 100%">
										<?php
											$tid = stripslashes( $_REQUEST[ 'tid' ] ); // removes backslashes
											$tid = mysqli_real_escape_string( $link, $tid ); //escapes special characters in a string
											$sql ="SELECT `thesis`.`ThesisID` AS tid,thesis.Thesis_Year AS ty,thesis.Title_Th AS tn_th,thesis.`Title_En` AS tn_en,
																	category.Category_Th AS tc_th,category.`Category_En` AS tc_en,
																	CONCAT(t1.`TitleName_Th`,`provider`.`Fname_Th`,' ',`provider`.`Lname_Th`)AS pn_th,
																	CONCAT(t1.`TitleName_En`,`provider`.`Fname_En`,' ',`provider`.`Lname_En`) AS pn_en,
																	CONCAT(t2.`TitleName_Th`,`advisor`.`Fname_Th`,' ',`advisor`.`Lname_Th`)AS an_th,
																	CONCAT(t2.`TitleName_En`,`advisor`.`Fname_En`,' ',`advisor`.`Lname_En`) AS an_en,
																	`thesis`.`Abstract_Th` AS tab_th,`thesis`.`Abstract_En` AS tab_en,`thesis`.`LocationCollection` AS tlo
																	FROM thesis LEFT OUTER JOIN category ON thesis.Category = category.CategoryID
																	LEFT OUTER JOIN provider ON provider.Thesis = thesis.ThesisID
																	LEFT OUTER JOIN `titlename` AS t1 ON t1.TitleNameID = `provider`.TitleName
																	LEFT OUTER JOIN provider_advisor ON provider_advisor.Provider = provider.ProviderID
																	LEFT OUTER JOIN advisor ON advisor.AdvisorID = provider_advisor.Advisor
																	LEFT OUTER JOIN titlename AS t2 ON t2.TitleNameID = `advisor`.TitleName
																	WHERE thesis.ThesisID = $tid
																	GROUP BY `ThesisID` ORDER BY Thesis_Year ASC ;";
																	$result=$link->query($sql);

												 while($row1=$result->fetch_object())
												 {
									 ?>
												<tbody>
													<tr>
													 <td width="100%">
													 <div class="form-group row">
														 <label class='col-form-label col-md-2'for="tname_th" >หัวข้อปริญญานิพนธ์ : </label>
													 <div class='col-md-8'>
														 <input class='form-control' name="tname_th" placeholder='ชื่อหัวข้อปริญญานิพนธ์' type='text'autofocus value="<?php echo $row1->tn_th;?>" required>
														 <div class="invalid-tooltip">
														 กรุณากรอกหัวข้อปริญญานิพนธ์ (ไทย)
														 </div>
													 </div>

													 </div>
													 <div class="form-group row">
														 <label class='col-form-label col-md-2'for="tname_en" >Titel : </label>
													 <div class='col-md-8'>
														 <input class='form-control' name="tname_en" placeholder='Titel' type='text' value="<?php echo $row1->tn_en;?>" required>
														 <div class="invalid-tooltip">
														 กรุณากรอกหัวข้อปริญญานิพนธ์ (อังกฤษ)
														 </div>
													 </div>

													 </div>
													 </td>
													</tr>
												 <tr>
													 <td width="100%">
													 <div class="form-group row">
														 <label class='col-form-label col-md-2'for="tid" >รหัสปริญญานิพนธ์ : </label>

													 <div class='col-md-2'>
														 <input class='form-control' name="tid" placeholder='รหัสปริญญานิพนธ์' type='text'  pattern="([0-9]{1,4}$)" value="<?php echo $row1->tid;?>" readonly required>
														 <div class="invalid-tooltip">
														 กรุณากรอกรหัสปริญญานิพนธ์ เป็นตัวเลข 0-9
														 </div>
													 </div>
													 &emsp;&emsp;&emsp;
														 <label class='col-form-label col-md-2'for="tc">ประเภท : </label>
													 <div class='col-md-3'>
													 <select class="form-control cc-select" name="tc" id="tc" required>
														 <option value="" selected>กรุณาเลือก</option>
															 <?php
																 $sql = "SELECT `CategoryID` AS cid,`Category_Th` AS ctth,`Category_En` AS cte FROM `category`;";
																 $result = $link->query($sql);
																 while($row=$result->fetch_object())
																 {
															 ?>
																	 <option value="<?php echo $row->cid;?>"
															 <?php
																	 if($row->ctth==$row1->tc_th)
																	 {
															 ?>
																			 selected
															 <?php
																	 }
															 ?>

																	 ><?=$row->ctth." &nbsp;".$row->cte;?></option>
															 <?php
																 }
															 ?>
															 <option value="NULL">ไม่มีประเภท</option>
														 </select>
														 <div class="invalid-tooltip">
														 กรุณาเลือกประเภทปริญญานิพนธ์
														 </div>
													 </div>
													 </div>
													 <div class="form-group row">
														 <label class='col-form-label col-md-2'for="ty" >ปีที่จัดทำ : </label>
													 <div class='col-md-2'>
														 <input class='form-control' name="ty" placeholder='ปีที่จัดทำ' type='text' pattern="([0-9]{1,4}$)" value="<?php echo $row1->ty;?>" required>
														 <div class="invalid-tooltip">
														 กรุณากรอกปีที่จัดทำ เป็น พ.ศ.
														 </div>
													 </div>
													 &emsp;&emsp;&emsp;
														 <label class='col-form-label col-md-2'for="tl" >สถานที่จัดเก็บ : </label>
													 <div class='col-md-2'>
														 <input class='form-control' name="tl" placeholder='สถานที่จัดเก็บ' type='text' value="<?php echo $row1->tlo;?>" required>
														 <div class="invalid-tooltip">
														 กรุณากรอกสถานที่จัดเก็บ
														 </div>
													 </div>
													 </div>
													 </td>
													</tr>
													 <tr>
													 <td width="100%">
														 <div class="form-group row" style="margin: 0px 2px 0px 2px">
															 <label for="">บทคัดย่อ :</label>
															 <textarea class="form-control" id="ab_th"  name="ab_th" rows="8" pattern="^[ก-๙0-9-_\.]{1,255}$"   required><?php echo $row1->tab_th;?></textarea>
															 <div class="invalid-tooltip">
														 กรุณากรอกบทคัดย่อ (ไทย)
														 </div>
															 </div>
													 </td>
													</tr>
														<tr>
													 <td width="100%">
														 <div class="form-group row" style="margin: 0px 2px 0px 2px">
															 <label for="">Abstract :</label>
															 <textarea class="form-control" id="ab_en" name="ab_en" rows="8" pattern="^[a-zA-Z0-9-_\.]{1,255}$"  required><?php echo $row1->tab_en;?></textarea>
															 <div class="invalid-tooltip">
														 กรุณากรอกบทคัดย่อ (อังกฤษ)
														 </div>
															 </div>
														 <br>
															<div class='form-group row' style="margin-top: 40px; text-align: center">
														 <div class='offset-md-3 col-md-3' style="margin-left: 280px">
															 <input type="submit" name="submit_re"  class="btn btn-primary label_form_font" value="บันทึก"
																		data-toggle="tooltip" data-placement="bottom" title="เพิ่มข้อมูล"/>
														 </div>
														 <div class='col-md-1'>
															 <input type="button" name="cen_re"  class="btn btn-danger label_form_font" value="ยกเลิก" onClick="window.location='index.php'"
																		data-toggle="tooltip" data-placement="bottom" title="ยกเลิก"/>
														 </div>
														 </div>

													 </td>
													</tr>
												</tbody>
								 <?php
										 }
								 ?>
									 </table>
					 </div>
					 </form>
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
