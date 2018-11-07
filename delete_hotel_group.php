<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
            echo "The hotel_group you want to delete doesnt exists!";
        }
    }
    else
         {
            echo "Error: " . $sql2 . "<br>" . mysqli_error($link);
           
        }
    
    
    mysqli_close($link);
    ?>
    <a href="insert_hotel_group.html">Επιστροφή στην εισαγωγή ξενοδοχειακής μονάδας</a>
    <img src="City_Landscape_Background.jpg" alt="Background" style="width:1300px;height:400px;">
</body>
</html>