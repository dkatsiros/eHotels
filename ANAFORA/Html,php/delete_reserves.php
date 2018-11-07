<html lang="gre">
<?php include 'variables.php'?>
  <head>
    <title>Διαγραφή κράτησης</title>
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
 $hotel_room_id = mysqli_real_escape_string($link,$_POST['hotel_room_id']);
 
  $sql2="SELECT * FROM reserves WHERE Customer_IRSnumber='$customer_irs_number' AND Hotel_room_Room_id='$hotel_room_id' ";
  if ($res = $link->query($sql2)) {

    /* Check the number of rows that match the SELECT statement */
    if(mysqli_num_rows($res) > 0) {
        $sql = "DELETE FROM reserves
                WHERE Customer_IRSnumber='$customer_irs_number' AND Hotel_room_Room_id='$hotel_room_id'";
        if (mysqli_query($link, $sql)) {
            echo "A record has deleted successfully\r\n";
        }   
        else {
            echo "Error: " . $sql . "<br>" . mysqli_error($link);
            }
        }
 
    else 
    {
        echo "The rent  you want to delete doesnt exists!";
    }
}
else
     {
        echo "Error: " . $sql2 . "<br>" . mysqli_error($link);
       
    }
    mysqli_close($link);

?>
<br /><br />
<a href="delete_reserves_html.php" class="white-button">Επιστροφή στην διαγραφή ενοικίασης</a>
<br /><br /><br />
<a href="admin.php" class="white-button">Επιστροφή στις επιλογές</a>
<br /><br /><br />
<a href="login_html.php" class="white-button">Επιστροφή στην αρχική του eHotels</a>
</section>






<!--  Content changes here-->
<?php include "bottom_buttons.php" ?>
    </div>
    <!--  Wrapper ends-->
  </body>
  </html>