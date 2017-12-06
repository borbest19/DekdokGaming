<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Dek-Dok Review</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.5.3/css/bulma.min.css">
  <link rel="stylesheet" href="/home.css">
  <link rel="icon" href="/assets/Berm.ico">
  <link rel="stylesheet" type="text/css" href="slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />
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
	</style><style>
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
	</style>
  <script>
    function statusChangeCallback(response) {
      console.log('statusChangeCallback');
      console.log(response);
      if (response.status === 'connected') {
        testAPI();
      } else {
        document.getElementById('status').innerHTML = 'Please log ' +
          'into this app.';
      }
    }

    function checkLoginState() {
      FB.getLoginStatus(function(response) {
        statusChangeCallback(response);
      });
    }
    window.fbAsyncInit = function() {
      FB.init({
        appId: '1490167914363614',
        cookie: true,
        xfbml: true,
        version: 'v2.8'
      });
      FB.Event.subscribe('auth.login', function() {
        window.location.reload();
      });
      FB.getLoginStatus(function(response) {
        statusChangeCallback(response);
      });
    };
    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s);
      js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

    function testAPI() {
      console.log('Welcome!  Fetching your information.... ');
      FB.api('/me', function(response) {
        console.log('Successful login for: ' + response.name);
        document.getElementById('status').innerHTML =
          'Thanks for logging in, ' + response.name + '!';
      });
    }
  </script>
  <div class="column is-multiline">
    <div class="headcontainer">
      <!--ถ้าใช้ id จะอ้าง java script ได้-->
      <br>
      <div class="head">
        <div class="columns is-multiline">
          <div class="column is-4" align="right" style="margin-top:-50px">
            <a ahref="/index.html">
            <img  src="/DDG/static/assets/LogoWeb/dekdoklogowhite.png" alt="" width="270" height="auto">
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
    <a onclick="document.getElementById('modal-wrapper').style.display='block'">
    <img src="/DDG/static/assets/images/log-in.png" alt="" width="100px"></a>


        </div>
      </div>
    </div>
    </div>
  </div>
  <div id="modal-wrapper" class="modal">

    <form class="modal-content animate" action="#">
      <!-- #หน้าหลังล็อกอิน-->

      <div class="imgcontainer">
        <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
        <img src="/DDG/static/assets/LogoWeb/dekdoklogoblack.png" alt="Avatar" class="avatar">
        <h1 style="text-align:center">เข้าสู่ระบบ</h1>
      </div>
      <div class="has-text-centered">
        <h3>——————————  หรือ  ——————————</h3>
        <div class="fb-login-button" data-max-rows="1" data-size="large" data-button-type="login_with" data-show-faces="false" data-auto-logout-link="true" data-use-continue-as="false"></div>
        <div id="status"></div>
        <input type="text" placeholder="อีเมล์" name="uname">
        <input type="password" placeholder="รหัสผ่าน" name="psw">
        <br></br>
        <button type="submit">เข้าสู่ระบบ</button><br>
        <input type="checkbox" style="margin:26px 30px;"> จดจำฉัน</input>
        <a class="has-text-centered" href="#" style="text-align:center;">ลืมรหัสผ่าน?</a>
        <br><button class="regis" type="submit">สมัครเลย</button>
      </div>
    </form>

  </div>

  <script>
    // If user clicks anywhere outside of the modal, Modal will close
    var modal = document.getElementById('modal-wrapper');
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
        <a href="/DEKDOK/index.html" class="nav-item">ข่าว</a>
        <a href="/ReviewFront/index.html" class="nav-item">รีวิวเกม</a>
        <a href="/topchart/index.html" class="nav-item">เกมยอดนิยม</a>
        <a href="/Aboutus/index.html" class="nav-item">เกี่ยวกับเรา</a>
      </nav>
    </div>
  </div>
</header>

