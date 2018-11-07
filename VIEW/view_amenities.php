<html lang="gre">
<?php include 'variables.php'?>
  <head>
    <title>Εμφάνιση Amenities των Δωματίων</title>
    <?php include "cssCode.php" ?>
</head>
  <body>
    <div class="wrapper">
      <?php include "top_buttons.php"  ?>

<html>
<body>
<?php
$conn = mysqli_connect("127.0.0.1","root","","test");
			if (mysqli_connect_errno())
			{
				die('Could not connect: ' . mysqli_error($con));
			}
			
		
		
		
$sql = "SELECT * 
			FROM amenities";

$query = mysqli_query($conn, $sql);

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
	<b><h1>Hotels</h1><br></b>
	<table class="data-table">
		<thead>
			<tr>
				<th>A/A</th>
				<th>Amenities</th>
				<th>Room_id</th>
				
 


			</tr>
		</thead>
		<tbody>
		<?php
		$no 	= 1;
 		while ($row = mysqli_fetch_array($query))
		{
 			echo '<tr>
					<td>'.$no.'</td>
					<td>'.$row['Amenities_id'].'</td>
					<td>'.$row['Room_id'].'</td>
					

 				</tr>';
 			$no++;
		}?>
		</tbody>
	 
	</table>
</body>
</html>
















 