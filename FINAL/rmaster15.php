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
          <g class="content has-text-left">Dead or Alive 5 Last Round [PC,PS4,XB1]</g>
          <img src="\assets\Line.png" height="3px" width="1230px" >
          <b class="content has-text-left">เมื่อ 9000+ ชม. ที่แล้ว</b>
          <img src="\assets\og.jpg" height="auto" width="900px">
          </br>
          <b class="content has-text-left">
            <g1 class="content has-text-left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dead or Alive 5 Last Round </g1>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ประเภท : Action Fighting
</br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เครื่อง : PlayStation 3 / PlayStation 4 / Xbox 360 / Xbox One / PC
</br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ผลิตโดย : Team Ninja / Koei Tecmo
</br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;วันวางจำหน่าย : Console 20/2/2015     PC 30/3/2015
</br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สุดยอดสาวงามที่อยู่คู่กับการประลองยุทธสุดมัน ที่ข้ามมาลงให้เล่นกันบนเครื่องรุ่นใหม่และ PCเป็นครั้งแรก
<div class="content has-text-centered"><br><img src="\assets\dead-or-alive-5-last-round-25.jpg" height="auto" width="900px"></div>
<g class="content has-text-left">Dead or Alive 5 Last Round คืออะไร???</g>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สังเวียนนักสู้สุดโหดที่ตัดสินว่าใครจะตายและใครจะรอด เป็นเกมส์แนวต่อสู้ความเร็วสูงที่สามารถซัดคู่ต่อสู้ให้ตายในการโจมตีชุดเดียว นำเสนอรูปแบบการต่อสู้ที่รวดเร็วสะใจ กับตัวละครที่เน้นไปทางสาวสวยหุ่นสะบึม ที่พัฒนางานภาพมาอย่างต่อเนื่องจนมาถึงภาค 5 ที่ทำตัวละครออกมาสวยงามราวกับมีชีวิตจริง โดยเนื้อเรื่องภาค 5 ไม่ได้เน้นที่เวทีแข่งขัน DOA เท่าไรตัวละครหลักจะวุ่นวายอยู่กับการหาร่างโคลนนิ่งของ Kasumi นางเอกสุดสวย นั้นก็คือเจ้า Alpha152 ส่วนเวทีประลอง DOA จะเป็นเรื่องของตัวละครใหม่ที่ชื่อ Mila นักมวยไทยสาวสวย กับ Tina นักมวยปล้ำสุดอึ๋มที่ต้องการเป็นแชมป์DOA ตามรอยพ่อของผู้เป็นสุดยอดนักสู้ในตำนาน และภาคนี้ยังนำเอาตัวละครจากเกมส์อื่นมาร่วมต่อสู้ด้วย นั่นคือ กลุ่มจาก Ninja Gaiden และ Virtua Fighter
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ตัวเกมส์ Dead or Alive 5 ชุดแรกได้ออกมาให้เล่นเมื่อ กันยายน 2012 บนเครื่อง PS3, Xbox360 หลังจากนั้นได้ทำออกมาให้เล่นบนเครื่อง PsVita ในชื่อว่า Dead or Alive 5 Plus โดยเพิ่มระบบต่อสู้แบบมุมมอง FPS ให้ผู้เล่นสามารถใช้นิ้วจิ้มโจมตีคู่ต่อสู้สาวให้ลงไปนอนแผ่กับพื้น (โคตหื่น แหะๆ) แล้วเกมส์ภาคเสริมก็ออกมาในชื่อ Dead or Alive 5 Ultimate ที่เป็นการเพิ่มตัวละครเข้าไปอีก 1 ชุดนั่นคือ Rachel, Momiji, , Jacky Bryant, Marie Rose(DLC), Phase 4(DLC), Nyotengu(DLC) และเพื่อเป็นการส่งท้ายเหล่าสาวงามในภาคนี้ ผู้สร้างจึงได้นำเกมส์นี้มาอัพสเกลให้เล่นกันบนเครื่อง PS4 XB1 PC โดยงานภาพย่อมต้องสวยกว่าเดิมแน่นอน พร้อมกับเพิ่มตัวละครใหม่เข้าไปอีกด้วย
<div class="content has-text-centered"><br><img src="\assets\dead-or-alive-last-round-characters.jpg" height="auto" width="900px"></div>
<g class="content has-text-left">ตัวละครใหม่ในภาค Last Round</g>
<g1 class="content has-text-left">&nbsp;&nbsp;&nbsp;Raidou</g1>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;บอสใหญ่จาก DOA ภาคแรก สุดยอดนินจาจากหมู่บ้านมุเกนเทนชิน ผู้มีศักดิ์เป็นอาของ Hayate และ Kasumi ที่กลับมาใหม่ในร่างจักรกลไซบอร์ก
<div class="content has-text-centered"><br><img src="\assets\dead-or-alive-5-last-round-31.jpg" height="auto" width="900px"></div>
<g1 class="content has-text-left">&nbsp;&nbsp;&nbsp;Honoka</g1>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สาวน้อยวัยใสในชุดนักเรียนญี่ปุ่นวัยเดียวกับนู๋ Marie Rose อกไข่ดาว แต่ โอโนโกะ มากับเรือนร่างอวบอัดเนื้อนมไข่ ผู้ใช้ศิลปะการป้องกันตัวแบบมวยวัดที่เรียกว่า Honoka Fu
<div class="content has-text-centered"><br><img src="\assets\dead-or-alive-5-last-round-24.jpg" height="auto" width="900px"></div>
<g class="content has-text-left">Gameplay / การเล่น</g>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DOA5 ถือว่าเป็นเกมส์แนวต่อสู้ที่ดีที่สุดเกมส์นึงเลยก็ว่าได้แต่ถ้าเทียบกับ StreetFighter หรือ Tekken จะให้ความรู้สึกว่า DOAจะเล่นยากและซับซ้อนกว่าหลายขุม แต่ถ้าจับทางได้จะมันมากเลยครับ<br>
<g1 class="content has-text-left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;โดยปุ่มพิ้นฐานจะมี 4 ปุ่ม
<b class="content has-text-left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;P = ต่อย</br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;K = เตะ</br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;H = ป้องกัน/สวนกลับ</br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;T = จับทุ่ม</br>
</b>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;การโจมตี
<b class="content has-text-left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เน้นกด P หรือ K เรียงปุ่มตามที่กำหนดไว้ สาารถดูท่าได้จาก View Move List โดยการโจมตีจะมี 3 ระดับ บน กลาง ล่าง</br>
</b>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;การป้องกัน
<b class="content has-text-left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ห้กดถอยหลังหรือจะกด H ค้างก็ได้ป้องกันมี3ระดับ บน กลาง ล่าง ใช้ปุ่มทิศทางในการเปลี่ยนระดับ</br>
</b>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;การสวนกลับ
<b class="content has-text-left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;กด H พร้อมปุ่มทิศทาง มีทั้งหมด 4 ระดับ ถ้ากดสวนกลับในจังหวะที่คู่ต่อสู้โจมตีมาพอดี จะเป็นการ Counter Attack อย่างรุนแรง ถือเป็นจุดเด่นของDOAเลย</br>
</b>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;การจับทุ่ม
<b class="content has-text-left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;กด T เมื่ออยู่ใกล้ๆคู่ต่อสู้จะเป็นการจับทุ่ม กดT+ทิศทางเป็นการทุ่มแบบอื่น</b></g1>
<div class="content has-text-centered"><br><img src="\assets\20171205103936_1.jpg" height="auto" width="900px"></div>
<g class="content has-text-left">ระดับการโจมตี</g>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;รูปแบบการโจมตีในเกมส์นี้จะมี 3 ระดับ คือ บน กลาง ล่าง การรับมือจากการโจมตีสามารถทำได้โดยการ ตั้งการ์ด ป้องกัน หรือ สวนกลับด้วยการ Hold ซื่อเมื่อโฮลได้ตรงกับจังหวะที่คู่ต่อสู้โจมตีมาก็จะสามารถสวนกลับกรโจมตีนั้นได้อย่างหลักหน่วง ทำให้สามารถพลิกสถานการณ์ได้เลยทีเดียว
<div class="content has-text-centered"><br><img src="\assets\doa5-controller.jpg" height="auto" width="900px"></div>
<g class="content has-text-left">ท่าไม้ตาย POWER BLOW/PB</g>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;แต่ละตัวจะมีท่าไม้ตายไม่เหมือนกัน วิธีใช้คือกด P+K+ทิศทาง ค้าง แล้วปล่อย เท่านี้กระบวนท่าสุดอลังการก็จะออกมา แถมรุนแรงซะจนฉากรอบข้างพังทลายได้เลย แต่การจะใช้ท่าไม้ตายจำเป็นต้องกดชาร์ทนานพอสมควร สามารถสร้างจังหวะชาร์ตท่าได้จากการทำคอมโบให้ขึ้น Critical Stun แล้วอัดต่อจนขึ้น Critical Burst ได้ก็จะทำให้คู่ต่อสู้หยุดชะงักนานพอให้เราใช้ท่าไม้ตายได้
<div class="content has-text-centered"><br><img src="\assets\ss_2fef5897fe41863708f2de70800ced0913708f57.1920x1080.jpg" height="auto" width="900px"></div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ตัวเกมส์ Dead or Alive 5 Last Round จะวางจำหน่ายให้กับเครื่อง PlayStation 4 / Xbox One ในวันที่ 20 กุภาพันธ์ 2015 และจำหน่ายในระบบ PC รูปแบบดาวน์โหลดผ่านระบบ Steam ในวันที่ 30 มีนาคม 2015
</b>
<div class="content has-text-centered"><br><img src="\assets\dead-or-alive-5-last-round-09-01-15-1.jpg" height="auto" width="900px"></div>

            <br></br>
          <b1>
            <strong>แหล่งข้อมูลจาก</strong> <A href="http://www.metalbridges.com/dead-or-alive-5-last-round-pc-download/" style="color:red">metalbridges.com</A>
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
