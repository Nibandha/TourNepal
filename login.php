
<?php

session_start();
include 'db-connect.php';
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($con,$_POST['username']);
    $password = mysqli_real_escape_string($con,$_POST['password']);
    
        $sql ="SELECT * FROM register WHERE username='$username' AND password='$password'";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    
    if($count == 1) {
        $login_session =$row['user_id'];
        $umobile_session=$row['umobile'];
        $email_session=$row['email'];
      $_SESSION['login_session'] =$row['user_id'];
      $_SESSION['umobile_session'] =$row['umobile'];
      $_SESSION['email_session'] =$row['email'];
       // $_SESSION["GetIn"]="1";
       
       header("location: new.php");
    }else {
       echo "Your Login Name or Password is invalid";
    }
 }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="my.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="login-body">
<?php require 'db-connect.php'?>
    <nav>
        <div class="topbar">

            <div class="logo">

                <p>TourNepal</p>
            </div>
        </div>
        <div class="navbar" id="myTopnav">
            <ul>
                <li> <a href="new.php">Home</a></li>
                <li> <a href="destination.php">Destination</a></li>
                <li><a href="tours.php">Tours</a></li>
                <li> <a href="story.php">Stories</a></li>
                <li style="padding-right: 20px;"><a href="contacts.php ">Contact</a></li>
            </ul>
        </div>
        </div>
    </nav>
    <div style="padding-top: 200px;">
        <div class="form " style="max-width: 400px;min-height: 400px;justify-content: center;">
            <h2>LOGIN <br> Welcome Back!</h2>
            <form class="register-form" action="login.php" method="post">
                <br>
                <BR> <br>
                <input type="text " id="username" name="username" placeholder="Username" required />
                <br>
                <BR> <br>
                <input type="password " id="password" name="password" placeholder="password " required/>
                <br>
                <BR> <br>
                <button><a>Login</a></button>
            </form>
        </div>
    </div>
    <?php 
if(isset($_SESSION["login_session"])){
echo
'<div class="login-signup-btn">
<h2>Do you want to logOut</h2>
<div> <button name="login"><a href="logout.php">LogOut</a></button></div>
</div>';
}
?>
    <?php 
if(!isset($_SESSION["login_session"])){
echo'
    <div class="login-signup-btn">
        <h2>Do not have an account!</h2>
        <div style=> <button name="login"><a href="signup.php">SignUp</a></button></div>
    </div>';
}
    ?>
    <footer>
        <div class="foot-logo">
            <h3>
                <p>TourNepal</p>
            </h3>
            <h4>| ©nibandha // sarika</h4>
        </div>
        <!-- Facebook -->
        <div class="foot-icon">
            <a href="https://www.facebook.com/nibandha.subedi.3" class="fa fa-facebook"></a>
            <a href="https://twitter.com/" class="fa fa-twitter"></a>
            <a href="https://www.instagram.com/_sarikakhadka/" class="fa fa-instagram"></a>
            <a href="https://linkedin.com/" class="fa fa-linkedin"></a>

        </div>

    </footer>
</body>

</html>