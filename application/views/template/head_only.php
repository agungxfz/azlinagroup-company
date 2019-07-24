<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>PT. Astana Noor Azlina </title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="<?= $article->article_meta_key?>" name="keywords">
        <meta content="<?= $article->article_meta_desc?>" name="description">
        <link href="<?php echo base_url() ?>assets/img/favicon.png" rel="shortcut icon">
        <link href="<?php echo base_url() ?>assets/css/google-font.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/lib/animate-css/animate.min.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet">
    </head>

    <body>
        <!--==========================
        Header Section
        ============================-->
        <header id="header"style="background: #00B5B5;">
            <div class="container">

                <div id="logo" class="pull-left">
                    <a href="<?php echo base_url();?>"><img src="<?php echo base_url() ?>assets/img/logo-mini.png" alt="" title="" /></img></a>
                    <span style="font-size: 20px; color: white;"><?php echo $header;?></span>
                </div>

                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li><a href="<?php echo base_url() ?>index.php/nav/">Home</a></li>
                        <li class="menu-has-children"><a class="sf-with-ul">Tentang Kami</a>
                            <ul>
                                <li><a href="<?php echo base_url() ?>index.php/nav/welcome">Sambutan Direktur Utama</a></li>
                                <li><a href="<?php echo base_url() ?>index.php/nav/company">Sekilas Perusahaan</a></li>
                                <li><a href="<?php echo base_url() ?>index.php/nav/vision">Visi & Misi</a></li>
                                <li><a href="<?php echo base_url() ?>index.php/nav/organization">Struktur Organisasi</a></li>
                                <li><a href="<?php echo base_url() ?>index.php/nav/commissioner">Dewan Komisaris</a></li>
                                <li><a href="<?php echo base_url() ?>index.php/nav/directors">Dewan Direksi</a></li>
                            </ul>
                        </li>
                        <li class="menu-has-children"><a class="sf-with-ul">Produk & Layanan</a>
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
                        <li class="menu-has-children"><a class="sf-with-ul">Investor</a>
                            <ul>
                                <li><a href="<?php echo base_url() ?>index.php/nav/relation">Hubungan Investor</a></li>
                                <li><a href="<?php echo base_url() ?>index.php/nav/shareholders">Pemegang Saham</a></li>
                                <li><a href="<?php echo base_url() ?>index.php/nav/stockinfo">Informasi Saham</a></li>
                                <li><a href="<?php echo base_url() ?>index.php/nav/report">Laporan Keuangan</a></li>
                                <li><a href="<?php echo base_url() ?>index.php/nav/rups">RUPS</a></li>
                            </ul>
                        </li>
                        <li class="menu-has-children"><a class="sf-with-ul">Berita & Pers</a>
                            <ul>
                                <li><a href="<?php echo base_url() ?>index.php/nav/acara">Acara</a></li>
                                <li><a href="<?php echo base_url() ?>index.php/nav/berita">Berita</a></li>
                                <li><a href="<?php echo base_url() ?>index.php/nav/pers">Pers</a></li>
                            </ul>
                        </li>
                        <li class="menu-has-children"><a class="sf-with-ul">Tata Kelola</a>
                            <ul>
                                <li><a href="<?php echo base_url() ?>index.php/nav/gcg">GCG</a></li>
                            </ul>
                        </li>
                        <li class="menu-has-children"><a class="sf-with-ul">CSR</a>
                            <ul>
                                <li><a href="<?php echo base_url() ?>index.php/nav/komunitas">Komunitas</a></li>
                                <li><a href="<?php echo base_url() ?>index.php/nav/lingkungan">Lingkungan</a></li>
                            </ul>
                        </li>
                        <li class="menu-has-children"><a class="sf-with-ul">Hubungi Kami</a>
                            <ul>
                                <li><a href="<?php echo base_url() ?>index.php/nav/contact">Kantor, Telepon, Email, Website</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
        <!-- #header -->
        
        <!--==========================
        Contents Section
        ============================-->
        <?= $contents; ?>
        <div class="spacer"></div>
        
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        <!-- Required JavaScript Libraries -->
        <script src="<?php echo base_url() ?>assets/lib/jquery/jquery.min.js"></script>
        <script src="<?php echo base_url() ?>assets/lib/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url() ?>assets/lib/superfish/hoverIntent.js"></script>
        <script src="<?php echo base_url() ?>assets/lib/superfish/superfish.min.js"></script>
        <script src="<?php echo base_url() ?>assets/lib/morphext/morphext.min.js"></script>
        <script src="<?php echo base_url() ?>assets/lib/wow/wow.min.js"></script>
        <script src="<?php echo base_url() ?>assets/lib/stickyjs/sticky.js"></script>
        <script src="<?php echo base_url() ?>assets/lib/easing/easing.js"></script>

        <script src="<?php echo base_url() ?>assets/js/custom.js"></script>
        <?php $this->view('template/foot_only'); ?>
    </body>
</html>