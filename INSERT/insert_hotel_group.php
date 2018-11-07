<html lang="gre">
<?php include 'variables.php'?>
  <head>
    <title>Εισαγωγή ξενοδοχειακής μονάδας</title>
    <?php include "cssCode.php" ?>
</head>
  <body>
    <div class="wrapper">
      <?php include "top_buttons.php"  ?>
<!--  Top container-->
<body>
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
    $street = mysqli_real_escape_string($link, $_POST['street']);
    $number = mysqli_real_escape_string($link, $_POST['number']);
    $postal_code = mysqli_real_escape_string($link, $_POST['postal_code']);
    $city = mysqli_real_escape_string($link, $_POST['city']);
    $email_address = mysqli_real_escape_string($link, $_POST['email_address']);
    $phone_number = mysqli_real_escape_string($link, $_POST['phone_number']);
    $number_of_hotels = mysqli_real_escape_string($link, $_POST['number_of_hotels']);
     
 
    $sql = "INSERT INTO hotel_group (Number_of_hotels,Street,City,Number,Postal_code)
        VALUES  ('$number_of_hotels','$street','$city','$number','$postal_code')";
    
    

    if (mysqli_query($link, $sql)) {
      echo "New record created successfully\r\n";
    }   
    else {
        echo "Error: " . $sql . "<br>" . mysqli_error($link);
       
    }
    $sql2= "SELECT MAX(Hotel_group_id) FROM hotel_group";
    
    $result = mysqli_query($link,$sql2);
    $value = mysqli_fetch_array($result);
     
    
    $sql3= "INSERT INTO hotel_group_phone_number (Hotel_group_Hotel_group_id,Phone_number)
        VALUES ('$value[0]','$phone_number')";
    if (mysqli_query($link, $sql3)) {
        echo "New record created successfully\r\n"; 
      }   
      else {
          echo "Error: " . $sql3 . "<br>" . mysqli_error($link);
            }
    
    $sql4= "INSERT INTO hotel_group_email_address (Hotel_group_Hotel_group_id,Email_address)
        VALUES ('$value[0]','$email_address')";
    
    if (mysqli_query($link, $sql4)) {
        echo "New record created successfully\r\n"; 
      }   
      else {
          echo "Error: " . $sql4 . "<br>" . mysqli_error($link);
            }        
    mysqli_close($link);
    ?>
      <br /><br /><br />
    <a href="admin.php" class="white-button">Επιστροφή στις επιλογές</a>
    <br /><br /><br />
    <a href="login_html.php" class="white-button">Επιστροφή στην αρχική του eHotels</a>
     <br> <br> <br>
        <a href="insert_hotel_group_html.php" class="white-button">Επιστροφή στην εισαγωγή ξενοδοχειακής μονάδας</a>
            <br> <br> 
        </section>
</body>
<!--  Content changes here-->
<?php include "bottom_buttons.php" ?>
    </div>
    <!--  Wrapper ends-->
  </body>
  </html>
