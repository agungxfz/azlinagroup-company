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
    <div class="col-md-12 col-xs-12" style="padding-top: 10px;">
        <h3 style="text-align: center"><?php echo $title; ?></h3>
        <form id="pdam" name="pdam" action="" method="post">
            <div class="section-title-divider"></div>
            <div class="col-md-6 col-xs-12 form-group">
                <label for="jenis_produk"><i class="fa fa-shower"></i>&nbsp;&nbsp;Area PDAM</label>
                <select class="form-control" id="jenis_produk" name="jenis_produk">
                    <option value="Aetra Jakarta">Aetra Jakarta</option>
                    <option value="Palyja Jakarta">Palyja Jakarta</option>
                    <option value="PDAM Kab. Balangan">PDAM Kab. Balangan</option>
                    <option value="PDAM Kab. Bandung">PDAM Kab. Bandung</option>
                    <option value="PDAM Kab. Bangkalan">PDAM Kab. Bangkalan</option>
                    <option value="PDAM Kab. Banyumas">PDAM Kab. Banyumas</option>
                    <option value="PDAM Kab. Berau">PDAM Kab. Berau</option>
                    <option value="PDAM Kab. Bogor">PDAM Kab. Bogor</option>
                    <option value="PDAM Kab. Bojonegoro">PDAM Kab. Bojonegoro</option>
                    <option value="PDAM Kab. Bondowoso">PDAM Kab. Bondowoso</option>
                    <option value="PDAM Kab. Boyolali">PDAM Kab. Boyolali</option>
                    <option value="PDAM Kab. Brebes">PDAM Kab. Brebes</option>
                    <option value="PDAM Kab. Cilacap">PDAM Kab. Cilacap</option>
                    <option value="PDAM Kab. Grobogan">PDAM Kab. Grobogan</option>
                    <option value="PDAM Kab. Jember">PDAM Kab. Jember</option>
                    <option value="PDAM Kab. Jepara">PDAM Kab. Jepara</option>
                    <option value="PDAM Kab. Karanganyar">PDAM Kab. Karanganyar</option>
                    <option value="PDAM Kab. Kebumen">PDAM Kab. Kebumen</option>
                    <option value="PDAM Kab. Kendal">PDAM Kab. Kendal</option>
                    <option value="PDAM Kab. Klaten">PDAM Kab. Klaten</option>
                    <option value="PDAM Kab. Lombok Tengah">PDAM Kab. Lombok Tengah</option>
                    <option value="PDAM Kab. Malang">PDAM Kab. Malang</option>
                    <option value="PDAM Kab. Mojokerjo">PDAM Kab. Mojokerjo</option>
                    <option value="PDAM Kab. Pekalongan">PDAM Kab. Pekalongan</option>
                    <option value="PDAM Kab. Probolinggo">PDAM Kab. Probolinggo</option>
                    <option value="PDAM Kab. Purbalingga">PDAM Kab. Purbalingga</option>
                    <option value="PDAM Kab. Purworejo">PDAM Kab. Purworejo</option>
                    <option value="PDAM Kab. Rembang">PDAM Kab. Rembang</option>
                    <option value="PDAM Kab. Semarang">PDAM Kab. Semarang</option>
                    <option value="PDAM Kab. Sidoarjo">PDAM Kab. Sidoarjo</option>
                    <option value="PDAM Kab. Situbondo">PDAM Kab. Situbondo</option>
                    <option value="PDAM Kab. Sleman">PDAM Kab. Sleman</option>
                    <option value="PDAM Kab. Sragen">PDAM Kab. Sragen</option>
                    <option value="PDAM Kab. Tapin">PDAM Kab. Tapin</option>
                    <option value="PDAM Kab. Temanggung">PDAM Kab. Temanggung</option>
                    <option value="PDAM Kab. Wonogiri">PDAM Kab. Wonogiri</option>
                    <option value="PDAM Kab. Wonosobo">PDAM Kab. Wonosobo</option>
                    <option value="PDAM Kota Balikpapan">PDAM Kota Balikpapan</option>
                    <option value="PDAM Kota Bandar Lampung">PDAM Kota Bandar Lampung</option>
                    <option value="PDAM Kota Bandung">PDAM Kota Bandung</option>
                    <option value="PDAM Kota Banjarmasin">PDAM Kota Banjarmasin</option>
                    <option value="PDAM Kota Bekasi">PDAM Kota Bekasi</option>
                    <option value="PDAM Kota Bogor">PDAM Kota Bogor</option>
                    <option value="PDAM Kota Denpasar">PDAM Kota Denpasar</option>
                    <option value="PDAM Kota Depok">PDAM Kota Depok</option>
                    <option value="PDAM Kota Jambi">PDAM Kota Jambi</option>
                    <option value="PDAM Kota Karawang">PDAM Kota Karawang</option>
                    <option value="PDAM Kota Kubu Raya (Pontianak)">PDAM Kota Kubu Raya (Pontianak)</option>
                    <option value="PDAM Kota Madiun">PDAM Kota Madiun</option>
                    <option value="PDAM Kota Makassar">PDAM Kota Makassar</option>
                    <option value="PDAM Kota Malang">PDAM Kota Malang</option>
                    <option value="PDAM Kota Manado">PDAM Kota Manado</option>
                    <option value="PDAM Kota Mataram">PDAM Kota Mataram</option>
                    <option value="PDAM Kota Medan">PDAM Kota Medan</option>
                    <option value="PDAM Kota Palembang">PDAM Kota Palembang</option>
                    <option value="PDAM Kota Pontianak">PDAM Kota Pontianak</option>
                    <option value="PDAM Kota Salatiga">PDAM Kota Salatiga</option>
                    <option value="PDAM Kota Semarang">PDAM Kota Semarang</option>
                    <option value="PDAM Kota Surabaya">PDAM Kota Surabaya</option>
                </select>
            </div>
            <div class="col-md-6 col-xs-12 form-group">
                <p><i class="fa fa-info"></i>&nbsp;&nbsp;Nomor Pelanggan</p>
                <input type="number" name="no_idpel" class="form-control" placeholder="" tabindex="1">
            </div>

            <h3 style="text-align: center">Pesan ke :</h3>
            <div class="col-md-12 col-xs-12 btn-group">
                <button id="admin1" type="button" class="btn btn-success fa fa-whatsapp" style="width: 48%">&nbsp;&nbsp;ADMIN 1</button>
                <button id="admin2" type="button" class="btn btn-success fa fa-whatsapp" style="width: 48%">&nbsp;&nbsp;ADMIN 2</button>
            </div>
        </form>
    </div>
