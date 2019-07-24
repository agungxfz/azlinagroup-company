<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<style>
    /*FOOTER 2*/
    .footer2 a {
        color: #DDD;
    }

    .footer2 a:hover,
    .footer2 a:focus,
    .footer2 a:active {
        color: #FFF;
    }

    .footer2 .footer {
        background-color: #2E3436;
        padding: 35px 0;
        margin-top: 5em;
    }

    .footer2 .footer nav h3 {
        font-size: 18px;
        color: #FFF;
        font-weight: bold;
        text-transform: uppercase;
        margin: 0 0 1em 0;
    }

    .footer2 .footer nav h3 span {
        font-weight: 300;
        text-transform: capitalize;
    }

    .footer2 .footer nav ul li a {
        text-decoration: none;
        display: block;
        padding: 4px 0;
        font-size: 13px;
    }

    .footer2 .footer .input-group {
        margin: 15px auto;
        max-width: 400px;
    }

    .footer2 .footer .form-control {
        border-radius: 2px 0 0 2px;
        background-color: #585C5D;
        border-color: #585C5D;
        color: #DDD;
    }

    .footer2 .footer .form-control:hover,
    .footer2 .footer .form-control:focus {
        border: 1px solid #222728;
        background-color: #222728;
    }

    .footer2 .footer .input-group-addon {
        border-radius: 0 2px 2px 0;
        background-color: #F7931D;
        color: #FFF;
        border-color: #F7931D;
    }

    .footer2 .footer .social {
        margin: 0 auto;
        display: table;
    }

    .footer2 .footer .social li {
        float: left;
    }

    .footer2 .footer .social li a {
        display: block;
        font-size: 1em;
        color: #DDD;
        width: 30px;
        height: 30px;
        line-height: 32px;
        padding: 0;
        text-align: center;
        background-color: #222728;
        border-radius: 2px;
        margin: 5px 4px
    }

    .footer2 .footer .social li a:hover {
        background-color: #3A4144;
    }

    .footer2 .footer-bottom {
        background-color: #222728;
        padding: 15px 0;
        color: #DDD;
        font-size: 13px;
    }

    .footer2 .footer-bottom ul li {
        display: inline-block;
    }

    .footer2 .footer-bottom ul li a {
        display: block;
        padding-left: 8px;
    }

    .footer2 .footer-bottom ul li a:after {
        content: "-";
        padding-left: 8px;
    }

    .footer2 .footer-bottom ul li:last-child a:after {
        content: "";
    }

    @media (max-width: 550px) {
        .footer2 .footer-bottom .pull-left,
        .footer2 .footer-bottom .pull-right {
            float: none !important;
            width: 100%;
            padding: 10px;
            text-align: center;
        }
    }
    @media (max-width: 767px) {
        .footer2 .footer {
            text-align: center;
        }
    }
    @media (max-width: 991px) {
        .footer2 .footer ul {
            margin-bottom: 30px;
        }
    }
</style>
<!--==========================
        Footer
      ============================-->
<footer class="footer2" style="bottom: 0px; position: relative; width: 100%">
    <div class="footer">
        <div class="container">
            <div class="row">
                <nav class="col-md-3 col-sm-6 col-xs-12">
                    <h3>Tentang Kami</h3>
                    <ul>
                        <li>
                            <a href="<?php echo base_url() ?>index.php/nav/company">Sekilas Perusahaan</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url() ?>index.php/nav/vision">Visi & Misi</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url() ?>index.php/nav/organization">Struktur Organisasi</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url() ?>index.php/nav/commissioner">Dewan Komisaris & Direksi</a>
                        </li>
                    </ul>
                </nav>
                <nav class="col-md-3 col-sm-6 col-xs-12">
                    <h3>Produk & Layanan</h3>
                    <ul>
                        <li>
                            <a href="<?php echo base_url() ?>index.php/nav/whr">Aset & Perumahan</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url() ?>index.php/nav/ppob">Smart In Pays</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url() ?>index.php/nav/plt">Property Learning Technology</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url() ?>index.php/nav/vmart">Mini V-Mart</a>
                        </li>
                    </ul>
                </nav>
                <nav class="col-md-3 col-sm-6 col-xs-12">
                    <h3>Bantuan</h3>
                    <ul>
                        <li>
                            <a href="<?php echo base_url() ?>index.php/nav/contact">Hubungi Kami</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url() ?>index.php/nav/berita">Berita</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url() ?>index.php/nav/acara">Acara</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url() ?>index.php/nav/pers">Pers</a>
                        </li>
                    </ul>
                </nav>

                <nav class="col-md-3 col-sm-6 col-xs-12">
                    <h3>Berlangganan Info?</h3>
                    <div>Silakan berlangganan via email</div>
                    <div class="input-group input-group-md">
                        <input type="text" class="form-control" placeholder="Alamat Email">
                        <span class="input-group-addon">Subscribe</span>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="col-md-6 col-sm-6 col-xs-6"><i class="fa fa-user-circle" style="color: white;"></i>&nbsp;&nbsp;<a href="<?php echo base_url() ?>index.php/admin" target="_blank">Admin</a></div>
                        <div class="col-md-6 col-sm-6 col-xs-6"><i class="fa fa-envelope" style="color: white;"></i>&nbsp;&nbsp;<a href="http://webmail.azlinagroup.com" target="_blank">Webmail</a></div>
                    </div>
                </nav>
            </div> <!--/.row--> 
        </div> <!--/.container--> 
    </div> <!--/.footer-->

    <div class="footer-bottom">
        <div class="container">
            <div class="pull-left">Copyright ©  PT. Astana Noor Azlina. All right reserved.</div>
            <div class="pull-right"><span style="font-style: italic;">Developed by </span><a href="https://www.instagram.com/agungxfz/"><strong>Agung Tarmudi</strong></a></div>
        </div>
    </div> <!--/.footer-bottom--> 
</footer>
<!-- #footer -->