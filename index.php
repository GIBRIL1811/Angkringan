<?php
include 'config/function.php';


$menu = query("SELECT * FROM menu WHERE kategori = 'Makanan'");

$menus = query("SELECT * FROM menu WHERE kategori = 'Minuman'");








?>


<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Beranda</title>
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="shortcut icon" href="assets/images/logo/LogoAngkringan.png" />


  <!-- ========================= CSS here ========================= -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/LineIcons.3.0.css" />
  <link rel="stylesheet" href="assets/css/tiny-slider.css" />
  <link rel="stylesheet" href="assets/css/glightbox.min.css" />
  <link rel="stylesheet" href="assets/css/main.css" />
</head>

<style>
  .bdr {
    box-shadow: rgba(0, 0, 0, 0.25) 0px 25px 50px -12px;
    border-radius: 15px;

  }

  .wit {

    width: 24%;
    margin: 6px;

  }

  @media (max-width: 767px) {
    .header .navbar-cart .cart-items .shopping-item .shopping-list li .content {
      width: 70%;
    }

    .wit {
      width: 48%;
      margin: 3px;
    }

    .trending-product .container {

      width: 100%;
    }
  }

  @media (max-width: 700px) {

    .wit {
      width: 100%;
      margin: 13px;
    }

    .trending-product .container {

      width: 100%;
    }

  }
