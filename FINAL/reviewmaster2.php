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
			<font face="Superspace" size="7">	<b>รีวิวจากเว็บมาสเตอร์</b> </font>
			</div>

			<div class="line3" style="height: 5px;">
			</div>
		</div>

		<section class="section">
			<div class="container">
				<section class="columns is-multiline">
					<div class="column is-one-third">
						<a href="#">
							<div class="cardtop">
								<div class="container2">
									<img class="headnews" src="/assets/B4.jpg" alt="images-1">
									<div class="card-content">
										<h3 class="title is spaced is-4"><font color="white">Dark Souls 3</font></h3>
									</div>
								</div>
							</div>
						</a>
					</div>

					<div class="column is-one-third">
						<a href="#">
							<div class="cardtop">
								<div class="container2">
									<img class="headnews" src="/assets/850.jpg" alt="images-1">
									<div class="card-content">
										<h3 class="title is spaced is-4"><font color="white">AoT</font></h3>
									</div>
								</div>
							</div>
						</a>
					</div>

					<div class="column is-one-third">
						<a href="#">
							<div class="cardtop">
								<div class="container2">
									<img class="headnews" src="/assets/marco-reus-is-the-cover-star-of-fifa-17.jpg" alt="images-1">
									<div class="card-content">
										<h3 class="title is spaced is-4"><font color="white">Fifa 17</font></h3>
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
					<a href="\ReVewwwww\Dad07\index.html" class="column">
						<div class="columns">
							<div class="column">
								<figure class="image is-5by3" height="720 px" style="margin:5px 5px 0px 5px">
									<div class="img-resize">
										<img src="/assets/20160125024818a0ebaoe0sclsytss.png" alt=""></div>
								</figure>
							</div>
							<div class="column ">
								<div class="card-content">
									<h1 class="title is-spaced">[รีวิว] Shadowverse : แนะนำระบบเกม</h1>
									<h2 class="subtitle">
								<p> Shadowverse เป็นเกมแนวการ์ดเกมที่เคยเปิดให้บริการบนสมาร์ทโฟน ทั้ง Android และ iOS โดยเปิดให้โหลดเล่นได้ฟรี และตอนนี้ก็ได้เปิดให้เล่นฟรีบน PC ในสตีมด้วยเช่นกัน โดยสามารถลิ้งค์ตัวเกมจากมือถือมายังสตีมได้</p>
							</h2>
									<h3 class="time">4 DAYS AGO</h3>
								</div>
							</div>
						</div>
					</a>
				</div>

				<div class="card">
					<a href="\ReVewwwww\Dad08\index.html" class="column">
						<div class="columns">
							<div class="column">
								<figure class="image is-5by3" height="720 px" style="margin:5px 5px 0px 5px">
									<div class="img-resize">
										<img src="/assets/1385262880-ac4-o.jpg" alt=""></div>
								</figure>
							</div>
							<div class="column ">
								<div class="card-content">
									<h1 class="title is-spaced">[CR] Review : Assassin's creed 4 Black Flag PC</h1>
									<h2 class="subtitle">
								<p>Assassin's creed 4 ก็เป็นอีกหนึ่งเกมที่มีกราฟิกสวยงดงาม สมจริงมาก โดย เฉพาะ ใบหน้าของโมเดลตัว ละคร , แสงเงา , ภูเขา และ น้ำทะเล เป็นต้น ถึงแม้จะเล่นด้วยความละเอียด ระดับ Normal แล้วก็ตามความสวยงามของเกมก็ยังคงไว้ได้ครบทุกรายละเอียด...
