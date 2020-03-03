<?php
include("conn.php");
	
	$pid = stripslashes( @$_REQUEST[ 'pid' ] ); // removes backslashes
	$pid = mysqli_real_escape_string( $link, $pid ); //escapes special characters in a string
	$tname = @$_REQUEST[ 'tname' ];
	$fname_th = stripslashes( @$_REQUEST[ 'fname_th' ] );
	$fname_th = mysqli_real_escape_string( $link, $fname_th );
	$lname_th = stripslashes( @$_REQUEST[ 'lname_th' ] );
	$lname_th = mysqli_real_escape_string( $link, $lname_th );
	$fname_en = stripslashes( @$_REQUEST[ 'fname_en' ] );
	$fname_en = mysqli_real_escape_string( $link, $fname_en );
	$lname_en = stripslashes( @$_REQUEST[ 'lname_en' ] );
	$lname_en = mysqli_real_escape_string( $link, $lname_en );
	$fact_name = @$_REQUEST[ 'fact_name' ];
	if($fact_name == 1500)
	{
		$dept_name = @$_REQUEST[ 'dept_bs' ];
	}else if($fact_name == 1600)
	{
		$dept_name = @$_REQUEST[ 'dept_sci' ];
	}else if($fact_name == 1700)
	{
		$dept_name = @$_REQUEST[ 'dept_ea' ];
	}else if($fact_name == 1800)
	{
		$dept_name = @$_REQUEST[ 'dept_art' ];
	}else 
	{
		$dept_name = @$_REQUEST[ 'fact_name' ];
	}
	$cname = @$_REQUEST[ 'cname' ];
     $sql="SELECT * FROM `provider` WHERE provider.ProviderID = $pid;";
     $result=$link->query($sql);
	 if($result->num_rows==0)
	 {
		$sql="INSERT INTO `provider` (`ProviderID`, `TitleName`, `Fname_En`, `Lname_En`, `Fname_Th`, `Lname_Th`, `Faculty`, `Department`, `Course`, `Thesis`) VALUES ('$pid', '$tname', '$fname_en', '$lname_en', '$fname_th', '$lname_th', $fact_name, $dept_name, $cname, NULL);";
	    $link->query($sql) or die (mysqli_error($link) . "<br>$sql");
		?>
				<script>
					var sessionName1 = '<?php echo "เพิ่มข้อมูลผู้จัดทำ รหัส "; echo $pid; echo " เรียบร้อยแล้วแล้วค่ะ";?>';
					alert( sessionName1 );
				</script>
              <meta http-equiv="refresh" content="0;url='provider.php'" ? />
        <?php	 
	 }
	  else
	 { 
		?>
			 <script>
					var sessionName1 = '<?php echo "ข้อมูลผู้จัดทำ รหัส "; echo $pid; echo " มีข้อมูลอยู่แล้ว กรุณากรอกใหม่ด้วยค่ะ";?>';
					alert( sessionName1 );
				</script>
              <meta http-equiv="refresh" content="0;url='provider.php'" ? />
        <?php	  
		  
	}
?>