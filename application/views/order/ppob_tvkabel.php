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
        <h3 style="text-align: center"><?php echo $title;?></h3>
        <form id="tvkabel" name="tvkabel" action="" method="post">
            <div class="section-title-divider"></div>
            <div class="col-md-6 col-xs-12 form-group">
                <label for="jenis_produk"><i class="fa fa-money"></i>&nbsp;&nbsp;Jenis Produk</label>
                <select class="form-control" id="jenis_produk" name="jenis_produk">
                    <option value="Indovision">Indovision</option>
                    <option value="Telkomvision">Telkomvision</option>
                    <option value="Okevision">Okevision</option>
                    <option value="Top TV">Top TV</option>
                    <option value="Yes TV">Yes TV</option>
                    <option value="Topas TV">Topas TV</option>
                    <option value="Nexmedia">Nexmedia</option>
                    <option value="Transvision">Transvision</option>
                    <option value="Orange TV">Orange TV</option>
                    <option value="Big TV">Big TV</option>
                </select>
            </div>
            <div class="col-md-6 col-xs-12 form-group">
                <p><i class="fa fa-phone"></i>&nbsp;&nbsp;Nomor Pelanggan</p>
                <input type="number" name="no_idpel" class="form-control" placeholder="" tabindex="1">
            </div>
            <h3 style="text-align: center">Pesan Sekarang!</h3>
            <div class="col-md-12 col-xs-12 btn-group">
                <button id="admin1" type="button" class="btn btn-success fa fa-whatsapp" style="width: 48%">&nbsp;&nbsp;ADMIN 1</button>
                <button id="admin2" type="button" class="btn btn-success fa fa-whatsapp" style="width: 48%">&nbsp;&nbsp;ADMIN 2</button>
            </div>
        </form>
    </div>
</div>
<script>
    $('#admin1').click(function () {
        var jenis_produk = $("#tvkabel select[name=jenis_produk]").val();
        var no_idpel = $("#tvkabel input[name=no_idpel]").val();
        var postData = {
            'no_idpel': no_idpel,
            'jenis_produk': jenis_produk,
            'admin': 'admin_1'
        };

        $.ajax({
            type: "POST",
            url: "<?php echo base_url() ?>index.php/sip/insert_ppob_tvkabel",
            data: postData,
            success: function (msg) {

            }
        });
        if (no_idpel !== "") {
            var url = 'https://api.whatsapp.com/send?text=Hai%20Admin%20Azlina%2C%20saya%20ingin%20bayar%20tagihan%20TV%20Berlanggganan%20' + jenis_produk + '%20untuk%3A%0ANomor%20ID%20%3A%20' + no_idpel + '%0ATerima%20kasih&phone=6285311446150';
            window.open(url, '_blank');
        }
    });

    $('#admin2').click(function () {
        var jenis_produk = $("#tvkabel select[name=jenis_produk]").val();
        var no_idpel = $("#tvkabel input[name=no_idpel]").val();
        var postData = {
            'no_idpel': no_idpel,
            'jenis_produk': jenis_produk,
            'admin': 'admin_2'
        };

        $.ajax({
            type: "POST",
            url: "<?php echo base_url() ?>index.php/sip/insert_ppob_tvkabel",
            data: postData,
            success: function (msg) {

            }
        });
        if (no_idpel !== "") {
            var url = 'https://api.whatsapp.com/send?text=Hai%20Admin%20Azlina%2C%20saya%20ingin%20bayar%20tagihan%20TV%20Berlanggganan%20' + jenis_produk + '%20untuk%3A%0ANomor%20ID%20%3A%20' + no_idpel + '%0ATerima%20kasih&phone=6285311446150';
            window.open(url, '_blank');
        }
    });
</script>