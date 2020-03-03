<?php
include("conn.php");
$fid = $_REQUEST['fid'];
$sql="DELETE FROM `faculty` WHERE `faculty`.`FacultyID` = '$fid';";
$result=$link->query($sql);
if(!$result)
{
?>
<meta http-equiv="refresh" content="0;url='faculty.php'">
  <script>
		var sessionName = '<?php echo "ไม่สารถลบข้อมูลคณะ รหัส "; echo $fid; echo " ได้";?>';
		alert( sessionName );
 </script>
<?php
}
else
{
?>
<meta http-equiv="refresh" content="0;url='faculty.php'">
<script>
		var sessionName = '<?php echo "ลบข้อมูคณะ รหัส "; echo $fid; echo " เรียบร้อยแล้วค่ะ";?>';
		alert( sessionName );
</script>
<?php
 }
?>

