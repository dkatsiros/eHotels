<html lang="gre">
<?php include 'variables.php'?>
  <head>
    <title>Εισαγωγή ξενοδοχειακής μονάδας</title>
    <?php include "cssCode.php" ?>
	
	
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
	
	
    <?php include "bottom_buttons.php" ?>
    </div>
    <!--  Wrapper ends-->
  </body>
  </html>