<html lang="gre">
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
  <head>
        <link rel="stylesheet" type="text/css" href="eHotels.css">
        <link rel="stylesheet" type="text/css" href="checkbox.css" >
        <link rel="stylesheet" type="text/css" href="login.css"  >
        <?php include "variables.php"; $loggedInAs="Log in"; ?>
        
  </head>
  <body>
    <div class="wrapper">
      <!---navigation-->
      <nav class="main-nav">
      <ul>
        <li>
          <a id="eHotelsClass" href="login_html.php"> eHotels </a>
        </li>
       
        <li>
          <!--<a href="">Sign in </a>-->
          <button onclick="document.getElementById('id01').style.display='block'" class="main-nav">Log in</button>
          <div id="id01" class=" modal">

            <form class="modal-content animate" action="entry.php" method="post">
              <div class="imgcontainer">
                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                <img src="./image/maleAvatar.jpg" alt="Avatar" class="avatar">
              </div>

              <div class="container">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>

                <button type="submit">Login</button>
                <label>
                  <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
              </div>

              <div class="container-down" style="background-color:#f1f1f1">
                <ul>
                  <li>
                    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn container-down-left">Cancel</button>
                  </li>
                  <li>
                    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn sign-up-button container-down-right">You don't have an account? Sign up now!</button>
                  </li>
                </ul>
                <!--<span class="psw">Forgot <a href="#">password?</a></span>-->
              </div>
            </form>
          </div>

          <script>
          // Get the modal
          var modal = document.getElementById('id01');

          // When the user clicks anywhere outside of the modal, close it
          window.onclick = function(event) {
              if (event.target == modal) {
                  modal.style.display = "none";
              }
          }
          </script>

        </li>
        <li>
          <a href="support.php">Support</a>
        </li>
      </ul>
     </nav>
<!--  Top container-->
    <section class="top-container">
      <!--  entire search features-->
       <section class="search">
         <!--  left bar of search-->
          <form class="search-adjustment" action="search.php" method="post" >
            <header class="search-now-header">
                  <h1>eHotels</h1>
                  <p>
                    Κάντε αναζήτηση:
                  </p>
            </header>



                <div class="search-bar">
                      <input class="search-bar-edit" type="text" placeholder="Αναζητήστε προορισμό .." name="destination"/>
                </div>
                <div class="search-arrival">
                      <input class="search-ar-de-edit" type="date" placeholder="arriving at:" name="arrival"/>
                </div>
                <div class="search-departure">
                      <input  class="search-ar-de-edit" type="date" placeholder="leaving at:" name="departure" />
                </div>
                <div class="search-people-number">
                    <input class="search-people-number-edit" type="number" min="1" placeholder="How many people:" name="capacity" />
                </div>
                <div class="search-button-press">
                      <input class="search-button-edit" class="search-button" placeholder="Αναζήτηση" type="submit" ></input>
                </div>
       
  </section>

      <!--  Advanced search-->
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
      <div class="advanced-search">
        <div>
        <h3 style="text-decoration:underline;">Περισσότερα Κριτήρια:</h3 >
        </div>
        <br><br>  <ul>  
           <li>
              <div class=""> Αλυσίδα ξενοδοχείων:
                <input type="number" min="0" name="chain">
              </div>
              <br />
            </li>
            <li>
              <div class=""> Αστέρια:
                <input type="number" min="1" name="stars">
              </div>
              <br />
          </li>
          
          <li>
            <div> Εύρος τιμών: 
            
              <input type="number" min="0" name="min_price" placeholder="Ελάχιστη τιμή" />
              <input type="number" max="1000000" name="max_price" placeholder="Μέγιστη τιμή" />
             
            </div>
          </li>
          <br>
          <li>
            <div class=""> Συνολικός αριθμός δωματίων:
              <input type="number" min="1" name="total_room_number" >
            </div>
            <br />
        </li>
        <li>
        <ul> Παροχές:<br><br>
          <li>
          <label class="our-checkbox"> Wifi
            <input type="checkbox" name="amenities[]" value="wifi" >
            <span class="checkmark"></span>
          </li>
          <li>
            <label class="our-checkbox"> TV
              <input type="checkbox" name="amenities[]"  value="tv"  >
              <span class="checkmark"></span>
          </li>
          <li>
            <label class="our-checkbox"> Air_Condition
              <input type="checkbox" name="amenities[]"  value="air_condition"  >
              <span class="checkmark"></span>
          </li>
          <li>
            <label class="our-checkbox"> Private_Pool
              <input type="checkbox" name="amenities[]"  value="private_pool"  >
              <span class="checkmark"></span>
          </li>
        </ul>
        </li> 
        </ul>
      </div>
       <!--  end of advances search-->
    </section>
    </form>
    <!--  Boxes section -->
    <section class="boxes">
    
    <div class="box">
      <h3>Σε περισσότερα από 14 μέρη σε όλη την Ελλάδα!</h3>
    </div>
    <div class="box">
      <h3>Όποιος κι αν είστε, ό,τι κι αν ψάχνετε, έχουμε το ιδανικό κατάλυμα για εσάς</h3>
    </div>
  </section>
<!--  end of boxes-->

<!--  end of info-->
    </div>
    <!--  Wrapper ends-->
  </body>
  </html>
