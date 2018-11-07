<html lang="gre">
<?php include 'variables.php'?>
  <head>
    <title>Επιλογές διαχειριστή</title>
    <?php include "cssCode.php" ?>
</head>
  <body>
  
    <div id="wrapper">
      <?php include "top_buttons.php"  ?>
<!--  Top container-->

<!--  Content changes here-->


<section class="backup-wrapper">
  <br>
<div class="w3-container w3-blue">
<h2>Επιλέξτε μία από τις παρακάτω ενέργειες:</h2>
</div>
<div class="left">
  <form action="admin.php" method="post" class="w3-container"><br/>
    
    <a href="delete_hotel_room_html.php" class="dark-button">Διαγραφή Δωματίου</a> <br /><br />
	<a href="delete_hotel_group_html.php" class="dark-button">Διαγραφή Ξενοδοχειακής Μονάδας</a><br /><br />
    <a href="delete_hotel_html.php" class="dark-button">Διαγραφή Ξενοδοχείου</a><br /><br />
    <a href="delete_employee_html.php" class="dark-button">Διαγραφή Υπαλλήλου</a><br /><br />
    <a href="delete_customer_html.php" class="dark-button">Διαγραφή Πελάτη</a><br /><br />
    
   </form>
  
</div>
<div class="right">
<form action="admin.php" method="post" class="w3-container"><br/>
<a href="insert_customer_html.php" class="dark-button">Εισαγωγή Πελάτη</a><br /><br />
    <a href="insert_employee_html.php" class="dark-button">Εισαγωγή Υπαλλήλου</a><br /><br />
    <a href="insert_hotel_html.php" class="dark-button">Εισαγωγή Ξενοδοχείου</a><br /><br />
    <a href="insert_hotel_group_html.php" class="dark-button">Εισαγωγή Ξενοδοχειακής Μονάδας</a><br /><br />
	<a href="insert_hotel_room_html.php" class="dark-button">Εισαγωγή Δωματίου</a><br /><br />
	<a href="insert_rent_html.php" class="dark-button">Εισαγωγή Ενοικίασης</a><br/><br>
</form>
</div>
<div class="mid">
<form action="admin.php" method="post" class="w3-container"><br/>
<a href="update_customer_html.php" class="dark-button">Ενημέρωση Πελάτη</a><br /><br />
    <a href="update_hotel_room_html.php" class="dark-button">Ενημέρωση Δωματίου</a><br /><br />
    <a href="update_hotel_group_html.php" class="dark-button">Ενημέρωση Ξενοδοχειακής Μονάδας</a><br /><br />
    <a href="update_hotel_html.php" class="dark-button">Ενημέρωση Ξενοδοχείου</a><br /><br />
    <a href="update_employee_html.php" class="dark-button">Ενημέρωση Υπαλλήλου</a><br /><br />
    
</form>
</div>
<div class="view">
<form action="admin.php" method="post" class="w3-container"><br/>
<a href="view_customer.php" class="dark-button">Εμφάνιση Πελάτη</a><br /><br />
    <a href="view_hotel_room.php" class="dark-button">Εμφάνιση Δωματίου</a><br /><br />
    <a href="view_hotel_group.php" class="dark-button">Εμφάνιση Ξενοδοχειακής Μονάδας</a><br /><br />
    <a href="view_hotel.php" class="dark-button">Εμφάνιση Ξενοδοχείου</a><br /><br />
    <a href="view_employee.php" class="dark-button">Εμφάνιση Υπαλλήλου</a><br /><br />
	<a href="view_rent.php" class="dark-button">Εμφάνιση Ενοικιάσεων</a><br /><br />
    <a href="view_hotel_email_address.php" class="dark-button">Εμφάνιση Email_addresses Ξενοδοχείων</a><br /><br />
	<a href="view_hotel_phone_number.php" class="dark-button">Εμφάνιση Τηλεφώνων Ξενοδοχείων</a><br /><br />
    <a href="view_hotel_group_phone_number.php" class="dark-button">Εμφάνιση Τηλεφώνων Ξενοδοχείακων Μονάδων</a><br /><br />
	<a href="view_hotel_group_email_address.php" class="dark-button">Εμφάνιση Email_addresses Ξενοδοχείακων Μονάδων</a><br /><br />
    <a href="view_amenities.php" class="dark-button">Εμφάνιση Amenities</a><br /><br />
</form>

</div>
</section>

<!--  Content changes here-->
<?php include "bottom_buttons.php" ?>
    </div>
	
    <!--  Wrapper ends-->
  </body>
  </html>