<!DOCTYPE html>
<html>
<head>
    <title> e-Hotel </title>
</head>
<body>
    <header>
        <h1>e-Hotels </h1>
    </header>
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
    $amenities=mysqli_real_escape_string($link, $_POST['amenities']);
    
    $sql = "INSERT INTO hotel_room (Hotel_id,View,Price,Expandable,Repairs_need,Capacity)
        VALUES  (' $hotel_id','$view','$expandable','$repairs_need','$capacity','$price')";
    
    if (mysqli_query($link, $sql)) {
      echo "New record created successfully\r\n";
    }   
    else {
        echo "Error: " . $sql . "<br>" . mysqli_error($link);
       
    }

    $sql2= "SELECT MAX(Hotel_group_id) FROM hotel_group";
    
    $result = mysqli_query($link,$sql2);
    $value = mysqli_fetch_array($result);
    
    $sql3= "INSERT INTO amenities (Amenities_id,Room_id)
        VALUES ('$amenities','$value[0]')";

    mysqli_close($link);
    ?>
    <a href="Hotel_room.html">Επιστροφή στην εισαγωγή δωματίου</a>
    <img src="City_Landscape_Background.jpg" alt="Background" style="width:1300px;height:400px;">
</body>
</html>