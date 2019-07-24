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
        <form id="plnpra" name="plnpra" action="" method="post">
            <div class="section-title-divider"></div>
            <div class="col-md-6 col-xs-12 form-group">
                <p><i class="fa fa-bolt"></i>&nbsp;&nbsp;Nomor Meter&nbsp;/&nbsp;ID Pelanggan</p>
                <input type="number" name="no_idpel" class="form-control" placeholder="" tabindex="1">
            </div>
            <div class="col-md-6 col-xs-12 form-group">
                <label for="jenis_produk"><i class="fa fa-money"></i>&nbsp;&nbsp;Nominal</label>
                <select class="form-control" id="jenis_produk" name="jenis_produk">
                    <option value="PLN PRA-20.000">PLN PRA-20.000</option>
                    <option value="PLN PRA-50.000">PLN PRA-50.000</option>
                    <option value="PLN PRA-100.000">PLN PRA-100.000</option>
                    <option value="PLN PRA-200.000">PLN PRA-200.000</option>
                    <option value="PLN PRA-500.000">PLN PRA-500.000</option>
                    <option value="PLN PRA-1.000.000">PLN PRA-1.000.000</option>
                </select>
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
        var jenis_produk = $("#plnpra select[name=jenis_produk]").val();
        var no_idpel = $("#plnpra input[name=no_idpel]").val();
        var postData = {
            'no_idpel': no_idpel,
            'jenis_produk': jenis_produk,
            'admin': 'admin_1'
        };

        $.ajax({
            type: "POST",
            url: "<?php echo base_url() ?>index.php/sip/insert_ppob_plnpra",
            data: postData,
            success: function (msg) {

            }
        });
        if (no_idpel !== "") {
            var url = 'https://api.whatsapp.com/send?text=Hai%20Admin%20Azlina%2C%20saya%20ingin%20bayar%20pulsa%20listrik%20prabayar%20' + jenis_produk + '%20untuk%3A%0ANomor%20ID%20%3A%20' + no_idpel + '%0ATerima%20kasih&phone=6285311446150';
            window.open(url, '_blank');
        }
    });

    $('#admin2').click(function () {
        var jenis_produk = $("#plnpra select[name=jenis_produk]").val();
        var no_idpel = $("#plnpra input[name=no_idpel]").val();
        var postData = {
            'no_idpel': no_idpel,
            'jenis_produk': jenis_produk,
            'admin': 'admin_2'
        };

        $.ajax({
            type: "POST",
            url: "<?php echo base_url() ?>index.php/sip/insert_ppob_plnpra",
            data: postData,
            success: function (msg) {

            }
        });
        if (no_idpel !== "") {
            var url = 'https://api.whatsapp.com/send?text=Hai%20Admin%20Azlina%2C%20saya%20ingin%20bayar%20pulsa%20listrik%20prabayar%20' + jenis_produk + '%20untuk%3A%0ANomor%20ID%20%3A%20' + no_idpel + '%0ATerima%20kasih&phone=6285311446150';
            window.open(url, '_blank');
        }
    });
</script>