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
      <a id="logo-container" href="#" class="brand-logo"><img class="responsive-img" src="img/DL.png" style="width: 100px; height: 60px;"></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="clientindex.php">Home</a></li>
        <li><a href="aboutus.php">About us</a></li>
        <li><a href="Rooms.php">Rooms</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="contactus.php">Contact us</a></li>
         <!-- Dropdown Trigger -->
      <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Guest<i class="material-icons right">arrow_drop_down</i></a></li>
       <!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
  <li><a href="booking.php">Book a room</a></li>
  <li class="divider"></li>
  <li><a href="send.php">Send deposit slip</a></li>
   <li class="divider"></li>
   <li><a href="logout.php">Logout</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="clientindex.php">Home</a></li>
        <li><a href="aboutus.php">About us</a></li>
        <li><a href="Rooms.php">Rooms</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="contactus.php">Contact us</a></li>
         <!-- Dropdown Trigger -->
      <li><a class="dropdown-button" href="#!" data-activates="dropdown2">Guest<i class="material-icons right">arrow_drop_down</i></a></li>
       <!-- Dropdown Structure -->
<ul id="dropdown2" class="dropdown-content">
  <li><a href="booking.php">Book a room</a></li>
  <li class="divider"></li>
  <li><a href="send.php">Send deposit slip</a></li>
   <li class="divider"></li>
   <li><a href="logout.php">Logout</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse" style="color:white"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <!-- end of navigation bar -->
   <header class="main-header" role="banner">
  <img src="img/step3.png" alt="step3"/><hr noshade>
</header>


       
           
    <div class="row">
    <form style="margin-top:20px;" class="col s12" readonly>
    <h5 style="margin-top:20px;">Personal Information</h5>
    <hr />
      <div class="row">
        <div class="col s6">
        <div class="card grey lighten-3 " style="border:1px solid black;">
        <div class="card-content white-text" align="center"> 
         <h5 class=" grey darken-2 amber-text text-accent-3" style="padding:10px;"> Personal Information </h5>
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" class="validate" disabled>
          <label for="icon_prefix">First Name</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="tel" class="validate" disabled>
          <label for="icon_prefix">Last Name</label>
        </div>
         <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="tel" class="validate" disabled>
          <label for="icon_prefix">Nationality</label>
        </div>
         <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="tel" class="validate" disabled>
          <label for="icon_prefix">Email Address</label>
        </div>
         <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="tel" class="validate" disabled>
          <label for="icon_prefix">Contact Number</label>
        </div>
      </div>
      <p>
      <input type="checkbox" class="filled-in" id="filled-in-box" checked="checked"  disabled>
      <label for="filled-in-box">I have read and agreed to the       <!-- Modal Trigger -->
  <a class="modal-trigger waves-effect waves-light btn" href="#modal1">Privacy Policy</a> 
  and CREATE MY GUEST PROFILE to be used for Future Reservations.</label>
  <div id="modal1" class="modal modal-fixed-footer">
    <div class="modal-content">
      <img src="img/DLDLOGO.png" alt="DL Divine Inn" style="width:80px;height:61px;">
      <h4><font color="black"><b>Privacy Policy</b></font></h4>
      <p><font color="black">
        
        There are many different ways you can use our services – to search for available rooms on selected dates, to communicate with our staff about matters concerning your reservation or stay at DL Divine Inn. When you share information with us, we can make those services even better. As you use our services, we want you to be clear how we’re using information and the ways in which you can protect your privacy.
        <hr>
        <b>Our Privacy Policy explains:</b>
        <br>
        <p align="left">- What information we collect and why we collect it.</p>
        <p align="left">- How we use that information.</p>
        <p align="left">- The choices we offer, including how to access and update information.</p>

        <br>

        Your privacy matters to DL Divine so whether you are new to the website or a long-time user, please do take the time to get to know our practices – and if you have any questions <a href="contactus.html">contact us</a>.
        <hr>
        <b>Information we collect</b>
        <br>
        <p align="left">We collect information to provide better services to all of our users. We collect information in the following ways:
        <br>
        <br>
        <b>Information you give us.</b> 
        <br>For example, our services require you to sign up for a Account. When you do, we’ll ask for personal information, like your name, email address or telephone number to store with your account. We will also be collecting images of deposit slips or any other form of proof of deposit when you book a reservation.
        <br>
        <br>
        <b>Location information.</b>
        <br>When you use DL Divine Inn services, we may collect  information about your actual location.
        </p>
        <hr>
        <b>Accessing and updating your personal information</b>
        <br>
        <br>
        <p align="left">Whenever you use our services, we aim to provide you with access to your personal information. If that information is wrong, we strive to give you ways to update it quickly or to delete it – unless we have to keep that information for legitimate business or legal purposes. When updating your personal information, we may ask you to verify your identity before we can act on your request.</p>
        <hr>
        <b>Information security</b>
        <br>
        <p align="left">We work hard to protect Google and our users from unauthorized access to or unauthorized alteration, disclosure or destruction of information we hold.</p>
        <hr>
        <b>When this Privacy Policy applies</b>
        <br>
        <p align="left">Our Privacy Policy applies to all of the services offered by DL Divine Inn, but excludes services that have separate privacy policies that do not incorporate this Privacy Policy.</p>
        <br>
        <p align="left">Our Privacy Policy does not apply to services offered by other companies or individuals, including products or sites that may be displayed to you in search results. Our Privacy Policy does not cover the information practices of other companies and organizations who advertise our services, and who may use cookies, pixel tags and other technologies to serve and offer relevant ads.</p>

      </font></p>

    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Back</a>
    </div>
  </div> </label>
    </p>
    </form>
    
  </div>
        </div>

        </div>
        
  <!-- start of booking summary-->    
 <div class="col s3">
         <div class="card grey darken-2" style="border:4px solid #ffc400;" >
        <div class="card-content white-text" align="center">  
        <h5 class="amber-text text-accent-3" style="padding:10px;"> Booking Summary</h5>
        <p  class="grey col s6" style="padding:10px; ">Check-in:  <?php// echo  $login_session = $row['user_arrival'];?></p>
        <p class="grey " style="padding:10px; ">Check-out:  <?php// echo  $login_session = $row['user_departure'];?> </p>
        <hr>
        <p class="grey" style="padding:10px;"> Type of Room:  <?php// echo  $login_session = $row['user_roomtype'];?> </p>
        <hr>
        <p  class="grey" style="padding:10px; ">Number of Room(s):  <?php //echo  $login_session = $row['user_numrooms'];?> </p>
        <hr>
        <p class="grey" style="padding:10px; "> Number of night(s): <?php// echo  $login_session = $row['user_numnights'];?> </p>
        <hr>
        <p class="grey col s6" style="padding:10px; ">Number of Adult(s): <?php //echo  $login_session = $row['user_adults'];?> </p>

        <p  class="grey" style="padding:10px;" > Number of Child(ren): <?php //echo  $login_session = $row['user_children'];?> </p> 
        </div>
        </div>

      </div>
