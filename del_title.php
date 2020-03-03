<?php
include("conn.php");
$ttid = $_REQUEST['ttid'];
$sql="DELETE FROM `titlename` WHERE `titlename`.`TitleNameID` = $ttid;";
$result=$link->query($sql);
if(!$result)
{
?>
<meta http-equiv="refresh" content="0;url='titlename.php'">
  <script>
		var sessionName = '<?php echo "ไม่สารถลบคำนำหน้าชื่อ รหัส "; echo $ttid; echo " ได้";?>';
		alert( sessionName );
 </script>
<?php
}
else
{
?>
<meta http-equiv="refresh" content="0;url='titlename.php'">
<script>
		var sessionName = '<?php echo "ลบข้อมูลคำนำหน้าชื่อ รหัส "; echo $ttid; echo " เรียบร้อยแล้วค่ะ";?>';
		alert( sessionName );
</script>
<?php
 }
?>

