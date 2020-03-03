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
			function delFail(id) {
				 Swal.fire({
           title: 'ลบข้อมูลไม่สำเร็จ',  //สิ่งที่เปลี่ยนได้ คือหัว
           text: 'ไม่สามารถลบข้อมูลปริญญานิพนธ์ รหัส'+ id + ' ได้',
					 type: 'error', // อันนี้คือประเภทว่าจะให้เป็นแบบไหน
					 timer: 1300
				 })
			}
			function delSuccess(id) {
				 Swal.fire({
           title: 'ลบข้อมูลสำเร็จ',  //สิ่งที่เปลี่ยนได้ คือหัว
           text: 'ปริญญานิพนธ์รหัส '+ id + ' ถูกลบแล้ว',
					 type: 'success', // อันนี้คือประเภทว่าจะให้เป็นแบบไหน
					 timer: 1300
				 })
			}
	</script>
</head>
<!--===============================================================================================-->
<body>
  <?php
  $tid = $_REQUEST['tid'];
  $sql="DELETE FROM `thesis` WHERE `thesis`.`ThesisID` = $tid;";
  $result=$link->query($sql);
  if(!$result)
  {
  ?>
   <meta http-equiv="refresh" content="1.3;url='admin.php'" ? />
    <script>
  		var sessionName = '<?php echo "ไม่สารถลบข้อมูลปริญญานิพนธ์ รหัส "; echo $tid; echo " ได้";?>';
      delFail(sessionName);
   </script>
  <?php
  }
  else
  {
  ?>
   <meta http-equiv="refresh" content="1.3;url='admin.php'" ? />
  <script>
  		var sessionName = '<?php echo "ลบข้อมูลปริญญานิพนธ์ รหัส "; echo $aid; echo " เรียบร้อยแล้วค่ะ";?>';
  		delSuccess( sessionName );
  </script>
  <?php
   }
  ?>

</body>
</html>
