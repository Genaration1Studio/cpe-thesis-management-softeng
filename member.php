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
		 <div class="container-mem">
			 <div class="wrap-mem">
				 <form action="member.php" class='needs-validation form-horizontal  table-striped' id="formsq" role='form' method="post" novalidate>
				 		<div class="row align-items-center">
				 		<div class='col-md-10 col-md-offset-1 labelH_form_font'>
				 			สมาชิก
				 		</div>
				 		 <div class="col-2" style="text-align: right">
				 				<button class="btn btn-success btn-sm" type="button" name="add" id="add" onClick="show_md();" data-toggle="tooltip" data-placement="bottom" title="เพิ่มข้อมูล">เพิ่มข้อมูล</button>
				 	 </div>
				 	</div>
				 		<hr width="100%" color="#FFFFFF"><p>
				 		<div class='form-group row search-group'>
				 <label class='col-form-label label_form_font'  style="text-align: right">สืบค้นโดย</label>
				 		 <div class='col-md-2'>
				 			 <select class='form-control cc-select font_ek_14' id="sq" name="sq"  onChange="getSelectValue();" required>
				 		<option value="" selected>กรุณาเลือก</option>
				 		<option value="mid">รหัสสมาชิก</option>
				 			<option value="mname">ชื่อสมาชิก</option>
				 		<option value="mtname">ประเภทสมาชิก</option>
				 		<option value="fname">คณะ</option>
				 		<option value="dname">สาขาวิชา</option>
				 			<option value="full">เลือกทั้งหมด</option>
				 			</select>
				 <div class="invalid-tooltip">
				 	กรุณาเลือกรูปแบบการสืบค้น
				 	</div>
				 		</div>
				 				<div class='col-md-3'>
				 				 <input class='form-control font_ek_14' name="keyword" id="keyword" placeholder='ระบุคำสืบค้น' type='search' required>
				 		<div class="invalid-tooltip">
				 	กรุณากรอกคำสืบค้น
				 	</div>
				 			</div>
				 	<div class='col-md-2 align-self-center'>
				 	<button type="submit" name="submit_q"  class="btn-sm btn-secondary label_form_font" data-toggle="tooltip" data-placement="bottom"
				 			title="ค้นหา" >ค้นหา</button>
				 			</div>
				 	</div>
				 </form>
				 <div id="maincontent">
				 <?php
				 $perpage = 10;
				 if (isset($_GET['page']))
				 {
				 	$page = $_GET['page'];
				 }else
				 {
				 	$page = 1;
				 }

				 $start = ($page - 1) * $perpage;
				 			$ct= ($page-1) * $perpage;
				 $sq = @$_REQUEST[ 'sq' ];
				 $keyword = stripslashes( @$_REQUEST[ 'keyword' ] ); // removes backslashes
				 $keyword = mysqli_real_escape_string( $link, $keyword ); //escapes special characters in a string
				 if(isset($_POST['submit_q']))
				 {
				 	switch($sq)
				 	{
				 		case 'mid':
				 		$sql = "SELECT member.MemID AS mid, member.Mem_pass AS mpass,membertype.MemberType AS mtname,CONCAT(titlename.TitleName_Th,member.Fname,' ',member.Lname)AS mname,
				 		member.Email AS memail,member.Tel AS mtel,faculty.FacultyName_Th facname,department.DaptName_Th AS dname
				 		FROM `member` INNER JOIN membertype
				 		ON member.MemType = membertype.MemberTypeID INNER JOIN titlename
				 		ON member.TitleName = titlename.TitleNameID LEFT OUTER  JOIN faculty
				 		ON member.Faculty = faculty.FacultyID LEFT OUTER JOIN department
				 		ON member.Department = department.DepartmentID
				 		WHERE member.MemID = '$keyword'
				 		ORDER BY member.MemID ASC limit {$start} , {$perpage};";

				 		$sql2 = "SELECT member.MemID AS mid, member.Mem_pass AS mpass,membertype.MemberType AS mtname,CONCAT(titlename.TitleName_Th,member.Fname,' ',member.Lname)AS mname,
				 		member.Email AS memail,member.Tel AS mtel,faculty.FacultyName_Th facname,department.DaptName_Th AS dname
				 		FROM `member` INNER JOIN membertype
				 		ON member.MemType = membertype.MemberTypeID INNER JOIN titlename
				 		ON member.TitleName = titlename.TitleNameID LEFT OUTER  JOIN faculty
				 		ON member.Faculty = faculty.FacultyID LEFT OUTER JOIN department
				 		ON member.Department = department.DepartmentID
				 		WHERE member.MemID = '$keyword'
				 		ORDER BY member.MemID ASC;";
				 		break;
				 		case 'mname':
				 		$sql = "SELECT member.MemID AS mid, member.Mem_pass AS mpass,membertype.MemberType AS mtname,CONCAT(titlename.TitleName_Th,member.Fname,' ',member.Lname)AS mname,
				 		member.Email AS memail,member.Tel AS mtel,faculty.FacultyName_Th facname,department.DaptName_Th AS dname
				 		FROM `member` INNER JOIN membertype
				 		ON member.MemType = membertype.MemberTypeID INNER JOIN titlename
				 		ON member.TitleName = titlename.TitleNameID LEFT OUTER  JOIN faculty
				 		ON member.Faculty = faculty.FacultyID LEFT OUTER JOIN department
				 		ON member.Department = department.DepartmentID
				 		WHERE CONCAT(titlename.TitleName_Th,member.Fname,member.Lname) LIKE '%$keyword%'
				 		ORDER BY member.MemID ASC limit {$start} , {$perpage};";

				 		$sql2 = "SELECT member.MemID AS mid, member.Mem_pass AS mpass,membertype.MemberType AS mtname,CONCAT(titlename.TitleName_Th,member.Fname,' ',member.Lname)AS mname,
				 		member.Email AS memail,member.Tel AS mtel,faculty.FacultyName_Th facname,department.DaptName_Th AS dname
				 		FROM `member` INNER JOIN membertype
				 		ON member.MemType = membertype.MemberTypeID INNER JOIN titlename
				 		ON member.TitleName = titlename.TitleNameID LEFT OUTER  JOIN faculty
				 		ON member.Faculty = faculty.FacultyID LEFT OUTER JOIN department
				 		ON member.Department = department.DepartmentID
				 		WHERE CONCAT(titlename.TitleName_Th,member.Fname,member.Lname) LIKE '%$keyword%'
				 		ORDER BY member.MemID ASC;";
				 		break;
				 		case 'mtname':
				 		$sql = "SELECT member.MemID AS mid, member.Mem_pass AS mpass,membertype.MemberType AS mtname,CONCAT(titlename.TitleName_Th,member.Fname,' ',member.Lname)AS mname,
				 		member.Email AS memail,member.Tel AS mtel,faculty.FacultyName_Th facname,department.DaptName_Th AS dname
				 		FROM `member` INNER JOIN membertype
				 		ON member.MemType = membertype.MemberTypeID INNER JOIN titlename
				 		ON member.TitleName = titlename.TitleNameID LEFT OUTER  JOIN faculty
				 		ON member.Faculty = faculty.FacultyID LEFT OUTER JOIN department
				 		ON member.Department = department.DepartmentID
				 		WHERE membertype.MemberType LIKE '%$keyword%'
				 		ORDER BY member.MemID ASC limit {$start} , {$perpage};";

				 		$sql2 = "SELECT member.MemID AS mid, member.Mem_pass AS mpass,membertype.MemberType AS mtname,CONCAT(titlename.TitleName_Th,member.Fname,' ',member.Lname)AS mname,
				 		member.Email AS memail,member.Tel AS mtel,faculty.FacultyName_Th facname,department.DaptName_Th AS dname
				 		FROM `member` INNER JOIN membertype
				 		ON member.MemType = membertype.MemberTypeID INNER JOIN titlename
				 		ON member.TitleName = titlename.TitleNameID LEFT OUTER  JOIN faculty
				 		ON member.Faculty = faculty.FacultyID LEFT OUTER JOIN department
				 		ON member.Department = department.DepartmentID
				 		WHERE membertype.MemberType LIKE '%$keyword%'
				 		ORDER BY member.MemID ASC;";
				 		break;
				 		case 'fname':
				 		$sql = "SELECT member.MemID AS mid, member.Mem_pass AS mpass,membertype.MemberType AS mtname,CONCAT(titlename.TitleName_Th,member.Fname,' ',member.Lname)AS mname,
				 		member.Email AS memail,member.Tel AS mtel,faculty.FacultyName_Th facname,department.DaptName_Th AS dname
				 		FROM `member` INNER JOIN membertype
				 		ON member.MemType = membertype.MemberTypeID INNER JOIN titlename
				 			ON member.TitleName = titlename.TitleNameID LEFT OUTER  JOIN faculty
				 		ON member.Faculty = faculty.FacultyID LEFT OUTER JOIN department
				 		ON member.Department = department.DepartmentID
				 		WHERE faculty.FacultyName_Th LIKE '%$keyword%'
				 		ORDER BY member.MemID ASC limit {$start} , {$perpage};";

				 		$sql2 = "SELECT member.MemID AS mid, member.Mem_pass AS mpass,membertype.MemberType AS mtname,CONCAT(titlename.TitleName_Th,member.Fname,' ',member.Lname)AS mname,
				 		member.Email AS memail,member.Tel AS mtel,faculty.FacultyName_Th facname,department.DaptName_Th AS dname
				 		FROM `member` INNER JOIN membertype
				 		ON member.MemType = membertype.MemberTypeID INNER JOIN titlename
				 			ON member.TitleName = titlename.TitleNameID LEFT OUTER  JOIN faculty
				 		ON member.Faculty = faculty.FacultyID LEFT OUTER JOIN department
				 		ON member.Department = department.DepartmentID
				 		WHERE faculty.FacultyName_Th LIKE '%$keyword%'
				 		ORDER BY member.MemID ASC;";
				 		break;
				 		case 'dname':
				 		$sql = "SELECT member.MemID AS mid, member.Mem_pass AS mpass,membertype.MemberType AS mtname,CONCAT(titlename.TitleName_Th,member.Fname,' ',member.Lname)AS mname,
				 		member.Email AS memail,member.Tel AS mtel,faculty.FacultyName_Th facname,department.DaptName_Th AS dname
				 		FROM `member` INNER JOIN membertype
				 		ON member.MemType = membertype.MemberTypeID INNER JOIN titlename
				 		ON member.TitleName = titlename.TitleNameID LEFT OUTER  JOIN faculty
				 		ON member.Faculty = faculty.FacultyID LEFT OUTER JOIN department
				 		ON member.Department = department.DepartmentID
				 		WHERE department.DaptName_Th LIKE '%$keyword%'
				 		ORDER BY member.MemID ASC limit {$start} , {$perpage};";

				 		$sql2 = "SELECT member.MemID AS mid, member.Mem_pass AS mpass,membertype.MemberType AS mtname,CONCAT(titlename.TitleName_Th,member.Fname,' ',member.Lname)AS mname,
				 		member.Email AS memail,member.Tel AS mtel,faculty.FacultyName_Th facname,department.DaptName_Th AS dname
				 		FROM `member` INNER JOIN membertype
				 		ON member.MemType = membertype.MemberTypeID INNER JOIN titlename
				 		ON member.TitleName = titlename.TitleNameID LEFT OUTER  JOIN faculty
				 		ON member.Faculty = faculty.FacultyID LEFT OUTER JOIN department
				 		ON member.Department = department.DepartmentID
				 		WHERE department.DaptName_Th LIKE '%$keyword%'
				 		ORDER BY member.MemID ASC;";
				 		break;
				 		case 'full':
				 		$sql = "SELECT member.MemID AS mid, member.Mem_pass AS mpass,membertype.MemberType AS mtname,CONCAT(titlename.TitleName_Th,member.Fname,' ',member.Lname)AS mname,
				 		member.Email AS memail,member.Tel AS mtel,faculty.FacultyName_Th facname,department.DaptName_Th AS dname
				 		FROM `member` INNER JOIN membertype
				 		ON member.MemType = membertype.MemberTypeID INNER JOIN titlename
				 		ON member.TitleName = titlename.TitleNameID LEFT OUTER  JOIN faculty
				 		ON member.Faculty = faculty.FacultyID LEFT OUTER JOIN department
				 		ON member.Department = department.DepartmentID ORDER BY member.MemID ASC limit {$start} , {$perpage};";

				 		$sql2 = "SELECT member.MemID AS mid, member.Mem_pass AS mpass,membertype.MemberType AS mtname,CONCAT(titlename.TitleName_Th,member.Fname,' ',member.Lname)AS mname,
				 		member.Email AS memail,member.Tel AS mtel,faculty.FacultyName_Th facname,department.DaptName_Th AS dname
				 		FROM `member` INNER JOIN membertype
				 		ON member.MemType = membertype.MemberTypeID INNER JOIN titlename
				 		ON member.TitleName = titlename.TitleNameID LEFT OUTER  JOIN faculty
				 		ON member.Faculty = faculty.FacultyID LEFT OUTER JOIN department
				 		ON member.Department = department.DepartmentID ORDER BY member.MemID ASC ;";

				 		break;
				 	}
				 }
				 else
				 {
				 			$sql = "SELECT member.MemID AS mid, member.Mem_pass AS mpass,membertype.MemberType AS mtname,CONCAT(titlename.TitleName_Th,member.Fname,' ',member.Lname)AS mname,
				 			member.Email AS memail,member.Tel AS mtel,faculty.FacultyName_Th facname,department.DaptName_Th AS dname
				 			FROM `member` INNER JOIN membertype
				 			ON member.MemType = membertype.MemberTypeID INNER JOIN titlename
				 			ON member.TitleName = titlename.TitleNameID LEFT OUTER  JOIN faculty
				 				ON member.Faculty = faculty.FacultyID LEFT OUTER JOIN department
				 			ON member.Department = department.DepartmentID ORDER BY member.MemID ASC limit {$start} , {$perpage};";

				 			$sql2 = "SELECT member.MemID AS mid, member.Mem_pass AS mpass,membertype.MemberType AS mtname,CONCAT(titlename.TitleName_Th,member.Fname,' ',member.Lname)AS mname,
				 			member.Email AS memail,member.Tel AS mtel,faculty.FacultyName_Th facname,department.DaptName_Th AS dname
				 			FROM `member` INNER JOIN membertype
				 			ON member.MemType = membertype.MemberTypeID INNER JOIN titlename
				 			ON member.TitleName = titlename.TitleNameID LEFT OUTER  JOIN faculty
				 				ON member.Faculty = faculty.FacultyID LEFT OUTER JOIN department
				 			ON member.Department = department.DepartmentID ORDER BY member.MemID ASC ;";

				 }
				  $result = $link->query( $sql );
				  $result2 = $link->query( $sql2 );
				  $total_record = mysqli_num_rows($result2);
				  $total_page = ceil($total_record / $perpage);
				 ?>
				 			<div class="row">
				 	<div class="col-lg-12 table-responsive">
				 		 <table class="table table-bordered table-hover" style="width: 100%">
				 			 <thead>
				 				<tr style="text-align: center">
				 					 <th>ชื่อบัญชีผู้ใช้</th>
				 					 <th>รหัสผ่าน</th>
				 					 <th>ประเภทสมาชิก</th>
				 					 <th>ชื่อสมาชิก</th>
				 					 <th>อีเมล</th>
				 					 <th>เบอร์โทร</th>
				 					 <th>คณะ</th>
				 					 <th>สาขา</th>
				 					 <th>การจัดการ</th>
				 					 </tr>
				 					 </thead>
				 					 <tbody>
				 					 <?php
				 						 if($result->num_rows==0)
				 						{
				 					 ?>
				 							<tr>
				 								<td style="font-weight: bold; text-align: center; color: rgb(255, 0, 0)" colspan="7">---ไม่พบข้อมูล---</td>
				 							</tr>
				 					 <?php
				 						}
				 						else
				 						{
				 							while ( $row=$result->fetch_object())
				 								{

				 					 ?>
				 								<tr>
				 								<td style="text-align: center" width="10%"><?php echo $row->mid;?></td>
				 								<td width="8%"><?php echo $row->mpass;?></td>
				 								<?php if($row->mtname=="")
				 									{
				 								?>		<td style="text-align: center"><?php echo "-";?></td>
				 								<?php
				 									}else
				 									{
				 								 ?>		<td ><?php echo $row->mtname;?></td>
				 								 <?php
				 									}
				 								 ?>
				 								<?php if($row->mname=="")
				 									{
				 								?>		<td style="text-align: center"><?php echo "-";?></td>
				 								<?php
				 									}else
				 									{
				 								 ?>		<td ><?php echo $row->mname;?></td>
				 								 <?php
				 									}
				 								 ?>
				 								<?php if($row->memail=="")
				 									{
				 								?>		<td style="text-align: center"><?php echo "-";?></td>
				 								<?php
				 									}else
				 									{
				 								 ?>		<td ><?php echo $row->memail;?></td>
				 								 <?php
				 									}
				 								 ?>
				 								<?php if($row->mtel=="")
				 									{
				 								?>		<td style="text-align: center"><?php echo "-";?></td>
				 								<?php
				 									}else
				 									{
				 								 ?>		<td ><?php echo $row->mtel;?></td>
				 								 <?php
				 									}
				 								 ?>
				 								<?php if($row->facname=="")
				 									{
				 								?>		<td style="text-align: center"><?php echo "-";?></td>
				 								<?php
				 									}else
				 									{
				 								 ?>		<td ><?php echo $row->facname;?></td>
				 								 <?php
				 									}
				 								 ?>
				 								<?php if($row->dname=="")
				 									{
				 								?>		<td style="text-align: center"><?php echo "-";?></td>
				 								<?php
				 									}else
				 									{
				 								 ?>		<td ><?php echo $row->dname;?></td>
				 								 <?php
				 									}
				 								 ?>
				 								<td style="text-align: center; width:8%">
				 								<img src="public/images/baseline_border_color_black_36dp.png" width="20px" data-toggle="tooltip" data-placement="bottom" title="แก้ไข"  name="edit" value="edit" id="<?php echo $row->mid; ?>" class="edit"/>
				 								 &ensp;
				 									<a  href="del_mem.php?mid=<?=$row->mid;?>" onClick="ts();">
				 									<img src="public/images/baseline_delete_forever_black_36dp.png" width="20px" data-toggle="tooltip" data-placement="bottom" title="ลบ" onClick="return confirm('ต้องการลบข้อมูลสมาชิก ชื่อ <?php echo $row->mid;?> ใช่หรือไม่')"/></a>
				 								</td>
				 								</tr>
				 					<?php
				 								 $ct++;
				 							 }
				 						}
				 					?>
				 					 </tbody>
				 			</table>
				 <?php
				 if($result->num_rows==0||$total_page==1)
				 {
				 }
				 else
				 {
				 ?>
				  <nav class="Page navigation example">
				 	<ul class="pagination justify-content-center">
				 		<li class="page-item">
				 			<a class="page-link" href="member.php" aria-label="Previous">
				 				<span aria-hidden="true">&laquo;</span>
				 			</a>
				 			</li>
				 				<?php for($i=1;$i<=$total_page;$i++)
				 				{
				 				?>
				 					<li class="page-item"><a class="page-link" href="member.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
				 				<?php
				 				}
				 				?>
				 				 <li class="page-item">
				 					<a class="page-link" href="member.php?page=<?php echo $total_page;?>" aria-label="Next">
				 						<span aria-hidden="true">&raquo;</span>
				 					</a>
				 			</li>
				 	</ul>
				 </nav>
				 <?php
				 }
				 ?>
				 		</div>
				 	</div>
				 </div>
				 </div>
				 </div>
				 </div>
				 <div class="modal fade" id="md_edit" tabindex="-1" role="dialog" aria-labelledby="edit_label" aria-hidden="true">
				 <div class="modal-dialog modal-dialog-centered" role="document">
				 <div class="modal-content">
				 <form class="needs-validation" method="post" action="edit_mem.php" novalidate>
				 <div class="modal-header">
				  <h5 class="modal-title labelH_form_font" id="edit_label">แก้ไขข้อมูลสมาชิก</h5>
				 </div>
				 <div class="modal-body" id="show_edit">

				 </div>
				 <div class="modal-footer">
				 <input type="submit" class="btn btn-primary label_form_font" name="submit_edit" value="บันทึก"/>
				 	<input type="button" class="btn btn-danger label_form_font" id="btn_can_edit" value="ยกเลิก" onclick="hide_md();" />
				 </div>
				 </form>
				 </div>
				 </div>
				 </div>
				 <div class="modal fade" id="md_add" tabindex="-1" role="dialog" aria-labelledby="add_label" aria-hidden="true">
				 <div class="modal-dialog modal-dialog-centered" role="document">
				 <div class="modal-content">
				 <form class="needs-validation" method="post" action="add_mem2.php" novalidate>
				 <div class="modal-header">
				 	<h5 class="modal-title labelH_form_font" id="add_label">เพิ่มข้อมูลสมาชิก</h5>
				 </div>
				 <div class="modal-body">
				 		<div class='form-group'>
				 			<label class='col-form-label label_form_font'  for="type" style="text-align: right">สถานะการสมัคร</label>
				 			 <select class='form-control cc-select ' name="type" id"type" autofocus required>
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
				 	<div class="invalid-feedback">
				 		กรุณาเลือกสถานะการสมัคร
				 	</div>
				 		</div>
				 <div class="form-group">
				 	 <label class='col-form-label label_form_font' for="username" style="text-align: right">ชื่อผู้ใช้งาน</label>
				 	<input class='form-control ' name="username"  id="username"  type='text' required>
				 		<div class="invalid-feedback">
				 	กรุณากรอก Username
				 	</div>
				 </div>
				 <div class="form-group">
				 <label class='col-form-label label_form_font'for="password" style="text-align: right">รหัสผ่าน</label>
				 	<input class='form-control ' name="password"  type='password' required>
				 	<div class="invalid-feedback">
				 		 กรุณากรอก Password
				 	</div>
				 </div>
				 <div class='form-group'>
				 <label class='col-form-label label_form_font' for="title_name" style="text-align: right">คำนำหน้าชื่อ</label>
				 	<select class='form-control cc-select' name="title_name" required>
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
				 	<div class="invalid-feedback">
				 	กรุณาเลือกคำนำหน้าชื่อ
				 	</div>
				 </div>
				 <div class="form-group">
				 <label class='col-form-label label_form_font' for="m_fname" style="text-align: right">ชื่อ</label>
				 	<input class='form-control ' name="fname"  type='text' required>
				 	<div class="invalid-feedback">
				 	กรุณากรอกชื่อ
				 	</div>
				 </div>
				 <div class="form-group">
				 <label class='col-form-label label_form_font'  for="m_lname" style="text-align: right">นามสกุล</label>
				 	<input class='form-control' name="lname" type='text' required>
				 	<div class="invalid-feedback">
				 	กรุณากรอกนามสกุล
				 	</div>
				 </div>
				 <div class="form-group">
				 <label class='col-form-label label_form_font' for="m_email" style="text-align: right">อีเมล</label>
				 	<input class='form-control' name="email" type='email' pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
				 autocomplete="off">
				 	<div class="invalid-feedback">
				 	กรุณากรอกอีเมล
				 	</div>
				 </div>
				 <div class="form-group">
				 <label class='col-form-label label_form_font'  for="m_tel" style="text-align: right">เบอร์โทรศัพท์</label>
				 	<input class='form-control' name="tel"  type='text'  pattern="^0([8|9|6])([0-9]{8}$)" autocomplete="off" >
				 	<div class="invalid-feedback">
				 	กรุณากรอกเบอร์โทรศัพท์ 10 หลัก
				 	</div>
				 </div>
				 <div class='form-group'>
				 <label class='col-form-label label_form_font'  for="fact_name" style="text-align: right">คณะ</label>
				 	<select name="fact_name" class='form-control cc-select ' id="fact_name" onChange="getSelectValue2();">
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
				 <div class='form-group' id="dapt_name" >
				 <label class='col-form-label label_form_font' for="dapt_name" style="text-align: right">สาขาวิชา</label>
				 	<select name="dept_name_se" class='form-control cc-select ' id="dapt_name_se" >
				 		<option value="NULL" >กรุณาเลือกคณะ</option>
				 	</select>
				 	<select name="dept_bs"  class='form-control cc-select ' id="dapt_bs" style="display: none">
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
				 	<select name="dept_sci" class='form-control cc-select ' id="dapt_sci" style="display: none">
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
				 	<select name="dept_ea" class='form-control cc-select ' id="dapt_ea" style="display: none">
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
				 	<select name="dept_art" class='form-control cc-select ' id="dapt_art" style="display: none">
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
				 <div class="modal-footer">
				 <input type="submit" class="btn btn-primary label_form_font" name="submit_add" value="บันทึก"/>
				 	<input type="button" class="btn btn-danger label_form_font" id="btn_can_add" value="ยกเลิก" onclick="hide_md();" />
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
$(document).ready(function(){
$(document).on('click', '.edit', function(){
//$('#dataModal').modal();
var mid = $(this).attr("id");
$.ajax({
 url:"sh_edit_member.php",
 method:"POST",
 data:{mid:mid},
 success:function(data){
	$('#show_edit').html(data);
$('#md_edit').on('shown.bs.modal', function () {
			$('#password').trigger('focus');
})
	$('#md_edit').modal('toggle');
 }
});
});
});
</script>
<script>
function hide_md()
{
	 $('#md_add').modal('hide');
	 $('#md_edit').modal('hide');
}
</script>
<script>
	function show_md()
			{
					//var selectedValueC = document.getElementById("add_c").value;
		$('#md_add').on('shown.bs.modal', function () {
				$('#username').trigger('focus')
		})
		$('#md_add').modal('toggle');
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
<script>
			function getSelectValue()
			{
					var selectedValue = document.getElementById("sq").value;
					if(selectedValue != 'full')
		{
				document.getElementById("keyword").disabled = false;
		}else
		{
			document.getElementById("keyword").disabled = true;
		}
			}
</script>
<script>
			function getSelectValue2()
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
<script>
$(document).ready(function(){
		$('#md_edit').on('shown.bs.modal', function () {
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
		})
$('#md_add').on('shown.bs.modal', function () {
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
		})
});
</script>
<!--===============================================================================================-->
<script src="bootstrap/dist/js/popper.min.js"></script>
<script src="public/jquery/jquery-3.3.1.js"></script>
<script src="bootstrap/dist/js/bootstrap.min.js"></script>
<script src="bootstrap/dist/js/bootstrap.bundle.js"></script>
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
