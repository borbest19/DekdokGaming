<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Dek-Dok Gaming</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.5.3/css/bulma.min.css">
    <link rel="stylesheet" href="\ReVewwwww\assets\home.css">
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
          <g class="content has-text-left">รีวิว Neko Para Vol.1 (ENG)</g>
          <img src="\assets\Line.png" height="3px" width="1230px" >
          <b class="content has-text-left">เมื่อ 9000+ ชม. ที่แล้ว</b>
          <img src="\assets\Nekopara.jpg" height="auto" width="900px">
          </br>
          <b class="content has-text-left"></br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สวัสดีครับ ผม ninetail01 กลับมาอีกครั้งวันนี้จะมาขอรีวิวเกมที่ผมบอกเลยว่า รักเลย!! เกมนี้รักเลยครับ!!
Neko Para Vol.1 (ENG)
เป็นผมขอยอมรับเลยครับว่าเป็นเพียงไม่กี่เกมที่ผมเล่นครั้งแรกแล้วชอบเลยแบบนี้<br></br>
<g class="content has-text-left">เนื้อเรื่อง</g>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เป็นเรื่องของเรา คาโชยู (มั้งนะอ่านออกเสี่ยงไม่ค่อยถูกนะครับ) ได้ออกจากบ้านมาเปิดร้านเบเกอรี่ Patisserie La Soleil และในวันที่กำลังจะเปิดร้านครั้งแรกอยู่นั้น เราได้พบกับกล่องปริศนา 2 กล่องอยุ่ด้วย ซึ่งภายในก้คือ แมวสาวที่เราเลียงเอาไว้ที่บ้าน ช๊อกโกล่า และ วานิลา นั้นเอง เรื่องราววุ่นๆ ของหนึ่งเจ้านายหนุ่ม กับสองแมวสาว ภายในร้านเบเกอรี่แห่งนี้จึงได้เริ่มขึ้น
<br></br>
<div class="has-text-centered"><img src="\assets\20171204234641_1.jpg" height="auto" width="900px"></div>
<g class="content has-text-left">ระบบของเกม</g>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เป็นเกมแนวจีบสาวแบบนิยายภาพเหมือนเกมจีบสาวทั่วไป แต่สิ่งที่เป็นจุดเด่นเลยก็คือ ตัวละครจะเคลื่อนไหวอยุ่ตลอดเวลา ไม่ว่าจะเป็นปาก ตา หู หาง ใบหน้า ลำตัว เช่นถ้าตัวละครพูดปากก็จะขยับตาม ว่าแล้วตัวละครเดิน ก็จะขยับตัวเหมือนกำลังเดินอยู่จริงๆ เวลาตัวละครเศร้าสีหน้าก็จะเศร้าจริงๆ ราวกับว่ากำลังมีชีวิตอยู่จริงๆ (ตัวฉาก H นั้นยังเล่นไม่ถึงนะครับ)
<div class="has-text-centered"><img src="\assets\NekoPara_02.gif" height="auto" width="900px"></div>
<g class="content has-text-left">ความเห็นส่วนตัวหลังจากเล่นครั้งแรก(ถึงจะไม่จบก็เถอะ)</g>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ถึงผมจะเล่นไม่จบก็ตามแต่ 10 เต็ม ผมให้ 10 เต็มไปก่อนเลยครับ อาจเพราะส่วนตัวเป็นสาวหูสัตว์และเสพเนื้อเรื่องอยู่แล้วก็ได้ (เป็นภาษาอังกฤษแบบนี้อ่านออกแปลได้สบายผมละ) ตัวละครทำออกมามาได้น่ารัก ภาพเองก็สวยสดใส ตัวเนื้อเรื่อง(จากเริ่มจนถึงฉากเปิด) ทำออกมาได้โดนใจ รวมถึงลูกเล่นการเครื่องไหวอีก ทำให้ผมยก 10 เต็ม ไปก่อนไปเลย ใครที่เป็นคอสายหูสัตว์หรือสายเนื้อเรื่อง ไม่ควรพลาดอย่างยิ่งครับ ถ้าพลาดจะเสียใจแน่อนครับ ตัวผมเองก็จะตามเก้บให้ครบทุกVol เลยครับ ไม่เเปลกใจเลยที่ตัวสตรีม จะเอามาลงด้วยเหมือนกัน(แต่ไม่Hนะครับ)
<br>
<br>
</b>
<div class="has-text-centered"><img src="\assets\20171204234015_1.jpg" height="auto" width="900px"></div>

            <br></br>
          <b1>
            <strong>แหล่งข้อมูลจาก</strong> <A href="https://2th.me/a/h_game/f1030/147072" style="color:red">ninetail01</A>
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
