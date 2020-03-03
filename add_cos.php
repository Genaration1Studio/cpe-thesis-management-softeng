<?php
include("conn.php");
	
	$cosid = stripslashes( @$_REQUEST[ 'cosid' ] ); // removes backslashes
	$cosid = mysqli_real_escape_string( $link, $cosid ); //escapes special characters in a string
	$cosname= stripslashes( @$_REQUEST[ 'cosname' ] );
	$cosname = mysqli_real_escape_string( $link, $cosname );

     $sql="SELECT * FROM `course` WHERE course.CourseID = $cosid;";
     $result=$link->query($sql);
	 if($result->num_rows==0)
	 {
		$sql="INSERT INTO `course` (`CourseID`, `Course`) VALUES ('$cosid', '$cosname');";
	    $link->query($sql) or die (mysqli_error($link) . "<br>$sql");
		?>
				<script>
					var sessionName1 = '<?php echo "บันทึกข้อมูลหลักสูตร รหัส "; echo $cosid; echo " เรียบร้อยแล้วค่ะ";?>';
					alert( sessionName1 );
				</script>
              <meta http-equiv="refresh" content="0;url='course.php'" ? />
        <?php	 
	 }
	  else
	 { 
		?>
			 <script>
					var sessionName1 = '<?php echo "หลักสูตร รหัส "; echo $mid; echo " มีข้อมูลอยู่แล้ว กรุณากรอกใหม่ด้วยค่ะ";?>';
					alert( sessionName1 );
				</script>
              <meta http-equiv="refresh" content="0;url='course.php'" ? />
        <?php	    
	}
?>