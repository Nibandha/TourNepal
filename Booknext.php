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


    
    <!-- custom css file link  -->
    <link rel="stylesheet" href="my.css">
    <link rel="stylesheet" type="text/css"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
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
                <img src="images/lumbini.jpg">
                <div class="book_left_card">
                    <div class="book_left_card_top">
                        <div>
                            <h3>
                                <i class="fas fa-bed"></i><span> Accomodation : Hotel/2-breakfast/3-lunch/2-dinner</span>
                            </h3>
                            <h3>
                                <i class="fas fa-mountain"></i><span> Grading : Moderate</span>
                            </h3>
                            <h3>
                                <i class="fas fa-map"></i><span> Starts at : Itahari</span>
                            </h3>
                        </div>
                        <div>
                            <h3>
                                <i class="fas fa-calendar-alt"></i><span> Duration : 3 Days 2Night</span>
                            </h3>
                            <h3>
                                <i class="fas fa-mountain"></i><span> Package Type : Cultural</span>
                            </h3>
                            <h3>
                                <i class="fas fa-map"></i><span> Ends At : Itahari</span>
                            </h3>
                        </div>
                    </div>
                    <div class="book_left_card_btm">
                        <h3>
                            <i class="fas fa-map-signs"></i><span> Trip Route : Itahari-Hetauda-Bharatpur-Nawalparasi-kapilvastu
                                </span>
                        </h3>
                        <h3>
                            <i class="fas fa-cloud-sun"></i><span> Best Season : Oct -Nov -Dec -Mar -Apr -May</span>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="book_right">
            <h3>Lumbini Tour</h3>
            <p>
             This legendary Lumbini Pilgrimage tours package is specially designed as an exclusive Buddhist pilgrimage cultural tours in the birthplace of Gautam Buddha. Lumbini, the sacred place offers so many places to explore such as; World Peace Pagoda, Lumbini Crane Sanctuary, Kudan, Gotihawa, Nillihawa, Lumbini Garden, The Ashoka Pillar,The Mayadevi Temple, Puskarni, and many more.
                <br><br>
                The Ashoka Pillar in Lumbini is one of the 3rd Century stone pillars built under the reign of Emperor Ashoka.The pillar is located inside the serene Maya Devi Temple complex.
                <br><br>
                Walk in the footsteps of Buddha as you explore the region where he spent his childhood as Prince Siddhartha. The exact spot where Buddha was born is marked here in Lumbini and the site has understandably become one of the world’s most important holy sites.<br><br>
                <hr>
                </hr>
            </p>
            <div class="price-button">
            <h2 style="padding-top:10%;width:20px;">Rs.5000
                </h2><p style="font-size:1rem;display:line;padding-top:12%;padding-left:8%;font-style:italic;color:#7D7E8C;">perperson.</P> 
                <button><b><a href="bookform.php" style="text-decoration:none;color:white;">BookNow</b></a></button>
            </div>


        </div>

    </div>
    <marquee behavior="" direction="left" class="mq">If you have any queries than please contact us!!!</marquee>
    <footer>

        <div class="foot-logo">
            <h3>
                <p>TourNepal</p>
            </h3>
            <h4>| ©nibandha // sarika</h4>
        </div>
        <!-- Facebook -->
        <div class="foot-icon">
        
            <a href="https://www.facebook.com/nibandha.subedi.3" class="fa-brands fa-facebook"></a>
            <a href="https://twitter.com/" class="fa-brands fa-twitter"></a>
            <a href="https://www.instagram.com/_sarikakhadka/" class="fa-brands fa-instagram"></a>
            <a href="https://linkedin.com/" class="fa-brands fa-linkedin"></a>
        </div>
    </footer>
</body>

</html>