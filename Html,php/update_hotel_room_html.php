<html lang="gre">
<?php include 'variables.php'?>
  <head>
     <?php include "cssCode.php" ?>
</head>
  <body>
    <div class="wrapper">
      <?php include "top_buttons.php"  ?>
<!--  Top container-->
 

            <div class="w3-container w3-blue">
                <h2>Επεξεργασία στοιχείων δωματίου:</h2>
            </div>

            <form action="update_hotel_room.php" method="post" class="w3-container">
                <br />
                Hotel_room_id: <input type="text" name="hotel_room_id" class="w3-input" requiered> <br>
                Capacity: <input type="text" name="capacity" class="w3-input" required><br />
                View: <input type="text" name="view" class="w3-input" required><br />
                Expandable: <input type="text" name="expandable" class="w3-input" required><br />
                Repairs_need: <input type="text" name="repairs_need" class="w3-input" required><br />
                Price: <input type="tel" name="price" class="w3-input" required><br />
                Hotel_ID:<input type="number" name="hotel_id" class="w3-input" required><br />
                <ul> <h4> Amenities: </h4> <br> 
           
                <label class="w3-container"> Wifi
                <input type="checkbox" name="amenities[]" value="wifi">
                <span class="w3-input"></span>
      
                <label class="w3-container"> TV
                  <input type="checkbox" name="amenities[]"  value="tv" >
                  <span class="w3-input"></span>
            
        
              <label class="w3-container"> Air_Condition
                <input type="checkbox" name="amenities[]" value="air_condition">
                <span class="w3-input"></span>
          
              <label class="w3-container"> Private Pool
                <input type="checkbox" name="amenities[]" value="private_pool">
                <span class="w3-input"></span>
              </ul>              
              <input type="submit" class="dark-button" ><br><br>
                <input type="reset" class="dark-button" > <br><br>
                </form>

<!--  Content changes here-->
<?php include "bottom_buttons.php" ?>
    </div>
    <!--  Wrapper ends-->
  </body>
  </html>

