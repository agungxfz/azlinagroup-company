<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<style>
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

    .fa-ig-c {
        background: #e13b6b;
        color: white;
    }
</style>
<!--==========================
About Section
============================-->
<section id="about" style="padding-top: 30px;">
    <div class="container wow fadeInUp">
        <div class="row">
            <div class="col-md-12">
                <center><img alt="Picture" src="<?php echo base_url() . 'assets/img/' . $article->article_image ?>" width="128px" style="margin-bottom: 10px"></center>
                <h3 class="section-title"><?= $article->article_judul ?></h3>
                <div class="section-title-divider"></div>
                <div align="center" style="margin-bottom: 10px; font-style: italic; font-size: 10px;"><i class="fa fa-calendar"></i>&nbsp;&nbsp;<?= 'Posted on <a href="javascript:;">' . date_format(date_create($article->create_date), 'd-M-Y') . '</a>&nbsp;by <a href="javascript:;">' . $article->article_author . '</a>'; ?></div>
                <p class="section-description"><?= $article->article_isi ?></p>
            </div>
            <div class="col-md-12 col-xs-12">
                <a href="https://www.facebook.com/astana.noorazlina" target="_blank" class="fa fa-instagram fa-rnd fa-ig-c"></a>
            </div>
        </div>
    </div>
</section>