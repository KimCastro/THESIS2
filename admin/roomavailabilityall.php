<?php

include("sessionadmin.php");

$hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "dlrooms";
// mysql select query

 $con = mysqli_connect($hostname, $username, $password, $databaseName);

    

// result for method one

$query = "SELECT * FROM rooms ";
$result = mysqli_query($con, $query);




?>


<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<!-- saved from url=(0054)http://psacordillera.esy.es/provinces/benguet/news.htm -->
<html>


<head>

</head>
<style>
article {
    margin-left: 150px;
    border-left: 2px solid gray;
    padding: 1em;
    height: 100%;
}

nav {
    float: left;
    max-width: 160px;
    margin: 0;
    padding: 1em;
}

nav ul {
    list-style-type: none;
    padding: 0;
}

a.selected {
  color: red;
  background: #2086bf;
}

</style>

<body >

<div class="margin10 no-margin-top grid condensed">
  <!-- PSA LOGO -->
   <a href="logout.php" >  <span class="mif-user mif-exit "> Logout</a>  
       <!-- end of navigation div -->
       <div id="header">

                             
  <!--.........content here ........-->
      <div>
      <nav>
      <br>
                <div class="split-button">
                <button class="button dropdown-toggle">Sort by:</button>     
                <ul class="split-content d-menu" data-role="dropdown">
                <li><a href="roomavailabilityall.php">All</a></li
                      <li><a href="roomavailabilityquad.php">Quad</a></li>
                  <li><a href="roomavailability.php">Standard</a></li>
                   <li><a href="roomavailabilityfamily.php">Family Room</a></li> 
                  <li><a href="roomavailabilityfrontview.php">FrontView</a></li>
                        </ul>   
                </div>

                    <div class="split-button">
                <button class="button dropdown-toggle">Floor</button>     
                <ul class="split-content d-menu" data-role="dropdown">
                           <li><a href="roomfloor1st.php">1st</a></li>
                 <li><a href="roomfloor2nd.php">2nd</a></li>
                  <li><a href="roomfloor3rd.php">3rd</a></li>
                        <li><a href="roomfloor4th.php">4th</a></li>
                 
                        </ul>   
                </div>
                
               </div>
        </div>
        </nav>
        <center><h1>Available room and rates </h1></center>

        <?php while($row = mysqli_fetch_array($result)):?>

                           
                   <article>  
                               <form class = "form" action="roomavailability.php" method = "post" >
                                <div style="border:1px solid teal; padding:10px; border-radius:1em; font-size:20px;">
                            
                                 <?php echo "<img width='170' height ='170' src='room/".$row['Img']." ' alt='Profile pic'>"; ?>  
                                

                               Room No.: <input type="text" name="number"  value = "<?php echo ($row['Room No.']);?>"  style=" border:none; background:transparent;  font-weight: bold;" readonly>
                            Room Floor: <input type="text" name="floor" value = "<?php echo($row['RoomFloor']);?>"  style=" border:none; background:transparent;  font-weight: bold;"readonly> 
                              Room Status:

                              <input style="background-color: white; color:black; height:50px;width:90px;" type="submit" name="Delete"  value = "<?php echo ($row['RoomStatus']);?>" >
                               </div>
                              

                               </form>
                                     </article>         
                            </tr>
                        <?php endwhile;?>
                        










    <!--footer-->
    <hr class="thin bg-grayLighter">
    
   
</div>



</body></html>

