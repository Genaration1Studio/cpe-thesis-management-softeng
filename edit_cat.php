<?php
include("conn.php");
	
$cid = stripslashes( $_REQUEST[ 'cid' ] ); // removes backslashes
$cid = mysqli_real_escape_string( $link, $cid ); //escapes special characters in a string
$cname_th= stripslashes( $_REQUEST[ 'cname_th' ] );
$cname_th = mysqli_real_escape_string( $link, $cname_th );
$cname_en= stripslashes( $_REQUEST[ 'cname_en' ] );
$cname_en = mysqli_real_escape_string( $link, $cname_en );
	
$sql="UPDATE `category` SET `Category_En` = '$cname_en', `Category_Th` = '$cname_th' WHERE `category`.`CategoryID` = $cid ;";
$result=$link->query($sql);
if(!$result)
{
?>
<meta http-equiv="refresh" content="0;url='category.php'">
  <script>
		var sessionName = '<?php echo "ไม่สารถแก้ไขข้อมูลประเภทปริญญานิพนธ์ รหัส "; echo $cid; echo " ได้";?>';
		alert( sessionName );
 </script>
<?php
}
else
{
?>
<meta http-equiv="refresh" content="0;url='category.php'">
<script>
		var sessionName = '<?php echo "แก้ไขข้อมูลประเภทปริญญานิพนธ์ รหัส "; echo $cid; echo " เรียบร้อยแล้วค่ะ";?>';
		alert( sessionName );
</script>
<?php
 }
?>