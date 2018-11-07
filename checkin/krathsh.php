<html lang="gre">
<?php include 'variables.php'?>
  <head>
    <title>Εισαγωγή κράτησης</title>
    <?php include "cssCode.php" ?>
</head>
  <body>
    <div class="wrapper">
      <?php include "top_buttons.php"  ?>
<!--  Top container-->

    <section>
      <br>
<div class="w3-container w3-blue">
  <h2>Εισάγετε τα στοιχεία της κράτησης:</h2>
</div>

      <form action="insert_reserves.php" method="post" class="w3-container"><br/>
        <?php session_start(); ?>
         <input type="hidden" class="w3-input" value="<?php  echo $_SESSION['customer_irs_option']; ?>">
        <input type="hidden" class="w3-input" value="<?php  echo $_SESSION['room_id_option']; ?>">
        Start_date:<input type="date" name="start_date" class="w3-input" required> <br/>
        Finish_date: <input type="date" name="finish_date"  class="w3-input" required><br/>
        <input type="hidden" name="paid"  class="w3-input" value="No" ><br/>      
          <input type="submit" class="dark-button"><br>
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