<?php
	if(!isset($_SESSION))
	{
		session_start();
	}
	if ( isset( $_SESSION[ "AdminID" ] ) ) {
		header( "Location: admin.php" );
		exit();
	} else if ( isset( $_SESSION[ "MemberID" ] ) ) {
		header( "Location: main.php" );
		exit();
	}
?>
