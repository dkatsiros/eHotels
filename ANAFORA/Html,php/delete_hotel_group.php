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
    
    $hotel_group_id = mysqli_real_escape_string($link, $_POST['hotel_group_id']);
     
    $sql2 = "SELECT * FROM hotel_group WHERE Hotel_group_id=$hotel_group_id";
    if ($res = $link->query($sql2)) {

        /* Check the number of rows that match the SELECT statement */
        if(mysqli_num_rows($res) > 0) {
            $sql = "DELETE FROM hotel_group 
                    WHERE Hotel_group_id=$hotel_group_id";
            if (mysqli_query($link, $sql)) {
                echo "A record has deleted successfully\r\n";
            }   
            else {
                echo "Error: " . $sql . "<br>" . mysqli_error($link);
                }
            }
     
        else 
        {
            echo "The hotel group you want to delete doesnt exists!";
        }
    }
    else
         {
            echo "Error: " . $sql2 . "<br>" . mysqli_error($link);
           
        }
    
    
    mysqli_close($link);
    ?>
	<br /><br />
    <a href="delete_hotel_group_html.php" class="white-button">Επιστροφή στην διαγραφή ξενοδοχειακών μονάδων</a>
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