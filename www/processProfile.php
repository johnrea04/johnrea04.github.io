<?php
/**
  *	processProfile.db
  *
  *
  */

require_once("../conf/db_conf.php");

  
function getNames() {
global $server, $username,$password,$database;
// connect, select to db
$conn = mysqli_connect("$server", "$username", "$password", "$database");

if (mysqli_connect_errno()) {

	print "Error connecting to db :" . mysqli_connect_errno();
}

// submit query
$sql_stmt = "SELECT 
			personal.id,
			personal.Lastname, 
			personal.Firstname, 
			program.Course,
			school.Name,
            school.schoolHead,
			contact.Phone
FROM
			personal
INNER JOIN
			program
ON
			personal.id  = program.PID
INNER JOIN
			school
ON
			personal.id = school.PID
INNER JOIN
			contact
ON
			personal.id = contact.PID";
$rs = mysqli_query($conn, $sql_stmt);

// close connection
mysqli_close($conn);	
return $rs;
}

function getProfile($id) {
global $server, $username,$password,$database;
// connect, select to db
$conn = mysqli_connect("$server", "$username", "$password", "$database");

if (mysqli_connect_errno()) {

	print "Error connecting to db :" . mysqli_connect_errno();
}

// submit query
$sql_stmt = "SELECT 
			*
FROM
			personal
INNER JOIN
			program
ON
			personal.ID  = program.PID
INNER JOIN
			school
ON
			personal.ID = school.PID
INNER JOIN
			contact
ON
			personal.ID = contact.PID
INNER JOIN
			education
ON
			personal.ID = education.PID 
INNER JOIN
			address
ON
			personal.ID = address.PID 
INNER JOIN
			employment
ON
			personal.ID = employment.PID 
WHERE personal.id=$id";
$rs = mysqli_query($conn, $sql_stmt);

// close connection
mysqli_close($conn);	
return $rs;
	
}


function getAccount() {
global $server, $username,$password,$database;
// connect, select to db
$conn = mysqli_connect("$server", "$username", "$password", "$database");

if (mysqli_connect_errno()) {

	print "Error connecting to db :" . mysqli_connect_errno();
}

// submit query
$sql_stmt = "SELECT * FROM accounts";
$rs = mysqli_query($conn, $sql_stmt);

// close connection
mysqli_close($conn);	
return $rs;
}

