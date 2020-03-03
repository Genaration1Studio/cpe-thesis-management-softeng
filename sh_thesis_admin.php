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
	          <a class="na-link" href="admin.php" data-toggle="tooltip" data-placement="bottom"
 							 title="หน้าแรก">หน้าแรก <span class="sr-only">(current)</span></a>
	        </li>
	        <li class="nav-item dropdown">
	          <a class="dropdown-toggle na-link" href="#" id="dropdown07" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">การจัดการฐานข้อมูล</a>
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
						<a class="dropdown-toggle na-link" href="#" id="dropdown07" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">การจัดการบัญชีสมาชิก</a>
						<div class="dropdown-menu" aria-labelledby="dropdown07">
							<a class="dropdown-item" href="#">สมาชิก</a>
							<a class="dropdown-item" href="#">ประเภทสมาชก</a>
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
		 <div class="container-thesis">
			 <div class="wrap-thesis">
				 <?php
				 		$i=1;
				 		$j=1;
				 		$thesis_data=array();
				 		$an=array();
				 		$thesis_data_n=array();
				 		$an_n=array();
				 		$thesis_id = $_GET['tid'];
				 		$sql="SELECT `thesis`.`ThesisID` AS tid,thesis.Thesis_Year AS ty,thesis.Title_Th AS tn_th,thesis.`Title_En` AS tn_en,
				 			category.Category_Th AS tc_th,category.`Category_En` AS tc_en,
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
				 	 <div class='col-md-10 col-md-offset-1 head-label-form-font' >
				 		 <?php echo $thesis_data_n[2]."<br/>"; ?>
				 	</div>
				 	<div class='col-md-10 col-md-offset-1'>
				 		<?php echo strtoupper($thesis_data_n[3])."<br/>"; ?>
				 	 </div>
				 <hr width="100%" color="#FFFFFF"><p>
				 				<div class="col-lg-12 col-md-offset-1">
				 					 <table class="table table-striped" style="width: 100%; font-family: tahoma;">
				 								 <tbody>
				 								 	<tr>
				 										<td width="100%"><?php echo "รหัสปริญญานิพนธ์ : ".$thesis_data_n[0];?>
				 										&emsp;&emsp;&emsp;
				 										<?php echo "ประเภท : ".$thesis_data_n[4]."&ensp;(".$thesis_data_n[5].")"; ?>
				 										&emsp;&emsp;&emsp;
				 										<?php echo "ปีที่จัดทำ : ".$thesis_data_n[1];?>
				 										&emsp;&emsp;&emsp;
				 										<?php echo "สถานที่จัดเก็บ : ".$thesis_data_n[8];?>
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
				 												<td><?php echo "ผู้จัดทำ : ".$thesis_data_n[9]; ?>
				 													 &emsp;&emsp;&emsp;
				 													 <?php echo "Provider : ".$thesis_data_n[10]; ?>
				 												</td>
				 										<?php
				 											}else
				 											{
				 										?>
				 												<td><?php echo "ผู้จัดทำ : ".$thesis_data_n[9]."&nbsp;,&nbsp;".$thesis_data_n[11]; ?>
				 													 &emsp;&emsp;&emsp;
				 													 <?php echo "Provider : ".$thesis_data_n[10]."&nbsp;,&nbsp;".$thesis_data_n[12]; ?>
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
