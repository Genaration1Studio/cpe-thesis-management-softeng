<?php
session_start();
include("conn.php");
?>
<!DOCTYPE html>
<html lang="th"><!-- InstanceBegin template="/Templates/Master.dwt.php" codeOutsideHTMLIsLocked="false" -->

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- InstanceBeginEditable name="doctitle" -->
<title>Thesis of CPE.</title>
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

		#btnLeft:active {
			width: 70px;
			height: 74px;
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

<body id="page-site-index">
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
		<div class="form-group destoydiv1">
		</div>
		<a class="nav-link" href="main.php" style="font-family: 'Sukhumvit Set';font-weight: 400;font-size: 18px;color: #FFFFFF;" data-toggle="tooltip" data-placement="bottom" title="เข้าสู่หน้าหลัก">หน้าหลัก</a>
		<a class="nav-link" href="conta.php"  style="font-family: 'Sukhumvit Set';font-weight: 400;font-size: 18px;color: #FFFFFF;" data-toggle="tooltip" data-placement="bottom" title="เกี่ยวกับเรา">About</a>
		<div class="form-group destoydiv2">
		</div>
		<div class="col-md-3 nobreak"><a class="nav-link" href="#" style="font-family: 'Sukhumvit Set';font-weight: 400;font-size: 18px;color: #FFFFFF; text-align: right" data-toggle="tooltip" data-placement="bottom" title="คุณคือผู้ใช้งานขณะนี้">ยินดีต้อนรับ
				<?php
				      $username = $_SESSION[ "MemberID" ];
				   	   $sql = "SELECT titlename.TitleName_Th,member.Fname FROM titlename,member WHERE titlename.TitleNameID = member.TitleName AND member.MemID = '$username';";
				   	   $result = $link->query( $sql );
				   		if ( $result->num_rows == 0 ) {

								echo "เออเร่อ";
						}else{

							$row = $result->fetch_object();
							$titlename= $row->TitleName_Th;
						   	$name = $row->Fname;
							echo $name;
						}

				   ?>
	  			</a>

		</div>
		<a class="nav-link" href="logout.php" style="font-family: 'Sukhumvit Set';font-weight: 400;font-size: 18px;color: #FFFFFF;" data-toggle="tooltip" data-placement="bottom" title="ออกจากระบบสืบค้น">ออกจากระบบ</a>
	</nav>

	<main>
		<!-- InstanceBeginEditable name="Content" -->
 <div class="limiter">
	<div class="container-login100">
		<div class="wrap-main">
			<form action="main.php" class='needs-validation form-horizontal  table-striped' id="formsq" role='form' method="post" novalidate>
				  <div class='col-md-10 col-md-offset-1 labelH_form_font'>
					  ระบบสืบค้นปริญญานิพนธ์
				  </div>
				  <hr width="100%" color="#FFFFFF"><p>
          <div class='form-group row justify-content-center'>
            <label class='col-form-label label_form_font' for="thesis_year" style="text-align: right">ปีที่จัดทำ</label>
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
			<label class='col-form-label label_form_font' for="sq" style="text-align: right">สืบค้นโดย</label>
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
          	  <div class='col-md-4'>
          		 <input class='form-control font_ek_14' name="keyword" id="keyword" placeholder='ระบุคำสืบค้น' type='search' disabled required>
				  <div class="invalid-tooltip">
        กรุณากรอกคำสืบค้น
        </div>
            </div>
		    <div class='col-md-1 align-self-center'>
				<button type="submit" name="submit_q"  class="btn-sm btn-success label_form_font" data-toggle="tooltip" data-placement="bottom"
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
								 </tr>
								 </thead>
								 <tbody>
								 <?php
								 	 if($result->num_rows==0)
									{
								?>
										<tr>
											<td style="font-weight: bold; text-align: center; color: rgb(255, 0, 0)" colspan="6">---ไม่พบข้อมูล---</td>
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
									  <td><a href="sh_thesis.php?tid=<?=$row->tid;?>" target="_blank"><?php echo $row->tn_th; ?></a></td>
									  <td><?php echo $row->tc_th; ?></td>
									  <td><?php echo $row->pn_th;?></td>
									  <td><?php echo $row->an_th;?></td>
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
						<a class="page-link" href="main.php" aria-label="Previous">
							<span aria-hidden="true">&laquo;</span>
						</a>
						</li>
							<?php for($i=1;$i<=$total_page;$i++)
							{
							?>
							 	<li class="page-item"><a class="page-link" href="main.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
							<?php
							}
							?>
							 <li class="page-item">
								<a class="page-link" href="main.php?page=<?php echo $total_page;?>" aria-label="Next">
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
					<img class="banner-img" src="public/images/login_09.jpg" alt="">
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
</body>

<!-- InstanceEnd --></html>
