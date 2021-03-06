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
          <g class="content has-text-left">แนะนำเกมส์ akiba's trip undead & undressed สำหรับ Otaku (เสียตัง)</g>
          <img src="\assets\Line.png" height="3px" width="1230px" >
          <b class="content has-text-left">เมื่อ 9000+ ชม. ที่แล้ว</b><g1>&nbsp;&nbsp;&nbsp;&nbsp;เป็นเกมสืที่ผมชอบมากๆ เลยอยากมาแนะนำเพื่อนๆ สามารถชื้อได้ใน Steam ในราคา 599 บาท</g1></br>
          <img src="\assets\KlwTntU.png" height="auto" width="900px">
          </br>
          <b class="content has-text-left"></br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เนื้อเรื่องของเกมจะเกี่ยวกับเมืองอันแสนสุขและคึกคักจะถูกปกคลุมด้วยความชั่วร้ายที่รายล้อมไปด้วยเหล่าแวมไพร์ เด็กหนุ่มจึงต้องรับชะตากรรมในการต่อสู้เพื่อทำให้เมืองนี้สงบสุขอีกครั้ง กล่าวถึงเด็กหนุ่มคนหนึ่งที่ถูกจับตัวไปเพื่อดัดแปลงให้เป็นแวมไพร์ และถูกช่วยเหลือโดยหญิงสาวนางหนึ่งที่ดูเหมือนมีพลังแฝงบางอย่าง โดยที่จะต้องออกไปตามล่าแวมไพร์ที่มีอยู่ทั่วเมืองอากิฮาบาระ วิธีที่จะจัดการกับเหล่าแวมไพร์เหล่านี้ได้ คือต้องปลดเปลื้องเสื้อผ้าของแวมไพร์ออกไปเพื่อให้แสงอาทิตย์นั้นแผดเผาเหล่าแวมไพร์นี้ให้สิ้นไป
</br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เกมนี้จะดำเนินเนื้อเรื่องในย่านอากิฮาบาระ ซึ่งเราก็เจอหลากหลายผู้คน ทั่งสาวๆมากมายให้เลือกถ่ายรูปและจับแก้ผ้า =w= และมีเควสย่อยให้เลือกทำหลากหลาย เนื้อเรื่องน่าสนใจ มีฉากจบหลายรูท และยังตื่นตาตื่นใจไปกับสิ่งต่างๆในย่านอากิฮาบาระ อาจจะมายืนฟังเพลงเล่นหรือดูสาวๆก็ได้ เป็นเกมที่เล่นได้สนุก เล่นได้เรื่อยๆเลยทีเดียว
</br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;แนว : แอ๊คชั่น ผจญภัย การ์ตูน สวมบทบาท
</br>
</br>
          <b class="content has-text-left">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- ตัวเอกของเรา ชื่อ (ตั้งเอาเอง)
ซึ่งเป็นหนุ่มโอตาคุ ที่มาหางานในย่านอากิฮาบาร่าแล้วไปเจอใบสมัครงานจึงร่วมงาน แต่เขาดันถูกหลอกดัดแปลงเป็น แวมไพร์
<div class="has-text-centered"><img src="\assets\24b7d444ed312ffd0d9682bacc7998d36b7f41bf.jpg" height="auto" width="900px"></div>
การเริ่มเข้ารูทนั้น ต้องเล่นระดับ Casual ขึ้นไปเท่านั้น นะครับ
- สาวน้อยผมม่วง Shizuku เป็นแวมไพร์ที่มาช่วยตัวเอกของเรา ในตอนแรก ฯลฯ
<div class="has-text-centered"><img src="\assets\dd902587864cf0c36544243fe0070c3f8cd30691.jpg" height="auto" width="900px"></div>
- สาวผมเหลือง Tokho เป็นเพื่อในสมัยเด็กของตัวเอกของเรา
<div class="has-text-centered"><img src="\assets\273a3455c30046b06c791e37efba3d029626bcc1.jpg" height="auto" width="900px"></div>
- เมดผมทอง Kati เป็นเมดประจำร้าน MOGGA (มั้งลืม)
<div class="has-text-centered"><img src="\assets\ab6a3814fe817f991f3e0f127d0a3a56e47276c1.jpg" height="auto" width="900px"></div>
- สาวใหญ่ผมนํ้าเงิน Shion เป็นคนของบนิษัท CEO
<div class="has-text-centered"><img src="\assets\aa2b82893bc263780b8f99e9f9fc875647cf3f71.jpg" height="auto" width="900px"></div>
- สาวน้อยผมเงิน Rin เธอเป็นไอดอลของ Akiba
<div class="has-text-centered"><img src="\assets\c8952b3991965f12b04c25404643f0bddef50151.jpg" height="auto" width="900px"></div>
- สาวน้อยผมดำ Nana เธอเป็น Sister แล้วเป็น NPC คอยอัพเกรดผสม อุปกรณ์สวมใส่ของเรา</b>
<div class="has-text-centered"><img src="\assets\57aa10aaafdb23f1b1efa16f8b7a3144f5eea7be.jpg" height="auto" width="900px"></div>
          <b class="content has-text-left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เมื่อเล่นจบรูทของแต่ละคนแล้วเมื่อเล่นจบเกมส์ 1 รอบ จะได้มาเป็น Model คาแร๊คเตอร์ได้ ซึ่งเราสามารถเล่นเป็น ตัวละครนั้นๆได้
