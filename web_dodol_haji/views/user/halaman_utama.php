

<!-- Home -->

<div class="home" style="height:700px">
<div class="home_slider_container" >

  <!-- Home Slider -->
  <div class="owl-carousel owl-theme home_slider">

    <!-- Slider Item -->
    <div class="owl-item home_slider_item">
      <div class="home_slider_background" style="background-image:url(<?= base_url('uploads/'); ?>sepuluh.jpg);">
      </div>
      <div class="home_slider_content_container">
        <div class="container">
          <div class="row">
            <div class="col">
              <div class="home_slider_content"  data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
                <div class="home_slider_title">Makanan Tradisional Khas BETAWI.</div>
               

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Slider Item -->
    <div class="owl-item home_slider_item">
      <div class="home_slider_background" style="background-image:url(<?= base_url('uploads/'); ?>enam.jpg)"></div>
      <div class="home_slider_content_container">
        <div class="container">
          <div class="row">
            <div class="col">
              <div class="home_slider_content"  data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Slider Item -->
    <div class="owl-item home_slider_item">
      <div class="home_slider_background" style="background-image:url(<?= base_url('uploads/'); ?>lima.jpg)"></div>
      <div class="home_slider_content_container">
        <div class="container">
          <div class="row">
            <div class="col">

            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Home Slider Dots -->

  <div class="home_slider_dots_container">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="home_slider_dots">
            <ul id="home_slider_custom_dots" class="home_slider_custom_dots">
              <li class="home_slider_custom_dot active">01.</li>
              <li class="home_slider_custom_dot">02.</li>
              <li class="home_slider_custom_dot">03.</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
</div>

<!-- Ads -->

<div class="avds">
<div class="avds_container d-flex flex-lg-row flex-column align-items-start justify-content-between">
  <div class="avds_small">
    <div class="avds_background" style="background-image:url(<?= base_url('uploads/'); ?>slogan.jpg)"></div>
    <div class="avds_small_inner">

      <div class="avds_small_content">
        <div class="avds_title"></div>
        <div class="avds_link"><a href="categories.html">See More</a></div>
      </div>
    </div>
  </div>
  <div class="avds_large">
    <div class="avds_background" style="background-image:url(<?= base_url('uploads/'); ?>proses.jpg)"></div>
    <div class="avds_large_container">
      <div class="avds_large_content">
        <!-- <div class="avds_title">Professional Made</div>  
        <div class="avds_text">Quality cake.</div> -->

      </div>
    </div>
  </div>
</div>
</div>



<br><br>
<section class="ftco-section ftc-no-pb ftc-no-pt" id="section_prologue" style="background-color:#e9e4e9;">
    <div class="container">
    <div class="row">

        <div class="col-md-4" style=" background: url(<?= base_url('uploads/'); ?>toko.jpg) no-repeat center center;">
         
        </div>

        <div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
          <div class="heading-section heading-section-wo-line pt-md-5 pl-md-5 mb-5">
            <div class="ml-md-0">
              <h1 class="mb-4 bread" id="prologue" style="margin-left:-40px">Profil Usaha</h1>

            </div>
          </div>
          <div class="pb-md-5" id="isi_prologue" style="margin-top:-40px;">
            <p align="justify">Saat ini Dodol Betawi Hj.Mamas Condet sudah dapat dinikmati disetiap saat.
            Dodol betawi yang kami buat ini adalah usaha warisan keluarga yang sudah turun temurun, khususnya dari keluarga mertua di Pasar Minggu. </p>

            <p align="justify">Kami mulai usaha pada tahun 1975, dan bermula dari menjajahkan dagangan ke tetangga hingga keliling door to door. Dari Pasar Minggu hingga Condet, 
            sampai pada saatnya kami dapat menjualnya, tanpa harus keliling, 
            tapi lewat para pelanggan kami yang makan dirumah, kebetulan saat itu kami juga membuka rumah makan betawi.
            <br><br>
            Baru pada tahun 1985 usaha dodol kami mengalami kemajuan, dari hanya mempunyai satu kuali hingga saat ini sudah 13 kuali kami punya.

            </p>

      </div>
    </div>
    </div>
    </div>
</section>


<!-- Products -->




<div class="products">

<div class="container">

  <div class="row">

    <div class="col">


      <div class="product_grid">

        <?php

         $db = mysqli_connect("localhost","dody5786_user_dodol","dodoluser","dody5786_dodol"); //keep your db name

        $q = $db->query("SELECT * FROM produk LIMIT 4");

          if($q->num_rows > 0){

            while(	$result=mysqli_fetch_array($q)){


        ?>
        <!-- Product -->
        <div class="product" width="100px">
          <div class="product_image">	<?php echo '<img  src="'.base_url('uploads/').$result['link_gambar'].'"/>'; ?> </div>

          <div class="product_content">
            <div class="product_title"><a href="<?= base_url('user/keranjang'); ?>"><?php echo $result['nama_produk'] ?></a></div>
            <div class="product_price"><?php echo $result['harga'] ?></div>
          </div>
        </div>


        <?php
        }
        }


        ?>

      </div>

    </div>
  </div>
</div>
</div>


<!-- Ad -->

<div class="avds_xl" style="background-image:url(<?= base_url('uploads/'); ?>color.jpg)">
<div class="container">
  <div class="row">
    <div class="col">
      <div class="avds_xl_container clearfix">
        <div class="avds_xl_background" ></div>

        <!--
        <div class="avds_xl_content">
          <div class="avds_title">Amazing Devices</div>
          <div class="avds_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus.</div>
          <div class="avds_link avds_xl_link"><a href="categories.html">See More</a></div>
        </div>
      -->
      </div>
    </div>
  </div>
</div>
</div>

<!-- Icon Boxes -->

<div class="icon_boxes">
<div class="container">
  <div class="row icon_box_row">

    <!-- Icon Box -->
    <div class="col-lg-4 icon_box_col">
      <div class="icon_box">
        <div class="icon_box_image"><img src="<?= base_url('assets/'); ?>images/icon_1.svg" alt=""></div>
        <div class="icon_box_title">Menjangkau Pesanan</div>
        <div class="icon_box_text">
          <p>Dapat menerima pesanan yang terjangkau oleh ekspedisi kami.</p>
        </div>
      </div>
    </div>

    <!-- Icon Box -->
    <div class="col-lg-4 icon_box_col">
      <div class="icon_box">
        <div class="icon_box_image"><img src="<?= base_url('assets/'); ?>images/icon_2.svg" alt=""></div>
        <div class="icon_box_title">Pengemasan Aman</div>
        <div class="icon_box_text">
          <p>Proses pengemasan yang baik sehingga kesegaran makanan tetap terjaga.</p>
        </div>
      </div>
    </div>

    <!-- Icon Box -->
    <div class="col-lg-4 icon_box_col">
      <div class="icon_box">
        <div class="icon_box_image"><img src="<?= base_url('assets/'); ?>images/icon_3.svg" alt=""></div>
        <div class="icon_box_title">Tanggap Respon</div>
        <div class="icon_box_text">
          <p>Menerima respon dan tanggapan pelanggan melalui media sosial kami.</p>
        </div>
      </div>
    </div>

  </div>
</div>
</div>