</div>

<script>
    $('#admin1').click(function () {
        var jenis_produk = $("#pdam select[name=jenis_produk]").val();
        var no_idpel = $("#pdam input[name=no_idpel]").val();
        var postData = {
            'no_idpel': no_idpel,
            'jenis_produk': jenis_produk,
            'admin': 'admin_1'
        };

        $.ajax({
            type: "POST",
            url: "<?php echo base_url() ?>index.php/sip/insert_ppob_pdam",
            data: postData,
            success: function (msg) {

            }
        });
        if (no_idpel !== "") {
            var url = 'https://api.whatsapp.com/send?text=Hai%20Admin%20Azlina%2C%20saya%20ingin%20bayar%20tagihan%20air%20' + jenis_produk + '%20untuk%3A%0ANomor%20ID%20%3A%20' + no_idpel + '%0ATerima%20kasih&phone=6285311446150';
            window.open(url, '_blank');
        }
    });

    $('#admin2').click(function () {
        var jenis_produk = $("#pdam select[name=jenis_produk]").val();
        var no_idpel = $("#pdam input[name=no_idpel]").val();
        var postData = {
            'no_idpel': no_idpel,
            'jenis_produk': jenis_produk,
            'admin': 'admin_2'
        };

        $.ajax({
            type: "POST",
            url: "<?php echo base_url() ?>index.php/sip/insert_ppob_pdam",
            data: postData,
            success: function (msg) {

            }
        });
        if (no_idpel !== "") {
            var url = 'https://api.whatsapp.com/send?text=Hai%20Admin%20Azlina%2C%20saya%20ingin%20bayar%20tagihan%20air%20' + jenis_produk + '%20untuk%3A%0ANomor%20ID%20%3A%20' + no_idpel + '%0ATerima%20kasih&phone=6285311446150';
            window.open(url, '_blank');
        }
    });
</script>