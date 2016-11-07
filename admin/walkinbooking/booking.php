steps
<?php



if(isset($_POST['Confirm']))
{

header('Location: selectroom.php');
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>DL Divine | Home</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<style>
.main-header {
  text-align: center;
}
</style>
<body>

  <!-- start of navigation bar -->
  <nav class="red darken-4" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo"><img class="responsive-img" src="img/DL.png" style="width: 220px; height: 110px;"></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="/updatedDLDivine12/admin/index.php">Home</a></li>
        <li><a href="/updatedDLDivine12/admin/Rooms.php">Rooms</a></li>
        <li><a href="/updatedDLDivine12/admin/gallery.php">Gallery</a></li>
        <li><a href="/updatedDLDivine12/admin/walkinbooking/booking.php">Book a Room</a></li>
            <li><a href="/updatedDLDivine12/admin/dashboard.php">Dashboard</a></li>
        <!-- Dropdown Trigger -->
      <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Admin<i class="material-icons right">arrow_drop_down</i></a></li>
       <!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
  <li><a href="acceptedusers.php">Profile Settings</a></li>
      <li class="divider"></li>
    <li><a href="/updatedDLDivine12/admin/logout.php">Logout</a></li>
   
    </ul>
  
</ul>
      </ul>
      <ul id="nav-mobile" class="side-nav">
        <li><a href="index.php">Home</a></li>s
        <li><a href="Rooms.php">Rooms</a></li>
        <li><a href="gallery.php">Gallery</a></li>

       <!-- Dropdown Trigger -->
      <li><a class="dropdown-button" href="#!" data-activates="dropdown2">Admin<i class="material-icons right">arrow_drop_down</i></a></li>
       <!-- Dropdown Structure -->
  <ul id='dropdown1' class='dropdown-content'>
    <li><a href="announcements.php">Announcements</a></li>
    <li class="divider"></li>
    <li><a href="promos.php">Promos</a></li>
    <li class="divider"></li>
    <li><a href="activities.php">Activities</a></li>
    <li class="divider"></li>
    <li><a href="acceptedusers.php">Accepted Users</a></li>
    <li class="divider"></li>
    <li><a href="userinfo.php">Reservations</a></li>
    <li class="divider"></li>
     <li><a href="userinfo.php">List of Transactions</a></li>
  </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse" style="color:white"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <!-- end of navigation bar -->

  <header class="main-header" role="banner">
  <img src="img/steps/step1.png" alt="step1"/><hr noshade>
</header>
        
       <br><br><br>
      
  <div class="row">
    <form style="margin-top:20px;" class="col s12" action="booking.php" method = "post">
      <div class="row s12">
        <div class="input-field col s4">
   
          <label for="Checkin">Check-in:</label>
        <input id="Checkin: " type="date"  name = "user_arrival"  class="datepicker" required >


        </div>
        <div class="input-field col s4">
       
            <label for="Checkout">Check-out:</label>
          <input id="Checkout" type="date" name = "user_departure"   class="datepicker" required >



     </div>
      
      <div class="row">
        <div class="input-field col s4">




<?php

//$datetime1 = new DateTime($login_session = $row['user_arrival']);

//$datetime2 = new DateTime( $login_session = $row['user_departure']);

//$difference = $datetime1->diff($datetime2);

//$result =  ' '  .$difference->d.'';

?>

<input type="hidden" name="user_numnights"  value = "<?php
//echo $result;
?>" readonly style=" border:none; background:transparent;  font-weight: bold; height:30px; font-size:13px; " >

</div>
        </div>
      </div>
            <input type="hidden" name="user_id"  value = " "  style=" border:none; background:transparent;  font-weight: bold;" >


      <input   class="waves-effect waves-light btn red darken-4" style="float:right;" type="submit" name="Confirm" value ="Confirm">

    </form>


  </div>
      
     
       <h6 style="background-color:gray; padding:10px; color:white;" > Check-in: 2:00 pm | Check-out: 12:00 nn </h6>
   
        <hr />


  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
           <i style="font-size: 50px;" class="material-icons prefix">phone</i>
          <h5>Contact Us</h5>
          <p class="center-align light"># 61 P Valenzuela Street 1st Road, Salud Mitra Barangay,Baguio City Just Below SM and Barrio Fiesta</p>
          <p class="center-align light">Tel. nos. (074) 442-3125 Main Office<br>
          (074) 423-0900 Front Desk <br> Cell. No. 09107203239 Front Desk</p>
        </div>
      </div>

    </div>
  </div>


  <footer class="page-footer red darken-4">
  <!--
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Company Bio</h5>
          <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
--> 
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Materialize</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script src="js/modal.js"></script>
  <script src="js/dropdown.js"></script>

  </body>
</html>
