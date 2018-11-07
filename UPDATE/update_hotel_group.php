<html lang="gre">
<?php include 'variables.php'?>
  <head>
    <title>Εισαγωγή ξενοδοχειακής μονάδας</title>
    <?php include "cssCode.php" ?>
</head>
  <body>
    <div class="wrapper">
      <?php include "top_buttons.php"  ?>
    <?php
    $link = mysqli_connect("127.0.0.1", "root", "", "test");

    if (!$link) {
        echo "Error: Unable to connect to MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
    }
    $hotel_group_id= mysqli_real_escape_string($link,$_POST['hotel_group_id']);
    $street = mysqli_real_escape_string($link, $_POST['street']);
    $number = mysqli_real_escape_string($link, $_POST['number']);
    $postal_code = mysqli_real_escape_string($link, $_POST['postal_code']);
    $city = mysqli_real_escape_string($link, $_POST['city']);
    $email_address = mysqli_real_escape_string($link, $_POST['email_address']);
    $phone_number = mysqli_real_escape_string($link, $_POST['phone_number']);
    $number_of_hotels = mysqli_real_escape_string($link, $_POST['number_of_hotels']);
     
    $sql2 = "SELECT * FROM hotel_group WHERE Hotel_group_id=$hotel_group_id";
    if ($res = $link->query($sql2)) {

        /* Check the number of rows that match the SELECT statement */
        if(mysqli_num_rows($res) > 0) {
            $sql = "UPDATE hotel_group SET Street=' $street',Number='$number', Postal_code='$postal_code',City='$city',
            Number_of_hotels='$number_of_hotels' 
           WHERE Hotel_group_id=$hotel_group_id";
            if (mysqli_query($link, $sql)) {
                echo "New record created successfully\r\n";
             }   
             else {
                 echo "Error: " . $sql . "<br>" . mysqli_error($link);
                }
            }
    else 
        {
            echo "The hotel_group you want to update doesnt exists!";
        }
    }
    $sql3="UPDATE hotel_group_phone_number SET Phone_number='$phone_number'
        WHERE Hotel_group_Hotel_group_id=$hotel_group_id";
    $sql4="UPDATE hotel_group_email_address SET Email_address='$email_address'
        WHERE Hotel_group_Hotel_group_id=$hotel_group_id";
    
    if (mysqli_query($link, $sql3)) {
        echo "New record created successfully\r\n";
    }   
    
    else {
        echo "Error: " . $sql3 . "<br>" . mysqli_error($link);
    }
    
    if (mysqli_query($link, $sql4)) {
        echo "New record created successfully\r\n";
    }   
    else {
            echo "Error: " . $sql4 . "<br>" . mysqli_error($link);    
    }
    
    mysqli_close($link);
    ?>  
 <br /><br />
<a href="update_hotel_group_html.php" class="white-button">Επιστροφή στην ενημέρωση ξενοδοχειακών μονάδων</a>
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
