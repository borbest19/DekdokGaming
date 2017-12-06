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
          <g class="content has-text-left">(รีวิวเกม PC) Attack on Titan ดราม่าไม่เน้น มุ่งฟาดยักษ์ไททันเลือดสาด!</g>
          <img src="\assets\Line.png" height="3px" width="1230px" >
          <b class="content has-text-left">เมื่อ 9000+ ชม. ที่แล้ว</b>
          <img src="\assets\850.jpg" height="auto" width="900px">
          </br>
          <b class="content has-text-left">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;หลังจากที่ต้องรอลุ้นกันตั้งแต่ตอนที่ประเทศทำเกมตอนแรกๆ ในที่สุด ทาง KOEI TECMO ก็ได้เตรียมพอร์ตเกมพิฆาตไททันลง PC ด้วย เพียงแต่เกมนี้เป็นเกมที่เอ๊กครูชีฟบนเครื่องคอลโซล ทำให้ชาว PC อย่างพวกเรากว่าจะได้เล่นก็ต้องรอนานหน่อย ในที่สุดตัวเกมก็วางขายแล้ว เราจะมารีวิวเกมนี้กันครับ</br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ตัวเกมนั้นจะมีการอิงเนื้อเรื่องของแอนิเมชั่นของ SEASON 1 ทุกตอน เรียกได้ว่าสปอยกันเต็มๆ แต่ก็จะเริ่มเรื่องตั้งแต่แรก ทำให้คนไหนที่ไม่เคยดูการ์ตูนเรื่องนี้มาก่อนสามารถเล่นได้รู้เรื่อง ยิ่งไปกว่านั้น ทางผู้พัฒนาเกมได้เล่าเรื่องให้กระซับมากยิ่งขึ้น ตัดประเด็นดราม่ายาวๆ ออก และเน้นบทแอ็คชั่นกันแบบรัวๆ (ว่าตรงๆ ก็เน้นเนื้อ นํ้าไม่เอาเนี่ยแหละ) ทำให้การเล่าเรื่องไม่น่าเบื่อ
