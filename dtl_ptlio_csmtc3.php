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
                <img src="assets/img/portfolio//branding-1.jpg" alt="">
              </div>

              <div class="swiper-slide">
                <img src="assets/img/portfolio//branding-2.jpg" alt="">
              </div>

              <div class="swiper-slide">
                <img src="assets/img/portfolio//branding-3.jpg" alt="">
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
                  <td>SK II FTE</td>
                </tr>
                <tr>
                  <th scope="row">Harga</th>
                  <td>4.995.000</td>
                </tr>
                <tr>
                  <th scope="row">Stok</th>
                  <td>10</td>
                </tr>
                <tr>
                  <th scope="row">Deskripsi</th>
                  <td>SK II FTE 230 ML+ genoptics aura 30 + cc cream</td>
                </tr>
                <tr>
                  <th scope="row">Kategori</th>
                  <td>Cosmetic</td>
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