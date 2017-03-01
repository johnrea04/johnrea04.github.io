<?php
require_once("../lib/authroot_inc.php");
require_once("processProfile.php");


?>
<!DOCTYPE html>
<html>
    <head>
<title>Login</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/w3.css">
<link rel="stylesheet" href="../css/font-awesome.min.css">
<link rel="stylesheet" href="../css/bootstrap-theme.min.css">
                
    </head>
    
<body class="" background="../img/gray.jpg" id="myPage">

    
<!-- Navbar -->
<div class="w3-top">
 <ul class="w3-navbar w3-theme-d2 w3-left-align">
  <li class="w3-hide-medium w3-hide-large w3-opennav w3-right">
    <a class="w3-hover-black w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  </li>
  <li><a href="../www/root.php" class="w3-text-black" style="background-color:#ffb300"><i class="fa fa-home w3-margin-right"></i><b>Community Improvment Division</b></a></li>
  <li style="background-color:#ffb300" class="w3-hide-small w3-text-black w3-right w3-hide-small w3-dropdown-hover w3-hover-amber">
    <a href="javascript:void(0);" title="Notifications"><b>Menu</b> <i class="fa fa-caret-down"></i></a>     
    <div class="w3-dropdown-content w3-card-4">
      <a class="w3-text-black w3-hover-black" style="background-color:#ffb300" href="../www/logout.php">Logout</a>
    </div>
  </li>
  </ul>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-hide w3-hide-large w3-hide-medium">
    <ul class="w3-navbar w3-left-align">
      <li  class="w3-dropdown-hover w3-hover-amber w3-text-black">
      <a href="javascript:void(0);" title="Notifications">Menu <i class="fa fa-caret-down"></i></a>     
      <div class="w3-dropdown-content w3-card-4" style="background-color:#ffb300">
        <a class="w3-text-black w3-hover-black" href="../www/logout.php">Logout</a>
      </div>
      </li>
    </ul>
  </div>
      
<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">    
  <!-- The Grid -->
  <div class="w3-row">
    <!-- Left Column -->
    <div class="w3-right w3-animate-opacity w3-col m4">
      <!-- Profile -->
      <div class="w3-card-4 w3-round w3-white">
        <div class="w3-input-group w3-container w3-margin">
        <form action="insert.php" method="post"> 
         <p class="w3-center"><img src="../img/cute.gif" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
         <hr>
            <p class="w3-center"><input name="name" id="name" class="w3-center" placeholder="Name" type="text"/></p>
            <p class="w3-center"><input name="username" id="username" class="w3-center" placeholder="Account" type="text"/></p>
            <p class="w3-center"><input name="password" id="password" class="w3-center" placeholder="Password" type="password"/></p>
            <p class="w3-center"><input name="" id="" class="w3-center" placeholder="Confirm Password" type="password"/></p>
            <p class="w3-center"><input name="type" id="type" class="w3-center" placeholder="Type" type="text"/></p>
            <p class="w3-center"><span id="error">
                    </span></p>            
            <p class="w3-center"><button type="submit" style="background-color:#ffb300" class="w3-btn w3-hover-black w3-text-black w3-round-xlarge w3-margin-bottom">Create Account</button></p>
        </form>
        </div>
      </div>
      <br>

    <!-- End Left Column -->
    </div>
    
    <!-- Middle Column -->
    <div class="w3-animate-opacity w3-col m8 w3-left">
    

      
      <div class="w3-container w3-white w3-card-2 w3-round w3-margin"><br>
        <img src="../img/cidlogo.jpg" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:100px"> 
        <h4 class="w3-text-black"><b>Community Improvement Division</b><br/><span class="w3-opacity"><b>Cagayan de Oro City</b></span>
          </h4>
          <hr class="w3-clear">

<table id="sad" class="w3-responsive w3-table w3-centered" cellspacing="0" width="100%">
    
    <thead>
        <tr class="w3-text-black" style="background-color:#ffb300">
            <th class="w3-hover-black">id</th>
            <th class="w3-hover-black">Name</th>
            <th class="w3-hover-black">Account</th>
            <th class="w3-hover-black">Password</th>
            <th class="w3-hover-black">Type</th>
            <th class="w3-hover-black">Action</th>
        </tr> 
    <tbody>
                            <?php	

                            // display only names
                        $rs = getAccount();
                        while ($row = mysqli_fetch_assoc($rs)) {
                            ?>
                        <tr class="w3-white" >
                            <td><?=$stmt = $row['id']."</a>";?></td>
                            <td><?=$stmt = $row['Name']."</a>";?></td>
                            <td><?=$stmt = $row['Username']."</a>";?></td>
                            <td><?=$stmt = $row['Password']."</a>";?></td>
                            <td><?=$stmt = $row['Type']."</a>";?></td>
                            <td>
                                <?php print ("
                                <a class='fa fa-trash w3-text-amber' onClick=\"javascript: return confirm('Please confirm deletion');\" href='delete.php?id=".$row['id']."'></a>
                                "); ?>
                                
       
                            </td>
                        </tr>                        
                        <?php    
                            }
                        ?>
    </tbody>
</table>
      </div>
     </div>  
      
    <!-- End Middle Column -->
    </div>
    

    
  <!-- End Grid -->
    
      <!-- Modal -->

    
  </div>
  
<!-- End Page Container -->
      <!-- Modal -->
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
