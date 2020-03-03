<?php
include("conn.php");
	
$cosid = stripslashes( @$_REQUEST[ 'cosid' ] ); // removes backslashes
$cosid = mysqli_real_escape_string( $link, $cosid ); //escapes special characters in a string
$cosname= stripslashes( @$_REQUEST[ 'cosname' ] );
$cosname = mysqli_real_escape_string( $link, $cosname );
	
$sql="UPDATE `course` SET `Course` = '$cosname' WHERE `course`.`CourseID` = $cosid;";
$result=$link->query($sql);
if(!$result)
{
?>
<meta http-equiv="refresh" content="0;url='course.php'">
  <script>
		var sessionName = '<?php echo "ไม่สารถแก้ไขข้อมูลหลักสูตร รหัส "; echo $cosid; echo " ได้";?>';
		alert( sessionName );
 </script>
<?php
}
else
{
?>
<meta http-equiv="refresh" content="0;url='course.php'">
<script>
		var sessionName = '<?php echo "แก้ไขข้อมูลหลักสูตร รหัส "; echo $cosid; echo " เรียบร้อยแล้วค่ะ";?>';
		alert( sessionName );
</script>
<?php
 }
?>