<?php
?>
<!DOCTYPE html>
<html>
<title>Records</title>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<link rel="stylesheet" href="../css/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- DataTables frameworks
<link rel="stylesheet" href="../css/jquery.dataTables.min.css"></link>    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="../js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function(){
        $('#sad').DataTable();
    });
</script>     DataTables frameworks -->

<body id="myPage" class="w3-light-grey">

<!-- Navbar -->
<div class="w3-top">
 <ul class="w3-navbar w3-theme-d2 w3-left-align">
  <li class="w3-hide-medium w3-hide-large w3-opennav w3-right">
    <a class="w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  </li>
  <li><a href="../www/home.php" class="w3-blue"><i class="fa fa-home w3-margin-right"></i>Community Improvment Division</a></li>
  <li class="w3-hide-small w3-text-blue w3-right w3-hide-small w3-dropdown-hover w3-hover-blue">
    <a href="javascript:void(0);" title="Notifications">Menu <i class="fa fa-caret-down"></i></a>     
    <div class="w3-dropdown-content w3-white w3-card-4">
      <a class="w3-text-blue" href="../www/logout.php">Logout</a>
    </div>
  </li>
  <li class="w3-hide-small w3-right w3-text-blue"><a href="../www/records.php" class="w3-hover-blue">Records</a></li>
  <li class="w3-hide-small w3-right w3-text-blue"><a href="../www/result.php" class="w3-hover-blue">Result</a></li>
  </ul>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-hide w3-hide-large w3-hide-medium">
    <ul class="w3-navbar w3-left-align w3-theme">
      <li><a class="w3-hover-blue w3-text-blue" href="../www/records.php">Records</a></li>
      <li><a class="w3-hover-blue w3-text-blue" href="../www/result.php">Result</a></li>
      <li  class="w3-dropdown-hover w3-text-blue w3-hover-blue">
      <a href="javascript:void(0);" title="Notifications">Menu <i class="fa fa-caret-down"></i></a>     
      <div class="w3-dropdown-content w3-light-grey w3-card-4">
        <a class="w3-text-blue" href="../www/logout.php">Logout</a>
      </div>
      </li>
    </ul>
  </div>
</div>
  

</div>
<br>
<!-- Page Container -->
<div class="w3-container" style="max-width:1400px;margin-top:20px">    
  <!-- The Grid -->
    <!-- Middle Column -->  
      <div class="w3-margin"><br>
          
<table id="sad" class="w3-blue w3-responsive w3-table w3-centered" cellspacing="0" width="100%">
    <thead>
        <tr class="w3-text-white">
            <th class="w3-hover-white">Name</th>
            <th class="w3-hover-white">Address</th>
            <th class="w3-hover-white">Contact info</th>
            <th class="w3-hover-white">Course/Training</th>
            <th class="w3-hover-white">Gender</th>
        </tr>
    </thead>
    <tbody>

    </tbody>
</table>
      </div> 
  <!-- End Page Container -->    
    <!-- End Middle Column -->
  
    

    
  <!-- End Grid -->
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
