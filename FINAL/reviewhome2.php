<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Dek-Dok Gaming</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.5.3/css/bulma.min.css">
    <link rel="stylesheet" href="/base.css">
    <link rel="stylesheet" href="/home.js">
    <link rel="icon" href="/assets/Berm.ico">
    <link rel="stylesheet" type="text/css" href="slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  </head>
  <header>
  	<style>
  	input[type=search] {
  		width: 40px;
  		box-sizing: border-box;
  		border: 2px hidden #8c000a;
  		font-size: 16px;
  		background-image:url(/assets/images/search.png);
  		background-color: #202020;
  		background-repeat: no-repeat;
  		height: 40px;
  		-webkit-transition: width 0.4s ease-in-out;
  		transition: width 0.4s ease-in-out;
  		cursor: pointer;
  	}

  	input[type=search]:focus {
  		width: 200px;
  		border: solid;
  		background-color: #505050;
  		background-image: none;
  		cursor: grab;
  	}
  	input:focus{
  	cursor: grab !important;
  	}
  	</style><style>
  	input[type=search] {
  	width: 40px;
  	box-sizing: border-box;
  	border: 2px hidden #8c000a;
  	font-size: 16px;
  	background-image:url(/assets/search.png);
  	background-color: #202020;
  	background-repeat: no-repeat;
  	height: 40px;
  	-webkit-transition: width 0.4s ease-in-out;
  	transition: width 0.4s ease-in-out;
  	cursor: pointer;
    margin-top: 28px;
  	}

  	input[type=search]:focus {
  	width: 200px;
  	border: solid;
  	background-color: #505050;
  	background-image: none;
  	cursor: grab;
  	}
  	input:focus{
  	cursor: grab !important;
  	}
  	</style>
    <style>
/* The Modal (background) */
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
    border: 1px solid #888;
    width: 80%;
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

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.modal-header {
    padding: 2px 16px;
    background-color: #202020;
    color: white;
    align-items: center;
    width: autop;
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
  width: auto;
  height: auto;
}
.modal-footer {
    padding: 2px 16px;
    background-color: #202020;
    color: white;
    width: auto;
    height: 150px;
}
.loginBtn{
  cursor: pointer;
}
</style>
    <div class="column is-multiline">
      <div class="headcontainer">
        <!--ถ้าใช้ id จะอ้าง java script ได้-->
        <br>
        <div class="head">
          <div class="columns is-multiline">
            <div class="column is-4" align="right" style="margin-top:-50px">
              <a ahref="/index.html">
              <img  src="/assets/dekdoklogowhite.png" alt="" width="270" height="auto">
              </a>
              <!--แทรกรูป กำหนดขนาด-->
            </div>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            <div class="column is-5" align="right">
  <br>
    <input type="search" name="search" placeholder="       Search..">
              </div>
    <div class="column is-2" align="left" >
      <br><br>
      <div class="loginBtn">
      <div id="myBtn"><img src="/assets/log-in.png" alt="" width="100px"></div>
      </div>
          </div>
        </div>
      </div>
      </div>
    </div>
    <div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header has-text-centered">
      <span class="close">&times;</span>
      <img src="/assets/dekdoklogowhite.png">
    </div>
    <div class="modal-body">
      <br><br>
      <p>&nbsp;&nbsp;Username&nbsp;&nbsp;&nbsp;<input type="text" placeholder="username" name="un"></p><br>
      <p>&nbsp;&nbsp;Password&nbsp;&nbsp;&nbsp;<input type="password" placeholder="Password" name="psw"></p><br>
      <button>Login</button><br><br><br>
      <p>You don't have account? Just click ----> <a href="/register.html" style="bold">Register</a></p>
      <br><br>
    </div>
    <div class="modal-footer">

    </div>
  </div>

