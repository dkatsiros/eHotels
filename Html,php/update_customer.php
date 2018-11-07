<html lang="gre">
<?php include 'variables.php'?>
  <head>
    <title>Διαγραφή εργαζομένου</title>
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
    $link = mysqli_connect("127.0.0.1", "root", "", "test");

    if (!$link) {
        echo "Error: Unable to connect to MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
    }
    $irs= mysqli_real_escape_string($link, $_POST['irs']);
    $street = mysqli_real_escape_string($link, $_POST['street']);
    $number = mysqli_real_escape_string($link, $_POST['number']);
    $postal_code = mysqli_real_escape_string($link, $_POST['postal_code']);
    $city = mysqli_real_escape_string($link, $_POST['city']);
    $first_name = mysqli_real_escape_string($link, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($link, $_POST['last_name']);
    $social_security_number= mysqli_real_escape_string($link, $_POST['social_security_number']);
    $first_registration=date('Y-m-d', time());
    
    $sql = "UPDATE  customer SET SSN=' $social_security_number',First_name='$first_name', Last_name='$last_name',
            Street='$street',Number='$number',Postal_code='$postal_code',City='$city'
            WHERE IRSnumber=$irs";
    if (mysqli_query($link, $sql)) {
      echo "New record created successfully\r\n";
    }   
    else {
        echo "Error: " . $sql . "<br>" . mysqli_error($link);
       
    }
    
    mysqli_close($link);
    ?>
<br /><br />
<a href="delete_employee_html.php" class="white-button">Επιστροφή στην ενημέρωση πελατών</a>
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