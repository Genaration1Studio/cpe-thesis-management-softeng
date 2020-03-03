<?php
include("conn.php");
	
	$did = stripslashes( @$_REQUEST[ 'did' ] ); // removes backslashes
	$did = mysqli_real_escape_string( $link, $did ); //escapes special characters in a string
	$dname_th= stripslashes( @$_REQUEST[ 'dname_th' ] );
	$dname_th = mysqli_real_escape_string( $link, $dname_th );
	$dname_en= stripslashes( @$_REQUEST[ 'dname_en' ] );
	$dname_en = mysqli_real_escape_string( $link, $dname_en );
	
		
     $sql="SELECT * FROM `department` WHERE department.DepartmentID = $did ;";
     $result=$link->query($sql);
	 if($result->num_rows==0)
	 {
		$sql="INSERT INTO `department` (`DepartmentID`, `DaptName_En`, `DaptName_Th`) VALUES ('$did', '$dname_en', '$dname_th');";
	    $link->query($sql) or die (mysqli_error($link) . "<br>$sql");
		?>
				<script>
					var sessionName1 = '<?php echo "บันทึกข้อมูลสาขาวิชา รหัส "; echo $did; echo " เรียบร้อยแล้วค่ะ";?>';
					alert( sessionName1 );
				</script>
              <meta http-equiv="refresh" content="0;url='department.php'" ? />
        <?php	 
	 }
	  else
	 { 
		?>
			 <script>
					var sessionName1 = '<?php echo "สาขาวิชา รหัส "; echo $did; echo " มีข้อมูลอยู่แล้ว กรุณากรอกใหม่ด้วยค่ะ";?>';
					alert( sessionName1 );
				</script>
              <meta http-equiv="refresh" content="0;url='department.php'" ? />
        <?php	    
	}
?>