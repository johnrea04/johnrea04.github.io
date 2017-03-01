<?php
/**
  * viewProfile.php
  *
  */
  
// view individual profiles

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


<body id="myPage" class="" background="../img/gray.jpg">

<!-- Navbar -->
<div class="w3-top">
 <ul class="w3-navbar w3-theme-d2 w3-left-align">
  <li class="w3-hide-medium w3-hide-large w3-opennav w3-right">
    <a class="w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  </li>
     <li><a href="#" class="w3-text-black" style="background-color:#ffb300"><i class="fa fa-home w3-margin-right"></i><b>Community Improvement Division</b></a></li>
  </ul>
</div>
  

</div>
<br>
<!-- Page Container -->
<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">
    <form class="containter" action="registration_form.php" method="post">
  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
    <div class="w3-third">
    
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-container">
        </div>

          <div class="w3-container">
              <br/>
          <label class="w3-label w3-text-amber"><b>Purpose for enrolling</b></label>
              <textarea class="w3-input w3-border w3-light-grey" placeholder="NOT MORE THAN 255 CHARACTERS" name="purpose" type="text"></textarea> <br/>              
          <p class="w3-text-amber w3-large"><b><i class=" fa-fw w3-margin-right"></i>Name</b></p>
          <label class="w3-label w3-text-black"><b>First Name</b></label>
          <input name="Fistname" class="w3-input w3-border w3-light-grey" type="text">
          <label class="w3-label w3-text-black"><b>Last Name</b></label>
          <input name="Lastname" class="w3-input w3-border w3-light-grey" type="text">
          <label class="w3-label w3-text-black"><b>Middle Name</b></label>
          <input name="Middle" class="w3-input w3-border w3-light-grey" type="text">
          <hr>
          <p class="w3-text-amber w3-large"><b><i class=" fa-fw w3-margin-right"></i>Address</b></p>
          <label class="w3-label w3-text-black"><b>Number, Street</b></label>
          <input name="streetNum" class="w3-input w3-border w3-light-grey" type="text">
          <label class="w3-label w3-text-black"><b>Barangay</b></label>
          <input name="Barangay" class="w3-input w3-border w3-light-grey" type="text">
          <label class="w3-label w3-text-black"><b>District</b></label>
          <input name="District" class="w3-input w3-border w3-light-grey" type="text">
          <label class="w3-label w3-text-black"><b>City</b></label>
          <input name="City" class="w3-input w3-border w3-light-grey" type="text">
          <label class="w3-label w3-text-black"><b>Province</b></label>
          <input name="Province" class="w3-input w3-border w3-light-grey" type="text">
          <label class="w3-label w3-text-black"><b>Region</b></label>
          <input name="Region" class="w3-input w3-border w3-light-grey" type="text">
          <label class="w3-label w3-text-black"><b>Zip Code</b></label>
          <input name="Zip" class="w3-input w3-border w3-light-grey" type="text">
          <label class="w3-label w3-text-black"><b>P.O. Box No.</b></label>
          <input name="postOffice" class="w3-input w3-border w3-light-grey" type="text">
          <hr>
        </div>    
      </div><br>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-twothird">

        
        <div class="w3-container w3-card-2 w3-white w3-margin-bottom">
        <h2 class="w3-text-blue w3-padding-16"></h2>
          <div class="w3-container">
  <div class="row">
        <p class="col-sm-3">         
          <label class="w3-label w3-text-amber"><b>Gender</b></label><br/>
          <input id="genderM" class="" name="Gender"
                 <?php if (isset($Gender) && ($Gender == "MALE")); ?>
                 type="radio"><i class="w3-text-black"> MALE</i>
          <input id="genderF" class="" name="Gender"
                 <?php if (isset($Gender) && ($Gender == "FEMALE")); ?>                 
                 type="radio"><i class="w3-text-black"> FEMALE</i> <br/><br/>
          
          <label class="w3-label w3-text-amber"><b>Civil Status</b></label><br/>
          <input id="single" class="" type="radio" name="civilStatus"
          <?php if (isset($civilStatus) && ($civilStatus == "Single")); ?>>
            <i class="w3-text-black"> Single</i> <br/>
          <input id="married" class="" type="radio" name="civilStatus"
          <?php if (isset($civilStatus) && ($civilStatus == "Married")); ?>>
            <i class="w3-text-black"> Married</i> <br/>
          <input id="separated" class="" type="radio" name="civilStatus"
          <?php if (isset($civilStatus) && ($civilStatus == "Separated")); ?>>
            <i class="w3-text-black"> Separated</i> <br/>
          <input id="widow" class="" type="radio" name="civilStatus"
          <?php if (isset($civilStatus) && ($civilStatus == "Widow")); ?>>                 
            <i class="w3-text-black"> Widow</i> <br/><br/>
            
            
          <label class="w3-label w3-text-amber"><b>Head of the family</b></label><br/>
          <input id="headY" class="" type="radio" name="head"
          <?php if (isset($Head) && ($head == "Yes")); ?>>                                  
                 <i class="w3-text-black"> YES</i>
          <input id="headN" class="" type="radio" name="head"
          <?php if (isset($Head) && ($head == "No")); ?>>                 
                 <i class="w3-text-black"> NO</i> <br/>
            
            
        <p class="col-sm-3">
          <label class="w3-text-amber">Contact information</label>
          <label class="w3-label w3-text-black">Telephone</label>
          <input name="Telephone" class="w3-input w3-border w3-light-grey" type="text">
          <label class="w3-label w3-text-black">Cellular</label>
          <input name="Phone" class="w3-input w3-border w3-light-grey" type="text">
          <label class="w3-label w3-text-black">e-mail</label>
          <input name="email" class="w3-input w3-border w3-light-grey" type="text">
          <label class="w3-label w3-text-black">Fax</label>
          <input name="Fax" class="w3-input w3-border w3-light-grey" type="text">
          <label class="w3-label w3-text-black">Others</label>
          <input name="others" class="w3-input w3-border w3-light-grey" type="text"></p>
      
      
        <p class="col-sm-3">
          <label class="w3-label w3-text-amber" name="Employment">                             
                 <b>Employment Type</b></label><br/>
          <input class="" type="radio" name="Employment"
          <?php if (isset($Type) && ($Type == "Employed")); ?>>                 
                 <i class="w3-text-black"> Employed</i> <br/>
          <label class="w3-label w3-text-amber"><b>Company name</b></label> 
          <input name="company" class="w3-input w3-border w3-light-grey"  placeholder="for employed only" type="text">
          <label class="w3-label w3-text-amber"><b>Address</b></label>
          <input name="em_address" class="w3-input w3-border w3-light-grey" type="text"><br/>            
          
            
          <input class="" type="radio" name="Employment"
          <?php if (isset($Type) && ($Type == "Self-employed")); ?>>                 
                 <i class="w3-text-black"> Self-employed</i> <br/>
          <label class="w3-label w3-text-amber"><b>Business</b></label>
          <input name="business" class="w3-input w3-border w3-light-grey"  placeholder="for self-employed only" type="text">
          <label class="w3-label w3-text-amber"><b>Address</b></label>
          <input name="em_address" class="w3-input w3-border w3-light-grey" type="text"><br/>
          
            
          <input class="" type="radio" name="Employment"
          <?php if (isset($Type) && ($Type == "Unemployed")); ?>>                 
                 <i class="w3-text-black"> Unemployed</i> <br/>
            
          <label class="w3-label w3-text-amber"><b>Others</b></label>
          <input id="others2" class="w3-input w3-border w3-light-" type="text" placeholder="Please specify" name="em_others">             
        </p>
      
      
        <p class="col-sm-3">
          <label class="w3-label w3-text-amber"><b>Employment Status</b></label><br/>
          <input id="casual" type="radio" name="status"
          <?php if (isset($Status) && ($Status == "Casual")); ?>>                 
                 <i class="w3-text-black"> Casual</i> <br/>
          <input id="contractual" type="radio" name="status"
          <?php if (isset($Status) && ($Status == "Contractual")); ?>>                 
                 <i class="w3-text-black"> Contractual</i> <br/>
          <input id="regular" type="radio" name="status"
          <?php if (isset($Status) && ($Status == "Regular")); ?>>                 
                 <i class="w3-text-black"> Regular</i> <br/>
          <input id=jobOrder type="radio" name="status"
          <?php if (isset($Status) && ($Status == "Job Order")); ?>>                 
                 <i class="w3-text-black"> Job Order</i> <br/>
          <input id="permanent" type="radio" name="status"
          <?php if (isset($Status) && ($Status == "Permanent")); ?>>                 
                 <i class="w3-text-black"> Permanent</i> <br/>
          <input id="temporary" type="radio" name="status"
          <?php if (isset($Status) && ($Status == "Temporary")); ?>>                 
                 <i class="w3-text-black"> Temporary</i> <br/><br/>
          <label class="w3-label w3-text-amber" name="status"><b>If student</b></label><br/>            
          <input id="trainee" type="radio" name="status"
          <?php if (isset($Status) && ($Status == "Trainee")); ?>>                 
                 <i class="w3-text-black"> Trainee</i> <br/>
          <input id="ojt" type="radio" name="status"
          <?php if (isset($Status) && ($Status == "OJT")); ?>>                 
                 <i class="w3-text-black"> OJT</i> <br/>
      <hr>
  </div>
     </div>
      </div>   
        
        <div class="w3-container w3-card-2 w3-white w3-margin-bottom">
        <h2 class="w3-text-amber w3-padding-16"><i class=" fa-fw w3-margin-right w3-xxlarge w3-text-blue"></i>Personal information</h2>
          <div class="w3-container">
  <div class="row">
        <p class="col-sm-4">
          <label class="w3-label w3-text-black"><b>Birthdate</b></label>
          <input name="birthdate" class="w3-input w3-border w3-light-grey" placeholder="YYYY-MM-DD" type="text">
          <label class="w3-label w3-text-black"><b>Birthplace</b></label>
          <input name="birthplace" class="w3-input w3-border w3-light-grey" type="text">
          <label class="w3-label w3-text-black"><b>Citizenship</b></label>
          <input name="citizenship" class="w3-input w3-border w3-light-grey" type="text">
          <label class="w3-label w3-text-black"><b>Religion</b></label>
          <input name="religion" class="w3-input w3-border w3-light-grey" type="text">
        <p class="col-sm-4">
          <label class="w3-label w3-text-black"><b>Height</b></label>
          <input name="height" class="w3-input w3-border w3-light-grey" type="text">
          <label class="w3-label w3-text-black"><b>Weight</b></label>
          <input name="weight" class="w3-input w3-border w3-light-grey" type="text">
          <label class="w3-label w3-text-black"><b>Blood Type</b></label>
          <input name="blood" class="w3-input w3-border w3-light-grey" type="text">
        <p class="col-sm-4">
          <label class="w3-label w3-text-black"><b>SSS No.</b></label>
          <input name="SSS" class="w3-input w3-border w3-light-grey" type="text">
          <label class="w3-label w3-text-black"><b>GSIS No.</b></label>
          <input name="GSIS" class="w3-input w3-border w3-light-grey" type="text">
          <label class="w3-label w3-text-black"><b>TIN No.</b></label>
          <input name="TIN" class="w3-input w3-border w3-light-grey" type="text">
          <label class="w3-label w3-text-black"><b>Distinguishing Marks</b></label>
          <input name="marks" class="w3-input w3-border w3-light-grey" type="text">

      <hr>
  </div>
     </div>
      </div>

        <div class="w3-container w3-card-2 w3-white w3-margin-bottom">
        <h2 class="w3-text-amber w3-padding-16"><i class=" fa-fw w3-margin-right w3-xxlarge"></i>Course/Training Program Title</h2>
          <div class="w3-container">
  <div class="row">
        <p class="col-sm-3">
          <label class="w3-label w3-text-black"><b>Course/Training Program</b></label>
            <textarea name="course" class="w3-input w3-border w3-light-grey" type="text"></textarea>
        <p class="col-sm-3">
          <label class="w3-label w3-text-black"><b>Semester</b></label>
          <input name="sem1" class="w3-input w3-border w3-light-grey" type="text">
          <input name="sem2" class="w3-input w3-border w3-light-grey" type="text">
        <p class="col-sm-3">
          <label class="w3-label w3-text-black"><b>School Year</b></label>
          <input name="year1" class="w3-input w3-border w3-light-grey"  type="text">
          <input name="year2" class="w3-input w3-border w3-light-grey"  type="text">
        <p class="col-sm-3">
          <label class="w3-label w3-text-black"><b>Duration</b></label>
          <input name="start" class="w3-input w3-border w3-light-grey" placeholder="Date Start" type="text">
          <input name="end" class="w3-input w3-border w3-light-grey" placeholder="Date End" type="text">
          
      <hr>
  </div>
     </div>
      </div>

    <!-- End Right Column -->
    </div>
      
    
  <!-- End Grid -->
  </div>
  <div class="w3-row-padding w3-container">
        <div class="w3-container w3-card-2 w3-white w3-margin-bottom">
        <h2 class="w3-text-amber w3-padding-16"><i class=" fa-fw w3-margin-right w3-xxlarge"></i>Educational Background (include the institutions/schools)</h2>
          <div class="w3-container">
  <div class="row">
      
