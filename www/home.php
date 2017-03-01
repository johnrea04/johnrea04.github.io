<!DOCTYPE html>
<html>
<title>Home</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/w3.css">
<link rel="stylesheet" href="../css/font-awesome.min.css">
<body class="" background="../img/gray.jpg" id="myPage">


<!-- Navbar -->
<div class="w3-top">
 <ul class="w3-navbar w3-theme-d2 w3-left-align">
  <li class="w3-hide-medium w3-hide-large w3-opennav w3-right">
    <a class="w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  </li>
     <li><a href="../www/home.php" class="w3-text-black w3-hover-black" style="background-color:#ffb300"><i class="fa fa-home w3-margin-right"></i><b>Community Improvment Division</b></a></li>
  <li style="background-color:#ffb300" class="w3-hide-small w3-text-black w3-right w3-hide-small w3-dropdown-hover w3-hover-amber">
    <a href="javascript:void(0);" title="Notifications">Menu <i class="fa fa-caret-down"></i></a>     
    <div class="w3-dropdown-content w3-text-black w3-hover-black w3-card-4" style="background-color:#ffb300">
      <a class="w3-text-black w3-hover-black" href="../www/logout.php">Logout</a>
    </div>
  </li>
  <li class="w3-hide-small w3-animate-opacity w3-right w3-text-white"><a href="../www/records.php" class="w3-hover-amber">Records</a></li>
  <li class="w3-hide-small w3-animate-opacity w3-right w3-text-white"><a href="../www/result.php" class="w3-hover-amber">Result</a></li>
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

<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">    
  <!-- The Grid -->
  <div class="w3-row">
    <!-- Left Column -->
    <div class="w3-right w3-animate-opacity w3-col m4">
      <!-- Profile -->
      <br>

    <!-- End Left Column -->
    </div>
    
    <!-- Middle Column -->
    <div class="w3-col m8 w3-left">
    

      
      <div class="w3-container w3-card-2 w3-white w3-round w3-margin"><br>
        <img src="../img/cidlogo.jpg" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px"> 
        <h4>Community Improvement Division<br/><span class="w3-opacity">Cagayan de Oro City</span>
          </h4>
          <hr class="w3-clear">
          <h4 class="w3-center">About us</h4>
        <p>IMPAS MGA DAOG MATA ANI NGA SITE! <br/><br/><br/>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div>
     </div>  
      
    <!-- End Middle Column -->
    </div>
    

    
  <!-- End Grid -->
  </div>    
</div>
    
    

<script>
// Script for side navigation
function w3_open() {
    var x = document.getElementById("mySidenav");
    x.style.width = "300px";
    x.style.textAlign = "center";
    x.style.fontSize = "40px";
    x.style.paddingTop = "10%";
    x.style.display = "block";
}

// Close side navigation
function w3_close() {
    document.getElementById("mySidenav").style.display = "none";
}

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

</body>
</html>
