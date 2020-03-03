<?php
include("conn.php");
	
	$aid = stripslashes( $_REQUEST[ 'aid' ] ); // removes backslashes
	$aid = mysqli_real_escape_string( $link, $aid ); //escapes special characters in a string
	$tname = $_REQUEST[ 'tname' ];
	$fname_th = stripslashes( $_REQUEST[ 'fname_th' ] );
	$fname_th = mysqli_real_escape_string( $link, $fname_th );
	$lname_th = stripslashes( $_REQUEST[ 'lname_th' ] );
	$lname_th = mysqli_real_escape_string( $link, $lname_th );
	$fname_en = stripslashes( $_REQUEST[ 'fname_en' ] );
	$fname_en = mysqli_real_escape_string( $link, $fname_en );
	$lname_en = stripslashes( $_REQUEST[ 'lname_en' ] );
	$lname_en = mysqli_real_escape_string( $link, $lname_en );
	$fact_name = $_REQUEST[ 'fact_name' ];
	if($fact_name == 1500)
	{
		$dept_name = $_REQUEST[ 'dept_bs' ];
	}else if($fact_name == 1600)
	{
		$dept_name = $_REQUEST[ 'dept_sci' ];
	}else if($fact_name == 1700)
	{
		$dept_name = $_REQUEST[ 'dept_ea' ];
	}else if($fact_name == 1800)
	{
		$dept_name = $_REQUEST[ 'dept_art' ];
	}else 
	{
		$dept_name = $_REQUEST[ 'fact_name' ];
	}
	
$sql="UPDATE `advisor` SET `TitleName` = '$tname', `Fname_En` = '$fname_en', `Lname_En` = '$lname_en', `Fname_Th` = '$fname_th', `Lname_Th` = '$lname_th', `Faculty` = $fact_name, `Department` = $dept_name WHERE `advisor`.`AdvisorID` = $aid ;";
$result=$link->query($sql);
if(!$result)
{
?>
<meta http-equiv="refresh" content="0;url='advisor.php'" ? />
  <script>
		var sessionName = '<?php echo "ไม่สารถแก้ไขข้อมูลอาจารย์ รหัส "; echo $aid; echo " ได้";?>';
		alert( sessionName );
 </script>
<?php
}
else
{
?>
<meta http-equiv="refresh" content="0;url='advisor.php'" ? />
<script>
		var sessionName = '<?php echo "แก้ไขข้อมูลอาจารย์ รหัส "; echo $aid; echo " เรียบร้อยแล้วค่ะ";?>';
		alert( sessionName );
</script>
<?php
 }
?>