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
  $start_date = mysqli_real_escape_string($link,$_POST['start_date']);
  $finish_date = mysqli_real_escape_string($link,$_POST['finish_date']);
  $position = mysqli_real_escape_string($link,$_POST['position']);
  $hotel_id = mysqli_real_escape_string($link,$_POST['hotel_id']);

  //check if hotel_id exists
  $sqlExists = "SELECT * FROM Hotel WHERE Hotel_id='$hotel_id'";
  if($res = $link->query($sqlExists)){
    if(mysqli_num_rows($res) > 0){
        $sql="INSERT INTO employee (IRSnumber,SSN,First_name,Last_name,Street
                                   ,Number,City,Postal_code)
               VALUES ('$irs_number','$SSN','$first_name','$last_name','$Street'
                      ,'$number','$city','$postal_code')";

        $sqlWORKS = "INSERT INTO works (Employee_IRSnumber,Hotel_Hotel_id,
                                        Start_date,Position,Finish_date)
                      VALUES      ('$irs_number','$hotel_id','$start_date',
                                    '$position','$finish_date')
                                        ";

        if( mysqli_query($link,$sql)){
          echo "New record created successfully\r\n";
        }
        else {
          echo "Error:" . $sql . "<br>" . mysqli_error($link);
        }
       if(mysqli_query($link,$sqlWORKS)) {
         echo" New record created successfully\r\n";
       }
       else {
         echo "Error:" .$sql . "<br>" .mysqli_error($link);
       }
      }
else {
    //Hotel_id doesnt exist
    echo "Το Hotel id που καταχωρήσατε δεν υπάρχει.<br /><br />";
}
}
?>
<br /><br />
<a href="insert_employee_html.php" class="white-button">Επιστροφή στην εισαγωγή υπαλλήλων</a>
<br /><br /><br />
<a href="admin.php" class="white-button">Επιστροφή στις επιλογές</a>
<br /><br /><br />
<a href="login_html.php" class="white-button">Επιστροφή στην αρχική του eHotels</a>
</section>






<?php include "bottom_buttons.php" ?>
    </div>
    <!--  Wrapper ends-->
  </body>
  </html>
