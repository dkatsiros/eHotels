<html lang="gre">
<?php include 'variables.php'?>
  <head>
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
	if (empty($_POST["arrival"])) {
        echo "Missing"; }
	$arrival = mysqli_real_escape_string($link, $_POST['arrival']);
	$departure = mysqli_real_escape_string($link, $_POST['departure']);
	$capacity = mysqli_real_escape_string($link, $_POST['capacity']);
	$chain = mysqli_real_escape_string($link, $_POST['chain']);
	$stars = mysqli_real_escape_string($link, $_POST['stars']);
	$min_price = mysqli_real_escape_string($link, $_POST['min_price']);
	$max_price = mysqli_real_escape_string($link, $_POST['max_price']);
	$total_room_number = mysqli_real_escape_string($link, $_POST['total_room_number']);
 	$amenities  =$_POST['amenities'];
		
	$N = count($amenities);
 
	if(1 == $N){
		$first=$amenities[0];
	}
	else if(2 == $N){
		$first=$amenities[0];
		$second = $amenities[1];
	}
	else if(3 == $N){
		$first=$amenities[0];
		$second = $amenities[1];
		$third = $amenities[2];
    }
	else if(4 == $N){
		$first=$amenities[0];
		$second = $amenities[1];
		$third = $amenities[2];
		$fourth = $amenities[3];
	}	 

	$sql1= " Hotel_id IN (SELECT Hotel_id FROM hotel WHERE City='$destination')";
	$sql= "SELECT * FROM hotel_room WHERE '$sql1'  ";
 
	 
	$query = mysqli_query($link, $sql);
	
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
	<body>
		<b><h1>Hotel Rooms</h1><br></b>
		<table class="data-table">
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
					
	 
	
	
				</tr>
			</thead>
			<tbody>
			<?php
			$no 	= 1;
			 while ($row = mysqli_fetch_array($query))
			{
				 echo '<tr>
						<td>'.$no.'</td>
						<td>'.$row['Room_id'].'</td>
						<td>'.$row['Hotel_id'].'</td>
						<td>'.$row['View'] .'</td>
						<td>'.$row['Price'] .'</td>
						<td>'.$row['Expandable'] . '</td>
						<td>'.$row['Repairs_need'] . '</td>
						<td>'.$row['Capacity'] . '</td>
						
	
					 </tr>';
				 $no++;
			}?>
			</tbody>
		 
		</table>
	</body>
	</html>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	