</style>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark  m-0 " style="margin-top: 12px; background-color: #16213E;">
    <div class="container-fluid p-2">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#makanan">Makanan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#minuman">Minuman</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#denah">Denah</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="profile.php">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ProfileUmri.php">Profile Umri</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Start Header Area -->
  <header class="header navbar-area">
    <!-- Start Header Middle -->
    <div class="header-middle">
      <div class="container">
        <div class="row align-items-center d-flex">
          <div class="col-lg-3 col-md-3 col-7 p-2 w-90">
            <!-- Start Header Logo -->
            <a class="navbar-brand" href="index.html">
              <img src="assets/images/logo/LogoAngkringan.png" alt="Logo" />
            </a>
            <!-- End Header Logo -->
          </div>
          <div class="col-lg-5 col-md-7 d-xs-none p-2 flex-shrink-1">
            <!-- Start Main Menu Search -->
            <div class="main-menu-search">
              <!-- navbar search start -->
              <div class="navbar-search search-style-5">
                <div class="search-input">
                  <input type="text" placeholder="Search" />
                </div>
                <div class="search-btn">
                  <button><i class="lni lni-search-alt"></i></button>
                </div>
              </div>
              <!-- navbar search Ends -->
            </div>
            <!-- End Main Menu Search -->
          </div>
        </div>
      </div>
    </div>
    <!-- End Header Middle -->

    <!-- Start Header Bottom -->
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-8 col-md-6 col-12">
          <div class="nav-inner">
            <!-- Start Navbar -->
            <nav class="navbar navbar-expand-lg">
              <span class="toggler-icon"></span>
              <span class="toggler-icon"></span>
              <span class="toggler-icon"></span>
              </button>
            </nav>
            <!-- End Navbar -->
          </div>
        </div>

        <div class="nav-social p-3 d-flex">
          <div class="follow p-2 w-100">
            <h5 class="title">Follow Us:</h5>
            <ul>
              <li>
                <a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a>
              </li>
              <li>
                <a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a>
              </li>
              <li>
                <a href="https://instagram.com/arunika.angkringan?igshid=YmMyMTA2M2Y="><i class="lni lni-instagram"></i></a>
              </li>
              <li>
                <a href="javascript:void(0)"><i class="lni lni-skype"></i></a>
              </li>
            </ul>
          </div>
          <div class="col-lg-4 col-md-2 col-5 p-2 flex-shrink-1">
            <div class="middle-right-area">
              <div class="nav-hotline">
                <i class="lni lni-phone"></i>
                <h3>
                  Whatsapp:
                  <span>(+62) 853-7855-3769</span>
                </h3>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
    <!-- End Header Bottom -->
  </header>
  <!-- End Header Area -->

  <!-- Start Hero Area -->
  <section class="hero-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-12 custom-padding-right">
          <div class="slider-head">
            <!-- Start Hero Slider -->
            <div class="hero-slider">
              <!-- Start Single Slider -->
              <div class="single-slider" style="background-image: url(assets/images/menu/NasiUduk.jpg)">
              </div>
              <!-- End Single Slider -->
              <!-- Start Single Slider -->
              <div class="single-slider" style="background-image: url(assets/images/menu/sate.jfif)">

              </div>
              <!-- End Single Slider -->
            </div>
            <!-- End Hero Slider -->
          </div>
        </div>
        <div class="col-lg-4 col-12">
          <div class="row">
            <div class="col-lg-12 col-md-6 col-12 md-custom-padding">
              <!-- Start Small Banner -->
              <div class="hero-small-banner" style="background-image: url('assets/images/menu/maca.jfif')">

              </div>
              <!-- End Small Banner -->
            </div>
            <div class="col-lg-12 col-md-6 col-12">
              <!-- Start Small Banner -->
              <div class="hero-small-banner style2">
                <div class="content">
                  <h2>JUGA TERSEDIA DI GOFOOD</h2>
                  <p>Beli makanan di angkringan tanpa keluar rumah?</p>
                  <div class="button">
                    <a class="btn" href="https://gofood.link/a/EBWCDE1">Beli Sekarang</a>
                  </div>
                </div>
              </div>
              <!-- Start Small Banner -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Hero Area -->

  <!-- Start Makanan -->
  <section class="trending-product section" id="makanan" style="margin-top: 12px; background-color: #16213E;">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2 class="text-light">Makanan</h2>
          <hr>
          <br>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="d-flex flex-wrap ">

        <?php foreach ($menu as $menuu) : ?>
          <div class="card wit bdr p-3">
            <img src="assets/images/menu/bakso.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?= $menuu['nama'] ?></h5>
              <p class="card-text"><?= $menuu['deskripsi'] ?></p>
            </div>
            <div class="card-footer">
              <h4><b>Rp. <?= $menuu['harga'] ?></b></h4>
            </div>
          </div>
        <?php endforeach; ?>

      </div>
    </div>


    </div>
  </section>
  <!-- End Makanan -->



  <!-- Start Makanan -->
  <section class="trending-product section" id="minuman" style="margin-top: 12px; ">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2 class="text-dark">Minuman</h2>
          <hr>
          <br>
        </div>
      </div>
      <div class="container">
        <div class="d-flex flex-wrap ">
          <?php foreach ($menus as $menuu) : ?>
            <div class="card wit bdr p-3">
              <img src="assets/images/menu/bakso.jpeg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"><?= $menuu['nama'] ?></h5>
                <p class="card-text"><?= $menuu['deskripsi'] ?></p>
              </div>
              <div class="card-footer">
                <h4><b>Rp. <?= $menuu['harga'] ?></b></h4>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>
  <!-- End Makanan -->

  <!-- Start denah -->
  <section class="trending-product section" id="denah" style="margin-top: 12px; background-color: #16213E;">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2 class="text-light">Denah & Lokasi<p><a href="https://maps.app.goo.gl/DBCydESYtQWwJyia7">https://maps.app.goo.gl/DBCydESYtQWwJyia7</a></p>
          </h2>
          <hr>
          <br>
        </div>
      </div>

      <div class="mapouter">
        <div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=pekanbaru jl.kopen 62-68 tangkerang tengah kecamatan marpoyan damai&amp;t=k&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://mcpedls.com/">minecraft download</a></div>
        <style>
          .mapouter {
            position: relative;
            text-align: right;
            width: 100%;
            height: 400px;
          }

          .gmap_canvas {
            overflow: hidden;
            background: none !important;
            width: 100%;
            height: 400px;
          }

          .gmap_iframe {
            height: 400px !important;
          }
        </style>
      </div>

    </div>
  </section>
  <!-- End denah -->


  <!-- Start Shipping Info -->
  <section class="shipping-info">
    <div class="container">

      <h2>comment</h2>
      <hr>
      <div class="col">
        <div class="container">

          <form action="">
            <div class="mb-3">
              <input type="email" class="form-control" name="email" placeholder="Masukkan Email">
            </div>
            <div class="mb-3">
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Comment"></textarea>
            </div>
            <div class="mb-3">
              <button type="submit" class="btn btn-primary">Kirim</button>
            </div>
          </form>
        </div>

      </div>


    </div>
  </section>
  <!-- End Shipping Info -->

  <!-- Start Footer Area -->
  <footer class="footer">
    <!-- Start Footer Top -->
    <div class="footer-top">
      <div class="container">
        <div class="inner-content">
          <div class="row">
            <div class="col-lg-3 col-md-4 col-12">
              <div class="footer-logo">
                <a href="index.html">
                  <img src="assets/images/logo/LogoAngkringan.png" alt="#" />
                </a>
              </div>
            </div>
            <div class="col-lg-9 col-md-8 col-12 mt-5">
              <div class="footer-newsletter">
                <h4 class="title">
                  Angkringan Arunika
                  <span>Kunjungi lebih lengkap di media social kami</span>
                </h4>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Footer Top -->

    <!-- Start Footer Bottom -->
    <div class="footer-bottom">
      <div class="container">
        <div class="inner-content">
          <div class="row align-items-center">
            <center>

              <div class="col-lg-4 col-12">
                <div class="copyright">

                  <p>
                    Designed and Developed Gibril Yordan

                  </p>

                </div>
            </center>

          </div>
        </div>
      </div>
    </div>
    </div>
    <!-- End Footer Bottom -->
  </footer>
  <!--/ End Footer Area -->

  <!-- ========================= scroll-top ========================= -->
  <a href="#" class="scroll-top">
    <i class="lni lni-chevron-up"></i>
  </a>

  <!-- ========================= JS here ========================= -->

  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/tiny-slider.js"></script>
  <script src="assets/js/glightbox.min.js"></script>
  <script src="assets/js/main.js"></script>
  <script type="text/javascript">
    //========= Hero Slider
    tns({
      container: ".hero-slider",
      slideBy: "page",
      autoplay: true,
      autoplayButtonOutput: false,
      mouseDrag: true,
      gutter: 0,
      items: 1,
      nav: false,
      controls: true,
      controlsText: ['<i class="lni lni-chevron-left"></i>', '<i class="lni lni-chevron-right"></i>'],
    });

    //======== Brand Slider
    tns({
      container: ".brands-logo-carousel",
      autoplay: true,
      autoplayButtonOutput: false,
      mouseDrag: true,
      gutter: 15,
      nav: false,
      controls: false,
      responsive: {
        0: {
          items: 1,
        },
        540: {
          items: 3,
        },
        768: {
          items: 5,
        },
        992: {
          items: 6,
        },
      },
    });
  </script>
</body>

</html>