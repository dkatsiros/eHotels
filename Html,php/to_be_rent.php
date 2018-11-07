<?php session_start();?>
<html lang="gre">
  <head>
    <?php include 'variables.php'?>
    <title>Check in-after</title>
    <?php include "cssCode.php" ?>
</head>
  <body>
    <div class="wrapper">
      <?php include "top_buttons.php"  ?>
<!--  Top container-->
<br>
<div class="w3-container w3-blue">
    <h2>Σχετικά με το check in:</h2>
</div>

   <?php
       $link = mysqli_connect("127.0.0.1","root","","test");
       if (!$link) {
           echo "Error: Unable to connect to MySQL." . PHP_EOL;
           echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
            echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
       exit;}     
        
        $_SESSION['no']= $_GET['number'];
        $_SESSION['Customer_IRSnumber'] =$_GET['Customer_IRSnumber'];
        $_SESSION['hotel_id']= $_GET['Hotel_id'];
        $_SESSION['Hotel_room_Room_id']=$_GET['Hotel_room_Room_id'];
        $_SESSION['Start_date']=$_GET['Start_date'];
        $_SESSION['Finish_date']= $_GET['Finish_date'];
        $_SESSION['Paid']=$_GET['Paid'];
        ?>
        <form method="post" action="rented.php">
        Payment Amount:
        <input type="number" min=0; class="w3-input" name="payment_amount" required><br>
        Payment Method:
        <input type="text" class="w3-input" name="payment_method" required><br> <br><br>
        <button  class="dark-button" type="submit"> Check in</button>
        </form>

    <?php include "bottom_buttons.php" ?>
    </div>
    <!--  Wrapper ends-->
  </body>
  </html>