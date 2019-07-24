<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>PT. Astana Noor Azlina</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
        <meta property="og:title" content="">
        <meta property="og:image" content="">
        <meta property="og:url" content="">
        <meta property="og:site_name" content="">
        <meta property="og:description" content="">

        <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
        <meta name="twitter:card" content="summary">
        <meta name="twitter:site" content="">
        <meta name="twitter:title" content="">
        <meta name="twitter:description" content="">
        <meta name="twitter:image" content="">

        <link href="<?php echo base_url() ?>assets/img/favicon.png" rel="shortcut icon">
        <link href="<?php echo base_url() ?>assets/css/google-font.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/lib/animate-css/animate.min.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet">

        <!-- Required JavaScript Libraries -->
        <script src="<?php echo base_url() ?>assets/lib/jquery/jquery.min.js"></script>
        <script src="<?php echo base_url() ?>assets/lib/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url() ?>assets/lib/superfish/hoverIntent.js"></script>
        <script src="<?php echo base_url() ?>assets/lib/superfish/superfish.min.js"></script>
        <script src="<?php echo base_url() ?>assets/lib/morphext/morphext.min.js"></script>
        <script src="<?php echo base_url() ?>assets/lib/wow/wow.min.js"></script>
        <script src="<?php echo base_url() ?>assets/lib/stickyjs/sticky.js"></script>
        <script src="<?php echo base_url() ?>assets/lib/easing/easing.js"></script>

        <!-- Template Specisifc Custom Javascript File -->
        <script src="<?php echo base_url() ?>assets/js/custom.js"></script>
        <style>
            .layanan-item {
                background: #F6F7F2;
                padding: 0% 10% 12% 10%;
                text-align: center;
                line-height: 1.6;
                font-size: 14px;
                position: relative;
                z-index: 1;
            }
            .layanan-item:hover .fa{
                background:#67b5ea;
            }
            .layanan-item .fa {
                width: 110px;
                height: 110px;
                color: white;
                background: #f5ab24;
                font-size: 45px;
                padding-top: 25px;
                border-radius: 100px;
                margin-top: -40px;
                margin-bottom: 30px;
                border: 5px solid white;
                transition: all 0.4s;
            }
            .shadow-hover {
                transition: all 0.4s linear;
            }
            .shadow-hover:hover{box-shadow:0px 10px 25px rgba(0, 0, 0, 0.15);}

            .font-icon-smaller {
                font-size: 22px;
            }
            .font-icon {
                font-size: 28px;
            }
            .section-title-contact {
                font-size: 28px;
                color: #111;
                text-transform: uppercase;
                text-align: center;
                font-weight: 700;
            }
            .foot-section {
                background-color: #D4D4D4;
            }
            .sticky-container{ 
                padding:0px; margin:0px; position:fixed; right:-130px;top:230px; width:210px; z-index: 1100;
            }

            .fa:hover {
                opacity: 0.7;
            }

            .fa-fb-c {
                background: #3B5998;
                color: white;
            }

            .fa-li-c {
                background: #007bb5;
                color: white;
            }

            .fa-ig-c {
                background: #e13b6b;
                color: white;
            }

            .fa-wa-c {
                background: #25d366;
                color: white;
            }
            .fa-rnd {
                padding: 20px;
                font-size: 30px;
                width: 70px;
                text-align: center;
                text-decoration: none;
                margin: 5px 2px;
                border-radius: 50%;
            }
            /********************************/
            /*          Media Queries       */
            /********************************/
            /* Laptop/Tablet (1024px) */
            @media only screen and (min-width: 481px) and (max-width: 1024px) and (orientation: landscape) {
                .fa-rnd {
                    padding: 20px;
                    font-size: 30px;
                    width: 70px;
                    text-align: center;
                    text-decoration: none;
                    margin: 5px 2px;
                    border-radius: 50%;
                }
            }

            /* Tablet Portrait (768px) */
            @media only screen and (min-width: 321px) and (max-width: 1024px) and (orientation: portrait) {
            }

            /* Phone Landscape (480px) */
            @media only screen and (min-width: 321px) and (max-width: 480px) and (orientation: landscape) {
                .fa-rnd {
                    padding: 13px;
                    font-size: 20px;
                    width: 48px;
                    text-align: center;
                    text-decoration: none;
                    margin: 0px 24px;
                    border-radius: 50%;
                }
            }

            @media screen and (min-width: 980px){

            }
            @media screen and (max-width: 640px){
                .fa-rnd {
                    padding: 13px;
                    font-size: 20px;
                    width: 48px;
                    text-align: center;
                    text-decoration: none;
                    margin: 0px 24px;
                    border-radius: 50%;
                }
            }

            /* Phone Portrait (320px) */
            @media only screen and (max-width: 320px) {
                .fa-rnd {
                    padding: 13px;
                    font-size: 20px;
                    width: 48px;
                    text-align: center;
                    text-decoration: none;
                    margin: 0px 24px;
                    border-radius: 50%;
                }
            }

            .hide-bullets {
                list-style:none;
                margin-left: -40px;
                margin-top:20px;
            }

            /* ---------- LIVE-CHAT ---------- */
            #live-chat {
                bottom: 0;
                font-size: 12px;
                right: 24px;
                position: fixed;
                width: 300px;
                z-index:1;
            }
            #live-chat header {
                background: #293239;
                border-radius: 5px 5px 0 0;
                color: #fff;
                cursor: pointer;
                padding: 16px 24px;
            }
            #live-chat h4:before {
                background: #1a8a34;
                border-radius: 50%;
                content: "";
                display: inline-block;
                height: 8px;
                margin: 0 8px 0 0;
                width: 8px;
            }
            #live-chat h4 {
                font-size: 12px;
            }
            #live-chat h5 {
                font-size: 10px;
            }
            #live-chat form {
                padding: 24px;
            }
            #live-chat input[type="text"] {
                border: 1px solid #ccc;
                border-radius: 3px;
                padding: 8px;
                outline: none;
                width: 234px;
            }
            .chat-message-counter {
                background: #e62727;
                border: 1px solid #fff;
                border-radius: 50%;
                display: none;
                font-size: 12px;
                font-weight: bold;
                height: 28px;
                left: 0;
                line-height: 28px;
                margin: -15px 0 0 -15px;
                position: absolute;
                text-align: center;
                top: 0;
                width: 28px;
            }
            .chat-close {
                background: #1b2126;
                border-radius: 50%;
                color: #fff;
                display: block;
                float: right;
                font-size: 10px;
                height: 16px;
                line-height: 16px;
                margin: 2px 0 0 0;
                text-align: center;
                width: 16px;
            }
            .chat {
                background: #fff;
            }
            .chat-history {
                height: 190px;
                padding: 8px 24px;
                /*overflow-y: scroll;*/
            }
            .chat-message {
                margin: 16px 0;
            }
            .chat-message img {
                border-radius: 50%;
                float: left;
            }
            .chat-message-content {
                margin-left: 56px;
            }
            .chat-time {
                float: right;
                font-size: 10px;
            }
            .chat-feedback {
                font-style: italic;	
                margin: 0 0 0 80px;
            }

            .project-details-popup .close {
                position: absolute;
                right: -25px;
                top: -25px;
            }
            .project-details-popup .prof-icon {
                width: 75px;
                height: 75px;
                border-radius: 50%;
                position: absolute;
                left: 0;  
                right: 0;
                margin: auto;
                top: -30px;
            }
            .project-details-popup .modal-header {
                margin: 0;
                padding: 0;
            }
            .project-details-popup .modal-header .header-img {
                width: 100%;
                max-width: 100%;
                padding: 8px;
            }
            /********************************/
            /*          Slider Main CSS     */
            /********************************/
            #first-slider .main-container {
                padding: 0;
            }

            #first-slider .slide1 h3, #first-slider .slide2 h3, #first-slider .slide3 h3, #first-slider .slide4 h3{
                color: #fff;
                font-size: 30px;
                text-transform: uppercase;
                font-weight:700;
            }

            #first-slider .slide1 h4,#first-slider .slide2 h4,#first-slider .slide3 h4,#first-slider .slide4 h4{
                color: #fff;
                font-size: 30px;
                text-transform: uppercase;
                font-weight:700;
            }
            #first-slider .slide1 .text-left ,#first-slider .slide3 .text-left{
                padding-left: 40px;
            }


            #first-slider .carousel-indicators {
                bottom: 0;
            }
            #first-slider .carousel-control.right,
            #first-slider .carousel-control.left {
                background-image: none;
            }
            #first-slider .carousel .item {
                min-height: 532px; 
                height: 100%;
                width:100%;
            }

            .carousel-inner .item .container {
                display: flex;
                justify-content: center;
                align-items: center;
                position: absolute;
                bottom: 0;
                top: 0;
                left: 0;
                right: 0;
            }


            #first-slider h3{
                animation-delay: 1s;
            }
            #first-slider h4 {
                animation-delay: 2s;
            }
            #first-slider h2 {
                animation-delay: 3s;
            }


            #first-slider .carousel-control {
                width: 6%;
                text-shadow: none;
            }


            #first-slider h1 {
                text-align: center;  
                margin-bottom: 30px;
                font-size: 30px;
                font-weight: bold;
            }

            #first-slider .p {
                padding-top: 125px;
                text-align: center;
            }

            #first-slider .p a {
                text-decoration: underline;
            }
            #first-slider .carousel-indicators li {
                width: 14px;
                height: 14px;
                background-color: rgba(255,255,255,.4);
                border:none;
            }
            #first-slider .carousel-indicators .active{
                width: 16px;
                height: 16px;
                background-color: #fff;
                border:none;
            }
            .carousel-fade .carousel-inner .item {
                -webkit-transition-property: opacity;
                transition-property: opacity;
            }
            .carousel-fade .carousel-inner .item,
            .carousel-fade .carousel-inner .active.left,
            .carousel-fade .carousel-inner .active.right {
                opacity: 0;
            }
            .carousel-fade .carousel-inner .active,
            .carousel-fade .carousel-inner .next.left,
            .carousel-fade .carousel-inner .prev.right {
                opacity: 1;
            }
            .carousel-fade .carousel-inner .next,
            .carousel-fade .carousel-inner .prev,
            .carousel-fade .carousel-inner .active.left,
            .carousel-fade .carousel-inner .active.right {
                left: 0;
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
            .carousel-fade .carousel-control {
                z-index: 2;
            }

            .carousel-control .fa-angle-right, .carousel-control .fa-angle-left {
                position: absolute;
                top: 50%;
                z-index: 5;
                display: inline-block;
            }
            .carousel-control .fa-angle-left{
                left: 50%;
                width: 38px;
                height: 38px;
                margin-top: -15px;
                font-size: 30px;
                color: #fff;
                border: 3px solid #ffffff;
                -webkit-border-radius: 23px;
                -moz-border-radius: 23px;
                border-radius: 53px;
            }
            .carousel-control .fa-angle-right{
                right: 50%;
                width: 38px;
                height: 38px;
                margin-top: -15px;
                font-size: 30px;
                color: #fff;
                border: 3px solid #ffffff;
                -webkit-border-radius: 23px;
                -moz-border-radius: 23px;
                border-radius: 53px;
            }
            .carousel-control {
                opacity: 1;
                filter: alpha(opacity=100);
            }

            /********************************/
            /*       Slides backgrounds     */
            /********************************/
            #first-slider .slide1 {
                background-image: url(<?php echo base_url() ?>assets/img/slider1.png);
                background-size: cover;
                background-repeat: no-repeat;
            }
            #first-slider .slide2 {
                background-image: url(<?php echo base_url() ?>assets/img/slider2.png);
                background-size: cover;
                background-repeat: no-repeat;
            }
            #first-slider .slide3 {
                background-image: url(<?php echo base_url() ?>assets/img/slider3.png);
                background-size: cover;
                background-repeat: no-repeat;
            }
            #first-slider .slide4 {
                background-image: url(<?php echo base_url() ?>assets/img/slider4.png);
                background-size: cover;
                background-repeat: no-repeat;
            }
        </style>
    </head>
    <body>
        <!-- ==========================
                Menu Bar
        ============================ -->
        <header id="header" style="background: #00B5B5;">
            <div class="container">
                <div id="logo" class="pull-left">
                    <a href="#hero"><img src="<?php echo base_url() ?>assets/img/logo-mini.png" alt="" title="" /></img></a>
                </div>                
                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li><a href="javascript:;">Home</a></li>
                        <li class="menu-has-children"><a href="#about">Tentang Kami</a>
                            <ul>
                                <li><a href="<?php echo base_url() ?>index.php/nav/welcome">Sambutan Direktur Utama</a></li>
                                <li><a href="<?php echo base_url() ?>index.php/nav/company">Sekilas Perusahaan</a></li>
                                <li><a href="<?php echo base_url() ?>index.php/nav/vision">Visi & Misi</a></li>
                                <li><a href="<?php echo base_url() ?>index.php/nav/organization">Struktur Organisasi</a></li>
                                <li><a href="<?php echo base_url() ?>index.php/nav/commissioner">Dewan Komisaris</a></li>
                                <li><a href="<?php echo base_url() ?>index.php/nav/directors">Dewan Direksi</a></li>
                            </ul>
                        </li>
                        <li class="menu-has-children"><a href="#services">Produk & Layanan</a>
                            <ul>
                                <li><a href="<?php echo base_url() ?>index.php/nav/whr">Wilis Hill Residences</a></li>
                                <li><a href="<?php echo base_url() ?>index.php/nav/flpp">Rumah Subsidi (FLPP)</a></li>
                                <li><a href="<?php echo base_url() ?>index.php/nav/komersial">Rumah Komersial</a></li>
                                <li><a href="<?php echo base_url() ?>index.php/nav/arsitektur">Desain Arsitektur</a></li>
                                <li class="menu-has-children"><a href="<?php echo base_url() ?>index.php/nav/sip">Smart In Pays</a>
                                    <ul>
                                        <li><a href="<?php echo base_url() ?>index.php/nav/pesawat">Tiket Pesawat</a></li>
                                        <li><a href="<?php echo base_url() ?>index.php/nav/kereta">Tiket Kereta Api</a></li>
                                        <li><a href="<?php echo base_url() ?>index.php/nav/hotel">Reservasi Hotel</a></li>
                                        <li><a href="<?php echo base_url() ?>index.php/nav/ppob">PPOB</a></li>
                                        <li><a href="<?php echo base_url() ?>index.php/nav/pulsa">Pulsa Elektrik</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?php echo base_url() ?>index.php/nav/plt">Property Learning Technology</a></li>
                            </ul>
                        </li>
                        <li class="menu-has-children"><a>Investor</a>
                            <ul>
                                <li><a href="<?php echo base_url() ?>index.php/nav/relation">Hubungan Investor</a></li>
                                <li><a href="<?php echo base_url() ?>index.php/nav/shareholders">Pemegang Saham</a></li>
                                <li><a href="<?php echo base_url() ?>index.php/nav/stockinfo">Informasi Saham</a></li>
                                <li><a href="<?php echo base_url() ?>index.php/nav/report">Laporan Keuangan</a></li>
                                <li><a href="<?php echo base_url() ?>index.php/nav/rups">RUPS</a></li>
                            </ul>
                        </li>
                        <li class="menu-has-children"><a>Berita & Pers</a>
                            <ul>
                                <li><a href="<?php echo base_url() ?>index.php/nav/acara">Acara</a></li>
                                <li><a href="<?php echo base_url() ?>index.php/nav/berita">Berita</a></li>
                                <li><a href="<?php echo base_url() ?>index.php/nav/pers">Pers</a></li>
                            </ul>
                        </li>
                        <li class="menu-has-children"><a>Tata Kelola</a>
                            <ul>
                                <li><a href="<?php echo base_url() ?>index.php/nav/gcg">GCG</a></li>
                            </ul>
                        </li>
                        <li class="menu-has-children"><a>CSR</a>
                            <ul>
                                <li><a href="<?php echo base_url() ?>index.php/nav/komunitas">Komunitas</a></li>
                                <li><a href="<?php echo base_url() ?>index.php/nav/lingkungan">Lingkungan</a></li>
                            </ul>
                        </li>
                        <li class="menu-has-children"><a href="#contact">Hubungi Kami</a>
                            <ul>
                                <li><a href="<?php echo base_url() ?>index.php/nav/contact">Kantor, Telepon, Email, Website</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
        <!-- ==========================
                Social Media
        ============================ -->
        <div class="sticky-container">
            <div class="sticky">
                <p style="margin: 0 0 10px 0;"><a href="https://www.facebook.com/astana.noorazlina" target="_blank" class="fa fa-facebook fa-rnd fa-fb-c"></a></p>
                <p style="margin: 0 0 10px 0;"><a href="https://www.linkedin.com/in/pt-anna-ab17b613b/" target="_blank" class="fa fa-linkedin fa-rnd fa-li-c"></a></p>
                <p style="margin: 0 0 10px 0;"><a href="https://www.instagram.com/astananoorazlina/" target="_blank" class="fa fa-instagram fa-rnd fa-ig-c"></a></p>
                <p style="margin: 0 0 10px 0;"><a href="https://api.whatsapp.com/send?text=Hai%20Admin%20Azlina%2C%20saya%20ingin%20tahu%20lebih%20lanjut%20tentang%perumahan%dan%20layanan%20SIP%0ATerima%20kasih&phone=628113483101" target="_blank" class="fa fa-whatsapp fa-rnd fa-wa-c"></a></p>
            </div>
        </div>
        <!-- ==========================
                Home Slider
        ============================ -->
        <div id="first-slider">
            <div id="carousel-example-generic" class="carousel slide carousel-fade">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <!-- Item 1 -->
                    <div class="item active slide1">
                    </div>
                    <div class="item slide2">
                    </div>
                    <!-- Item 3 -->
                    <div class="item slide3">
                    </div>
                    <div class="item slide4">
                    </div>
                    <!-- End Item 4 -->
                </div>
                <!-- End Wrapper for slides-->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <i class="fa fa-angle-left"></i><span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <i class="fa fa-angle-right"></i><span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <section style="padding-top: 5px; padding-bottom: 10px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-xs-12">
                        <div class="layanan-item shadow-hover">
                            <i class="fa fa-leaf"></i>
                            <h4>Ramah Lingkungan</h4>
                            <p class="section-description">Konsep pembangunan yang ramah lingkungan</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12" style="padding-top: 25px;">
                        <div class="layanan-item shadow-hover">
                            <i class="fa fa-lock"></i>
                            <h4>Aman</h4>
                            <p class="section-description">Legalitas Aman dan Lengkap</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <div class="layanan-item shadow-hover">
                            <i class="fa fa-thumbs-up"></i>
                            <h4>Jaminan Kepercayaan</h4>
                            <p class="section-description">Karena Kepercayaan Anda adalah Kebanggaan Kami</p>
                        </div>
                    </div>
                </div><!-- end row -->
            </div>
        </section>
        <!--==========================
        About Section
        ============================-->
        <section id="about" style="padding-top: 30px">
            <div class="container wow fadeInUp">
                <div class="col-md-12">
                    <center><h3 style="font-weight: bold; font-style: italic;">Welcome to Astana Noor Azlina</h3></center>
                    <h1 class="section-title">"Your Trust is Our Pride"</h1>
                    <div class="section-title-divider"></div>
                    <div class="col-md-12 col-xs-12" style="padding-top: 10px;">
                        <div class="col-md-6 col-xs-12">
                            <p class="section-description" style="text-align: justify;">
                                <b>PT Astana Noor Azlina</b>, yang kemudian disingkat menjadi PT. ANNA adalah perusahaan yang membidangi beberapa usaha, diantaranya property developer, travel, arsitektur, dan beberapa bidang usaha lainnya. Kami menjalin kerjasama dengan <a>Property Learning Technology (PLT)</a>, <a>Smart In Pays (SIP)</a>, <a>APERNAS</a>, Pro-lint, dan juga lembaga-lembaga lainnya. Dengan semboyan <strong>Your Trust Is Our Pride</strong>, kami berkomitmen untuk menjadi perusahaan yang mengutamakan kepuasan customer.</p>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/nJT50NroBsc" frameborder="0" allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--==========================
        Produk & Layanan
        ============================-->
        <section id="services" style="padding-top: 30px">
            <div class="container wow fadeInUp">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="section-title">Produk & Layanan</h3>
                        <div class="section-title-divider"></div>
                        <p class="section-description">Berikut produk & layanan yang siap kami berikan kepada anda, pelanggan setia kami :</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 service-item">
                        <div class="service-icon"><i class="fa fa-home"></i></div>
                        <h4 class="service-title"><a href="">Properti</a></h4>
                        <p class="service-description">Kami adalah developer dari beberapa perumahan, dengan konsep ramah lingkungan dan layak untuk tumbuh kembang putra putri kita. </p>
                    </div>
                    <div class="col-md-4 service-item">
                        <div class="service-icon"><i class="fa fa-money"></i></div>
                        <h4 class="service-title"><a href="">Smart In Pays</a></h4>
                        <p class="service-description">Kami adalah mitra terbaik untuk kebutuhan harian anda, mulai dari penjualan tiket pesawat, KA, booking hotel, pulsa pra bayar, token PLN pra bayar, pembayaran tagihan listrik, tlp, internet, tv berlangganan, leasing, asuransi & PDAM, pastikan semuanya ada dalam genggaman anda bersama aplikasi SIP.</p>
                    </div>
                    <div class="col-md-4 service-item">
                        <div class="service-icon"><i class="fa fa-building"></i></div>
                        <h4 class="service-title"><a href="">Property Learning Technology</a></h4>
                        <p class="service-description">Komunitas properti bimbingan Asriman Akhirudding Tanjung, seorang praktisi dan mentoring di bidang properti yang terkenal dengan web <a href="http://asriman.com/">asriman.com</a></p>
                    </div>
                </div>
            </div>
        </section>
        <!--==========================
        Services Section
        ============================-->
        <div class="container wow fadeInUp">
            <div class="col-md-12">
                <h3 class="section-title">Partner Kami</h3>
                <p class="section-description">Kami juga bekerja sama dengan beberapa partner kami, yaitu :</p>
            </div>
        </div>
        <div class="container wow fadeInUp">
            <div id="main_area">
                <div class="row">
                    <div class="col-xs-12" id="slider">
                        <div class="row">
                            <div class="col-sm-8" id="carousel-bounding-box">
                                <div class="carousel slide" id="mCarousel">
                                    <div class="carousel-inner">
                                        <div class="active item" data-slide-number="0">
                                            <img src="<?php echo base_url() ?>assets/img/slider_2.png"></div>

                                        <div class="item" data-slide-number="1">
                                            <img src="<?php echo base_url() ?>assets/img/slider_3.png"></div>

                                        <div class="item" data-slide-number="2">
                                            <img src="<?php echo base_url() ?>assets/img/whr.png"></div>

                                        <div class="item" data-slide-number="3">
                                            <img src="<?php echo base_url() ?>assets/img/slider_1.png"></div>
                                    </div>
                                    <a class="left carousel-control" href="#mCarousel" role="button" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left"></span>                                       
                                    </a>
                                    <a class="right carousel-control" href="#mCarousel" role="button" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right"></span>                                       
                                    </a>                                
                                </div>
                            </div>

                            <div class="col-sm-4" id="carousel-text"></div>

                            <div id="slide-content" style="display: none;">
                                <div id="slide-content-0">
                                    <h2>Property Learning Technology</h2>
                                    <p>Komunitas properti bimbingan <strong>Asriman Akhirudding Tanjung</strong>, seorang praktisi dan mentoring di bidang properti yang terkenal dengan web <a href="http://asriman.com/" target="_blank">asriman.com</a></p>
                                </div>

                                <div id="slide-content-1">
                                    <h2>Smart In Pays</h2>
                                    <p>Kami adalah mitra terbaik untuk kebutuhan harian anda, mulai dari penjualan tiket pesawat, KA, booking hotel, pulsa pra bayar, token PLN pra bayar, pembayaran tagihan listrik, tlp, internet, tv berlangganan, leasing, asuransi & PDAM, pastikan semuanya ada dalam genggaman anda bersama aplikasi SIP.</p>
                                </div>

                                <div id="slide-content-2">
                                    <h2>Wilis Hill Residence</h2>
                                    <p>Kami adalah developer dari beberapa perumahan, dengan konsep ramah lingkungan dan layak untuk tumbuh kembang putra putri kita.</p>
                                </div>

                                <div id="slide-content-3">
                                    <h2>APERNAS</h2>
                                    <p>Asosiasi pengembang rumah sederhana sehat nasional (APERNAS) sebagai wadah pengembang profesional di seluruh indonesia yang telah diakui legalitas dan performanya. selain sebagai perpanjangan tangan atas  program sejuta rumah jokowi, APERNAS juga telah menjalin kerjasama dengan kementrian PUPR, BPN, perbankan, PLN, bapertarum, BPJS ketenagakerjaan, YKPP, dan juga SMF.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--                <div class="row hidden-xs" id="slider-thumbs">
                                    <ul class="hide-bullets">
                                        <li class="col-sm-2">
                                            <a class="thumbnail" id="carousel-selector-0"><img src="http://placehold.it/170x100&text=one"></a>
                                        </li>
                
                                        <li class="col-sm-2">
                                            <a class="thumbnail" id="carousel-selector-1"><img src="http://placehold.it/170x100&text=two"></a>
                                        </li>
                
                                        <li class="col-sm-2">
                                            <a class="thumbnail" id="carousel-selector-2"><img src="http://placehold.it/170x100&text=three"></a>
                                        </li>
                
                                        <li class="col-sm-2">
                                            <a class="thumbnail" id="carousel-selector-3"><img src="http://placehold.it/170x100&text=four"></a>
                                        </li>
                
                                        <li class="col-sm-2">
                                            <a class="thumbnail" id="carousel-selector-4"><img src="http://placehold.it/170x100&text=five"></a>
                                        </li>
                
                                        <li class="col-sm-2">
                                            <a class="thumbnail" id="carousel-selector-5"><img src="http://placehold.it/170x100&text=six"></a>
                                        </li>
                                    </ul>                 
                                </div>-->
            </div>
        </div>
        <!--==========================
        Contact Section
        ============================-->
        <section id="about" style="padding-top: 30px">
            <div class="container wow fadeInUp">
                <div class="col-md-12 col-xs-12">
                    <h3 class="section-title-contact">Kontak Kami</h3>
                    <div class="section-title-divider"></div>
                    <p class="section-description">Hubungi kami untuk informasi lanjutan terkait produk, kerjasama, dan investasi. <a href="https://api.whatsapp.com/send?text=Hai%20Admin%20Azlina%2C%20saya%20ingin%20tahu%20lebih%20lanjut%20tentang%produk%dan%20layanan%20PT.%20ANNA%0ATerima%20kasih&phone=628113483101" target="_blank">085311446150</a> atau e-mail ke <a href="mailto:info@azlinagroup.com">info@azlinagroup.com</a> atau <a href="mailto:astananoorazlina@gmail.com">astananoorazlina@gmail.com</a>.</p>
                </div>
                <div class="col-md-8 col-xs-12" style="padding-bottom: 20px;">
                    <h3 class="section-title-contact">&nbsp;&nbsp;&nbsp;<i class="fa fa-comments font-icon"></i>&nbsp;&nbsp;Social Media</h3>
                    <div class="col-md-2 col-xs-2">&nbsp;</div>
                    <center>
                        <div class="col-md-8 col-xs-8">
                            <span style="margin: 0 0 10px 0;"><a href="https://www.facebook.com/astana.noorazlina" target="_blank" class="fa fa-facebook fa-rnd fa-fb-c"></a></span>
                            <span style="margin: 0 0 10px 0;"><a href="https://www.linkedin.com/in/pt-anna-ab17b613b/" target="_blank" class="fa fa-linkedin fa-rnd fa-li-c"></a></span>
                            <span style="margin: 0 0 10px 0;"><a href="https://www.instagram.com/astananoorazlina/" target="_blank" class="fa fa-instagram fa-rnd fa-ig-c"></a></span>
                            <span style="margin: 0 0 10px 0;"><a href="https://api.whatsapp.com/send?text=Hai%20Admin%20Azlina%2C%20saya%20ingin%20tahu%20lebih%20lanjut%20tentang%perumahan%dan%20layanan%20SIP%0ATerima%20kasih&phone=628113483101" target="_blank" class="fa fa-whatsapp fa-rnd fa-wa-c"></a></span>
                        </div>
                    </center>
                    <div class="col-md-2 col-xs-2">&nbsp;</div>
                </div>
                <div class="col-md-4 col-xs-12">
                    <h3 class="section-title-contact"><i class="fa fa-map-marker font-icon"></i>&nbsp;&nbsp;Alamat</h3>
                    <p class="section-description">PT Astana Noor Azlina<br>Jl. Letda Sucipto, Perum Yasa Griya Blok A No 3, RT 4 RW 7 Perbon Tuban<br>Jawa Timur Indonesia.</p>
                </div>
            </div>
            <div class="container">
                <iframe
                    width="100%"
                    height="450"
                    frameborder="0" style="border:0"
                    src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAQr7zbmi6dy-3mEdtB73uYs_E5w2W8cHY&center=-6.8865141,112.0285932&q=Perumahan+Yasa+Griya" allowfullscreen>
                </iframe>
            </div>
        </section>
        <div id="live-chat">
            <header class="clearfix">
                <!--<a href="#" data-toggle="popover" style="background-color: black;" title="Popover Header" data-placement="top" data-content="Some content inside the popover"></a>-->
                <div class="col-xs-10"><h4>Admin PT. ANNA</h4></div>
                <div class="col-xs-2"><i class="fa fa-window-minimize" aria-hidden="true"></i></div>
            </header>
            <div class="chat">
                <div class="chat-history">
                    <div class="chat-message clearfix">
                        <img src="<?php echo base_url() ?>assets/img/image.png" alt="" width="32" height="32">
                        <div class="chat-message-content clearfix">
                            <span class="chat-time"><?php
                                date_default_timezone_set('Asia/Jakarta');
                                echo date('H:i');
                                ?></span>
                            <h3>Selamat Datang di PT. ANNA</h3>
                            <p>Silakan cek promo kami dibawah ini</p>
                        </div>
                    </div>
                    <hr>
                </div>
                <form action="#" method="post">
                    <fieldset>
                        <input type="text" placeholder="Silakan ketik pesan & klik tombol Kirim..." autofocus>
                        <button class="btn btn-default">Kirim</button>
                    </fieldset>
                </form>
            </div> <!-- end chat -->
        </div>
        <!-- Modal -->
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content project-details-popup">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
<!--                    <div class="modal-header">
                        <img class="header-img" src="<?php echo base_url() ?>assets/img/whr.png">
                    </div>-->
                    <div class="modal-body" style="padding: 0px">
                        <img class="header-img" src="<?php echo base_url() ?>assets/img/brosur.png">
