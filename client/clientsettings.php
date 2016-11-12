
<?php
include("Session.php");
include("connect.php");
$query = "SELECT user_fullname , user_name,  user_arrival , user_roomcharge,user_extraperson, user_departure ,user_deposit,user_roomtype ,user_rembalance ,user_adults , user_children , user_numrooms,user_numnights ,user_totalcharge, user_password ,user_email FROM `users`WHERE user_name = '$login_session'";
    $result = mysqli_query($con,$query); 
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);







if(isset($_POST['username']))
{
    
   $hostname = "localhost";
   $username = "root";
   $password = "";
   $databaseName = "accounts";
   
   $connect = mysqli_connect($hostname, $username, $password, $databaseName);
   
   // get values form input text and number
   $user_names = $_POST['user_names'];
   $user_name = $_POST['user_name'];


   // mysql query to Update data


   $query = "UPDATE `users` SET `user_name`='".$user_names."' WHERE   `user_name` = '".$user_name."'";

   $result = mysqli_query($connect, $query);
   
   if($result)
   {
      echo "<script>alert('DATA UPDATED')</script>";
  header('Location:accountsettings.php');

   }else{
       echo "<script>alert('DATA NOT UPDATE')</script>";
   }
   mysqli_close($connect);

}


else if(isset($_POST['password']))
{
    
   $hostname = "localhost";
   $username = "root";
   $password = "";
   $databaseName = "accounts";
   
   $connect = mysqli_connect($hostname, $username, $password, $databaseName);
   
   // get values form input text and number
  
   $user_password = $_POST['user_password'];
 $user_id = $_POST['user_id'];
   // mysql query to Update data


   $query = "UPDATE `users` SET `user_password`='".$user_password."' WHERE `user_id` = '".$user_id."'";

   $result = mysqli_query($connect, $query);
   
   if($result)
   {
      echo "<script>alert('DATA UPDATED')</script>";
      header('Location:accountsettings.php');
       echo "<script>alert('DATA UPDATED')</script>";

   }else{
       echo "<script>alert('DATA NOT UPDATE')</script>";
   }
   mysqli_close($connect);
   
}

  
else if(isset($_POST['email']))
{
    
   $hostname = "localhost";
   $username = "root";
   $password = "";
   $databaseName = "accounts";
   
   $connect = mysqli_connect($hostname, $username, $password, $databaseName);
   
   // get values form input text and number

   $user_email = $_POST['user_email'];
  $user_id = $_POST['user_id'];
   // mysql query to Update data


   $query = "UPDATE `users` SET `user_email`='".$user_email."' WHERE `user_id` = '".$user_id."'";

   $result = mysqli_query($connect, $query);
   
   if($result)
   {
      echo "<script>alert('DATA UPDATED')</script>";
        header('Location:accountsettings.php');
   }else{
       echo "<script>alert('DATA NOT UPDATE')</script>";
   }
   mysqli_close($connect);
   
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>DL Divine | Profile Settings</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
<div class="page-wrap">
 <nav class="red darken-4" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo"><img class="responsive-img" src="img/DL.png" style="width: 220px; height: 110px;"></a>
      <ul class="right hide-on-med-and-down">
        <li ><a href="clientindex.php">Home</a></li>
          <li><a href="rooms.php">Rooms</a></li>
           <li><a href="gallery.php">Gallery</a></li>
           <li><a href="booking.php">Book a Room</a></li>
           <li><a href="send.php">Send Slip</a></li>
            <li><a href="rateus.php">Rate Us</a></li>
              <!-- Dropdown Trigger -->
      <li class="active"> <a class="dropdown-button" href="#!" data-activates="dropdown1">Kurt Quirante<i class="material-icons right">arrow_drop_down</i></a></li>
       <!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
  <li><a href="clientsettings.php">Profile Settings</a></li>
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




 <div >
        <!-- place content here -->
        <div style="color:teal; border-style:auto; margin-left:20px;"><br><br><br><br>
        <h4 class="text-light"><span class = "mif-cogs " > General Account Settings</span></h4></div>
        <div class="tile-container align-left">
        <div class="cell colspan7 padding10">
          <div> <ul class="breadcrumbs">
            <h3 class="text-light"><span class = "mif-user" >  </span></h3></div>
            <div class="tile-container align-left">

<div style="padding: 35px">
<ul class="collapsible popout" data-collapsible="accordion">
<ul class="collapsible" data-collapsible="accordion">
    <li>
      <div class="collapsible-header"><i class="material-icons">perm_identity</i>Username</div>
      <div class="collapsible-body">
        <form rel="async" action="clientsettings.php" method="post">
        <div style="padding: 19px;">
        <div class="row" >
          <div class="input-field col s6">
            <input value = "<?php echo  $login_session = $row['user_name'];?> " readonly>
            <label class="active" for="first_name2">Your Current Username</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s6">
            <input type="text" name="user_names" required>
            <label class="active" for="first_name2">New Username</label>
          </div>
        </div>
        
        <div class="frame">
              <div class="content">                                                   
                <form rel="async" action="clientsettings.php" method="post">         
                  <input class="green waves-effect waves-light btn" style="width:140px; " style="color:white" type="submit" name="password" value="Save Data">
                  <br><input type="hidden" name="user_id"  value = " " readonly>
                </form>
            </div>
          </div>
          </div>
        </form><br>
    </li>

    <li>
      <div class="collapsible-header"><i class="material-icons">lock_open</i>Password</div>
      <div class="collapsible-body">
      <form rel="async" action="clientsettings.php" method="post">
        <div style="padding: 19px;">
        <div class="row">
          <div class="input-field col s6">
            <input value = "<?php echo  $login_session = $row['user_password'];?> " readonly>
            <label class="active" for="first_name2">Your Current Password</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s6">
            <input type="text" name="user_password" required>
            <label class="active" for="first_name2">New Password</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s6">
            <input type="text" name="user_password" required>
            <label class="active" for="first_name2">Re-type Password</label>
          </div>
        </div>
          <div class="frame">
              <div class="content">                                                   
                <form rel="async" action="clientsettings.php" method="post">         
                  <input class="green waves-effect waves-light btn" style="width:140px; " style="color:white" type="submit" name="password" value="Save Data">
                  <br><input type="hidden" name="user_id"  value = " " readonly><br><br>
                </form>
            </div>
          </div>
          </div>
          </form>

      </div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">email</i>Email</div>
      <div class="collapsible-body">

      <form rel="async" action="clientsettings.php" method="post">
      <div style="padding: 19px;">
      <div class="row">
          <div class="input-field col s6">
            <input value = "  <?php echo  $login_session = $row['user_email'];?>" readonly>
            <label class="active" for="first_name2">Your Current Email</label>
          </div>
      </div>

      <div class="row">
          <div class="input-field col s6">
            <input type="email" name="user_email" required>
            <label class="active" for="first_name2">New Email</label>
          </div>
      </div>
      <div class="frame">
              <div class="content">                                                   
                <form rel="async" action="clientsettings.php" method="post">         
                  <input class="green waves-effect waves-light btn" style="width:140px; " style="color:white" type="submit" name="password" value="Save Data">
                  <br><input type="hidden" name="user_id"  value = " " readonly><br><br>
                </form>
            </div>
          </div>
          </div>
      </form> 
      </div>
    </li>
  </ul>
  </ul>
                    <a href="clientindex.php" class="red waves-effect waves-light btn" style="width:140px; padding-left: 35px; "  role="button" >BACK</a>
  </div>


                
              
                
                
              </form>
            
            </div>
    
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
  <script src="js/collapsible.js"></script>
</body>
</html>

  