<?php
session_start();
if(!isset($_SESSION['email'])){
    header('location:adminlogin.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gharbhada.com</title>
</head>
<body>
    <p>i am admin</p>
    <a href="logout.php" class="btn btn-danger">logout</a>
</body>
</html>