<?php
include("conn.php");
	
	$cid = stripslashes( @$_REQUEST[ 'cid' ] ); // removes backslashes
	$cid = mysqli_real_escape_string( $link, $cid ); //escapes special characters in a string
	$cname_th= stripslashes( @$_REQUEST[ 'cname_th' ] );
	$cname_th = mysqli_real_escape_string( $link, $cname_th );
	$cname_en= stripslashes( @$_REQUEST[ 'cname_en' ] );
	$cname_en = mysqli_real_escape_string( $link, $cname_en );
	
		
     $sql="SELECT * FROM `category` WHERE CategoryID=$cid;";
     $result=$link->query($sql);
	 if($result->num_rows==0)
	 {
		$sql="INSERT INTO `category` (`CategoryID`, `Category_En`, `Category_Th`) VALUES ('$cid', '$cname_en', '$cname_th');";
	    $link->query($sql) or die (mysqli_error($link) . "<br>$sql");
		?>
				<script>
					var sessionName1 = '<?php echo "บันทึกข้อมูลประเภทปริญญานิพธ์ รหัส "; echo $cid; echo " เรียบร้อยแล้วค่ะ";?>';
					alert( sessionName1 );
				</script>
              <meta http-equiv="refresh" content="0;url='category.php'" ? />
        <?php	 
	 }
	  else
	 { 
		?>
			 <script>
					var sessionName1 = '<?php echo "ประเภทปริญญานิพธ์ รหัส "; echo $cid; echo " มีข้อมูลอยู่แล้ว กรุณากรอกใหม่ด้วยค่ะ";?>';
					alert( sessionName1 );
				</script>
              <meta http-equiv="refresh" content="0;url='category.php'" ? />
        <?php	    
	}
?>