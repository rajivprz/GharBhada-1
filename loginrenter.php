<?php
    session_start();
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        include('connection.php');
        $username = $_POST['username'];
        $password = $_POST['password'];

        $username = stripcslashes($username);
        $password = stripcslashes($password);

        $username = mysqli_real_escape_string($con,$username);
        $password = mysqli_real_escape_string($con,$password);
        $password = hash('sha256',$password);

        $sql = "SELECT * FROM renter WHERE (username = '$username' OR email = '$username') AND password = '$password'";
        $result = mysqli_query($con,$sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        if($count==1){
            $_SESSION['username'] = $row['username'];
            $_SESSION['fullname'] = $row['fullname'];
            header("Location: renterdisplay1.php");
        }
        else{
            echo "Username or Password is incorrect";
        }
    }
    else{
        header("Location: ownerlogin.php");
    }
    

?>