</p>
							</h2>
									<h3 class="time">4 DAYS AGO</h3>
								</div>
							</div>
						</div>
					</a>
				</div>


				<div class="card">
					<a href="\ReVewwwww\Dad09\index.html" class="column">
						<div class="columns">
							<div class="column">
								<figure class="image is-5by3" height="720 px" style="margin:5px 5px 0px 5px">
									<div class="img-resize">
										<img src="/assets/mdh1.jpg" alt=""></div>
								</figure>
							</div>
							<div class="column ">
								<div class="card-content">
									<h1 class="title is-spaced">Medal of Honor Warfighter เกียรติยศของทหารกล้าผู้พลีชีพ</h1>
									<h2 class="subtitle">
								<p>ถ้าหากเปรียบตัวเกม C_ll of D_ty เป็นวรรณกรรมสงครามโลกชิ้นเยี่ยมแล้ว ตัวเกม Medal of Honor ของทางฝั่งค่ายเกมขี้งกอย่าง EA ได้ดำเนินแนวทางเกมที่แตกต่าง นั่นก็คือ การนำเสนอเรื่องราวของหน่วยรบ Tier 1 หน่วยรบที่มีอยู่จริง เหตุการณ์จริงๆ นำมาเสนอคนเล่น ซึ่งในภาคแรกก็ประสบความสำเร็จอย่างงดงาม และก็ได้สานต่อมายังภาคสองครับ
								</p>
							</h2>
									<h3 class="time">4 DAYS AGO</h3>
								</div>
							</div>
						</div>
					</a>
				</div>

				<div class="card">
					<a href="\ReVewwwww\Dad10\index.html" class="column">
						<div class="columns">
							<div class="column">
								<figure class="image is-5by3" height="720 px" style="margin:5px 5px 0px 5px">
									<div class="img-resize">
										<img src="/assets/KlwTntU.png"></div>
								</figure>
							</div>
							<div class="column ">
								<div class="card-content">
									<h1 class="title is-spaced">แนะนำเกมส์ akiba's trip undead & undressed สำหรับ Otaku (เสียตัง)</h1>
									<h2 class="subtitle">
								<p>
เนื้อเรื่องของเกมจะเกี่ยวกับเมืองอันแสนสุขและคึกคักจะถูกปกคลุมด้วยความชั่วร้ายที่รายล้อมไปด้วยเหล่าแวมไพร์ เด็กหนุ่มจึงต้องรับชะตากรรมในการต่อสู้เพื่อทำให้เมืองนี้สงบสุขอีกครั้ง กล่าวถึงเด็กหนุ่มคนหนึ่งที่ถูกจับตัวไปเพื่อดัดแปลงให้เป็นแวมไพร์ และถูกช่วยเหลือโดยหญิงสาวนางหนึ่งที่ดูเหมือนมีพลังแฝงบางอย่าง...</p>
							</h2>
									<h3 class="time">4 DAYS AGO</h3>
								</div>
							</div>
						</div>
					</a>
				</div>


				<div class="card">
					<a href="\ReVewwwww\Dad11\index.html" class="column">
						<div class="columns">
							<div class="column">
								<figure class="image is-5by3" height="720 px" style="margin:5px 5px 0px 5px">
									<div class="img-resize">
										<img src="/assets/header.png" alt=""></div>
								</figure>
							</div>
							<div class="column ">
								<div class="card-content">
									<h1 class="title is-spaced">Review: Final Fantasy X/X-2 HD Remaster ตำนานโลกสปิร่ากำเนิดใหม่</h1>
									<h2 class="subtitle">
								<p>อีกหนึ่งผลงานรีมาสเตอร์จากค่ายเกมจอมขายของเก่าอย่างสแควร์เอนิกซ์ ที่จับเอาสองสุดยอดเกมอาร์พีจีสมัยยุค PS2 กลับมาปัดฝุ่นใหม่ให้แฟนๆได้หวนรำลึกความหลังกันอีกครั้ง...
		       <br></p>
							</h2>
									<h3 class="time">4 DAYS AGO</h3>
								</div>
							</div>
						</div>
					</a>
				</div>

				<div class="card">
					<a href="\ReVewwwww\Dad12\index.html" class="column">
						<div class="columns">
							<div class="column">
								<figure class="image is-5by3" height="720 px" style="margin:5px 5px 0px 5px">
									<div class="img-resize">
										<img src="/assets/tumblr_mzbdsdU3He1tp8kdpo1_500.gif"></div>
								</figure>
							</div>
							<div class="column ">
								<div class="card-content">
									<h1 class="title is-spaced">รีวิวเกมส์ Dragon Ball Z: Budokai Tenkaichi 3</h1>
									<h2 class="subtitle">
								<p>ภายหลังจากที่การ์ตูนยอดฮิตและโด่งดังมากที่สุดเรื่องหนึ่งอย่าง Dragon Ball Z มาถูกพัฒนาเป็นเกมแนวไฟท์ติ้งสุดมันส์แห่งยุคในตระกูล Budokai Tenkaichi หรือภาค Sparking! Neo ของเวอร์ชั่นภาษาอังกฤษ โดยฝีมือจากทีม Spike และ Bandai Namco Games ตั้งแต่นั้นเป็นต้นมา...</p>
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
				<li><a class="pagination-link is-current" aria-label="Goto page 2" aria-current="page" href="/reviewmaster2.html">2</a></li>
				<li><a class="pagination-link" aria-label="Goto page 3" href="/reviewmaster3.html">3</a></li>
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
