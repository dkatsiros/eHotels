<html lang="gre">
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="w3.css">  </head>

  <head>
    <title>Εισαγωγή Ξενοδοχείου</title>
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

  
  $stars = mysqli_real_escape_string($link,$_POST['stars']);
  $hotel_phone_number = mysqli_real_escape_string($link,$_POST['hotel_phone_number']);
  $hotel_email_address = mysqli_real_escape_string($link,$_POST['hotel_email_address']);
  $Street = mysqli_real_escape_string($link,$_POST['street']);
  $number = mysqli_real_escape_string($link,$_POST['number']);
  $postal_code = mysqli_real_escape_string($link,$_POST['postal_code']);
  $city = mysqli_real_escape_string($link,$_POST['city']);
  $number_of_rooms = mysqli_real_escape_string($link,$_POST['hotel_number_of_rooms']);
  $hotel_group_id = mysqli_real_escape_string($link,$_POST['hotel_group_id']);
  
  $sql1="INSERT INTO hotel (Stars,Number_of_rooms,Street
                             ,Number,City,Postal_code,Hotel_group_id)
         VALUES ('$stars','$number_of_rooms','$Street'
                ,'$number','$city','$postal_code','$hotel_group_id')";

  if(mysqli_query($link,$sql1)){
    echo "New record created successfully\r\n";
  }
  else {
    echo "Error:" . $sql1 . "<br>" . mysqli_error($link);
  }
  
  $sql2= "SELECT MAX(Hotel_id) FROM hotel";
    
    $result = mysqli_query($link,$sql2);
    $value = mysqli_fetch_array($result);
     
    
    $sql3= "INSERT INTO hotel_phone_number (Hotel_Hotel_id,Phone_number)
        VALUES ('$value[0]','$hotel_phone_number')";
    if (mysqli_query($link, $sql3)) {
        echo "New record created successfully\r\n"; 
      }   
      else {
          echo "Error: " . $sql3 . "<br>" . mysqli_error($link);
            }
    
    $sql4= "INSERT INTO hotel_email_address (Hotel_Hotel_id,Email_address)
        VALUES ('$value[0]','$hotel_email_address')";
    
    if (mysqli_query($link, $sql4)) {
        echo "New record created successfully\r\n"; 
      }   
      else {
          echo "Error: " . $sql4 . "<br>" . mysqli_error($link);
            }        
    mysqli_close($link);

?>
<br /><br />
<a href="insert_hotel.html" class="white-button">Επιστροφή στην εισαγωγή ξενοδοχείων</a>
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