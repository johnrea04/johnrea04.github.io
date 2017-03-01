<?php
/**
  * viewProfile.php
  *
  */
  
// view individual profiles
require_once("../lib/auth_inc.php");
require_once("processProfile.php");
?>
<!DOCTYPE html>
<html>
<title>Profile</title>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<link rel="stylesheet" href="../css/w3.css">
<link rel="stylesheet" href="../css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
    <!-- DataTables frameworks
<link rel="stylesheet" href="../css/jquery.dataTables.min.css"></link>    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="../js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function(){
        $('#sad').DataTable();
    });
</script>     DataTables frameworks -->

<body id="myPage" background="../img/gray.jpg">

<!-- Navbar -->
<div class="w3-top">
 <ul class="w3-navbar w3-theme-d2 w3-left-align">
  <li class="w3-hide-medium w3-hide-large w3-opennav w3-right">
    <a class="w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  </li>
     <li><a href="../www/home.php" class="w3-text-black w3-hover-black" style="background-color:#ffb300"><i class="fa fa-home w3-margin-right"></i><b>Community Improvment Division</b></a></li>
  <li style="background-color:#ffb300" class="w3-hide-small w3-text-black w3-right w3-hide-small w3-dropdown-hover w3-hover-amber">
    <a href="javascript:void(0);" title="Notifications" class="w3-text-black">Menu <i class="fa fa-caret-down"></i></a>     
    <div class="w3-dropdown-content w3-text-black w3-hover-black w3-card-4" style="background-color:#ffb300">
      <a class="w3-text-black w3-hover-black" href="../www/logout.php">Logout</a>
    </div>
  </li>
  <li class="w3-hide-small w3-right" style="background-color:#ffb300"><a href="../www/records.php" class=" w3-text-black w3-hover-black">Records</a></li>
  <li class="w3-hide-small w3-right w3-text-white" style="background-color:#ffb300"><a href="../www/result.php" class=" w3-text-black w3-hover-black">Result</a></li>
  </ul>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-hide w3-hide-large w3-hide-medium">
    <ul class="w3-navbar w3-left-align w3-theme">
      <li><a class="w3-hover-black w3-text-white" style="background-color:#ffb300" href="../www/records.php">Records</a></li>
      <li><a class="w3-hover-black w3-text-white" style="background-color:#ffb300" href="../www/result.php">Result</a></li>
      <li  class="w3-dropdown-hover w3-text-white w3-hover-amber">
      <a href="javascript:void(0);" title="Notifications">Menu <i class="fa fa-caret-down "></i></a>     
      <div class="w3-dropdown-content w3-light-amber w3-card-4" style="background-color:#ffb300">
        <a class="w3-text-white w3-hover-black" href="../www/logout.php">Logout</a>
      </div>
      </li>
    </ul>
  </div>
    
</div><br>
<!-- Page Container -->
<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
    <div class="w3-third">
    
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <img src="../img/cute.gif" style="width:100%" alt="Avatar">
          <div class="w3-display-bottomleft w3-container w3-text-black">
          </div>
        </div>
          <hr>
          <p class="w3-text-black w3-large"><b><i class="fa fa-info fa-fw w3-margin-right w3-text-black"></i>Info</b></p>
          <div class="w3-container">
          <p><?php
$rs = getProfile($_GET['id']);

	while ($row = mysqli_fetch_assoc($rs)): ?>
	<?php print $row['Lastname']; ?>,
	<?php print $row['Firstname']; ?> <br />

<?php endwhile; ?></p>      
          <p>Gender:<?php
$rs = getProfile($_GET['id']);

	while ($row = mysqli_fetch_assoc($rs)): ?>
	<?php print $row['Gender']; ?> <br/>

<?php endwhile; ?> </p>
          <p>Civil Status: <?php
$rs = getProfile($_GET['id']);

	while ($row = mysqli_fetch_assoc($rs)): ?>
	<?php print $row['civilStatus']; ?> <br/>

<?php endwhile; ?></p>
          <p>Head of the family: <?php
$rs = getProfile($_GET['id']);

	while ($row = mysqli_fetch_assoc($rs)): ?>
	<?php print $row['Head']; ?> <br/>

<?php endwhile; ?></p>
          <p>Employment Type:<?php
$rs = getProfile($_GET['id']);

	while ($row = mysqli_fetch_assoc($rs)): ?>
	<?php print $row['Type']; ?> <br/>

<?php endwhile; ?></p>
          <p>Employment Status:<?php
$rs = getProfile($_GET['id']);

	while ($row = mysqli_fetch_assoc($rs)): ?>
	<?php print $row['Status']; ?> <br/>

<?php endwhile; ?></p>              
          <hr>

          <p class="w3-large w3-text-black"><b><i class="fa fa-info fa-fw w3-margin-right w3-text-black"></i>Address</b></p>
          <p>Number, Street:<?php
$rs = getProfile($_GET['id']);

	while ($row = mysqli_fetch_assoc($rs)): ?>
	<?php print $row['streetNum']; ?> <br/>

<?php endwhile; ?></p>
          <p>Barangay:<?php
