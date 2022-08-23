<?php
extract($_POST);
include "db-connect.php";


if(isset($_POST['signup'])){
   
    $username=$_POST["username"];
    $password=$_POST["password"];
    $email=$_POST["email"];
    $mobile=$_POST["umobile"];

if(empty($_POST["username"]) || empty($_POST["password"])|| empty($_POST["email"])|| (isset($_POST['password']) && strlen($_POST['password'])< 6)|| !(preg_match('@[^\w]@', $password))|| !(preg_match('@[0-9]@', $password))){
    echo'Fill all the required fields and Password must contain Special characters and Numbers.';
    exit;
}
else{
    $sql=mysqli_query($con,"SELECT * FROM register where email= '$email'");
if((mysqli_num_rows($sql)>0) || (!filter_var($email, FILTER_VALIDATE_EMAIL)) )
{
    echo "Email Id Already Exists or Not Valid!!"; 
    header("location: signup.php");
	exit;
}
else{
        $sql = "INSERT INTO `register`(username, password, email,umobile) VALUES ('$username', '$password', '$email','$mobile')";
    $result = mysqli_query($con,$sql);
    if($result){
        header("location: login.php");
    }
    else{
        die(mysqli_error($con));
    }
}
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
                <form class="register-form" method="POST">
                    <input type="text " id="username" name="username" placeholder="name " required />
                    <input type="password " id="password" name="password" placeholder="password " required/>
                    <input type="email" id="email" name="email" placeholder="email address " required/>
                    <input type="number" id="umobile" name="umobile" placeholder="mobile number " required/>

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