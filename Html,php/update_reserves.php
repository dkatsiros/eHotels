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
    <?php
    $link = mysqli_connect("127.0.0.1", "root", "", "test");
 
    if (!$link) {
        echo "Error: Unable to connect to MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
    }
    $customer_irs_number= mysqli_real_escape_string($link, $_POST['customer_irs_number']);
    $room_id = mysqli_real_escape_string($link, $_POST['hotel_room_room_id']);
    $start_date = mysqli_real_escape_string($link, $_POST['start_date']);
    $finish_date = mysqli_real_escape_string($link, $_POST['finish_date']);
    $paid= mysqli_real_escape_string($link, $_POST['paid']);
        
    $sql = "UPDATE reserves SET Start_date='$start_date',Paid='$paid',Finish_date='$finish_date'
            WHERE Customer_IRSnumber='$customer_irs_number' AND Hotel_room_Room_id='$room_id' ";    
    if (mysqli_query($link, $sql)) {
      echo "New record created successfully\r\n";
    }   
    else {
        echo "Error: " . $sql . "<br>" . mysqli_error($link);
       
    }

   
    mysqli_close($link);
    ?>
<br /><br />
<a href="update_reserves_html.php" class="white-button">Επιστροφή στην επεξεργασία κράτησης</a>
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
