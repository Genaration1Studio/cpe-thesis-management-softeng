<?php
include("conn.php");
	
	$did = stripslashes( @$_REQUEST[ 'did' ] ); // removes backslashes
	$did = mysqli_real_escape_string( $link, $did ); //escapes special characters in a string
		
     $sql="SELECT department.DepartmentID AS did, department.DaptName_Th AS dname_th, department.DaptName_En AS dname_en
		  FROM department WHERE department.DepartmentID = $did;";
     $result=$link->query($sql);
	 while($row=$result->fetch_object())
	 {
?>
		<div class="form-group">
       	    <label for="did" class="col-form-label label_form_font">รหัสสาขาวิชา</label>
            <input type="text" class="form-control" id="did" name="did" pattern="([0-9]{1,4}$)" value="<?php echo $row->did;?>"  readonly>
			<div class="invalid-feedback">
       				 กรุณากรอกรหัสสาขาวิชา เป็นตัวเลข 0-9
        	</div>
			</div>
		  	<div class="form-group">
            <label for="dname_th" class="col-form-label label_form_font">ชื่อสาขาวิชา (ไทย)</label>
            <input type="text" class="form-control" id="dname_th" name="dname_th" pattern="^[ก-๙0-9-_\.]{1,255}$"  value="<?php echo $row->dname_th;?>" required>
		    <div class="invalid-feedback">
       				 กรุณากรอกชื่อสาขาวิชา(ไทย)
        	</div>
			</div>
		  	<div class="form-group">
            <label for="dname_en" class="col-form-label label_form_font">ชื่อสาขาวิชา (อังกฤษ)</label>
            <input type="text" class="form-control" id="dname_en" name="dname_en" pattern="^[a-zA-Z0-9-_\.]{1,255}$" value="<?php echo $row->dname_en;?>"  >
		    <div class="invalid-feedback">
       				 กรุณากรอกชื่อสาขาวิชา(อังกฤษ)
        	</div>
			</div>
<?php
	  }
?>