<body>
  <br>
  <main>

    <div class="columns is-multiline">

      <div class="column is-one-quarter">
        <div class="card">
          <br>
          <img src="nat.jpg" alt="" width="270" >
          <h1>ชนากานต์ ธรรมรุ่งโรจน์</h1>
          <p class="title">59080500210</p>
          <p>"555+"</p>
          <br>
          <div style="margin: 2px 0;">
            <a href="https://www.facebook.com/natcatmouse">
              <i class="fa fa-facebook">
                Cn Mt</i>
            </a>
          </div>
        </div>
      </div>

      <div class="column is-one-quarter">
        <div class="card">
          <br>
          <img src="pluem.jpg" alt="" width="270" >
          <h1>ชัยธร ถินแพ</h1>
          <p class="title">59080500212</p>
          <p>"ปะรินทอน ไอ้คนบาป"</p>
          <br>
          <div style="margin: 2px 0;">
            <a href="https://www.facebook.com/bloodcross.crawford">
              <i class="fa fa-facebook">
                Chaiyathorn Tinpea</i>
            </a>
          </div>
        </div>
      </div>

      <div class="column is-one-quarter">
        <div class="card">
          <br>
          <img src="palm.jpg" alt="" width="270">
          <h1>ชุติศรณ์ ศรีเจริญ</h1>
          <p class="title">59080500215</p>
          <p>"อิอิอิอิ"</p>
          <br>
          <div style="margin: 2px 0;">
            <a href="https://www.facebook.com/TonPalmCS">
              <i class="fa fa-facebook">
                Chutisorn Sricharoen</i>
            </a>
          </div>
        </div>
      </div>

      <div class="column is-one-quarter">
        <div class="card">
          <br>
          <img src="noon.jpg" alt="" width="270px" >
          <h1>ณัฐริกา มุคำ</h1>
          <p class="title">59080500220</p>
          <p>"โอเค โอเค"</p>
          <br>
          <div style="margin: 2px 0;">
            <a href="https://www.facebook.com/nattarikamn">
              <i class="fa fa-facebook">
                Noon Noon</i>
            </a>
          </div>
        </div>
      </div>

      <div class="column is-one-quarter">
        <div class="card">
          <br>
          <img src="por.jpg" alt="" width="270px" >
          <h1>ปรินทร เจตนเสน</h1>
          <p class="title">59080500237</p>
          <p>"ยังไม่ได้หน่อนนนนน"</p>
          <br>
          <div style="margin: 2px 0;">
            <a href="https://www.facebook.com/parinnnn">
              <i class="fa fa-facebook">
                Parinthon Jetanasen</i>
            </a>
          </div>
        </div>
      </div>

      <div class="column is-one-quarter">
        <div class="card">
          <br>
          <img src="cheer.jpg" alt="" width="270px" >
          <h1>ภวินท์ โฆมานะสิน</h1>
          <p class="title">59080500243</p>
          <p>"โอ่ย"</p>
          <br>
          <div style="margin: 2px 0;">
            <a href="https://www.facebook.com/sdcheerr">
              <i class="fa fa-facebook">
                ภวินท์ โฆมานะสิน</i>
            </a>
          </div>
        </div>
      </div>

      <div class="column is-one-quarter">
        <div class="card">
          <br>
          <img src="berm.jpg" alt="" width="270px" >
          <h1>ภัทรพล ชูรุจิพร</h1>
          <p class="title">59080500244</p>
          <p>"ผมชื่อเบิ้มนะครับ"</p>
          <br>
          <div style="margin: 2px 0;">
            <a href="https://www.facebook.com/MixBlasterGESTV">
              <i class="fa fa-facebook">
                ภัทรพล ชูรุจิพร</i>
            </a>
          </div>
        </div>
      </div>

      <div class="column is-one-quarter">
        <div class="card">
          <br>
          <img src="bank.jpg" alt="" width="270px" >
          <h1>ภาณุพงศ์ รัตนพันธ์</h1>
          <p class="title">59080500245</p>
          <p>"AIB อ่ะชื่อในวงการ"</p>
          <br>
          <div style="margin: 2px 0;">
            <a href="https://www.facebook.com/aib.panupong.ratanapan">
              <i class="fa fa-facebook">
                Ai'Bank Panupong</i>
            </a>
          </div>
        </div>
      </div>

      <div class="column is-one-quarter">
        <div class="card">
          <br>
          <img src="best.jpg" alt="" width="270px" >
          <h1>สุเจตนา จงจะริยะสถาพร</h1>
          <p class="title">59080500255</p>
          <p>"อ่ะฮ่าๆๆ"</p>
          <br>
          <div style="margin: 2px 0;">
            <a href="https://www.facebook.com/BorbestSc">
              <i class="fa fa-facebook">
                Borbest Sc</i>
            </a>
          </div>
        </div>
      </div>

      <div class="column is-one-quarter">
        <div class="card">
          <br>
          <img src="ja.jpg" alt="" width="270px" >
          <h1>อัครวีร์ มีเฉลา</h1>
          <p class="title">59080500270</p>
          <p>"หมอนข้างของผมเป็นรู (ป๋อทำน่ะ)"</p>
          <br>
          <div style="margin: 2px 0;">
            <a href="https://www.facebook.com/akkarawee.meechalao">
              <i class="fa fa-facebook">
                Akkarawee Meechalao</i>
            </a>
          </div>
        </div>
      </div>
      <footer class="footer" background-color="#8c0009">
  	<div class="container">
  	 <div class="content has-text-centered has-text-white">
  		 <p>
  				<img src="/DDG/static/assets/LogoWeb/dekdoklogoblack.png" alt="logo" width="150px" align="center">

  		 </p>
  	 </div>
  	</div>
  	</footer>
</body>

</html>
