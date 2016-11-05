
<?php


include("Session.php");


  include('connect.php'); 
// mysql select query
$query = "SELECT user_id FROM `users`WHERE user_name = '$login_session'";
$result = mysqli_query($con, $query);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

  

// result for method one
if(isset($_POST["Continue"]))
{
  $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "accounts";

 $connect = mysqli_connect($hostname, $username, $password, $databaseName);
 
 //Including dbconfig file.
  include('connect.php'); 
$user_numrooms=$_POST["user_numrooms"];
$user_adults=$_POST["user_adults"];
  $user_children=$_POST["user_children"];
  
  $user_roomtype=$_POST["user_roomtype"];
  $user_roomcharge=$_POST["user_roomcharge"];
   $user_extraperson=$_POST["user_extraperson"];
  
  
 $user_id = $_POST['user_id']; 

        $query =  " UPDATE `users` SET `user_extraperson`='".$user_extraperson."',`user_roomcharge`='".$user_roomcharge."',`user_roomtype`='".$user_roomtype."',`user_numrooms`='".$user_numrooms."',`user_adults`='".$user_adults."' ,`user_children`='".$user_children."'WHERE  `user_id`='".$user_id."'";


       $result = mysqli_query($connect,$query); 
          header('Location:guestinfo.php');



 

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
  <!-- end of nav bar-->
       <header class="main-header" role="banner">
  <img src="img/step2.png" alt="step2"/><hr noshade>
</header>


    <form style="margin-top:20px;"  action="FVRoomDetails.php" method = "post">

  <!-- start of 3rd column card(dropdown lists)-->
     
 <form  action="familyRoomDetails.php" method = "post">
  <!-- start of 3rd column card(dropdown lists)-->
 
    <input type="hidden" name="user_id"  value = "<?php echo  $login_session = $row['user_id'];?>"  style=" border:none; background:transparent;  font-weight: bold;" >


  <div class="row">
    <form style="margin-top:20px;" class="col s12">
    <h5 style="margin-top:20px;">  <input type="text" name="user_roomtype" value= "Front View"  style=" width:120px;border:none; font-size:24px; background:transparent;" readonly >Details</h5>
      
    <hr />
      <div class="row">
        <div class="col s6">
        <h6 style="padding:10px; background-color:gray; color:white;">Front View Room (Php <input type="text" name="user_roomcharge" value= "1500"  style=" width:34px;border:none; font-size:25px background:transparent;" readonly >.00/night)</h6>

      <!-- <img style="width:640px; height:450px" src="FrontView/FV.jpg">-->
      <img style="width:916px; height:480px" src="img/FrontView/FV.jpg">
        </div>
          </form>
        <div class="col s3">
        <div class="card grey darken-2" style="border:4px solid #ffc400;">
        <div class="card-content white-text" align="center"> 
        <h5 class="amber-text text-accent-3" style="padding:10px;"> Room Details </h5>
        <p class="grey" style="padding:20px;"> 3 pax
        <br>1 Double Bed with Pull-out
        <br>Flat Screen Cable Television
        <br>Wi-Fi Access
        <br>Desk and Chairs
        <br>Hot and Cold Shower 
        <br>Fan
        <br>Toiletries Included
        <br>Additional Mattress by Request</p>
        <h5 class="amber-text text-accent-3" style="padding:26px;"> Php 1,500.00/night</h5>
          
      </div>
    </div>
  </div>
<!--3rd a column card-->
    <div class="col s3">
        <div class="card grey darken-2" style="border:4px solid #ffc400;">
        <div class="card-content white-text" align="center"> 
       <div class=" input-field col s3">
          <h6 class="amber-text text-accent-3" style="padding:10px;"> Number of Room(s): </h6>
       <select name = "user_numrooms" > 
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <input type="hidden" name="user_id"  value = "<?php echo  $login_session = $row['user_id'];?>"  style=" border:none; background:transparent;  font-weight: bold;" >          
        </select>
        </div>
     
    <div class=" input-field col s3">
    <h6 class="amber-text text-accent-3" style="padding:10px;"> Number of Adult(s): </h6>
    <select name = "user_adults" >
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
    </select>
  </div>
  <div class="input-field col s3">
      <h6 class="amber-text text-accent-3" style="padding:10px;"> Number of Child(ren): </h6>
    <select name = "user_children">
      <option value="0">0</option>
      <option value="1">1</option>
      <option value="2">2</option>
    </select>  
</div>
<div class="input-field col s3">
      <h6 class="amber-text text-accent-3" style="padding:10px;"> Extra Person: </h6>
    <select name = "user_children">
      <option value="0">0</option>
      <option value="1">1</option>
    </select>  
</div>

  <br><br><br><br><br><br>
        </div>
      </div>
    </div>
<!--end of 3rd a column card -->
<!--end of 3rd b column card -->
  <div class="col s3">
    <div class="card grey darken-2" style="border:4px solid #ffc400;">
      <div class="card-content white-text" align="center"> 
       <div class=" input-field col s12">
          <h5 class="amber-text text-accent-3"> Policies</h5>
          <p style="padding:5px;" class="grey " > • DL Divine Rooms are non-smoking. </p>
          <p style="padding:5px;" class="grey"> • Check-out is at 12:00 noon</p>
          <p style="padding:5px;" class="grey">• Check-in is at 2:00 pm</p>
          <p style="padding:5px;" class="grey">• Up to 2 kids, 12 years old and below may stay in the room for free, sharing bed with parents.</p>
         
        
</div>

  <br><br><br><br><br><br><br><br><br><br><br><br><br>

        </div>
        </div>




        </div>


        <!--end of 3rd b-->
      </div>
     <input  action ="QuadRoomDetails.php"  class="waves-effect waves-light btn red darken-4" style="float:right;" type="submit" name="Continue" value ="Continue">
          <a href="selectroom.php" style="float:left;" class="waves-effect waves-light btn red darken-4"><i class="material-icons left">fast_rewind</i>Back</a>

</form>

  </div>
      
<hr />
<center>
  <div class="carousel">
   <center><h4>Room Pictures</h4></center>
    <a class="carousel-item" href="#one!"><img src="img/FronView/FV.jpg" style="width:400px;"></a>
    <a class="carousel-item" href="#two!"><img src="img/FrontView/FV2.jpg" style="width:400px;"></a>
    <a class="carousel-item" href="#three!"><img src="img/FrontView/FVCr2.jpg" style="width:400px;"></a>
    <a class="carousel-item" href="#four!"><img src="img/FrontView/FrontViewCr.jpg" style="width:400px;"></a>

  </div>
  </center>




     
   
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