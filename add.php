<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>gharbhada.com/addaproperty</title>
    <link rel="stylesheet" href="styles3.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Add a Property</div>
    <div class="contents">
      <form action="connect.php" method="post">
        <div class="user-details">
          <div class="inputbox">
            <span class="details">Title : </span>
            <input class="title" type="text" name="title" required><br><br>
          </div>
          <div class="inputbox">
              <span class="details">Select Type : </span>
              <input type="radio" name="select" value="r">
              <label class="details" for="html">Room</label>
              <input type="radio" name="select" value="f" >
              <label class="details" for="css">Flat</label>
              <span class="dot"> Price : </span>
              <input id="price" type="number" name="price" required="required"><br><br>  
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
              <input placeholder="City"  type="text" name="city">
              <input placeholder="Tole" type="text" name="tole">
              <input placeholder="House Number" type="text" name="houseno"><br><br>
          </div>
          <div class="inputbox">
            <span>Add some photos : </span>
            <input type="file" onchange="readurl(this)" accept="image/*" multiple name="photos">
          </div><br>
          <div class="inputbox">
            <textarea name="info" placeholder="Any Additional Information" id="" cols="70" rows="5" ></textarea>
          </div><br>
          <div class="button">
            <div class="inner"></div>
            <button> <a href="ownerdisplay1.php"> Done </a></button>
         </div>
        </div>
      </form>
    </div>
  </div>
  <script src="java3.js"></script>
</body>
</html>
