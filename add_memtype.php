<?php
include("conn.php");
	
	$mid = stripslashes( @$_REQUEST[ 'mid' ] ); // removes backslashes
	$mid = mysqli_real_escape_string( $link, $mid ); //escapes special characters in a string
	$mname= stripslashes( @$_REQUEST[ 'mname' ] );
	$mname = mysqli_real_escape_string( $link, $mname );

     $sql="SELECT * FROM `membertype` WHERE MemberTypeID = $mid;";
     $result=$link->query($sql);
	 if($result->num_rows==0)
	 {
		$sql="INSERT INTO `membertype` (`MemberTypeID`, `MemberType`) VALUES ('$mid', '$mname');";
	    $link->query($sql) or die (mysqli_error($link) . "<br>$sql");
		?>
				<script>
					var sessionName1 = '<?php echo "บันทึกข้อมูลประเถทสมาชิก รหัส "; echo $mid; echo " เรียบร้อยแล้วค่ะ";?>';
					alert( sessionName1 );
				</script>
              <meta http-equiv="refresh" content="0;url='membertype.php'" ? />
        <?php	 
	 }
	  else
	 { 
		?>
			 <script>
					var sessionName1 = '<?php echo "ประเภทสมาชิก รหัส "; echo $mid; echo " มีข้อมูลอยู่แล้ว กรุณากรอกใหม่ด้วยค่ะ";?>';
					alert( sessionName1 );
				</script>
              <meta http-equiv="refresh" content="0;url='membertype.php'" ? />
        <?php	    
	}
?>