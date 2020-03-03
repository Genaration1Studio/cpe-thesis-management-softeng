<?php
include("conn.php");
	
	$aid = stripslashes( @$_REQUEST[ 'aid' ] ); // removes backslashes
	$aid = mysqli_real_escape_string( $link, $aid ); //escapes special characters in a string
		
     $sql="SELECT AdvisorID AS aid,titlename.TitleName_Th AS tname_th,Fname_Th AS fname_th,Lname_Th AS lname_th ,titlename.TitleName_En AS tname_en,Fname_En AS fname_en,Lname_En AS lname_en,faculty.FacultyName_Th AS fname, department.DaptName_Th AS dname
     FROM advisor INNER JOIN titlename
	 ON advisor.TitleName = titlename.TitleNameID LEFT OUTER JOIN faculty
	 ON advisor.Faculty = faculty.FacultyID LEFT OUTER JOIN department
	 ON advisor.Department = department.DepartmentID
	 WHERE AdvisorID = $aid;";
     $result=$link->query($sql);
	 while($row1=$result->fetch_object())
	 {
?>
		 <label class='col-form-label label_form_font' for="aid" style="text-align: right">รหัสอาจารย์</label>
		<input class='form-control ' name="aid"  id="aid"  type='text'  pattern="([0-9]{1,4}$)" value="<?php echo $row1->aid; ?>" readonly>
		<div class="invalid-feedback">
        กรุณากรอกรหัสอาจารย์ เป็นตัวเลข 0-9
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
							<option value="<?php echo $row->TitleNameID;?>"
						<?php
								if($row->TitleName_Th==$row1->tname_th)
								{
						?>
									selected
						<?php
							   }
						?>					
							><?=$row->TitleName_Th;?> / <?=$row->TitleName_En;?></option>
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
				<input class='form-control ' name="fname_th"  type='text' pattern="^[ก-๙0-9-_\.]{1,255}$"  value="<?php echo $row1->fname_th; ?>"  required>
				<div class="invalid-feedback">
       กรุณากรอกชื่อ(ไทย)
        </div>
		</div>
		<div class="form-group">
			<label class='col-form-label label_form_font'  for="lname_th" style="text-align: right">นามสกุล (ไทย)</label>
				<input class='form-control' name="lname_th" type='text' pattern="^[ก-๙0-9-_\.]{1,255}$" value="<?php echo $row1->lname_th; ?>" required>
				<div class="invalid-feedback">
        กรุณากรอกนามสกุล(ไทย)
        </div>
		</div>
				<div class="form-group">
			<label class='col-form-label label_form_font' for="fname_en" style="text-align: right">ชื่อ (อังกฤษ)</label>
				<input class='form-control ' name="fname_en"  type='text' pattern="^[a-zA-Z0-9-_\.]{1,255}$" value="<?php echo $row1->fname_en; ?>" required>
				<div class="invalid-feedback">
        กรุณากรอกชื่อ(อังกฤษ)
        </div>
		</div>
		<div class="form-group">
			<label class='col-form-label label_form_font'  for="lname_en" style="text-align: right">นามสกุล (อังกฤษ)</label>
				<input class='form-control' name="lname_en" type='text' pattern="^[a-zA-Z0-9-_\.]{1,255}$" value="<?php echo $row1->lname_en; ?>"  required>
				<div class="invalid-feedback">
          กรุณากรอกนามสกุล(อังกฤษ)
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
								if($row->FacultyName_Th==$row1->fname)
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

	 
