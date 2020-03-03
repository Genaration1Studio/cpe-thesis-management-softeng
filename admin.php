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
  <script>
    function del_thesis(id){
      Swal.fire({
        title: '',
        text: "คุณต้องการลบข้อมูลปริญญานิพนธ์ รหัส "+id+" ใช่หรือไม่ ?",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'ตกลง',
        cancelButtonText: 'ยกเลิก'
        }).then((result) => {
        if (result.value) {
          location.href = "del_thesis.php?tid="+id;
        }
      })
    }
  </script>
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

				 <form action="admin.php" class='needs-validation form-horizontal  table-striped' id="formsq" role='form' method="post" novalidate>
            <div class="row align-items-center">
				  <div class='col-md-10 col-md-offset-1  head-titel-mian'>
					  ระบบสืบค้นปริญญานิพนธ์
				  </div>
				  <div class="col-2" style="text-align: right">
		  				<a class="btn btn-success btn-sm" href="sh_add.php" data-toggle="tooltip" data-placement="bottom"
						title="เพิ่มข้อมูล">เพิ่มข้อมูล</a>
				 </div>
				</div>
						 <hr width="100%" color="#FFFFFF"><p>
						 <div class='form-group row justify-content-center search-lable'>
							 <label class='col-form-label label-form-mian-search' for="thesis_year" style="text-align: right">ปีที่จัดทำ</label>
							<div class='col-md-2'>
								<select class='form-control cc-select font_ek_14' name="thesis_year" required>
						 <option value="" selected="selected">กรุณาเลือก</option>
						 <?php
								 $sql = "SELECT thesis.Thesis_Year AS ty FROM thesis GROUP BY thesis.Thesis_Year ORDER BY thesis.Thesis_Year ASC;";
								 $result = $link->query( $sql );
								 while($row=$result->fetch_object())
								 {
							 ?>
								 <option value="<?php echo $row->ty;?>"><?php echo $row->ty;?></option>
							 <?php
								 }
							 ?>
							 <option value="NULL">--เลือกทั้งหมด--</option>
							 </select>
					<div class="invalid-tooltip">
					 กรุณาเลือกปีที่จัดทำ
					 </div>
							 </div>
				 <label class='col-form-label label-form-mian-search' for="sq" style="text-align: right">สืบค้นโดย</label>
							<div class='col-md-3'>
								<select class='form-control cc-select font_ek_14' id="sq" name="sq"  onChange="getSelectValue();" required>
						 <option value="" selected="selected">กรุณาเลือก</option>
						 <option value="tn">หัวข้อปริญญานิพนธ์</option>
								<option value="tc">ประเภทปริญญานิพนธ์</option>
							<option value="pn">ชื่อผู้จัดทำ</option>
								<option value="an">ชื่ออาจารย์ที่ปรึกษา</option>
								<option value="NULL">--เลือกทั้งหมด--</option>
							 </select>
			 <div class="invalid-tooltip">
					 กรุณาเลือกรูปแบบการสืบค้น
					 </div>
						 </div>
								 <div class='col-md-4 search-box'>
									<input class='form-control' name="keyword" id="keyword" placeholder='ระบุคำสืบค้น' type='search' disabled required>
						 <div class="invalid-tooltip">
					 กรุณากรอกคำสืบค้น
					 </div>
							 </div>
					 <div class='col-md-1 align-self-center btn-search'>
					 <button type="submit" name="submit_q"  class="btn btn-secondary " data-toggle="tooltip" data-placement="bottom"
							 title="ค้นหาปริญญานิพนธ์" >ค้นหา</button>
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

				 $thesis_y = @$_REQUEST[ 'thesis_year' ];
				 $sq = @$_REQUEST[ 'sq' ];
				 $keyword = stripslashes(@$_REQUEST[ 'keyword' ]); // removes backslashes
				 $keyword = mysqli_real_escape_string( $link, $keyword ); //escapes special characters in a string
				 if(isset($_POST['submit_q']))
				 {

					 if(($thesis_y!="NULL")&&($sq!="NULL"))
					 {
					 switch($sq)
					 {
						 case 'tn':
						 $sql = "SELECT `thesis`.`ThesisID` AS tid,thesis.Thesis_Year AS ty,thesis.Title_Th AS tn_th,thesis.`Title_En` AS tn_en,
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
								 WHERE `thesis`.`Thesis_Year`=$thesis_y AND `thesis`.`Title_Th` LIKE  '%$keyword%'
								 OR  `thesis`.`Title_En` LIKE  '%$keyword%'
								 GROUP BY `ThesisID` ORDER BY Thesis_Year ASC limit {$start} , {$perpage};";

						 $sql2 = "SELECT `thesis`.`ThesisID` AS tid,thesis.Thesis_Year AS ty,thesis.Title_Th AS tn_th,thesis.`Title_En` AS tn_en,
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
								 WHERE `thesis`.`Thesis_Year`=$thesis_y AND `thesis`.`Title_Th` LIKE  '%$keyword%'
								 OR  `thesis`.`Title_En` LIKE  '%$keyword%'
								 GROUP BY `ThesisID` ORDER BY Thesis_Year ASC;";
						 break;
						 case 'tc':
						 $sql = "SELECT `thesis`.`ThesisID` AS tid,thesis.Thesis_Year AS ty,thesis.Title_Th AS tn_th,thesis.`Title_En` AS tn_en,
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
								 WHERE `thesis`.`Thesis_Year`=$thesis_y AND `category`.`Category_Th` LIKE  '%$keyword%'
								 OR `category`.`Category_En` LIKE  '%$keyword%'
								 GROUP BY `ThesisID` ORDER BY Thesis_Year ASC limit {$start} , {$perpage};";

						 $sql2 = "SELECT `thesis`.`ThesisID` AS tid,thesis.Thesis_Year AS ty,thesis.Title_Th AS tn_th,thesis.`Title_En` AS tn_en,
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
								 WHERE `thesis`.`Thesis_Year`=$thesis_y AND `category`.`Category_Th` LIKE  '%$keyword%'
								 OR `category`.`Category_En` LIKE  '%$keyword%'
								 GROUP BY `ThesisID` ORDER BY Thesis_Year ASC;";
						 break;
						 case 'pn':
						 $sql = "SELECT `thesis`.`ThesisID` AS tid,thesis.Thesis_Year AS ty,thesis.Title_Th AS tn_th,thesis.`Title_En` AS tn_en,
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
								 WHERE `Thesis_Year` = $thesis_y AND CONCAT(t1.`TitleName_Th`,`provider`.`Fname_Th`,' ',`provider`.`Lname_Th`)  LIKE  '%$keyword%' OR CONCAT(t1.`TitleName_En`,`provider`.`Fname_En`,' ',`provider`.`Lname_En`)  LIKE  '%$keyword%'
								 GROUP BY `ThesisID` ORDER BY `Thesis_Year` ASC limit {$start} , {$perpage};";

						 $sql2 = "SELECT `thesis`.`ThesisID` AS tid,thesis.Thesis_Year AS ty,thesis.Title_Th AS tn_th,thesis.`Title_En` AS tn_en,
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
								 WHERE `Thesis_Year` = $thesis_y AND CONCAT(t1.`TitleName_Th`,`provider`.`Fname_Th`,' ',`provider`.`Lname_Th`)  LIKE  '%$keyword%' OR CONCAT(t1.`TitleName_En`,`provider`.`Fname_En`,' ',`provider`.`Lname_En`)  LIKE  '%$keyword%'
								 GROUP BY `ThesisID` ORDER BY `Thesis_Year` ASC;";
						 break;
						 case 'an':
						 $sql = "SELECT `thesis`.`ThesisID` AS tid,thesis.Thesis_Year AS ty,thesis.Title_Th AS tn_th,thesis.`Title_En` AS tn_en,
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
								 WHERE `Thesis_Year` = $thesis_y AND CONCAT(t2.`TitleName_Th`,`advisor`.`Fname_Th`,' ',`advisor`.`Lname_Th`)  LIKE  '%$keyword%' OR CONCAT(t2.`TitleName_En`,`advisor`.`Fname_En`,' ',`advisor`.`Lname_En`)  LIKE  '%$keyword%'
								 GROUP BY `ThesisID` ORDER BY `Thesis_Year` ASC limit {$start} , {$perpage};";

						 $sql2 = "SELECT `thesis`.`ThesisID` AS tid,thesis.Thesis_Year AS ty,thesis.Title_Th AS tn_th,thesis.`Title_En` AS tn_en,
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
								 WHERE `Thesis_Year` = $thesis_y AND CONCAT(t2.`TitleName_Th`,`advisor`.`Fname_Th`,' ',`advisor`.`Lname_Th`)  LIKE  '%$keyword%' OR CONCAT(t2.`TitleName_En`,`advisor`.`Fname_En`,' ',`advisor`.`Lname_En`)  LIKE  '%$keyword%'
								 GROUP BY `ThesisID` ORDER BY `Thesis_Year` ASC;";
						 break;
					 }
					 }
					 else if(($thesis_y!="NULL")&&($sq=="NULL"))
					 {
							 $sql = "SELECT `thesis`.`ThesisID` AS tid,thesis.Thesis_Year AS ty,thesis.Title_Th AS tn_th,thesis.`Title_En` AS tn_en,
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
								 WHERE `thesis`.`Thesis_Year`=$thesis_y
								 GROUP BY `ThesisID` ORDER BY Thesis_Year ASC limit {$start} , {$perpage};";

							 $sql2 = "SELECT `thesis`.`ThesisID` AS tid,thesis.Thesis_Year AS ty,thesis.Title_Th AS tn_th,thesis.`Title_En` AS tn_en,
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
								 WHERE `thesis`.`Thesis_Year`=$thesis_y
								 GROUP BY `ThesisID` ORDER BY Thesis_Year ASC;";

					 }
					 else if(($thesis_y=="NULL")&&($sq!="NULL"))
					 {
						 switch($sq)
						 {
							 case 'tn':
							 $sql = "SELECT `thesis`.`ThesisID` AS tid,thesis.Thesis_Year AS ty,thesis.Title_Th AS tn_th,thesis.`Title_En` AS tn_en,
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
								 WHERE `thesis`.`Title_Th` LIKE  '%$keyword%' OR  `thesis`.`Title_En` LIKE  '%$keyword%'
								 GROUP BY `ThesisID` ORDER BY Thesis_Year ASC limit {$start} , {$perpage};";

							 $sql2 = "SELECT `thesis`.`ThesisID` AS tid,thesis.Thesis_Year AS ty,thesis.Title_Th AS tn_th,thesis.`Title_En` AS tn_en,
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
								 WHERE `thesis`.`Title_Th` LIKE  '%$keyword%' OR  `thesis`.`Title_En` LIKE  '%$keyword%'
								 GROUP BY `ThesisID` ORDER BY Thesis_Year ASC;";
							 break;
							 case 'tc':
							 $sql = "SELECT `thesis`.`ThesisID` AS tid,thesis.Thesis_Year AS ty,thesis.Title_Th AS tn_th,thesis.`Title_En` AS tn_en,
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
								 WHERE `category`.`Category_Th` LIKE  '%$keyword%' OR `category`.`Category_En` LIKE  '%$keyword%'
								 GROUP BY `ThesisID` ORDER BY Thesis_Year ASC limit {$start} , {$perpage};";

							 $sql2 = "SELECT `thesis`.`ThesisID` AS tid,thesis.Thesis_Year AS ty,thesis.Title_Th AS tn_th,thesis.`Title_En` AS tn_en,
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
								 WHERE `category`.`Category_Th` LIKE  '%$keyword%' OR `category`.`Category_En` LIKE  '%$keyword%'
								 GROUP BY `ThesisID` ORDER BY Thesis_Year ASC;";
							 break;
							 case 'pn':
							 $sql = "SELECT `thesis`.`ThesisID` AS tid,thesis.Thesis_Year AS ty,thesis.Title_Th AS tn_th,thesis.`Title_En` AS tn_en,
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
								 WHERE CONCAT(t1.`TitleName_Th`,`provider`.`Fname_Th`,' ',`provider`.`Lname_Th`)  LIKE  '%$keyword%'
								 OR CONCAT(t1.`TitleName_En`,`provider`.`Fname_En`,' ',`provider`.`Lname_En`)  LIKE  '%$keyword%'
								 GROUP BY `ThesisID` ORDER BY Thesis_Year ASC limit {$start} , {$perpage};";

							 $sql2 = "SELECT `thesis`.`ThesisID` AS tid,thesis.Thesis_Year AS ty,thesis.Title_Th AS tn_th,thesis.`Title_En` AS tn_en,
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
								 WHERE CONCAT(t1.`TitleName_Th`,`provider`.`Fname_Th`,' ',`provider`.`Lname_Th`)  LIKE  '%$keyword%'
								 OR CONCAT(t1.`TitleName_En`,`provider`.`Fname_En`,' ',`provider`.`Lname_En`)  LIKE  '%$keyword%'
								 GROUP BY `ThesisID` ORDER BY Thesis_Year ASC;";
							 break;
							 case 'an':
							 $sql = "SELECT `thesis`.`ThesisID` AS tid,thesis.Thesis_Year AS ty,thesis.Title_Th AS tn_th,thesis.`Title_En` AS tn_en,
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
								 WHERE CONCAT(t2.`TitleName_Th`,`advisor`.`Fname_Th`,' ',`advisor`.`Lname_Th`)  LIKE  '%$keyword%' OR CONCAT(t2.`TitleName_En`,`advisor`.`Fname_En`,' ',`advisor`.`Lname_En`)  LIKE  '%$keyword%'
								 GROUP BY `ThesisID` ORDER BY Thesis_Year ASC limit {$start} , {$perpage};";

							 $sql2 = "SELECT `thesis`.`ThesisID` AS tid,thesis.Thesis_Year AS ty,thesis.Title_Th AS tn_th,thesis.`Title_En` AS tn_en,
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
								 WHERE CONCAT(t2.`TitleName_Th`,`advisor`.`Fname_Th`,' ',`advisor`.`Lname_Th`)  LIKE  '%$keyword%' OR CONCAT(t2.`TitleName_En`,`advisor`.`Fname_En`,' ',`advisor`.`Lname_En`)  LIKE  '%$keyword%'
								 GROUP BY `ThesisID` ORDER BY Thesis_Year ASC;";
							 break;
						 }
					 }
					 else
					 {

							 $sql = "SELECT `thesis`.`ThesisID` AS tid,thesis.Thesis_Year AS ty,thesis.Title_Th AS tn_th,thesis.`Title_En` AS tn_en,
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
								 GROUP BY `ThesisID` ORDER BY Thesis_Year ASC limit {$start} , {$perpage};";

							 $sql2 = "SELECT `thesis`.`ThesisID` AS tid,thesis.Thesis_Year AS ty,thesis.Title_Th AS tn_th,thesis.`Title_En` AS tn_en,
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
								 GROUP BY `ThesisID` ORDER BY Thesis_Year ASC;";

					 }

				 }
				 else
				 {

							 $sql = "SELECT `thesis`.`ThesisID` AS tid,thesis.Thesis_Year AS ty,thesis.Title_Th AS tn_th,thesis.`Title_En` AS tn_en,
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
								 GROUP BY `ThesisID` ORDER BY Thesis_Year ASC limit {$start} , {$perpage};";

								$sql2 = "SELECT `thesis`.`ThesisID` AS tid,thesis.Thesis_Year AS ty,thesis.Title_Th AS tn_th,thesis.`Title_En` AS tn_en,
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
								 GROUP BY `ThesisID` ORDER BY Thesis_Year ASC;";
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
									 <th>ลำดับ</th>
									 <th>ปี</th>
									 <th>เรื่อง</th>
									 <th>ประเภท</th>
									 <th>ผู้จัดทำ</th>
									 <th>ที่ปรึกษา</th>
									 <th>การจัดการ</th>
									 </tr>
									 </thead>
									 <tbody>
									 <?php
										 if($result->num_rows==0)
										{
									 ?>
											<tr>
												<td style="font-family: tahoma; font-weight: bold; text-align: center; color: rgb(255, 0, 0)" colspan="7">---ไม่พบข้อมูล---</td>
											</tr>
									 <?php
										}
										else
										{
											while ( $row=$result->fetch_object())
												{
									 ?>
												<tr>
												<td style="text-align: center"><?php echo $ct+1; ?></td>
												<td style="text-align: center"><?php echo $row->ty; ?></td>
												<td><a href="sh_thesis_admin.php?tid=<?=$row->tid;?>" target="_blank" style="font-family: tahoma;"><?php echo $row->tn_th; ?></a></td>
												<td style="font-family: tahoma;"><?php echo $row->tc_th; ?></td>
												<td style="font-family: tahoma;"><?php echo $row->pn_th;?></td>
												<td style="font-family: tahoma;"><?php echo $row->an_th;?></td>
												<td style="text-align: center">
												 <a  href="sh_edit_thesis.php?tid=<?=$row->tid;?>"> <img src="public/images/baseline_border_color_black_36dp.png" width="20px" data-toggle="tooltip" data-placement="bottom" title="แก้ไข"/></a>
												 &ensp;
													 <a  href="#" onClick="del_thesis(<?=$row->tid;?>);">
													<img src="public/images/baseline_delete_forever_black_36dp.png" width="20px" data-toggle="tooltip" data-placement="bottom" title="ลบ" /></a>
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
							 <a class="page-link" href="admin.php" aria-label="Previous">
								 <span aria-hidden="true">&laquo;</span>
							 </a>
							 </li>
								 <?php for($i=1;$i<=$total_page;$i++)
								 {
								 ?>
									 <li class="page-item"><a class="page-link" href="admin.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
								 <?php
								 }
								 ?>
									<li class="page-item">
									 <a class="page-link" href="admin.php?page=<?php echo $total_page;?>" aria-label="Next">
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
	 <div class="modal" tabindex="-1" role="dialog" id="conta">
		 <div class="modal-dialog" role="document">
			 <div class="modal-content">
				 <div class="modal-header">
					 <h5 class="modal-title">Modal title</h5>
					 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						 <span aria-hidden="true">&times;</span>
					 </button>
				 </div>
				 <div class="modal-body">
					 <p>Modal body text goes here.</p>
				 </div>
				 <div class="modal-footer">
					 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					 <button type="button" class="btn btn-primary">Save changes</button>
				 </div>
			 </div>
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
