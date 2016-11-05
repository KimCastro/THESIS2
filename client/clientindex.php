<?php

  include('connect.php'); 
// mysql select query
$query = "SELECT * from announcements";

  
// result for method one
$announcements = mysqli_query($con, $query);



if(isset($_POST['Confirm']))
{
include("connect.php");
    
$user_arrival = mysqli_real_escape_string($con,$_POST['user_arrival']);
$user_departure = mysqli_real_escape_string($con,$_POST['user_departure']);


$query = "INSERT INTO `users` (`user_arrival`, `user_departure`) VALUES ('$user_arrival', '$user_departure')";
$result = mysqli_query($con,$query);

 
    header('Location:clientindex.php');

}

?>

<?php

  include('connect.php'); 
// mysql select query
$query = "SELECT * from promos";

  
// result for method one
$promos = mysqli_query($con, $query);

?>
<?php

  include('connect.php'); 
// mysql select query
$query = "SELECT * from activities";

  
// result for method one
$activities = mysqli_query($con, $query);

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
<body>
  <nav class="red darken-4" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo"><img class="responsive-img" src="img/DL.png" style="width: 220px; height: 110px;"></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="clientindex.php">Home</a></li>
         <li><a href="aboutus.php">About us</a></li>
          <li><a href="rooms.php">Rooms</a></li>
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
         <li><a href="gallery.php">About us</a></li>
          <li><a href="rooms.php">Rooms</a></li>
           <li><a href="gallery.php">Gallery</a></li>
         <!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
  <li><a href="booking.php">Book a room</a></li>
  <li class="divider"></li>
  <li><a href="send.php">Send deposit slip</a></li>
   <li class="divider"></li>
   <li><a href="logout.php">Logout</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse" style="color:white"><i class="material-icons">menu</i></a>
    </div>
  </nav>

   <div id="index-banner" class="parallax-container" style="height:600px;">
    <div class="section no-pad-bot">
     <div class="">
      <br><br>
       <div class="row s12">
        <div class="col s9">
        <h1 class="header center amber-text text-accent-3" style="margin-top:90px;">DL Divine Inn</h1>
      <h6 class="center" style="margin-top:50px;">#61 P Valenzuela Street 1st Road, Salud Mitra Barangay, Baguio City </h6>
      <center><img style="margin-top:60px;" class="responsive-img" src="img/Guest2.png"><center>

        </div>
          <div class="col s3">
           <div class="card white darken-2">
              <div class="card-content white-text" align="center">
                <span class="card-title amber-text text-accent-3">Announcements</span>
  <?php while($row = mysqli_fetch_array($announcements)):?>

   <p style="font-size:15px; color:black; " ><?php echo ($row['announcement']);?></p>  <p  style="font-size:10px; color:black;"><?php echo ($row['date']);?></p> 

   <?php endwhile;?>


              
              </div>
            </div>


        </div>
        </div>
      
      
      </div>
    </div>
    <div class="parallax"><img src="img/pic3.jpg" alt="Unsplashed background img 1"></div>
  </div>
  <br>

  <hr />

  <div class="" style="margin-top:10px;">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row s12">
        <div class="col s3">
          <div class="icon-block">
            <img src="img/pic7.jpg" style="width:250px; height: 250px;">
            <h5 class="center">About us</h5>

            <p class="light">Our business started out in 1972 by the late Dominador B. Dauz and his Wife Lourdes T. Dauz, it was just a small boarding house and dormitory type business located in Mabini. In 1976 they built a residential property and later transformed it into a small transient type business...<a href="aboutus.php">read more</a></p>
          </div>
        </div>

        <div class="col s3">
          <div class="icon-block">
          <img src="img/pic2.jpg" style="width:250px; height: 250px;">
            <h5 class="center">Rooms</h5>

            <p class="light">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
          </div>
        </div>

        <div class="col s3">
          <div class="icon-block">
          <img src="img/pic8.jpg" style="width:250px; height: 250px;">
            <h5 class="center">Our Amenities</h5>

            <p class="light">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.</p>
          </div>
        </div>
        <div class="col s3">
          <div class="icon-block">
            <div class="card grey darken-2">
              <div class="card-content white-text" align="center">
                <span class="card-title amber-text text-accent-3">Promos</span>
  <?php while($row = mysqli_fetch_array($promos)):?>

   <p style="font-size:15px; color:white; " ><?php echo ($row['promos']);?></p>  <p  style="font-size:10px; color:white;"><?php echo ($row['date']);?></p> 

   <?php endwhile;?>


              
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

    <hr />

     <div class="row s12">
        <div class="col s7">
        <div class="carousel">
   <center><h4>Our Gallery</h4></center>
    <a class="carousel-item" href="#one!"><img src="img/DL1.jpg" style="width:400px;"></a>
    <a class="carousel-item" href="#two!"><img src="img/DL2.jpg" style="width:400px;"></a>
    <a class="carousel-item" href="#three!"><img src="img/DL3.jpg" style="width:400px;"></a>
    <a class="carousel-item" href="#four!"><img src="img/DL4.jpg" style="width:400px;"></a>
    <a class="carousel-item" href="#five!"><img src="img/DL5.jpg" style="width:400px;"></a>

  </div>
        </div>
          <div class="col s5">
           <div class="card grey darken-2">
              <div class="card-content white-text" align="center">
                <span class="card-title amber-text text-accent-3">Activities</span>
  <?php while($row = mysqli_fetch_array($activities)):?>

   <p style="font-size:15px; color:white; " ><?php echo ($row['activities']);?></p>  <p  style="font-size:10px; color:white;"><?php echo ($row['date']);?></p> 

   <?php endwhile;?>


              
              </div>
            </div>


        </div>
        </div>
   
  </div>

    <hr /> 
      


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
  <script src="js/dropdown.js"></script>
  <!-- end of Scripts -->
  

  </body>
</html>
