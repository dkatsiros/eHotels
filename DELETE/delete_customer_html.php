<html lang="gre">
<?php include 'variables.php'?>
  <head>
    <title>Εισαγωγή ξενοδοχειακής μονάδας</title>
    <?php include "cssCode.php" ?>
	
	
	
	
	
	
	
	<section>
		<br>
	
	
	
	<div class="w3-container w3-blue">
        <h2>Εισάγεται το IRS number του Πελάτη που θέλετε να διαγράψετε:</h2>
    </div>    
   
            <form action="delete_customer.php" method="post" class="w3-container"><br/>
               IRS number:<input type="number" name="irs_number"  class="w3-input" required><br/>                  
                <input type="submit"><br><br>
                <input type="reset"> <br><br>
            </form>
	
	
	</section>
	 
	  
	  
	  
	  
	  <?php include "bottom_buttons.php" ?>
    </div>
    <!--  Wrapper ends-->
  </body>
  </html>