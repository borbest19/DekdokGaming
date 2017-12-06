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
<main>
  <br><br>
  <div class="bodycontainer">
    <div class="content has-text-centered has-text-black">
      <br>
      <h1 align="left"><font face="Superspace" style="font-size:50pt"><b>ผู้สร้าง PUBG ลั่น! เกมของเขาไม่ควรค่าต่อการขึ้นแท่นรางวัล Game of the Year!</b></font></h1>
      <div class="line" style="height: 5px;"></div><br>
      <h5 align="left"><font face="RSU text" size="6">มากกว่า 9000 ชม. ที่แล้ว</font></h5><br>
      <img src="/assets/New01.jpg" height="auto" width="900px">
      </br>
      <br></br>


      <font face="RSU text" size="18px">
        <p align="left">
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เมื่อวานนี้ 15/11/2017 The Game Awards ได้ประกาศชื่อเกมที่ได้เข้าร่วมชิงสุดยอดเกมแห่งปีในแต่ละสาขาของปีนี้ ซึ่งดูจะขัดแย้งกันพอสมควร ที่ PlayerUnknown’s Battlegrounds ได้ขึ้นชื่อเข้าร่วมชิงรางวัล Game of the Year ด้วย แต่ Brendan Greene ผู้สร้างเกมนี้กลับบอกว่า
          เขาหวังว่าเกมของเขาจะไม่ชนะในรางวัลนี้<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;โดยทั้ง 5 เกมที่ขึ้นแท่นเข้าร่วมชิงรางวัลเกมแห่งปีของ The Game Awards 2017 นั่นคือ PUBG, The Legends of Zelda: Breath of the Wild, Super Mario Odyssey, Persona 5, และ Horizon Zero Dawn ซึ่งหัวข้อ Game of the Year หรือ เกมแห่งปีนี้ มีขึ้นเพื่อมอบให้กับเกมที่ได้รับการยอมรับว่าส่งมอบประสบการณ์การเล่นที่ยอดเยี่ยมที่สุด
        รวมถึงความคิดสร้างสรรค์และด้านเทคนิคที่ยอดเยี่ยม
        <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ซึ่ง PUBG นั้นเป็นเกมที่ยังอยู่ใน Early Access หรือเกมที่ยังทำไม่เสร็จ มันไม่ควรที่จะได้ขึ้นชื่อเข้าชิงแต่แรกแล้ว แต่ Brendan Greene คิดว่าเกมของเขาไม่สมควรได้รางวัลอันทรงเกียรตินี้ เพราะว่า มันไม่ได้ดีพอถ้าเทียบกับเกมที่ได้เข้าร่วมชิงเกมอื่น
        <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ในบทสัมภาษณ์กับทาง IGN Greene กล่าวว่า เขาไม่ได้ต้องการจะได้รางวัลนี้ "ในขณะที่ผมอยากจะได้รางวัลนี้ให้กับทีม ผมคิดว่าปีนี้มีเกมที่ดีกว่า(เกมของเขา)มาก" พร้อมกล่าวถึง Horizon Zero Dawn และ Breath of the Wild โดยเฉพาะเจาะจง Greene กล่าวว่า
        แม้ว่ามันจะเป็นเกมที่ดีในฐานะเกมของบริษัท PUBG แต่มันก็ไม่ได้ทำให้เขารู้สึกว่าเกมของเขานั้นควรค่ากับการได้รับเกียรตินี้
        <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C.H. Kim ประธานบริษัท Bluehole ได้กล่าวว่า ทีมงานไม่ได้สนใจว่า พวกเขาควรค่ากับรางวัลนั้นหรือไม่ แต่ยังคงมุ่งเน้นการสร้างเกมที่ดีที่สุดเท่าที่จะเป็นไปได้ แม้ว่าเขาจะเชื่อว่า เกมที่ยังคงสถานะ Early Access ไม่ควรถูกตัดสิทธิ์ออกจากรางวัลเหล่านี้ก็ตาม
        <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;นอกจากนี้ PUBG ยังได้เข้าร่วมชิงรางวัลอื่นๆใน The Game Awards สาขาเกมที่ดำเนินการมาอย่างต่อเนื่องยอดเยี่ยม และเกมผู้เล่นหลายคนยอดเยี่ยม ซึ่งปีนี้มีเกมที่เข้าร่วมชิง 102 เกมจาก 29 สาขา ซึ่งผู้ชนะในแต่ละสาขา และเกมแห่งปี จะประกาศผลในวันที่
        7 ธันวาคม นี้ ในขณะที่ PUBG จะปล่อยเป็นตัวเกมเต็มในช่วงปลายปี 2017
        <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;แล้วคุณคิดว่า PlayerUnknown’s Battlegrounds เหมาะกับการเป็นเกมแห่งปีของปีนี้หรือไม่?<br>
      </p></font>




      <br>
      <p align="right">
        <strong>แหล่งข้อมูลจาก</strong>
        <A href="https://www.pcgamesn.com/playerunknown-battlegrounds/pubg-goty" style="color:red">Web Master</A>
      </p>
    </div>
  </div>

</main></body>
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
