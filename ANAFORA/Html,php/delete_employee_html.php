<html lang="gre">
<?php include 'variables.php'?>
  <head>
    <title>Επιλογές διαχειριστή</title>
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
  <h2>Εισάγεται το IRS-number του εργαζόμενου που επιθυμείτε να διαγράψετε:</h2>
</div>

      <form action="delete_employee.php" method="post" class="w3-container"><br/>
          IRS Number:<input type="number" name="irs_number"  class="w3-input" required><br/>
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
