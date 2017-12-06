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
          <g class="content has-text-left">Hannah Telle และ Ashly Burch จะกลับมารับบท Max กับ Chloe อีกครั้ง</g>
          <img src="/assets/images/Line.png" height="3px" width="1230px" >
          <b class="content has-text-left">มากกว่า 9000 ชม. ที่แล้ว</b>
          <img src="/assets/24291500_697565600436855_2515886151724714282_o.jpg" height="auto" width="900px">
          </br>
          <br></br>
          <b class="content has-text-left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hannah Telle และ Ashly Burch จะกลับมารับบท Max กับ Chloe อีกครั้ง ในตอนพิเศษ "Farewell" ของ Life is Strange: Before the Storm!!
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สืบเนื่องจากเหตุการณ์นักพากย์เสียงประกอบทำการสไตร์คประท้วง เมื่อเดือนตุลาคม ปี 2016 ต่อเนื่องยาวมาจนปีนี้ (เล่าคร่าวๆคือ นักพากย์รวมตัวกันในชื่อว่า Screen Actors Guild‐American Federation of Television and Radio Artists (SAG-AFTRA) เพื่อประท้วงบริษัทพัฒนาและจัดจำหน่ายเกมในอเมริกากว่า 11 แห่ง ว่าบริษัทเหล่านี้ทำเงินจากผลงานที่พวกเขามีส่วนร่วมได้มากมาย และโปรแกรมเมอร์กับศิลปินต่างๆที่มีส่วนร่วมในการพัฒนาก็ได้รับค่าตอบแทนที่ดี แต่กับนักพากย์แล้วกลับไม่ได้ค่าตอบแทนที่สมน้ำสมเนื้อ เขาก็เลยรวมตัวกันประท้วงเรียกร้องให้มีการตอบแทนที่ดีขึ้นกว่าเดิม)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;และเหตุการณ์ดังกล่าวเพิ่งจะจบลง เมื่อวันที่ 23 กันยายน ที่ผ่านมา ที่ทาง SAG-AFTRA และบริษัทเกมได้ลงนามร่วมกัน หลังจากทำการประท้วงยาวนานถึง 340 วัน
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hannah Telle และ Ashly Burch ผู้พากย์เสียง Max และ Chloe ใน Life is Strange ก็เข้าร่วมเหตุการณ์ในครั้งนี้ด้วย และนั่นทำให้ Life is Strange: Before the Storm 3 ตอนแรกทาง Square Enix จึงต้องเปลี่ยนคนพากย์แทน (เป็น Rhianna DeVries พากย์เสียง Chloe Price )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ล่าสุดได้มีการยืนยันจากทาง Square Enix แล้วว่า เธอทั้ง 2 จะกลับมาพากย์เสียงตัวละครทั้ง 2 อีกครั้ง ในตอน "Farewell" ซึ่งเป็นตอนพิเศษใน Life is Strange: Before the Storm ที่จะออกในช่วงต้นปี 2018 ในขณะที่ Rhianna DeVries ซึ่งรับบทและเป็นคนโมแคป Chloe ในวัย 16 ปี ก็จะยังคงทำงานนี้ใน Farewell เช่นกัน
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"ทีมงานรู้สึกตื่นเต้นอย่างมากที่ได้ยินข่าวดีที่ทั้ง Hannah Telle และ Ashly Burch สามารถกลับมาร่วมงานให้เสียง Max และ Chloe อีกครั้ง"
Jeff Litchford, รองประธานบริษัท Deck Nine Games กล่าว
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"เรารู้สึกยินดีกับการแสดงของ Rhianna DeVries ในบทบาทของ Chloe ในภาค Before the Storm และเสียงตอบรับแฟนๆที่มีต่อผลงานของเธอก็ยอดเยี่ยม เธอจะยังคงทำงานอย่างใกล้ชิดกับเราในฐานะส่วนหนึ่งของทีมที่เราสร้างขึ้นมาอย่างใกล้ชิด"
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Farewell นั้นเป็นตอนพิเศษ สำหรับ Life is Strange: Before the Storm – Deluxe Edition ที่มีแผนจะเปิดให้เล่นอย่างเป็นทางการในช่วงต้นปี 2018 ที่ในตอนนี้ผู้เล่นจะได้รับบทเป็น Max Caulfield ในวัยเด็ก
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ซึ่งถือว่าเป็นข่าวดีสำหรับแฟนๆที่ชื่ืนชอบผลงานของเธอทั้ง 2 ใน Life is Strange แรก ก็จะได้ยินเสียงของเธออีกครั้งในต้นปีหน้านี้ </b>
<div class="content has-text-centered"><iframe width="900px" height="600px" src="https://www.youtube.com/embed/19z8RzlatS4" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe></div>
          <b1>
            <strong>แหล่งข้อมูลจาก</strong> <A href="https://www.facebook.com/goodgamecheapprice/" style="color:red">เพจ เกมถูกบอกด้วย</A>
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
