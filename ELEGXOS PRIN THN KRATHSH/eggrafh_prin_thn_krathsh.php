<html lang="gre">
<?php include 'variables.php'?>
  <head>
     <?php include "cssCode.php" ?>
</head>
  <body>
    <div class="wrapper">
      <?php include "top_buttons.php"  ?>
<!--  Top container-->
    
<section>
<br>
<div class="w3-container w3-blue">
    <h2>Πριν προχωρήσετε σε κράτηση θα πρέπει να εγγραφείτε. Εάν είστε ήδη εγγεγραμμένος κάντε κλικ  
        <h1> <a href="validation.php" > εδώ</a> </h1>
    </h2>
</div>
    <br> <br>
    <div class="w3-container w3-blue">
        <h2>Εισάγεται τα στοιχεία σας:</h2>
    </div>
   <form action="krathsh.php" method="post" class="w3-container"><br/>
                <?php 
                session_start();
                
                 $reserve_option=$_GET['reserve_option'];
                 $_SESSION['reserve_option']=$reserve_option;
                 $_SESSION['room_id_option']=$_SESSION['Room_id['.$reserve_option.']'];  
                 echo $_SESSION['room_id_option'];
                 ?><br><br> 
                IRS_number: <input type="number" name="irs_number" class="w3-input" required> <br>
                Street: <input type="text" name="street"  class="w3-input" required><br/>      
                Number: <input type="number" name="number"  class="w3-input" required><br/>  
                Postal_Code: <input type="text" name="postal_code"  class="w3-input" required><br/> 
                City: <input type="text" name="city"  class="w3-input" required><br/> 
                First_name: <input type="text" name="first_name"  class="w3-input" required><br/>
                Last_name: <input type="tel" name="last_name"  class="w3-input" required><br/>
                Social_Security_Number:<input type="number" name="social_security_number"  class="w3-input" required><br/> 
                <input type="submit" class="dark-button" value="Eισαγωγή"> <br><br>
                <input type="reset" class="dark-button" value="Reset"> <br><br>
    </form>














<?php include "bottom_buttons.php" ?>
    </div>
    <!--  Wrapper ends-->
  </body>
  </html>
