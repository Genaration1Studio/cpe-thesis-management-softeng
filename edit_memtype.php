<?php
include("conn.php");
	
$mid = stripslashes( $_REQUEST[ 'mid' ] ); // removes backslashes
$mid = mysqli_real_escape_string( $link, $mid ); //escapes special characters in a string
$mname= stripslashes( $_REQUEST[ 'mname' ] );
$mname = mysqli_real_escape_string( $link, $mname );
	
$sql="UPDATE `membertype` SET `MemberType` = '$mname' WHERE `membertype`.`MemberTypeID` = $mid  ;";
$result=$link->query($sql);
if(!$result)
{
?>
<meta http-equiv="refresh" content="0;url='membertype.php'">
  <script>
		var sessionName = '<?php echo "ไม่สารถแก้ไขข้อมูลประเภทสมาชิก รหัส "; echo $mid; echo " ได้";?>';
		alert( sessionName );
 </script>
<?php
}
else
{
?>
<meta http-equiv="refresh" content="0;url='membertype.php'">
<script>
		var sessionName = '<?php echo "แก้ไขข้อมูลประเภทสมาชิก รหัส "; echo $mid; echo " เรียบร้อยแล้วค่ะ";?>';
		alert( sessionName );
</script>
<?php
 }
?>