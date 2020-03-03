<?php
include("conn.php");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register</title>
	<!-- icon -->
	<!--===============================================================================================-->
		<link rel="icon" type="image/png" href="public/favicon.ico"/>
	<!-- css -->
	<!--===============================================================================================-->
	<!-- sweetalert -->
	<!--===============================================================================================-->
		<link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="public/css/login/main.css">
		<link href="public/css/sweetalert/sweetalert2.css" rel="stylesheet" />
		<script src="public/js/sweetalert/sweetalert2.min.js"></script>
	<!--===============================================================================================-->
	<script>
			function regisFail(username) {
				 Swal.fire({
					 title: 'สมัครไม่สำเร็จ',  //สิ่งที่เปลี่ยนได้ คือหัว
					 text: 'ชื่อบัญชีผู้ใช้งาน '+ username + ' มีผู้ใช้งานแล้ว กรุณาสมัครใหม่อีกครั้งค่ะ',
					 type: 'error', // อันนี้คือประเภทว่าจะให้เป็นแบบไหน
					 timer: 2000
				 })
			}
			function regisSuccess(name) {
				 Swal.fire({
					 title: 'สมัสมัครสมาชิกสำเร็จ',  //สิ่งที่เปลี่ยนได้ คือหัว
					 text: 'ยินดีด้วยค่ะ ขณะนี้ คุณ'+ name + ' ได้เป็นสมาชิกของเราแล้วค่ะ',
					 type: 'success', // อันนี้คือประเภทว่าจะให้เป็นแบบไหน
					 timer: 2000
				 })
			}
	</script>
</head>
<!--===============================================================================================-->
<body>
	<?php
		$username = stripslashes( @$_REQUEST[ 'username' ] ); // removes backslashes
		$username = mysqli_real_escape_string( $link, $username ); //escapes special characters in a string
		$password = stripslashes( @$_REQUEST[ 'password' ] );
		$password = mysqli_real_escape_string( $link, $password );
		$type = $_REQUEST[ 'type' ];
		$titlename = $_REQUEST[ 'title_name' ];
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
						var sessionName1 = '<?php echo $fname;?>';
						regisSuccess(sessionName1);
					</script>
		      <meta http-equiv="refresh" content="2;url='index.php'" ? />
		      <?php
		 }
		  else
		 {
			?>
				 <script>
						var sessionName1 = '<?php echo $username;?>';
						regisFail(sessionName1);
					</script>
		      <meta http-equiv="refresh" content="2;url='register.php'" ? />
		      <?php

		}
	?>
</body>
</html>
