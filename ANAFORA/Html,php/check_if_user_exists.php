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
<?php
    $link = mysqli_connect("127.0.0.1", "root", "", "test");

    if (!$link) {
        echo "Error: Unable to connect to MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
    }
    $irs_number = mysqli_real_escape_string($link,$_POST['irs_number']);
    $sql="SELECT * FROM customer WHERE IRSnumber=$irs_number";
    $result = mysqli_query($link,$sql);
    $num_rows = mysqli_num_rows($result);
    session_start();
    $_SESSION['customer_irs_option']=$irs_number;
    if ($num_rows > 0) {
        
        header("Location: http://localhost/krathsh.php"); /* Redirect browser */
        }
    else {
        echo "Ο IRSnumber που δώσατε δεν αντιστοιχεί σε κάποιον πελάτη.Εγγραφείτε στην σελίδα και ξαναπροσπαθήστε.";
        echo "<script>setTimeout(\"location.href = ' http://localhost/eggrafh_prin_thn_krathsh.php';\",3000);</script>";
        
        }





?>
<?php include "bottom_buttons.php" ?>
    </div>
    <!--  Wrapper ends-->
  </body>
  </html>
