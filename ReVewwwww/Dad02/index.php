<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Dek-Dok Gaming</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.5.3/css/bulma.min.css">
    <link rel="stylesheet" href="/assets/home.css">
    <link rel="stylesheet" href="/assets/home.js">
    <link rel="icon" href="/DDG/static/assets/images/Berm.ico">
  </head>
  <header>

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
    <input type="text" name="search" placeholder="       Search..">
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
          <g class="content has-text-left">รีวิว DARK SOUL III</g>
          <img src="/assets/images/Line.png" height="3px" width="1230px" >
          <b class="content has-text-left">เมื่อ 9000+ ชม. ที่แล้ว</b>
          <img src="/assets/images/B4.jpg" height="auto" width="900px">
          </br>
          <b class="content has-text-left"><strong>DARK SOUL III</strong>
          </br>ประเภท : Action / Rpg / Openworld
          </br>  เครื่อง : PS4 / XboxOne / PC
          </br>  วันวางจำหน่าย : 12 เมษายน 2016
          </br>  พัฒนาโดย : FROM SOFTWARE
          </br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DARK SOUL III
            นี่คือเกมที่ได้ชื่อว่า “ทรมานคนเล่นมากที่สุดของยุค” บทสรุปของเรื่องราวไตรภาค
            นักรบผู้ไม่ยอมตาย กับวิญญาณที่ยังคงต่อสู้เพื่อเจตจำนงแห่งไฟ กำดาบให้มั่น
            แล้วผจญภัยในโลกแฟนตาซีสุดมืดมนที่จัดว่า“โคตรยาก”กับเกมภาคต่อที่ชื่อว่า “DARK SOUL III”
          </b>
          <g class="content has-text-left">Gameplay</g>
          <b class="content has-text-left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ระบบการเล่น “DARK SOUL III” จะยังคงเป็นแนว RPGบนโลกที่แสนโหดร้าย ทุกย่างก้าวต้องใช้สมาธิสูงเพราะศัตรูที่รออยู่ระหว่างทางทุกตัวสามารถฆ่าเราได้ ถ้ากดจังหวะพลาดไปเพียงเสี้ยววินาที อาจจะตายได้ทันทีและ SOULS (EXP) ทั้งหมดที่เก็บมาได้ก็จะตกอยู่ตรงที่ตายนั้น และเราจะไปฟื้นคืนชีพใหม่ที่กองไฟ BONFIRE และออกเดินทางกันใหม่กลับไปเก็บ SOULS ตรงที่เราตายและฝ่าด่านต่อไปจนถึงห้องบอสสุดโหดให้ได้</b>
          <g class="content has-text-left">ตัวละคร/สายอาชีพ</g>
          <b class="content has-text-left">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ตัวเกมส์สามารถสร้างหน้าตาตัวละครได้อิสระและเลือกสวมใส่เสื้อผ้าอาวุธหลากหลายชนิดได้ตามใจ ซึ่งอุปกรณ์แต่ละอย่างจะมีค่า Status เป็นเงื่อนไขกำหนดไว้ทำให้ความสามารถแตกต่างกันไป แต่ตอนเริ่มเกมส์ก็จะมีสายอาชีพที่เซ็ทค่า Status สำหรับสวมใส่อาวุธแต่ละชนิดไว้ให้เราเลือกเล่นตามความถนัด
</br></br>
&nbsp;&nbsp;<strong>Knight</strong> – เน้นพลังป้องกัน (Vit) และสวมชุดเกราะหนัก Lv.9
 </br>
&nbsp;&nbsp;<strong>Mercenary</strong> – เน้น (Dex) ใช้งานอาวุธ2มือโจมตีต่อเนื่อง Lv.8
 </br>
&nbsp;&nbsp;<strong>Warrior</strong> - เน้นพลังโจมตี (Str) ใช้งานอาวุธหนักพวกขวาน Lv.7
 </br>
&nbsp;&nbsp;<strong>Herald</strong> – ความคล่องตัวต่ำ ชดเชยด้วยหอกที่ใช้คู่กับโล่ได้ดี Lv.9
 </br>
&nbsp;&nbsp;<strong>Thief</strong> – มีค่า (Luck) ที่สูง เน้นความคล่องตัวกับอาวุธระยะประชิด Lv.5
 </br>
&nbsp;&nbsp;<strong>Assassin</strong> – เน้นความคล่องตัว ใช้อาวุธพวกดาบควบคู่กับสกิล Lv.10
 </br>
&nbsp;&nbsp;<strong>Sorcerer</strong> – มีค่า (Int) ที่สูง ใช้อาวุธมีดกับเวทย์ที่ไกลและรุนแรง Lv.6
 </br>
&nbsp;&nbsp;<strong>Pyromancer</strong> – เน้นการต่อสู้ระยะประชิดด้วยขวานเล็กและเวทย์ไฟ Lv.8
 </br>
&nbsp;&nbsp;<strong>Cleric</strong> - มีค่า (Faith/Luck) ที่สูง อาวุธกระบองระยะประชิดเวทย์ผลัก Lv.7
 </br>
