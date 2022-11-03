<?php
require("db.php");
session_start();
$con = mysqli_connect('localhost','root','');
if($con){
    echo "connection successful";
}
else{
    echo "no connection";
}
$db = mysqli_select_db($con,'ghar');
if(isset($_POST['submit']))
{
  $user =$_POST['email'];
  $pass=$_POST['password'];
  $sql = "select * from admin where email = '$user' and password ='$pass'";
  $query = mysqli_query($con,$sql);
$row=mysqli_num_rows(){
    if ($row == 1)
    {
      echo "login successful";
      $_SESSION['email'] = $user;
      header('location:admindisplay.php');
    }
    else {
      echo "login failed";
      header('location:adminlogin.php')
    }
  }
}
?>