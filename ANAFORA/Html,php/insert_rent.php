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


<section class="backup-wrapper">
      <br>
<div class="w3-container w3-blue backup-wrapper">
  <?php
  $link = mysqli_connect("127.0.0.1","root","","test");
  if (!$link) {
      echo "Error: Unable to connect to MySQL." . PHP_EOL;
      echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
      echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
  exit;
  }

  $customer_irs_number = mysqli_real_escape_string($link,$_POST['customer_irs_number']);
  $employee_irs_number = mysqli_real_escape_string($link,$_POST['employee_irs_number']);
  $hotel_room_id = mysqli_real_escape_string($link,$_POST['hotel_room_id']);
  $start_date = mysqli_real_escape_string($link,$_POST['start_date']);
  $finish_date = mysqli_real_escape_string($link,$_POST['finish_date']);
  $payment_method = mysqli_real_escape_string($link,$_POST['payment_method']);
  $payment_amount = mysqli_real_escape_string($link,$_POST['payment_amount']);
  

 
  
        $sql="INSERT INTO rents (Customer_IRSnumber,Employee_IRSnumber,Start_date,Finish_date,Payment_amount
                                   ,Payment_method,Hotel_room_Room_ID)
               VALUES ('$customer_irs_number','$employee_irs_number','$start_date','$finish_date','$payment_amount'
                      ,'$payment_method','$hotel_room_id')";

                                  

        if( mysqli_query($link,$sql)){
          echo "New record created successfully\r\n";
        }
        else {
          echo "Error:" . $sql . "<br>" . mysqli_error($link);
        }
       
       
 
 
?>
<br /><br />
<a href="insert_rent_html.php" class="white-button">Επιστροφή στην εισαγωγή ενοικίασης</a>
<br /><br /><br />
<a href="admin.php" class="white-button">Επιστροφή στις επιλογές</a>
<br /><br /><br />
<a href="login_html.php" class="white-button">Επιστροφή στην αρχική του eHotels</a>
</section>






<?php include "bottom_buttons.php" ?>
    </div>
    <!--  Wrapper ends-->
  </body>
  </html>