<?php
include("conn.php");
	
	$cid = stripslashes( @$_REQUEST[ 'cid' ] ); // removes backslashes
	$cid = mysqli_real_escape_string( $link, $cid ); //escapes special characters in a string
		
     $sql="SELECT category.CategoryID AS cid, category.Category_Th AS cname_th, category.Category_En AS cname_en 
		   FROM category WHERE category.CategoryID = $cid;";
     $result=$link->query($sql);
	 while($row=$result->fetch_object())
	 {
?>
		<div class="form-group">
       	<label for="catid" class="col-form-label label_form_font">รหัสประเภทประเภทปริญญานิพนธ์</label>
        <input type="text" class="form-control" id="cid" name="cid" pattern="([0-9]{1,2}$)" value="<?php echo $row->cid;?>" readonly required>
	    <div class="invalid-feedback">
       		 กรุณากรอกรหัสประเภท เป็นตัวเลข 0-9
        </div>
		</div>
		<div class="form-group">
        <label for="catname" class="col-form-label label_form_font">ชื่อประเภท (ไทย)</label>
        <input type="text" class="form-control" id="cname_th" name="cname_th" pattern="^[ก-๙0-9-_\.]{1,255}$" value="<?php echo $row->cname_th;?>" >
		<div class="invalid-feedback">
       		 กรุณากรอกชื่อประเภท(ไทย)
        </div>
		</div>
		<div class="form-group">
        <label for="catname" class="col-form-label label_form_font">ชื่อประเภท (อังกฤษ)</label>
        <input type="text" class="form-control" id="cname_en" name="cname_en" pattern="^[a-zA-Z0-9-_\.]{1,255}$" value="<?php echo $row->cname_en;?>" >
		<div class="invalid-feedback">
       		กรุณากรอกชื่อประเภท(อังกฤษ)
        </div>
		</div>
<?php
	  }
?>

	 
