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
    
</section>