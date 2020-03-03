<?php
include("conn.php");
	
	$username = stripslashes( $_REQUEST[ 'username' ] ); // removes backslashes
	$username = mysqli_real_escape_string( $link, $username ); //escapes special characters in a string
	$password = stripslashes( $_REQUEST[ 'password' ] );
	$password = mysqli_real_escape_string( $link, $password );
	$type = $_REQUEST[ 'type' ];
	$titlename = $_REQUEST[ 'title_name' ];
	$fname = stripslashes( $_REQUEST[ 'fname' ] );
	$fname = mysqli_real_escape_string( $link, $fname );
	$lname = stripslashes( $_REQUEST[ 'lname' ] );
	$lname = mysqli_real_escape_string( $link, $lname );
	$email = stripslashes( $_REQUEST[ 'email' ] );
	$email = mysqli_real_escape_string( $link, $email );
	$tel = stripslashes( $_REQUEST[ 'tel' ] );
	$tel = mysqli_real_escape_string( $link, $tel );
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
	
$sql="UPDATE `member` SET `Mem_pass` = '$password', `MemType` = '$type', `TitleName` = '$titlename', `Fname` = '$fname', `Lname` = '$lname', `Email` = '$email', `Tel` = '$tel', `Faculty` = $fact_name, `Department` = $dept_name WHERE `member`.`MemID` = '$username' ;";
$result=$link->query($sql);
if(!$result)
{
?>
<meta http-equiv="refresh" content="0;url='member.php'" ? />
  <script>
		var sessionName = '<?php echo "ไม่สารถแก้ไขข้อมูลสมาชิก ชื่อ "; echo $username; echo " ได้";?>';
		alert( sessionName );
 </script>
<?php
}
else
{
?>
<meta http-equiv="refresh" content="0;url='member.php'" ? />
<script>
		var sessionName = '<?php echo "แก้ไขข้อมูลสมาชิก ชื่อ "; echo $username; echo " เรียบร้อยแล้วค่ะ";?>';
		alert( sessionName );
</script>
<?php
 }
?>