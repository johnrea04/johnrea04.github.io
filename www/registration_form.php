<?php

require_once("../conf/db_conf.php");

$Purpose = $_POST['purpose'];
$Firstname = $_POST['Firstname'];
$Lastname = $_POST['Lastname'];
$Middle = $_POST['Middle'];

$streetNum = $_POST['streetNum'];
$Barangay = $_POST['Barangay'];
$District = $_POST['District'];
$City = $_POST['City'];
$Province = $_POST['Province'];
$Region = $_POST['Region'];
$Zip = $_POST['Zip'];
$postOffice = $_POST['postOffice'];

$Gender = $_POST['Gender'];
$civilStatus = $_POST['civilStatus'];
$Head = $_POST['Head'];

$Telephone = $_POST['Telephone'];
$Phone = $_POST['Phone'];
$email = $_POST['email'];
$Fax = $_POST['Fax'];
$others = $_POST['others'];

$Type = $_POST['Employment'];
$Status = $_POST['status'];
$Company = $_POST['company'];
$Business = $_POST['businuss'];
$Employment_address = $_POST['em_address'];
$Employment_others = $_POST['em_others'];

$Birth = $_POST['birthdate'];
$Birthplace = $_POST['birthplace'];
$Citizenship = $_POST['citizenship'];
$Religion = $_POST['religion'];

$Height = $_POST['height'];
$Weight = $_POST['weight'];
$Blood = $_POST['blood'];

$SSS = $_POST['SSS'];
$GSIS = $_POST['GSIS'];
$TIN = $_POST['TIN'];
$Marks = $_POST['marks'];

$Training = $_POST['course'];
$Sem_1 = $_POST['sem1'];
$Sem_2 = $_POST['sem2'];
$Year_1 = $_POST['year1'];
$Year_2 = $_POST['year2'];
$Start = $_POST['start'];
$End = $_POST['end'];

$School_1 = $_POST['school1'];
$Year_level = $_POST['level1'];
$School_year = $_POST['year_new_1'];
$Degree = $_POST['degree1'];
$Minor = $_POST['minor1'];
$Major = $_POST['major1'];
$Units = $_POST['units_new_1'];
$Honors = $_POST['honors1'];

$School_2 = $_POST['school2'];
$Year_level_2 = $_POST['level2'];
$School_year_2 = $_POST['year_new_2'];
$Degree_2 = $_POST['degree2'];
$Minor_2 = $_POST['minor2'];
$Major_2 = $_POST['major2'];
$Units_2 = $_POST['units_new_2'];
$Honors_2 = $_POST['honors2'];

$School_3 = $_POST['school3'];
$Year_level_3 = $_POST['level3'];
$School_year_3 = $_POST['year_new_3'];
$Degree_3 = $_POST['degree3'];
$Minor_3 = $_POST['minor3'];
$Major_3 = $_POST['major3'];
$Units_3 = $_POST['units_new_3'];
$Honors_3 = $_POST['honors3'];



global $server, $username,$password,$database;
// connect, select to db
$conn = mysqli_connect("$server", "$username", "$password", "$database");

if (mysqli_connect_errno()) {

	print "Error connecting to db :" . mysqli_connect_errno();
}

// submit query
$sql_stmt = "
INSERT INTO personal
(id, Purpose, Lastname,Firstname,Middle, Birth, Gender, Citizenship, Religion, birthPlace, Height, Weight, Blood, SSS, GSIS, TIN, Marks, civilStatus,Head)
VALUES
('', '$Purpose', '$Lastname', '$Firstname', '$Middle', '$Birth', '$Gender', '$Citizenship', '$Religion', '$Birthplace', '$Height', '$Weight', '$Blood', '$SSS', '$GSIS', '$TIN', '$Marks', '$civilStatus', '$Head');

SELECT LAST_INSERT_ID() FROM PERSONAL WHERE LAST_INSERT_ID() = $userid;

INSERT INTO address
(PID, streetNum, Barangay, District, Zip, City, Province, Region, postOffice)
VALUES
('$userid', '$streetNum','$Barangay','$District','$Zip','$City','$Province','$Region','$postOffice')

INSERT INTO contact
(PID, Phone, Telephone, Fax, email, others)
VALUES
('$userid', '$Phone', '$Telephone', '$Fax', '$email', '$others')

INSERT INTO education
(PID, School, Level, Year, Degree, Minor, Major, Units, Honor)
VALUES
('$userid', '$School_1', '$Year_level_1', '$School_year_1', '$Degree_1', '$Minor_1', '$Major_1', '$Units_1', '$Honors_1'),
('$userid', '$School_2', '$Year_level_2', '$School_year_2', '$Degree_2', '$Minor_2', '$Major_2', '$Units_2', '$Honors_2'),
('$userid', '$School_3', '$Year_level_3', '$School_year_3', '$Degree_3', '$Minor_3', '$Major_3', '$Units_3', '$Honors_3')

INSERT INTO employment
(PID, Type, Status, Company, Business, Address)
VALUES
('$userid', '$Type', '$Status', '$Company', '$Business', '$Employment_address')

INSERT INTO program
(PID, Course, Semester, Year, Start, Finish)
VALUES
('$userid', '$Training', '$Sem_1', '$Year_1', '$Start','$Finish')";

$rs = mysqli_query($conn, $sql_stmt);

	   header('Location:registration.php');
	   exit;

// close connection
mysqli_close($conn);	

?>