<?php

session_start();

include("connect.php");


 if($_SERVER["REQUEST_METHOD"] == "POST") {

$admin_username = mysqli_real_escape_string($con,$_POST['admin_username']);
$admin_password = mysqli_real_escape_string($con,$_POST['admin_password']);



$query = "select * from admin where admin_username='$admin_username' AND admin_password='$admin_password '";
$result = mysqli_query($con, $query);

  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);

if (mysqli_num_rows($result)==1){

    $_SESSION['admin_user'] = $admin_username;
    $_SESSION['admin_users'] = $admin_password;

    header('Location:index.php');   


}else {
    
echo "<script>alert('Incorrect username or password, try again!')</script>";
}

}


if(isset($_GET['logout'])){
session_destroy();
}

?>


<html>
<body>
<head>
<style>
/*
 * Specific styles of signin component	
 */
/*
 * General styles
 */
body{
    height: auto;
    background-repeat: no-repeat;
    background-image: url("img/DL1.jpg");
}

.card-container.card {
    max-width: 350px;
    padding: 40px 40px;
}

.btn {
    font-weight: 700;
    height: 36px;
    -moz-user-select: none;
    -webkit-user-select: none;
    user-select: none;
    cursor: default;
}

/*
 * Card component
 */
.card {
    background-color: #F7F7F7;
    /* just in case there no content*/
    padding: 20px 25px 30px;
    margin: 0 auto 25px;
    margin-top: 50px;
    /* shadows and rounded borders */
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
}

.profile-img-card {
    width: 96px;
    height: 96px;
    margin: 0 auto 10px;
    display: block;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    border-radius: 50%;
}

/*
 * Form styles
 */
.profile-name-card {
    font-size: 16px;
    font-weight: bold;
    text-align: center;
    margin: 10px 0 0;
    min-height: 1em;
}

.reauth-username {
    display: block;
    color: #404040;
    line-height: 2;
    margin-bottom: 10px;
    font-size: 14px;
    text-align: center;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}

.form-signin #inputUsername,
.form-signin #inputPassword {
    direction: ltr;
    height: 44px;
    font-size: 16px;
}

.form-signin input[type=username],
.form-signin input[type=password],
.form-signin input[type=text],
.form-signin button {
    width: 100%;
    display: block;
    margin-bottom: 10px;
    z-index: 1;
    position: relative;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}

.form-signin .form-control:focus {
    border-color: rgb(104, 145, 162);
    outline: 0;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgb(104, 145, 162);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgb(104, 145, 162);
}

.btn.btn-signin {
    /*background-color: #4d90fe; */
    background-color: rgb(255, 255, 102);
    /* background-color: linear-gradient(rgb(104, 145, 162), rgb(12, 97, 33));*/
    padding: 0px;
    font-weight: 700;
    font-size: 14px;
    height: 36px;
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    border-radius: 3px;
    border: none;
    -o-transition: all 0.218s;
    -moz-transition: all 0.218s;
    -webkit-transition: all 0.218s;
    transition: all 0.218s;
}

.btn.btn-signin:hover,
.btn.btn-signin:active,
.btn.btn-signin:focus {
    background-color: rgb(153, 153, 0);
}

.forgot-password {
    color: rgb(104, 145, 162);
}

.forgot-password:hover,
.forgot-password:active,
.forgot-password:focus{
    color: rgb(12, 97, 33);
}       
header {

	background-color: rgb(128,128,128);
	margin-top: 30px;
}


</style>
<title>Login as Admin</title>


	<div class="container" style="margin-top: 330px;">
        <div class="card card-container">
   <center> <h2 style = "color:black; font-weight:normal;">LOGIN AS ADMIN</h2></center>
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <img id="profile-img" class="profile-img-card" src="img/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>

            <form class="form-signin" method = "post">

                <span id="reauth-username" class="reauth-username"></span>
                <input type="text" id="inputUsername"  name = "admin_username" class="form-control" placeholder=" Username" required autofocus>
                <input type="password" id="inputPassword" name = "admin_password" class="form-control" placeholder=" Password" required>
                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <br>
         <button class="btn btn-lg btn-primary btn-block btn-signin"  name = "bttLogin"  type="submit">Sign in</button>
            </form><!-- /form -->



           <center>
            <a href="#" class="forgot-password">
                Forgot password?
            </a>
            </center>
        </div><!-- /card-container -->
    </div><!-- /container -->
</form>



</body>
</html>