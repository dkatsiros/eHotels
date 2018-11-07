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
    
    $destination = mysqli_real_escape_string($link, $_POST['destination']);
	$arrival = mysqli_real_escape_string($link, $_POST['arrival']);
	$departure = mysqli_real_escape_string($link, $_POST['departure']);
	$capacity = mysqli_real_escape_string($link, $_POST['capacity']);
	$chain = mysqli_real_escape_string($link, $_POST['chain']);
	$stars = mysqli_real_escape_string($link, $_POST['stars']);
	$min_price = mysqli_real_escape_string($link, $_POST['min_price']);
	$max_price = mysqli_real_escape_string($link, $_POST['max_price']);
	$total_room_number = mysqli_real_escape_string($link, $_POST['total_room_number']);
	
	$amenities = $_POST['amenities[]'];
	$N = count($amenities);
	if(1 == $N){
		$first=$amenities[0];
	}
	if(2 == $N){
		$first=$amenities[0];
		$second = $amenities[1];
	}
	if(3 == $N){
		$first=$amenities[0];
		$second = $amenities[1];
		$third = $amenities[2];
    }
	if(4 == $N){
		$first=$amenities[0];
		$second = $amenities[1];
		$third = $amenities[2];
		$fourth = $amenities[3];
	}	
    
	echo($first);
	echo($second);
    mysqli_close($link);
    ?>
	
	
    <?php include "bottom_buttons.php" ?>
    </div>
    <!--  Wrapper ends-->
  </body>
  </html>