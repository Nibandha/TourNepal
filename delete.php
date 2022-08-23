<?php
include'db-connect.php';
if(isset($_GET['deletesn'])){
    $sn=$_GET['deletesn'];
}
    $sql="DELETE from`myadmin` WHERE sn=$sn";
    $result=mysqli_query($con,$sql);
    if($result){
         header('location:deletebook.php');
    }
    else{
   
         die(mysqli_error($con));
         }
  ?>