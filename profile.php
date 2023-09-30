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

    @import url("https://fonts.googleapis.com/css2?family=Poppins:weight@100;200;300;400;500;600;700;800&display=swap");


    body {
        font-family: "Poppins", sans-serif;
        font-weight: 300;
    }



    body {
        background: #eee;
    }

    .card {
        border: none;

        position: relative;
        overflow: hidden;
        border-radius: 8px;
        cursor: pointer;
    }

    .card:before {

        content: "";
        position: absolute;
        left: 0;
        top: 0;
        width: 4px;
        height: 100%;
        background-color: #E1BEE7;
        transform: scaleY(1);
        transition: all 0.5s;
        transform-origin: bottom
    }

    .card:after {

        content: "";
        position: absolute;
        left: 0;
        top: 0;
        width: 4px;
        height: 100%;
        background-color: #8E24AA;
        transform: scaleY(0);
        transition: all 0.5s;
        transform-origin: bottom
    }

    .card:hover::after {
        transform: scaleY(1);
    }


    .fonts {
        font-size: 13px;
    }

    .social-list {
        display: flex;
        list-style: none;
        justify-content: center;
        padding: 0;
    }

    .social-list li {
        padding: 10px;
        color: #8E24AA;
        font-size: 19px;
    }


    .buttons button:nth-child(1) {
        border: 1px solid #8E24AA !important;
        color: #8E24AA;
        height: 40px;
    }

    .buttons button:nth-child(1):hover {
        border: 1px solid #8E24AA !important;
        color: #fff;
        height: 40px;
        background-color: #8E24AA;
    }

    .buttons button:nth-child(2) {
        border: 1px solid #8E24AA !important;
        background-color: #8E24AA;
        color: #fff;
        height: 40px;
    }

    .profile2 {}
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
                        <a class="nav-link" aria-current="page" href="index.php">Beranda</a>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#denah">Denah</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="profile.php">Profile</a>
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



    <!-- Start profile -->
    <div class="bks">
        <section class="trending-product section" id="makanan" style="margin-top: 12px; background-color: #16213E;">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="text-light">Profile Angkringan</h2>
                        <hr>
                        <br>
                    </div>
                </div>

                <div class="propil d-flex">
                    <div class="teks p-2 w-100">
                        <p> Angkringan Arunika Berlokasi Jl. Kopen No.40 ( Depan mi tek-tek Ajo - Jl. Kereta api), Dalam penerepannya angkringan memiliki konsep sama pada angkringan pada umumnya, Dalam hal pemasaran Angringan Arunika ini menargetkan kalangan muda mudi yang ingin nongkrong di tempat yang asik serta dengan harga yang terjangkau untuk kelas Angkringan, dan diangkringan tersebut ownernya juga ramah dalam hal melayani pembeli, serta di angkringan terdapat potongan/diskon ketika telah datang 5 kali di angkringan tersebut dan akan mendapatkan mie nasi goreng dan es teh manis 1 yang kalau ditotalkan harganya lebih kurang RP 15.000.
                    </div>
                    <div class="Pgambar p-2 flex-shrink-1">
                        <img src="assets/images/hero/angkringan.jpeg" width="400px" alt="">
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- End profile -->



    <section class="trending-product section" id="minuman" style="margin-top: 12px; ">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <hr>
                    <h2 class="text-dark text-center">About Me</h2>
                    <hr>
                    <br>
                </div>
            </div>
        </div>


        <div class="propil d-flex mt-5 ">
            <div class="profile1">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-9">
                        <div class="card p-3 py-4">
                            <div class="text-center">
                                <img src="assets/images/hero/bggibril.jpeg" width="100" class="rounded-circle">
                            </div>
                            <div class="text-center mt-3">
                                <h5 class="mt-2 mb-0">Gibril Yordan</h5>
                                <span>Web Developed</span>
                                <div class="px-4 mt-1">
                                    <p class="fonts">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                                </div>
                                <ul class="social-list">
                                    <li><i class="fa fa-facebook"></i></li>
                                    <li><i class="fa fa-dribbble"></i></li>
                                    <li><i class="fa fa-instagram"></i></li>
                                    <li><i class="fa fa-linkedin"></i></li>
                                    <li><i class="fa fa-google"></i></li>
                                </ul>
                                <div class="follow p-2">
                                    <h5 class="title ">Follow Us:</h5>
                                    <ul class="d-flex justify-content-evenly mt-2 p-3">
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
                                <div class="buttons mt-2">
                                    <button class="btn btn-outline-primary px-4">Message</button>
                                    <button class="btn btn-primary px-4 ms-3">Contact</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="profile2">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-9">
                        <div class="card p-3 py-4">
                            <div class="text-center">
                                <img src="assets/images/hero/bgejak.jpeg" width="100" class="rounded-circle">
                            </div>
                            <div class="text-center mt-3">
                                <h5 class="mt-2 mb-0">Reza Sadam</h5>
                                <span>Owner Angkringan Arunika</span>
                                <div class="px-4 mt-1">
                                    <p class="fonts">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                                </div>
                                <ul class="social-list">
                                    <li><i class="fa fa-facebook"></i></li>
                                    <li><i class="fa fa-dribbble"></i></li>
                                    <li><i class="fa fa-instagram"></i></li>
                                    <li><i class="fa fa-linkedin"></i></li>
                                    <li><i class="fa fa-google"></i></li>
                                </ul>

                                <div class="follow p-2">
                                    <h5 class="title ">Follow Us:</h5>
                                    <ul class="d-flex justify-content-evenly mt-2 p-3">
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
                                <div class="buttons mt-2">
                                    <button class="btn btn-outline-primary px-4">Message</button>
                                    <button class="btn btn-primary px-4 ms-3">Contact</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <hr>
        </div>
    </section>

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