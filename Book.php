<?php 
session_start ();
if(!isset($_SESSION["login_session"]))

    header("location:login.php"); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookNow</title>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="my.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <!--custom js file link-->



</head>

<body>

    <!-- header section starts  -->

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
                <li style="padding-right: 20px;"><a href="contacts.php">Contact</a></li>

                <?php 
               
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
        </div>

    </nav>
    <div class="booknow-head">
        <a href="new.php" style="text-decoration: none;color: rgb(105, 91, 91);">
            <h3 class="head-txt" style="text-decoration:none;color: rgb(245,158,11);">Home
        </a> / Book now</h3>
    </div>



    <div class="book_container">
        <div class="book_left">
            <div>
                <img src="images/widebuilding.jpg">
                <div class="book_left_card">
                    <div class="book_left_card_top">
                        <div>
                            <h3>
                                <i class="fas fa-bed"></i><span> Accomodation : Hotel/Tea House</span>
                            </h3>
                            <h3>
                                <i class="fas fa-mountain"></i><span> Grading : Moderate</span>
                            </h3>
                            <h3>
                                <i class="fas fa-map"></i><span> Starts at : Kathmandu</span>
                            </h3>
                        </div>
                        <div>
                            <h3>
                                <i class="fas fa-calendar-alt"></i><span> Duration : 13 Days</span>
                            </h3>
                            <h3>
                                <i class="fas fa-mountain"></i><span> Max Altitude : 4100</span>
                            </h3>
                            <h3>
                                <i class="fas fa-map"></i><span> Enda At : Kathmandu</span>
                            </h3>
                        </div>
                    </div>
                    <div class="book_left_card_btm">
                        <h3>
                            <i class="fas fa-map-signs"></i><span> Trip Route : Kathmandu-Pokhara -jinu Dada ABC -Dhoban
                                -Nayapul -Kathmandu</span>
                        </h3>
                        <h3>
                            <i class="fas fa-cloud-sun"></i><span> Best Season : Oct -Nov -Dec/ Mar -Apr -May</span>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="book_right">
            <h3>Janakpur Tour</h3>
            <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam illum fuga reprehenderit cupiditate
                velit tempore dolorum assumenda ipsam eveniet, quibusdam doloribus, quidem quia unde odio fugiat id ea
                <br><br>
                magni nobis sit aut repellendus
                pariatur nam ut ratione? In explicabo dignissimos dolore amet asperiores qui sit adipisci exercitationem
                perspiciatis repellendus incidunt accusamus doloremque quaerat quasi ex, totam aspernatur, consequuntur
                <br><br>
                error illum voluptate, iure
                cupiditate nam quibusdam voluptas. Quidem neque velit possimus commodi rem expedita enim aliquid tempore
                nulla quis eum cupiditate, mollitia quos vitae dicta saepe accusantium incidunt deserunt. Sapiente fugit
                aliquid id neque! Quis iure
                enim doloribus placeat .<br><br>
                <hr>
                </hr>
            </p>
            <div class="price-button">
                <h2 style="padding-top:2%;width:20px;">$999
                </h2>
                <button><b><a href="bookform.php" style="text-decoration:none;color:white;">Book Now</b></a></button>
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