<html lang="gre">
<?php include 'variables.php'?>
  <head>
    <title>Επεξεργασία κράτησης</title>
    <?php include "cssCode.php" ?>
</head>
  <body>
    <div class="wrapper">
      <?php include "top_buttons.php"  ?>
<!--  Top container-->

    <section>
      <br>
<div class="w3-container w3-blue">
  <h2>Επεξεργασία στοιχείων της κράτησης:</h2>
</div>

      <form action="update_reserves.php" method="post" class="w3-container"><br/>
        
        Customer_IRSnumber: <input type="number" name="customer_irs_number"	class="w3-input"	required><br/>
        Room_id: <input type="number" name="hotel_room_room_id"  class="w3-input" required><br/>
        Start_date:<input type="date" name="start_date" class="w3-input" required> <br/>
        Finish_date: <input type="date" name="finish_date"  class="w3-input" required><br/>
        Paid: <input type="text" name="paid"  class="w3-input" required><br/>      
          <input type="submit" class="dark-button"><br />
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