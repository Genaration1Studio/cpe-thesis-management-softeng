<?php
include("conn.php");
	
	$tid = stripslashes( @$_REQUEST[ 'tid' ] ); // removes backslashes
	$tid = mysqli_real_escape_string( $link, $tid ); //escapes special characters in a string
	$tname_th = stripslashes( @$_REQUEST[ 'tname_th' ] );
	$tname_th = mysqli_real_escape_string( $link, $tname_th );
	$tname_en = stripslashes( @$_REQUEST[ 'tname_en' ] );
	$tname_en = mysqli_real_escape_string( $link, $tname_en );
	$tc = @$_REQUEST[ 'tc' ];
	$ty = stripslashes( @$_REQUEST[ 'ty' ] );
	$ty = mysqli_real_escape_string( $link, $ty );
	$tl = stripslashes( @$_REQUEST[ 'tl' ] );
	$tl = mysqli_real_escape_string( $link, $tl );
	$pro = @$_REQUEST[ 'pro' ];
	$ad = @$_REQUEST[ 'ad' ];
	$st = @$_REQUEST[ 'st' ];
	$sa = @$_REQUEST[ 'sa' ];
	$ab_th = stripslashes( @$_REQUEST[ 'ab_th' ] );
	$ab_th = mysqli_real_escape_string( $link, $ab_th );
	$ab_en = stripslashes( @$_REQUEST[ 'ab_en' ] );
	$ab_en = mysqli_real_escape_string( $link, $ab_en );

	
     $sql="SELECT * FROM `thesis` WHERE ThesisID = $tid;";
     $result=$link->query($sql);
	 if($result->num_rows==0)
	 {
		$sql="INSERT INTO `thesis` (`ThesisID`, `Thesis_Year`, `Category`, `Title_Th`, `Abstract_Th`, `Title_En`, `Abstract_En`, `LocationCollection`) VALUES ('$tid', '$ty', '$tc', '$tname_th', '$ab_th', '$tname_en', '$ab_en', '$tl')";

		$sql2="UPDATE `provider` SET `Thesis` = '$tid' WHERE `provider`.`ProviderID` = $pro ";

		$sql3="INSERT INTO `provider_advisor` (`Provider`, `Advisor`, `Status`, `Status_Addess`) VALUES ('$pro', '$ad', '$st', '$sa')";

	    $link->query($sql) or die (mysqli_error($link) . "<br>$sql");
		$link->query($sql2) or die (mysqli_error($link) . "<br>$sql2");
		$link->query($sql3) or die (mysqli_error($link) . "<br>$sql3");
		?>
					<script>
					var sessionName1 = '<?php echo "เพิ่มข้อมูลปริญญานิพนธ์ รหัส "; echo $tid; echo " เรียบร้อยแล้วแล้วค่ะ";?>';
					alert( sessionName1 );
				</script>
              <meta http-equiv="refresh" content="0;url='admin.php'" ? />
        <?php	 
	 }
	  else
	 { 
		$sql1="UPDATE `provider` SET `Thesis` = '$tid' WHERE `provider`.`ProviderID` = $pro ";
		$sql2="INSERT INTO `provider_advisor` (`Provider`, `Advisor`, `Status`, `Status_Addess`) VALUES ('$pro', '$ad', '$st', '$sa')";
		$link->query($sql1) or die (mysqli_error($link) . "<br>$sql2");
		$link->query($sql2) or die (mysqli_error($link) . "<br>$sql3");
		?>
					<script>
					var sessionName1 = '<?php echo "เพิ่มข้อมูลปริญญานิพนธ์ รหัส "; echo $tid; echo " เรียบร้อยแล้วแล้วค่ะ";?>';
					alert( sessionName1 );
				</script>
              <meta http-equiv="refresh" content="0;url='admin.php'" ? />
        <?php	   
	}
?>