$rs = getProfile($_GET['id']);

	while ($row = mysqli_fetch_assoc($rs)): ?>
	<?php print $row['Barangay']; ?> <br/>

<?php endwhile; ?></p>
          <p>District:<?php
$rs = getProfile($_GET['id']);

	while ($row = mysqli_fetch_assoc($rs)): ?>
	<?php print $row['District']; ?> <br/>

<?php endwhile; ?></p>
          <p>City:<?php
$rs = getProfile($_GET['id']);

	while ($row = mysqli_fetch_assoc($rs)): ?>
	<?php print $row['Zip']; ?> <br/>

<?php endwhile; ?></p>
          <p>Province:<?php
$rs = getProfile($_GET['id']);

	while ($row = mysqli_fetch_assoc($rs)): ?>
	<?php print $row['Province']; ?> <br/>

<?php endwhile; ?></p>
          <p>Region:<?php
$rs = getProfile($_GET['id']);

	while ($row = mysqli_fetch_assoc($rs)): ?>
	<?php print $row['Region']; ?> <br/>

<?php endwhile; ?></p>
          <p>Zip Code:<?php
$rs = getProfile($_GET['id']);

	while ($row = mysqli_fetch_assoc($rs)): ?>
	<?php print $row['Region']; ?> <br/>

<?php endwhile; ?></p>
          <p>P.O. Box Number:<?php
$rs = getProfile($_GET['id']);

	while ($row = mysqli_fetch_assoc($rs)): ?>
	<?php print $row['postOffice']; ?> <br/>

<?php endwhile; ?></p>
          <hr>
        </div>
      </div><br>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-twothird">

        
      <div class="w3-container w3-card-2 w3-white w3-margin-bottom">
        <h2 class="w3-text-black w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-black"></i>Contact information</h2>
          <div class="w3-container">
  <div class="row">
      <p>Telephone:<?php
$rs = getProfile($_GET['id']);

	while ($row = mysqli_fetch_assoc($rs)): ?>
	<?php print $row['Telephone']; ?> <br/>

<?php endwhile; ?></p>
      <p>Cellular:<?php
$rs = getProfile($_GET['id']);

	while ($row = mysqli_fetch_assoc($rs)): ?>
	<?php print $row['Phone']; ?> <br/>

<?php endwhile; ?></p>
      <p>e-mail:<?php
$rs = getProfile($_GET['id']);

	while ($row = mysqli_fetch_assoc($rs)): ?>
	<?php print $row['email']; ?> <br/>

<?php endwhile; ?></p>
      <p>Fax:<?php
$rs = getProfile($_GET['id']);

	while ($row = mysqli_fetch_assoc($rs)): ?>
	<?php print $row['Fax']; ?> <br/>

<?php endwhile; ?></p>
      <p>Others<?php
$rs = getProfile($_GET['id']);

	while ($row = mysqli_fetch_assoc($rs)): ?>
	<?php print $row['others']; ?> <br/>

<?php endwhile; ?></p>
      <hr>
  </div>
     </div>
      </div>      
        
        <div class="w3-container w3-card-2 w3-white w3-margin-bottom">
        <h2 class="w3-text-black w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-black"></i>Personal information</h2>
          <div class="w3-container">
  <div class="row">
    <p class="col-sm-4">Birthdate:<?php
$rs = getProfile($_GET['id']);

	while ($row = mysqli_fetch_assoc($rs)): ?>
	<?php print $row['Birth']; ?> <br/>

<?php endwhile; ?><br/>Age:<?php
$rs = getProfile($_GET['id']);

	while ($row = mysqli_fetch_assoc($rs)): ?>
	<?php print $row['Status']; ?> <br/>

<?php endwhile; ?><br/>Citizenship:<?php
$rs = getProfile($_GET['id']);

	while ($row = mysqli_fetch_assoc($rs)): ?>
	<?php print $row['Citizenship']; ?> <br/>

<?php endwhile; ?><br/>Religion:<?php
$rs = getProfile($_GET['id']);

	while ($row = mysqli_fetch_assoc($rs)): ?>
	<?php print $row['Religion']; ?> <br/>

<?php endwhile; ?><br/></p>
      <p class="col-sm-4">Birth Place:<?php
$rs = getProfile($_GET['id']);

	while ($row = mysqli_fetch_assoc($rs)): ?>
	<?php print $row['birthPlace']; ?> <br/>

<?php endwhile; ?><br/>Height:<?php
$rs = getProfile($_GET['id']);

	while ($row = mysqli_fetch_assoc($rs)): ?>
	<?php print $row['Height']; ?> <br/>

<?php endwhile; ?><br/>Weight:<?php
$rs = getProfile($_GET['id']);

	while ($row = mysqli_fetch_assoc($rs)): ?>
	<?php print $row['Weight']; ?> <br/>

<?php endwhile; ?><br/>Blood Type:<?php
$rs = getProfile($_GET['id']);

	while ($row = mysqli_fetch_assoc($rs)): ?>
	<?php print $row['Blood']; ?> <br/>

<?php endwhile; ?><br/></p>
    <p class="col-sm-4">SSS:<?php
