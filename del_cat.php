<?php
include("conn.php");
$cid = $_REQUEST['cid'];
$sql="DELETE FROM `category` WHERE `category`.`CategoryID` = $cid;";
$result=$link->query($sql);
if(!$result)
{
?>
<meta http-equiv="refresh" content="0;url='category.php'">
  <script>
		var sessionName = '<?php echo "ไม่สารถลบข้อมูลประเภทปริญญานิพนธ์ รหัส "; echo $cid; echo " ได้";?>';
		alert( sessionName );
 </script>
<?php
}
else
{
?>
<meta http-equiv="refresh" content="0;url='category.php'">
<script>
		var sessionName = '<?php echo "ลบข้อมูลประเภทปริญญานิพนธ์ รหัส "; echo $cid; echo " เรียบร้อยแล้วค่ะ";?>';
		alert( sessionName );
</script>
<?php
 }
?>

