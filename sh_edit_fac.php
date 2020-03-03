<?php
include("conn.php");
	
	$fid = stripslashes( @$_REQUEST[ 'fid' ] ); // removes backslashes
	$fid = mysqli_real_escape_string( $link, $fid ); //escapes special characters in a string
		
     $sql="SELECT faculty.FacultyID AS fid, faculty.FacultyName_Th AS fname_th, faculty.FacultyName_En AS fname_en 
		   FROM faculty WHERE faculty.FacultyID = $fid;";
     $result=$link->query($sql);
	 while($row=$result->fetch_object())
	 {
?>
		<div class="form-group">
       	<label for="fid" class="col-form-label label_form_font">รหัสคณะ</label>
        <input type="text" class="form-control" id="fid" name="fid" pattern="([0-9]{1,2}$)" value="<?php echo $row->fid;?>" readonly required>
	    <div class="invalid-feedback">
       		 กรุณากรอกรหัสคณะ เป็นตัวเลข 0-9
        </div>
		</div>
		<div class="form-group">
        <label for="fname" class="col-form-label label_form_font">ชื่อคณะ (ไทย)</label>
        <input type="text" class="form-control" id="fname_th" name="fname_th" pattern="^[ก-๙0-9-_\.]{1,255}$" value="<?php echo $row->fname_th;?>" required>
		<div class="invalid-feedback">
       		 กรุณากรอกชื่อคณะ(ไทย)
        </div>
		</div>
		<div class="form-group">
        <label for="fname" class="col-form-label label_form_font">ชื่อคณะ (อังกฤษ)</label>
        <input type="text" class="form-control" id="fname_en" name="fname_en" pattern="^[a-zA-Z0-9-_\. ]{1,255}$" value="<?php echo $row->fname_en;?>" required>
		<div class="invalid-feedback">
       		กรุณากรอกชื่อคณะ(อังกฤษ)
        </div>
		</div>
<?php
	  }
?>

	 
