<?php
include("conn.php");
	
	$ttid = stripslashes( @$_REQUEST[ 'ttid' ] ); // removes backslashes
	$ttid = mysqli_real_escape_string( $link, $ttid ); //escapes special characters in a string
	
    $sql=" SELECT `titlename`.`TitleNameID` AS ttid,titlename.TitleName_Th As ttname_th,titlename.TitleName_En As ttname_en
	 		FROM titlename WHERE TitleNameID = $ttid";
     $result=$link->query($sql);
	 while($row=$result->fetch_object())
	 {
?>
	 		<div class="form-group">
       	    <label for="mid" class="col-form-label label_form_font">รหัสคำนำหน้าชื่อ</label>
            <input type="text" class="form-control" id="ttid" name="ttid" pattern="([0-9]{1,2}$)" value="<?php echo $row->ttid;?>"  readonly>
			<div class="invalid-feedback">
       				 กรุณากรอกรหัสคำนำหน้าชื่อ เป็นตัวเลข 0-9
        	</div>
			</div>
		  	<div class="form-group">
            <label for="ttname_th" class="col-form-label label_form_font">ชื่อคำนำหน้าชื่อ (ไทย)</label>
            <input type="text" class="form-control" id="ttname_th" name="ttname_th" pattern ="^[ก-๙0-9-_\.]{1,255}$" value="<?php echo $row->ttname_th;?>" required>
		    <div class="invalid-feedback">
       				 กรุณากรอกชื่อคำนำหน้าชื่อ (ไทย)
        	</div>
			</div>
		    <div class="form-group">
            <label for="ttname_en" class="col-form-label label_form_font">ชื่อคำนำหน้าชื่อ (อังกฤษ)</label>
            <input type="text" class="form-control" id="ttname_en" name="ttname_en" pattern ="^[a-zA-Z0-9-_\.]{1,255}$" value="<?php echo $row->ttname_en;?>">
		    <div class="invalid-feedback">
       				 กรุณากรอกชื่อคำนำหน้าชื่อ (อังกฤษ)
        	</div>
			</div>
<?php
	  }
?>

	 