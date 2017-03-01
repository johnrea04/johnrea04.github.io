<?php

require_once("../conf/db_conf.php");

$name = $_POST['name'];
$account = $_POST['username'];
$pword = $_POST['password'];
$type = $_POST['type'];

global $server, $username,$password,$database;
// connect, select to db
$conn = mysqli_connect("$server", "$username", "$password", "$database");

if (mysqli_connect_errno()) {

	print "Error connecting to db :" . mysqli_connect_errno();
}

// submit query
$sql_stmt = "INSERT INTO accounts
(Name,Username,Password,Type)
VALUES
('$name','$account',PASSWORD('$pword'),'$type')";
$rs = mysqli_query($conn, $sql_stmt);

	   header('Location:root.php');
	   exit;

// close connection
mysqli_close($conn);	

?>