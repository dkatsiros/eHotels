<html lang="gre">
<?php include 'variables.php'?>
  <head>
    <?php include "cssCode.php" ?>
</head>
  <body>
    <div class="wrapper">
      <?php include "top_buttons.php"  ?>
	
	
	
	<section>
		<br>
	
	
	
	<div class="w3-container w3-blue">
        <h2>Εισάγεται το ID του Ξενοδοχείου που θέλετε να διαγράψετε:</h2>
    </div>    
   
            <form action="delete_hotel.php" method="post" class="w3-container"><br/>
               Hotel Ιd:<input type="number" name="hotel_id"  class="w3-input" required><br/>                  
                <input type="submit"><br><br>
                <input type="reset"> <br><br>
            </form>
	
	
	</section>
	 
	  
	  
	  
	  
	  <?php include "bottom_buttons.php" ?>
    </div>
    <!--  Wrapper ends-->
  </body>
  </html>