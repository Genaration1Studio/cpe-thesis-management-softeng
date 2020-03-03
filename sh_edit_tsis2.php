<?php
session_start();
include("conn.php");
?>
<!DOCTYPE html>
<html lang="th"><!-- InstanceBegin template="/Templates/Admin.dwt.php" codeOutsideHTMLIsLocked="false" -->

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- InstanceBeginEditable name="doctitle" -->
	<title>Edit Thesis</title>
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
							echo $titlename; echo $name;
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
		<div class="wrap-main">
<form>
<?php
		$i=1;
		$j=1;
		$thesis_data=array();
		$an=array();
		$thesis_data_n=array();
		$an_n=array();
		$thesis_id = $_GET['tid'];	
		$sql="SELECT `thesis`.`ThesisID` AS tid,thesis.Thesis_Year AS ty,thesis.Title_Th AS tn_th,thesis.`Title_En` AS tn_en,
			category.Category_Th AS tc_th,category.`Category_En` AS tc_en,`Category`.`CategoryID` AS cid,
			CONCAT(t1.`TitleName_Th`,`provider`.`Fname_Th`,' ',`provider`.`Lname_Th`)AS pn_th,
			CONCAT(t1.`TitleName_En`,`provider`.`Fname_En`,' ',`provider`.`Lname_En`) AS pn_en,
			`thesis`.`Abstract_Th` AS tab_th,`thesis`.`Abstract_En` AS tab_en,`thesis`.`LocationCollection` AS tlo
			FROM thesis LEFT OUTER JOIN category ON thesis.Category = category.CategoryID
			LEFT OUTER JOIN provider ON provider.Thesis = thesis.ThesisID 
			LEFT OUTER JOIN `titlename` AS t1 ON t1.TitleNameID = `provider`.TitleName
			LEFT OUTER JOIN provider_advisor ON provider_advisor.Provider = provider.ProviderID
			LEFT OUTER JOIN advisor ON advisor.AdvisorID = provider_advisor.Advisor 
			LEFT OUTER JOIN titlename AS t2 ON t2.TitleNameID = `advisor`.TitleName
			WHERE `thesis`.`ThesisID` = $thesis_id ;";
	    
		$result = $link->query( $sql );
		while ( $row=$result->fetch_object())
		{
			if($i==1)
			{
				$thesis_data[$i]=$row->tid;
				$i++;
				$thesis_data[$i]=$row->ty;
				$i++;
				$thesis_data[$i]=$row->tn_th;
				$i++;
				$thesis_data[$i]=$row->tn_en;
				$i++;
				$thesis_data[$i]=$row->tc_th;
				$i++;
				$thesis_data[$i]=$row->tc_en;
				$i++;
				$thesis_data[$i]=$row->tab_th;
				$i++;
				$thesis_data[$i]=$row->tab_en;
				$i++;
				$thesis_data[$i]=$row->tlo;
				$i++;
				
			}	
			$thesis_data[$i]=$row->pn_th;
			$i++;
			$thesis_data[$i]=$row->pn_en;
			$i++;
		}
		$thesis_data = array_unique($thesis_data);
		
		$sql2="SELECT CONCAT(t2.`TitleName_Th`,`advisor`.`Fname_Th`,' ',`advisor`.`Lname_Th`)AS an_th,
			CONCAT(t2.`TitleName_En`,`advisor`.`Fname_En`,' ',`advisor`.`Lname_En`) AS an_en
			FROM thesis LEFT OUTER JOIN category ON thesis.Category = category.CategoryID
			LEFT OUTER JOIN provider ON provider.Thesis = thesis.ThesisID 
			LEFT OUTER JOIN `titlename` AS t1 ON t1.TitleNameID = `provider`.TitleName
			LEFT OUTER JOIN provider_advisor ON provider_advisor.Provider = provider.ProviderID
			LEFT OUTER JOIN advisor ON advisor.AdvisorID = provider_advisor.Advisor 
			LEFT OUTER JOIN titlename AS t2 ON t2.TitleNameID = `advisor`.TitleName
			WHERE `thesis`.`ThesisID` = $thesis_id ;";
	    
		$result2 = $link->query( $sql2 );
		while ( $row2=$result2->fetch_object())
		{
			$an[$j]=$row2->an_th;
			$j++;
			$an[$j]=$row2->an_en;
			$j++;
		}
		$an = array_unique($an);
	
