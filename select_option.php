<?php
 if(!isset($_SESSION)) {
	session_start();
}
?>
<html>
	<head>
		<title>Home</title>
		<link rel="stylesheet" href="css/new_prev.css">
		<link rel="stylesheet" href="css/background.css">
	</head>
	
<?php
	// Variable $login_access defines which type of user is logged in and then give response of the page as per that
	$login_access = $_SESSION['login_access'];
	if($login_access == 'Appellant'){
		include 'appellant_interface.php';
	}
	else{
	echo "<div class=new-prev>";
	echo "<marquee scrollamount=5><strong>PLEASE SELECT AN OPTION:</strong></marquee> <br><br><br>";
	echo "<div class=options>";

	if($login_access=='Admin') {
		echo"<a href='./add_rti.html'>Add New RTI</a><br><br><br>
			 <a href='./report.php'>Generate Report</a><br><br><br>
			 <a href='./backup_ask_user.html'>Create Backup</a><br><br><br>
			 <a href='./change_password.php'>Change Password</a><br><br><br>";
    }
	echo"<a href='./ongoing_rti.php'>Ongoing RTIs</a><br><br><br>
			 <a href='./completed_rti.php'>Completed RTIs</a><br><br><br>
			 <a href='./view_closed_rti.php'>Closed RTIs</a>	
		</div>
		</div>";
}
include 'logoff.html';
?>