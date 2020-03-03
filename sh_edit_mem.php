<?php
include("conn.php");
	
	$mid = stripslashes( @$_REQUEST[ 'mid' ] ); // removes backslashes
	$mid = mysqli_real_escape_string( $link, $mid ); //escapes special characters in a string
		
     $sql="SELECT membertype.MemberTypeID AS mid,membertype.MemberType AS mname
		FROM membertype WHERE MemberTypeID = $mid";
     $result=$link->query($sql);
	 while($row=$result->fetch_object())
	 {
?>
	 		<div class="form-group">
       	    <label for="mid" class="col-form-label label_form_font">รหัสประเภทสมาชิก</label>
            <input type="text" class="form-control" id="mid" name="mid" pattern="([0-9]{1,2}$)" value="<?php echo $row->mid;?>" readonly>
			<div class="invalid-feedback">
       				 กรุณากรอกรหัสประเภทสมาชิก เป็นตัวเลข 0-9
        	</div>
			</div>
		  	<div class="form-group">
            <label for="mname" class="col-form-label label_form_font">ชื่อประเภทสมาชิก</label>
            <input type="text" class="form-control" id="mname" name="mname" value="<?php echo $row->mname;?>" required>
		    <div class="invalid-feedback">
       				 กรุณากรอกชื่อประเภทสมาชิก
        	</div>
			</div>
<?php
	  }
?>

	 