<!--                        <div class="col-md-12 col-xs-12">
                            <h3>Wilis Hill Residence</h3>
                            <p>Kecamatan Jenu kabupaten Tuban merupakan kawasan emas yang berdekatan dengan banyak perusahaan besar dan strategis untuk hunian, karena merupakan jalur pantura. Disitulah kemudian kami membuat sebuah kawasan hunian berkonsep ramah lingkungan dan fasilitas umum yang family-friendly, sangat cocok untuk tumbuh kembang putra/putri kita. Berlokasi di jalan Kalak Wilis, Jenu yang hanya 125m dari jalan pantura, kami pastikan WHR adalah pilihan investasi bernilai tinggi di kawasan industri Tuban.</p>
                        </div>-->
                    </div>
<!--                    <div class="modal-footer">
                        <button>Close</button>
                        <button>Close</button>
                    </div>-->
                </div>

            </div>
        </div>
        <a href="#hero" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
            <?php $this->view('template/foot_only'); ?>
        <!--Start of Tawk.to Script-->
<!--        <script type="text/javascript">
            var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
            (function () {
                var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
                s1.async = true;
                s1.src = 'https://embed.tawk.to/5a769f89d7591465c7075b4e/default';
                s1.charset = 'UTF-8';
                s1.setAttribute('crossorigin', '*');
                s0.parentNode.insertBefore(s1, s0);
            })();
        </script>-->
        <!--End of Tawk.to Script-->
        <script>
            (function () {
                var audio = new Audio('assets/audio/to-the-point.mp3');
                audio.play();
                $('#live-chat header').on('click', function () {
                    $('.chat').slideToggle(300, 'swing');
                    $('.chat-message-counter').fadeToggle(300, 'swing');
                });
                $('.chat-close').on('click', function (e) {
                    e.preventDefault();
                    $('#live-chat').fadeOut(300);
                });

                $(window).on('load', function () {
                    $('#myModal').modal('show');
                });


                $('#my_Carousel').carousel({
                    interval: 3000
                });

                $('#carousel-text').html($('#slide-content-0').html());
                //Handles the carousel thumbnails
                $('[id^=carousel-selector-]').click(function () {
                    var id = this.id.substr(this.id.lastIndexOf("-") + 1);
                    var id = parseInt(id);
                    $('#mCarousel').carousel(id);
                });
                // When the carousel slides, auto update the text
                $('#mCarousel').on('slid.bs.carousel', function (e) {
                    var id = $('.item.active').data('slide-number');
                    $('#carousel-text').html($('#slide-content-' + id).html());
                });

                //Function to animate slider captions 
                function doAnimations(elems) {
                    //Cache the animationend event in a variable
                    var animEndEv = 'webkitAnimationEnd animationend';

                    elems.each(function () {
                        var $this = $(this),
                                $animationType = $this.data('animation');
                        $this.addClass($animationType).one(animEndEv, function () {
                            $this.removeClass($animationType);
                        });
                    });
                }

                //Variables on page load 
                var $myCarousel = $('#carousel-example-generic'), $firstAnimatingElems = $myCarousel.find('.item:first').find("[data-animation ^= 'animated']");
                //Initialize carousel 
                $myCarousel.carousel();
                //Animate captions in first slide on page load 
                doAnimations($firstAnimatingElems);
                //Pause carousel  
                $myCarousel.carousel('pause');
                //Other slides to be animated on carousel slide event 
                $myCarousel.on('slide.bs.carousel', function (e) {
                    var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");
                    doAnimations($animatingElems);
                });
                $('#carousel-example-generic').carousel({
                    interval: 3000,
                    pause: "false"
                });
            })();
        </script>
    </body>
</html>
