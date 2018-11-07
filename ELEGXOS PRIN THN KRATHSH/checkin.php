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
<!--  Content changes down-->
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
<table class="data-table">
		<caption> <h1> Reserves to be Rents during Checkin </h1> </caption >
			<thead>
			
				<tr>
                    <th>A/A</th>
					<th>Customer_irs_number</th>
                    <th>Hotel_id</th>
					<th>Room_ID</th>
					<th>Start_date</th>
					<th>Finish_date</th>
					<th>Paid</th>
                    <th>Do Rent</th>
                </tr>
			
			</thead>
			<tbody>
<?php
    $link = mysqli_connect("127.0.0.1","root","","test");
    if (!$link) {
        echo "Error: Unable to connect to MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
         echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
    }
    $no = 1;
    $sql=" SELECT * FROM reserves ";

    $query= mysqli_query($link,$sql);

	while ($row = mysqli_fetch_array($query))
 {      
    $r_id=$row['Hotel_room_Room_id'];
    $sql2 = "SELECT Hotel_id FROM hotel_room WHERE Room_id=$r_id " ;
    $query2 = mysqli_query($link, $sql2);
    $row2= mysqli_fetch_array($query2);	
     echo '<tr>
						
    <td>'.$no.'</td>
    <td >'.$row['Customer_IRSnumber'].'</td>
    <td>'.$row2['Hotel_id'] . '</td> 
    <td>'.$row['Hotel_room_Room_id'].'</td>
    <td>'.$row['Start_date'] .'</td>
    <td>'.$row['Finish_date'] . '</td>
    <td>'.$row['Paid'] .'</td>
    <td> <a href="to_be_rent.php"> Click </a> </td>		
		

     
 </tr>';
 
$no++;
 }
?>
	</tbody>
		 
         </table>
         </div>


 
    </section>
    <br><br><br><br><br><br><br><br><br><br><br><br>
    <!--  Content changes up-->
    <?php include "bottom_buttons.php" ?>
        </div>
        <!--  Wrapper ends-->
      </body>
      </html>
