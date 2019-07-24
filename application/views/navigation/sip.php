<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!--==========================
About Section
============================-->
<section id="about" style="padding-top: 30px;">
    <div class="container wow fadeInUp">
        <div class="row">
            <div class="col-md-12">
                <h3 class="section-title"><?= $article->article_judul?></h3>
                <div class="section-title-divider"></div>
                <div align="center" style="margin-bottom: 10px; font-style: italic; font-size: 10px;"><i class="fa fa-calendar"></i>&nbsp;&nbsp;<?= 'Posted on <a href="javascript:;">' . date_format(date_create($article->create_date), 'd-M-Y') . '</a>&nbsp;by <a href="javascript:;">' . $article->article_author . '</a>';?></div>
                <p class="section-description"><?= $article->article_isi?></p>
            </div>
        </div>
    </div>
    <div class="container wow fadeInUp">
        <div class="row">
            <div class="col-md-12  col-xs-12">
                <div class="col-md-6 col-xs-6"><button class="btn btn-info" style="width: 100%"><i class="fa fa-plane"></i>&nbsp;&nbsp;Pesawat</button></div>
                <div class="col-md-6 col-xs-6"><button class="btn btn-info" style="width: 100%"><i class="fa fa-train"></i>&nbsp;&nbsp;Kereta</button></div>
                <div class="col-md-6 col-xs-6"><button class="btn btn-info" style="width: 100%"><i class="fa fa-hotel"></i>&nbsp;&nbsp;Hotel</button></div>
                <div class="col-md-6 col-xs-6"><button class="btn btn-info" style="width: 100%"><i class="fa fa-money"></i>&nbsp;&nbsp;PPOB</button></div>
            </div>
        </div>
    </div>
</section>