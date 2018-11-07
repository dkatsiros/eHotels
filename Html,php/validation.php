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
<section>
<br>
<div class="w3-container w3-blue">
    <h2>Πληκτρολογήστε το IRSnumber σας:</h2>
</div>

   <form action="check_if_user_exists.php" method="post" class="w3-container"><br/>
                IRS_number: <input type="number" name="irs_number" class="w3-input" required> <br>
                <input type="submit" class="dark-button" value="Eισαγωγή"> <br><br>
                <input type="reset" class="dark-button" value="Reset"> <br><br>
    </form>







<?php include "bottom_buttons.php" ?>
    </div>
    <!--  Wrapper ends-->
  </body>
  </html>
