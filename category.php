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
		 <div class="container-category">
			 <div class="wrap-category">

				 <form action="category.php" class='needs-validation form-horizontal  table-striped' id="formsq" role='form' method="post" novalidate>
						 <div class="row align-items-center">
						 <div class='col-md-10 col-md-offset-1 labelH_form_font'>
							 ประเภทปริญญานิพนธ์
						 </div>
							<div class="col-2" style="text-align: right">
								 <button class="btn btn-success btn-sm" type="button" name="add" id="add" onClick="show_md();"  data-toggle="tooltip" data-placement="bottom" title="เพิ่มข้อมูล">เพิ่มข้อมูล</button>
						</div>
					 </div>
						 <hr width="100%" color="#FFFFFF"><p>
						 <div class='form-group row search-group'>
				 <label class='col-form-label label_form_font'  style="text-align: right">สืบค้นโดย</label>
							<div class='col-md-3'>
								<select class='form-control cc-select font_ek_14' id="sq" name="sq"  onChange="getSelectValue();" required>
						 <option value="" selected>กรุณาเลือก</option>
						 <option value="cid">รหัสประเภท</option>
							 <option value="cname">ชื่อประเภท</option>
							 <option value="full">เลือกทั้งหมด</option>
							 </select>
			 <div class="invalid-tooltip">
					 กรุณาเลือกรูปแบบการสืบค้น
					 </div>
						 </div>
								 <div class='col-md-4'>
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
						 case 'cid':
						 $sql = "SELECT category.CategoryID AS cid, category.Category_Th AS cname_th, category.Category_En AS cname_en
								 FROM category WHERE category.CategoryID = $keyword
								 ORDER BY CategoryID ASC limit {$start} , {$perpage};";

						 $sql2 = "SELECT category.CategoryID AS cid, category.Category_Th AS cname_th, category.Category_En AS cname_en
								 FROM category WHERE category.CategoryID = $keyword
								 ORDER BY CategoryID ASC;";
						 break;
						 case 'cname':
						 $sql = "SELECT category.CategoryID AS cid, category.Category_Th AS cname_th, category.Category_En AS cname_en
								 FROM category WHERE CONCAT(Category_Th,' ',Category_En) LIKE '%$keyword%'
								 ORDER BY CategoryID ASC limit {$start} , {$perpage};";

						 $sql2 = "SELECT category.CategoryID AS cid, category.Category_Th AS cname_th, category.Category_En AS cname_en
								 FROM category WHERE CONCAT(Category_Th,' ',Category_En) LIKE '%$keyword%'
								 ORDER BY CategoryID ASC;";
						 break;
						 case 'full':
						 $sql = "SELECT category.CategoryID AS cid, category.Category_Th AS cname_th, category.Category_En AS cname_en
								 FROM category
								 ORDER BY CategoryID ASC limit {$start} , {$perpage};";

						 $sql2 = "SELECT category.CategoryID AS cid, category.Category_Th AS cname_th, category.Category_En AS cname_en
								 FROM category
								 ORDER BY CategoryID ASC;";
						 break;
					 }
				 }
				 else
				 {
							 $sql = "SELECT category.CategoryID AS cid, category.Category_Th AS cname_th, category.Category_En AS cname_en
									 FROM category
									 ORDER BY CategoryID ASC limit {$start} , {$perpage};";

							 $sql2 = "SELECT category.CategoryID AS cid, category.Category_Th AS cname_th, category.Category_En AS cname_en
									 FROM category
									 ORDER BY CategoryID ASC;";

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
										<th>รหัสประเภท</th>
										<th>ชื่อประเภท (ไทย)</th>
										<th>ชื่อประเภท (อังกฤษ)</th>
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
												 <td style="text-align: center"><?php echo $row->cid;?></td>
												 <?php if($row->cname_th=="")
													 {
												 ?>		<td style="text-align: center"><?php echo "-";?></td>
												 <?php
													 }else
													 {
													?>		<td ><?php echo $row->cname_th;?></td>
													<?php
													 }
													?>
												 <?php if($row->cname_en=="")
													 {
												 ?>		<td style="text-align: center"><?php echo "-";?></td>
												 <?php
													 }else
													 {
													?>		<td ><?php echo $row->cname_en;?></td>
													<?php
													 }
													?>
												 <td style="text-align: center">
												 <img src="public/images/baseline_border_color_black_36dp.png" width="20px" data-toggle="tooltip" data-placement="bottom" title="แก้ไข"  name="edit" value="edit" id="<?php echo $row->cid; ?>" class="edit"/>
													&ensp;
													 <a  href="del_cat.php?cid=<?=$row->cid;?>" onClick="ts();">
													 <img src="public/images/baseline_delete_forever_black_36dp.png" width="20px" data-toggle="tooltip" data-placement="bottom" title="ลบ" onClick="return confirm('ต้องการลบข้อมูลประเภทปริญญานิพนธ์ รหัส <?php echo $row->cid;?> ใช่หรือไม่')"/></a>
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
							 <a class="page-link" href="category.php" aria-label="Previous">
								 <span aria-hidden="true">&laquo;</span>
							 </a>
							 </li>
								 <?php for($i=1;$i<=$total_page;$i++)
								 {
								 ?>
									 <li class="page-item"><a class="page-link" href="category.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
								 <?php
								 }
								 ?>
									<li class="page-item">
									 <a class="page-link" href="category.php?page=<?php echo $total_page;?>" aria-label="Next">
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
			 <form class="needs-validation" method="post" action="edit_cat.php" novalidate>
				 <div class="modal-header">
					<h5 class="modal-title labelH_form_font" id="edit_label">แก้ไขข้อมูลประเภทปริญญานิพนธ์</h5>
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
			 <form class="needs-validation" method="post" action="add_cat.php" novalidate>
				 <div class="modal-header">
					 <h5 class="modal-title labelH_form_font" id="add_label">เพิ่มข้อมูลประเภทปริญญานิพนธ์</h5>
				 </div>
				 <div class="modal-body">
					 <div class="form-group">
							 <label for="catid" class="col-form-label label_form_font">รหัสประเภทประเภทปริญญานิพนธ์</label>
							 <input type="text" class="form-control" id="cid" name="cid" pattern="([1-9]{1,2}$)"  required>
				 <div class="invalid-feedback">
									กรุณากรอกรหัสประเภท เป็นตัวเลข 1-9
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
			 <input type="submit" class="btn btn-primary label_form_font" name="submit_add" value="บันทึก"/>
					 <input type="button" class="btn btn-danger label_form_font" id="btn_can_add" value="ยกเลิก" onclick="hide_md();" />
				 </div>
			</form>
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



<script>
$(document).ready(function(){
$(document).on('click', '.edit', function(){
  //$('#dataModal').modal();
  var cid = $(this).attr("id");
  $.ajax({
   url:"sh_edit_cat.php",
   method:"POST",
   data:{cid:cid},
   success:function(data){
    $('#show_edit').html(data);
	$('#md_edit').on('shown.bs.modal', function () {
	   		$('#cname_th').trigger('focus');
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
					$('#cid').trigger('focus');
			})
			$('#md_add').modal('toggle');
		}
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
