<?php
include("conn.php");
$mid = $_REQUEST['mid'];
$sql="DELETE FROM `member` WHERE `member`.`MemID` = '$mid';";
$result=$link->query($sql);
if(!$result)
{
?>
<meta http-equiv="refresh" content="0;url='member.php'">
  <script>
		var sessionName = '<?php echo "ไม่สารถลบข้อมูลสมาชิก ชื่อ "; echo $mid; echo " ได้";?>';
		alert( sessionName );
 </script>
<?php
}
else
{
?>
<meta http-equiv="refresh" content="0;url='member.php'">
<script>
		var sessionName = '<?php echo "ลบข้อมูลสมาชิก ชื่อ "; echo $mid; echo " เรียบร้อยแล้วค่ะ";?>';
		alert( sessionName );
</script>
<?php
 }
?>

