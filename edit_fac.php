<?php
include("conn.php");
	
$fid = stripslashes( @$_REQUEST[ 'fid' ] ); // removes backslashes
$fid = mysqli_real_escape_string( $link, $fid ); //escapes special characters in a string
$fname_th= stripslashes( @$_REQUEST[ 'fname_th' ] );
$fname_th = mysqli_real_escape_string( $link, $fname_th );
$fname_en= stripslashes( @$_REQUEST[ 'fname_en' ] );
$fname_en = mysqli_real_escape_string( $link, $fname_en );
	
$sql="UPDATE `faculty` SET `FacultyName_En` = '$fname_en', `FacultyName_Th` = '$fname_th' WHERE `faculty`.`FacultyID` = '$fid';";
$result=$link->query($sql);
if(!$result)
{
?>
<meta http-equiv="refresh" content="0;url='faculty.php'">
  <script>
		var sessionName = '<?php echo "ไม่สารถแก้ไขข้อมูลคณะ รหัส "; echo $fid; echo " ได้";?>';
		alert( sessionName );
 </script>
<?php
}
else
{
?>
<meta http-equiv="refresh" content="0;url='faculty.php'">
<script>
		var sessionName = '<?php echo "แก้ไขข้อมูลคณะ รหัส "; echo $fid; echo " เรียบร้อยแล้วค่ะ";?>';
		alert( sessionName );
</script>
<?php
 }
?>