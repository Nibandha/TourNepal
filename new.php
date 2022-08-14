<?php
include "db-connect.php";

if(isset($_POST['signup'])){
    
    $username=$_POST["username"];
    $password=$_POST["password"];
    $email=$_POST["email"];
    $sql=mysqli_query($con,"SELECT * FROM register where email= '$email'");
    if(mysqli_num_rows($sql)>0)
    {
        echo "Email Id Already Exists"; 
        header("location: signup.php");
        exit;
    }
    else{
    
        $sql = "INSERT INTO `register`( username, password, email) VALUES ('$username', '$password', '$email')";
    $result = mysqli_query($con,$sql);
    if($result){
        header("location: login.php");
    }
    else{
        die(mysqli_error($con));
    }
    }
}   

?>
<!DOCTYPE php>
<php lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TourNepal</title>



    <!-- custom css file link  -->
    <link rel="stylesheet" href="my.css">
    <!--for icon-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>

    <!--script-->
    <script rel="javascript" >
    function disable() {
    var myInput = document.getElementById("myInput");
    if (!myInput.value.length) {
        window.location = 'new.php';
        return;
    }
    window.location = 'book.php';
  
}
</script>

</head>

<body>

    <!-- header section starts  -->

    <nav>
        
</label>
        <div class="topbar">

            <div class="logo">

                <p>TourNepal</p>
            </div>
        </div>


        <div class="navbar" id="myTopnav">


            <ul>
                <li> <a href="new.php" class="bcgrnd-stay">Home</a></li>
                <li> <a href="destination.php">Destination</a></li>
                <li><a href="tours.php">Tours</a></li>
                <li> <a href="story.php">Stories</a></li>
                <li style="padding-right: 20px;"><a href="contacts.php ">Contact</a></li>
                <?php 
                session_start();
if(isset($_SESSION["login_session"])){
echo'<li class="mybtn "> <button class="loginBtn "><a class="btntxt" href="logout.php" style="font-family:Impact, Haettenschweiler, Arial Narrow Bold, sans-serif;" >LogOut</a></button></li>';
}
?>
             <?php 
if(!isset($_SESSION["login_session"])){
echo'<li class="mybtn "> <button class="loginBtn "><a class="btntxt" href="login.php" style="font-family:Impact, Haettenschweiler, Arial Narrow Bold, sans-serif;" >Login/SignUp</a></button></li>';
}
?>
            </ul>

        </div>


    </nav>
    <div class="landing">
        <div class="search-bar ">
        <input type="text " placeholder="Search.. " id="myInput" ><button onclick="disable()" >Search</button>
            <p class="slogan ">Explore beyond limits</p>
        </div>
    </div>

    </div><br><br>
    <div class="topics " text-align="center ">
        <p class="ant ">TOP PICKS</p>
        <p class="common ">pick a destination</p>
    </div>

    </div>

    <div class="images ">

        <?php
       include 'myadmin/uploadphp.php';
        $query = " SELECT * from packages ";
        $result = mysqli_query($con, $query);
 
        while ($data = mysqli_fetch_assoc($result)) {
        ?>
           <a href="Book.php"> <img class="hey" src="images/<?php echo $data['file_nam']; ?>"></a>
 
        <?php
        }
        ?>

    </div>
    </div>
    <div class="topics " align="center ">
        <p class="ant ">SEASONAL PICKS</p>
        <p class="common ">pick a destination</p>
    </div>
    <div class="images">
    <a href="Book.php">  <img src="images/lake.jpg " class="hey "></a>
    <a href="Book.php">  <img src="images/farguuy.jpg " class="hey "></a>
    <a href="Book.php"> <img src="images/forestTemple.jpg " class="hey "></a>
    <a href="Book.php">  <img src="images/bridge.jpg " class="hey "></a>
    <a href="Book.php">  <img src="images/dessert.jpg " class="hey "></a>
    <a href="Book.php">  <img src="images/elephant.jpg " class="hey "></a>
    <a href="Book.php">  <img src="images/cap.jpg " class="hey "></a>
    <a href="Book.php">  <img src="images/temple.jpg " class="hey "></a>  
        
    </div>


    </div>
    <div class="topics " align="center ">
        <p class="ant ">HOT DEALS</p>
        <p class="common ">our best offer</p>
    </div>
    <div class="images ">
        <img src="images/lake.jpg " class="hey ">
        <img src="images/farguuy.jpg " class="hey ">
        <img src="images/forestTemple.jpg " class="hey ">
        <img src="images/bridge.jpg " class="hey ">
        <img src="images/dessert.jpg " class="hey ">
        <img src="images/elephant.jpg " class="hey ">
        <img src="images/cap.jpg " class="hey ">
        <img src="images/temple.jpg " class="hey ">

    </div>
    </div>
    <div>
    </div>
    <div class="share ">
        <div>
            <p class="hell ">Your story matters</p>
            <p class="heaven ">share it with us</p>
        </div>
        <svg class="arrow " fill="currentColor " viewBox="0 0 20 20 " xmlns="http://www.w3.org/2000/svg "><path fill-rule="evenodd " d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1
                    1 0 010-1.414z " clip-rule="evenodd "></path></svg>
