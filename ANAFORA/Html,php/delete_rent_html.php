<html lang="gre">
<?php include 'variables.php'?>
  <head>
    <title>Διαγραφή ενοικίασης</title>
    <?php include "cssCode.php" ?>
</head>
  <body>
    <div class="wrapper">
      <?php include "top_buttons.php"  ?>
<!--  Top container-->





<!--  Content changes here-->


    <section>
      <br>
<div class="w3-container w3-blue">
  <h2>Εισάγεται το IRS του εργαζόμενου , το IRS του πελάτη και το ID του δωματίου ,που σχετίζονται με την ενικοίαση που επιθυμείτε να διαγράψετε:</h2>
</div>

      <form action="delete_rent.php" method="post" class="w3-container"><br/>
          Customer IRS Number:<input type="number" name="customer_irs_number"  class="w3-input" required><br/>
	  	  Hotel room ID:<input type="number" name="hotel_room_id"  class="w3-input" required><br/>
        Employee IRS Number:<input type="number" name="employee_irs_number"  class="w3-input" required><br/>

          <input type="submit" class="dark-button" value="Διαγραφή"><br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="reset" class="dark-button"> <br><br><br><br><br>
      </form>

  </section>





<!--  Content changes here-->
<?php include "bottom_buttons.php" ?>
    </div>
    <!--  Wrapper ends-->
  </body>
  </html>