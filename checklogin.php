<?php

	ob_start();
	session_start();
	include_once 'config.php';

	// Connect to server and select databse.
	mysql_connect("$host", "$username", "$password")or die("cannot connect");
	mysql_select_db("$db_name")or die("cannot select DB");

	// Define $myusername and $mypassword
	$myusername = $_POST['myusername'];
	$mypassword = $_POST['mypassword'];

	// To protect MySQL injection
	$myusername = stripslashes($myusername);
	$mypassword = stripslashes($mypassword);
	$myusername = mysql_real_escape_string($myusername);
	$mypassword = mysql_real_escape_string($mypassword);
	$sql="SELECT * FROM $tbl_name WHERE username='wedfest2015' and password='$mypassword'";
	$result=mysql_query($sql);

	// Mysql_num_row is counting table row
	$count=mysql_num_rows($result);

	// If result matched $myusername and $mypassword, table row must be 1 row
	if($count==1){

		// Register $myusername, $mypassword and print "true"
		echo "true";
		$_SESSION['username'] = 'myusername';
		$_SESSION['password'] = 'mypassword';

	}
	else {
		//return the error message
		echo "<div class=\"alert alert-danger alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Incorrect Password</div>";
	}
	ob_end_flush();
?>