?>
			<div class="row">
				<?php
						$k = 0;
				        $q = 0;
						foreach( $thesis_data as $value ) 
						{
							$thesis_data_n[$k]=$value;
							$k++;
						}
						foreach( $an as $value ) 
						{
							$an_n[$q]=$value;
							$q++;
						}	
?>
				
			</div>
	 <div class='col-md-7 col-md-offset-1 label_formt_font'> 
		 <input class='form-control' name="tname_th" placeholder='ชื่อปริญญานิพนธ์' type='text' value="<?php echo $thesis_data_n[2];?>" autofocus>
	</div>		
	<div class='col-md-7 col-md-offset-1'>
		<input class='form-control' name="tname_en" placeholder='Thesisname' type='text' value="<?php echo strtoupper($thesis_data_n[3]);?>">
	 </div>				           
<hr width="100%" color="#454545"><p>
				<div class="col-lg-12 col-md-offset-1">
					 <table class="table table-striped" style="width: 100%">
								 <tbody>									
								 	<tr>
										<td width="100%">
										<div class="form-group row">
											<label class='col-form-label col-md-2'for="tid" >รหัสปริญญานิพนธ์ : </label>
										<div class='col-md-2'>
											<input class='form-control' name="tid" placeholder='รหัสปริญญานิพนธ์' type='text' value="<?php echo $thesis_data_n[0];?>">	
										</div>
										&emsp;&emsp;&emsp;
											<label class='col-form-label col-md-2'for="tc">ประเภท : </label>
										<div class='col-md-3'>
										<select class="form-control cc-select" name="tc" id="tc" onChange="getSelectValue();">
												<?php
													$sql = "SELECT `CategoryID` AS cid,`Category_Th` AS ctth,`Category_En` AS cte FROM `category`;";
													$result = $link->query($sql);
													while($row=$result->fetch_object())
													{
												?>
														<option value="<?php echo $row->cid;?>" 
												<?php
														if($row->ctth==$thesis_data_n[4])
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
												<option value=" ">ไม่มีประเภท</option>
												<option value="add_c">--เพิ่ม-ข้อมูลประเภท--</option>
											</select>
										</div>
										</div>
										<div class="form-group row">
											<label class='col-form-label col-md-2'for="ty" >ปีที่จัดทำ : </label>
										<div class='col-md-2'>
											<input class='form-control' name="ty" placeholder='ปีที่จัดทำ' type='text' value="<?php echo $thesis_data_n[1];?>">	
										</div>
										&emsp;&emsp;&emsp;
											<label class='col-form-label col-md-2'for="tl" >สถานที่จัดเก็บ : </label>
										<div class='col-md-2'>
											<input class='form-control' name="tl" placeholder='สถานที่จัดเก็บ' type='text' value="<?php echo $thesis_data_n[8];?>">	
										</div>
										</div>
										</td>
									 </tr>
									<?php
									 if(count($thesis_data_n)<=13)
									 {									 
									?>
									<tr>
									<?php
											if(count($thesis_data_n)==11)
											{
										?>
												<td>
													<div class="form-group row">
														<label class='col-form-label col-md-1'for="tp" >ผู้จัดทำ :</label>
													<div class='col-md-3'>
														<select class="form-control cc-select" name="tp" id="tp" onChange="getSelectValue();">
												
												<?php
													$sql = "SELECT provider.ProviderID AS pid,CONCAT(titlename.TitleName_Th,provider.Fname_Th,' ',provider.Lname_Th)AS pname FROM provider,titlename WHERE provider.TitleName = titlename.TitleNameID;";
													$result = $link->query($sql);
													while($row=$result->fetch_object())
													{
												?>
														<option value="<?php echo $row->pid;?>" 
												<?php
														if($row->pname==$thesis_data_n[9])
														{
												?>
															selected
												<?php
														}
												?>
														><?=$row->pname;?></option>
												<?php
													}
												?>
												<option  value=" ">ไม่มีผู้จัดทำ</option>
												<option value="add_p">--เพิ่มข้อมูลผู้จัดทำ--</option>
													</select>
													</div>
							
													<div class='col-md-3' id="p2" style="display: none">
														<select class="form-control cc-select" name="tp2" id="tp2" onChange="getSelectValue();">
															<option selected>กรุณาเลือก</option>
														<?php
															$sql = "SELECT provider.ProviderID AS pid,CONCAT(titlename.TitleName_Th,provider.Fname_Th,' ',provider.Lname_Th)AS pname FROM provider,titlename WHERE provider.TitleName = titlename.TitleNameID;";
															$result = $link->query($sql);
															while($row=$result->fetch_object())
															{
														?>
																<option value="<?php echo $row->pid;?>"><?=$row->pname;?></option>
														<?php
															}
														?>
														<option  value=" ">ไม่มีผู้จัดทำ</option>
														<option value="add_p2">--เพิ่มข้อมูลผู้จัดทำ--</option>
													</select>
													</div>
														
														
														<div class='col-md-3' id="p4" style="display: none">
														<select class="form-control cc-select" name="tp3" id="tp3" onChange="getSelectValue();">
															<option selected>กรุณาเลือก</option>
														<?php
															$sql = "SELECT provider.ProviderID AS pid,CONCAT(titlename.TitleName_Th,provider.Fname_Th,' ',provider.Lname_Th)AS pname FROM provider,titlename WHERE provider.TitleName = titlename.TitleNameID;";
															$result = $link->query($sql);
															while($row=$result->fetch_object())
															{
														?>
																<option value="<?php echo $row->pid;?>"><?=$row->pname;?></option>
														<?php
															}
														?>
														<option  value=" ">ไม่มีผู้จัดทำ</option>
														<option value="add_p3">--เพิ่มข้อมูลผู้จัดทำ--</option>
													</select>
													</div>
														
														<div class='col-md-1 align-self-center'>
															<img  src="images/baseline_add_to_photos_black_18dp.png" width="25px" data-toggle="tooltip" data-placement="top" title="เพิ่มผู้จัดทำ" id="add_p_1" onClick="p1();"/>
															<img src="images/baseline_add_to_photos_black_18dp.png" width="25px" data-toggle="tooltip" data-placement="top" title="เพิ่มผู้จัดทำ" id="add_p_2" style="display: none" onClick="p2();"/>
															<img src="images/baseline_add_to_photos_black_18dp.png" width="25px" data-toggle="tooltip" data-placement="top" title="เพิ่มผู้จัดทำ" id="add_p_3" style="display: none"/>
															<img src="images/baseline_remove_circle_black_18dp.png" width="25px" data-toggle="tooltip" data-placement="top" title="ลบผู้จัดทำ" id="remove_p_1"  style="display: none" onClick="hp1();"/>
															<img src="images/baseline_remove_circle_black_18dp.png" width="25px" data-toggle="tooltip" data-placement="top" title="ลบผู้จัดทำ" id="remove_p_2" style="display: none" onClick="hp2();"/>
															<img src="images/baseline_remove_circle_black_18dp.png" width="25px" data-toggle="tooltip" data-placement="top" title="ลบผู้จัดทำ" id="remove_p_3" style="display: none" onClick="hp3();"/>
														</div>
													</div>
												</td>
										<?php
											}else
											{
										?>
												<td><div class="form-group row">
														<label class='col-form-label col-md-2'for="tp" >อาจารย์ที่ปรึกษา :</label>
													<div class='col-md-3'>
														<select class="form-control cc-select" name="ta" id="ta" onChange="getSelectValue();">
												
												<?php
													$sql = "SELECT provider.ProviderID AS pid,CONCAT(titlename.TitleName_Th,provider.Fname_Th,' ',provider.Lname_Th)AS pname FROM provider,titlename WHERE provider.TitleName = titlename.TitleNameID;";
													$result = $link->query($sql);
													while($row=$result->fetch_object())
													{
												?>
														<option value="<?php echo $row->pid;?>" 
												<?php
														if($row->pname==$thesis_data_n[9])
														{
												?>
															selected
												<?php
														}
												?>
														><?=$row->pname;?></option>
												<?php
													}
												?>
												<option  value=" ">ไม่มีผู้จัดทำ</option>
												<option value="add_p">--เพิ่มข้อมูลผู้จัดทำ--</option>
													</select>
													</div>
							
													<div class='col-md-3' id="p2" style="display: none">
														<select class="form-control cc-select" name="tp2" id="tp2" onChange="getSelectValue();">
															<option selected>กรุณาเลือก</option>
														<?php
															$sql = "SELECT provider.ProviderID AS pid,CONCAT(titlename.TitleName_Th,provider.Fname_Th,' ',provider.Lname_Th)AS pname FROM provider,titlename WHERE provider.TitleName = titlename.TitleNameID;";
															$result = $link->query($sql);
															while($row=$result->fetch_object())
															{
														?>
																<option value="<?php echo $row->pid;?>"><?=$row->pname;?></option>
														<?php
															}
														?>
														<option  value=" ">ไม่มีผู้จัดทำ</option>
														<option value="add_p2">--เพิ่มข้อมูลผู้จัดทำ--</option>
													</select>
													</div>
														
														
														<div class='col-md-3' id="p4" style="display: none">
														<select class="form-control cc-select" name="tp3" id="tp3" onChange="getSelectValue();">
															<option selected>กรุณาเลือก</option>
														<?php
															$sql = "SELECT provider.ProviderID AS pid,CONCAT(titlename.TitleName_Th,provider.Fname_Th,' ',provider.Lname_Th)AS pname FROM provider,titlename WHERE provider.TitleName = titlename.TitleNameID;";
															$result = $link->query($sql);
															while($row=$result->fetch_object())
															{
														?>
																<option value="<?php echo $row->pid;?>"><?=$row->pname;?></option>
														<?php
															}
														?>
														<option  value=" ">ไม่มีผู้จัดทำ</option>
														<option value="add_p3">--เพิ่มข้อมูลผู้จัดทำ--</option>
													</select>
													</div>
														
														<div class='col-md-1 align-self-center'>
															<img  src="images/baseline_add_to_photos_black_18dp.png" width="25px" data-toggle="tooltip" data-placement="top" title="เพิ่มผู้จัดทำ" id="add_p_1" onClick="p1();"/>
															<img src="images/baseline_add_to_photos_black_18dp.png" width="25px" data-toggle="tooltip" data-placement="top" title="เพิ่มผู้จัดทำ" id="add_p_2" style="display: none" onClick="p2();"/>
															<img src="images/baseline_add_to_photos_black_18dp.png" width="25px" data-toggle="tooltip" data-placement="top" title="เพิ่มผู้จัดทำ" id="add_p_3" style="display: none"/>
															<img src="images/baseline_remove_circle_black_18dp.png" width="25px" data-toggle="tooltip" data-placement="top" title="ลบผู้จัดทำ" id="remove_p_1"  style="display: none" onClick="hp1();"/>
															<img src="images/baseline_remove_circle_black_18dp.png" width="25px" data-toggle="tooltip" data-placement="top" title="ลบผู้จัดทำ" id="remove_p_2" style="display: none" onClick="hp2();"/>
															<img src="images/baseline_remove_circle_black_18dp.png" width="25px" data-toggle="tooltip" data-placement="top" title="ลบผู้จัดทำ" id="remove_p_3" style="display: none" onClick="hp3();"/>
														</div>
													</div>
	
												</td>
										<?php
											}
										?>
									</tr>
									<?php
									}
									else
									{
									?>	
									<?php
											if(count($thesis_data_n)==15)
											{
										?>   <tr>
												<td><?php echo "ผู้จัดทำ : ".$thesis_data_n[9]."&nbsp;,&nbsp;".$thesis_data_n[11]."&nbsp;,&nbsp;".$thesis_data_n[13]; ?></td>
											 </tr>
									         <tr>
												 <td><?php echo "Provider : ".$thesis_data_n[10]."&nbsp;,&nbsp;".$thesis_data_n[12]."&nbsp;,&nbsp;".$thesis_data_n[14]; ?></td>
									         </tr>
										<?php
											}else
											{
										?>
												<tr>
												<td><?php echo "ผู้จัดทำ : ".$thesis_data_n[9]."&nbsp;,&nbsp;".$thesis_data_n[11]."&nbsp;,&nbsp;".$thesis_data_n[13]."&nbsp;,&nbsp;".$thesis_data_n[15]; ?></td>
												 </tr>
												 <tr>
												 <td><?php echo "Provider : ".$thesis_data_n[10]."&nbsp;,&nbsp;".$thesis_data_n[12]."&nbsp;,&nbsp;".$thesis_data_n[14]."&nbsp;,&nbsp;".$thesis_data_n[16]; ?></td>
									         	</tr>
										<?php
											}
										?>
									<?php	 
									}
									?>
									
									<?php
									 	if(count($an_n)<=4)
										{
									?>
									 <tr>
									<?php
											 if(count($an_n)==2)
											 {
										?> 
												<td><?php echo "อาจารย์ที่ปรึกษา : ".$an_n[0]; ?>
													 &emsp;&emsp;&emsp;
													 <?php echo "Advisor : ".$an_n[1]; ?>
												</td>
										<?php
											 }else
											 {
										?>
												 <td><?php echo "อาจารย์ที่ปรึกษา : ".$an_n[0]."&nbsp;,&nbsp;".$an_n[2] ;?>
													 &emsp;&emsp;&emsp;
													 <?php echo "Advisor : ".$an_n[1]."&nbsp;,&nbsp;".$an_n[3]; ?>
												</td>
										<?php
											 }
									?>
									 </tr>
									<?php
										}
									 	else
										{
											 if(count($an_n)==6)
											 {	
										?> 		
									 			<tr>
									 			<td><?php echo "อาจารย์ที่ปรึกษา : ".$an_n[0]."&nbsp;,&nbsp;".$an_n[2]."&nbsp;,&nbsp;".$an_n[4]."<br>";?></td>
												</tr>
												<tr>
												<td><?php echo "Advisor : ".$an_n[1]."&nbsp;,&nbsp;".$an_n[3]."&nbsp;,&nbsp;".$an_n[5]."<br>"; ?></td>
												 </tr>
										<?php   
											 }else
											 {
										?>
									 			<tr>
												<td><?php echo "อาจารย์ที่ปรึกษา : ".$an_n[0]."&nbsp;,&nbsp;".$an_n[2]."&nbsp;,&nbsp;".$an_n[4]."&nbsp;,&nbsp;".$an_n[6]."<br>";?></td>
												</tr>
												<tr>
												<td><?php echo "Advisor : ".$an_n[1]."&nbsp;,&nbsp;".$an_n[3]."&nbsp;,&nbsp;".$an_n[5]."&nbsp;,&nbsp;".$an_n[7]."<br>"; ?></td>
						 						</tr>
										<?php
											 }
										}
									?>
									<tr>
									 <td><?php echo "บทคัดย่อ : <br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;".$thesis_data_n[6]; ?></td>
									</tr>
									 <tr>
									 <td><?php echo "Abstract : <br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;".$thesis_data_n[7]; ?></td>
									</tr>
								 </tbody>
						</table>	
</form>
</div>
</div>
</div>
<div class="modal fade" id="md_add_c" tabindex="-1" role="dialog" aria-labelledby="add_c_label" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
	   <form class="needs-validation" method="post" action="add_cat.php"  target="_blank" novalidate>
      <div class="modal-header">
        <h5 class="modal-title labelH_form_font" id="add_label">เพิ่มข้อมูลประเภทปริญญานิพนธ์</h5>
      </div>
      <div class="modal-body">
		    <div class="form-group">
       	    <label for="catid" class="col-form-label label_form_font">รหัสประเภทประเภทปริญญานิพนธ์</label>
            <input type="text" class="form-control" id="cid" name="cid" pattern="([0-9]{1,2}$)"  required>
			<div class="invalid-feedback">
       				 กรุณากรอกรหัสประเภท เป็นตัวเลข 0-9
        	</div>
			</div>
		  	<div class="form-group">
            <label for="catname" class="col-form-label label_form_font">ชื่อประเภท (ไทย)</label>
            <input type="text" class="form-control" id="cname_th" name="cname_th" pattern="^[ก-๙0-9-_\.]{1,255}$"  >
		    <div class="invalid-feedback">
       				 กรุณากรอกชื่อประเภท(ไทย)
        	</div>
			</div>
		  	<div class="form-group">
            <label for="catname" class="col-form-label label_form_font">ชื่อประเภท (อังกฤษ)</label>
            <input type="text" class="form-control" id="cname_en" name="cname_en" pattern="^[a-zA-Z0-9-_\.]{1,255}$"  >
		    <div class="invalid-feedback">
       				 กรุณากรอกชื่อประเภท(อังกฤษ)
        	</div>
			</div>
      </div>
      <div class="modal-footer">
		<input type="submit" class="btn btn-primary label_form_font" name="submit_add"  id="submit_add"  value="บันทึก"/>
        <input type="button" class="btn btn-danger label_form_font" id="btn_can_add" value="ยกเลิก" />
      </div>
	 </form>
    </div>
  </div>
</div>
<div class="modal fade" id="md_add_p" tabindex="-1" role="dialog" aria-labelledby="add_p_label" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
	  <form class="needs-validation" method="post" action="add_pro.php" target="_blank" novalidate>
       <div class="modal-header">
        <h5 class="modal-title labelH_form_font" id="add_label">เพิ่มข้อผู้จัดทำ</h5>
      </div>
      <div class="modal-body">
		<div class="form-group">
				 <label class='col-form-label label_form_font' for="pid" style="text-align: right">รหัสผู้จัดทำ</label>
				<input class='form-control ' name="pid"  id="pid"  type='text'  pattern="([0-9]{1,4}$)" autofocus required>
				  <div class="invalid-feedback">
        กรุณากรอกรหัสผู้จัดทำ เป็นตัวเลข 0-9
        </div>
		</div>
		<div class='form-group'>
			<label class='col-form-label label_form_font' for="tname" style="text-align: right">คำนำหน้าชื่อ</label>
				<select class='form-control cc-select' name="tname" id="tname" required>
				<option value="">กรุณาเลือก</option>
						<?php
							$sql = "SELECT * FROM titlename ORDER BY TitleNameID ASC";
							$result = $link->query( $sql );
							while($row=$result->fetch_object())
							{
						?>
							<option value="<?php echo $row->TitleNameID;?>"><?=$row->TitleName_Th;?> / <?=$row->TitleName_En;?></option>
						<?php
							}
						?>
				</select>
				<div class="invalid-feedback">
        กรุณาเลือกคำนำหน้าชื่อ
        </div>
		</div>
		<div class="form-group">
			<label class='col-form-label label_form_font' for="fname_th" style="text-align: right">ชื่อ (ไทย)</label>
				<input class='form-control ' name="fname_th"  type='text' pattern="^[ก-๙0-9-_\.]{1,255}$" required>
				<div class="invalid-feedback">
       กรุณากรอกชื่อ(ไทย)
        </div>
		</div>
		<div class="form-group">
			<label class='col-form-label label_form_font'  for="lname_th" style="text-align: right">นามสกุล (ไทย)</label>
				<input class='form-control' name="lname_th" type='text' pattern="^[ก-๙0-9-_\.]{1,255}$" required>
				<div class="invalid-feedback">
        กรุณากรอกนามสกุล(ไทย)
        </div>
		</div>
				<div class="form-group">
			<label class='col-form-label label_form_font' for="fname_en" style="text-align: right">ชื่อ (อังกฤษ)</label>
				<input class='form-control ' name="fname_en"  type='text' pattern="^[a-zA-Z0-9-_\.]{1,255}$" required>
				<div class="invalid-feedback">
        กรุณากรอกชื่อ(อังกฤษ)
        </div>
		</div>
		<div class="form-group">
			<label class='col-form-label label_form_font'  for="lname_en" style="text-align: right">นามสกุล (อังกฤษ)</label>
				<input class='form-control' name="lname_en" type='text' pattern="^[a-zA-Z0-9-_\.]{1,255}$" required>
				<div class="invalid-feedback">
          กรุณากรอกนามสกุล(อังกฤษ)
        </div>
		</div>
		<div class='form-group'>
			<label class='col-form-label label_form_font'  for="fact_name" style="text-align: right">คณะ</label>
				<select name="fact_name" class='form-control cc-select ' id="fact_name" onChange="getSelectValue2();"  required>
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
				<select name="dept_name_se" class='form-control cc-select ' id="dapt_name_se"  required>
					<option value="NULL" >กรุณาเลือกคณะ</option>
				</select>
				<select name="dept_bs"  class='form-control cc-select ' id="dapt_bs" style="display: none"  required>
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
				<select name="dept_sci" class='form-control cc-select ' id="dapt_sci" style="display: none"  required>
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
				<select name="dept_ea" class='form-control cc-select ' id="dapt_ea" style="display: none"  required>
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
				<select name="dept_art" class='form-control cc-select ' id="dapt_art" style="display: none"  required>
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
		<div class='form-group'>
			<label class='col-form-label label_form_font'  for="cname" style="text-align: right">หลักสูตร</label>
				<select name="cname" class='form-control cc-select ' id="cname" required>
					<option value="NULL" selected="selected">กรุณาเลือก</option>
					<?php
							$sql = "SELECT * FROM `course` ";
							$result = $link->query( $sql );
							while($row=$result->fetch_object())
							{
					?>
							<option value="<?php echo $row->CourseID;?>"><?=$row->Course;?></option>
					<?php
							}
					?>
				</select>
		</div>
		</div>
      </div>
      <div class="modal-footer">
		<input type="submit" class="btn btn-primary label_form_font" id="submit_add" name="submit_add" value="บันทึก"/>
        <input type="button" class="btn btn-danger label_form_font" id="btn_can_add" value="ยกเลิก" onclick="hide_md();" />
      </div>
	 </form>
    </div>
  </div>
</div>
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
<script>
	  function getSelectValue()
        {
            var selectedValueC = document.getElementById("tc").value;
			if(selectedValueC=='add_c')
			{
			  $('#md_add_c').modal('toggle');
			}
			var selectedValueP = document.getElementById("tp").value;
			if(selectedValueP=='add_p')
			{
			  $('#md_add_p').modal('toggle');
			}
			var selectedValueP2 = document.getElementById("tp2").value;
			if(selectedValueP=='add_p2')
			{
			  $('#md_add_p').modal('toggle');
			}
			var selectedValueP2 = document.getElementById("tp3").value;
			if(selectedValueP=='add_p3')
			{
			  $('#md_add_p').modal('toggle');
			}
		}
</script>
<script>
	function p1()
	{	
		$('#add_p_1').hide();
		$('#add_p_2').show();
	    $('#add_p_3').hide();
		$('#p2').show();
		$('#p4').hide();
		$('#remove_p_1').hide();
		$('#remove_p_2').show();
		$('#remove_p_3').hide();
	}
	function p2()
	{
		$('#add_p_1').hide();
		$('#add_p_2').hide();
	    $('#add_p_3').hide();
		$('#p2').show();
		$('#p4').show();
		$('#remove_p_1').hide();
		$('#remove_p_2').hide();
		$('#remove_p_3').show();
	}
</script>
<script>
	function hp1()
	{
		$('#add_p_1').hide();
		$('#add_p_2').hide();
	    $('#add_p_3').hide();
		$('#p2').hide();
		$('#p4').hide();
		$('#remove_p_1').hide();
		$('#remove_p_2').hide();
		$('#remove_p_3').hide();
	}
		function hp2()
	{
		$('#add_p_1').show();
		$('#add_p_2').hide();
	    $('#add_p_3').hide();
		$('#p2').hide();
		$('#p4').hide();
		$('#remove_p_1').hide();
		$('#remove_p_2').hide();
		$('#remove_p_3').hide();
	}
	function hp3()
	{
		$('#add_p_1').hide();
		$('#add_p_2').show();
	    $('#add_p_3').hide();
		$('#p2').show();
		$('#p4').hide();
		$('#remove_p_1').hide();
		$('#remove_p_2').show();
		$('#remove_p_3').hide();
	}
	
</script>
<script>  
$(document).ready(function(){
$(document).on('click', '#submit_add', function(){
	window.location.reload();
 });
$(document).on('click', '#btn_can_add', function(){
    $('#md_add_c').modal('hide');
	 $('#md_add_p').modal('hide');
 });
});  
});  
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
	
	<!-- InstanceEndEditable -->
	<script>
		$(document).ready(function()
		{
			$('[data-toggle="tooltip"]').tooltip({ trigger: "hover" });
		});
	</script>
</body>
<!-- InstanceEnd --></html>