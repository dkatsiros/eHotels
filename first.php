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

    /*echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;

    echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;*/

    ?>
    Eισάγεται τα στοιχεία σύνδεσης σας:<br>
 
    <table> 
        <tr>
            <td>
                <form action="welcome.php" method="post"><br>
                Name: <input type="text" name="name"><br>
            </td>
            <td>  <br>
                Password: <input type="password" name="password"><br>
            </td>
            <td><br>
            <input type="submit">
            </td>
        </tr>
    </table>
    </form>
    <?php
    mysqli_close($link);
    ?>
    <img src="City_Landscape_Background.jpg" alt="Background" style="width:1200px;height:600px;">

<br> 
 


</body>
<html>