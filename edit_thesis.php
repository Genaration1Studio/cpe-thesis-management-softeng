<?php
include("conn.php");
	
	$tid = stripslashes( $_REQUEST[ 'tid' ] ); // removes backslashes
	$tid = mysqli_real_escape_string( $link, $tid ); //escapes special characters in a string
	$tname_th = stripslashes( $_REQUEST[ 'tname_th' ] );
	$tname_th = mysqli_real_escape_string( $link, $tname_th );
	$tname_en = stripslashes( $_REQUEST[ 'tname_en' ] );
	$tname_en = mysqli_real_escape_string( $link, $tname_en );
	$tc = $_REQUEST[ 'tc' ];
	$ty = stripslashes( $_REQUEST[ 'ty' ] );
	$ty = mysqli_real_escape_string( $link, $ty );
	$tl = stripslashes( $_REQUEST[ 'tl' ] );
	$tl = mysqli_real_escape_string( $link, $tl );
	$ab_th = stripslashes( $_REQUEST[ 'ab_th' ] );
	$ab_th = mysqli_real_escape_string( $link, $ab_th );
	$ab_en = stripslashes( $_REQUEST[ 'ab_en' ] );
	$ab_en = mysqli_real_escape_string( $link, $ab_en );


$sql="UPDATE `thesis` SET `Thesis_Year` = '$ty',`Category` = '$tc',`Title_Th` = '$tname_th', `Abstract_Th` = '$ab_th', `Title_En` = '$tname_en', `Abstract_En` = '$ab_en', `LocationCollection` = '$tl' WHERE `thesis`.`ThesisID` = $tid;";
$result=$link->query($sql);
if(!$result)
{
?>
<meta http-equiv="refresh" content="0;url='admin.php'" ? />
  <script>
		var sessionName = '<?php echo "ไม่สารถแก้ไขข้อมูลปริญญานิพนธ์ รหัส "; echo $tid; echo " ได้";?>';
		alert( sessionName );
 </script>
<?php
}
else
{
?>
<meta http-equiv="refresh" content="0;url='admin.php'" ? />
<script>
		var sessionName = '<?php echo "แก้ไขข้อมูลปริญญานิพนธ์ รหัส "; echo $tid; echo " เรียบร้อยแล้วค่ะ";?>';
		alert( sessionName );
</script>
<?php
 }
?>