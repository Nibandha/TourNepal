<?php
session_start();
include "db-connect.php";
if(isset($_POST['submit'])){
//  print_r($_POST);
//  print_r($con);
//  die;
//  die;
    $register_user_id=$_SESSION['login_session'];
    // echo $register_user_id;
    // die;
    $fullname=$_POST["fname"];
    $Address=$_POST["addresss"];
    $destination=$_POST["destination"];
    $totalnum=$_POST["totalnum"];
    $date=$_POST["vdate"];
    $register_umobile=$_SESSION['umobile_session'];
    // echo $register_umobile;
    //die;
  
    // $uid = {$_SESSION['login_session']
       // $sql = "INSERT INTO myadmin(register_user_id,fname,addresss,destination,totalnum,vdate,register_umobile) VALUES ('$register_user_id','$fullname','$Address','$destination','$totalnum','$date' '$register_umobile')";
    $sql= "INSERT INTO `myadmin`(register_user_id,fname,addresss,destination,totalnum,vdate,register_umobile) VALUES ('{$_SESSION['login_session']}','$fullname','$Address','$destination','$totalnum','$date','{$_SESSION['umobile_session']}')";
       $result = mysqli_query($con,$sql);
    // print_r($result);
    // die;
    if($result){
    
      
      // $_SESSION['fname_session'] = $_POST['fname'];
      // $_SESSION['addresss_session'] =  $_POST['addresss'];
      // $_SESSION['destination_session'] =  $_POST['destination'];
      // $_SESSION['totalnum_session'] =  $_POST['totalnum'];
      echo 'You Have Successfully Booked A package'; 
       
    }else{
        die(mysqli_error($con));
    }
    }   

?>
<!DOCTYPE html>
<html>
  <head>
    <title>form!!!</title>
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
    <form class="form" method="POST">
      <label for="demoA">Full Name</label>
      <input type="text" name="fname" required/>

      <label for="demoB">Address</label>
      <textarea name="addresss"></textarea>

      <label for="demoC">Destination</label>
      <select name="destination">
        <option>Pokhara</option>
        <option>Kathmandu</option>
        <option>Illam</option>
        <option>Vedatar</option>
        <option>Nepaljung</option>
        <option>Janakpur</option>
        <option>Mardi Trek</option>
  
      </select>
      <label for="demoA">No. of Visitors</label>
      <input type="number" name="totalnum" required/>
      <label for="demoA">Date of visit</label>
      <input type="date" name="vdate" required/>
      <input type="submit" name="submit" value="Go"/>
    </form>
    <button type="submit"  ><a href="updatebook.php" style="text-decoration:none;color:white;"/>Update </a></button>
    <button type="submit"  ><a href="deletebook.php" style="text-decoration:none;color:white;"> Delete the booking</button></a>
  </body>
</html>
