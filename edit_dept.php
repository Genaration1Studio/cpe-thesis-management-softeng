<?php
include("conn.php");
	
$did = stripslashes( $_REQUEST[ 'did' ] ); // removes backslashes
$did = mysqli_real_escape_string( $link, $did ); //escapes special characters in a string
$dname_th= stripslashes( $_REQUEST[ 'dname_th' ] );
$dname_th = mysqli_real_escape_string( $link, $dname_th );
$dname_en= stripslashes( $_REQUEST[ 'dname_en' ] );
$dname_en = mysqli_real_escape_string( $link, $dname_en );
	
$sql="UPDATE `department` SET `DaptName_En` = '$dname_en', `DaptName_Th` = '$dname_th' WHERE `department`.`DepartmentID` = $did;";
$result=$link->query($sql);
if(!$result)
{
?>
<meta http-equiv="refresh" content="0;url='department.php'" ? />
  <script>
		var sessionName = '<?php echo "ไม่สารถแก้ไขข้อมูลสาขาวิชา รหัส "; echo $did; echo " ได้";?>';
		alert( sessionName );
 </script>
<?php
}
else
{
?>
<meta http-equiv="refresh" content="0;url='department.php'" ? />
<script>
		var sessionName = '<?php echo "แก้ไขข้อมูลสาขาวิชา รหัส "; echo $did; echo " เรียบร้อยแล้วค่ะ";?>';
		alert( sessionName );
</script>
<?php
 }
?>