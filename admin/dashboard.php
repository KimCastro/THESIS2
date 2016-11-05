

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
<div class="page-wrap">
  <nav class="red darken-4" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo"><img class="responsive-img" src="img/DL.png" style="width: 100px; height: 60px;"></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="index.php">Home</a></li>
          <li><a href="rooms.php">Rooms</a></li>
           <li><a href="gallery.php">Gallery</a></li>
           <li><a href="/updatedDLDivine12/admin/walkinbooking/booking.php">Book a Room</a></li>
            <li><a href="dashboard.php">Dashboard</a></li>
            <!-- Dropdown Trigger -->
      <li><a class="dropdown-button" href="#!" data-activates="dropdown2">Admin<i class="material-icons right">arrow_drop_down</i></a></li>


           <!-- Dropdown Structure -->
          <ul id="dropdown2" class="dropdown-content">
            <li><a href="profilesettings.php">Profile Settings</a></li>
           <li class="divider"></li>
          <li><a href="logout.php">Logout</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="index.php">Home</a></li>
          <li><a href="#">Rooms</a></li>
           <li><a href="gallery.php">Gallery</a></li>
            <li><a href="login.php">Logout</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse" style="color:white"><i class="material-icons">menu</i></a>
    </div>
  </nav>

</head>
<style>
html, body {
  height: 100%;
}
.page-wrap {
  min-height: 100%;
  /* equal to footer height */
  margin-bottom: -142px; 
}
.page-wrap:after {
  content: "";
  display: block;
}
.site-footer, .page-wrap:after {
  height: 142px; 
}
.site-footer: {
background-color: rgb(183, 28, 28);
}

</style>
<body>
<br>
 <div class="row">  
 <div class="col s3">
 <br>
 <!-- Dropdown Trigger -->
  <center><a class=' red darken-4 dropdown-button btn' href='#' data-activates='dropdown1' style="width:150px;">Select</a></center>

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
</div>

 <div class="col s9">

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
    <div class="site-footer">
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

  