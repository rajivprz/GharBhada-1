<?php
$con = mysqli_connect('localhost','root','','ghar');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gharbhada.com/login</title>
    <link rel="stylesheet" href="styles1.css">
</head>
<body>
    <div class="container">
        <div class="title">Renter Login</div>
          <form action="loginrenter.php" method="post">
            <div class="user-details">
              <div class="input-box">
                <input type="text" name="username" placeholder="Email or UserNAME" required >
              </div>
              <div class="input-box">
                <input type="password" name="password" placeholder="Enter your password" required >
              </div>
              <div class="button">
                <button type="submit" name="submit">Login</button>
                <div class="signup">
                    Not a member? <a href="renterregister.php">Signup now</a>  
             </div>
          </form>
        </div>
      </div>
        </form>
        
</body>
</html>


