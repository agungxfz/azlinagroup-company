<link href="<?php echo base_url() ?>assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link href="<?php echo base_url() ?>assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<script src="<?php echo base_url() ?>assets/lib/jquery/jquery.min.js"></script>
<style>
    textarea, input {
        padding:10px;
        font-family: FontAwesome, "Open Sans", Verdana, sans-serif;
        font-style: normal;
        font-weight: normal;
        text-decoration: inherit;
    }
</style>
<div class="container" style="padding-top: 10px;">
    <div class="row" style="margin-top: 10px">
        <div class="col-md-12 col-xs-12" style="margin-bottom: 10px; text-align: center">
            <div id="tab" class="btn-group" data-toggle="buttons-radio">
                <a href="#dom" data-toggle="tab"><button type="button" id="btn_dom" class="btn btn-large btn-info active">DOMESTIK</button></a>
                <a href="#int" data-toggle="tab"><button type="button" id="btn_int" class="btn btn-large btn-default">INTERNATIONAL</button></a>
            </div>
        </div>
        <div class="tab-content">
            <div class="tab-pane active" id="dom">
                <form id="domestik" name="domestik" action="" method="post">
                    <div class="col-md-12 col-xs-12" style="padding-top: 10px;">
                        <div class="section-title-divider"></div>
                        <div class="col-md-5 col-xs-12 form-group">
                            <label for="asal_d"><i class="fa fa-map-marker"></i>&nbsp;&nbsp;Kota / Bandara Asal</label>
                            <select name="asal_d" id="asal_d" class="form-control">
                                <?php
                                for ($i = 0; $i < count($domestic); $i++) {
                                    echo '<option value="' . $domestic[$i]->label . '">' . $domestic[$i]->label . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-md-2 col-xs-12 form-group" style="text-align: center">
                            <div>&nbsp;</div>
                            <button type="button" class="btn btn-primary fa fa-exchange"></button>
                        </div>
                        <div class="col-md-5 col-xs-12 form-group">
                            <label for="tujuan_d"><i class="fa fa-map-marker"></i>&nbsp;&nbsp;Kota / Bandara Tujuan</label>
                            <select name="tujuan_d" id="tujuan_d" class="form-control">
                                <?php
                                for ($i = 0; $i < count($domestic); $i++) {
                                    echo '<option value="' . $domestic[$i]->label . '">' . $domestic[$i]->label . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-md-12 col-xs-12 form-group">
                            <label class="radio-inline"><input type="radio" name="optradio_d" value="sj" checked="true">Sekali Jalan</label>
                            <label class="radio-inline"><input type="radio" name="optradio_d" value="pp">Pulang Pergi</label>
                        </div>    
                        <div class="col-md-12 col-xs-12 form-group">
                            <p style="text-align: left;"><i class="fa fa-calendar"></i>&nbsp;&nbsp;Keberangkatan</p>
                            <input type="date" name="dateb_d" class="form-control" placeholder="" tabindex="3">
                        </div>
                        <div class="col-md-12 col-xs-12 form-group hidden" id="pulang_d">
                            <p style="text-align: left;"><i class="fa fa-calendar"></i>&nbsp;&nbsp;Kepulangan</p>
                            <input type="date" name="datep_d" class="form-control" placeholder="" tabindex="4">
                        </div>
                        <div class="col-md-4 col-xs-4 form-group no-padding">
                            <label for="jml_dewasa_d"><i class="fa fa-user"></i>&nbsp;&nbsp;Dewasa</label>
                            <select id="jml_dewasa_d" name="jml_dewasa_d" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="4">5</option>
                                <option value="4">6</option>
                                <option value="4">7</option>
                            </select>
                        </div>
                        <div class="col-md-4 col-xs-4 form-group no-padding">
                            <label for="jml_anak_d"><i class="fa fa-user"></i>&nbsp;&nbsp;Anak</label>
                            <select id="jml_anak_d" name="jml_anak_d" class="form-control">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="4">5</option>
                                <option value="4">6</option>
                                <option value="4">7</option>
                            </select>
                        </div>
                        <div class="col-md-4 col-xs-4 form-group no-padding">
                            <label for="jml_infant_d"><i class="fa fa-user"></i>&nbsp;&nbsp;Infant</label>
                            <select id="jml_infant_d" name="jml_infant_d" class="form-control">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="4">5</option>
                                <option value="4">6</option>
                                <option value="4">7</option>
                            </select>
                        </div>
                    </div>
                    <h3 style="text-align: center">Pesan ke :</h3>
                    <div class="col-md-12 col-xs-12 btn-group">
                        <button id="admin1_d" type="button" class="btn btn-success fa fa-whatsapp" style="width: 48%">&nbsp;&nbsp;ADMIN 1</button>
                        <button id="admin2_d" type="button" class="btn btn-success fa fa-whatsapp" style="width: 48%">&nbsp;&nbsp;ADMIN 2</button>
                    </div>
                </form>
                <div style="height: 60px"></div>
            </div>
            <div class="tab-pane" id="int">
                <form id="international" name="international" action="" method="post">
                    <div class="col-md-12 col-xs-12" style="padding-top: 10px;">
                        <div class="section-title-divider"></div>
                        <div class="col-md-5 col-xs-12 form-group">
                            <label for="asal_i"><i class="fa fa-map-marker"></i>&nbsp;&nbsp;Kota / Bandara Asal</label>
                            <select name="asal_i" id="asal_i" class="form-control">
                                <?php
                                for ($i = 0; $i < count($international); $i++) {
                                    echo '<option value="' . $international[$i]->label . '">' . $international[$i]->country_name . ' - ' . $international[$i]->label . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-md-2 col-xs-12 form-group" style="text-align: center">
                            <div>&nbsp;</div>
                            <button type="button" class="btn btn-primary fa fa-exchange"></button>
                        </div>
                        <div class="col-md-5 col-xs-12 form-group">
                            <label for="tujuan_i"><i class="fa fa-map-marker"></i>&nbsp;&nbsp;Kota / Bandara Tujuan</label>
                            <select name="tujuan_i" id="tujuan_i" class="form-control">
                                <?php
                                for ($i = 0; $i < count($international); $i++) {
                                    echo '<option value="' . $international[$i]->label . '">' . $international[$i]->country_name . ' - ' . $international[$i]->label . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-md-12 col-xs-12 form-group">
                            <label class="radio-inline"><input type="radio" name="optradio_i" value="sj" checked="true">Sekali Jalan</label>
                            <label class="radio-inline"><input type="radio" name="optradio_i" value="pp">Pulang Pergi</label>
                        </div>    
                        <div class="col-md-12 col-xs-12 form-group">
                            <p style="text-align: left;"><i class="fa fa-calendar"></i>&nbsp;&nbsp;Keberangkatan</p>
                            <input type="date" name="dateb_i" class="form-control" placeholder="" tabindex="3">
                        </div>
                        <div class="col-md-12 col-xs-12 form-group hidden" id="pulang_i">
                            <p style="text-align: left;"><i class="fa fa-calendar"></i>&nbsp;&nbsp;Kepulangan</p>
                            <input type="date" name="datep_i" class="form-control" placeholder="" tabindex="4">
                        </div>
                        <div class="col-md-12 col-xs-12 form-group">
                            <label for="cabin_i"><i class="fa fa-briefcase"></i>&nbsp;&nbsp;Cabin</label>
                            <select id="cabin_i" name="cabin_i" class="form-control">
                                <option value="Economy">Economy</option>
                                <option value="Business">Business</option>
                            </select>
                        </div>
                        <div class="col-md-4 col-xs-4 form-group no-padding">
                            <label for="jml_dewasa_i"><i class="fa fa-user"></i>&nbsp;&nbsp;Dewasa</label>
                            <select id="jml_dewasa_i" name="jml_dewasa_i" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="4">5</option>
                                <option value="4">6</option>
                                <option value="4">7</option>
                            </select>
                        </div>
                        <div class="col-md-4 col-xs-4 form-group no-padding">
                            <label for="jml_anak_i"><i class="fa fa-user"></i>&nbsp;&nbsp;Anak</label>
                            <select id="jml_anak_i" name="jml_anak_i" class="form-control">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="4">5</option>
                                <option value="4">6</option>
                                <option value="4">7</option>
                            </select>
                        </div>
                        <div class="col-md-4 col-xs-4 form-group no-padding">
                            <label for="jml_infant_i"><i class="fa fa-user"></i>&nbsp;&nbsp;Infant</label>
                            <select id="jml_infant_i" name="jml_infant_i" class="form-control">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="4">5</option>
                                <option value="4">6</option>
                                <option value="4">7</option>
                            </select>
                        </div>
                    </div>
                    <h3 style="text-align: center">Pesan Sekarang!</h3>
                    <div class="col-md-12 col-xs-12 btn-group">
                        <button id="admin1_i" type="button" class="btn btn-success fa fa-whatsapp" style="width: 48%">&nbsp;&nbsp;ADMIN 1</button>
                        <button id="admin2_i" type="button" class="btn btn-success fa fa-whatsapp" style="width: 48%">&nbsp;&nbsp;ADMIN 2</button>
                    </div>
                </form>
                <div style="height: 60px"></div>
            </div>
        </div>
    </div>

</div>
<script>
    $(function () {
        $('#btn_dom').click(function () {
            $('#btn_int').removeClass('active');
            $('#btn_int').removeClass('btn-info');
            $('#btn_int').addClass('btn-default');
            $('#btn_dom').addClass('btn-info');
            $('#btn_dom').addClass('active');
        });
        $('#btn_int').click(function () {
            $('#btn_dom').removeClass('active');
            $('#btn_dom').removeClass('btn-info');
            $('#btn_dom').addClass('btn-default');
            $('#btn_int').addClass('btn-info');
            $('#btn_int').addClass('active');
        });
        $('input[name="optradio_d"]').change(function (e) {
            if (this.value === 'sj') {
                $('#pulang_d').addClass('hidden');
            }
            if (this.value === 'pp') {
                $('#pulang_d').removeClass('hidden');
            }
        });
        $('input[name="optradio_i"]').change(function (e) {
            if (this.value === 'sj') {
                $('#pulang_i').addClass('hidden');
            }
            if (this.value === 'pp') {
                $('#pulang_i').removeClass('hidden');
            }
        });

        $('#admin1_d').click(function () {
            var asal_d = $("#domestik select[name=asal_d]").val();
            var tujuan_d = $("#domestik select[name=tujuan_d]").val();
            var dateb_d = $("#domestik input[name=dateb_d]").val();
            var datep_d = $("#domestik input[name=datep_d]").val();
            var jml_dewasa_d = $("#domestik select[name=jml_dewasa_d]").val();
            var jml_anak_d = $("#domestik select[name=jml_anak_d]").val();
            var jml_infant_d = $("#domestik select[name=jml_infant_d]").val();

            var postData = {
                'category': 'domestik',
                'departure': asal_d,
                'arrival': tujuan_d,
                'jml_dewasa': jml_dewasa_d,
                'jml_anak': jml_anak_d,
                'jml_infant': jml_infant_d,
                'date_departure': dateb_d,
                'date_arrival': datep_d,
                'cabin': '',
                'admin': 'admin_1'
            };

            $.ajax({
                type: "POST",
                url: "<?php echo base_url() ?>index.php/sip/insert_pesawat",
                data: postData,
                success: function (msg) {

                }
            });
            if (asal_d !== "") {
                var url = 'https://api.whatsapp.com/send?text=Hai%20Admin%20Azlina%2C%20saya%20ingin%20pesan tiket pesawat domestik dari ' + asal_d+ ' ke '+tujuan_d+' tanggal berangkat '+dateb_d+' tanggal pulang '+datep_d+' penumpang dewasa '+jml_dewasa_d+' penumpang anak ' + jml_anak_d +' penumpang anak '+jml_infant_d+ '%0ATerima%20kasih&phone=6285311446150';
                window.open(url, '_blank');
            }
        });
        
        $('#admin2_d').click(function () {
            var asal_d = $("#domestik select[name=asal_d]").val();
            var tujuan_d = $("#domestik select[name=tujuan_d]").val();
            var dateb_d = $("#domestik input[name=dateb_d]").val();
            var datep_d = $("#domestik input[name=datep_d]").val();
            var jml_dewasa_d = $("#domestik select[name=jml_dewasa_d]").val();
            var jml_anak_d = $("#domestik select[name=jml_anak_d]").val();
            var jml_infant_d = $("#domestik select[name=jml_infant_d]").val();

            var postData = {
                'category': 'domestik',
                'departure': asal_d,
                'arrival': tujuan_d,
                'jml_dewasa': jml_dewasa_d,
                'jml_anak': jml_anak_d,
                'jml_infant': jml_infant_d,
                'date_departure': dateb_d,
                'date_arrival': datep_d,
                'cabin': '',
                'admin': 'admin_2'
            };

            $.ajax({
                type: "POST",
                url: "<?php echo base_url() ?>index.php/sip/insert_pesawat",
                data: postData,
                success: function (msg) {

                }
            });
            if (asal_d !== "") {
                var url = 'https://api.whatsapp.com/send?text=Hai%20Admin%20Azlina%2C%20saya%20ingin%20pesan tiket pesawat domestik dari ' + asal_d+ ' ke '+tujuan_d+' tanggal berangkat '+dateb_d+' tanggal pulang '+datep_d+' penumpang dewasa '+jml_dewasa_d+' penumpang anak ' + jml_anak_d +' penumpang anak '+jml_infant_d + '%0ATerima%20kasih&phone=6285311446150';
                window.open(url, '_blank');
            }
        });
        
        $('#admin1_i').click(function () {
            var asal_i = $("#international select[name=asal_i]").val();
            var tujuan_i = $("#international select[name=tujuan_i]").val();
            var dateb_i = $("#international input[name=dateb_i]").val();
            var datep_i = $("#international input[name=datep_i]").val();
            var jml_dewasa_i = $("#international select[name=jml_dewasa_i]").val();
            var jml_anak_i = $("#international select[name=jml_anak_i]").val();
            var jml_infant_i = $("#international select[name=jml_infant_i]").val();
            var cabin_i = $("#international select[name=cabin_i]").val();

            var postData = {
                'category': 'international',
                'departure': asal_i,
                'arrival': tujuan_i,
                'jml_dewasa': jml_dewasa_i,
                'jml_anak': jml_anak_i,
                'jml_infant': jml_infant_i,
                'date_departure': dateb_i,
                'date_arrival': datep_i,
                'cabin': cabin_i,
                'admin': 'admin_1'
            };

            $.ajax({
                type: "POST",
                url: "<?php echo base_url() ?>index.php/sip/insert_pesawat",
                data: postData,
                success: function (msg) {

                }
            });
            if (asal_i !== "") {
                var url = 'https://api.whatsapp.com/send?text=Hai%20Admin%20Azlina%2C%20saya%20ingin%20pesan tiket pesawat internasional dari ' + asal_i+ ' ke '+tujuan_i+' tanggal berangkat '+dateb_i+' tanggal pulang '+datep_i+' penumpang dewasa '+jml_iewasa_i+' penumpang anak ' + jml_anak_i +' penumpang anak '+jml_infant_i + '%0ATerima%20kasih&phone=6285311446150';
                window.open(url, '_blank');
            }
        });
        
        $('#admin2_i').click(function () {
            var asal_i = $("#international select[name=asal_i]").val();
            var tujuan_i = $("#international select[name=tujuan_i]").val();
            var dateb_i = $("#international input[name=dateb_i]").val();
            var datep_i = $("#international input[name=datep_i]").val();
            var jml_dewasa_i = $("#international select[name=jml_dewasa_i]").val();
            var jml_anak_i = $("#international select[name=jml_anak_i]").val();
            var jml_infant_i = $("#international select[name=jml_infant_i]").val();
            var cabin_i = $("#international select[name=cabin_i]").val();

            var postData = {
                'category': 'international',
                'departure': asal_i,
                'arrival': tujuan_i,
                'jml_dewasa': jml_dewasa_i,
                'jml_anak': jml_anak_i,
                'jml_infant': jml_infant_i,
                'date_departure': dateb_i,
                'date_arrival': datep_i,
                'cabin': cabin_i,
                'admin': 'admin_2'
            };

            $.ajax({
                type: "POST",
                url: "<?php echo base_url() ?>index.php/sip/insert_pesawat",
                data: postData,
                success: function (msg) {

                }
            });
            if (asal_i !== "") {
                var url = 'https://api.whatsapp.com/send?text=Hai%20Admin%20Azlina%2C%20saya%20ingin%20pesan tiket pesawat internasional dari ' + asal_i+ ' ke '+tujuan_i+' tanggal berangkat '+dateb_i+' tanggal pulang '+datep_i+' penumpang dewasa '+jml_iewasa_i+' penumpang anak ' + jml_anak_i +' penumpang anak '+jml_infant_i  + '%0ATerima%20kasih&phone=6285311446150';
                window.open(url, '_blank');
            }
        });
    });
</script>
<?php $this->view('template/foot_only'); ?>