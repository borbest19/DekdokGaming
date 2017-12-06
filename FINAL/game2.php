<?php include_once 'header.php' ?>
<main>
  <br><br>
  <div class="bodycontainer">

    <br></br>
    <font face="Superspace" size="10" color="black"><b>Fire Emblem Heroes</b></font>
    <div class="line" style="height: 5px;"></div>
<!-- ลิงค์วิดิโอใส่ youtube.com/embed/xxxxx  -->
    <div class="content has-text-centered"><iframe width="900" height="600" src="https://www.youtube.com/embed/AWOcLSD_D1I" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe></div>
    <!-- ส่วนสไลด์ภาพ ปรับให้ภาพขนาดเท่ากัน อันนี้ใช่ 900 x 600 (ปรับใน ps) ตั้งชื่อไฟล์ตามเกม ได้แก้ง่ายๆ-->


    <section class="autoplay slider">
      <div>
        <img src="assets/feh1.jpg">
      </div>
      <div>
        <img src="assets/feh2.jpg">
      </div>
      <div>
        <img src="assets/feh3.jpg">
      </div>
      <div>
        <img src="assets/feh4.jpg">
      </div>
      <div>
        <img src="assets/feh5.jpg">
      </div>
      <div>
        <img src="assets/feh6.jpg">
      </div>
    </section>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>

    <script type="text/javascript">
      $(document).ready(function() {


        $('.autoplay').slick({
          slidesToShow: 3,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 3000,
        });
      });
    </script>


</main>
<center><?php include_once 'comment.php' ?></center>
<?php include_once 'footer.php' ?>
