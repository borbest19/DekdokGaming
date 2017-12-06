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
		<div class="container">
			<div class="eiei">
				<h1> <b>รีวิวจากเว็บมาสเตอร์</b> </h1>
			</div>

			<div class="line">
			</div>
		</div>

	<section class="section">
		<div class="container">
			<section class="columns is-multiline">
				<div class="column is-one-third">
					<a href="#">
						<div class="cardtop">
							<div class="container2">
									<img class="headnews"src="/assets/Nekopara.jpg" alt="images-1">
								<div class="card-content">
									<h3 class="title is spaced is-4"><font color="white">Nekopara</font></h3>
								</div>
							</div>
						</div>
					</a>
				</div>

				<div class="column is-one-third">
					<a href="#">
						<div class="cardtop">
							<div class="container2">
									<img class="headnews"src="/assets/BBV_Night_Strait_Princesses_1767_Full - Copy.png" alt="images-1">
								<div class="card-content">
									<h3 class="title is spaced is-4"><font color="white">Kantai Collection</font></h3>
								</div>
							</div>
						</div>
					</a>
				</div>

				<div class="column is-one-third">
					<a href="#">
						<div class="cardtop">
							<div class="container2">
									<img class="headnews"src="/assets/KlwTntU.png" alt="images-1">
								<div class="card-content">
									<h3 class="title is spaced is-4"><font color="white">Akiba's trip</font></h3>
								</div>
							</div>
						</div>
					</a>
				</div>

			</section>
		</div>
	</section>
</section>
    <div class="container1">
    	<main>
		<section class="section dekdok news present">
			<div class="card">
				<a href="\ReVewwwww\Dad13\index.html" class="column">
					<div class="columns">
						<div class="column">
							<figure class="image is-5by3" height="720 px" style="margin:5px 5px 0px 5px">
								<div class ="img-resize">
								<img src="/assets/Half-Life-2-Buy.jpg"></div>
							</figure>
						</div>
					<div class="column ">
						<div class="card-content">
							<h1 class="title is-spaced">[Review] Half-Life 2</h1>
							<h2 class="subtitle">
								<p> “ภาคต่อของเกม FPS ในตำนานอย่าง Half-Life” Half-Life 2 เป็นบทต่อเนื่องของเกมที่เป็นแบบฉบับเกม FPS อย่าง Half-Life ที่นอกจากจะมีกราฟิกที่สวยขึ้นแล้ว ยังมีการเพิ่มลูกเล่นของเกม พร้อมด้วยเนื้อหาที่เข้มข้นขึ้น เลยทำให้เกมนี้กลายเป็นเกมขวัญใจของนักเล่นเกมไปตลอดกาลเลยก็ว่าได้
</p>
							</h2>
							<h3 class="time">4 DAYS AGO</h3>
						</div>
					</div>
					</div>
				</a>
			</div>

			<div class="card">
				<a href="\ReVewwwww\Dad14\index.html" class="column">
					<div class="columns">
						<div class="column">
							<figure class="image is-5by3" height="720 px" style="margin:5px 5px 0px 5px">
								<div class ="img-resize">
								<img src="/assets/850.jpg" alt=""></div>
							</figure>
						</div>
					<div class="column ">
						<div class="card-content">
							<h1 class="title is-spaced">(รีวิวเกม PC) Attack on Titan ดราม่าไม่เน้น มุ่งฟาดยักษ์ไททันเลือดสาด!</h1>
							<h2 class="subtitle">
								<p>หลังจากที่ต้องรอลุ้นกันตั้งแต่ตอนที่ประเทศทำเกมตอนแรกๆ ในที่สุด ทาง KOEI TECMO ก็ได้เตรียมพอร์ตเกมพิฆาตไททันลง PC ด้วย เพียงแต่เกมนี้เป็นเกมที่เอ๊กครูชีฟบนเครื่องคอลโซล ทำให้ชาว PC อย่างพวกเรากว่าจะได้เล่นก็ต้องรอนานหน่อย ในที่สุดตัวเกมก็วางขายแล้ว เราจะมารีวิวเกมนี้กันครับ</p>
							</h2>
							<h3 class="time">4 DAYS AGO</h3>
						</div>
					</div>
					</div>
				</a>
			</div>


			<div class="card">
				<a href="\ReVewwwww\Dad15\index.html" class="column">
					<div class="columns">
						<div class="column">
							<figure class="image is-5by3" height="720 px" style="margin:5px 5px 0px 5px">
								<div class ="img-resize">
								<img src="/assets/og.jpg"></div>
							</figure>
						</div>
					<div class="column ">
						<div class="card-content">
							<h1 class="title is-spaced">Dead or Alive 5 Last Round [PC,PS4,XB1]</h1>
							<h2 class="subtitle">
								<p>สังเวียนนักสู้สุดโหดที่ตัดสินว่าใครจะตายและใครจะรอด เป็นเกมส์แนวต่อสู้ความเร็วสูงที่สามารถซัดคู่ต่อสู้ให้ตายในการโจมตีชุดเดียว นำเสนอรูปแบบการต่อสู้ที่รวดเร็วสะใจ กับตัวละครที่เน้นไปทางสาวสวยหุ่นสะบึม ที่พัฒนางานภาพมาอย่างต่อเนื่องจนมาถึงภาค 5 ที่ทำตัวละครออกมาสวยงามราวกับมีชีวิตจริง โดยเนื้อเรื่องภาค 5 ไม่ได้เน้นที่เวทีแข่งขัน DOA เท่าไรตัวละครหลักจะวุ่นวายอยู่กับการหาร่างโคลนนิ่งของ Kasumi นางเอกสุดสวย นั้นก็คือเจ้า...
			</p>
							</h2>
							<h3 class="time">4 DAYS AGO</h3>
						</div>
					</div>
					</div>
				</a>
			</main>
			</div>
		</section>


			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<nav class="pagination is-centered" role="navigation" aria-label="pagination">

		<ul class="pagination-list">
      <li><a class="pagination-link " aria-label="Goto page 1" href="/reviewmaster.html">1</a></li>
    <li><a class="pagination-link" aria-label="Goto page 2"  href="/reviewmaster2.html">2</a></li>
    <li><a class="pagination-link is-current" aria-label="Goto page 3" aria-current="page" href="/reviewmaster3.html">3</a></li>
		</ul>
	</nav>

</body>
<footer class="footer" background-color="#8c0009">
	<div class="container">
		<div class="content has-text-centered has-text-white">
			<p>
				<a href=/aboutus.html>
		<img src="/assets/dekdoklogoblack.png" alt="logo" width="150px" align="center" style="margin-top:-40px;"> </a><br>
				<a href="/aboutus.html" target="_blank">
					<font face="RSU" size="2" color="black"><b>&#9658; About us</b></font>
				</a>
				<font face="RSU" size="4" color="black"><b>l</b></font>
				<font face="RSU" size="2" color="black"><b>Berm and his friends © 1997 Thailand (TH) </b></font>
			</p>
		</div>
	</div>
</footer>

</html>
