<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destination</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <nav>
        <div class="topbar">
            <div class="logo">
                <p>TourNepal</p>
            </div>
        </div>
        <div class="navbar" id="myTopnav">
            <ul>
                <li> <a href="new.php">Home</a></li>
                <li> <a href="destination.php" class="bcgrnd-stay">Destination</a></li>
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
    <section class="places">

        <div class="row">
            <div class="places-col">
                <img src="images/girlgreen.jpg">
                <div class="layer">
                    <marquee behavior="alternate"> <a href="Book.php" class="lrnmore" style="color:white;">LEARN MORE</a></marquee>

                    <h3>Travel mardi!!!<br>The best destination for local and foreign tourist.</h3>
                </div>
            </div>
            <div class="places-col">
                <img src="images/girlgreen.jpg">
                <div class="layer">
                    <marquee behavior="alternate"> <a href="Booknext.php" class="lrnmore"style="color:white;">LEARN MORE</a></marquee>
                    <h3>Trek to Australian Base Camp!!!<br>The best destination for local and foreign tourist.</h3>
                </div>
            </div>
            <div class="places-col">
                <img src="images/greenhill.jpg">
                <div class="layer">
                    <marquee behavior="alternate"> <a href="Bookmardi.php" class="lrnmore"style="color:white;">LEARN MORE</a></marquee>
                    <h3>Travel Ghandruk!!!<br>The best destination for local and foreign tourist..</h3>
                </div>

            </div>
            <div class="places-col">
                <img src="images/lake.jpg">
                <div class="layer">
                    <marquee behavior="alternate"> <a href="Book.php" class="lrnmore" style="color:white;">LEARN MORE</a></marquee>
                    <h3>Travel Pokhara!!!<br>Special offer is running out..</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="places-col">
                <img src="images/mLake.jpg">
                <div class="layer">
                    <marquee behavior="alternate"> <a href="Booknext.php" class="lrnmore" style="color:white;">LEARN MORE</a></marquee>
                    <h3>Travel kathmandu!!<br>visit the culturally and naturally rich capital city of beautiful Nepal.</h3>
                </div>
            </div>
            <div class="places-col">
                <img src="images/mosque.jpg">
                <div class="layer">
                    <marquee behavior="alternate"> <a href="Bookmardi.php" class="lrnmore" style="color:white;">LEARN MORE</a></marquee>
                    <h3>Lumbini!!<br>visit the birth place of lord Buddha.</h3>
                </div>
            </div>
            <div class="places-col">
                <img src="images/pointy.jpg">
                <div class="layer">
                    <marquee behavior="alternate"> <a href="Book.php" class="lrnmore" style="color:white;">LEARN MORE</a></marquee>
                    <h3>Travel janakpur!!Birth place of sita and the biggest temple in Nepal.</h3>
                </div>


            </div>
            <div class="places-col">
                <img src="images/pointy.jpg">
                <div class="layer">
                    <marquee behavior="alternate"> <a href="Booknext.php" class="lrnmore" style="color:white;">LEARN MORE</a></marquee>
                    <h3>Travel Illam!!<br>Enjoy the beautiful view of Tea garden and celebrate your holidays in local homestays.</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="places-col">
                <img src="images/range.jpg">
                <div class="layer">
                    <marquee behavior="alternate"> <a href="Bookmardi.php" class="lrnmore" style="color:white;">LEARN MORE</a></marquee>
                    <h3>Travel mardi!!!<br>The best destination for local and foreign tourist.</h3>
                </div>
            </div>
            <div class="places-col">
                <img src="images/road.jpg">
                <div class="layer">
                    <marquee behavior="alternate"> <a href="Book.php" class="lrnmore" style="color:white;">LEARN MORE</a></marquee>
                    <h3>Trek to Australian Base Camp!!!<br>The best destination for local and foreign tourist.</h3>
                </div>
            </div>
            <div class="places-col">
                <img src="images/road.jpg">
                <div class="layer">
                    <marquee behavior="alternate"> <a href="Booknext.php" class="lrnmore" style="color:white;">LEARN MORE</a></marquee>
                    <h3>Travel Ghandruk!!!<br>The best destination for local and foreign tourist..</h3>
                </div>


            </div>
            <div class="places-col">
                <img src="images/range.jpg">
                <div class="layer">
                    <marquee behavior="alternate"> <a href="Bookmardi.php" class="lrnmore" style="color:white;">LEARN MORE</a></marquee>
                    <h3>Travel Pokhara!!!<br>Special offer is running out..</h3>
                </div>
            </div>
        </div>
    </section>


    <section class="places">
        <h1>Our Top Places</h1>
        <p>our best offers.</p>
        <div class="row">
            <div class="places-col">
                <img src="images/farguuy.jpg">
                <div class="layer">
                    <marquee behavior="alternate"> <a href="Book.php" class="lrnmore" style="color:white;">LEARN MORE</a></marquee>
                    <h3>Travel kathmandu!!<br>visit the culturally and naturally rich capital city of beautiful Nepal.</h3>
                </div>
            </div>
            <div class="places-col">
                <img src="images/dessert.jpg">
                <div class="layer">
                    <marquee behavior="alternate"> <a href="Booknext.php" class="lrnmore" style="color:white;">LEARN MORE</a></marquee>
                    <h3>Lumbini!!<br>visit the birth place of lord Buddha.</h3>
                </div>
            </div>
            <div class="places-col">
                <img src="images/underwater.jpg">
                <div class="layer">
                    <marquee behavior="alternate"> <a href="Bookmardi.php" class="lrnmore" style="color:white;">LEARN MORE</a></marquee>
                    <h3>Travel janakpur!!Birth place of sita and the biggest temple in Nepal.</h3>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="places-col">
                <img src="images/valley.jpg">
                <div class="layer">
                    <marquee behavior="alternate"> <a href="Book.php" class="lrnmore" style="color:white;">LEARN MORE</a></marquee>
                    <h3>Travel Illam!!<br>Enjoy the beautiful view of Tea garden and celebrate your holidays in local homestays.</h3>
                </div>
            </div>
            <div class="places-col">
                <img src="images/treehouse.jpg">
                <div class="layer">
                    <marquee behavior="alternate"> <a href="Booknext.php" class="lrnmore" style="color:white;">LEARN MORE</a></marquee>
                    <h3>Travel Ghandruk!!!<br>The best destination for local and foreign tourist..</h3>
                </div>
            </div>
            <div class="places-col">
                <img src="images/twopeople.jpg">
                <div class="layer">
                    <marquee behavior="alternate"> <a href="Bookmardi.php" class="lrnmore" style="color:white;">LEARN MORE</a></marquee>
                    <h3>Travel mardi!!!<br>The best destination for local and foreign tourist.</h3>
                </div>
            </div>
        </div>
    </section>

    <footer>

        <div class="foot-logo">
            <h3>
                <p>TourNepal</p>
            </h3>


            <h4>| nibandha // sarika</h4>
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