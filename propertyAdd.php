

<?php
    session_start();
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $title = $_POST['title'];
        $type = $_POST['type'];
        $bedroom = $_POST['no_of_bedroom'];
        $restroom = $_POST['no_of_restroom'];
        $kitchen = $_POST['no_of_kitchen'];
        $halls = $_POST['no_of_hall'];
        $price = $_POST['price'];
        
        $area = $_POST['area'];
        $city = $_POST['city'];
         $tole= $_POST['tole'];
        $photo1 = $_POST['photo1'];
        $photo2 = $_POST['photo2'];
        $photo3 = $_POST['photo3'];
        $housenumber = $_POST['houseno'];


        if($bedroom != "" && $restroom != "" && $kitchen != "" && $halls != ""){
            $total_no_of_room = $bedroom + $restroom + $kitchen + $halls;
        }else{
            $total_no_of_room = 1;
        }

        
        if($title == "" || $type== "" || $price == "" || $area == ""||   $city == ""||   $tole == ""||   $housenumber == ""){
            echo "All field required";
        }
        else {
            include "connection.php";
            if($bedroom == "" || $restroom== "" || $kitchen == "" || $halls == ""){
                $add_renter = "INSERT INTO `properties`(`title`, `price`, `property_type`, `total_no_of_room`, `street_no`, `house_no`, `city`, `area`, `photo1`, `photo2`, `photo3`) 
         VALUES ('$title','$price','$type','$total_no_of_room','$tole','$housenumber','$city','$area','$photo1','$photo2','$photo3')";
        if(mysqli_query($con,$add_renter)){
            echo "Successfully Register";
        }else{
        echo "Failed to register";
        }
            }
            else{
                $add_renter = "INSERT INTO `properties`(`title`, `price`, `property_type`, `no_of_bedroom`, `no_of_restroom`, `no_of_kitchen`, `no_of_hall`, `total_no_of_room`, `street_no`, `house_no`, `city`, `area`, `photo1`, `photo2`, `photo3`) 
         VALUES ('$title','$price','$type','$bedroom','$restroom','$kitchen','$halls','$total_no_of_room','$tole','$housenumber','$city','$area','$photo1','$photo2','$photo3')";
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
        header("Location: Renterregister.php");
    }
    

?>