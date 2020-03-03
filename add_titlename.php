<?php
include("conn.php");
	
	$ttid = stripslashes( @$_REQUEST[ 'ttid' ] ); // removes backslashes
	$ttid = mysqli_real_escape_string( $link, $ttid ); //escapes special characters in a string
	$ttname_th= stripslashes( @$_REQUEST[ 'ttname_th' ] );
	$ttname_th = mysqli_real_escape_string( $link, $ttname_th );
	$ttname_en= stripslashes( @$_REQUEST[ 'ttname_en' ] );
	$ttname_en = mysqli_real_escape_string( $link, $ttname_en );

     $sql="SELECT * FROM `titlename` WHERE `TitleNameID` = $ttid;";
     $result=$link->query($sql);
	 if($result->num_rows==0)
	 {
		$sql="INSERT INTO `titlename` (`TitleNameID`,TitleName_Th,TitleName_En) VALUES ('$ttid', '$ttname_th','$ttname_en');";
	    $link->query($sql) or die (mysqli_error($link) . "<br>$sql");
		?>
				<script>
					var sessionName1 = '<?php echo "บันทึกข้อมูลคำนำหน้าชื่อ รหัส "; echo $ttid; echo " เรียบร้อยแล้วค่ะ";?>';
					alert( sessionName1 );
				</script>
              <meta http-equiv="refresh" content="0;url='titlename.php'" ? />
        <?php	 
	 }
	  else
	 { 
		?>
			 <script>
					var sessionName1 = '<?php echo "คำนำหน้าชื่อ รหัส "; echo $ttid; echo " มีข้อมูลอยู่แล้ว กรุณากรอกใหม่ด้วยค่ะ";?>';
					alert( sessionName1 );
				</script>
              <meta http-equiv="refresh" content="0;url='titlename.php'" ? />
        <?php	    
	}
?>