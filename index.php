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
  <!-- start of CSS links -->

</head>
<body>

  <!-- start of navigation bar-->
  <nav class="red darken-4" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo"><img class="responsive-img" src="img/DL.png" style="width: 220px; height: 110px;"></a>
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
  <li><a href="login.php">Login as Guest</a></li>
  <li class="divider"></li>
  <li><a href="admin/adminlogin.php">Login as Admin</a></li>
   
    </ul>
  
</ul>
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
  <li><a href="client/login.php">Login as Guest</a></li>
  <li class="divider"></li>
  <li><a href="admin/adminlogin.php">Login as Admin</a></li>
   
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse" style="color:white"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <!-- end of navigation bar-->

  <!-- start of DL DIVINE INN name and check in and out container -->
  <div id="index-banner" class="parallax-container" style="height:600px;">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center amber-text text-accent-3">DL Divine Inn</h1>
        <h6 class="center">#61 P Valenzuela Street 1st Road, Salud Mitra Barangay, Baguio City</h6>
        <div class="row">
          <div class="col s12 m3">
            <div class="card grey darken-2">
              <div class="card-content white-text" align="center">
                <span class="card-title amber-text text-accent-3">Make a Reservation</span>
                <br>
                <label for="arrival" style="color:white;">Check-in:</label>
                <input id="arrival" type="date" class="datepicker validate" >
                <label for="departure" style="color:white;">Check-out:</label>
                <input id="departure" type="date" class="datepicker validate"  >
                <a href="booking.php" class="waves-effect waves-light btn red darken-4">Book Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="img/pic3.jpg" alt="Unsplashed background img 1"></div>
  </div><br>
  <!-- start of DL DIVINE INN name and check in and out container -->

  <hr>

  <!-- start of the  about us , rooms and amenities columns -->
  <div class="container" style="margin-top:10px;">
    <div class="section">
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <img src="img/pic7.jpg" style="width:250px; height: 250px;">
            <h5 class="center">About us</h5>
            <p class="light">Our business started out in 1972 by the late Dominador B. Dauz and his Wife Lourdes T. Dauz, it was just a small boarding house and dormitory type business located in Mabini. In 1976 they built a residential property and later transformed it into a small transient type business...<a href="aboutus.php">read more</a></p>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="icon-block">
          <img src="img/pic2.jpg" style="width:250px; height: 250px;">
            <h5 class="center">Rooms</h5>
            <p class="light">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="icon-block">
          <img src="img/pic8.jpg" style="width:250px; height: 250px;">
            <h5 class="center">Our Amenities</h5>
            <p class="light">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end of the  about us , rooms and amenities columns -->

  <hr>

  <!-- start of the carousel -->
  <div class="carousel">
    <center><h4>Our Gallery</h4></center>
    <a class="carousel-item" href="#one!"><img src="img/DL1.jpg" style="width:400px;"></a>
    <a class="carousel-item" href="#two!"><img src="img/DL2.jpg" style="width:400px;"></a>
    <a class="carousel-item" href="#three!"><img src="img/DL3.jpg" style="width:400px;"></a>
    <a class="carousel-item" href="#four!"><img src="img/DL4.jpg" style="width:400px;"></a>
    <a class="carousel-item" href="#five!"><img src="img/DL5.jpg" style="width:400px;"></a>
  </div>
  <!-- end of the carousel -->

  <hr> 
      
  <!-- start of the contact details in DL DIVINE INN -->
  <div class="container">
    <div class="section">
      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>Contact Us</h4>
          <p class="center-align light">#61 P Valenzuela Street 1st Road, Salud Mitra Barangay,Baguio City Just Below SM and Barrio Fiesta</p>
          <p class="center-align light">Tel. nos. (074) 442-3125 Main Office<br>
          (074) 423-0900 Front Desk <br> Cell. No. 09107203239 Front Desk</p>
        </div>
      </div>
    </div>
  </div>
  <!-- end of the contact details in DL DIVINE INN -->

  <!-- start of footer -->
  <footer class="page-footer red darken-4">
    <div class="footer-copyright">
      <div class="container">
        Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Materialize</a>
      </div>
    </div>
  </footer>
  <!-- end of footer -->

  <!-- start of Scripts -->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script src="js/modal.js"></script>
  <script src="js/dropdown.js"></script>
  <!-- end of Scripts -->

  </body>
</html>