$rs = getProfile($_GET['id']);

	while ($row = mysqli_fetch_assoc($rs)): ?>
	<?php print $row['SSS']; ?> <br/>

<?php endwhile; ?><br/>GSIS:<?php
$rs = getProfile($_GET['id']);

	while ($row = mysqli_fetch_assoc($rs)): ?>
	<?php print $row['GSIS']; ?> <br/>

<?php endwhile; ?><br/>TIN:<?php
$rs = getProfile($_GET['id']);

	while ($row = mysqli_fetch_assoc($rs)): ?>
	<?php print $row['TIN']; ?> <br/>

<?php endwhile; ?><br/></p>
      <hr>
  </div>
     </div>
      </div>

      <div class="w3-container w3-card-2 w3-white">
        <h2 class="w3-text-black w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-black"></i>Education</h2>
        <div class="w3-container">
          <h5 class="w3-text-black"><b>Institutional/School</b></h5>            
<table id="sad" class="w3-responsive w3-table w3-centered" cellspacing="0" width="100%">
    <thead>
        <tr class="w3-text-black"  style="background-color:#ffb300">
            <th class="w3-hover-black">School</th>
            <th class="w3-hover-black">Educational Level</th>
            <th class="w3-hover-black">School Year</th>
            <th class="w3-hover-black">Degree</th>
            <th class="w3-hover-black">Minor</th>
            <th class="w3-hover-black">Major</th>
            <th class="w3-hover-black">Units</th>
            <th class="w3-hover-black">Honors</th>
        </tr>
    </thead>
    <tbody>
        <tr class="w3-texr-white">
            <td><?php
$rs = getProfile($_GET['id']);

	while ($row = mysqli_fetch_assoc($rs)): ?>
	<?php print $row['School']; ?> <br/>

<?php endwhile; ?></td>
            <td><?php
$rs = getProfile($_GET['id']);

	while ($row = mysqli_fetch_assoc($rs)): ?>
	<?php print $row['Level']; ?> <br/>

<?php endwhile; ?></td>
            <td><?php
$rs = getProfile($_GET['id']);

	while ($row = mysqli_fetch_assoc($rs)): ?>
	<?php print $row['Year']; ?> <br/>

<?php endwhile; ?></td>
            <td><?php
$rs = getProfile($_GET['id']);

	while ($row = mysqli_fetch_assoc($rs)): ?>
	<?php print $row['Degree']; ?> <br/>

<?php endwhile; ?></td>
            <td><?php
$rs = getProfile($_GET['id']);

	while ($row = mysqli_fetch_assoc($rs)): ?>
	<?php print $row['Minor']; ?> <br/>

<?php endwhile; ?></td>
            <td><?php
$rs = getProfile($_GET['id']);

	while ($row = mysqli_fetch_assoc($rs)): ?>
	<?php print $row['Major']; ?> <br/>

<?php endwhile; ?></td>
            <td><?php
$rs = getProfile($_GET['id']);

	while ($row = mysqli_fetch_assoc($rs)): ?>
	<?php print $row['Units']; ?> <br/>

<?php endwhile; ?></td>
            <td><?php
$rs = getProfile($_GET['id']);

	while ($row = mysqli_fetch_assoc($rs)): ?>
	<?php print $row['Honor']; ?> <br/>

<?php endwhile; ?></td>
        </tr>    
    </tbody>
</table>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-text-black"><b>Course/Training</b></h5>
<table id="sad" class="w3-responsive w3-table w3-centered" cellspacing="0" width="100%">
    <thead>
        <tr class="w3-text-black" style="background-color:#ffb300">
            <th class="w3-hover-black">Program Title</th>
            <th class="w3-hover-black">Semester</th>
            <th class="w3-hover-black">School Year</th>
            <th class="w3-hover-black">Start</th>
            <th class="w3-hover-black">End</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php
$rs = getProfile($_GET['id']);

	while ($row = mysqli_fetch_assoc($rs)): ?>
	<?php print $row['Course']; ?> <br/>

<?php endwhile; ?></td>
            <td><?php
$rs = getProfile($_GET['id']);

	while ($row = mysqli_fetch_assoc($rs)): ?>
	<?php print $row['Semester']; ?> <br/>

<?php endwhile; ?></td>
            <td><?php
$rs = getProfile($_GET['id']);

	while ($row = mysqli_fetch_assoc($rs)): ?>
	<?php print $row['Year']; ?> <br/>

<?php endwhile; ?></td>
            <td><?php
$rs = getProfile($_GET['id']);

	while ($row = mysqli_fetch_assoc($rs)): ?>
	<?php print $row['Start']; ?> <br/>

<?php endwhile; ?></td>
            <td><?php
$rs = getProfile($_GET['id']);

	while ($row = mysqli_fetch_assoc($rs)): ?>
	<?php print $row['Finish']; ?> <br/>

<?php endwhile; ?></td>
        </tr>
    </tbody>
</table>
          <hr>
        </div>
      </div>

    <!-- End Right Column -->
    </div>
      
    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>
 
<script>
// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>

<!-- End Page Container -->

</body>
    
</html>
