<?php
include("conn.php");
	
	$username = stripslashes( @$_REQUEST[ 'username' ] ); // removes backslashes
	$username = mysqli_real_escape_string( $link, $username ); //escapes special characters in a string
	$password = stripslashes( @$_REQUEST[ 'password' ] );
	$password = mysqli_real_escape_string( $link, $password );
	$type = @$_REQUEST[ 'type' ];
	$titlename = @$_REQUEST[ 'title_name' ];
	$fname = stripslashes( @$_REQUEST[ 'fname' ] );
	$fname = mysqli_real_escape_string( $link, $fname );
	$lname = stripslashes( @$_REQUEST[ 'lname' ] );
	$lname = mysqli_real_escape_string( $link, $lname );
	$email = stripslashes( @$_REQUEST[ 'email' ] );
	$email = mysqli_real_escape_string( $link, $email );
	$tel = stripslashes( @$_REQUEST[ 'tel' ] );
	$tel = mysqli_real_escape_string( $link, $tel );
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
     $sql="SELECT * FROM `member` WHERE member.MemID='$username'";
     $result=$link->query($sql);
	 if($result->num_rows==0)
	 {
		$sql="INSERT INTO `member` (`MemID`, `Mem_pass`, `MemType`, `TitleName`, `Fname`, `Lname`, `Email`, `Tel`, `Faculty`, `Department`) 
		VALUES ('$username', '$password', $type, $titlename, '$fname', '$lname', '$email', '$tel',$fact_name,$dept_name);";
	    $link->query($sql) or die (mysqli_error($link) . "<br>$sql");
		?>
				<script>
					var sessionName1 = '<?php echo "เพิ่มข้อมูลบัญชีผู้ใช้ "; echo $username; echo " เรียบร้อยแล้วแล้วค่ะ";?>';
					alert( sessionName1 );
				</script>
              <meta http-equiv="refresh" content="0;url='member.php'" ? />
        <?php	 
	 }
	  else
	 { 
		?>
			 <script>
					var sessionName1 = '<?php echo "บัญชีผู้ใช้ "; echo $username; echo " มีข้อมูลอยู่แล้ว กรุณากรอกใหม่ด้วยค่ะ";?>';
					alert( sessionName1 );
				</script>
              <meta http-equiv="refresh" content="0;url='member.php'" ? />
        <?php	  
		  
	}
?>