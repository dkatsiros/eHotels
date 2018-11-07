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
<!--  Content changes down-->
    <?php
    $link = mysqli_connect("127.0.0.1", "root", "", "test");

    if (!$link) {
        echo "Error: Unable to connect to MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
    }
    $irs_number = mysqli_real_escape_string($link,$_POST['irs_number']);
    $street = mysqli_real_escape_string($link, $_POST['street']);
    $number = mysqli_real_escape_string($link, $_POST['number']);
    $postal_code = mysqli_real_escape_string($link, $_POST['postal_code']);
    $city = mysqli_real_escape_string($link, $_POST['city']);
    $first_name = mysqli_real_escape_string($link, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($link, $_POST['last_name']);
    $social_security_number= mysqli_real_escape_string($link, $_POST['social_security_number']);
    $first_registration=date('Y-m-d', time());
    
    $sql = "INSERT INTO customer (IRSnumber,SSN,First_name,Last_name,Street,Number,City,Postal_code,First_registration)
        VALUES  ('$irs_number', '$social_security_number','$first_name','$last_name','$street','$number','$city','$postal_code','$first_registration')";
    
    if (mysqli_query($link, $sql)) {
      echo "New record created successfully\r\n";
    }   
    else {
        echo "Error: " . $sql . "<br>" . mysqli_error($link);
       
    }
    
    mysqli_close($link);
    ?>
 <br /><br />
<a href="insert_customer_html.php" class="white-button">Επιστροφή στην εισαγωγή πελατών</a>
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