<table id="sad" class="w3-responsive w3-centered w3-section" cellspacing="0" width="100%">
    <thead>
        <tr class="w3-text-black" height="50px" style="background-color:#ffb300">
            <th class="w3-hover-black">School Name</th>
            <th class="w3-hover-black">Educational Level</th>
            <th class="w3-hover-black">School Year</th>
            <th class="w3-hover-black">Degree</th>
            <th class="w3-hover-black">Minor</th>
            <th class="w3-hover-black">Major</th>
            <th class="w3-hover-black">Units Earned</th>
            <th class="w3-hover-black">Honors Received</th>
        </tr>
    </thead>
    <tbody>
            <td><input name="school1" class="w3-input w3-border w3-light-grey" type="text"></td>
            <td><input name="level1" class="w3-input w3-border w3-light-grey" type="text"></td>
            <td><input name="year_new_1" class="w3-input w3-border w3-light-grey" type="text"></td>
            <td><input name="degree1" class="w3-input w3-border w3-light-grey" type="text"></td>
            <td><input name="minor1" class="w3-input w3-border w3-light-grey" type="text"></td>
            <td><input name="major1" class="w3-input w3-border w3-light-grey" type="text"></td>
            <td><input name="units_new_1" class="w3-input w3-border w3-light-grey" type="text"></td>
            <td><input name="honors1" class="w3-input w3-border w3-light-grey" type="text"></td>
    </tbody>
    <tbody>
            <td><input name="school2" class="w3-input w3-border w3-light-grey" type="text"></td>
            <td><input name="level2" class="w3-input w3-border w3-light-grey" type="text"></td>
            <td><input name="year_new_2" class="w3-input w3-border w3-light-grey" type="text"></td>
            <td><input name="degree2" class="w3-input w3-border w3-light-grey" type="text"></td>
            <td><input name="minor2" class="w3-input w3-border w3-light-grey" type="text"></td>
            <td><input name="major2" class="w3-input w3-border w3-light-grey" type="text"></td>
            <td><input name="units_new_2" class="w3-input w3-border w3-light-grey" type="text"></td>
            <td><input name="honors2" class="w3-input w3-border w3-light-grey" type="text"></td>
    </tbody>
    <tbody>
            <td><input name="school3" class="w3-input w3-border w3-light-grey" type="text"></td>
            <td><input name="level3" class="w3-input w3-border w3-light-grey" type="text"></td>
            <td><input name="year_new_3" class="w3-input w3-border w3-light-grey" type="text"></td>
            <td><input name="degree3" class="w3-input w3-border w3-light-grey" type="text"></td>
            <td><input name="minor3" class="w3-input w3-border w3-light-grey" type="text"></td>
            <td><input name="major3" class="w3-input w3-border w3-light-grey" type="text"></td>
            <td><input name="units_new_3" class="w3-input w3-border w3-light-grey" type="text"></td>
            <td><input name="honors3" class="w3-input w3-border w3-light-grey" type="text"></td>
    </tbody>
  </table>
      <hr>
  </div>
     </div>
      </div>
            </div>
        <div class="w3-center">          
            <p class="w3-center"><button type="submit" class="w3-btn w3-amber w3-hover-black w3-round-xxlarge w3-margin-bottom">Submit</button></p>
        </div>
        </form> 
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

<footer>
    <h2 class="w3-center w3-text-blue">I LOVE DORITOS<br/><span>Site under development</span></h2>
</footer>
    
</html>
