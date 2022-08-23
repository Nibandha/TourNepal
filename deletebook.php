<?php include 'db-connect.php';?>
  
  <!DOCTYPE html>
<html>
  <head>

    <title>booked data</title>
    <style>
    
    table.zebra {
      width: 100%;
      border-collapse: collapse;
    }
    table.zebra tr:nth-child(odd) { background: #f2f2f2; }
    table.zebra td { padding: 10px; }

   
    ul.zebra, ol.zebra {
      padding: 0;
      margin: 0;
      list-style: none;
    }
    ul.zebra li, ol.zebra li { padding: 10px; }
    ul.zebra li:nth-child(odd), ol.zebra li:nth-child(odd) { background: #f2f2f2; }

    
    * {
      font-family: arial, sans-serif;
      box-sizing: border-box;
    }
    .head {
    text-decoration: solid;
    color:#f59e0b;
    }
     a{
     text-decoration:none;
    }
    
    </style>
    <script type="text/javascript">
 window.addEventListener("load", function(){
     var currentTime = new Date();
     var minutes = currentTime.getMinutes();
     var newButton = document.getElementById("btn1");

    if(minutes>60) {
     newButton.style.display = "none";
    }
    else {
     newButton.style.display = "inline";
    }
}, false);
</script>
  </head>
  <body>
    <table class="zebra">
    <tr>
    <td class="head">S.N</td>
        <td class="head">Fullname</td>
        <td class="head">Address</td>
          <td class="head">Destination</td>
          <td class="head">No. of traveler </td>
          <td class="head">Visit Date</td>
          <td class="head">Contac No.</td>
      </tr>
    <?php  
session_start();
  $register_user_id=$_SESSION['login_session'];
  $sql = "SELECT * FROM `myadmin` where `register_user_id`= '$register_user_id';";
   
$result=mysqli_query($con,$sql);
if($result){
  while($row=mysqli_fetch_assoc($result)){
    $sn=$row['sn'];
    $fullname=$row['fname'];
    $Address=$row['addresss'];
    $destination=$row['destination'];
    $totalnum=$row['totalnum'];
    $date=$row['vdate'];
    $register_umobile=$row['register_umobile'];
    echo '<tr>
    <td>'.$sn.'</td>
    <td>'.$fullname.'</td>
    <td>'.$Address.'</td>
      <td>'.$destination.'</td>
      <td>'.$totalnum.'</td>
      <td>'.$date.'</td>
      <td>'.$register_umobile.'</td>
      <td>
      
      <button class="butdelete" id="btn1" ><a href="delete.php? deletesn='.$sn.'">Delete</a></button>
      </td>
  </tr>';
  
    }
  }


?>
    
  </body>
</html>