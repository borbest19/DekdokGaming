<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Dek-Dok Gaming</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.5.3/css/bulma.min.css">
    <link rel="stylesheet" href="/base.css">
    <link rel="stylesheet" href="/home.js">
    <link rel="icon" href="/assets/Berm.ico">
    <link rel="stylesheet" type="text/css" href="slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
    background-image:url(/assets/search.png);
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
    <style>
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    border: 1px solid #888;
    width: 80%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:300px; opacity:0}
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:300px; opacity:0}
    to {top:0; opacity:1}
}

/* The Close Button */
.close {
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.modal-header {
    padding: 2px 16px;
    background-color: #202020;
    color: white;
    align-items: center;
    width: autop;
    height: auto;
}
.modal-header img {
  height: auto;
  width: 300px;
}
.modal-body {
  padding: 2px 16px;
  background-color: #8c0009;
  font: 24px Superspace;
  color: #ffffff;
  text-align: center;
  width: auto;
  height: auto;
}
.modal-footer {
    padding: 2px 16px;
    background-color: #202020;
    color: white;
    width: auto;
    height: 150px;
}
.loginBtn{
  cursor: pointer;
}
</style>
    <div class="column is-multiline">
      <div class="headcontainer">
        <!--ถ้าใช้ id จะอ้าง java script ได้-->
        <br>
        <div class="head">
          <div class="columns is-multiline">
            <div class="column is-4" align="right" style="margin-top:-50px">
              <a ahref="/index.html">
              <img  src="/assets/dekdoklogowhite.png" alt="" width="270" height="auto">
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
      <div class="loginBtn">
      <div id="myBtn"><img src="/assets/log-in.png" alt="" width="100px"></div>
      </div>
          </div>
        </div>
      </div>
      </div>
    </div>
    <div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header has-text-centered">
      <span class="close">&times;</span>
      <img src="/assets/dekdoklogowhite.png">
    </div>
    <div class="modal-body">
      <br><br>
      <p>&nbsp;&nbsp;Username&nbsp;&nbsp;&nbsp;<input type="text" placeholder="username" name="un"></p><br>
      <p>&nbsp;&nbsp;Password&nbsp;&nbsp;&nbsp;<input type="password" placeholder="Password" name="psw"></p><br>
      <button>Login</button><br><br><br>
      <p>You don't have account? Just click ----> <a href="/register.html" style="bold">Register</a></p>
      <br><br>
    </div>
    <div class="modal-footer">

    </div>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
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
          <a href="/newshome.html" class="nav-item">ข่าว</a>
          <a href="/reviewhome.html" class="nav-item">รีวิวเกม</a>
          <a href="/topchart.html" class="nav-item">เกมยอดนิยม</a>

        </nav>
      </div>
    </div>
  </header>
  <main>
    <br><br>
    <div class="bodycontainer">
      <div class="content has-text-centered has-text-black">
        <br>
        <h1 align="left"><font face="Superspace" style="font-size:50pt"><b>ครบรอบ 10 ปี Assassin's Creed</b></font></h1>
        <div class="line" style="height: 5px;"></div><br>
        <h5 align="left"><font face="RSU text" size="6">มากกว่า 9000 ชม. ที่แล้ว</font></h5><br>
          <img src="/assets/New04.jpg" height="auto" width="900px">
          </br>
          <br></br>

          <font face="RSU text" size="18px">
            <p align="left">

          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เมื่อวันที่ 13 พ.ย. ที่ผ่านมา เป็นวันครบรอบ 10 ปี ของแฟรนไชส์เกมแนวแอคชั่นผจญภัยที่เน้นการลอบเร้น จากเดิมเคยเป็นเพียงส่วนหนึ่งของเกมซีรีส์ Prince of Persia แต่สุดท้าย Ubisoft ยอมเปลี่ยนแนวคิด ทิ้งเจ้าชายแห่งเปอร์เซีย ที่ดำเนินมาอย่างยาวนาน แล้วมาสโคปที่ตัวละครใหม่<br>

          <b>นั่นคือวันวางจำหน่ายของ Assassin's Creed ภาคแรกที่วางจำหน่ายเมื่อ 13 พ.ย. 2007 หรือเมื่อ 10 ปีที่แล้ว</b><br>

          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;หลังจากที่จบการพัฒนา Prince of Persia: The Sands of Time คุณ Patrice Désilets ผู้สร้าง ได้เริ่มที่จะวางโปรเจค Prince of Persia ภาคใหม่ โดยเริ่มต้นด้วยชื่อภาคว่า Prince of Persia: Assassin ซึ่งได้แรงบันดาลใจมาจาก ชีวประวัติของ Hassan-i Sabbah (หรือผู้นำกลุ่มลัทธินักฆ่าที่ได้ชื่อว่าผู้เฒ่าแห่งขุนเขาจากตำนานของเปอร์เซีย ครั้งเมื่อศาสนาอิสลามยังแบ่งออกเป็นนิกายซุนหนี่และชีอะห์ ซึ่งเขาได้นำเหล่าสาวกหัวรุนแรงแยกตัวไปตั้งปราสาทอันเป็นสำนักปกครองของตนเองนามว่า Alamut ที่แปลว่า รังอินทรี) <br>

          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;แต่ในตอนนั้น Désilets รู้สึกว่า เจ้าชายเป็นตัวละครหลักใน Prince of Persia: Assassin ที่ไม่น่าสนใจเอาซะเลย เขาเลยเปลี่ยนให้ตัวละครเจ้าชายเป็น AI และให้ผู้เล่นบังคับตัวละคร Assassin แทน ซึ่งแน่นอนว่า Ubisoft ก็ไม่ได้อยากได้เกม Prince of Persia ที่ไม่ได้เล่นเป็นเจ้าชาย ตัวเกมจึงถูกเปลี่ยนให้กลายเป็นเกมในแฟรนไชส์ใหม่ และตัวละครเจ้าชายก็ถูกตีตกไป<br>

          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ในวันที่ 28 กันยายน 2006 สมัยนั้นคนยังไม่เข้าใจแนวคิดของเกม Assassin's Creed ทาง Jade Raymond ผู้อำนวยการสร้างได้กล่าวว่า Altaïr ตัวเอกภาคแรกนั้น เป็นเหมือน นักฆ่ายุคกลางที่มีอดีตอันลึกลับ และเขาไม่ใช่นักข้ามกาลเวลา ในขณะที่ Patrice Desilets ได้ให้สัมภาษณ์ในช่วงก่อนที่เกมจะวางจำหน่ายว่า ตัวละครหลักสามารถวิ่งและปีนป่ายได้เหมือนอย่างที่ Alex และ Rishard เคยทำได้ใน Prince of Persia ทำให้หลายคนน่าจะพอเดาได้ว่า น่าจะเหมือน Prince of Persia ในรูปแบบนักลอบสังหาร<br></p>

          <p align="middle">
            <img src="/assets/New04.0.jpg" height="auto" width="900px"><br></p>
  <p align="left">
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;หลังจากวางจำหน่าย Assassin's Creed ได้รับเสียงตอบรับไปทำที่ดีมาก แม้ว่าจะมีสื่อบางเจ้าระบุว่า เกมมันไม่ได้มีวิวัฒนาการอะไร น่าเบื่อ และเล่นๆไปก็ซ้ำซาก แต่ส่วนใหญ่ให้คะแนนดีถึงดีมาก รวมถึงได้รางวัลเกมแห่งปีในหลายสาขา และทำยอดขายได้ดี โดยวันที่เปิดตัวได้โค่น Call of Duty 4: Modern Warfare ของ Infinity Ward ลงจากอันดับ 1 ในสหราชอาณาจักร และในวันที่ 16 เมษายน ทาง Ubisoft ได้เปิดเผยว่า เกมทำยอดขายไปได้กว่า 8 ล้านชุด <br>

          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ซึ่งแน่นอนว่าจากความสำเร็จของ Assassin's Creed ทำให้มีภาคต่อออกมา โดยในปี 2008 ทาง Ubisoft ได้วางจำหน่าย Assassin's Creed: Altaïr's Chronicles ซึ่งเป็นภาคเนื้อเรื่องก่อนหน้า ลงให้กับ Nintendo DS และพอร์ตไปลง iPhone และ iPod Touch ตามมาในปีถัดไป และได้คะแนนจากสื่อกลางๆค่อนไปทางดี <br>

          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ต้นปี 2009 ทาง Ubisoft ได้ยืนยันว่า กำลังพัฒนา Assassin's Creed II อยู่ และมีกำหนดวางจำหน่ายช่วงปลายปี 2009 และนั่นทำให้แฟรนไชส์ Assassin's Creed เป็นที่รู้จักในวงกว้าง และเป็นภาคแรกที่มีการเชื่อมต่อด้วยฟีเจอร์บน Uplay พร้อมทั้งมีการโปรโมทด้วยสื่อต่างๆ อาทิ ภาพยนตร์สั้น นิยาย พร้อมทั้งออก Assassin's Creed: Bloodlines ซึ่งเป็นตัวเกมลงให้กับเครื่อง PSP ด้วย<br>

          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;หลังจากวางจำหน่าย Assassin's Creed II มันได้รับเสียงตอบรับอันยอดเยี่ยมด้วยคะแนนรอบสื่ออันสูงลิ่ว ด้วยการที่เกมขยายขอบเขตและความกว้าง ความหลากหลายที่มากกว่าเดิม พร้อมทั้งนำเสนอตัวละครใหม่ที่มีเสน่ห์มากๆ นั่นคือ Ezio Auditore ซึ่งภาค II นี้ทำยอดขายในสัปดาห์แรกไปได้กว่า 1.6 ล้านชุด แม้ว่าตัวเกมบน PC จะมีปัญหาจากการใช้ Uplay ที่ไม่สามารถเชื่อมต่อเซิร์ฟเวอร์ได้ จนกระทั่งทาง Ubisoft ต้องออก Patch แก้เพื่อถอดถอน DRM ออกไป โดยเปลี่ยนระบบมาเป็นการเปิดใช้ผลิตภัณฑ์ครั้งเดียวจบ แต่นั่นไม่ได้ทำให้เกมนี้เสื่อมความยอดเยี่ยมลงไป กลับกันคือมันกลายเป็น Assassin's Creed ภาคที่ดีเยี่ยมที่สุดตลอดกาล ที่แม้แต่เกมภาคใหม่ๆยังไม่อาจโค่นล้มตำนานของมันได้ รวมถึงตัวละครหลัก Ezio Auditore ของภาคนี้ก็กลายเป็นเหมือนมาสคอตประจำซีรีส์ Assassin's Creed ที่ถ้าพูดถึงเกมซีรีส์นี้ก็ต้องนึกถึงเขาคนนี้นี่ล่ะ <br>

          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ซึ่งทาง Ubisoft ก็ได้ออก Assassin's Creed: Brotherhood ในปี 2010 และ Assassin's Creed: Revelations ในปี 2011 ที่ยังคงสโคปเนื้อหาตัวละคร Ezio อยู่ ซึ่งทำให้ทั้ง 3 ภาคนี้ ได้กลายมาเป็นไตรภาคที่ยอดเยี่ยมที่สุดของ Assassin's Creed เช่นกัน<br>
</p>
          <p align="middle">  <img src="/assets/New04.1.jpg" height="auto" width="900px"><br></p>

        <p align="left">    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ในปี 2012 ทาง Ubisoft ได้่วางจำหน่าย Assassin's Creed III ซึ่งมีการเปลี่ยนเอนจิ้นใหม่ไปใช้ AnvilNext ตัวใหม่ที่ทำให้กราฟฟิกในเกมดูเป็นเกม Next Gen มากขึ้น และเป็นเกมที่ "ทะเยอทะยานอย่างที่สุด" เท่าที่เคยมีมาในประวัติศาสตร์ของบริษัท ซึ่งแม้ว่าตัวเกมออกมาจะมีเสียงก่นด่าจากแฟนๆอยู่บ้าง แต่ตัวเกมก็ทำยอดสั่งจองล่วงหน้าได้มากกว่าภาค Revelation ราว 10 เท่าหากเทียบในกรอบเวลาเดียวกัน และทำยอดขายในสัปดาห์แรกไปได้ถึง 3.5 ล้านชุด และทำยอดรวมไปได้ถึง 12 ล้านชุด และทำให้เกมภาคนี้ขึ้นแท่นเกมที่ขายดีที่สุดในแฟรนไชส์ (ในตอนนั้น)<br>

          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ด้วยความสำเร็จของ Assassin's Creed III สิ่งที่ได้รับการพูดถึงมากที่สุดอย่างหนึ่งคือระบบการเดินเรือและสงครามกลางมหาสมุทร ซึ่งได้ขึ้นชื่อว่าเป็นฟีเจอร์ที่ยอดเยี่ยมที่สุดของภาค 3 ทำให้ทาง Ubisoft ได้นำเอาสิ่งนี้ มาพัฒนาต่อยอดให้มันมีความอิสระมากขึ้นและออกสำรวจได้มากขึ้น จนกลายมาเป็น Assassin's Creed IV: Black Flag หรือภาคโจรสลัดที่วางจำหน่ายเมื่อปี 2013 ที่ในตอนนั้นถูกแฟนๆตำหนิอยู่พอสมควรอันเนื่องมาจากมันฉีกแนวจากเกมนักฆ่า กลายมาเป็นโจรสลัดแห่งแคริบเบียนไปซะฉิบ รวมถึงแฟนๆหลายคนที่ผิดหวังมาจาก Assassin's Creed III ซึ่งคาดว่าน่าจะเพราะเหตุนี้จึงทำให้สัปดาห์แรกนั้น ตัวเกม Assassin's Creed IV: Black Flag ทำยอดขายตกลงกว่า 60% เมื่อเทียบกับ Assassin's Creed III ที่วางจำหน่ายเมื่อปี 2012 และในช่วงเดือนพ.ค. ปี 2014 ทาง Ubisoft ก็ได้ยืนยันว่าภาคนี้ทำยอดไปได้ถึง 11 ล้านชุด และได้รางวัลเกมแห่งปีจากหลายสำนักในปีนั้น และได้ออกวางจำหน่าย Assassin's Creed Rogue ที่เป็นเหมือนจุดเชื่อมต่อกึ่งกลางระหว่าง Assassin's Creed IV: Black Flag และ Assassin's Creed III ซึ่งตัวเกมภาค Rogue ก็ได้รับเสียงตอบรับในขั้นกลางๆ ทั้งรอบสื่อและยอดขาย
          <br> </p>

        <p align="middle">    <img src="/assets/New04.2.jpg" height="auto" width="900px"> <br></p>

    <p align="left">        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;และในปลายปี 2014 ก็ได้มาถึงฝันร้ายที่สุดของเกมแฟรนไชส์ Assassin's Creed ด้วยความทะเยอทะยานอย่างที่สุดของ Assassin's Creed Unity ที่เพิ่งจะเปลี่ยนเอนจิ้นไปใช้ AnvilNext 2.0 เป็นครั้งแรก แต่ก็พยายามดันเกมภาคนี้ออกให้ทันเป็นเกมรายปี ซึ่งเดิมทีเคยมีกำหนดออกช่วงเดือนตุลาคม แต่ก็ได้มีการเลื่อนวางจำหน่ายไปเป็นเดือนพฤศจิกายน และเมื่อวางจำหน่ายก็ได้รับเสียงตอบรับอันย่ำแย่ ไม่ว่าจะเรื่องการ Optimize ที่แม้แต่การจะเล่นบนคอนโซลเพื่อให้ได้เฟรมเรทที่นิ่งพอจะเล่นลื่นๆก็ยังไม่สามารถทำได้ ยิ่งการเล่นบน PC ที่ต้องการสเปคที่สูงลิ่วที่ในสมัยนั้นเกมนี้เรียกการ์ดจอขั้นต่ำระดับ GTX660 (ในยุคปี 2014 ถือว่าสูงมากๆ) ปัญหาเรื่องบั๊กเยอะแยะไปหมดเหมือนเกมที่ทำไม่เสร็จ ระบบการต่อสู้ที่ถูกลดทอนความสามารถตัวละครลงแต่ยังคงไว้ซึ่งอุปสรรคเดิมที่เคยมีมา (แต่บางคนก็ชอบนะ) ที่ย่ำแย่ที่สุดก็คงเป็นเนื้อเรื่องโลกความเป็นจริงที่พยายามเล่นกับคนดู ถึงแม้ว่าตัวเกมจะมีกราฟฟิกที่สวยงาม ความอลังการจากการที่มีตัวละคร NPC จำนวนมากในเหตุการณ์ตามประวัติศาสตร์ยุคปฏิวัติฝรั่งเศส แต่ข้อดีของมันก็ไม่เพียงพอที่จะเอามาชั่งน้ำหนักกับข้อเสียที่มันมี
          <br>

          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ซึ่งจากความล้มเหลวในครั้งนี้ทำให้ Yannis Mallat ประธาน Ubisoft Montreal ได้ออกมาขอโทษแฟนๆจากการเปิดตัวที่ย่ำแย่ของ Unity พร้อมทั้งยกเลิก Season Pass และ Gold Edition ของภาค Unity ออกไป และแจก Dead Kings ซึ่งเป็น DLC แคมเปญ รวมถึงยอมชดเชยเกมในเครือ Ubisoft ให้ฟรีๆ สำหรับคนที่ซื้อตัวเกมแบบ Gold Edition หรือ Season Pass ไปแล้ว แต่นั่นก็ไม่เพียงพอกับรอยด่างพร้อยของ Unity ที่ทำไว้กับแฟรนไชส์นี้ ซึ่งในปลายปี 2014 ทาง Ubisoft เปิดเผยว่า ทำยอดขาย Assassin's Creed Unity และ Assassin's Creed Rogue รวมได้ราว 10 ล้านชุด <br>
</p>
          <p align="middle">  <img src="/assets/New04.3.jpg" height="auto" width="900px"> <br></p>

    <p align="left">        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;และในปี 2015 ทาง Ubisoft ก็ได้ประกาศ Assassin's Creed Syndicate ที่ได้มีการปรับปรุงอะไรหลายๆอย่างจากที่เคยพลาดใน Unity แม้ว่าภาคนี้จะได้รับเสียงตอบรับค่อนไปทางดี แต่แน่นอนว่า ฝันร้ายจาก Unity ยังคงหลอกหลอนแฟรนไชส์นี้ ทำให้ในสัปดาห์แรกที่เปิดตัววางขาย Syndicate ได้กลายเป็นเกมที่ยอดขายแย่ที่สุดเป็นอันดับ 2 ของแฟรนไชส์ โดยทำยอดขายเกินกว่า Assassin's Creed Rogue ไปนิดเดียว และทาง Ubisoft ได้ออกมายอมรับว่า ยอดขายในสัปดาห์แรกของ Syndicate นั้นมีผลมาจากความประทับใจในแง่ลบของ Assassin's Creed Unity เมื่อปี 2014 แต่สุดท้ายในสัปดาห์ที่ 2 Syndicate ก็ทำยอดขายเกินหน้า Unity ไปได้ และกลายเป็นเกมที่ขายดีอันดับ 9 ในสหราชอาณาจักร<br>

          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;หลังจากที่วางจำหน่าย Assassin's Creed Syndicate ทาง Ubisoft จึงได้ประกาศว่า จะหยุดพักการพัฒนาเกมในแฟรนไชส์ Assassin's Creed ไปก่อนเป็นเวลา 1 ปี เพื่อที่จะนำไปไตร่ตรองว่า ทิศทางของ Assassin's Creed จะเป็นอย่างไรต่อไป ทำให้ในปี 2016 ที่ผ่านมาชาวเกมจึงไม่ได้เห็นเกม Assassin's Creed ภาคใหม่ ที่ปกติจะออกเป็นรายปี<br>

          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;และล่าสุดเมื่อวันที่ 27 ตุลาคมที่ผ่านมา ทาง Ubisoft ก็ได้วางจำหน่าย Assassin's Creed Origins ที่เป็นการย้อนไปยังยุคอิยิปต์โบราณ จากที่เคยมีข่าวหลุดข่าวลือต่างๆออกมาก่อนหน้าว่าเกมในภาคนี้จะย้อนไปยังยุคดังกล่าว <br>

</p>         <p align="middle">   <img src="/assets/New04.4.jpg" height="auto" width="900px"><br></p>

    <p align="left">        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Assassin's Creed Origins ได้ทำการยกเครื่องระบบการต่อสู้ใหม่ทั้งหมด โดยปรับปรุงให้ถึงเลือดถึงเนื้อมาจากขึ้น และวิธีการบังคับจะคล้ายๆ Dark Souls พร้อมระบบเกมที่เปลี่ยนรูปแบบเกมให้กลายเป็นเกมสวมบทมากขึ้น พร้อมโลกทัศน์ที่สวยงามของอิยิปต์โบราณ ตัวละคร Bayek แห่ง Siwa และ Aya ที่มีเสน่ห์และมีความน่าสนใจ จนสื่อบางเจ้ายกให้เทียบเคียงกับ Ezio Auditore ของภาค 2 ได้เลย ระบบต่างๆที่เพิ่มเข้ามาและอุดช่องโหว่ที่ Assassin's Creed ภาคเก่าๆเคยมีมา แน่นอนว่าหลังวางจำหน่ายมันได้รับเสียงตอบรับที่ดีเยี่ยม ด้วยสื่อต่างๆที่ให้คะแนนอันสูงลิ่ว แม้ว่าจะมีข้อถกเถียงกันอยู่พอสมควรจากการที่ทาง Ubisoft ได้ใช้ระบบป้องกันการเจาะเถื่อน 2 ชั้นกับตัวเกมบน PC และถูกกล่าวหาว่า เพราะระบบดังกล่าวทำให้ตัวเกม Assassin's Creed Origins บน PC มีประสิทธิภาพการแสดงผลที่แย่ลง และกิน CPU ถึง 100% แต่ทาง Ubisoft ก็ได้ยืนยันว่าระบบ 2 ชั้นดังกล่าวไม่ได้มีผลอะไรกับการแสดงผล และได้อัพ Patch เพื่อแก้ไขให้เกมรันได้ลื่นขึ้น แต่นั่นก็ไม่ได้ทำให้คุณค่าของ Origins ลดทอนลงไปแต่อย่างใด<br>

          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ซึ่งใน 10 วันแรกนั้นทำยอดขายสูงกว่า Assassin's Creed Syndicate เป็นเท่าตัว และเพิ่มสูงขึ้นเรื่อยๆ รวมถึงได้ขึ้นแท่นเกมที่ได้เข้าชิงในสาขาเกมแห่งปีบางสำนัก และนั่นทำให้การกลับมาในครั้งนี้ของ Origins ก็เรียกได้ว่ากู้หน้าที่เสียไปตอน Unity ได้อย่างสวยงามสมศักดิ์ศรี และสามารถพูดได้ว่า Assassin's Creed Origins เป็น "ของขวัญ" ฉลองครบรอบ 10 ปีที่ทาง Ubisoft ได้มอบให้กับแฟนๆที่ติดตามแฟรนไชส์นี้มาอย่างยาวนานได้อย่างแท้จริง<br>
        </p></font>

<br>

        <p align="right">
          <strong>แหล่งข้อมูลจาก</strong><A href="https://en.wikipedia.org/wiki/Assassin's_Creed" style="color:red">Web Master</A>
        </p>
      </div>
    </div>

   </main>
   <footer class="footer" background-color="#8c0009">
   <div class="container">
   <div class="content has-text-centered has-text-white">
    <p>
      <a href=/aboutus.html>
       <img src="/assets/dekdoklogoblack.png" alt="logo" width="150px" align="center" style="margin-top:-40px;"> </a><br>
       <a href="/aboutus.html" target="_blank">
   <font face="RSU" size="2" color="black"><b>&#9658; About us</b></font></a>
   <font face="RSU" size="4" color="black" ><b>l</b></font>
   <font face="RSU" size="2" color="black"><b>Berm and his friends © 1997 Thailand (TH) </b></font>
    </p>
   </div>
   </div>
   </footer>
  </body>
</html>
