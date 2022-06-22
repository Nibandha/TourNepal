<?php
$login=false;
$showError=false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'db-connect.php';
    $username=$_POST["username"];
    $password=$_POST["password"];
    
    
        $sql ="Select * from users where username='$username' AND password='$password'";
    $result = mysqli_query($conn,$sql);
    $num = mysqli_num_rows($result);
    if($num == 1){
        $login=true;
    }
    else{
        $showError="invalid Cardentials";
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
    <?php($login){
    echo'<div class="logged-in">
    <a  style="text-decoration: none;color: rgb(105, 91, 91);">
        <h3 class="head-txt" style="text-decoration:none;color: rgb(245,158,11);">Login Sucessed.</h3>
</div>';
}
if($showError){
    echo'<div class="logged-in">
    <a  style="text-decoration: none;color: rgb(105, 91, 91);">
        <h3 class="head-txt" style="text-decoration:none;color: rgb(245,158,11);">Login not sucessed.</h3>
</div>';
}
?>
    <div style="padding-top: 200px;">
        <div class="form " style="max-width: 400px;min-height: 400px;justify-content: center;">
            <h2>Welcome Back!</h2>
            <form class="register-form" action="login.php" method="post">
                <br>
                <BR> <br>
                <input type="text " id="username" name="username" placeholder="Username" />
                <br>
                <BR> <br>
                <input type="password " id="password" name="password" placeholder="password " />
                <br>
                <BR> <br>
                <button><a>Login</a></button>
            </form>
        </div>
    </div>
    <div class="login-signup-btn">
        <h2>Don't have an account!</h2>
        <div style=> <button><a href="signup.php">SignUp</a></button></div>
    </div>
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