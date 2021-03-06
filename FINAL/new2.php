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
        <h1 align="left"><font face="Superspace" style="font-size:50pt"><b>CD Projekt ยืนยัน! Cyberpunk 2077 จะมีองค์ประกอบการเล่นออนไลน์ เพื่อให้มั่นใจว่าจะประสบความสำเร็จในระยะยาว</b></font></h1>
              <div class="line" style="height: 5px;"></div><br>
          <h5 align="left"><font face="RSU text" size="6">มากกว่า 9000 ชม. ที่แล้ว</font></h5><br>
          <img src="/assets/New02.jpg" height="auto" width="900px">
          </br>
          <br></br>
          <font face="RSU text" size="18px">
            <p align="left">

          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ใช่แล้ว มันคือระบบ Multiplayer หรือระบบผู้เล่นหลายคนนั่นเอง<br>

          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;แม้ว่าเราจะไม่รู้อะไรมากนักเกี่ยวกับ Cyberpunk 2077 เพราะทาง CD Projekt ผู้พัฒนา ไม่ได้มีการเปิดเผยรายละเอียดอย่างเปินกิจจะลักษณะเกี่ยวกับเกมล่าสุดของ CD Projekt ที่กำลังพัฒนาอยู่ ของพวกเขา แต่เราพอจะทราบกันมาบ้างเมื่อปีที่แล้วว่า ตัวเกมอาจจะมีระบบเมืองขนาดใหญ่ และระบบผู้เล่นหลายคนแบบไร้รอยต่อ จากการที่มีรายงานว่า CD Projekt ได้สมัครขอรับทุนเกี่ยวกับเทคโนโลยีหลายๆอย่าง ไม่ว่าจะเป็น ‘City Creation’, ‘Animation Excellence’, ‘Cinematic Feel’, และ ‘Seamless Multiplayer<br>

          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ล่าสุด Adam Kiciński ประธานบริษัท CD Projekt ได้ออกมายืนยันว่า ตัวเกมจะมีองค์ประกอบการเล่นออนไลน์ เพื่อให้มั่นใจว่า มันจะประสบความสำเร็จในระยะยาว จากบทสัมภาษณ์กับ Strefa Inwestorow เว็บไซต์การลงทุนของโปแลนด์ Kiciński ได้กล่าวว่า<br>

          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"เราต้องการทดลองสิ่งใหม่ที่เรายังไม่เคยทำใน The Witcher ผมไม่อาจจะบอกอะไรได้มากเกี่ยวกับ Cyberpunk แม้ว่าความทะเยอทะยานอยากของเราจะตั้งไว้สูงลิ่ว เพราะมันเป็นสไตล์การทำงานของเรา เราต้องการจะไปให้สูงกว่าเดิม โดยเฉพาะการได้เห็นว่าพวกเราคุยธุรกิจกันยังไง เราต้องการให้ Cyberpunk เป็นการพาณิชย์มากกว่าเดิม"<br>

          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ซึ่งในจุดหนึ่ง Kiciński ถูกถามว่า เป็นไปได้หรือไม่เกี่ยวกับระบบผู้เล่นหลายคนใน Cyberpunk 2077 <br>

          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เขาตอบว่า "ระบบออนไลน์คือสิ่งจำเป็น หรือเป็นอะไรที่แนะนำให้ทำมาก ถ้าคุณหวังจะบรรลุความสำเร็จในระยะยาว ในบางทีเราก็ได้มีการพูดถึงว่าจะมีองค์กระกอบออนไลน์ใน Cyberpunk อย่างแน่นอน"<br>
</p></font>
          <b></b>
        <p align="right">
            <strong>แหล่งข้อมูลจาก</strong> <A href="http://www.pcgamer.com/cyberpunk-2077-will-include-online-elements-to-ensure-long-term-success-says-cd-projekt/" style="color:red">Web Master</A>
          </p>
      </div>
    </div>

   </main>
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
  </body>
</html>
