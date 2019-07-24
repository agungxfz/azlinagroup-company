<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<script src="<?php echo base_url() ?>assets/lib/jquery/jquery.min.js"></script>
<style>
    .hide-bullets {
        list-style:none;
        margin-left: -40px;
        margin-top:20px;
    }
</style>
<!--==========================
About Section
============================-->
<section id="about" style="padding-top: 30px;">
    <div class="container wow fadeInUp">
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <center><img alt="Picture" src="<?php echo base_url() . 'assets/img/' . $article->article_image ?>" width="320px"></center>
                <div class="section-title-divider"></div>
                <div align="center" style="margin-bottom: 10px; font-style: italic; font-size: 10px;"><i class="fa fa-calendar"></i>&nbsp;&nbsp;<?= 'Posted on <a href="javascript:;">' . date_format(date_create($article->create_date), 'd-M-Y') . '</a>&nbsp;by <a href="javascript:;">' . $article->article_author . '</a>'; ?></div>
                <div class="col-md-4 col-xs-12 video-container">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/nJT50NroBsc" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
                <div class="col-md-8 col-xs-12">
                    <p class="section-description"><?= $article->article_isi ?></p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div id="main_area">
            <!--Slider--> 
            <div class="row">
                <div class="col-xs-12" id="slider">
                    <!--Top part of the slider--> 
                    <div class="row">
                        <div class="col-sm-8" id="carousel-bounding-box">
                            <div class="carousel slide" id="myCarousel">
                                <!--Carousel items--> 
                                <div class="carousel-inner">
                                    <?php
                                    echo '<div class="active item" data-slide-number="0"><img src="' . base_url() . 'assets/img/' . $images[0]['pic_name'] . '"></div>';
                                    for ($i = 1; $i < count($images); $i++) {
                                        echo '<div class="item" data-slide-number="' . $i . '"><img src="' . base_url() . 'assets/img/' . $images[$i]['pic_name'] . '"></div>';
                                    }
                                    ?>
                                </div> 
                                <!--                                Carousel nav -->
                                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>                                       
                                </a>
                                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>                                       
                                </a>                                
                            </div>
                        </div>

                        <div class="col-sm-4" id="carousel-text"></div>

                        <div id="slide-content" style="display: none;">
                            <?php
                            for ($i = 0; $i < count($images); $i++) {
                                echo '<div id="slide-content-' . $i . '"><h2 style="font-style: italic">' . $images[$i]['subject'] . '</h2><p>' . $images[$i]['description'] . '</p></div>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <!--/Slider-->

            <div class="row hidden-xs" id="slider-thumbs">
                <!--                Bottom switcher of slider -->
                <ul class="hide-bullets">
                    <?php
                    for ($i = 0; $i < count($images); $i++) {
                        echo '<li class="col-sm-1"><a class="thumbnail" id="carousel-selector-' . $i . '"><img src="' . base_url() . 'assets/img/' . $images[$i]['pic_name'] . '"></a></li>';
                    }
                    ?>
                </ul>                 
            </div>
        </div>
    </div>
    <div class="section-title-divider"></div>
    <h3 class="section-title">Lokasi&nbsp;<?= $article->article_judul ?></h3>
    <div class="section-title-divider"></div>
    <p class="section-description">
        Anda ingin tahu dimana lokasi Wilis Hill Residence? silakan klik map dibawah ini :
    </p>
    <div class="container" style="margin-top: 24px">
        <iframe
            width="100%"
            height="450"
            frameborder="0" style="border:0"
            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAQr7zbmi6dy-3mEdtB73uYs_E5w2W8cHY&center=-6.824711,111.966798&q=Jl.+Kalak+Wilis,+Beji,+Jenu,+Kabupaten+Tuban,+Jawa+Timur+62352" allowfullscreen>
        </iframe>
    </div>
</section>
<script>
    $(document).ready(function () {

        $('#myCarousel').carousel({
            interval: 3000
        });

        $('#carousel-text').html($('#slide-content-0').html());
        //Handles the carousel thumbnails
        $('[id^=carousel-selector-]').click(function () {
            var id = this.id.substr(this.id.lastIndexOf("-") + 1);
            var id = parseInt(id);
            $('#myCarousel').carousel(id);
        });
        // When the carousel slides, auto update the text
        $('#myCarousel').on('slid.bs.carousel', function (e) {
            var id = $('.item.active').data('slide-number');
            $('#carousel-text').html($('#slide-content-' + id).html());
        });
    });
</script>