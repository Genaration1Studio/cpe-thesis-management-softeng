<?php
include("conn.php");
	
	$fid = stripslashes( @$_REQUEST[ 'fid' ] ); // removes backslashes
	$fid = mysqli_real_escape_string( $link, $fid ); //escapes special characters in a string
	$fname_th= stripslashes( @$_REQUEST[ 'fname_th' ] );
	$fname_th = mysqli_real_escape_string( $link, $fname_th );
	$fname_en= stripslashes( @$_REQUEST[ 'fname_en' ] );
	$fname_en = mysqli_real_escape_string( $link, $fname_en );
     $sql="SELECT * FROM `faculty` WHERE faculty.FacultyID = $fid;";
     $result=$link->query($sql);
	 if($result->num_rows==0)
	 {
		$sql="INSERT INTO `faculty` (`FacultyID`, `FacultyName_En`, `FacultyName_Th`) VALUES ('$fid', '$fname_en' , '$fname_th' );";
	    $link->query($sql) or die (mysqli_error($link) . "<br>$sql");
		?>
				<script>
					var sessionName1 = '<?php echo "บันทึกข้อมูลคณะ รหัส "; echo $fid; echo " เรียบร้อยแล้วค่ะ";?>';
					alert( sessionName1 );
				</script>
              <meta http-equiv="refresh" content="0;url='faculty.php'" ? />
        <?php	 
	 }
	  else
	 { 
		?>
			 <script>
					var sessionName1 = '<?php echo "คณะ รหัส "; echo $fid; echo " มีข้อมูลอยู่แล้ว กรุณากรอกใหม่ด้วยค่ะ";?>';
					alert( sessionName1 );
				</script>
              <meta http-equiv="refresh" content="0;url='faculty.php'" ? />
        <?php	    
	}
?>