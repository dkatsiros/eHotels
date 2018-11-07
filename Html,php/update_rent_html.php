<html lang="gre">
<?php include 'variables.php'?>
  <head>
    <title>Επεξεργασία ενικοίασης</title>
    <?php include "cssCode.php" ?>
</head>
  <body>
    <div class="wrapper">
      <?php include "top_buttons.php"  ?>
<!--  Top container-->

    <section>
      <br>
<div class="w3-container w3-blue">
  <h2>Επεξεργασία στοιχείων της ενικοίασης:</h2>
</div>

      <form action="update_rent.php" method="post" class="w3-container"><br/>
          Customer IRS number : <input type="number" name="customer_irs_number" class="w3-input" required> <br>
          Employee IRS number: <input type="number" name="employee_irs_number"  class="w3-input" required><br/>
          Hotel room ID: <input type="number" name="hotel_room_id"  class="w3-input" required><br/>
          Start date: <input type="date" name="start_date"  class="w3-input" required><br/>
          Finish date: <input type="date" name="finish_date"  class="w3-input" required><br/>
          Payment amount: <input type="number" name="payment_amount"  class="w3-input" required><br/>
          Payment method: <input type="text" name="payment_method"  class="w3-input" required><br/>
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