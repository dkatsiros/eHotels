<html lang="gre">
<?php include 'variables.php'?>
  <head>
    <title>Support</title>
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
<h2>Επικοινωνία:</h2>
</div>
    <ul>
    <br>
      <li>
      <a class="white-button" href="https://mailto:<?php echo $email1; ?>"> <?php  echo "$name1: $email1"; ?></a>
      </li>
      <br><br>
      <li>
      <a class="white-button" href="https://mailto:<?php echo "$email2"; ?>"><?php  echo"$name2: $email2" ?></a>
      </li>
      <br><br>
      <li>
      <a class="white-button" href="https://mailto:<?php echo "$email3"; ?>"><?php  echo"$name3: $email3" ?></a>
      </li>
      <br><br>
      
      
    </ul>

<div>

<div>
</section>

<!--  Content changes here-->
<?php include "bottom_buttons.php" ?>
    </div>
	
    <!--  Wrapper ends-->
  </body>
  </html>