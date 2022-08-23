<?php
//session_start();
include "db-connect.php";
$sn=$_GET['updatesn'];
if(isset($_POST['submit'])){
  
    $fullname=$_POST["fname"];
    $Address=$_POST["addresss"];
    $destination=$_POST["destination"];
    $totalnum=$_POST["totalnum"];
    $vdate=$_POST["vdate"];

    if(empty($_POST["fname"]) || empty($_POST["addresss"])|| empty($_POST["destination"])|| empty($_POST["totalnum"])|| empty($_POST["vdate"])){
        echo'Fill all the required fields.';
        exit;
    }
    else{
    $sql="UPDATE myadmin set fname='$fullname',addresss='$Address',destination='$destination',totalnum='$totalnum',vdate='$vdate'
   where sn='$sn' ";
    $result = mysqli_query($con,$sql);
    if($result){
     /* $_SESSION['fname_session'] = $_POST['fname'];
      $_SESSION['addresss_session'] =  $_POST['addresss'];
      $_SESSION['destination_session'] =  $_POST['destination'];
      $_SESSION['totalnum_session'] =  $_POST['totalnum'];*/
       header("location: updatebook.php");
       echo"You have Sucessfully Updated the package";
    }
    else{
        die(mysqli_error($con));
    }
    }   
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Update</title>
    <style>
   
    .form {
      max-width: 600px; 
      padding: 20px;
      border: 1px solid #eee;
      background: #f2f2f2;
    }

    
    .form label, .form input, .form textarea, .form select, .form button {
      display: block;
      width: 100%;
    }
    .form label { padding: 10px 0; }
    .form input, .form textarea, .form select { padding: 10px; }

 
    input[type=button], input[type=submit], button {
      font-size: 1em;
      font-weight: 700;
      padding: 10px;
      border: 0;
      color: #fff;
      background: #870000;
      cursor: pointer;
    }
    input[type=submit] { margin-top: 20px; }

    
    * {
      font-family: arial, sans-serif;
      box-sizing: border-box;
    }
    </style>
  </head>
  
  <body>
  <?php 
    //session_start();
    //$sn=$_SESSION["login_session"];
    $sql = "SELECT * FROM `myadmin` where `sn`= '$sn';";
    $result=mysqli_query($con,$sql);
    while($row=mysqli_fetch_assoc($result)){
       
?>
    
    <form class="form" method="POST">
      
      <label for="demoA">Full Name</label>
      <input type="text" name="fname" value="<?php print_r($row['fname']);  ?> "/>

      <label for="demoB">Address</label>
      <textarea name="addresss"> <?php print_r($row['addresss']); ?></textarea>

      <label for="demoC">Destination</label>
      <select name="destination">
        <option><?php print_r($row['destination']); ?></optiom>
        <option>Pokhara</option>
        <option>Kathmandu</option>
        <option>Illam</option>
        <option>Vedatar</option>
        <option>Nepaljung</option>
        <option>Janakpur</option>
        <option>Lumbini</option>
        <option>Mardi Base</option>
  
      </select>
      <label for="demoA">No. of Visitors</label>
      <input type="number" name="totalnum" value="<?php print_r($row['totalnum']); ?>"/>
      <label for="demoA">Date of visit</label>
      <input type="date" name="vdate" value="<?php print_r($row['vdate']) ?>" />
      <input type="submit" name="submit" value="Update"/>
    </form>
   
    
  </body>
  <?php  }  ?>
</html>
