

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

  <!-- start of navigation bar-->
  <nav class="red darken-4" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo"><img class="responsive-img" src="img/DL.png" style="width: 100px; height: 60px;"></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="index.php">Home</a></li>
        <li><a href="aboutus.php">About us</a></li>
        <li><a href="Rooms.php">Rooms</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="contactus.php">Contact us</a></li>
         <!-- Dropdown Trigger -->
      <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Login<i class="material-icons right">arrow_drop_down</i></a></li>
       <!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
  <li><a href="#!">Login as Guest</a></li>
  <li class="divider"></li>
  <li><a href="#!">Login as Admin</a></li>
      </ul>
      <ul id="nav-mobile" class="side-nav">
        <li><a href="index.php">Home</a></li>
        <li><a href="gallery.php">About us</a></li>
        <li><a href="Rooms.php">Rooms</a></li>
        <li><a href="#">Gallery</a></li>
        <li><a href="conactus.php">Contact us</a></li>
        <!-- Dropdown Trigger -->
      <li><a class="dropdown-button" href="#!" data-activates="dropdown2">Login<i class="material-icons right">arrow_drop_down</i></a></li>
       <!-- Dropdown Structure -->
<ul id="dropdown2" class="dropdown-content">
  <li><a href="#!">Login as Guest</a></li>
  <li class="divider"></li>
  <li><a href="#!">Login as Admin</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse" style="color:white"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <!-- end of navigation bar-->
         <header class="main-header" role="banner">
  <img src="img/step1.png" alt="step1"/><hr noshade>
</header>
       
           
  <div class="row">
    <form style="margin-top:20px;" class="col s12" action="booking.php" method = "post">
      <div class="row">
        <div class="input-field col s6">
   
          <label for="Checkin">Check-in:</label>
        <input id="Checkin: " type="date"  name = "user_arrival"  class="datepicker" required >


        </div>
        <div class="input-field col s6">
       
            <label for="Checkout">Check-out:</label>
          <input id="Checkout" type="date" name = "user_departure"   class="datepicker" required >



     </div>
      </div>
      <div class="row">
        <div class="input-field col s6">



        </div>
      </div>
    
      <a href="selectroom.php" class="waves-effect waves-light btn red darken-4" style="float:right;">Confirm</a>

      <!--<button><a href="selectroom.php"  class="waves-effect waves-light btn red darken-4" style="float:right;" type="submit" name="Confirm" value ="Confirm"></a>-->

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

  </body>
</html>