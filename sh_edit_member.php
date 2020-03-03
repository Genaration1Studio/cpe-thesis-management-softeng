<?php
include("conn.php");
	
	$mid = stripslashes( @$_REQUEST[ 'mid' ] ); // removes backslashes
	$mid = mysqli_real_escape_string( $link, $mid ); //escapes special characters in a string
		
    $sql="SELECT member.MemID AS mid, member.Mem_pass AS mpass,membertype.MemberType AS mtname,titlename.TitleName_Th AS ttname,member.Fname AS fname,member.Lname AS lname,
	member.Email AS memail,member.Tel AS mtel,faculty.FacultyName_Th facname,department.DaptName_Th AS dname
	FROM `member` INNER JOIN membertype 
	ON member.MemType = membertype.MemberTypeID INNER JOIN titlename
	ON member.TitleName = titlename.TitleNameID LEFT OUTER  JOIN faculty
	ON member.Faculty = faculty.FacultyID LEFT OUTER JOIN department
	ON member.Department = department.DepartmentID
	WHERE member.MemID = '$mid'";
     $result=$link->query($sql);
	 while($row1=$result->fetch_object())
	 {
?>
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
							<option value="<?php echo $row->MemberTypeID;?>"
					<?php
							if($row->MemberType==$row1->mtname)
							{
					?>
								selected
					<?php
						   }
					?>						
							><?=$row->MemberType;?></option>
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
				<input class='form-control ' name="username"  id="username"  type='text' value="<?php echo $row1->mid;?>" readonly>
				  <div class="invalid-feedback">
        กรุณากรอก Username
        </div>
		</div>
		<div class="form-group">
			<label class='col-form-label label_form_font'for="password" style="text-align: right">รหัสผ่าน</label>
				<input class='form-control ' name="password" id="password" type='text' value="<?php echo $row1->mpass;?>" required>
				<div class="invalid-feedback">
       		 กรุณากรอก Password
        </div>
		</div>
		<div class='form-group'>
			<label class='col-form-label label_form_font' for="title_name" style="text-align: right">คำนำหน้าชื่อ</label>
				<select class='form-control cc-select ' name="title_name" required>
				<option value="">กรุณาเลือก</option>
						<?php
							$sql = "SELECT * FROM titlename ORDER BY TitleNameID ASC";
							$result = $link->query( $sql );
							while($row=$result->fetch_object())
							{
						?>
							<option value="<?php echo $row->TitleNameID;?>"
						<?php
							if($row->TitleName_Th==$row1->ttname)
							{
						?>
								selected
						<?php
						   }
						?>									
							><?=$row->TitleName_Th;?></option>
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
				<input class='form-control ' name="fname" type='text'  value="<?php echo $row1->fname;?>" required>
				<div class="invalid-feedback">
        กรุณากรอกชื่อ
        </div>
		</div>
		<div class="form-group">
			<label class='col-form-label label_form_font'  for="m_lname" style="text-align: right">นามสกุล</label>
				<input class='form-control' name="lname" type='text'  value="<?php echo $row1->lname;?>" required>
				<div class="invalid-feedback">
        กรุณากรอกนามสกุล
        </div>
		</div>
		<div class="form-group">
			<label class='col-form-label label_form_font' for="m_email" style="text-align: right">อีเมล</label>
				<input class='form-control ' name="email" type='email' pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
      autocomplete="off"  value="<?php echo $row1->memail;?>">
				<div class="invalid-feedback">
        กรุณากรอกอีเมล
        </div>
		</div>
		<div class="form-group">
			<label class='col-form-label label_form_font'  for="m_tel" style="text-align: right">เบอร์โทรศัพท์</label>
				<input class='form-control ' name="tel" type='text'  pattern="^0([8|9|6])([0-9]{8}$)" autocomplete="off"  value="<?php echo $row1->mtel;?>" >
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
							<option value="<?php echo $row->FacultyID;?>"
					<?php
							if($row->FacultyName_Th==$row1->facname)
							{
					?>
								selected
					<?php
						   }
					?>										
						    ><?=$row->FacultyName_Th;?></option>
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
							<option value="<?php echo $row->DepartmentID;?>"
					<?php
							if($row->DaptName_Th==$row1->dname)
							{
					?>
								selected
					<?php
						   }
					?>							
						 	><?=$row->DaptName_Th;?></option>
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
							<option value="<?php echo $row->DepartmentID;?>"
					<?php
							if($row->DaptName_Th==$row1->dname)
							{
					?>
								selected
					<?php
						   }
					?>							
						 	><?=$row->DaptName_Th;?></option>
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
							<option value="<?php echo $row->DepartmentID;?>"
					<?php
							if($row->DaptName_Th==$row1->dname)
							{
					?>
								selected
					<?php
						   }
					?>							
						 	><?=$row->DaptName_Th;?></option>
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
							<option value="<?php echo $row->DepartmentID;?>"
					<?php
							if($row->DaptName_Th==$row1->dname)
							{
					?>
								selected
					<?php
						   }
					?>							
						 	><?=$row->DaptName_Th;?></option>
					<?php
							}
					?>
				</select>
		</div>
<?php
	  }
?>

	 
