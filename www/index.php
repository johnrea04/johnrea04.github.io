<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<title>Login</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/w3.css">
<link rel="stylesheet" href="../css/font-awesome.min.css">
<body class="" background="../img/gray.jpg" id="myPage">

    
<!-- Navbar -->
<div class="w3-top">
 <ul class="w3-navbar w3-theme-d2 w3-left-align">
     <li><a href="#" class="w3-text-black" style="background-color:#ffb300"><i class="fa fa-home w3-margin-right"></i><b>Community Improvement Division</b></a></li>
 </ul>
<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">    
  <!-- The Grid -->
  <div class="w3-row">
    <!-- Left Column -->
    <div class="w3-right w3-animate-opacity w3-col m4">
      <!-- Profile -->
      <div class="w3-card-2 w3-round w3-white">
        <div class="w3-input-group w3-container w3-margin">
        <form action="authenticate.php" method="post"> 
        <h4 class="w3-center w3-text-black">Welcome</h4>
         <p class="w3-center"><img src="../img/cute.gif" class="w3-circle" style="height:150px;width:150px" alt="Avatar"></p>
         <hr>
            <p class="w3-center"><input name="username" id="username" class="w3-center" placeholder="Account" type="text"/></p>
            <p class="w3-center"><input name="password" id="password" class="w3-center" placeholder="Password" type="password"/></p>
            <p class="w3-center"><span id="error">
                    <?php 
                        if (isset($_SESSION['err']))
                            print $_SESSION['err'];
                    ?>
                    </span></p>            
            <p class="w3-center"><button type="submit" class="w3-btn w3-amber w3-hover-black w3-round-xxlarge w3-margin-bottom">Sign in</button></p>
        </form>
        </div>
      </div>
      <br>

    <!-- End Left Column -->
    </div>
    
    <!-- Middle Column -->
    <div class="w3-animate-opacity w3-col m8 w3-left">
    

      
      <div class="w3-container w3-card-2 w3-round w3-margin w3-text-black w3-white"><br>
        <img src="../img/cidlogo.jpg" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:120px"> 
          <h4 class="w3-text-black" ><b>Community Improvement Division</b><br/><span class="w3-opacity"><b>Cagayan de Oro City</b></span>
          </h4>
          <hr class="w3-clear">
          <h4 class="w3-center w3-text-black"><b>About us</b></h4>
        <p>SITE UNDER DEVELOPMENT<br/><br/><br/>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div>
     </div>  
      
    <!-- End Middle Column -->
    </div>
    

    
  <!-- End Grid -->
  </div>
  
<!-- End Page Container -->
</div>
<br>


 
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