&nbsp;&nbsp;<strong>Deprived</strong> – ค่าพลังทุกอย่างเท่ากันหมดเริ่มต้นที่ Lv.1</b>
          <g class="content has-text-left">เทคนิคการเล่น
</g>
          <b class="content has-text-left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ตัวเกมส์ซีรี่นี้ขึ้นชื่อเรื่องความยาก เพราะจังหวะการเคลื่อนไหวทุกอย่างจะอิงกับค่า STAMINA ถ้ากดฟันรัวๆหรือกระโดดหลบรัวๆจนหมดแรง ก็โดนศัตรูเล่นงานได้ง่าย และดาเมจที่ได้รับแต่ละทีก็หนักหน่วงเอาการ เทคนิคการเล่นคือให้อ่านรูปแบบกาารเคลื่อนไหวของศัตรูก่อน และรอจังหวะให้ศัตรูออกท่าโจมตีให้หมดชุดแล้วค่อยเข้าไปตี 2-3 ทีแล้วรีบกระโดดออกมาทิ้งระยะห่าง แล้วหาโอกาสเข้าตีใหม่ จำไว้ อย่าใจร้อน อย่าตีรัว อย่าแลก เน้นหลบ และรักษาระยะ</b>
          <g class="content has-text-left">CO-OP / เรียกพวกมาช่วย</g>
          <b class="content has-text-left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ด้วยความที่เกมนี้มีฉากกว้างมากและจุดตั้งกองไฟ BONFIRE แต่ละจุดก็อยู่ห่างกันมาก การจะผ่านด่านสำหรับผู้เล่นมือใหม่ที่ยังไม่คุ้นกับจังหวะการหลบ ก็ถือว่าเกมนี้อยู่ในระดับที่ยากมากจริงๆ แต่การเล่นออนไลน์หาคนมาช่วยก็ทำให้เกมส์ดูง่ายขึ้นเยอะ บอสโหดๆถ้ามีคนช่วยเป็นตัวล่อ อีกคนคอยทำดาเมจ อีกคนคอยซัพพอท บอสที่ว่ายากก็อาจจะง่ายขึ้นเยอะ ซึ่งวิธีการเล่นออนไลน์หาผู้เล่นมาช่วยสามารถทำได้ 2 แบบ
        </br>
        &nbsp;&nbsp;&nbsp;&nbsp;
<strong>White Sign Soapstone</strong> ใช้เปิดสัญญาณให้ผู้เล่นอื่นดึงเราเข้าไปช่วยสู้ในโลกของเขาได้ เป็นอีกวิธีที่ทำให้เราย้อนกลับไปเก็บเลเวลกับบอสที่ฆ่าไปแล้วได้ด้วย
</br>
&nbsp;&nbsp;&nbsp;&nbsp;<strong>Ember</strong> เป็นไอเทมที่ทำให้เรากลับมาในร่างท๊อปฟอร์มไฟลุกอีกครั้ง และยังสามารถดึงพวกที่เปิดสัญญาณวาร์ปไว้ที่พื้น ให้เข้ามาช่วยเราสู้ผ่านด่านในโลกของเราได้ด้วย และยังเป็นการดึงผู้เล่น PK ตัวแดง ที่จ้องจะฆ่าผู้เล่นด้วยกันเองเข้ามาอีกด้วย
</b>
<g class="content has-text-left">Game Rank S Score 99/100</g>
<g1 class="content has-text-left">เกมส์เพลยอดเยี่ยม / ภาพเสียงอลังการ / เนื้อเรื่องเหนือจินตนาการ</g1>
</br>
<b class="content has-text-left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;นี่คือเกมส์ที่ต้องใช้ฝีมือให้การเล่นอย่างแท้จริง ที่ต้องอาศัยทั้งทักษะการบังคับ และการตัดสินใจที่เฉียบคม สมาธิต้องมีตลอดเวลา นี่ไม่ใช่เกมส์แอคชั่นลุยแหลกกดปุ่มรัวๆกระหน่ำคอมโบฆ่าศัตรูที่อยู่ตรงหน้าครั้งละหลายสิบตัวอย่างง่ายดาย รูปแบบการเล่นแบบนั้นไม่สามารถใช้ได้กับ Dark Soul เพราะศัตรูที่อยู่ตรงหน้าทุกตัวล้วนอันตรายหมด การอ่านระยะโจมตี และจดจำรูปแบบการออกท่าของศัตรูเป็นเรื่องสำคัญมาก การหลบถือเป็นสิ่งสำคัญมากกว่าการเข้าตี บอสใหญ่จอมโหดทุกตัวมีพลังชีวิตที่เยอะมากกก การจะล้มมันได้ต้องอาศัยความอดทน ตอดเล็กตอดน้อย คอยหลบให้ดี เพราะเมื่อพลาดเพียงเสี้ยววินาทีอาจหมายถึงความตายได้เลย</b>
            <br></br>
          <b1>
            <strong>แหล่งข้อมูลจาก</strong> <A href="http://www.metalbridges.com/dark-soul-iii/" style="color:red">Web Master</A>
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
