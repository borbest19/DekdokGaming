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
          <g class="content has-text-left">[Dota 2] Valve ปล่อยอัพเดตใหญ่ Dueling Fates เปิดตัวสองฮีโร่ใหม่ - เปลี่ยนระบบการเล่นเป็นแบบซีซั่น</g>
          <img src="/assets/Line.png" height="3px" width="1230px" >
          <b class="content has-text-left">มากกว่า 9000 ชม. ที่แล้ว</b>
          <img src="/assets/7a8f7fdb48d6d78b343d642cc2d6f736.jpg" height="auto" width="900px">
          </br>
          <br></br>
          <b class="content has-text-left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;หลังจากที่ปล่อยทีเซอร์ออกมาให้แฟนๆ ได้ตื่นเต้นกันในงาน The International 2017 ที่ผ่านมา ล่าสุด Valve ได้ปล่อยรายละเอียดแพตช์อัพเดตใหญ่ 7.07 “Dueling Fates” ออกมาอย่างเป็นทางการเรียบร้อยแล้ว มาพร้อมกับ 2 ฮีโร่ตัวใหม่ และ เปลี่ยนระบบการเล่นเป็นแบบซีซั่น (Ranked Season)
          </b>
          <g1 class="content has-text-left">เปิดตัว 2 ฮีโร่ใหม่ Pangolier และ Dark Willow</g1>
          <b class="content has-text-left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;จุดเด่นที่สุดของแพตช์นี้คงจะหนีไม่พ้นการมาถึงของ 2 ตัวละครใหม่ยังโลกของ Dota 2 ประกอบด้วย Pangolier นักดาบตัวนิ่ม (Pangolin) ที่โจมตีด้วยการใช้ดาบแทงอย่างรวดเร็วและการม้วนตัวเองพร้อมพุ่งเข้าใส่ศัตรูเพื่อสร้างความเสียหาย และ Dark Willow ภูติสาวที่ออกเดินทางมาจากจากดินแดนอันแสนโหดร้าย ผู้มาพร้อมกับสหายเดินทางอันเป็นวิญญาณภูตินามว่า “Jex” ซึ่งคอยช่วยเหลือเธอในการจัดการกับศัตรูฝั่งตรงข้าม</b>
<div class="content has-text-centered"><br><img src="/assets/73fbf6675a25a526cf4dc0dd7f0a20f9.png" height="auto" width="900px"></div>
          <g1 class="content has-text-left">Ranked Season ระบบจัดอันดับรูปแบบใหม่</g1>
          <b class="content has-text-left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ในการอัพเดทครั้งนี้ Valve ได้ยกเครื่องระบบคะแนนการจับคู่ (Matchmaking Rating) โดยเปลี่ยนเป็นระบบ Ranked Season ระบบฤดูกาลแข่งขันระยะเวลา 6 เดือนแทน ซึ่งผู้เล่นทุกคนจะได้รับเหรียญตรา (medal) เป็นตัวแสดงสัญลักษณ์อันดับของตัวเอง โดยจะมีเหรียญตรา 7 ทั้งสิ้นเจ็ดอันดับ การที่จะได้รับเหรียญตราในอันดับที่สูงขึ้น ผู้เล่นจะต้องชนะเพื่อรับดาวให้ครบ 5 ดวงในเหรียญตรานั้นๆ ก่อนที่จะก้าวเข้าสู่เหรียญตราถัดไป
<div class="content has-text-centered"><br><img src="/assets/71bafb5ef3a38d305a60e7c991c223fe.png" height="auto" width="900px"></div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เมื่อเริ่มต้นซีซั่นใหม่ ผู้เล่นทุกคนจะถูกปรับระดับ MMR โดยยึดจาก MMR ในซีซั่นก่อน ซึ่งคะแนน MMR ในซีซั่นก่อนๆ นั้นจะถูกบันทึกเอาไว้และสามารถนำขึ้นมาโชว์ในหน้าโปรไฟล์ของตัวเองได้
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;นอกจากนี้ Dueling Fates ยังมีการอัพเดทอื่นๆ อีกมากมาย เช่น ระบบไกด์ในการ์เล่นที่ปรับปรุงใหม่ โหมด Turbo เพื่อความรวดเร็วในการเล่น รวมถึงปรับเปลี่ยนแผนที่ สกิลของฮีโร่ และ ไอเท็มต่างๆ ซึ่งสามารถอ่านเพิ่มเติมได้ในที่มาท้ายข่าว</b>
          <b1>
            <strong>แหล่งข้อมูลจาก</strong> <A href="http://www.dota2.com/duelingfates/" style="color:red">Dota 2: Dueling Fates</A>
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
