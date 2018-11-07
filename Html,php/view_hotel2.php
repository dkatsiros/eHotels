<html lang="gre">
<?php include 'variables.php'?>
  <head>
    <title>Εμφάνιση Ξενοδοχείων</title>
    <?php include "cssCode.php" ?>
</head>
  <body>
    <div class="wrapper">
      <?php include "top_buttons.php"  ?>

<html>
<body>
<?php
$con = mysqli_connect("127.0.0.1","root","","test");
			if (mysqli_connect_errno())
			{
				die('Could not connect: ' . mysqli_error($con));
			}
$result = mysqli_query($con,"SELECT * FROM hotel");

echo "<table align = 'center'>";
				echo "<tr>";
				echo "<td>";echo "<strong>";echo "Hotel_ID";echo "</strong>";echo "</td>";echo"</td>"; 
				echo "<td>";echo "<strong>";echo "Hotel_Group_ID";echo "</strong>";echo "</td>";echo"</td>"; 				
				echo "<td>";echo "<strong>";echo "Stars";echo "</strong>";echo "</td>"; echo"</td>";
				echo "<td>";echo "<strong>";echo "Number_of_Rooms";echo "</strong>";echo "</td>";echo"</td>";
				echo "<td>";echo "<strong>";echo "Street";echo "</strong>";echo "</td>";         echo"</td>";
				echo "<td>";echo "<strong>";echo "Number";echo "</strong>";echo "</td>"; echo"</td>";
				echo "<td>";echo "<strong>";echo "Postal_Code";echo "</strong>";echo "</td>"; echo"</td>";
				echo "<td>";echo "<strong>";echo "City";echo "</strong>";echo "</td>"; echo"</td>";
				echo "</tr>";
			
				
             
				while($row = mysqli_fetch_array($result)) {
					echo "<tr>";
					echo "<td>"; echo $row['Hotel_id']; echo "</td>"; echo"</td>";
					echo "<td>"; echo $row['Hotel_group_id']; echo "</td>";echo"</td>";
					echo "<td>";echo $row['Stars'];echo "</td>"; echo"</td>";
					echo "<td>";echo $row['Number_of_rooms'];echo "</td>";echo"</td>";
					echo "<td>";echo $row['Street'];echo "</td>";        echo"</td>";
					echo "<td>";echo $row['Number'];echo "</td>"; echo"</td>";
					echo "<td>";echo $row['Postal_code'];echo "</td>"; echo"</td>";
					echo "<td>";echo $row['City'];echo "</td>"; echo"</td>";
					echo "</tr>";
				}
				echo "</table>";
				?>
				</body>
				</html>
				
				<?php include "bottom_buttons.php" ?>
    </div>
    <!--  Wrapper ends-->
  </body>
  </html>