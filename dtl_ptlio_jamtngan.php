<?php
require_once 'header.php';
?>

<body>
  <div class="container">
    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2> Detail Produk</h2>
        </div>

        <div class="position-relative h-100">
          <div class="slides-1 portfolio-details-slider swiper">
            <div class="swiper-wrapper align-items-center">

              <div class="swiper-slide">
                <img src="assets/img/portfolio/product-1.jpg" alt="">
              </div>

              <div class="swiper-slide">
                <img src="assets/img/portfolio/product-2.jpg" alt="">
              </div>

              <div class="swiper-slide">
                <img src="assets/img/portfolio/product-3.jpg" alt="">
              </div>

            </div>
            <div class="swiper-pagination"></div>
          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>

        </div>
        <div class="container">
          <div class="row justify-content-between gy-4 mt-4">
            <table class="table table-striped">
              <tbody>
                <tr>
                  <th scope="row">Nama</th>
                  <td>XONIX Jam Tangan Elektronik</td>
                </tr>
                <tr>
                  <th scope="row">Harga</th>
                  <td>348.780</td>
                </tr>
                <tr>
                  <th scope="row">Stok</th>
                  <td>30</td>
                </tr>
                <tr>
                  <th scope="row">Deskripsi</th>
                  <td>XONIX Jam Tangan Elektronik Digital LED Olahraga Pria Wanita Klasik Ho - MH-007, CHINA</td>
                </tr>
                <tr>
                  <th scope="row">Kategori</th>
                  <td>Electronik</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="col-8">
          <a class="btn btn-danger" href="index.php" role="button">Kembali</a>
          <a class="btn btn-primary" href="from_psnan.php" role="button">Beli Produk</a>
        </div>
      </div>
    </section><!-- End Portfolio Details Section -->
  </div>
  <?php
  require_once 'footer.php';
  ?>