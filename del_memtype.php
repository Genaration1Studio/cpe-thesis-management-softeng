<?php
include("conn.php");
$mid = $_REQUEST['mid'];
$sql="DELETE FROM `membertype` WHERE `membertype`.`MemberTypeID` = $mid ;";
$result=$link->query($sql);
if(!$result)
{
?>
<meta http-equiv="refresh" content="0;url='membertype.php'">
  <script>
		var sessionName = '<?php echo "ไม่สารถลบข้อมูลประเภทสมาชิก รหัส "; echo $mid; echo " ได้";?>';
		alert( sessionName );
 </script>
<?php
}
else
{
?>
<meta http-equiv="refresh" content="0;url='membertype.php'">
<script>
		var sessionName = '<?php echo "ลบข้อมูลประเภทสมาชิก รหัส "; echo $mid; echo " เรียบร้อยแล้วค่ะ";?>';
		alert( sessionName );
</script>
<?php
 }
?>

