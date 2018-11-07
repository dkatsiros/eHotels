<html lang="gre">
<?php include 'variables.php'?>
  <head>
    <title>Επεξεργασία κράτησης</title>
    <?php include "cssCode.php" ?>
</head>
  <body>
    <div class="wrapper">
      <?php include "top_buttons.php"  ?>
<!--  Top container-->
<?php
    $username=$_POST['uname'];
    $password=$_POST['psw'];
    // admin check
 
     if(($username=="admin" or $username=="ADMIN" ) and $password=="root")
      header('Location: admin.php');
    
      else{
      
    // employee check
    $link = mysqli_connect("127.0.0.1","root","","test");
    if (!$link) {
        echo "Error: Unable to connect to MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
    }
    $sqlExists = "SELECT * FROM employee WHERE IRSnumber='$username' ";
    if($res = $link->query($sqlExists)){
        if (mysqli_num_rows($res) >0 ) {
          header('Location: checkin.php');
        }
    
      else { 
       echo "Τα στοιχεία σύνδεσης σας ήταν λανθασμένα. Ανακατευθύνεστε στην στην αρχική σελίδα.";
       echo "<script>setTimeout(\"location.href = ' http://localhost/login_html.php';\",3000);</script>";
     }
     }
    }
 ?>
<!--  Content changes here-->
<?php include "bottom_buttons.php" ?>
    </div>
    <!--  Wrapper ends-->
  </body>
  </html>