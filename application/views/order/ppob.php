<link href="<?php echo base_url() ?>assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link href="<?php echo base_url() ?>assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<script src="<?php echo base_url() ?>assets/lib/jquery/jquery.min.js"></script>
<style>
    @font-face {
        font-family: 'Impact';
        src: url('assets/font/impact.ttf') format('truetype');
        font-weight: normal;
        font-style: normal;
    }
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

    .sticky-container{ padding:0px; margin:0px; position:fixed; right:-130px;top:230px; width:210px; z-index: 1100;}
    /*            .sticky li{list-style-type:none;background-color:#fff;color:#efefef;height:43px;padding:0px;margin:0px 0px 1px 0px; -webkit-transition:all 0.25s ease-in-out;-moz-transition:all 0.25s ease-in-out;-o-transition:all 0.25s ease-in-out; transition:all 0.25s ease-in-out; cursor:pointer;}
                .sticky li:hover{margin-left:-115px;}
                .sticky li img{float:left;margin:5px 4px;margin-right:5px;}
                .sticky li p{padding-top:5px;margin:0px;line-height:16px; font-size:11px;}
                .sticky li p a{ text-decoration:none; color:#2C3539;}
                .sticky li p a:hover{text-decoration:underline;}*/

    .fa-rnd {
        padding: 20px;
        font-size: 30px;
        width: 70px;
        text-align: center;
        text-decoration: none;
        margin: 5px 2px;
        border-radius: 50%;
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
    .my_padding {
        padding: 2px;
        margin: 0px;
    }
</style>
<div class="container" style="padding-top: 10px;">
    <div class="col-md-3 col-xs-12 my_padding"><a href="<?php echo base_url() ?>index.php/nav/ppob_plnpra" href="" class="btn btn-info" style="width: 100%; font-size: 20px;"><i class="fa fa-bolt"></i>&nbsp;&nbsp;PLN Pra Bayar</a></div>
    <div class="col-md-3 col-xs-12 my_padding"><a href="<?php echo base_url() ?>index.php/nav/ppob_plnpasca" class="btn btn-info" style="width: 100%; font-size: 20px;"><i class="fa fa-flash"></i>&nbsp;&nbsp;PLN Pasca Bayar</a></div>
    <div class="col-md-3 col-xs-12 my_padding"><a href="<?php echo base_url() ?>index.php/nav/ppob_telpasca" class="btn btn-info" style="width: 100%; font-size: 20px;"><i class="fa fa-phone"></i>&nbsp;&nbsp;Telepon Pasca Bayar</a></div>
    <div class="col-md-3 col-xs-12 my_padding"><a href="<?php echo base_url() ?>index.php/nav/ppob_tvkabel" class="btn btn-info" style="width: 100%; font-size: 20px;"><i class="fa fa-television"></i>&nbsp;&nbsp;TV Berlangganan</a></div>
    <div class="col-md-3 col-xs-12 my_padding"><a href="<?php echo base_url() ?>index.php/nav/ppob_internet" class="btn btn-info" style="width: 100%; font-size: 20px;"><i class="fa fa-globe"></i>&nbsp;&nbsp;Internet</a></div>
    <div class="col-md-3 col-xs-12 my_padding"><a href="<?php echo base_url() ?>index.php/nav/ppob_mutifinance" class="btn btn-info" style="width: 100%; font-size: 20px;"><i class="fa fa-money"></i>&nbsp;&nbsp;Multifinance</a></div>
    <div class="col-md-3 col-xs-12 my_padding"><a href="<?php echo base_url() ?>index.php/nav/ppob_pdam" class="btn btn-info" style="width: 100%; font-size: 20px;"><i class="fa fa-shower"></i>&nbsp;&nbsp;PDAM</a></div>
    <div class="col-md-3 col-xs-12 my_padding"><a href="<?php echo base_url() ?>index.php/nav/ppob_asuransi" class="btn btn-info" style="width: 100%; font-size: 20px;"><i class="fa fa-umbrella"></i>&nbsp;&nbsp;Asuransi</a></div>
    <div style="height: 60px"></div>
</div>