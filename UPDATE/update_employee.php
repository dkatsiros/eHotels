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

  $first_name = mysqli_real_escape_string($link,$_POST['first_name']);
  $last_name = mysqli_real_escape_string($link,$_POST['last_name']);
  $irs_number = mysqli_real_escape_string($link,$_POST['irs_number']);
  $SSN = mysqli_real_escape_string($link,$_POST['ssn']);
  $Street = mysqli_real_escape_string($link,$_POST['street']);
  $number = mysqli_real_escape_string($link,$_POST['number']);
  $postal_code = mysqli_real_escape_string($link,$_POST['postal_code']);
  $city = mysqli_real_escape_string($link,$_POST['city']);
  $start_date = mysqli_real_escape_string($link,$_POST['start_date']);
  $finish_date = mysqli_real_escape_string($link,$_POST['finish_date']);
  $position = mysqli_real_escape_string($link,$_POST['position']);
  $hotel_id = mysqli_real_escape_string($link,$_POST['hotel_id']);

  $sql2 = " SELECT * FROM employee WHERE IRSnumber='$irs_number'";
  if($res = $link->query($sql2)){

    if(mysqli_num_rows($res) > 0){
      $sql="UPDATE employee SET SSN='$SSN',First_name='$first_name',
                                Last_name='$last_name', Street='$Street',
                                Number='number', City='$city',
                                Postal_code='$postal_code'
             WHERE IRSnumber='$irs_number'";
      $sqlWORKS = "UPDATE works SET Hotel_Hotel_id='$hotel_id',Start_date='$start_date'
                                    Position='$position',Finish_date='$finish_date'";
    if(mysqli_query($link,$sql) && mysqli_query($link,$sqlWORKS)){
      echo "Η ενημέρωση υπαλλήλου πραγματοποιήθηκε με επιτυχία.\r\n";
    }
    else {
      echo "Error:" . $sql . "<br>" . mysqli_error($link);
    }
  }
  else
  {
    echo " Ο υπάλληλος που θέλετε να ενημερώσετε δεν υπάρχει.";
  }
}
?>
<br /><br />
<a href="update_employee_html.php" class="white-button">Επιστροφή στην ενημέρωση υπαλλήλων</a>
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
