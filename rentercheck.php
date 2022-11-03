<?php
require("connection.php");


if(isset($_POST['register']))
{
    $user_exist_query="SELECT * FROM `renter` WHERE  'username'='$_POST[username]' or 'email'='$_POST[email]' ";
    $result=mysqli_query($con ,$user_exist_query);
    if($result)
    {
        # error for username already taken
        if(mysqli_num_rows($result)>0)#if username and email already taken
        {
            $result_fetch=mysqli_fetch_assoc($result);
            if($result_fetch['username']==$_POST['username']){
                echo"
                <script>
                alert('$result_fetch[username] - E-mail already taken'); 
                window.location.href='renterregister.php';
                </script>";
            }
            else
            {
            echo"
                <script>
                alert('$result_fetch[username] -Username already taken'); 
                window.location.href='renterregister.php';
                </script>";
            }
        }
        else{
            $query="INSERT INTO `renter`(`fullname`, `username`, `email`, `phonenumber`, `password`) 
            VALUES ('$_POST[fullname]','$_POST[username]','$_POST[email]','$_POST[phonenumber]','$_POST[password]')";
            if(mysqli_query($con, $query)){
                #if data inserted sucessfully
                echo"
                    <script>
                         alert('Registration sucessful'); 
                         window.location.href='renterregister.php';
                    </script>";

            }
            else{#if data cannot be inserted
                echo"
                    <script>
                        alert('Cannot Run Query'); 
                        window.location.href='renterregister.php';
                   </script>";
            }
        }

    }
    else{
        echo"
        <script>
        alert('Cannot Run Query'); 
        window.location.href='renterregister.php';
        </script>";
    }
}

?>