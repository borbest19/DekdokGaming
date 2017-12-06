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
          <g class="content has-text-left">[CR] Review : Assassin's creed 4 Black Flag PC</g>
          <img src="\assets\Line.png" height="3px" width="1230px" >
          <b class="content has-text-left">เมื่อ 9000+ ชม. ที่แล้ว</b>
          <img src="\assets\1385262880-ac4-o.jpg" height="auto" width="900px">
          </br>
          <b class="content has-text-left"></br>
            <g1 class="content has-text-left">&nbsp;&nbsp;&nbsp;&nbsp;สเปค PC ที่ใช้ทดสอบ</g1>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CPU : I7 4770K
</br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RAM : 16GB
</br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;VGA : AMD HD 7870
</br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mode : Ultra
</br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<b>
<img src="\assets\1385262973-AC4BFSP201-o.jpg" height="auto" width="900px">
          <g class="content has-text-left">Graphic</g>
          <b class="content has-text-left">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Assassin's creed 4 ก็เป็นอีกหนึ่งเกมที่มีกราฟิกสวยงดงาม สมจริงมาก โดย เฉพาะ ใบหน้าของโมเดลตัว ละคร , แสงเงา , ภูเขา และ น้ำทะเล เป็นต้น ถึงแม้จะเล่นด้วยความละเอียด ระดับ Normal แล้วก็ตามความสวยงามของเกมก็ยังคงไว้ได้ครบทุกรายละเอียด </b>
          <img src="\assets\1385263276-AC4BFSP201-o.jpg" height="auto" width="900px">
          <g class="content has-text-left">ระบบการเล่น (Gameplay)</g>
          <b class="content has-text-left">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ตัวเกมยังคงเป็นเกมแนว Open-World สไตล์ลอบฆ๋า เช่นเดิม และมีแผนที่ ค่อนข้างใหญ่ ทำให้ผู้เล่นสามารถเดินสำรวจ ได้อย่าง อิสระ มาก และ มีเควสย่อยให้ได้ทำกันมากมาย ทั้ง บน บก และ บนทะเล แต่สิ่งแตกต่างอย่างเห็นได้ชัด คือ ภาคนี้ผู้เล่นจะได้เล่น ภารกิจ ออกเดินทางผจญภัยด้วย เรือมากขึ้น ถ้าหากระหว่างทางเรือของเราใกล้พังขึ้นมาผู้เล่นก็สามารถหา iTem มาปรับปรุ่ง หรือ ซ่อมแซม เรือ ของเราได้โดยการ ปล้น เรือ ของโจรสลัดต่างๆ ที่อยู่บริเวณ นั้นๆ ซึ่ง เรือ โจรสลัด แต่ละลำก็จะมี iTem ดรอป มาให้ที่แตกต่างกันไป นอกจากนี้ผู้เล่นยังสามารถ ผสม iTem ได้ เช่น เสื้อเกราะ , รองเท้า , ปืน จากการ ล่า สัตว์ ตามเกาะร้างที่อยู่ตามท้องทะเล ทางด้านระบบ มุมกล้องของการควบคุมปืนใหญ่ บน เรือทำมาได้มาไม่ค่อยดี โดยผู้เล่นจะสามารถยิงปืนใหญ่ ได้เพียงแค่มุม ขวา และ ซ้าย ของเรือเท่านั้น หากหันเรือไปทางอื่นจะไม่สามารถยิงได้เลย และ ที่สำคัญ ตัวเรือไม่สามารถ ถอยหลังได้เลย มีแต่ต้องเลียวขวา และ ซ้ายเท่านั้น</b>
          <g class="content has-text-left">เสียง (Sound)</g>
          <b class="content has-text-left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เสียงของ ธรรมชาติ ตาม ท้องทะเล และ รวมถึง ฟ้าร้อง ก็ทำได้ดี ตามสภาพ และ สถานการณ์ของฉากที่เกิดขึ้น เพื่อให้ผู้เล่นได้มีอารมณ์ร่วม ระหว่าง เล่นเกม มากขึ้น</b>

          <b class="content has-text-left"><g1 class="content has-text-left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สรุปคะแนน</g1>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7/10
</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
ข้อดี-มีแผนที่ค่อนข้างใหญ่ ทำให้เดินสำรวจในเมืองต่างๆได้อิสระ
</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
ข้อดี-สามารถ ผสม iTem ได้หลากหลาย
</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
ข้อด้อย-มุมกล้องปืนใหญ่ไม่ค่อยดีทำให้ยิงได้ยาก
</br></b>
<img src="\assets\assassins_creed_iv_black_flag_7-wallpaper-1280x720.jpg" height="auto" width="900px">
  <b class="content has-text-left">&nbsp;&nbsp;&nbsp;&nbsp;ใครสนใจที่จะเล่นเกมนี้เข้าไปโหลดกันได้ที่ Steam ได้เลย
</br>
 </b>
            <br></br>
          <b1>
            <strong>แหล่งข้อมูลจาก</strong> <A href="https://pantip.com/topic/31283422" style="color:red">happyudong</A>
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
