<html lang="gre">
<?php include 'variables.php'?>
  <head>
    <title>Εισαγωγή δωματίου</title>
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
    $capacity = mysqli_real_escape_string($link, $_POST['capacity']);
    $view = mysqli_real_escape_string($link, $_POST['view']);
    $expandable = mysqli_real_escape_string($link, $_POST['expandable']);
    $repairs_need = mysqli_real_escape_string($link, $_POST['repairs_need']);
    $price = mysqli_real_escape_string($link, $_POST['price']);
    $hotel_id= mysqli_real_escape_string($link, $_POST['hotel_id']);
 
    $sql = "INSERT INTO hotel_room (Hotel_id,View,Price,Expandable,Repairs_need,Capacity)
        VALUES  (' $hotel_id','$view','$expandable','$repairs_need','$capacity','$price')";
    
    if (mysqli_query($link, $sql)) {
      echo "New record created successfully\r\n";
    }   
    else {
        echo "Error: " . $sql . "<br>" . mysqli_error($link);
       
    }

    $sql2= "SELECT MAX(Room_id) FROM hotel_room";
    
    $result = mysqli_query($link,$sql2);
    $value = mysqli_fetch_array($result);

    if (isset($_POST['amenities']))
    {   $amenities= $_POST['amenities'];
        $N = count($amenities);
                                 
	if(1 == $N){
        $sql3= "INSERT INTO amenities (Amenities_id,Room_id)
        VALUES ('$amenities[0]','$value[0]')";
        if (mysqli_query($link, $sql3)) {
        echo "New record created successfully\r\n";
        }   
        else {
            echo "Error: " . $sql3 . "<br>" . mysqli_error($link);
        }  
      
    
    }
	else if(2 == $N){
        $sql3= "INSERT INTO amenities (Amenities_id,Room_id)
        VALUES ('$amenities[0]','$value[0]')";
        $sql4= "INSERT INTO amenities (Amenities_id,Room_id)
        VALUES ('$amenities[1]','$value[0]')";
        
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
        VALUES ('$amenities[0]','$value[0]')";   
        $sql4= "INSERT INTO amenities (Amenities_id,Room_id)
        VALUES ('$amenities[1]','$value[0]')";
        $sql5= "INSERT INTO amenities (Amenities_id,Room_id)
        VALUES ('$amenities[2]','$value[0]')";
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
        VALUES ('$amenities[0]','$value[0]')";   
        $sql4= "INSERT INTO amenities (Amenities_id,Room_id)
        VALUES ('$amenities[1]','$value[0]')";
        $sql5= "INSERT INTO amenities (Amenities_id,Room_id)
        VALUES ('$amenities[2]','$value[0]')";
        $sql6= "INSERT INTO amenities (Amenities_id,Room_id)
        VALUES ('$amenities[3]','$value[0]')";
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

    }
  
    mysqli_close($link);
    ?>
<br /><br />
<a href="insert_hotel_room_html.php" class="white-button">Επιστροφή στην εισαγωγή δωματίου</a>
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
