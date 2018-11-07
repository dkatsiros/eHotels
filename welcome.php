<html>
<body>
<?php
echo  "Welcome " . $_POST["name"]; ?> <br> 
<?php   
 
    if ($_POST["name"]=="admin") {
        header("Location: http://localhost/admin.php"); /* Redirect browser */
        exit();
    }
    else
        header("Location: http://localhost/user.php"); /* Redirect browser */
        exit();
?>


</body>
</html>