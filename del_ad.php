<?php
include("conn.php");
$aid = $_REQUEST['aid'];
$sql="DELETE FROM `advisor` WHERE `advisor`.`AdvisorID` = $aid;";
$result=$link->query($sql);
if(!$result)
{
?>
 <meta http-equiv="refresh" content="0;url='advisor.php'" ? />
  <script>
		var sessionName = '<?php echo "ไม่สารถลบข้อมูลอาจารย์ รหัส "; echo $aid; echo " ได้";?>';
		alert( sessionName );
 </script>
<?php
}
else
{
?>
 <meta http-equiv="refresh" content="0;url='advisor.php'" ? />
<script>
		var sessionName = '<?php echo "ลบข้อมูลอาจารย์ รหัส "; echo $aid; echo " เรียบร้อยแล้วค่ะ";?>';
		alert( sessionName );
</script>
<?php
 }
?>

