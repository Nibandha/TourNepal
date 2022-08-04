<?php
require("db-connect.php");
$showAlert=false;
$showError=false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
   
    $username=$_POST["username"];
    $password=$_POST["password"];
    $email=$_POST["email"];
    $exists=false;
    if($exists==false && $password < 8){
        $sql = "INSERT INTO registration( 'username', 'password', 'email') VALUES ('$username', '$password', '$email')";
    $result = mysqli_query($con,$sql);
    if($result){
        $showAlert=true;
    }
    else{
        $showError="entry exists or requirements donot match!";
    }
    header ("Location: login.php?status=success");
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <link rel="stylesheet" href="my.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body style="background-image: url(images/bck3.jpg);background-repeat: no-repeat;background-size: 100% 100%;">
    
   
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
    <div style="justify-content: center;padding-top: 10%;">



        <div>
            <div class="form " style="max-width: 400px;min-height: 400px;">
                <h2>Sign Up </h2>
                <form class="register-form" action="" method="post">
                    <input type="text " id="username" name="username" placeholder="name " />
                    <input type="password " id="password" name="password" placeholder="password " />
                    <input type="email" id="email" name="email" placeholder="email address " />
                    <button type="submit" name="signup" >create</button>
                </form>
            </div>
        </div>
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