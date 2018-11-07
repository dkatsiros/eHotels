<html lang="gre">
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="w3.css">  </head>

  <head>
    <title>Εισαγωγή εργαζομένου</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="eHotels.css">
        <link rel="stylesheet" type="text/css" href="checkbox.css" >
  <body>
    <div class="wrapper">
      <!---navigation-->
      <nav class="main-nav">
      <ul>
        <li>
          <a id="eHotelsClass" href=""> eHotels </a>
        </li>
        <li>
          <a href="">Who are we? </a>
        </li>
        <li>
          <a href="">Sign in </a>
        </li>
        <li>
          <a href="">Continue as a guest </a>
        </li>
        <li>
          <a href="">Support</a>
        </li>
      </ul>
     </nav>
<!--  Top container-->





<!--  Content changes here-->


<section class="backup-wrapper">
      <br>
<div class="w3-container w3-blue backup-wrapper">
  <?php
  $link = mysqli_connect("127.0.0.1","root","","test");
  if (!$link) {
      echo "Error: Unable to connect to MySQL." . PHP_EOL;
      echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
      echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
  exit;
  }

  $irs_number = mysqli_real_escape_string($link,$_POST['irs_number']);

  $sql="DELETE FROM employee WHERE IRSnumber='$irs_number'";

  if(mysqli_query($link,$sql)){
    echo "Deleted successfully\r\n";
  }
  else {
    echo "Error:" . $sql . "<br>" . mysqli_error($link);
  }

?>
<br /><br />
<a href="delete_employee.html" class="white-button">Επιστροφή στην διαγραφή υπαλλήλων</a>
<br /><br /><br />
<a href="admin.html" class="white-button">Επιστροφή στις επιλογές</a>
<br /><br /><br />
<a href="eHotels.html" class="white-button">Επιστροφή στην αρχική του eHotels</a>
</section>






<!--  Content changes here-->

<br /><br /><br />
    </section>
    <!--  Boxes section -->
    <section class="boxes">
    <div class="box">
      <h3>why to choose us?</h3>
    </div>
    <div class="box">
      <h3>in over 1000 cities in the world!</h3>
    </div>
    <div class="box">
      <h3>Continious communication with our hotels</h3>
    </div>
  </section>
<!--  end of boxes-->
<!--  info section-->
<section class="info">
  <div>
    <p>
      This is just info
    </p>
  </div>
</section>
<!--  end of info-->
    </div>
    <!--  Wrapper ends-->
  </body>
  </html>
