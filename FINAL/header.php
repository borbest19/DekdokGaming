<?php
    session_start();
 ?>
   <!DOCTYPE html>
   <html lang="en">
     <head>
       <meta charset="utf-8">
       <title>Dek-Dok Gaming</title>
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.5.3/css/bulma.min.css">
       <link rel="stylesheet" href="base.css">
       <link rel="stylesheet" href="home.js">
       <link rel="icon" href="/assets/Berm.ico">
       <link rel="stylesheet" type="text/css" href="slick/slick.css" />
       <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />
       <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
     </head>
     <header>
     	<style>
      body{
        background-color: #202020;
      }

      .uppernav-wrapper{
        height: 150px;
        width: auto;
        background-color: #202020;
      }

      .main-wrapper{
        height: 60px;
        width: auto;
        background-color: #8c000a;
      }

      /*logo*/
      .logo {
        height: 150px;
        width: auto;
        margin-left: 60px;
      }

      div .logobox{
        float: left;
      }

      /*Search box*/

      input[type=search] {
        width: 40px;
        box-sizing: border-box;
        border: 1px hidden #8c000a;
            border-radius: 10px;
        font-color: #202020;
        font-size: 16px;
        background-image:url(images/search.png);
        background-size: 33px;
        background-color: #8c000a;
        background-repeat: no-repeat;
        height: 40px;
        -webkit-transition: width 0.4s ease-in-out;
        transition: width 0.1 s ease-in-out;
        cursor: pointer;
        margin-top: 28px;
      }
      input[type=search]:hover{
        background-color: #65000A;
      }

        input[type=search]:focus {
          width: 200px;
          border: 2px solid #65000A ;
          background-color: #C41725;
          background-image: none;
          cursor: grab;
      }
      input:focus{
        cursor: grab !important;
      }

      .rightbar{
        float: right;
        margin-right: 50px;
        height: 40px;
        width: 200px;
      }

      /*Loginbtn*/
      .modal {
          display: none; /* Hidden by default */
          position: fixed; /* Stay in place */
          z-index: 1; /* Sit on top */
          padding-top: 100px; /* Location of the box */
          left: 0;
          top: 0;
          width: 100%; /* Full width */
          height: 100%; /* Full height */
          overflow: auto; /* Enable scroll if needed */
          background-color: rgb(0,0,0); /* Fallback color */
          background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
      }

      /* Modal Content */
      .modal-content {
          position: relative;
          background-color: #fefefe;
          margin: auto;
          padding: 0;
          box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
          -webkit-animation-name: animatetop;
          -webkit-animation-duration: 0.4s;
          animation-name: animatetop;
          animation-duration: 0.4s
      }

      /* Add Animation */
      @-webkit-keyframes animatetop {
          from {top:300px; opacity:0}
          to {top:0; opacity:1}
      }

      @keyframes animatetop {
          from {top:300px; opacity:0}
          to {top:0; opacity:1}
      }

      /* The Close Button */
      .close {
          color: white;
          float: right;
          font-size: 28px;
          font-weight: bold;
      }

      .close:hover, .close:focus {
          color: #000;
          text-decoration: none;
          cursor: pointer;
      }

      .modal-header {
          padding: 2px 16px;
          background-color: #202020;
          color: white;
          width: 80%;
          height: auto;
          align-items: center;
          width: 100%;
          height: auto;
      }
      .modal-header img {
        height: auto;
        width: 300px;
      }
      .modal-body {
        padding: 2px 16px;
        background-color: #8c0009;
        font: 24px Superspace;
        color: #ffffff;
        text-align: center;
        width: 100%;
        height: auto;

      }
      div #modalcontent{
            border-radius: 20px;
      }
      .modal-content input{
        border: 0px;
        background-color: #ffffff;
        border-radius: 5px;
        height: 30px;
      }

      .modal-footer {
          padding: 2px 16px;
          background-color: #202020;
          color: white;
          width: 100%;
          height: 150px;
      }
      .loginBtn{
        cursor: pointer;
        height: 40px;
        width: 100px;
        margin-left: 20px;
        font: 20px Superspace;
        font-style: bold;
        color: #ffffff;
        border: 0px;
        background-color: #8c000a;
        border-radius: 10px;
      }

      .loginbar{
        margin-top: 60px;
          float:right;
      }

      .rightnav{
        float: right;
        margin-right: 30px;
        margin-bottom: 30px;
      }

      .searchbar{
        margin-top: -50px;
        width: auto;
      }
      .navmenus{
        height: 30px;
        background: #8c0009;
      }
      nav a {
       width: 200px;
       color: white !important;
       display: block;
       text-decoration: none;
       font: 25px Superspace !important;
       padding: 0px !important;
       border-radius: 5px;
       font-weight: bold !important;
         margin-left:5%;
      }

      nav a:hover {
       margin-top: 5px;
       color: white;
       background: #232323;
       transition: 0.3s
      }

      .login2 {
        background-color: #C4331E;
        height: 30px;
        width: 80px;
        font: 25px Superspace;
        font-style: bold;
        border: 0px;
        border-radius: 10px;
      }
      .loginBtn:hover{
        opacity: 0.5;
        transition: 0.3s;
      }
      .login2:hover{
        opacity: 0.5;
        transition: 0.3s;
      }
      .bodyScope {
        width: auto;
        height: auto;
        margin: 0 auto;
      }

       .footer{
         background: #8c0009;
         margin-top: 2rem;
       }
       .footer .container{
         width: auto;
         height: 15px;
       }
</style>
   <body>
     <header>
        <nav>
          <div class="uppernav-wrapper">
            <div class="logobox">
              <img class="logo"src="assets/dekdoklogowhite.png" alt="logo">
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
                     <img src="assets/dekdoklogowhite.png">
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
