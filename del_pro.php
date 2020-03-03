<?php
include("conn.php");
$pid = $_REQUEST['pid'];
$sql="DELETE FROM `provider` WHERE `provider`.`ProviderID` = $pid;";
$result=$link->query($sql);
if(!$result)
{
?>
 <meta http-equiv="refresh" content="0;url='provider.php'" ? />
  <script>
		var sessionName = '<?php echo "ไม่สารถลบข้อมูลผู้จัดทำ รหัส "; echo $pid; echo " ได้";?>';
		alert( sessionName );
 </script>
<?php
}
else
{
?>
 <meta http-equiv="refresh" content="0;url='provider.php'" ? />
<script>
		var sessionName = '<?php echo "ลบข้อมูลผู้จัดทำ รหัส "; echo $pid; echo " เรียบร้อยแล้วค่ะ";?>';
		alert( sessionName );
</script>
<?php
 }
?>