</div>

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


    <div class="navcontainer">
      <div class="nav-center">
        <nav class="navbar-tabs">
          <a href="/index.html" class="nav-item">หน้าแรก</a>
          <a href="/newshome.html" class="nav-item">ข่าว</a>
          <a href="/reviewhome.html" class="nav-item">รีวิวเกม</a>
          <a href="/topchart.html" class="nav-item">เกมยอดนิยม</a>

        </nav>
      </div>
    </div>
  </header>
  <body>





    <section class="section we-present">
      <div style="width: 1100px; margin: 0 auto; overflow: hidden;">
        <div class="container">
          <b2>รีวิวจากเว็บมาสเตอร์</b2>
          <a href="/ReviewFront/reviewmaster.html" target="_blank">
            <font face="Superspace" size="4" color="8c000a"><b>ดูรีวิวจากเว็บมาสเตอร์ทั้งหมด</b></a>
          <div class="line" style="height: 5px;"></div>
        </div>
      </div>
    </section>
    <section class="section">


      <div class="topcontainer">
        <div class="columns is-multiline is-centered" style="margin-top:-40px;">

          <div class="top1"><a href="\ReVewwwww\Dad05\index.html"> <img class="image is-three-fifths is-marginless"src="\ReVewwwww\assets\images\BBV_Night_Strait_Princesses_1767_Full - Copy.png" width=100%></a>
          </div>

          <div class="top2  is-multiline">

            <div class="top2_1 is-marginless"><a href="\ReVewwwww\Dad03\index.html"><img class="image is-marginless"src="\ReVewwwww\assets\images\need-for-speed-2015.jpg" width=100%></a>
            </div>


            <div class="top2_2 is-marginless"><a href="\ReVewwwww\Dad02\index.html"><img class="image is-marginless"src="/ReVewwwww/assets/images/Hyperdimension_Neptunia_Re_Birth1.jpg"   width=100%></a>
            </div>

          </div>
          <div class="top3 is-multiline">

            <div class="top3_1 is-marginless"><a href="\ReVewwwww\Dad04\index.html"><img class="image is-marginless"src="/ReVewwwww/assets/images/marco.jpg" width=100%></a>
            </div>


            <div class="top3_2 is-marginless"><a href="\ReVewwwww\Dad01\index.html">
        <img class="image is-marginless"src="/ReVewwwww/assets/images/B4.jpg" width="100%"></a>
            </div>

          </div>
        </div>

      </div>
    </section>
    <section>
      <section class="section we-present">
        <div class="container">
          <b2>รีวิวจากผู้ใช้ทั้งหมด</b2>

          <div class="line" style="height: 5px;"></div>

        </div>
        </div>
      </section>
      </br>
      <div class="container">
        <div class="columns is-multiline">
          <div class="column is-one-third">
            <a href="\ReviewUser\game10.html">
            <div class="card">
              <div class="column">


                  <figure class="image is-5by3" height="720 px">
                    <img src="assets/akiba.jpg" alt="AKBS">
                  </figure>


              </div>
              <div class="card-content">
                <div class="columns is-multiline">
                  <div class="column">

                    <figure class="image is-16x16">
                      <h1><img src="/DDG/static/assets/images/pic/underline-button.png"></h1>
                    </figure>

                  </div>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <div class="column has-text-right">
                    <figure class="image is-16x16">
                      <h1><img src="/DDG/static/assets/images/pic/star.png"></h1>
                    </figure>
                  </div>
                </div>
              </div>
            </div></a>
          </div>

          <div class="column is-one-third">
          <a href="\ReviewUser\game11.html">  <div class="card">
              <div class="column">


                  <figure class="image is-5by3" height="720 px">
                    <img src="assets/CM3D2.COver.jpg" alt="CM3D2">
                  </figure>


              </div>
              <div class="card-content">
                <div class="columns is-multiline">
                  <div class="column">
                    <figure class="image is-16x16">
                      <h1><h1><img src="/DDG/static/assets/images/pic/underline-button.png"></h1></h1>
                    </figure>
                  </div>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <div class="column has-text-right">
                    <figure class="image is-16x16" height="720 px">
                      <img src="/DDG/static/assets/images/pic/star.png" alt="user 2.jpg">
                    </figure>
                  </div>
                </div>
              </div>
            </div></a>
          </div>


          <div class="column is-one-third">
            <a href="\ReviewUser\game12.html"><div class="card">
              <div class="column">


                  <figure class="image is-5by3" height="720 px">
                    <img src="assets/ung.jpg" alt="ung">
                  </figure>


              </div>
              <div class="card-content">
                <div class="columns is-multiline">
                  <div class="column">
                    <figure class="image is-16x16">
                      <h1><img src="/DDG/static/assets/images/pic/underline-button.png"></h1>
                    </figure>

                  </div>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <div class="column has-text-right">
                    <figure class="image is-16x16" height="720 px">
                      <img src="/DDG/static/assets/images/pic/star.png" alt="user 2.jpg">
                    </figure>
                  </div>
                </div>
              </div>
            </div></a>
          </div>

          <div class="column is-one-third">
            <a href="\ReviewUser\game13.html"><div class="card">
              <div class="column">


                  <figure class="image is-5by3" height="720 px">
                    <img src="assets/GTASan.jpg" alt="GTASAN">
                  </figure>


              </div>
              <div class="card-content">
                <div class="columns is-multiline">
                  <div class="column">
                    <figure class="image is-16x16">
                      <h1><img src="/DDG/static/assets/images/pic/underline-button.png"></h1>
                    </figure>

                  </div>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <div class="column has-text-right">
                    <figure class="image is-16x16" height="720 px">
                      <img src="/DDG/static/assets/images/pic/star.png" alt="user 2.jpg">
                    </figure>
                  </div>
                </div>
              </div>
            </div></a>
          </div>

          <div class="column is-one-third">
          <a href="\ReviewUser\game14.html">  <div class="card">
              <div class="column">


                  <figure class="image is-5by3" height="720 px">
                    <img src="assets/bf.jpg" alt="BF1">
                  </figure>


              </div>
              <div class="card-content">
                <div class="columns is-multiline">
                  <div class="column">
                    <figure class="image is-16x16">
                      <h1><img src="/DDG/static/assets/images/pic/underline-button.png"></h1>
                    </figure>

                  </div>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <div class="column has-text-right">
                    <figure class="image is-16x16" height="720 px">
                      <img src="/DDG/static/assets/images/pic/star.png" alt="user 2.jpg">
                    </figure>
                  </div>
                </div>
              </div>
            </div></a>
          </div>

          <div class="column is-one-third">
            <a href="\ReviewUser\game15.html"><div class="card">
              <div class="column">


                  <figure class="image is-5by3" height="720 px">
                    <img src="assets/dov.jpg" alt="DOAVV">
                  </figure>


              </div>
              <div class="card-content">
                <div class="columns is-multiline">
                  <div class="column">
                    <figure class="image is-16x16">
                      <h1><img src="/DDG/static/assets/images/pic/underline-button.png"></h1>
                    </figure>

                  </div>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <div class="column has-text-right">
                    <figure class="image is-16x16" height="720 px">
                      <img src="/DDG/static/assets/images/pic/star.png" alt="user 2.jpg">
                    </figure>
                  </div>
                </div>
              </div>
            </div></a>
          </div>

          <div class="column is-one-third">
            <a href="\ReviewUser\game16.html"><div class="card">
              <div class="column">


                  <figure class="image is-5by3" height="720 px">
                    <img src="assets/fxv.png" alt="FFXV">
                  </figure>


              </div>
              <div class="card-content">
                <div class="columns is-multiline">
                  <div class="column">
                    <figure class="image is-16x16">
                      <h1><img src="/DDG/static/assets/images/pic/underline-button.png"></h1>
                    </figure>

                  </div>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <div class="column has-text-right">
                    <figure class="image is-16x16" height="720 px">
                      <img src="/DDG/static/assets/images/pic/star.png" alt="user 2.jpg">
                    </figure>
                  </div>
                </div>
              </div>
            </div></a>
          </div>

          <div class="column is-one-third">
            <a href="\ReviewUser\game17.html"><div class="card">
              <div class="column">


                  <figure class="image is-5by3" height="720 px">
                    <img src="assets/fx.jpg" alt="FFX">
                  </figure>


              </div>
              <div class="card-content">
                <div class="columns is-multiline">
                  <div class="column">
                    <figure class="image is-16x16">
                      <h1><img src="/DDG/static/assets/images/pic/underline-button.png"></h1>
                    </figure>

                  </div>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <div class="column has-text-right">
                    <figure class="image is-16x16" height="720 px">
                      <img src="/DDG/static/assets/images/pic/star.png" alt="user 2.jpg">
                    </figure>
                  </div>
                </div>
              </div>
            </div></a>
          </div>

          <div class="column is-one-third">
            <a href="\ReviewUser\game18.html"><div class="card">
              <div class="column">


                  <figure class="image is-5by3" height="720 px">
                    <img src="assets/fc.jpg" alt="FC3">
                  </figure>

              </div>
              <div class="card-content">
                <div class="columns is-multiline">
                  <div class="column">
                    <figure class="image is-16x16">
                      <h1><img src="/DDG/static/assets/images/pic/underline-button.png"></h1>
                    </figure>

                  </div>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <div class="column has-text-right">
                    <figure class="image is-16x16" height="720 px">
                      <img src="/DDG/static/assets/images/pic/star.png" alt="user 2.jpg">
                    </figure>
                  </div>
                </div>
              </div>
            </div></a>
          </div>

        </div>
      </div>
    </section>

    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <nav class="pagination is-centered" role="navigation" aria-label="pagination">

  <ul class="pagination-list">
      <li><a class="pagination-link " aria-label="Goto page 1" href="reviewhome.html">1</a></li>
    <li><a class="pagination-link is-current" aria-label="Goto page 2" aria-current="page" href="reviewhome2.html">2</a></li>
    <li><a class="pagination-link" aria-label="Goto page 3" href="reviewhome3.html">3</a></li>
  </ul>
  </nav>

    </main>
  </body>
<footer class="footer" background-color="#8c0009">
<div class="container">
<div class="content has-text-centered has-text-white">
 <p>
   <a href=/aboutus.html>
    <img src="/assets/dekdoklogoblack.png" alt="logo" width="150px" align="center" style="margin-top:-40px;"> </a><br>
    <a href="/aboutus.html" target="_blank">
<font face="RSU" size="2" color="black"><b>&#9658; About us</b></font></a>
<font face="RSU" size="4" color="black" ><b>l</b></font>
<font face="RSU" size="2" color="black"><b>Berm and his friends © 1997 Thailand (TH) </b></font>
 </p>
</div>
</div>
</footer>

</html>