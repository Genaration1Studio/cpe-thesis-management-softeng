<?php
include("conn.php");
$did = $_REQUEST['did'];
$sql="DELETE FROM `department` WHERE `department`.`DepartmentID` = $did;";
$result=$link->query($sql);
if(!$result)
{
?>
<meta http-equiv="refresh" content="0;url='department.php'" ? />
  <script>
		var sessionName = '<?php echo "ไม่สารถลบข้อมูลสาขาวิชา รหัส "; echo $did; echo " ได้";?>';
		alert( sessionName );
 </script>
<?php
}
else
{
?>
<meta http-equiv="refresh" content="0;url='department.php'" ? />
<script>
		var sessionName = '<?php echo "ลบข้อมูลสาขาวิชา รหัส "; echo $did; echo " เรียบร้อยแล้วค่ะ";?>';
		alert( sessionName );
</script>
<?php
 }
?>

