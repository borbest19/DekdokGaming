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
          <g class="content has-text-left">Civilization VI : Rise & Fall เตรียมออกส่วนเสริมใหม่กุมภาพันธ์ปีหน้า!!</g>
          <img src="/assets/images/Line.png" height="3px" width="1230px" >
          <b class="content has-text-left">มากกว่า 9000 ชม. ที่แล้ว</b>
          <img src="/assets/images/attach-1512389849685.jpg" height="auto" width="900px">
          </br>
          <br></br>
          <b class="content has-text-left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Firaxis Games และ 2K ได้ออกมาเปิดเผยว่าจะมีการออกส่วนเสริมใหม่ของเกมกลยุทธ์สร้างเมืองซีรี่ส์ดังอย่าง Civilization VI โดยส่วนเสริมนี้ใช้ชื่อว่า Rise & Fall และมีกำหนดเปิดวางจำหน่ายในวันที่ 8 กุมภาพันธ์ 2018 !! เพื่อนๆ ที่สนใจ สามารถเข้าไปดูรายละเอียดเพิ่มเติมได้ที่ลิ้งค์นี้เลยค่ะ : Civilization VI: Rise & Fall
  <br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สำหรับฟีเจอร์เด่นๆ ในส่วนเสริมนี้จะประกอบไปด้วย Great Ages mechanic ซึ่งจะมีการเพิ่มโบนัสแบบใหม่ให้กับผู้เล่น เมื่อเริ่มเข้าสู่ยุคทอง และยุคมืด ในแต่ละช่วงของประวัติศาสตร์
<div class="content has-text-centered"><br><img src="/assets/images/916ee630-d1b4-40aa-b10d-91a3ed4ca553_2KGMKT_CivilizationVI-RF_Game-Image_Announce_Tundra_1-768x432.jpg" height="auto" width="900px"></div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  นอกจากนี้เมืองแต่ละเมืองจะมีค่าความจงรักภักดี ซึ่งถ้าเมืองยิ่งมีความแข็งแกร่งมากก็จะทำให้ทรัพยากรในเมืองอุดมสมบูรณ์มากขึ้น เหล่าข้าราชการในเมืองก็จะส่งผลต่อค่าความจงรักภักดี เพราะความสามารถของยูนิตเหล่านี้จะมีความจำเป็นต่อการพัฒนาเมืองด้วย

<br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ส่วนทางด้านของระบบพันธมิตร จะมีการปรับปรุงใหม่ โดยเราสามารถจัดประเภทของพันธมิตรได้ นอกจากนี้เรายังสามารถนำเมืองของเราเข้าสู่สถานะฉุกเฉิน เพื่อร่วมกันสร้างพันธมิตรกับรัฐข้างเคียง ซึ่งจะช่วยลดภัยคุกคามจากอาณาจักรอื่นได้อีกต่างหาก เจ๋งไปเลยใช่มั้ยล่าเกมนี้ ใครที่ชื่นชอบเกมแนวสร้างเมืองวางแผนกลยุทธ์ภาพสวยๆ เตรียมเก็บเงินเตรียมเปย์กันได้เลยจ้าา >//< </b>
          <b></b>
          <b1>
            <strong>แหล่งข้อมูลจาก</strong> <A href="http://www.playulti.com/content/page/5a253faac2cb9db725aeb739//" style="color:red">Chomismama</A>
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
