<!DOCTYPE html>
<html>
<head>
    <title> e-Hotel </title>
</head>
<body>
    <header>
        <h1>e-Hotels </h1>
    </header>
    <?php
    $link = mysqli_connect("127.0.0.1", "root", "", "test");

    if (!$link) {
        echo "Error: Unable to connect to MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
    }
    $street = mysqli_real_escape_string($link, $_POST['street']);
    $number = mysqli_real_escape_string($link, $_POST['number']);
    $postal_code = mysqli_real_escape_string($link, $_POST['postal_code']);
    $city = mysqli_real_escape_string($link, $_POST['city']);
    $first_name = mysqli_real_escape_string($link, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($link, $_POST['last_name']);
    $social_security_number= mysqli_real_escape_string($link, $_POST['social_security_number']);
    $first_registration=date('Y-m-d', time());
    
    $sql = "INSERT INTO customer (SSN,First_name,Last_name,Street,Number,City,Postal_code,First_registration)
        VALUES  (' $social_security_number','$first_name','$last_name','$street','$number','$city','$postal_code','$first_registration')";
    
    if (mysqli_query($link, $sql)) {
      echo "New record created successfully\r\n";
    }   
    else {
        echo "Error: " . $sql . "<br>" . mysqli_error($link);
       
    }
    
    mysqli_close($link);
    ?>
    <a href="Customer.html">Επιστροφή στην εισαγωγή στοιχείων πελάτη</a>
    <img src="City_Landscape_Background.jpg" alt="Background" style="width:1300px;height:400px;">
</body>
</html>