<div class="content has-text-centered"></br><img src="\assets\851.jpg" height="auto" width="900px"></div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;แต่แน่นอนว่าตัวเกมนั้นทำออกมาเพื่อแฟนๆ Attack on Titan โดยเฉพาะ เพราะนี่จะทำให้เราสามารถไล่ฆ่าไททันได้แบบที่เราดูในแอนิเมะเลย ซึ่งแน่นอนว่าตัวเกมจะแตกต่างจากตัวเกม Attack on Titan บนบราวเซอร์ เพราะตัวนี้จะสมจริงสมจังมากกว่า แถมแอ็คชั่นการสังหารไททันนั้นสะใจจนเทียบไม่ได้ทีเดียว หลายคนที่ดูแอนิเมะแล้วรำคาญอยากฆ่าไททันเองบ้าง เกมนี้จะได้ให้ฆ่าได้ตามใจชอบเลยหละครับ
<div class="content has-text-centered"></br><img src="\assets\852.jpg" height="auto" width="900px"></div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;รูปแบบการเล่นเกมนี้นั้นจะเหมือนกับทุกด่าน นั่นก็คือจะโยนคนเล่นไปยังแผนที่กว้างๆ ซึ่งก็คือในเมืองหรือพื้นที่ชานเมือง แล้วคนเล่นจะมีอิสระในการเคลื่อนไหวในฉากต่างๆ ว่าจะไปที่ไหน แต่ในเกมจะมีเป้าหมายให้ทำ ทั้งภารกิจหลักและภารกิจรอง แม้ว่าหากคนเล่นไม่ทำภารกิจรองจะไม่มีผลกับเนื้อเรื่อง แต่คนเล่นจะอดได้ของตอบแทน ซึ่งจะมีผลกับเลเวลตัวละครและได้รับวัตถุดิบในการอัพเกรดของ
<div class="content has-text-centered"></br><img src="\assets\853.jpg" height="auto" width="900px"></div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ในเกมจะมีส่วนผสมของ RPG อยู่บ้างนิดหน่อย นั่นก็คือคนเล่นจะสามารถอัพเกรดของได้ แต่เอาตรงๆ มันเหมือนเกม Monster Hunter มากกว่า อารมณ์ที่แนวคนเล่นจะต้องซื้อวัตถุดิบ , อัพเกรด (หรือสร้างอาวุธใหม่) ก่อนที่จะไปคุยกับ NPC เพื่อบอกว่าตัวเองพร้อมแล้ว ยิ่งตอนเล่นเคลียรเนื้อเรื่องหลักแล้ว จะมีเควสมาให้เลือกทำด้วย ยิ่งเหมือน Monster Hunter เข้าไปใหญ่ เพียงแต่ว่าเราไมได้ล่าสัตว์ประหลาด เราจะไปล่าไททันแทน
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;พูดถึงเรื่องไททัน ในเกมนี้คนเล่นจะได้เจอกับไททันหลากขนาด ตั้งแต่ตัวเล็กๆ สูงเท่าตึก 1 ชั้น ยันสูงเท่าตึก 10 กว่าชั้น แน่นอนว่าแต่ละตัวจะมีความยากง่ายในการฆ่าต่างกัน แต่จุดอ่อนของมันก็คือหลังคอ คนเล่นจะเลือกได้ว่าจะค่อยๆ ตัดแขนขา หรือจะฟันที่ข้างหลังคอเลย ตัวที่ดูแก่ๆ ผอมๆ จะฆ่าง่านหน่อย แต่ถ้าตัวใหญ่ๆ อ้วนๆ ก็จะฆ่ายากหน่อย
<div class="content has-text-centered"></br><img src="\assets\854.jpg" height="auto" width="900px"></div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;แต่อย่าคิดว่าตัวเกมจะมีรูปแบบการเล่นแบบเดิมๆ เพราะตัวเกมได้เพิ่มความหลากหลายให้คนเล่นระดับหนึ่ง นั่นก็คือการเพิ่มภารกิจรองเพื่อกดดันให้คนเล่นจะต้องรีบไปช่วย หรือไททันที่ช่วงหลังๆ จะเริ่มเคลื่อนไหวเร็วขึ้น มีกระโดดพุ่งโจมตี โดยเฉพาะการที่คนเล่นเผชิญกับไททันจำนวนหลายตัวพร้อมกัน ซึ่งจะทำให้อารมณ์การปะทะที่ต้องลุ้นตลอดเล่นได้สนุกขึ้น
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สิ่งที่จะดูแปลกๆ บ้างก็คือ ในเกมจะมี NPC ที่จะยืนให้ของกับเรา พวกนี้แทบจะครึ่งหนึ่งของเกมจะยืนเฉยๆ พอไททันมาก็ไม่ทำอะไร แต่ถ้าโดนจับกิน คนเล่นก็จะไม่ได้ของ รวมไปถึงตัวละครหลักของแอนิเมะที่มาเป็นเพื่อนร่วมทีมเรา สามารถ “ตาย” ได้หากคนเล่นปล่อยให้โดนไททันกิน แต่ก็ไม่มีผลใดๆ กับเนื้อเรื่องในเกม (อารมณ์เหมือนบาดเจ็บแล้วฟื้นตัวกลับมาใหม่ในฉากต่อไป)
<div class="content has-text-centered"></br><img src="\assets\856.jpg" height="auto" width="900px"></div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ถึงแม้ว่าเกมจะเก็บรายละเอียดได้ดี โดยเฉพาะการทำเกมสนองนีทของแฟนการ์ตูน Attack on Titan ดีมาก (คือทำดีกว่าฉบับภาพยนตร์ มากกก!!) แต่ที่น่าเสียดายก็ตรงที่ว่า เนื้อเรื่องค่อนข้างสั้นและสามารถจบได้ภายใน 5 – 6 ชั่วโมง (เพราะซีซั่นสองยังไม่ฉาย) แต่ต้องเรียกว่าเป็นเกมที่ทำออกมาดีเกินคาดที่แฟนๆ การ์ตูนเรื่องนี้คาดหวังเอาไว้ และถึงคุณจะไม่ใช่แฟนการ์ตูนเรื่องนี้ แต่ถ้าชื่นชอบเกมที่มีเนื้อเรื่องสไตล์แอนิเมะ โดยเฉพาะการไล่ล่ายักษ์ไททันละก็ ซื้อไปเล่น รับรองไม่ผิดหวังครับ
<div class="content has-text-centered"></br><img src="\assets\860.jpg" height="auto" width="900px"></div>
</b>
<g1 class="content has-text-left">
 &nbsp;&nbsp;&nbsp;&nbsp;จุดเด่น
 <b class="content has-text-left">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;– แอ็คชั่นลื่นไหล มันสะใจ เลือดกระจาย ต่อคอมโบสนุกมาก<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;– เกมเล่นไม่ยาก ค่อยๆ เพิ่มความท้าทายมากขึ้นจนไม่เบื่อ<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;– กราฟฟิกลื่นไหล กินสเปคไม่เยอะ และเฟรมเรทไม่ร่วง<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;– เก็บรายละเอียดจากในแอนิเมะดีมาก เล่ากระซับ มีเพิ่มเรื่องราวบางส่วนให้อ่านกันด้วย<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;– มีเล่นออนไลน์กับเพื่อนๆ ได้ (ไททันจะถึกกว่าปกติ)<br></b>
 &nbsp;&nbsp;&nbsp;&nbsp;ข้อเสีย
 <b class="content has-text-left">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;– บางจุดดูแปลกๆ อย่างเช่น NPC ที่ไม่ทำอะไรจะยืนอยู่แบบนั้นจนโดนไททันกิน<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;– บางครั้งไททันจะเดินชนฉากหรือสะดุดแล้วตัวสั่น ทำให้ดูตลก<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;– Windows 10 จะไม่มีเสียงพากย์ตัวละคร (คาดว่า 8.1 ก็เช่นกัน) เพราะเกมทำออกมารองรับ Windows 7<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;– เนื้อเรื่องแอบสั้นไปหน่อย (แต่ก็ตามแอนิเมะ ก็ได้ตามนี้แหละครับ)<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;– รูปแบบการเล่นจะคล้ายกับหมดทุกด่าน<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;– เกมออกแบบมาสำหรับจอยคอลโซล สำหรับคนเล่นคีย์บอร์ดจะกดลำบากหน่อย<br></b>
</g1>
</br><div class="content has-text-centered"><img src="\assets\Titan.jpg" height="auto" width="900px"></div>
            <br></br>
          <b1>
            <strong>แหล่งข้อมูลจาก</strong> <A href="http://www.g-genius.com/review-attack-on-titan-game-steam/" style="color:red">g-genius.com</A>
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