เพิ่มเติม สังเกตุบางข้อความที่เป็นคำตอบของรูทนั้น จะมี หัวเล็กๆ นำหน้าประโยค ซึ่งจะบอกว่าประโยคนั้นเป็นรูทของคนๆนั้น
<g class="content has-text-left">ตย.ระบบในเกมส์</g>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- ระบบ Control ในการเล่นนั้น เกมส์นี้ปุ่ม คีบอร์ด ถือว่ายุ่งยากมาก ถ้ามีจอย+ถนัดใช้จอยเล่นจะง่านกว่าเยอะ
แต่ผมปรับเปลี่ยนเป็นในรูปแบบถนัด(คีบอร์ด) ขอตัวเองเลยไม่มีปัญหาในส่วนนี้</br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- ระบบแต่งตัวต่างๆ ใน ตัวเรา หรือ คู่หูแต่ละคนได้
ขึ้นแรก อาวุธ,ชุด,ท่าถอดชุด,ท่าทางต่างๆ,ประดับ
ขั้นสอง ชุดชั้นใน แต่ต้องมีความสนิดมากๆ จึงทำได้
อุปกรณ์นั้นแบ่ง เป็น 2 ระดับคือ 1 ธรรมดา 2 หายาก</br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- ระบบ Fusion สามารถเพิ่มดาเมจ หรือ เกราะ โดยการนำ อาวุธxอาวุธ / ชุดxชุด แต้มที่ได้นั้นจะมาจาก 20% ของอุปกรณ์นั้นๆ แต้มตันคือ 999
ซึ่งอาวุธมีอยู่ 4 ประเภท คือ หมัด,ดาบ,ดาบใหญ่,ของทุบ อาวุธแต่ละชิ้นประเภทเหมือนกัน แต่ทำ Combo + ความไวในการโจมตี ไม่เหมือนกัน</br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Visual editer สามารถปรับภาพ แสง สี ได้ตามใจชอบ</br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- ระบบ Mission มี 2 ประเภท คือ Main Mission กับ Side Mission ซึ่งจะเพิ่มเรื่อยๆตาม Main Mission บางอันสามารถทำซํ้าปั้มตังได้</br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- โหมดระดับความยาก มี 4 ระดับ คือ 1 Easy 2 Casual 3 Gamer เมื่อเล่นจบระดับ Casual หรือ Gamer จะปลดลีอคระดับความยาก
Otaku ซึ่งโหมดนี้ยากมาก ถ้าถูกถอดเสื้อ เสื้อนั้นก็จะหายไป ควรระวังอย่างยิ่ง</br></b>
<div class="content has-text-centered"><img src="\assets\391ede0a9847d5e9534779353d5f1f7f.jpg" height="auto" width="900px"></div>
<b class="content has-text-left">
<g1 class="content has-text-left"></br>ข้อควรระวัง</g1>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- ตอนออกเกมบางครั้ง เกมจะค้าง </br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- ถ้าเล่นแบบไม่เต็มจอ เกมจะค้าง เป็นบางครั้ง</br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;แนะนำ ให้เซฟทุกๆครั้งหลังจากคุยบทสนทนา ซึ่งผมเล่นไป 6 ชม ติดจู่ๆค้าง เล่นต้องเริ่มเล่นใหม่ เพราะมันไม่ """""AUTO SAVE"""""
เราจึงต้องเป็น """""AUTO SAVE""""" แทนนั้นเอง
</b>
            <br></br>
          <b1>
            <strong>แหล่งข้อมูลจาก</strong> <A href="https://pantip.com/topic/33729577" style="color:red">Yukino</A>
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
