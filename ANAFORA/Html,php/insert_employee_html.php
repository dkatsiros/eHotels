<html lang="gre">
<?php include 'variables.php'?>
  <head>
    <title>Εισαγωγή εργαζομένου</title>
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
  <h2>Εισάγετε τα στοιχεία του εργαζόμενου:</h2>
</div>

      <form action="insert_employee.php" method="post" class="w3-container"><br/>
          First name: <input type="text" name="first_name"  class="w3-input" required><br/>
          Last name: <input type="tel" name="last_name"  class="w3-input" required><br/>
          IRS Number:<input type="number" name="irs_number"  class="w3-input" required><br/>
          SSN:<input type="number" name="ssn" class="w3-input" required> <br/>
          Street: <input type="text" name="street"  class="w3-input" required><br/>
          Number: <input type="number" name="number"  class="w3-input" required><br/>
          Postal Code: <input type="text" name="postal_code"  class="w3-input" required><br/>
          City: <input type="text" name="city"  class="w3-input" required><br/>
          Start date: <input type="date" name="start_date"  class="w3-input" required><br/>
          Finish Date: <input type="date" name="finish_date"  class="w3-input" required><br/>
          Position: <input type="text" name="position"  class="w3-input" required><br/>
          Hotel id: <input type="number" name="hotel_id"  class="w3-input" required><br/>

          <input type="submit" class="dark-button" value="Εισαγωγή"><br />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="reset" class="dark-button"> <br><br><br><br><br>
      </form>

  </section>

  <?php include "bottom_buttons.php" ?>
      </div>
      <!--  Wrapper ends-->
    </body>
    </html>
