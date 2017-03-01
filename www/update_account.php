<?php

require_once("../conf/db_conf.php");

$id = $_GET['id'];

// connect, select to db
$conn = mysqli_connect("$server", "$username", "$password", "$database");

if (mysqli_connect_errno()) {

	print "Error connecting to db :" . mysqli_connect_errno();
}

// submit query
$sql_stmt = "UPDATE accounts SET Name='', Username='', Password='', Type='' id = '$id'";
$rs = mysqli_query($conn, $sql_stmt);

	   header('Location:root.php');
	   exit;

// close connection
mysqli_close($conn);	

?>