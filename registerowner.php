<?php
error_reporting(0);
    session_start();
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $full_name = $_POST['full_name'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $number = $_POST['number'];
        $password1 = $_POST['password'];
        $con_password = $_POST['con_password_register'];
        
        if($full_name =="" || $username=="" || $email=="" || $password1=="" || $con_password=="" || $number == ""){
            echo "All field required";
        }
        else {
            include "connection.php";
        $username = stripcslashes($username);
        $password1 = stripcslashes($password1);
        $email = stripcslashes($email);
        $number = stripcslashes($number);
        $full_name = stripcslashes($full_name);
        $con_password = stripcslashes($con_password);

        $username = mysqli_real_escape_string($con,$username);
        $password1 = mysqli_real_escape_string($con,$password1);
        $email = mysqli_real_escape_string($con,$email);
        $number = mysqli_real_escape_string($con,$number);
        $full_name = mysqli_real_escape_string($con,$full_name);
        $con_password = mysqli_real_escape_string($con,$con_password);
        
        $sql_owner = "SELECT * FROM owner WHERE username='$username' AND email='$email'";
        $result_owner = mysqli_query($con,$sql_owner);
        $row_owner = mysqli_fetch_array($result_owner, MYSQLI_ASSOC);

        if($row_owner['username']==$username){
            echo "Username already exist";
        }
        else if($row_owner['email']==$email){
            echo "Email address already exist";
        }
        else if(strlen($password1) < 6){
            echo "Password should be greater than 6 character";
        }
        else if($password1 != $con_password){
            echo "Password doesnot match";
        }
        else{
            $password1 = hash('sha256',$password1);
            $add_renter = "INSERT INTO owner (username,email,fullname,password, phonenumber) VALUES('$username','$email','$full_name','$password1', '$number')";
        if(mysqli_query($con,$add_renter)){
            echo "Successfully Register";
        }else{
        echo "Failed to register";
        }
        }
    }
    }
    else{
        echo "Something went wrong.";
        header("Location: ownerregister.php");
    }
    

?>