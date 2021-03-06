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
          <g class="content has-text-left">[รีวิว] Shadowverse : แนะนำระบบเกม</g>
          <img src="\assets\images\Line.png" height="3px" width="1230px" >
          <b class="content has-text-left">เมื่อ 9000+ ชม. ที่แล้ว</b>
          <img src="\assets\images\20160125024818a0ebaoe0sclsytss.png" height="auto" width="900px">
          </br>
          <b class="content has-text-left">
            <g1>เกมการ์ดสไตล์อนิเมะ เล่นได้เล่นดีทั้งบน PC และมือถือ</g1></br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Shadowverse เป็นเกมแนวการ์ดเกมที่เคยเปิดให้บริการบนสมาร์ทโฟน ทั้ง Android และ iOS โดยเปิดให้โหลดเล่นได้ฟรี และตอนนี้ก็ได้เปิดให้เล่นฟรีบน PC ในสตีมด้วยเช่นกัน โดยสามารถลิ้งค์ตัวเกมจากมือถือมายังสตีมได้
</br><div class="has-text-centered"><img src="\assets\08963780014785773418198_Shadowverse2.jpg" height="auto" width="900px"></div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ภายในเกมมีเด็คให้ผู้เล่นเลือกเล่นได้ถึง 8 แบบ ได้แก่ Forestcraft Swordcraft Runecraft Dragoncraft Shadowcraft Bloodcraft และ Havencraft โดยที่แต่ล่ะเด็คจะมีรูปแบบ ลักษณะเด่น และการ์ดที่สามารถใช้ได้แตกต่างกันไป
</br><div class="has-text-centered"><img src="\assets\03422580014785773427041_Shadowverse3.jpg" height="auto" width="900px"></div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ระบบ Solo ของเกมนี้มี 2 รูปแบบคือ Main Story ซึ่งเป็นเนื้อเรื่องของเด็คทั้ง 8 เนื้อเรื่องถูกแบ่งออกเป็นพาร์ท ๆ แต่ล่ะช่วงจะมีเนื้อเรื่องสั้น ๆ และให้เราทำการสู้กับ AI เมื่อทำสำเร็จจะได้รับรางวัลต่าง ๆ ทั้งเงิน และการ์ดของแต่ล่ะเด็ค
</br><div class="has-text-centered"><img src="\assets\05589460014785773428302_Shadowverse4.jpg" height="auto" width="900px"></div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ส่วนโหมด Practice นั้นเราจะได้สู้กับ AI โดยจะสามารถเลือกระดับความยากและเด็คที่ AI จะใช้ได้ (ขอบอกว่า AI ระดับสูง ๆ จั๋วเทพมาก อะไรจะมือดีมีแก้ทางเราขนาดนี้)
</br><div class="has-text-centered"><img src="\assets\09361570014785773424288_Shadowverse5.jpg" height="auto" width="900px"></div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ระบบ Mutiplayer นั้นแบ่งออกเป็น 3 รูปแบบ ได้แก่ Ranked ซึ่งจะสุ่มเจอกับคู่ต่อสู้ที่อยู่ใน Rank ใกล้เคียงกับเรา Unrank ที่จะสุ่มคู่ต่อสู้ให้แต่จะไม่เก็บแต้ม Rank และระบบ Private ที่ทำให้เราสามารถสร้างห้องมาเล่นกับเพื่อนได้
และอีกหนึ่งระบบที่น่าสนใจก็คือโหมด Take Two โดยที่สามารถสร้างห้องเล่นกับเพื่อนหรือสุ่มคู่แข่งก็ได้ โดยในโหมดนี้เกมจะสุ่มเด็คมาให้เราเลือก 3 เด็ค จากนั้นเกมจะสุ่มการ์ดมาให้เรา 2 ชุด ชุดละ 2 ใบ เราต้องเลือกชุดใดชุดหนึ่ง และเลือกไปเรื่อย ๆ จะกว่าการ์ดจะครบ 30 ใบ จึงสามารถเริ่มเกมได้ เรียกได้ว่าเป็นระบบที่วัดดวงและความสามารถมากจริง ๆ
</br><div class="has-text-centered"><img src="\assets\01566200014785773435321_Shadowverse6.jpg" height="auto" width="900px"></div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;และแน่นอนสำหรับเกมแนวนี้ที่จะต้องมีการเปิดซองเพื่อมาการ์ดต่าง ๆ ในช่วงเริ่มต้นผู้เล่นจะได้ซองการ์ดมาค่อนข้างมาก ทำให้สามารถตั้งต้นได้ง่าย การเปิดซองนั้นสามารถใช้ได้ทั้งตั๋วจากรางวัลเควส เงินได้เกม รวมทั้งเงินเติมและที่สำคัญโอกาสการออกการ์ดระดับสูงของเกมนี้ถือว่าไม่น่าเกลียด โดยโอกาสออกการ์ดระดับตำนานอยู่ที่ 1.5 ต่อใบ ซองหนึ่งมี 8 ใบ เท่ากับมีโอกาสได้ถึง 12 เปอร์เซ็น (แต่อันนี้ก็อยู่ที่ดวงด้วย ผู้เขียนเปิดไป 50 ซองได้มา 3 ใบ เพื่อนเปิด 3 ซองได้มา 4 ใบ)
</br><div class="has-text-centered"><img src="\assets\03795990014785773438065_Shadowverse7.jpg.jpg" height="auto" width="900px"></div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;และจุดเด่นอีกอย่างของเกมนี้คือระบบ Evolve ในแต่ล่ะเกมเมื่อเล่นไประยะหนึ่ง ประมาณ 4-5 เทิร์น ระบบจะเปิดให้ใช้การ Evolve ได้
</br><div class="has-text-centered"><img src="\assets\05955130014785773432213_Shadowverse8.jpg" height="auto" width="900px"></div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เมื่อทำการ Evolve แล้ว ค่าพลังของการ์ดจะเปลี่ยนไป รวมทั้งรูปภาพบนการ์ดด้วย
</br><div class="has-text-centered"><img src="\assets\09095220014785773433229_Shadowverse9.jpg" height="auto" width="900px"></div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;นอกจากนี้ยังมีการ์ดบางใบที่ภาพบนการ์ดสามารถขยับได้อีกด้วย ซึ่งทำให้ความอยากเปิดซองหาการ์ดเพิ่มขึ้นอีกมากเลยทีเดียว
</br><div class="has-text-centered"><img src="\assets\01289560014785773443608_Shadowverse10.jpg" height="auto" width="900px"></div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;นอกจากการเปิดซองแล้ว การหาการ์ดดี ๆ มาใช้มีอีกวิธี นั่นก็คือการ Craft การ์ดที่ต้องการขึ้นมา ถ้าหากกดคำว่า Create มันจะแสดงภาพการ์ดที่เรายังไม่มีมาในสีขาวดำ
</br><div class="has-text-centered"><img src="\assets\01566200014785773435321_Shadowverse11.jpg" height="auto" width="900px"></div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ในการ Craft นั้นจะใช้ Vials ซึ่งจะหาได้จากการย่อยการ์ดที่ไม่ใช้ออกมา การ์ดต่อล่ะใบจะใช้ Vials ในการสร้าง และย่อยได้ Vials ไม่เท่ากัน โดยการ์ดระดับตำนานจะใช้ Vials ทั้งหมด 3500 อันต่อใบ
<br><div class="has-text-centered"><img src="\assets\01566200014785773435321_Shadowverse12.jpg" height="auto" width="900px"></div>
</b>
<g1>เกมดีและสนุกแบบนี้พลาดได้ยังไงล่ะคะ จริงมั้ย?</g1>
            <br></br>
          <b1>
            <strong>แหล่งข้อมูลจาก</strong> <A href="http://www.thisisgamethailand.com/content/Review-Shadowverse-%E0%B9%81%E0%B8%99%E0%B8%B0%E0%B8%99%E0%B8%B3%E0%B8%A3%E0%B8%B0%E0%B8%9A%E0%B8%9A%E0%B9%80%E0%B8%81%E0%B8%A1.html" style="color:red">TF_Hearthcarren</A>
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
