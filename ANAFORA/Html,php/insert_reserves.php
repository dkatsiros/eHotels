<html lang="gre">
<?php session_start(); ?>

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
    $customer_irs_option= mysqli_real_escape_string($link, $_SESSION['customer_irs_option']);
    $room_id = mysqli_real_escape_string($link, $_SESSION['room_id_option']);
    $start_date = mysqli_real_escape_string($link, $_POST['start_date']);
    $finish_date = mysqli_real_escape_string($link, $_POST['finish_date']);
    $paid= "no";

    $sql = "INSERT INTO reserves (Customer_IRSnumber,Hotel_room_Room_id	,Start_date,Paid,Finish_date)
        VALUES  ('$customer_irs_option','$room_id','$start_date','$paid','$finish_date')";

    if (mysqli_query($link, $sql)) {
      echo "New record created successfully\r\n";
    }
    else {
        echo "Error: " . $sql . "<br>" . mysqli_error($link);

    }


    mysqli_close($link);
    ?>
<br /><br />
<a href="insert_reserves_html.php" class="white-button">Επιστροφή στην εισαγωγή κράτησης</a>
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
