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
    <h2>check in:</h2>
</div>

   <?php
       $link = mysqli_connect("127.0.0.1","root","","test");
       if (!$link) {
           echo "Error: Unable to connect to MySQL." . PHP_EOL;
           echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
            echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
       exit;}     
        $no= mysqli_real_escape_string($link,$_SESSION['no']);
        $Customer_IRSnumber=mysqli_real_escape_string($link,$_SESSION['Customer_IRSnumber']);
        $hotel_id= mysqli_real_escape_string($link,$_SESSION['hotel_id']);
        $Hotel_room_Room_id=mysqli_real_escape_string($link,$_SESSION['Hotel_room_Room_id']);
        $Start_date= mysqli_real_escape_string($link,$_SESSION['Start_date']);
        $Finish_date= mysqli_real_escape_string($link,$_SESSION['Finish_date']);
        $Paid=mysqli_real_escape_string($link,$_SESSION['Paid']);
        $employee_IRSnumber=$_SESSION["employee_logged_in"];
        $payment_amount=mysqli_real_escape_string($link,$_POST['payment_amount']);
        $payment_method=mysqli_real_escape_string($link,$_POST['payment_method']);
        
        $sql="INSERT INTO rents (Customer_IRSnumber,Hotel_room_Room_id,Employee_IRSnumber,
                                 Start_date,Finish_date,Payment_amount,Payment_Method)
             VALUES ('$Customer_IRSnumber','$Hotel_room_Room_id','$employee_IRSnumber',
                     '$Start_date','$Finish_date','$payment_amount','$payment_method') ";
        
        if(mysqli_query($link,$sql)){
            echo "Success. Checkin was made!";
        }
        else {
            echo "Error:" . $sql . "<br>" . mysqli_error($link);
        }
        
        

   ?>

    <?php include "bottom_buttons.php" ?>
    </div>
    <!--  Wrapper ends-->
  </body>
  </html>