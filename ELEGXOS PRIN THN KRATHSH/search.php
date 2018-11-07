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

<html lang="gre">
<?php include 'variables.php'?>
  <head>
    <?php include "cssCode.php" ?>
	<div class="top-container">
	<div class="search">
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
	if (isset($_POST['amenities'])) {
		$amenities=$_POST['amenities'];
		$N = count($amenities);

		if(1 == $N){
			$first=$amenities[0];
			$second = $amenities[0];
			$third = $amenities[0];
			$fourth = $amenities[0];
		}
		else if(2 == $N){
			$first=$amenities[0];
			$second = $amenities[1];
			$third= $amenities[1];
			$fourth=$amenities[1] ;
		}
		else if(3 == $N){
			$first=$amenities[0];
			$second = $amenities[1];
			$third = $amenities[2];
			$fourth= $amenities[2];
		}
		else if(4 == $N){
			$first=$amenities[0];
			$second = $amenities[1];
			$third = $amenities[2];
			$fourth = $amenities[3];
		}	 
		$sqlAmenities=" Room_id IN (SELECT a.Room_id 
		FROM (SELECT Room_id FROM amenities WHERE Amenities_id='$first') as a 
		INNER JOIN (SELECT Room_id FROM amenities WHERE Amenities_id='$second') as b ON a.Room_id=b.Room_id
		INNER JOIN (SELECT Room_id FROM amenities WHERE Amenities_id='$third') as c ON c.Room_id=a.Room_id
		INNER JOIN (SELECT Room_id FROM amenities WHERE Amenities_id='$fourth') as d ON d.Room_id=a.Room_id)" ;
	} 
	else 
		$sqlAmenities=TRUE;


	if (empty($_POST["destination"])) {
 		$sqlDestination = TRUE; }
	else{
		$sqlDestination = " Hotel_id IN (SELECT Hotel_id FROM hotel WHERE City='$destination')";
		}
	//ARRIVAL-DEPARTURE
	if (empty($_POST["arrival"]) or empty($_POST["departure"])) {
 		$sqlRented = TRUE; }
	else {
	$sqlRented = "Room_id NOT IN 
					(SELECT Hotel_room_Room_id FROM reserves WHERE
						(
							(Start_date<'$arrival') 
							AND
							('$arrival'<Finish_date)
						)
						OR
						(
							(Start_date<'$departure')
							AND
							('$departure'<Finish_date)
						)
					)";
	}
	//STARS
	if (empty($_POST["stars"])){
 		$sqlStars=TRUE;
	}
	else{
		$sqlStars = "Hotel_id IN
		(SELECT Hotel_id FROM hotel WHERE Stars='$stars')";
	}
	//CAPACITY
	if(empty ($_POST["capacity"])){
 		$sqlCapacity=TRUE;
	}
	else {
		$sqlCapacity = "Capacity='$capacity'";
	}
	//CHAIN
	if(empty ($_POST["chain"])){
 		$sqlChain=TRUE;
	}
	else {
		$sqlChain="Hotel_id IN 
					(SELECT Hotel_id FROM hotel WHERE Hotel_group_id='$chain')";
	}
	//MAX MIN PRICE
	if(empty($_POST["min_price"]) and empty($_POST["max_price"])){
 			$sqlPrice=TRUE;
		}
	elseif(empty($_POST["max_price"])) {
				$sqlPrice="Price >= '$min_price'";
		}
	elseif(empty($_POST["min_price"])){
				$sqlPrice="Price <= '$max_price'";
		}
	else {
			$sqlPrice =" Price BETWEEN $min_price AND $max_price ";
		}
	
	
	//NUMBER OF ROOMS
	if(empty($_POST["total_room_number"])){
 		$sqlTotalRoomNumber=TRUE;
	}
	else {
		$sqlTotalRoomNumber ="Hotel_id IN 
								(SELECT Hotel_id FROM hotel WHERE
								 Number_of_rooms>='$total_room_number')";
	}


	 $sql= "SELECT * FROM hotel_room WHERE ( $sqlDestination AND $sqlCapacity AND $sqlRented AND $sqlStars AND $sqlCapacity
	 AND $sqlChain AND $sqlPrice AND $sqlAmenities AND $sqlTotalRoomNumber )";
 
	 
	$query = mysqli_query($link, $sql);
	if(!$query) printf("\nError %s\n",mysqli_error($link));
	?>
	<html>
	<head>
		<title>Displaying MySQL Data in HTML Table</title>
		<style type="text/css">
			body {
				font-size: 15px;
				color: #343d44;
				font-family: "segoe-ui", "open-sans", tahoma, arial;
				padding: 0;
				margin: 0;
			}
			table {
				margin: auto;
				font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
				font-size: 12px;
			}
	
			h1 {
				margin: 25px auto 0;
				text-align: center;
				text-transform: uppercase;
				font-size: 17px;
			}
	
			table td {
				transition: all .5s;
			}
			
			/* Table */
			.data-table {
				border-collapse: collapse;
				font-size: 14px;
				min-width: 537px;
			}
	
			.data-table th, 
			.data-table td {
				border: 1px solid #e1edff;
				padding: 7px 17px;
			}
			.data-table caption {
				margin: 7px;
			}
	
			/* Table Header */
			.data-table thead th {
				background-color: #508abb;
				color: #FFFFFF;
				border-color: #6ea1cc !important;
				text-transform: uppercase;
			}
	
			/* Table Body */
			.data-table tbody td {
				color: #353535;
			}
			.data-table tbody td:first-child,
			.data-table tbody td:nth-child(4),
			.data-table tbody td:last-child {
				text-align: right;
			}
			.data-table tbody tr:nth-child(odd) td {
				background-color: #f4fbff;
			}
			.data-table tbody tr:nth-child(even) td {
				background-color: #f4fbff;
			}
			
			.data-table tbody tr:hover td {
				background-color: #ffffa2;
				border-color: #F0FFFF;
			}
	
			/* Table Footer */
			.data-table tfoot th {
				background-color: #7FFF00;
				text-align: right;
			}
			.data-table tfoot th:first-child {
				text-align: left;
			}
		</style>
	</head>
	<body method="post" action="eggrafh_prin_thn_krathsh.php">
		<table class="data-table">
		<caption> <h1> Available Hotel Rooms </h1> </caption >
			<thead>
			
				<tr>
					<th>A/A</th>
					<th>Room_ID</th>
					<th>Hotel_ID</th>
					<th>View</th>
					<th>Price</th>
					<th>Expandable</th>
					<th>Repairs_need</th>
					<th>Capacity</th>
					<th>City</th>
					<th>Reservation</th>
					
	 
	
	
				</tr>
			
			</thead>
			<tbody>
			<?php
			session_start();
			$no 	= 1;
			 while ($row = mysqli_fetch_array($query))
			{	$hotel_id=$row['Hotel_id'];
				$sql2 = "SELECT City FROM hotel WHERE Hotel_id=$hotel_id " ;
				$query2 = mysqli_query($link, $sql2);
				$row2= mysqli_fetch_array($query2);		
				//session_start();
				$_SESSION["Room_id[$no]"] = $row['Room_id'];
				 
				//echo "<form action="eggrafh_prin_thn_krathsh.php" method="post" >";
				echo '<tr>
						
						<td>'.$no.'</td>
						<td >'.$row['Room_id'].'</td>
						<td>'.$row['Hotel_id'].'</td>
						<td>'.$row['View'] .'</td>
						<td>'.$row['Price'] .'</td>
						<td>'.$row['Expandable'] . '</td>
						<td>'.$row['Repairs_need'] . '</td>
						<td>'.$row['Capacity'] . 	'</td>
						<td>'.$row2['City']. '</td> 
						<td> <a href="eggrafh_prin_thn_krathsh.php?reserve_option='. $no .'">Reserve</a> </td>		
						
					 </tr>';
					 
				 $no++;
			 //echo "</form>";
			}?>
			</tbody>
		 
		</table>
		</div>
		<div class="options">
		<!--  Top container-->
      <!--  entire search features-->
       <section class="search">
         <!--  left bar of search-->
          <form class="search-adjustment" action="search.php" method="post" >
            <header class="search-now-header">
                  <h1>eHotels</h1>
                  <p>
                    Κάντε αναζήτηση:
                  </p>
            </header>



                <div class="search-bar">
                      <input class="search-bar-edit" type="text" placeholder="Αναζητήστε προορισμό .." name="destination" value="<?php echo $destination?>"/>
                </div>
                <div class="search-arrival">
                      <input class="search-ar-de-edit" type="date" placeholder="arriving at:" name="arrival" value="<?php echo $arrival?>"/>
                </div>
                <div class="search-departure">
                      <input  class="search-ar-de-edit" type="date" placeholder="leaving at:" name="departure" value="<?php echo $departure?>"/>
                </div>
                <div class="search-people-number">
                    <input class="search-people-number-edit" type="number" min="1" placeholder="How many people:" name="capacity" value="<?php echo $capacity ?>"/>
                </div>
                <div class="search-button-press">
                      <input class="search-button-edit" class="search-button" placeholder="Αναζήτηση" type="submit" ></input>
                </div>
       
  </section>

		<div class="advanced-search">
        <div>
        <h3 style="text-decoration:underline;">Περισσότερα Κριτήρια:</h3 >
        </div>
        <br><br>  <ul>  
           <li>
              <div class=""> Αλυσίδα ξενοδοχείων:
                <input type="number" min="0" name="chain"  value="<?php echo $chain?>">
              </div>
              <br />
            </li>
            <li>
              <div class=""> Αστέρια:
                <input type="number" min="1" max="6" name="stars"  value="<?php echo $stars?>">
              </div>
              <br />
          </li>
          
          <li>
            <div> Εύρος τιμών: 
            
              <input type="number" min="0" name="min_price" placeholder="Ελάχιστη τιμή" value="<?php echo $min_price?>" />
              <input type="number" max="1000000" name="max_price" placeholder="Μέγιστη τιμή"  value="<?php echo $max_price?>"/>
             
            </div>
          </li>
          <br>
          <li>
            <div class=""> Συνολικός αριθμός δωματίων:
              <input type="number" min="1" name="total_room_number"  value="<?php echo $total_room_number?>">
            </div>
            <br />
        </li>
        <li>
        <ul> Παροχές:<br><br>
          <li>
          <label class="our-checkbox"> Wifi
            <input type="checkbox" name="amenities[]" checked="<?php echo $amenities["wifi"] ?>" >
            <span class="checkmark"></span>
          </li>
          <li>
            <label class="our-checkbox"> TV
              <input type="checkbox" name="amenities[]"  value="tv" checked="<?php echo $amenities["tv"] ?>" >
              <span class="checkmark"></span>
          </li>
          <li>
            <label class="our-checkbox"> Air_Condition
              <input type="checkbox" name="amenities[]"  value="air_condition" checked="<?php echo $amenities["air_condition"] ?>" >
              <span class="checkmark"></span>
          </li>
          <li>
            <label class="our-checkbox"> Private_Pool
              <input type="checkbox" name="amenities[]"  value="private_pool" checked="<?php echo $amenities["private_pool"] ?>">
              <span class="checkmark"></span>
          </li>
        </ul>
        </li> 
        </ul>
      </div>

		</div>
		</div>
	</body>
	</html>

 
	
	
	
	
	
	
	
	
	
	
	
	
	