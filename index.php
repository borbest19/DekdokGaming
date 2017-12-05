<?php include_once 'header.php' ?>
  <br>
  <main class="bodyScope">
    <br>
  <div class="slideshow-container is-paddingless">
    <div class="mySlides w3-animate-right">
      <div class="numbertext"></div>
      <a href="\News\New06\index.php">
      <img src="DDG/static/assets/images/B1NEW.jpg" style="width:100%">
      <div class="w3-display-bottommiddle w3-container w3-padding-16 w3-black">
         <font face="Superspace" size="5">ครั้งแรกที่เกมซีรีส์ Touhou ได้ขึ้นแพลตฟอร์มสตีม</font>
       </div>
     </a>
    </div>

    <div class="mySlides w3-animate-right">
      <div class="numbertext"></div>
      <a href="\ReVewwwww\Dad03\index.php">
      <img src="DDG/static/assets/images/B2NEW.jpg" style="width:100%" >
<div class="w3-display-bottommiddle w3-container w3-padding-16 w3-black">
   <font face="Superspace" size="5">[Review] Need for Speed การกลับมาของเกมรถซิ่งข้างถนน</font>
 </div>
</a>
    </div>

    <div class="mySlides w3-animate-right">
      <div class="numbertext"></div>
      <a href="\ReVewwwww\Dad01\index.php">
      <img src="DDG/static/assets/images/B3.jpg" style="width:100%">
      <div class="w3-display-bottommiddle w3-container w3-padding-16 w3-black">
         <font face="Superspace" size="5">[Review] Dark Soul lll ยอดนักรบหัวใจเหล็กกล้า</font>
       </div>
     </a>
    </div>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>
  <br>

  <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
  </div>
  <script>
  var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 6000);
}
  </script>

  <body  class="bodyScope" >

    <div style="width: 1100px; margin: 0 auto; overflow: hidden;">
    <h2 color="white">ข่าวล่าสุด</h2>
    <div class="line"></div>
    <div class="columns ">
      <div class="column is-6">
        <div class="big">
          <div class="card"><a href="\News\New01\index.php">
            <div class="card-content">
              <div class="image">
                <img src="News\assets\images\New01.jpg" alt="image-1">
              </div>
              <div class="content">
                <h3 class="title is-spaced is-4">ผู้สร้าง PUBG ลั่น! เกมของเขาไม่ควรค่าต่อการขึ้นแท่นรางวัล Game of the Year!</h3>
                <h5 class="category">2 HOUR AGO</h5>
                <p class="has-text-black">
                  เมื่อวานนี้ 15/11/2017 The Game Awards ได้ประกาศชื่อเกมที่ได้เข้าร่วมชิงสุดยอดเกมแห่งปีในแต่ละสาขาของปีนี้ ซึ่งดูจะขัดแย้งกันพอสมควร ที่ PlayerUnknown’s Battlegrounds ได้ขึ้นชื่อเข้าร่วมชิงรางวัล Game of the Year ด้วย แต่ Brendan Greene ผู้สร้างเกมนี้กลับบอกว่า...</p>
              </div>
            </div></a>
          </div>
        </div>
      </div>
      <div class="small">
        <div class="columns is-multiline">
          <div class="column">
            <div class="card"><a href="\News\New02\index.php">
              <div class="card-content ">
                <div class="image">
                  <img src="News\assets\images\New02.jpg" alt="image-1" >
                </div>
                <div class="content">
                    <h3 class="title is-spaced is-4">CD Projekt ยืนยัน! Cyberpunk 2077 จะมีองค์ประกอบการเล่นออนไลน์</h3>
                  <h5 class="category">2 DAYS AGO</h5>
                  <p class="has-text-black"> แม้ว่าเราจะไม่รู้อะไรมากนักเกี่ยวกับ Cyberpunk 2077 เพราะทาง CD Projekt ผู้พัฒนา ไม่ได้มีการเปิดเผย...
                  </p>
                </div>
              </div></a>
            </div>
          </div>
          <div class="column">
            <div class="card"><a href="\News\New03\index.php">
              <div class="card-content ">
                <div class="image">
                  <img src="News\assets\images\New03.jpg" alt="image-1" >
                </div>
                <div class="content">
                    <h3 class="title is-spaced is-4">Sledgehammer ประกาศ ระบบ Dedicated Server สำหรับ Call of Duty: WWII</h3>
                  <h5 class="category">4 DAYS AGO</h5>
                  <p class="has-text-black"> ก่อนหน้านี้ Call of Duty: WWII ได้มีปัญหาเซิร์ฟเวอร์ ปัญหาการแครชและปัญหาด้านเทคนิคหลายอย่าง จึงทำให้...
                  </p>
                </div></a>
              </div>
            </div>
          </div>
        </div>
        <div class="columns is-multiline">
          <div class="column">
            <div class="card"><a href="\News\New04\index.php">
              <div class="card-content ">
                <div class="image">
                  <img src="News\assets\images\New04.jpg" alt="image-1" >
                </div>
                <div class="content">
                    <h3 class="title is-spaced is-4">ครบรอบ 10 ปี Assassin's Creed</h3>
                  <h5 class="category">3 DAYS AGO</h5>
                  <p class="has-text-black">  เมื่อวันที่ 13 พ.ย. ที่ผ่านมา เป็นวันครบรอบ 10 ปี ของแฟรนไชส์เกมแนวแอคชั่นผจญภัยที่เน้นการลอบเร้น...
                  </p>
                </div>
              </div></a>
            </div>
          </div>
          <div class="column">
            <div class="card"><a href="\News\New05\index.php">
              <div class="card-content ">
                <div class="image">
                  <img src="News\assets\images\New05.jpg" alt="image-1" >
                </div>
                <div class="content">
                    <h3 class="title is-spaced is-4">Stardew Valley อัพเดทใหญ่!</h3>
                  <h5 class="category">5 DAYS AGO</h5>
                  <p class="has-text-black">ทาง ConcenedApe ผู้พัฒนา Stardew Valley เคยเปิดเผยว่าจะมี Patch ใหญ่ให้กับเกมนี้ ช่วงต้นปี 2018 ซึ่งแน่นอนว่า...</p>
                </div>
              </div></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <h2 color="white">รีวิวเกมจากเว็บมาสเตอร์ล่าสุด</h2>
    <div class="line"></div>
    <div class="foot">
      <div class="columns is-multiline">
        <div class="column">
          <div class="card"><a href="\ReVewwwww\Dad01\index.php">
            <div>
              <img class="image" src="\ReVewwwww\assets\images\B4.jpg" alt="image-1">
            </div>
            <div class="content">
              <h5>7 HOURS &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;200 VIEWS</h5>
            </div></a>
          </div>
        </div>
        <div class="column">
          <div class="card"><a href="\ReVewwwww\Dad02\index.php">
            <div>
              <img class="image" src="\ReVewwwww\assets\images\Hyperdimension_Neptunia_Re_Birth1.jpg" alt="image-1">
            </div>
            <div class="content">
              <h5>7 HOURS &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;500 VIEWS</h5>
            </div></a>
          </div>
        </div>
        <div class="column">
          <div class="card"><a href="\ReVewwwww\Dad03\index.php">
            <div>
                <img class="image" src="\ReVewwwww\assets\images\need-for-speed-2015.jpg" alt="image-1">
            </div>
            <div class="content">
              <h5>7 HOURS &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;580 VIEWS</h5>
            </div></a>
          </div>
        </div>
        <div class="column">
          <div class="card"><a href="\ReVewwwww\Dad04\index.php">
            <div class="">
              <img class="image" src="ReVewwwww/assets/images/marco.jpg" alt="image-1">
            </div>
            <div class="content">
              <h5>7 HOURS &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;690 VIEWS</h5>
            </div></a>
          </div>
        </div>
      </div>
    </div>
  </div>

        <!--<a href="#" class="column is-one-quarter">
        <div class="card">
          <div class="card-image">
            <figure class="image is-4by2">
              <div class="img2-resize">
                <img class="image" src="DDG/static/assets/images/review1 pic1.jpg" alt="image-1">
              </div>
            </figure>
          </div>
          <div class="card-content2">
            <h5 class="category has-text-left">&nbsp;7 HOURS AGO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;200 VIEWS</h5>
          </div>
        </div>
      </a>

      <a href="#" class="column is-one-quarter">
        <div class="card">
          <div class="card-image">
            <figure class="image is-4by2">
              <div class="img2-resize">
                <img class="image" src="DDG/static/assets/images/review1 pic2.jpg" alt="image-1">
              </div>
            </figure>
          </div>
          <div class="card-content2">
            <h5 class="category has-text-left">&nbsp;18 HOURS AGO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;500 VIEWS</h5>
          </div>
        </div>
      </a>

      <a href="#" class="column is-one-quarter">
        <div class="card">
          <div class="card-image">
            <figure class="image is-4by2">
              <div class="img2-resize">
                <img class="image" src="DDG/static/assets/images/review1 pic3.jpg" alt="image-1">
              </div>
            </figure>
          </div>
          <div class="card-content2">
            <h5 class="category has-text-left">&nbsp;4 DAYS AGO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;580 VIEWS</h5>
          </div>
        </div>
      </a>

      <a href="#" class="column is-one-quarter">
          <div class="card">
            <div class="card-image">
              <figure class="image is-4by2">
                <div class="img2-resize">
                  <img class="image" src="DDG/static/assets/images/review1 pic4.jpg" alt="image-1">
                </div>
              </figure>
            </div>
            <div class="card-content2">
              <h5 class="category has-text-left">&nbsp;7 DAYS AGO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;690 VIEWS</h5>
            </div>
          </div>
      </a>

      </div>-->
                <!--<a href="#" class="column is-6">
                  <div class="card">
                    <div class="card-image">
                      <figure class="image is-4by2">
                        <div class="img-resize">
                          <img class="photo" src="DDG/static/assets/images/news1 pic1.jpg" alt="image-1">
                        </div>
                      </figure>
                    </div>
                    <div class="card-content0">
                      <h3 class="title is-spaced is-4">แอบส่องตัวละครจากเกม Battle Carnival ว่าที่เกม FPS สุดมันส์แห่งปี</h3>
                      <h5 class="category">2 HOUR AGO</h5>
                      <p>
                         ถ้าพูดถึงเกม FPS น่าเล่นแห่งปี 2017 คงปฏิเสธไม่ได้ว่าต้องเป็นเกม Battle Carnival (https://bc.exe.in.th) เพราะนอกจากภาพของเกมนี้จะน่าเล่นมากๆ มีโหมดหลายรูปแบบให้เลือกตามถนัด แถมตัวละครของเกมยังเป็นอีกหนึ่งจุดเด่นที่ทำให้เกมนี้เป็นเกมที่มีคนจับตามอง และ มีคนรอเล่นกันอยู่ไม่น้อยเลยทีเดียว นั่นเป็นเพราะตัวละครแต่ละตัวมี Story และ มีความสามารถพิเศษเฉพาะตัว มีความสมจริงทำให้คนที่เล่นรู้สึกอินกับคาแรคเตอร์ของตัวละคร รู้สึกเหมือนได้สวมบทบาทเป็นตัวละครนั้นๆจริงๆ...
                      </p>
                    </div>
                  </div>
                  <a href="#" class="column is-3">
                    <div class="card">
                      <div class="card-image">
                        <figure class="image is-4by2">
                          <div class="img1-resize">
                            <img class="photo" src="DDG/static/assets/images/news1 pic2.png" alt="image-1">
                          </div>
                        </figure>
                      </div>
                      <div class="card-content">
                        <h3 class="title is-spaced is-4">นักศึกษาเตรียมลุย! Overwatch Thailand University เฟ้นหาสุดยอดทีมจาก 16 มหาวิทยาลัย ชั้นนำ!</h3>
                        <h5 class="category">2 DAYS AGO</h5>
                        <p>
                           เหล่านักศึกษาเตรียมตัวมันกันให้พร้อมกับการ
แข่งขัน E-Sports ในระดับมหาวิทยาลัยกับเกม Overwatch ในรายการ Overwatch Thailand...
                        </p>
                      </div>
                    </div>

                    <div class="card">
                      <div class="card-image">
                        <figure class="image is-4by2">
                          <div class="img1-resize">
                            <img class="photo" src="DDG/static/assets/images/news1 pic4.jpg" alt="image-1">
                          </div>
                        </figure>
                      </div>
                      <div class="card-content">
                        <h3 class="title is-spaced is-4">เผยโฉมอีกหนึ่งตัวร้ายกับบาทหลวงผู้บิด
                    เบี้ยวในตัวอย่างใหม่ของ The Evil Within 2</h3>
                        <h5 class="category">4 DAYS AGO</h5>
                        <p>
                           หลังจากที่ The Evil Within 2 เกมสยองขวัญภาคต่อได้ปล่อยเทรลเลอร์ออกมาเมื่อเดือนก่อนที่เผยให้เห็นตัวร้ายอย่าง Stefano ศิลปินโรคจิตออกมาให้ชมกัน วันนี้ทาง Bethesda...
                        </p>
                      </div>
                    </div>

                  </a>

                  <a href="#" class="column is-one-quarter">
                    <div class="card">
                      <div class="card-image">
                        <figure class="image is-4by2">
                          <div class="img1-resize">
                            <img class="photo" src="DDG/static/assets/images/news1 pic3.jpg" alt="image-1">
                          </div>
                        </figure>
                      </div>
                      <div class="card-content">
                        <h3 class="title is-spaced is-4">งานนี้กระเป๋าแฟ้บ เมื่อซีรี่ส์ Assassin's Creed กำลังลดราคาแบบจัดหนักบน Steam!</h3>
                        <h5 class="category">3 DAYS AGO</h5>
                        <p>
                           Assassin's Creed ถือเป็นอีกหนึ่งซีรี่ส์ของทาง Ubisoft ที่ได้รับความนิยมมานาน และเพื่อเป็นการต้อนรับการมาของภาคใหม่ของนัก
ฆ่าแห่งกาลเวลา ทาง Ubisoft จึงได้จัด...
                        </p>
                      </div>
                    </div>

                    <div class="card">
                      <div class="card-image">
                        <figure class="image is-4by2">
                          <div class="img1-resize">
                            <img class="photo" src="DDG/static/assets/images/news1 pic5.jpg" alt="image-1">
                          </div>
                        </figure>
                      </div>
                      <div class="card-content">
                        <h3 class="title is-spaced is-4">งานนี้มีหลอน! เมื่อพี่แป้ง zbing z. แคสเกม Home Sweet Home</h3>
                        <h5 class="category">5 DAYS AGO</h5>
                        <p>
                           ถือว่ามาแรงมากๆ กับเกมสยองขวัญสายเลือดไทยอย่าง Home Sweet Home ที่ในตอนนี้เหล่าแคสเตอร์ชื่อดังต่างก็แคสเกมนี้กันอย่างมาก
                    มาย ไม่เว้นพีแป้ง zbing z. ของเราที่ดูพี่เขา...
                        </p>
                      </div>
                    </div>
                  </a>
                </a>
      </div>
    </section>
</div>
    <h2 color="white">รีวิวเกมจากเว็บมาสเตอร์ล่าสุด</h2>
    <div class="line"></div>
    <section>
      <div class="columns is-multiline">
      <a href="#" class="column is-one-quarter">
        <div class="card">
          <div class="card-image">
            <figure class="image is-4by2">
              <div class="img2-resize">
                <img class="photo" src="DDG/static/assets/images/review1 pic1.jpg" alt="image-1">
              </div>
            </figure>
          </div>
          <div class="card-content2">
            <h5 class="category has-text-left">&nbsp;7 HOURS AGO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;200 VIEWS</h5>
          </div>
        </div>
      </a>

      <a href="#" class="column is-one-quarter">
        <div class="card">
          <div class="card-image">
            <figure class="image is-4by2">
              <div class="img2-resize">
                <img class="photo" src="DDG/static/assets/images/review1 pic2.jpg" alt="image-1">
              </div>
            </figure>
          </div>
          <div class="card-content2">
            <h5 class="category has-text-left">&nbsp;18 HOURS AGO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;500 VIEWS</h5>
          </div>
        </div>
      </a>

      <a href="#" class="column is-one-quarter">
        <div class="card">
          <div class="card-image">
            <figure class="image is-4by2">
              <div class="img2-resize">
                <img class="photo" src="DDG/static/assets/images/review1 pic3.jpg" alt="image-1">
              </div>
            </figure>
          </div>
          <div class="card-content2">
            <h5 class="category has-text-left">&nbsp;4 DAYS AGO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;580 VIEWS</h5>
          </div>
        </div>
      </a>

      <a href="#" class="column is-one-quarter">
        <div class="card">
          <div class="card-image">
            <figure class="image is-4by2">
              <div class="img2-resize">
                <img class="photo" src="DDG/static/assets/images/review1 pic4.jpg" alt="image-1">
              </div>
            </figure>
          </div>
          <div class="card-content2">
            <h5 class="category has-text-left">&nbsp;7 DAYS AGO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;690 VIEWS</h5>
          </div>
        </div>
      </a>-->
   </main>
<?php include_once 'footer.php' ?>
</body>
