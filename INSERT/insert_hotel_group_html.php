<html lang="gre">
<?php include 'variables.php'?>
  <head>
    <title>Εισαγωγή ξενοδοχειακής μονάδας</title>
    <?php include "cssCode.php" ?>
</head>
  <body>
    <div class="wrapper">
      <?php include "top_buttons.php"  ?>
<!--  Top container-->
            <div class="w3-container w3-blue">
                <h2>Εισάγεται τα στοιχεία της ξενοδοχειακής μονάδας:</h2>
            </div>


            <form action="insert_hotel_group.php" method="post" class="w3-container">
                <br />
                Street: <input type="text" name="street" class="w3-input" required><br />
                Number: <input type="number" name="number" class="w3-input" required><br />
                Postal_Code: <input type="text" name="postal_code" class="w3-input" required><br />
                City: <input type="text" name="city" class="w3-input" required><br />
                Email_address: <input type="text" name="email_address" class="w3-input" required><br />
                Phone_number: <input type="tel" name="phone_number" class="w3-input" required><br />
                Number_of_hotels:<input type="number" name="number_of_hotels" class="w3-input" required><br />
                <input type="submit" class="dark-button" value="Eισαγωγή"> <br><br>
                <input type="reset" class="dark-button" value="Reset"> <br><br>
            </form>



    </body>

   
<!--  Content changes here-->
<?php include "bottom_buttons.php" ?>
    </div>
    <!--  Wrapper ends-->
  </body>
  </html>
