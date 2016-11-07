<!-- start of ht e php code for Session and connect.php-->
<?php

?>
<!-- end of ht e php code for Session and connect.php-->

<!DOCTYPE html>
<html lang="en">
<head>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>DL Divine | Home</title>

  <!-- start of CSS links -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <!-- end of CSS links -->

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
    <li><a href="logout.php">Logout</a></li>
   
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
  <img src="img/steps/step4.png" alt="step4"/><hr noshade>
</header>

  <!-- start of booking summary--> 
  <div class="row col s12">   
 <div class="col s6">
         <div class="card grey darken-2" style="border:4px solid #ffc400;" >
        <div class="card-content white-text" align="center">  
        <h5 class="amber-text text-accent-3" style="padding:10px;"> Booking Summary</h5>
        <p  class="grey col s6" style="padding:10px; ">Check-in:  <?php //echo  $login_session = $row['user_arrival'];?></p>
        <p class="grey " style="padding:10px; ">Check-out:  <?php //echo  $login_session = $row['user_departure'];?> </p>
        <hr>
        <p class="grey" style="padding:10px;"> Type of Room:  <?php //echo  $login_session = $row['user_roomtype'];?> </p>
        <hr>
        <p  class="grey" style="padding:10px; ">Number of Room(s):  <?php //echo  $login_session = $row['user_numrooms'];?> </p>
        <hr>
        <p class="grey" style="padding:10px; "> Number of night(s): <?php //echo  $login_session = $row['user_numnights'];?> </p>
        <hr>
        <p class="grey col s6" style="padding:10px; ">Number of Adult(s): <?php// echo  $login_session = $row['user_adults'];?> </p>

        <p  class="grey" style="padding:10px;" > Number of Child(ren): <?php //echo  $login_session = $row['user_children'];?> </p> 
        </div>
        </div>

      </div>
<!--end of booking summary -->

<!--end of 3rd b column card -->
  <div class="col s6">
    <div class="card grey darken-2" style="border:4px solid #ffc400;">
      <div class="card-content white-text" align="center"> 
       <div class=" input-field col s12">
          <h5 class="amber-text text-accent-3"> Charges Summary</h5>
       <p  class="grey" style="padding:10px; ">Charge per room: <?php //echo  $login_session = $row['user_roomcharge'];?></p>
        <p class="grey " style="padding:10px; ">Total Charge: <?php 
                       // $current =  $login_session = $row['user_roomcharge'];
                       // $last =  $login_session = $row['user_numrooms'];
                      

                         // $result = abs($current*$last);
                         // echo $result;
                       ?></p>
        <hr />
        <p class="grey" style="padding:10px;">Amount of Deposit: <?php 
                        //$current =   $result;
                        //$last =  '2';
                      

                          //$results = abs($current/$last);
                          //echo $results;
                       ?></p>
        <p  class="grey" style="padding:10px; "> Balance After Deposit: <?php 
                        //$current =  $result;
                       // $last =  $results;
                      

                         // $resultsss = abs($current-$last);
                          //echo $resultsss;
                       ?></p>     
        
</div>

  <br><br><br><br><br><br><br><br><br><br><br><br><br>

        </div>
        </div>




        </div>

        <!--end of 3rd b column card -->
  <div class="col s6">
    
         
        
</div>

  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

        </div>
        </div>




        </div>
        <!--end of 3rd b-->


        <div class="row col s12">
          <a class="waves-effect waves-light btn red darken-4 left" href="guestinfo">Back</a>
         <!-- Modal Trigger -->
      <a href="policyadmin.php" style="float:right;" class="waves-effect waves-light btn red darken-4"><i class="material-icons right">fast_forward</i>Continue</a>

        <!-- Modal Structure -->
        <div id="modal1" class="modal">
          <div class="modal-content">
          <center><h5 >Thank you for booking with us!</h5></center>
    </div>
    <div class="modal-footer">
      <a href="/updatedDLDivine12/admin/index.php" class=" modal-action modal-close waves-effect waves-green btn-flat">Close</a>
    </div>
  </div>
          
        </div>
        </div>
        <!--end of 3rd b-->


  


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


  <!-- start of Scripts -->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script src="js/modal.js"></script>
  <script src="js/slider.js"></script>
  <script src="js/dropdown.js"></script>
  <!-- end of Scripts -->

</body>
</html>
