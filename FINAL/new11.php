<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Dek-Dok Gaming</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.5.3/css/bulma.min.css">
    <link rel="stylesheet" href="/News/assets/home.css">
    <link rel="stylesheet" href="/News/assets/home.js">
    <link rel="icon" href="/DDG/static/assets/images/Berm.ico">
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
  <main>
    <br><br>
    <div class="bodycontainer">
      <div class="content has-text-centered has-text-black">
          <br></br>
          <g class="content has-text-left">Capcom เตรียมฉลองครบรอบ 30 ปี Rockman เผยจะมีเซอร์ไพรส์รออยู่</g>
          <img src="/assets/Line.png" height="3px" width="1230px" >
          <b class="content has-text-left">มากกว่า 9000 ชม. ที่แล้ว</b>
          <img src="/assets/attach-1512197042833.jpg" height="auto" width="900px">
          </br>
          <br></br>
          <b class="content has-text-left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
เป็นซีรี่ย์ที่เกมเมอร์หลายคนตั้งเฝ้ารอคอยว่าอาจจะกลับมาสักวัน แต่ถ้ามองความเป็นจริงคุณ Keiji Inafune ผู้ให้กำเนิดเจ้าหุ่นกระป๋องสีฟ้า Mega Man ได้ลาออกจากค่าย Capcom ไปแล้ว ซึ่งก็ได้ไปรวมทีมขึ้นมาใหม่กลายเป็น "Level-5 Comcept" แล้วพัฒนาเกม Mighty No. 9 ออกมาให้ได้เล่นกัน ซึ่งกระแสของเกมเมื่อวางจำหน่ายจริงก็พบว่ามันแตกต่างจากรายละเอียดในตอนแรกที่เปิดเผยในช่วงแรก ย้อนกลับมาเนื้อหาข่าวกันต่อ ตอนนี้ทาง Capcom กำลังเตรียมถ่ายทอดสดฉลองครบรอบ 30 ปีของเจ้าหุ่นกระป๋องสีฟ้า Mega Man ในวันที่ 5 ธันวาคมนี้เวลา 02.00 น.ตามเวลาในประเทศไทย โดยพวกเขาก็ให้ว่าจะมีการเปิดเผยข้อมูลที่คุณไม่ควรพลาด
<div class="content has-text-centered"><br><img src="/assets/attach-1512197059708.jpg" height="auto" width="900px"></div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ก่อนหน้านี้ทาง Capcom ได้ให้ข้อมูลเอาไว้ว่าพวกเขาไม่เคยลืมซีรี่ย์นี้หรอกนะ เพียงแต่ยังไม่ถึงเวลาเท่านั้น ในช่วงเวลาที่ผ่านมาทาง Capcom ไม่เคยประกาศภาคใหม่ออกมาแต่อย่างใด มีแต่การเปิดตัวเวอร์ชั่นรวมมิตรอย่างเดียว หรือ ประกาศของสะสมไม่ก็หนังสือเท่านั้น งานนี้ถ้ากลับมาจริงๆ อาเจ๊นัทเองก็อยากให้รีเมคขึ้นมาใหม่เลยก็ได้นะ แต่ไม่เอากราฟฟิคแบบภาค X7 กับ X8 นะ แบบนั้นไม่ไหวจริงๆ เอาเป็นว่าถ้ามีข่าวอัพเดทเพิ่มเติมเมื่อไหร่จะรีบมาแจ้งให้ทราบทันทีค่ะ
</b>
          <b></b>
          <b1>
            <strong>แหล่งข้อมูลจาก</strong> <A href="http://www.playulti.com/content/page/5a224d90f2d2b3b2252cd367/" style="color:red">onkami</A>
          </b1>
      </div>
    </div>

   </main>
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