<?php 
if(!isset($_SESSION["login_session"])){
echo '<div class="login-page ">
            <div class="form ">
                <h2>Sign Up </h2>
                <form class="register-form " method="POST">
                    <input type="text " id="username" name="username" placeholder="name " />
                    <input type="password " id="password" name="password" placeholder="password " />
                    <input type="text " id="email" name="email" placeholder="email address " />
                    <button type="submit" name="signup" >create</button>
                </form>
            </div>
        </div>';}
        ?>
        <?php 
if(isset($_SESSION["login_session"])){
echo '
<div class="login-page ">
            <div class="form ">
                
                <form class="register-form " >
                    
                <button><a href="contacts.php" style="text-decoration:none;color:white;"> Message Us</button></a>
                </form>
            </div>
        </div>';}?>

    </div>
    <div class="topics " align="center ">
        <p class="ant ">LOCAL TOURS</p>
        <p class="common ">best local destinations</p>
    </div>
    <div class="images ">
        <img src="images/lake.jpg " class="hey ">
        <img src="images/farguuy.jpg " class="hey ">
        <img src="images/forestTemple.jpg " class="hey ">
        <img src="images/bridge.jpg " class="hey ">

    </div>
    <div class="topics ">

        <h2 style="color:rgb(28, 28, 46);text-align:center;font-size:25px;font-weight:bold; padding-top: 30px; ">WHAT PEOPLE SAY ABOUT<br> US?</h2>

    </div>
    <div style="display:flex ">



        <div class="about-us ">
            <div style="padding:30px ">
                <img src="images/aboutus1.jpg " height="70px " width="70px " style="border-radius:50%;display: block;margin-left: auto;margin-right: auto; ">
                <p class="pplsay ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe commodi deserunt omnis asperiores dolorem perferendis excepturi molestias, ut maiores ipsam vitae, temporibus atque natus reiciendis praesentium doloremque, dolores sequi.
                    Perspiciatis?
                </p>
                <svg class="svg_aboutus " viewBox="0 0 20 20 " xmlns="http://www.w3.org/2000/svg "><path fill-rule="evenodd " d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986
                    5.986 0 004.546-2.084A5 5 0 0010 11z " clip-rule="evenodd "></path></svg>
                <h3 style="text-align:center ">Avishek Sharma</h3>
            </div>
            <div style="padding:30px ">
                <img src="images/aboutus2.jpg " height="70px " width="70px " style="border-radius:50%;display: block;margin-left: auto;margin-right: auto; ">
                <p class="pplsay ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe commodi deserunt omnis asperiores dolorem perferendis excepturi molestias, ut maiores ipsam vitae, temporibus atque natus reiciendis praesentium doloremque, dolores sequi.
                    Perspiciatis?
                </p>
                <svg class="svg_aboutus " viewBox="0 0 20 20 " xmlns="http://www.w3.org/2000/svg "><path fill-rule="evenodd " d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986
                    5.986 0 004.546-2.084A5 5 0 0010 11z " clip-rule="evenodd "></path></svg>
                <h3 style="text-align:center ">Khagendra Basnet</h3>

            </div>
            <div style="padding:30px ">
                <img src="images/aboutus3.jpg " height="70px " width="70px " style="border-radius:50%;display: block;margin-left: auto;margin-right: auto; ">
                <p class="pplsay ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe commodi deserunt omnis asperiores dolorem perferendis excepturi molestias, ut maiores ipsam vitae, temporibus atque natus reiciendis praesentium doloremque, dolores sequi.
                    Perspiciatis?
                </p>
                <svg class=" svg_aboutus " viewBox="0 0 20 20 " xmlns="http://www.w3.org/2000/svg "><path fill-rule="evenodd " d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986
                    5.986 0 004.546-2.084A5 5 0 0010 11z " clip-rule="evenodd "></path></svg>
                <h3 style="text-align:center ">Ganesh dulal</h3>
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

</php>