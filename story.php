<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>story</title>
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
                <li> <a href="destination.php">Destination</a></li>
                <li><a href="tours.php">Tours</a></li>
                <li> <a href="story.php" class="bcgrnd-stay">Stories</a></li>
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

    <section class="top-picks">
        <h1 style="color:rgb(28, 28, 46);text-align:center;font-size:25px;font-weight:bold; padding-top: 50px; ">What Our User Says</h1>
        <p style="color:rgb(28, 28, 46);text-align:center;font-size:18px;font-weight:bold;font-family: Oleo Script, cursive;padding-bottom: 30px;">Share Us Your Best Experiences.</p>

        <div class="row">
            <div class="picks-col">
                <img src="images/janakii mandir.jpeg">

                <h3>TEMPLE</h3>
                <p class="story-info">Some refer to it as a cultural Chernobyl. I think of it as a cultural Stalingrad..</p>

                <i class="fa fa-eye"></i>
                <i class="fa fa-comment"></i>
            </div>

            <div class="picks-col">
                <img src="images/hands.jpg">

                <h3>NATURE</h3>
                <p class="story-info">You grow accustomed to being in beautiful places and doing incredible things when you travel.</p>
                <i class="fa fa-eye"></i>
                <i class="fa fa-comment"></i>
            </div>

            <div class="picks-col">
                <img src="images/happy1.jpg">

                <h3>ENDANGERED</h3>
                <P class="story-info">Visit all the places filled with nature meeting endangered species.</P>
                <i class="fa fa-eye"></i>
                <i class="fa fa-comment"></i>
            </div>


        </div>

        <div class="row">
            <div class="picks-col">
                <img src="images/man.jpg">

                <h3>ADVENTURE</h3>
                <p class="story-info">If you are unhappy with it, stop doing it.If you are dreaming about it, do it</p>
                <i class="fa fa-eye"></i>
                <i class="fa fa-comment"></i>
            </div>

            <div class="picks-col">
                <img src="images/happygirls.jpg">

                <h3>HOLIDAYS</h3>
                <p class="story-info">Who doesn’t love being on vacation? The best memories, and the best pictures, happen when you are on a getaway.</p>
                <i class="fa fa-eye"></i>
                <i class="fa fa-comment"></i>
            </div>

            <div class="picks-col">
                <img src="images/Food.jpg">

                <h3>FOOD</h3>
                <P class="story-info">Don’t travel just to see.Travel to try, listen, feel, taste.That way there won’t be any place you cannot find beauty.</P>
                <i class="fa fa-eye"></i>
                <i class="fa fa-comment"></i>
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