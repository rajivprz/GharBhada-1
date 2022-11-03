<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>gharbhada.com/addaproperty</title>
    <link rel="stylesheet" href="add.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <main><a href="ownerdisplay1.html"><img class="logo" src="images/logo.png" alt=""></a></main>
  <div class="container">
    <div class="title">Add a Property</div>
    <div class="contents">
      <form action="propertyAdd.php" method="POST">
        <div class="user-details">
          <div class="inputbox">
            <span class="details">Title : </span>
            <input class="title" type="text" name="title" required><br><br>
          </div>
          <div class="inputbox">
              <span class="details">Select Type : </span>
              <select name="type" class="type">
                <option value="room">Room</option>
                <option value="flat">Flat</option>
              </select>
               
          </div><br>
          <div style="display:none;" id="no_of">
          <div class="inputbox">
            <span class="details">No of bedroom : </span>
            <input class="title" type="text" name="no_of_bedroom"><br><br>
          </div>
          <div class="inputbox">
            <span class="details">No of restroom : </span>
            <input class="title" type="text" name="no_of_restroom"><br><br>
          </div>
          <div class="inputbox">
            <span class="details">No of kitchen : </span>
            <input class="title" type="text" name="no_of_kitchen"><br><br>
          </div>
          <div class="inputbox">
            <span class="details">No of halls : </span>
            <input class="title" type="text" name="no_of_hall"><br><br>
          </div>
          </div>
          <div class="inputbox">
            <span class="details">Price : </span>
            <input class="price" type="number" name="price" required><br><br>
          </div>
            <div class="inputbox">
              <span class="details">Number of rooms : </span>
              <select name="rooms" class="selects">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option> 
              </select>
              <span class="details"> Area (in square feet) :  </span>
            <input type="number" name="area">
             <br><br>
            </div> 
          </div>  
          <div class="inputbox">
              <span class="details">Address : </span>
              <input placeholder="City"  type="text" name="city" required>
              <input placeholder="Street no" type="text" name="tole" required>
              <input placeholder="House Number" type="text" name="houseno" required><br><br>
          </div>
          <div class="inputbox">
            <span>Add some photos : </span>
            <input type="file" name="photo1" required>
          </div><br>
          <div class="inputbox">
            <span>Add some photos : </span>
            <input type="file" name="photo2" required>
          </div><br>
          <div class="inputbox">
            <span>Add some photos : </span>
            <input type="file" name="photo3" required>
          </div><br>
          <div class="inputbox">
            <textarea name="info" placeholder="Any Additional Information" cols="70" rows="5" required ></textarea>
          </div><br>
          <div>
            <input type="submit" value="Add">
         </div>
        </div>
      </form>
    </div>
  </div>
  <script>
$(document).ready(function(){
  $(".type").change(function(){
    var inputs = $('.type').val();
    if(inputs == "flat"){
        $("#no_of").css("display", "block");
    }
    else{
        $("#no_of").css("display", "none");
    }
  });
});
</script>
</body>
</html>
