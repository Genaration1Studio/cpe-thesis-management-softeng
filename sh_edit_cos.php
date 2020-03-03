<?php
include("conn.php");
	
	$cosid = stripslashes( @$_REQUEST[ 'cosid' ] ); // removes backslashes
	$cosid = mysqli_real_escape_string( $link, $cosid ); //escapes special characters in a string
		
     $sql="SELECT course.CourseID AS cosid,course.Course AS cosname
		   FROM `course` WHERE course.CourseID  = $cosid";

     $result=$link->query($sql);
	 while($row=$result->fetch_object())
	 {
?>
		    <div class="form-group">
       	    <label for="cosid" class="col-form-label label_form_font">รหัสหลักสูตร</label>
            <input type="text" class="form-control" id="cosid" name="cosid" pattern="([0-9]{1,2}$)" value="<?php echo $row->cosid;?>" readonly required>
			<div class="invalid-feedback">
       				 กรุณากรอกรหัสหลักสูตร เป็นตัวเลข 0-9
        	</div>
			</div>
		  	<div class="form-group">
            <label for="cosname" class="col-form-label label_form_font">ชื่อหลักสูตร</label>
            <input type="text" class="form-control" id="cosname" name="cosname"  value="<?php echo $row->cosname;?>" required>
		    <div class="invalid-feedback">
       				 กรุณากรอกชื่อหลักสูตร
        	</div>
			</div>
<?php
	  }
?>
