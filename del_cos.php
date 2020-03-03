<?php
include("conn.php");
$cosid = $_REQUEST['cosid'];
$sql="DELETE FROM `course` WHERE `course`.`CourseID` = $cosid;";
$result=$link->query($sql);
if(!$result)	
{
?>
<meta http-equiv="refresh" content="0;url='course.php'">
  <script>
		var sessionName = '<?php echo "ไม่สารถลบข้อมูลหลักสูตร รหัส "; echo $cosid; echo " ได้";?>';
		alert( sessionName );
 </script>
<?php
}
else
{
?>
<meta http-equiv="refresh" content="0;url='course.php'">
<script>
		var sessionName = '<?php echo "ลบข้อมูลหลักสูตร รหัส "; echo $cosid; echo " เรียบร้อยแล้วค่ะ";?>';
		alert( sessionName );
</script>
<?php
 }
?>

