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
    $link = mysqli_connect("127.0.0.1", "root", "", "test");

    if (!$link) {
        echo "Error: Unable to connect to MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
    }
    $hotel_room_id= mysqli_real_escape_string($link,$_POST['hotel_room_id']);
    $capacity = mysqli_real_escape_string($link, $_POST['capacity']);
    $view = mysqli_real_escape_string($link, $_POST['view']);
    $expandable = mysqli_real_escape_string($link, $_POST['expandable']);
    $repairs_need = mysqli_real_escape_string($link, $_POST['repairs_need']);
    $price = mysqli_real_escape_string($link, $_POST['price']);
    $amenities = $_POST['amenities'];
    
     
    $sql2 = "SELECT * FROM hotel_room WHERE Room_id=$hotel_room_id";
    if ($res = $link->query($sql2)) {

        /* Check the number of rows that match the SELECT statement */
        if(mysqli_num_rows($res) > 0) {
            $sql = "UPDATE hotel_room SET Capacity=' $capacity',Repairs_need='$repairs_need', View='$view',Price='$price',
            Expandable='$expandable' 
           WHERE Room_id=$hotel_room_id";
            if (mysqli_query($link, $sql)) {
                echo "New record created successfully\r\n";
             }   
             else {
                 echo "Error: " . $sql . "<br>" . mysqli_error($link);
                }
            }
    else 
        {
            echo "The hotel_room you want to update doesnt exists!";
        }
    }
    $sql3="DELETE FROM amenities WHERE Room_id=$hotel_room_id";
    mysqli_query($link, $sql3);
    $N = count($amenities);
 
	if(1 == $N){
        $sql3= "INSERT INTO amenities (Amenities_id,Room_id)
        VALUES ('$amenities[0]','$hotel_room_id')";
        if (mysqli_query($link, $sql3)) {
        echo "New record created successfully\r\n";
        }   
        else {
            echo "Error: " . $sql3 . "<br>" . mysqli_error($link);
        }  
      
    
    }
	else if(2 == $N){
        $sql3= "INSERT INTO amenities (Amenities_id,Room_id)
        VALUES ('$amenities[0]','$hotel_room_id')";
        $sql4= "INSERT INTO amenities (Amenities_id,Room_id)
        VALUES ('$amenities[1]','$hotel_room_id')";
        
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
        
   
    }
	else if(3 == $N){
        $sql3= "INSERT INTO amenities (Amenities_id,Room_id)
        VALUES ('$amenities[0]','$hotel_room_id')";   
        $sql4= "INSERT INTO amenities (Amenities_id,Room_id)
        VALUES ('$amenities[1]','$hotel_room_id')";
        $sql5= "INSERT INTO amenities (Amenities_id,Room_id)
        VALUES ('$amenities[2]','$hotel_room_id')";
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
    if (mysqli_query($link, $sql5)) {
        echo "New record created successfully\r\n";
    }   
    else {
        echo "Error: " . $sql5 . "<br>" . mysqli_error($link);
    }






}
	else if(4 == $N){
        $sql3= "INSERT INTO amenities (Amenities_id,Room_id)
        VALUES ('$amenities[0]','$hotel_room_id')";   
        $sql4= "INSERT INTO amenities (Amenities_id,Room_id)
        VALUES ('$amenities[1]','$hotel_room_id')";
        $sql5= "INSERT INTO amenities (Amenities_id,Room_id)
        VALUES ('$amenities[2]','$hotel_room_id')";
        $sql6= "INSERT INTO amenities (Amenities_id,Room_id)
        VALUES ('$amenities[3]','$hotel_room_id')";
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
            if (mysqli_query($link, $sql5)) {
                echo "New record created successfully\r\n";
            }   
            else {
                echo "Error: " . $sql5 . "<br>" . mysqli_error($link);
            }
            if (mysqli_query($link, $sql6)) {
                echo "New record created successfully\r\n";
            }   
            else {
                echo "Error: " . $sql6 . "<br>" . mysqli_error($link);
            }
    
    }	 

     
    
    mysqli_close($link);
    ?>  	  
	<br /><br />
<a href="update_hotel_room_html.php" class="white-button">Επιστροφή στην ενημέρωση δωματίων</a>
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
