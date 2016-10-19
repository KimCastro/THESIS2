<?php

include("sessionadmin.php");

  include('connect.php'); 
// mysql select query

$query = "SELECT * from transactionlist";

	

// result for method one
$result = mysqli_query($con, $query);






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
<div class="page-wrap">
  <nav class="red darken-4" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo"><img class="responsive-img" src="img/DL.png"></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="index.php">Home</a></li>
          <li><a href="">Rooms</a></li>
           <li><a href="gallery.php">Gallery</a></li>
   
            
            <!-- Dropdown Trigger -->
      <li><a class="dropdown-button" href="#!" data-activates="dropdown2">Admin<i class="material-icons right">arrow_drop_down</i></a></li>


           <!-- Dropdown Structure -->
          <ul id="dropdown2" class="dropdown-content">
            <li><a href="acceptedusers.php">Accepted Users</a></li>
           <li class="divider"></li>
          <li><a href="userinfo.php">Reservations</a></li>
           <li class="divider"></li>
          <li><a href="logout.php">Logout</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="index.php">Home</a></li>
         <li><a href="aboutus.php">About us</a></li>
          <li><a href="#">Rooms</a></li>
           <li><a href="gallery.php">Gallery</a></li>
            <li><a href="conactus.php">Contact us</a></li>
            <li><a href="login.php">Admin</a></li>
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
  <center><a class=' red darken-4 dropdown-button btn' href='#' data-activates='dropdown1' style="width:150px;">View Your</a></center>

  <!-- Dropdown Structure -->
  <ul id='dropdown1' class='dropdown-content'>
    <li><a href="acceptedusers.php">Accepted Users</a></li>
    <li class="divider"></li>
    <li><a href="userinfo.php">Reservations</a></li>
      <li class="divider"></li>
    <li><a href="transactionlist.php">List of Transactions </a></li>
  </ul>
</div>

 <div class="col s9">

 				<?php while($row = mysqli_fetch_array($result)):?>

                   <article style="padding: 1em; height: 100%;">
                               <form class = "form" action="transactionlist.php" method = "post" >
                                <div style="border:2px solid teal; padding:10px; border-radius:1em;">
                              <div class="row">
                            <div class="col 12">

                            <div class="col s3"> 
                             <input type="hidden" name="user_id" value = "<?php echo($row['trans_id']);?>"  style=" border:none; background:transparent;  font-weight: bold;"readonly>
                               Username: <input type="text" name="username" value = "<?php echo($row['trans_username']);?>"  style=" border:none; background:transparent;  font-weight: bold;"readonly>
                              User Email: <input type="text" name="email" value = "<?php echo ($row['trans_email']);?>"  style=" width:200px; border:none; background:transparent;  font-weight: bold;" readonly> 
                              </div>
                               <div class="col s3">  
                              Date of Transaction: <input type="text" name="arrival" value = "<?php echo ($row['trans_dateoftrans']);?>"  style=" width:200px; border:none; background:transparent;  font-weight: bold;" readonly> 


                             Room Type: <input type="text" name="departure" value = "<?php echo ($row['trans_roomtype']);?>"  style=" width:200px; border:none; background:transparent;  font-weight: bold;" readonly>
                         
                              </div>

         <div class="col s3"> 
                             Number of Rooms : <input type="text" name="roomtype" value = "<?php echo ($row['trans_numofrooms']);?>"  style=" width:200px; border:none; background:transparent;  font-weight: bold;" readonly>
                             Total Charge. <input type="text" name="roomnumber" value = "<?php echo ($row['trans_totalcharge']);?>"  style=" width:200px; border:none; background:transparent;  font-weight: bold;" readonly>
                             </div>
                      <div class="col s3"> 
                             Deposit :<input type="text" name="roomnumber" value = "<?php echo ($row['trans_deposit']);?>"  style=" width:200px; border:none; background:transparent;  font-weight: bold;" readonly> 

                   
                   
                              Remaining balance: <input type="text" name="totalpayment" value = "<?php echo ($row['trans_rembalance']);?>"  style=" width:200px; border:none; background:transparent;  font-weight: bold;" readonly>
                                 </div> 

                             
                              

                            

                               </form >
                                     </article>           
                            
                        <?php endwhile;?>
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

  