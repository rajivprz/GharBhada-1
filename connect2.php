<?php
    session_start();

	$fullname = $_POST['fullname'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$number = $_POST['phonenumber'];
    

	// Database connection
	$conn = new mysqli('localhost','root','','ghar');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into renter(fullname, username, email, password, phonenumber) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("ssssi", $fullname, $username, $email, $password, $number);
		$execval = $stmt->execute();
		echo $execval;
        header('location: renterlogin.php');
		$stmt->close();
		$conn->close();
	}
