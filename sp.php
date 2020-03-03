<?php
session_start();
include("conn.php");
?>
<!DOCTYPE html>
<html lang="th"><!-- InstanceBegin template="/Templates/Admin.dwt.php" codeOutsideHTMLIsLocked="false" -->

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- InstanceBeginEditable name="doctitle" -->
	<title>SPECIAL</title>
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
			margin-left: 21.5%;
		}
		
		.destoydiv2 {
			margin-left: 0%;
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
		<a class="nav-link" href="admin.php" style="font-family: 'Sukhumvit Set';font-weight: 400;font-size: 18px;color: #FFFFFF;" data-toggle="tooltip" data-placement="bottom" title="เข้าสู่หน้าหลัก">หน้าหลัก</a>
		<a class="nav-link dropdown-toggle" data-toggle="dropdown" style="font-family: 'Sukhumvit Set';font-weight: 400;font-size: 18px;color: #FFFFFF;" data-toggle="tooltip" data-placement="bottom" title="จัดการปริญญานิพนธ์">การจัดการฐานข้อมูล</a>
			<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				<a class="dropdown-item" href="admin.php" data-toggle="tooltip" data-placement="right" title="ปริญญานิพนธ์">ปริญานิพนธ์</a>
				<a class="dropdown-item" href="category.php" data-toggle="tooltip" data-placement="right" title="ประเภทปริญญานิพนธ์">ประเภทปริญานิพนธ์</a>
				<a class="dropdown-item" href="provider.php" data-toggle="tooltip" data-placement="right" title="ผู้จัดทำปริญญานิพนธ์">ผู้จัดทำปริญานิพนธ์</a>
				<a class="dropdown-item" href="advisor.php" data-toggle="tooltip" data-placement="right" title="อาจารย์ที่ปรึกษาปริญญานิพนธ์">อาจารย์ที่ปรึกษาปริญานิพนธ์</a>
				<a class="dropdown-item" href="faculty.php" data-toggle="tooltip" data-placement="right" title="คณะ">คณะ</a>
				<a class="dropdown-item" href="department.php" data-toggle="tooltip" data-placement="right" title="สาขาวิชา">สาขาวิชา</a>
				<a class="dropdown-item" href="course.php" data-toggle="tooltip" data-placement="right" title="หลักูตร">หลักูตร</a>
				<a class="dropdown-item" href="titlename.php" data-toggle="tooltip" data-placement="right" title="คำนำหน้าชื่อ">คำนำหน้าชื่อ</a>
				<a class="dropdown-item" href="member.php" data-toggle="tooltip" data-placement="right" title="สมาชิก">สมาชิก</a>
				<a class="dropdown-item" href="membertype.php" data-toggle="tooltip" data-placement="right" title="ประเภทสมาชิก">ประเภทสมาชิก</a>
			</div>
		<a class="nav-link" href="sp.php" style="font-family: 'Sukhumvit Set';font-weight: 400;font-size: 18px;color: #FFFFFF;" data-toggle="tooltip" data-placement="bottom" title="งาน Query เดี่ยว">Query</a>
		<div class="form-group destoydiv2">
		</div>
		<div class="col-md-3 nobreak"><a class="nav-link" href="#" style="font-family: 'Sukhumvit Set';font-weight: 400;font-size: 18px;color: #FFFFFF; text-align: right" data-toggle="tooltip" data-placement="bottom" title="คุณคือผู้ดูแลระบบ">ยินดีต้อนรับ Admin 
				<?php
				      $username = $_SESSION[ "AdminID" ];
				   	   $sql = "SELECT admin.Fname FROM admin WHERE admin.AdminID = '$username';";
				   	   $result = $link->query( $sql );
				   		if ( $result->num_rows == 0 ) {
							
								echo "เออเร่อ";
						}else{
							
							$row = $result->fetch_object();
						   	$name = $row->Fname;
							echo $name;
						}
				   		
				   ?>
	  			</a>

		</div>
		<a class="nav-link" href="logout.php" style="font-family: 'Sukhumvit Set';font-weight: 400;font-size: 18px;color: #FFFFFF;" data-toggle="tooltip" data-placement="bottom" title="ออกจากระบบ">ออกจากระบบ</a>
	</nav>

	<main>
		<!-- InstanceBeginEditable name="Content" -->
<div class="limiter">
	<div class="container-login100">
		<div class="wrap-sp">
      		  <form action="" class='needs-validation form-horizontal' role='form'  novalidate>
				  <div class='col-md-10 col-md-offset-1 labelH_form_font'>
					  Query System
				  </div>
				  <hr width="100%" color="#FFFFFF"><p>
          <div class='form-group row'>
            <label class='col-md-3 col-form-label offset-md-1 label_form_font'  for="std">เลือกนักศึกษา</label>
           <div class='col-md-4'>
             <select class='form-control' id="std"  onChange="getSelectValue();">
					<option value="NULL" selected="selected">กรุณาเลือก</option>
					<option value="SY">นายยุทธศาสตร์ นอขุนทด</option>
					<option value="SC">นายฉันทวุฒิ รวมใหม่</option>
				    <option value="SP">นายปรมัตร์ แนบกระโทก</option>
            </select>
          </div>
        </div>
		<div id="Y" style="display:none">
		<hr  width="100%" color="#FFFFFF">
		<div class="alert alert-success" role="alert">
 		 <h5 class="alert-heading">โจทย์</h5>
 		 <p class="mb-0">ที่ปรึกษาจากภายนอกมีกี่เรื่องและเรื่องใดบ้าง</p>
		</div>
		<div class="alert alert-success" role="alert" style="text-align: left">
 		 <h5 class="alert-heading">Query</h5>&nbsp;<br>
 		 <p class="mb-0">SELECT @ct := COUNT(*) AS 'จำนวนปริญญานิพนธ์'<br>
						FROM (<br>
						SELECT `thesis`.`ThesisID` AS 'รหัสปริญญานิพนธ์',`thesis`.`Title_Th` AS 'เรื่อง',<br>
						CONCAT(`titlename`.`TitleName_Th`,`advisor`.`Fname_Th`,' ',`advisor`.`Lname_Th`)AS 'อาจารย์ที่ปรึกษา',<br>
			 			`status`.`Status` AS 'สถานะที่ปรึกษา'<br>
						FROM `thesis` INNER JOIN `provider`<br>
						ON (`thesis`.`ThesisID`=`provider`.`Thesis`) INNER JOIN `provider_advisor` <br>
						ON (`provider`.`ProviderID`=`provider_advisor`.`Provider`) INNER JOIN `advisor`<br>
						ON (`advisor`.`AdvisorID`=`provider_advisor`.`Advisor`)INNER JOIN `status`<br>
						ON (`Status`.`StatusID`=`provider_advisor`.`Status_Addess`) INNER JOIN `titlename`<br>
						ON (`provider`.`TitleName`=`titlename`.`TitleNameID`)<br>
						WHERE `provider_advisor`.`Status_Addess`=04<br>
						GROUP BY `ThesisID`<br>
						)AS ts;<p>&nbsp;<p>
						SELECT  @ct,`thesis`.`ThesisID` AS 'รหัสปริญญานิพนธ์',`thesis`.`Title_Th` AS 'เรื่อง',<br>
						CONCAT(`titlename`.`TitleName_Th`,`advisor`.`Fname_Th`,' ',`advisor`.`Lname_Th`)AS 'อาจารย์ที่ปรึกษา',<br>
			 			`status`.`Status` AS 'สถานะที่ปรึกษา'<br>
						FROM `thesis` INNER JOIN `provider`<br>
						ON (`thesis`.`ThesisID`=`provider`.`Thesis`) INNER JOIN `provider_advisor` <br>
						ON (`provider`.`ProviderID`=`provider_advisor`.`Provider`) INNER JOIN `advisor`<br>
						ON (`advisor`.`AdvisorID`=`provider_advisor`.`Advisor`)INNER JOIN `status`<br>
						ON (`Status`.`StatusID`=`provider_advisor`.`Status_Addess`) INNER JOIN `titlename`<br>
						ON (`provider`.`TitleName`=`titlename`.`TitleNameID`)<br>
						WHERE `provider_advisor`.`Status_Addess`=04 <br>
						GROUP BY `ThesisID`<p>
		</div>
							<table class="table table-striped">
							  <thead>
								<tr style="text-align: center">
								  <th scope="col"></th>
								  <th scope="col" >จำนวน</th>
								  <th scope="col">รหัส</th>
								  <th scope="col" style="width: 40%">เรื่อง</th>
								  <th scope="col">อาจารย์ที่ปรึกษา</th>
								  <th scope="col">สถานะที่ปรึกษา</th>	
								</tr>
							  </thead>
							  <tbody>
					<?php
							$sql1 = "SELECT @ct := COUNT(*) AS 'cthesis'
									FROM (
									SELECT `thesis`.`ThesisID` AS 'รหัสปริญญานิพนธ์',`thesis`.`Title_Th` AS 'เรื่อง',CONCAT(`titlename`.`TitleName_Th`,`advisor`.`Fname_Th`,' ',`advisor`.`Lname_Th`)AS 'อาจารย์ที่ปรึกษา',`status`.`Status` AS 'สถานะที่ปรึกษา'
									FROM `thesis` INNER JOIN `provider`
									ON (`thesis`.`ThesisID`=`provider`.`Thesis`) INNER JOIN `provider_advisor` 
									ON (`provider`.`ProviderID`=`provider_advisor`.`Provider`) INNER JOIN `advisor`
									ON (`advisor`.`AdvisorID`=`provider_advisor`.`Advisor`)INNER JOIN `status`
									ON (`Status`.`StatusID`=`provider_advisor`.`Status_Addess`) INNER JOIN `titlename`
									ON (`provider`.`TitleName`=`titlename`.`TitleNameID`)
									WHERE `provider_advisor`.`Status_Addess`=04
									GROUP BY `ThesisID`
									)AS ts;
									";
				            $sql2 = "SELECT @ct AS ct,`thesis`.`ThesisID` AS 'thesisid',`thesis`.`Title_Th` AS 'story',CONCAT(`titlename`.`TitleName_Th`,`advisor`.`Fname_Th`,' ',`advisor`.`Lname_Th`)AS aname,`status`.`Status` AS 'status'
									FROM `thesis` INNER JOIN `provider`
									ON (`thesis`.`ThesisID`=`provider`.`Thesis`) INNER JOIN `provider_advisor` 
									ON (`provider`.`ProviderID`=`provider_advisor`.`Provider`) INNER JOIN `advisor`
									ON (`advisor`.`AdvisorID`=`provider_advisor`.`Advisor`)INNER JOIN `status`
									ON (`Status`.`StatusID`=`provider_advisor`.`Status_Addess`) INNER JOIN `titlename`
									ON (`provider`.`TitleName`=`titlename`.`TitleNameID`)
									WHERE `provider_advisor`.`Status_Addess`=04 
									GROUP BY `ThesisID`;";
				  			$result1 = $link->query( $sql1 );
							$result2 = $link->query( $sql2 );
							$a=0;
							while($row=$result2->fetch_object())
							{

								$thesisid = $row->thesisid;
					?>
								<tr>
								  <th scope="row"></th>
								  <td><?php if($a>=1){echo " ";}else{echo $row->ct." เรื่อง";}?></td>
								  <td><?=$row->thesisid;?></td>
								  <td><?=$row->story;?></td>
								  <td><?=$row->aname;?></td>
								  <td><?=$row->status;?></td>
								</tr>
					<?php			$a++;
							}
					?>
							  </tbody>
							</table>
					
		</div>
		 <div id="C" style="display: none">
		<hr  width="100%" color="#FFFFFF">
		<div class="alert alert-success" role="alert">
 		 <h5 class="alert-heading">โจทย์</h5>
 		 <p class="mb-0">อาจารย์ท่านใดที่เป็นที่ปรึกษาโปรเจคมากที่สุด</p>
		</div>
		<div class="alert alert-success" role="alert" style="text-align: left">
 		 <h5 class="alert-heading">Query</h5>&nbsp;<br>
			 <p class="mb-0">SELECT `AdvisorID` AS 'รหัสที่ปรึกษา',`titlename`.`TitleName_Th` AS 'คำนำหน้าชื่อ',`advisor`.`Fname_Th` AS <br>    	  'ชื่อ',`advisor`.`Lname_Th` AS 'นามสกุล' <br>
							FROM `advisor` INNER JOIN `titlename`<br>
							ON (`advisor`.`TitleName`=`titlename`.`TitleNameID`)<br>
							WHERE `AdvisorID` IN(<br>
							SELECT `Advisor` FROM `provider_advisor`<br>
							GROUP BY `Advisor`<br>
							HAVING COUNT(*) >= ALL(<br>
							SELECT COUNT(*) FROM `provider_advisor`<br>
							GROUP BY `Advisor`<br>
							ORDER BY COUNT(*) DESC)<br>
							);
		</div>
							<table class="table table-striped">
							  <thead>
								<tr>
								  <th scope="col"></th>
								  <th scope="col">รหัสที่ปรึกษา</th>
								  <th scope="col">คำนำหน้าชื่อ</th>
								  <th scope="col">ชื่อ</th>
								  <th scope="col">นามสกุล</th>
								</tr>
							  </thead>
							  <tbody>
					<?php
							$sql = "SELECT `AdvisorID` AS 'Adv',`titlename`.`TitleName_Th` AS 'tname',`advisor`.`Fname_Th` AS 'fname',`advisor`.`Lname_Th` AS 'lname'
							FROM `advisor` INNER JOIN `titlename`
							ON (`advisor`.`TitleName`=`titlename`.`TitleNameID`)
							WHERE `AdvisorID` IN(
							SELECT `Advisor` FROM `provider_advisor`
							GROUP BY `Advisor`
							HAVING COUNT(*) >= ALL(
							SELECT COUNT(*) FROM `provider_advisor`
							GROUP BY `Advisor`
							ORDER BY COUNT(*) DESC)
							);";
								  
							$result = $link->query( $sql );
							while($row=$result->fetch_object())
							{
					?>
								<tr>
								  <th scope="row"></th>
								  <td><?=$row->Adv;?></td>
								  <td><?=$row->tname;?></td>
								  <td><?=$row->fname;?></td>
								  <td><?=$row->lname;?></td>
								</tr>
					<?php
							}
					?>
							  </tbody>
							</table>
				
		</div>
		 <div id="P" style="display:none">
		<hr  width="100%" color="#FFFFFF">
		<div class="alert alert-success" role="alert">
 		 <h5 class="alert-heading">โจทย์</h5>
 		 <p class="mb-0">แต่ละปีมีปริญญานิพนธ์แต่ละประเภทกี่เรื่อง</p>
		</div>
		<div class="alert alert-success" role="alert" style="text-align: left">
 		 <h5 class="alert-heading">Query</h5>&nbsp;<br>
			 <p class="mb-0">SELECT `Thesis_Year`,`Category_Th`, COUNT(*) AS 'จำนวน'<br>
							FROM (<br>
							SELECT `Category`.`Category_Th`,`thesis`.`Thesis_Year`<br>
							FROM `thesis` INNER JOIN `category`<br>
							ON (`thesis`.`Category`=`category`.`CategoryID`)<br>
							WHERE `Thesis_Year` = 2548     <br>
							)AS c48<br>
							GROUP BY `Category_Th`;<br>
							&nbsp;<br>
				 			SELECT `Thesis_Year`,`Category_Th`, COUNT(*) AS 'จำนวน'<br>
							FROM (<br>
							SELECT `Category`.`Category_Th`,`thesis`.`Thesis_Year`<br>
							FROM `thesis` INNER JOIN `category`<br>
							ON (`thesis`.`Category`=`category`.`CategoryID`)<br>
							WHERE `Thesis_Year` = 2549     <br>
							)AS c49<br>
							GROUP BY `Category_Th`;<br>
							&nbsp;<br>
							SELECT `Thesis_Year`,`Category_Th`, COUNT(*) AS 'จำนวน'<br>
							FROM (<br>
							SELECT `Category`.`Category_Th`,`thesis`.`Thesis_Year`<br>
							FROM `thesis` INNER JOIN `category`<br>
							ON (`thesis`.`Category`=`category`.`CategoryID`)<br>
							WHERE `Thesis_Year` = 2550 <br>    
							)AS c50<br>
							GROUP BY `Category_Th`;<br>
							&nbsp;<br>
							SELECT `Thesis_Year`,`Category_Th`, COUNT(*) AS 'จำนวน'<br>
							FROM (<br>
							SELECT `Category`.`Category_Th`,`thesis`.`Thesis_Year`<br>
							FROM `thesis` INNER JOIN `category`<br>
							ON (`thesis`.`Category`=`category`.`CategoryID`)<br>
							WHERE `Thesis_Year` = 2551<br>     
							)AS c51<br>
							GROUP BY `Category_Th`;<br>
							&nbsp;<br>
							SELECT `Thesis_Year`,`Category_Th`, COUNT(*) AS 'จำนวน'<br>
							FROM (<br>
							SELECT `Category`.`Category_Th`,`thesis`.`Thesis_Year`<br>
							FROM `thesis` INNER JOIN `category`<br>
							ON (`thesis`.`Category`=`category`.`CategoryID`)<br>
							WHERE `Thesis_Year` = 2552 <br>    
							)AS c52<br>
							GROUP BY `Category_Th`;<br>
							&nbsp;<br>
							SELECT `Thesis_Year`,`Category_Th`, COUNT(*) AS 'จำนวน'<br>
							FROM (<br>
							SELECT `Category`.`Category_Th`,`thesis`.`Thesis_Year`<br>
							FROM `thesis` INNER JOIN `category`<br>
							ON (`thesis`.`Category`=`category`.`CategoryID`)<br>
							WHERE `Thesis_Year` = 2553  <br>   
							)AS c53<br>
							GROUP BY `Category_Th`;<br>
							&nbsp;<br>
							SELECT `Thesis_Year`,`Category_Th`, COUNT(*) AS 'จำนวน'<br>
							FROM (<br>
							SELECT `Category`.`Category_Th`,`thesis`.`Thesis_Year`<br>
							FROM `thesis` INNER JOIN `category`<br>
							ON (`thesis`.`Category`=`category`.`CategoryID`)<br>
							WHERE `Thesis_Year` = 2554 <br>   
							)AS c54<br>
							GROUP BY `Category_Th`;<br>
							&nbsp;<br>
							SELECT `Thesis_Year`,`Category_Th`, COUNT(*) AS 'จำนวน'<br>
							FROM (<br>
							SELECT `Category`.`Category_Th`,`thesis`.`Thesis_Year`<br>
							FROM `thesis` INNER JOIN `category`<br>
							ON (`thesis`.`Category`=`category`.`CategoryID`)<br>
							WHERE `Thesis_Year` = 2555     <br>
							)AS c55<br>
							GROUP BY `Category_Th`;<br>
							&nbsp;<br>
							SELECT `Thesis_Year`,`Category_Th`, COUNT(*) AS 'จำนวน'<br>
							FROM (<br>
							SELECT `Category`.`Category_Th`,`thesis`.`Thesis_Year`<br>
							FROM `thesis` INNER JOIN `category`<br>
							ON (`thesis`.`Category`=`category`.`CategoryID`)<br>
							WHERE `Thesis_Year` = 2556     <br>
							)AS c56<br>
							GROUP BY `Category_Th`;<br>
							&nbsp;<br>
							SELECT `Thesis_Year`,`Category_Th`, COUNT(*) AS 'จำนวน'<br>
							FROM (<br>
							SELECT `Category`.`Category_Th`,`thesis`.`Thesis_Year`<br>
							FROM `thesis` INNER JOIN `category`<br>
							ON (`thesis`.`Category`=`category`.`CategoryID`)<br>
							WHERE `Thesis_Year` = 2557     <br>
							)AS c57<br>
							GROUP BY `Category_Th`;<br>
							&nbsp;<br>
							SELECT `Thesis_Year`,`Category_Th`, COUNT(*) AS 'จำนวน'<br>
							FROM (<br>
							SELECT `Category`.`Category_Th`,`thesis`.`Thesis_Year`<br>
							FROM `thesis` INNER JOIN `category`<br>
							ON (`thesis`.`Category`=`category`.`CategoryID`)<br>
							WHERE `Thesis_Year` = 2558<br>     
							)AS c58<br>
							GROUP BY `Category_Th`;<br>
							&nbsp;<br>
							SELECT `Thesis_Year`,`Category_Th`, COUNT(*) AS 'จำนวน'<br>
							FROM (<br>
							SELECT `Category`.`Category_Th`,`thesis`.`Thesis_Year`<br>
							FROM `thesis` INNER JOIN `category`<br>
							ON (`thesis`.`Category`=`category`.`CategoryID`)<br>
							WHERE `Thesis_Year` = 2559   <br>  
							)AS c59<br>
							GROUP BY `Category_Th`;<br>
		</div>
							<table class="table table-striped">
							  <thead>
								<tr>
								  <th scope="col"></th>
								  <th scope="col">ปีการศึกษา</th>
								  <th scope="col">ประเภทปริญญานิพนธ์</th>
								  <th scope="col">จำนวน</th>
								</tr>
							  </thead>
							  <tbody>
					<?php
								  $thesisyear = 2548;
								  $i=1;
								  while ($thesisyear<=2559)
								  {
									 
									$sql = "SELECT `Thesis_Year`,`Category_Th`, COUNT(*) AS ct
									FROM (
									SELECT `Category`.`Category_Th`,`thesis`.`Thesis_Year`
									FROM `thesis` INNER JOIN `category`
									ON (`thesis`.`Category`=`category`.`CategoryID`)
									WHERE `Thesis_Year` = $thesisyear     
									)AS c49
									GROUP BY `Category_Th`;";
								    
							$cl=1;	  
							$result = $link->query( $sql );
							while($row=$result->fetch_object())
							{
								
					?>
								<tr>
								  <th scope="row"></th>
					<?php
								 if($cl<2)
								 { 
					?>
								  <td><?=$row->Thesis_Year;?></td>
					<?php
								 }else
								 {
					?>
								  <td>&nbsp;</td>
					<?php	 
								 }
					?>
								  <td><?=$row->Category_Th;?></td>
								  <td><?=$row->ct;?></td>
						</tr>
						<?php
								$cl=$cl+$i;
							}
								$thesisyear = $thesisyear+$i;
								  }
					?>
						
							  </tbody>
							</table>
					
		</div>
        </form>
		</div>
	</div>
</div>
  <script>
        function getSelectValue()
        {
            var selectedValue = document.getElementById("std").value;
            if(selectedValue == 'SY')
			{
				
				$('#Y').show();
				$('#C').hide();
				$('#P').hide();
			}
			else if(selectedValue == 'SC')
			{
				$('#Y').hide();
				$('#C').show();
				$('#P').hide();
			}
			else if(selectedValue == 'SP')
			{
				$('#Y').hide();
				$('#C').hide();
				$('#P').show();
			}
			else 
			{
				$('#Y').hide();
				$('#C').hide();
				$('#P').hide();
			}
        }
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
	<script src="bootstrap/dist/js/popper.min.js"></script>
	<script src="jquery/jquery-3.3.1.js"></script>
	<script src="bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="bootstrap/dist/js/bootstrap.bundle.js"></script>
	<!-- InstanceBeginEditable name="script" -->
	<!-- InstanceEndEditable -->
	<script>
		$(document).ready(function()
		{
			$('[data-toggle="tooltip"]').tooltip({ trigger: "hover" });
		});
	</script>
</body>
<!-- InstanceEnd --></html>