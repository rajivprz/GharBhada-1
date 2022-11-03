
<?php
$con = mysqli_connect('localhost','root','','ghar');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gharbhada.com/ownerlogin</title>
    <link rel="stylesheet" href="styles1.css">
</head>
<body>
    <div class="container">
        <div class="title">Owner Login</div>
          <form action="loginOwner.php" method="POST">
            <div class="user-details">
              <div class="input-box">
                <input type="text" placeholder="Email or UserNAME" name="username" required>
              </div>
              <div class="input-box">
                <input type="password" placeholder="Enter your password" name="password" required>
              </div>
              <div class="button">
                <input type="submit" value="Login">
                <div class="signup">
                    Not a member? <a href="ownerregister.php">Signup now</a>  
             </div>
          </form>
        </div>
      </div>
        </form> 
</body>
</html>