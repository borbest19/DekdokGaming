<?php
    session_start();
 ?>
 <!DOCTYPE html>
 <html lang="en">
   <head>
     <meta charset="utf-8">
     <title>Dek-Dok Gaming</title>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.5.3/css/bulma.min.css">
     <link rel="stylesheet" href="assets/style.css">
     <link rel="stylesheet" href="assets/home.js">
     <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
     
   </head>
   <body>
     <header>
        <nav>
          <div class="uppernav-wrapper">
            <div class="logobox">
              <img class="logo"src="DDG/static/assets/LogoWeb/dekdoklogowhite.png" alt="logo">
            </div>
            <div class="rightbar">
                <div  class="loginbar" id="myBtn">
                  <?php
                      if (isset($_SESSION['u_id'])) {
                        echo '            <form action="includes/logout.inc.php" method="POST">
                                          <button type="submit" name="submit" class="loginBtn">ลงชื่อออก</button>
                                          </form>';
                      }
                      else {
                        echo '<button class="loginBtn">ลงชื่อเข้าใช้</button>';
                      }
                   ?>
                   <div id="myModal" class="modal">
                 <!-- Modal content -->
                 <div id="modalcontent"class="modal-content">
                   <div class="modal-header has-text-centered">
                     <span class="close">&times;</span>
                     <img src="DDG/static/assets/LogoWeb/dekdoklogowhite.png">
                   </div>
                   <div class="modal-body">
                     <br><br>
                     <form class="" action="includes/login.inc.php" method="POST">
                       <input type="text" placeholder="  username" name="uid"><br><br>
                       <input type="password" placeholder="  password" name="pwd"><br><br>
                       <button class="login2" type="submit" name="submit">Login</button><br><br><br>
                       <p>You don't have account? <a href="register.php" class="regisbtn" style="bold">Register</a></p>
                     </form>

                     <br><br>
                   </div>
                     <div class="modal-footer">
                     </div>
                   </div>
                 </div>
                </div>
              </div>
            </div>
          <div class="main-wrapper">
            <div class="navmenus is-center">
              <nav class="navbar-tabs">
                <a href="index.php" class="nav-item">หน้าแรก</a>
                <a href="DEKDOK/index.php" class="nav-item">ข่าว</a>
                <a href="ReviewFront/index.php" class="nav-item">รีวิวเกม</a>
                <a href="topchart/index.php" class="nav-item">เกมยอดนิยม</a>
              </nav>

            </div>
            <div class="rightnav">
              <div class="searchbar">
                  <input type="search" name="search" placeholder="       Search..">
              </div>
            </div>

          </div>
        </nav>

      <script>
      // Get the modal
      var modal = document.getElementById('myModal');

      // Get the button that opens the modal
      var btn = document.getElementById("myBtn");

      // Get the <span> element that closes the modal
      var span = document.getElementsByClassName("close")[0];

      // When the user clicks the button, open the modal
      btn.onclick = function() {
        modal.style.display = "block";
      }

      // When the user clicks on <span> (x), close the modal
      span.onclick = function() {
        modal.style.display = "none";
      }

      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
      }
      </script>
        <section>

        </section>
     </header>
   </body>
