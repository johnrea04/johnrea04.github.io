<?php
/**
  * menu.php
  *
  */
require_once("../lib/auth_inc.php");
require_once("processProfile.php");
?>
<!DOCTYPE html>
<html>
<title>Result</title>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<link rel="stylesheet" href="../css/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- DataTables frameworks   DataTables frameworks -->
<link rel="stylesheet" href="../css/jquery.dataTables.min.css"></link>    

<body id="myPage" class="" background="../img/gray.jpg">

<!-- Navbar -->
<div class="w3-top">
 <ul class="w3-navbar w3-theme-d2 w3-left-align">
  <li class="w3-hide-medium w3-hide-large w3-opennav w3-right">
    <a class="w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  </li>
     <li><a href="../www/home.php" class="w3-text-black" style="background-color:#ffb300"><i class="fa fa-home w3-margin-right"></i><b>Community Improvment Division</b></a></li>
  <li style="background-color:#ffb300" class="w3-hide-small w3-text-black w3-right w3-hide-small w3-dropdown-hover w3-hover-amber">
      <a href="javascript:void(0);" title="Notifications"><b>Menu</b><i class="fa fa-caret-down"></i></a>     
    <div class="w3-dropdown-content w3-card-4" style="background-color:#ffb300">
        <a class="w3-text-black w3-hover-black" href="../www/logout.php"><b>Logout</b></a>
    </div>
  </li>
     <li class="w3-hide-small w3-right w3-text-white"><a href="../www/records.php" class="w3-hover-amber"><b>Records</b></a></li>
     <li class="w3-hide-small w3-right w3-text-white"><a href="../www/result.php" class="w3-hover-amber"><b>Result</b></a></li>
  </ul>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-hide w3-hide-large w3-hide-medium">
    <ul class="w3-navbar w3-left-align w3-theme">
      <li><a class="w3-hover-black w3-text-white" style="background-color:#ffb300" href="../www/records.php">Records</a></li>
      <li><a class="w3-hover-black w3-text-white" style="background-color:#ffb300" href="../www/result.php">Result</a></li>
      <li  class="w3-dropdown-hover w3-text-white w3-hover-amber">
      <a href="javascript:void(0);" title="Notifications">Menu <i class="fa fa-caret-down"></i></a>     
      <div class="w3-dropdown-content w3-light-amber w3-card-4" style="background-color:#ffb300">
        <a class="w3-text-white w3-hover-black" href="../www/logout.php">Logout</a>
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
      <div class="w3-responsive w3-margin"><br>
          
<table id="sad" class="w3-table w3-centered" cellspacing="0" width="100%">
    
    <thead>
        <tr class="w3-text-black w3-white">
            <th class="w3-hover-amber">Lastname</th>
            <th class="w3-hover-amber">Firstname</th>
            <th class="w3-hover-amber">Program Title</th>
            <th class="w3-hover-amber">School</th>
            <th class="w3-hover-amber">Contact info</th>
            <th class="w3-hover-amber">School Head</th>
            <th class="w3-hover-amber">Result</th>
        </tr> 
    <tbody>
                            <?php	

                            // display only names
                        $rs = getNames();
                        while ($row = mysqli_fetch_assoc($rs)) {
                            ?>
                        <tr class="w3-white" >
                            <td><?=$stmt = "<a href=\"viewProfile.php?id=".$row['id']."\">".$row['Lastname']."</a>";?></td>
                            <td><?=$stmt = "<a href=\"viewProfile.php?id=".$row['id']."\">".$row['Firstname']."</a>";?></td>
                            <td><?=$stmt = "<a href=\"viewProfile.php?id=".$row['id']."\">".$row['Course']."</a>";?></td>
                            <td><?=$stmt = "<a href=\"viewProfile.php?id=".$row['id']."\">".$row['Name']."</a>";?></td>
                            <td><?=$stmt = "<a href=\"viewProfile.php?id=".$row['id']."\">".$row['Phone']."</a>";?></td>
                        </tr>                        
                        <?php    
                            }
                        ?>
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
