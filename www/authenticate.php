<?php
/**
  * authenticate.php
  */
require_once("../conf/db_conf.php");
session_start();
// connect, select to db
$conn = mysqli_connect("$server", "$username", "$password", "$database");

if (mysqli_connect_errno()) {

	print "Error connecting to db :" . mysqli_connect_errno();
}

// submit query
$sql_stmt = "SELECT * FROM accounts WHERE username='" . $_POST['username'] . "'AND password=PASSWORD('" . $_POST['password'] . "')";

$rs = mysqli_query($conn, $sql_stmt);

// close connection
mysqli_close($conn);

if (mysqli_num_rows($rs) > 0) {	// authenticated

    $row = mysqli_fetch_assoc($rs);    
    
    
	$_SESSION['authenticated'] 	= TRUE;
	$_SESSION['username']		= $_POST['username'];
    $_SESSION['type']           =  $row['Type'];
	// load menu page
    if ($row['Type'] == 0) {
        header('Location:root.php');
        exit;
    }
    else {
        header('Location:home.php');
	    exit;
    }
}
else {									// not authenticated

	// redirect users to index.php (login page)
	$_SESSION['err'] 	= "Invalid Username and Password!";
	header('Location:index.php');
	exit;
} 	



/**** end of file authenticate.php **/