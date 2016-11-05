<?php
   include('connect.php');
   session_start();
   
   $user_check = $_SESSION['admin_user'];
   
   $ses_sql = mysqli_query($con,"select admin_username from admin where admin_username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $admin_session = $row['admin_username'];
 



   
   if(!isset($_SESSION['admin_user'])){
      header("location:adminlogin.php");
   
   }
?>