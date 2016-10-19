
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>DL Divine | Select Room</title>

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
        <li><a href="index.php">Home</a></li>
        <li><a href="aboutus.php">About us</a></li>
        <li><a href="">Rooms</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="contactus.php">Contact us</a></li>
        <li><a href="logout.php">User</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="index.php">Home</a></li>
        <li><a href="aboutus.php">About us</a></li>
        <li><a href="#">Rooms</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="conactus.php">Contact us</a></li>
        <li><a href="logout.php">User</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse" style="color:white"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <!-- end of navigation bar -->
   <header class="main-header" role="banner">
  <img src="img/step2.png" alt="step2"/><hr noshade>
</header>
        

  <div class="row">
    <form style="margin-top:20px;" class="col s12">
    <h5 style="margin-top:20px;">Select Room(s)</h5>
    <hr />
      <div class="row">
        <div class="col s4">
        <h6 style="padding:10px; background-color:gray; color:white;">Front View Room (Php 1500.00/night)</h6>
       <a href="FVroomDetails.php">
       <center>
       <img style="width:420px; height:300px;" src="img/FrontView/FV.jpg">
       </center></a>
        </div>
        <div class="col s4">
        <h6 style="padding:10px; background-color:gray; color:white;">Quad Room (Php 1500.00/night)</h6>
       <a href="QuadRoomDetails.php">
       <center>
       <img style="width:420px; height:300px" src="img/QuadRoom/Quad.jpg"> 
       </center></a>
        </div>
       
        <div class="col s4">
         <div class="card grey darken-2">
        <div class="card-content white-text" align="center">  
        <h5 class="amber-text text-accent-3" style="padding:10px;"> Booking Summary</h5>
        <p  class="grey" style="padding:10px; "><br>Check-in Date: <br>Check-out Date:<br>
Number of night(s):<br>


<br><br></p>
        </div>
        </div>

      </div>
        </div>
    </div>
   

    </form>  

      <div class="row">
        <div class="col s4">
        <h6 style="padding:10px; background-color:gray; color:white;">Family Room (Php 2500.00/night)</h6>
       <a href="FamilyRoomDetails.php"> 
       <center>
       <img style="width:420px; height:300px" src="img/FamilyRoom/Family.jpg"> 
       </center></a> 
        </div>
        <div class="col s4">
        <h6 style="padding:10px; background-color:gray; color:white;">Standard Room (Php 1000.00/night)</h6>
       <a href="StandardRoomDetails.php"> 
       <center>
       <img style="width:420px; height:300px" src="img/StandardRoom/Standard.jpg"> 
       </center></a> 
        </div>
    </form>
  </div>
      <div class="row">
        <div class=" col s12">
          <a href="booking.php" style="float:left;" class="waves-effect waves-light btn red darken-4"><i class="material-icons left">fast_rewind</i>Back</a>
        </div>
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