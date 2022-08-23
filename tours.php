<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tours</title>
    <link rel="stylesheet" href="my.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script rel="javascript" src="JavaScript.js"></script>


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
                <li> <a href="destination.php">Destination</a></li>
                <li><a href="tours.php" class="bcgrnd-stay">Tours</a></li>
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
        </div>

    </nav>
    
    <div class="booknow-head">
        <a href="new.php" style="text-decoration: none;color: rgb(105, 91, 91);">
            <h3 class="head-txt" style="text-decoration:none;color: rgb(245,158,11);">Home</a> / Tour</h3>
    </div>
    <div class="content tour_content" style="margin-bottom: 3%;margin-top: 2%; display: flex; justify-content: center; align-item: center; flex-wrap: wrap;">
        <div class="gallery">
            <a target="_blank" href="images/building.jpg">
                <img src="images/building.jpg" alt="Cinque Terre" width="600" height="400">
            </a>
            <div class="desc">
                <h3><a href="Book.php" class="pkg">Mustang</a></h3><br>On the off chance that you’re looking for something to some degree more peculiar, the dry sell out valley in the Upper Mustang Trek is your most strong choice..</div>
        </div>

        <div class="gallery">
            <a target="_blank" href="images/balloon.jpg">
                <img src="images/balloon.jpg" alt="Forest" width="600" height="400">
            </a>
            <div class="desc">
                <h3><a href="Book.php" class="pkg">Sandakpur</a></h3><br>Sandakphu or Sandakpur (3636 m; 11,930 ft) is a mountain peak in the Singalila Ridge on the border between India and Nepal. It is the highest point of the ridge and of the state of West Bengal, India.</div>
        </div>

        <div class="gallery">
            <a target="_blank" href="images/widebuilding.jpg">
                <img src="images/snowcamp.jpg" alt="Northern Lights" width="600" height="400">
            </a>
            <div class="desc">
                <h3><a href="Book.php" class="pkg">Karnali</a></h3><br>An epic trans-Himalayan journey, the Karnali Corridor Trek is a wonderful insight to the beauty and cultures of Far West Nepal.</div>
        </div>

        <div class="gallery">
            <a target="_blank" href="images/bridge.jpg">
                <img src="images/bridge.jpg" alt="Mountains" width="600" height="400">
            </a>
            <div class="desc">
                <h3><a href="Book.php" class="pkg">Pokhara</a></h3><br>Pokhara’s tranquil beauty has been the subject of inspiration for many travel writers. Its pristine air, spectacular backdrop of snowy peaks, blue lakes and surrounding greenery make it ‘the jewel in the Himalaya’, a place of remarkable natural disposition..</div>
        </div>

        <div class="gallery">
            <a target="_blank" href="images/building.jpg">
                <img src="images/building.jpg" alt="Cinque Terre" width="600" height="400">
            </a>
            <div class="desc">
                <h3><a href="Book.php" class="pkg">Hilley</a></h3><br>Travel eastern Nepal.Hilley is one of the beautiful region in eastern hill.The cold climate here and the drinks and overall natural environment is unforgattable for many tourist.</div>
        </div>

        <div class="gallery">
            <a target="_blank" href="images/balloon.jpg">
                <img src="images/balloon.jpg" alt="Forest" width="600" height="400">
            </a>
            <div class="desc">
                <h3><a href="Book.php" class="pkg">Dharan</a></h3><br>The view from the view point is really so nice that everyone will love it ,it excites even the most seasoned traveler.</div>
        </div>

        <div class="gallery">
            <a target="_blank" href="images/widebuilding.jpg">
                <img src="images/snowcamp.jpg" alt="Northern Lights" width="600" height="400">
            </a>
            <div class="desc">
                <h3><a href="Book.php" class="pkg">janakpur</a></h3><br>The oldest temple in Janakpur is Sri Ram Temple, built by the Gorkhali General Amar Singh Thapa. You can visit the over 200 sacred ponds in the city used for ritual baths by the pilgrims.</div>
        </div>

        <div class="gallery">
            <a target="_blank" href="images/bridge.jpg">
                <img src="images/bridge.jpg" alt="Mountains" width="600" height="400">
            </a>
            <div class="desc">
                <h3><a href="Book.php" class="pkg">Illam</a></h3>
                <br>Illam has a tropical, subtropical, and temperate climate in the southern, central, and northern regions sequentially. Endanger animals like Red Panda, Thar, Black Bear as well as plants like Chap, Simal, Salla, Rhododendron and sal can be found in this district..</div>
        </div>
        <div class="gallery">
            <a target="_blank" href="images/balloon.jpg">
                <img src="images/balloon.jpg" alt="Forest" width="600" height="400">
            </a>
            <div class="desc">
                <h3><a href="Book.php" class="pkg">Kathmandu</a></h3><br>The Capital City of Nepal with a Population of 3 Million. Pashupatinath Temple, Popular Hindu Temple Situated at the Banks of Bagmati River. Patan Durbar Square,One of the 3 Darbar Squares in Kathmandu. Swayambhunath, Ancient Buddhist Pilgrimage in Nepal..</div>
        </div>

        <div class="gallery">
            <a target="_blank" href="images/widebuilding.jpg">
                <img src="images/snowcamp.jpg" alt="Northern Lights" width="600" height="400">
            </a>
            <div class="desc">
                <h3><a href="Book.php" class="pkg">Bhaktapur</a></h3><br> Bhaktapur is a city in Bagmati, Nepal. It has many popular attractions, including Bhaktapur Durbar Square, 55 Window Palace, Pottery Square, making it well worth a visit. .</div>
        </div>

    </div>

    
        <footer >

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