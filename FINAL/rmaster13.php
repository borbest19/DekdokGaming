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
          <g class="content has-text-left">[Review] Half-Life 2</g>
          <img src="\assets\Line.png" height="3px" width="1230px" >
          <b class="content has-text-left">เมื่อ 9000+ ชม. ที่แล้ว</b>
          <img src="\assets\Half-Life-2-Buy.jpg" height="auto" width="900px">
          </br>
          <b class="content has-text-left">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;“ภาคต่อของเกม FPS ในตำนานอย่าง Half-Life” Half-Life 2 เป็นบทต่อเนื่องของเกมที่เป็นแบบฉบับเกม FPS อย่าง Half-Life ที่นอกจากจะมีกราฟิกที่สวยขึ้นแล้ว ยังมีการเพิ่มลูกเล่นของเกม พร้อมด้วยเนื้อหาที่เข้มข้นขึ้น เลยทำให้เกมนี้กลายเป็นเกมขวัญใจของนักเล่นเกมไปตลอดกาลเลยก็ว่าได้
Half-Life 2 เป็นภาคต่อของ Half-Life ซึ่งยังคงความเป็นเกมแนว Action , Adventure และมีความเป็น Puzzle อยู่ภายในตัวเหมือนกับภาคก่อน แต่ในภาคนี้ มีการพัฒนาด้านกราฟิกขึ้นมากภาคแรกมากเลยทีเดียว พร้อมด้วยรูปแบบการเล่นที่หลากหลายมากขึ้นอีกด้วย แล้วก็มีการดำเนินเนื้อเรื่องที่เป็นเรื่องเป็นราวมากขึ้น
><div class="content has-text-centered"></br><img src="\assets\Half-Life-2-Spec.jpg" height="auto" width="900px"></div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ภายในเกมนี้ เราไม่เพียงจะได้สัมผัสเกมในแบบ FPS เพียงอย่างเดียว แต่ยังผจญภัยในรูปแบบต่างๆ เช่น การขับยานพาหนะอย่างรถและเรือ การใช้อาวุธพิเศษในการแก้ไขปัญหาอย่าง Gravity Gun ซึ่งถือว่าเป็นการเล่นในรูปแบบใหม่ที่คุณจะไม่มีวันพบเจอในเกมอื่นเลย
<div class="content has-text-centered"></br><img src="\assets\Half-Life-2-Trailer.jpg" height="auto" width="900px"></div>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ส่วนใครที่คิดว่าเกมนี้เล่นได้แค่คนเดียว จริงๆแล้วเราสามารถเล่นแบบ Co-op ได้ด้วยผ่าน Mod ที่มีชื่อว่า Synergy<div class="content has-text-centered"></br><img src="\assets\Half-Life-2-Control.jpg" height="auto" width="900px"></div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;บางคนอาจจะไม่เข้าใจว่าทำไมถึงยกเกมซีรี่ย์นี้ให้กลายเป็นเกมในตำนาน นั่นก็เพราะเกมนี้เป็นเกมที่บุกเบิกเกมแนว FPS ในยุคแรกๆที่มีความลงตัวในทุกส่วน ไม่ว่าจะเรื่องฉากบู๊ ผจญภัย รวมไปถึงการเล่าเรื่องราว และยังมีกราฟิกที่สวยงามในแบบที่เกมอื่นๆในยุคนั้นไม่สามารถทำได้ จึงเป็นที่รู้จักกันอย่างแพร่หลาย และสำหรับ Half-Life 2 เองก็เป็นที่นิยมกันมากเช่นกัน มันเป็นเกมที่ทำให้เกิด Mod ต่างๆมากมายบน Source Engine ของ Half-Life 2 ซึ่งทำให้เกิดเป็นเกมใหม่ๆขึ้นมามากมาย และนั่นเองทำให้ชื่อเสียงของ Half-Life 2 ถูกบอกเล่าต่อกันมาจนถึงทุกวันนี้

<g class="content has-text-left has-text-danger">ความคุ้มค่าเทียบกับราคา?</g>
<b class="content has-text-left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สำหรับเกมนี้ ราคาเต็มอยู่ที่ 219 บาท ซึ่งถ้ามองจากคุณภาพของเกมแล้ว มันเกินคุ้มอยู่แล้ว ไม่ต้องคิดอะไรมากเลย แถมปัจจุบันเกมนี้ก็ลดราคาค่อนข้างเยอะด้วย เหลือเพียงไม่กี่บาทเท่านั้นเอง แถมยังเอาไปเล่นกับ Mod ต่างๆได้อีกเพียบอีกด้วย เท่ากับว่าซื้อเพียงเกมเดียวก็ได้เกมอีกหลายเกมเลยทีเดียว

แต่ว่าถ้าใครที่สนใจ อยากจะลองซื้อมาเล่นดูก่อนก็ทำได้นะ ถ้าไม่พอใจค่อยกดคืนเงินเอาก็ได้</b>
<div class="content has-text-centered"></br><img src="\assets\Half-Life-2-Save-Game.jpg" height="auto" width="900px"></div>
            <br></br>
          <b1>
            <strong>แหล่งข้อมูลจาก</strong> <A href="http://thaigameguide.com/review/half-life-2/" style="color:red">Gametoon</A>
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
