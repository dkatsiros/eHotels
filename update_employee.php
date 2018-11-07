<html lang="gre">
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="w3.css">  </head>

  <head>
    <title>Ενημέρωση εργαζομένου</title>
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

  $first_name = mysqli_real_escape_string($link,$_POST['first_name']);
  $last_name = mysqli_real_escape_string($link,$_POST['last_name']);
  $irs_number = mysqli_real_escape_string($link,$_POST['irs_number']);
  $SSN = mysqli_real_escape_string($link,$_POST['ssn']);
  $Street = mysqli_real_escape_string($link,$_POST['street']);
  $number = mysqli_real_escape_string($link,$_POST['number']);
  $postal_code = mysqli_real_escape_string($link,$_POST['postal_code']);
  $city = mysqli_real_escape_string($link,$_POST['city']);

  $sql="UPDATE employee SET SSN='$SSN',First_name='$first_name',
                            Last_name='$last_name', Street='$Street',
                            Number='number', City='$city',
                            Postal_code='$postal_code'
         WHERE IRSnumber='$irs_number'";

  if(mysqli_query($link,$sql)){
    echo "Η ενημέρωση υπαλλήλου πραγματοποιήθηκε με επιτυχία.\r\n";
  }
  else {
    echo "Error:" . $sql . "<br>" . mysqli_error($link);
  }

?>
<br /><br />
<a href="update_employee.html" class="white-button">Επιστροφή στην ενημέρωση υπαλλήλων</a>
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
