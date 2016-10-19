
<?php
   session_start();
   
   if(session_destroy()) {
      header("Location:/updatedDLDivine12/login.php");
      	
   }
?>