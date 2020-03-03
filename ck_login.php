<?php
session_start();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
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
      function notFountUser() {
         Swal.fire({
					 title: 'เข้าสู่ระบบไม่สำเร็จ',  //สิ่งที่เปลี่ยนได้ คือหัว
					 text: 'ชื่อบัญชีผู้ใช้งาน หรือ รหัสผ่าน ไม่ถูกต้อง กรุณาลองใหม่อีกครั้ง',
					 type: 'error', // อันนี้คือประเภทว่าจะให้เป็นแบบไหน
					 timer: 1700
         })
      }
			function fountUser(name) {
				 Swal.fire({
					 title: 'เข้าสู่ระบบสำเร็จ',  //สิ่งที่เปลี่ยนได้ คือหัว
					 text: 'ยินดีต้อนรับเข้าสู่ะบบ คุณ'+ name,
					 type: 'success', // อันนี้คือประเภทว่าจะให้เป็นแบบไหน
					 timer: 1700
				 })
			}
			function fountAdmin(name) {
				 Swal.fire({
					 title: 'เข้าสู่ระบบสำเร็จ',  //สิ่งที่เปลี่ยนได้ คือหัว
					 text: 'ยินดีต้อนรับเข้าสู่ะบบ Admin '+ name,
					 type: 'success', // อันนี้คือประเภทว่าจะให้เป็นแบบไหน
					 timer: 1700
				 })
			}
  </script>
</head>
<!--===============================================================================================-->
<body>
	<?php
	include( "conn.php" );
	$username = stripslashes( $_REQUEST[ 'username' ] ); // removes backslashes
	$username = mysqli_real_escape_string( $link, $username ); //escapes special characters in a string
	$password = stripslashes( $_REQUEST[ 'pass' ] );
	$password = mysqli_real_escape_string( $link, $password );

	$sql1 = "SELECT* FROM admin WHERE admin.AdminID='$username' AND admin.Admin_pass='$password'";
	$sql2 = "SELECT* FROM member WHERE member.MemID='$username' AND member.Mem_pass='$password'";
	$result1 = $link->query( $sql1 );
	$result2 = $link->query( $sql2 );
	if ( $result2->num_rows == 0 ) {
		if( $result1->num_rows == 0){
		?>
	<script>
		notFountUser();
	</script>
	<meta http-equiv="refresh" content="1.7;url='index.php'"/>
	<?php
	}else {
		$row = $result1->fetch_object();
		$_SESSION[ "AdminID" ] = $username;
		$_SESSION[ "Fname" ] = $row->Fname;
		$_SESSION[ "Lname" ] = $row->Lname;

		?>
	<script>
		var sessionName1 = '<?php echo $_SESSION['Fname'];?>';
		fountAdmin(sessionName1);
	</script>
	<meta http-equiv="refresh" content="1.7;url='admin.php'"/>
	<?php
	}}else{
		$row = $result2->fetch_object();
		$_SESSION[ "MemberID" ] = $username;
		$_SESSION[ "Fname" ] = $row->Fname;
		$_SESSION[ "Lname" ] = $row->Lname;

		?>
	<script>
		var sessionName = '<?php echo $_SESSION['Fname']." ".$_SESSION['Lname'];?>';
		fountUser(sessionName);
	</script>
	<meta http-equiv="refresh" content="1.7;url='main.php'"/>
	<?php
		}
	?>
</body>
</html>