<!--end of booking summary -->



<!--end of 3rd b column card -->
  <div class="col s3">
    <div class="card grey darken-2" style="border:4px solid #ffc400;">
      <div class="card-content white-text" align="center"> 
       <div class=" input-field col s12">
          <h5 class="amber-text text-accent-3"> Charges Summary</h5>
       <p  class="grey" style="padding:10px; ">Charge per room: <?php //echo  $login_session = $row['user_roomcharge'];?></p>
        <p class="grey " style="padding:10px; ">Total Charge:

<?php 
                        //$current =  $login_session = $row['user_extraperson'];
                       // $last =  '250';
                      

                         // $extra = abs($current*$last);  
                          
                       ?>


         <?php 
                       // $current =  $login_session = $row['user_roomcharge'];
                      //  $last =  $login_session = $row['user_numrooms'];
                      

                       //   $result = abs($current*$last);  
                         
                       ?>
                         


<?php 
                       // $current =  $extra;
                       // $last =  $result;
                      

                       //   $extracharge = abs($current+$last);  
                       //   echo $extracharge;
                       ?>

                       </p>
        <hr />
        <p class="grey" style="padding:10px;">Amount of Deposit: <?php 
                       // $current =   $extracharge;
                       // $last =  '2';
                      

                         // $results = abs($current/$last);
                         // echo $results;
                       ?></p>
        <p  class="grey" style="padding:10px; "> Balance After Deposit: <?php 
                       // $current =  $extracharge;
                       // $last =  $results;
                      

                        //  $resultsss = abs($current-$last);
                        //  echo $resultsss;
                       ?></p>     





        
</div>

  <br><br><br><br><br><br><br><br><br><br><br><br><br>

        </div>
        </div>




        </div>
        <!--end of 3rd b-->
  


         
      </div>

      <a href="confirmation.php" style="float:right;" class="waves-effect waves-light btn red darken-4"><i class="material-icons right">fast_forward</i>Continue</a>
 
  
    </form>
  </div>
      

   
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

  </body>
</html>