<?php
include("conn.php");
	
$ttid = stripslashes( $_REQUEST[ 'ttid' ] ); // removes backslashes
$ttid = mysqli_real_escape_string( $link, $ttid ); //escapes special characters in a string
$ttname_th= stripslashes( $_REQUEST[ 'ttname_th' ] );
$ttname_th = mysqli_real_escape_string( $link, $ttname_th );
$ttname_en= stripslashes( $_REQUEST[ 'ttname_en' ] );
$ttname_en = mysqli_real_escape_string( $link, $ttname_en );
	
$sql="UPDATE `titlename` SET `TitleName_Th` = '$ttname_th', `TitleName_En` = '$ttname_en' WHERE `titlename`.`TitleNameID` = $ttid ;";
$result=$link->query($sql);
if(!$result)
{
?>
<meta http-equiv="refresh" content="0;url='titlename.php'">
  <script>
		var sessionName = '<?php echo "ไม่สารถแก้ไขข้อมูลคำนำหน้าชื่อ รหัส "; echo $ttid; echo " ได้";?>';
		alert( sessionName );
 </script>
<?php
}
else
{
?>
<meta http-equiv="refresh" content="0;url='titlename.php'">
<script>
		var sessionName = '<?php echo "แก้ไขข้อมูลคำนำหน้าชื่อ รหัส "; echo $ttid; echo " เรียบร้อยแล้วค่ะ";?>';
		alert( sessionName );
</script>
<?php
 }
?>