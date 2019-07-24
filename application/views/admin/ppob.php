<link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/lib/datatables/css/jquery.dataTables.css' ?>">
<script type="text/javascript" src="<?php echo base_url() . 'assets/lib/datatables/js/jquery.dataTables.js' ?>"></script>
<script type="text/javascript" src="<?php echo base_url() . 'assets/js/moment.js' ?>"></script>
<div class="col-md-12 col-xs-12">
    <div class="row">
        <h1><small><?= $header ?></small></h1>
    </div>
    <div class="row">
        <div class="col-md-3 col-xs-3"><i class="fa fa-calendar"></i>&nbsp;&nbsp;Pilih Bulan : 
            <select class="form-control-range">
                <?php
                for ($i = 1; $i <= 12; $i++) {
                    echo '<option value="' . date("F", mktime(0, 0, 0, $i, 10)) . '">' . date("F", mktime(0, 0, 0, $i, 10)) . '</option>';
                }
                ?>
            </select>
        </div>
        <div class="col-md-3 col-xs-3"><i class="fa fa-calendar"></i>&nbsp;&nbsp;Pilih Tahun : 
            <select class="form-control-range">
                <?php
                for ($x = 2017; $x <= date('Y'); $x++) {
                    echo '<option value="' . date("Y", mktime(0, 0, 0, 0, 0, $x)) . '">' . date("Y", mktime(0, 0, 0, 0, 0, $x)) . '</option>';
                }
                ?>
            </select>
        </div>
    </div>
    <div>&nbsp;</div>
    <div class="row">
        <div id="reload">
            <table class="table table-striped" id="mydata">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Tanggal Order</th>
                        <th scope="col">No. Pelanggan</th>
                        <th scope="col">Nama Layanan</th>
                        <th scope="col">Status</th>
                        <th scope="col">Chat Admin</th>
                        <th scope="col">Jenis Layanan</th>
                    </tr>
                </thead>
                <tbody id="show_data">

                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- MODAL EDIT -->
<div class="modal fade" id="ModalaEdit" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 class="modal-title" id="myModalLabel">Edit Barang</h3>
            </div>
            <form class="form-horizontal">
                <div class="modal-body">

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Kode Barang</label>
                        <div class="col-xs-9">
                            <input name="kobar_edit" id="kode_barang2" class="form-control" type="text" placeholder="Kode Barang" style="width:335px;" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama Barang</label>
                        <div class="col-xs-9">
                            <input name="nabar_edit" id="nama_barang2" class="form-control" type="text" placeholder="Nama Barang" style="width:335px;" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Harga</label>
                        <div class="col-xs-9">
                            <input name="harga_edit" id="harga2" class="form-control" type="text" placeholder="Harga" style="width:335px;" required>
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info" id="btn_update">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--END MODAL EDIT-->

<!--MODAL HAPUS-->
<div class="modal fade" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
                <h4 class="modal-title" id="myModalLabel">Hapus Barang</h4>
            </div>
            <form class="form-horizontal">
                <div class="modal-body">

                    <input type="hidden" name="kode" id="textkode" value="">
                    <div class="alert alert-warning"><p>Apakah Anda yakin mau memhapus barang ini?</p></div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                    <button class="btn_hapus btn btn-danger" id="btn_hapus">Hapus</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--END MODAL HAPUS-->
<script type="text/javascript">
    $(document).ready(function () {
        tampil_data_barang();	//pemanggilan fungsi tampil barang.

        $('#mydata').dataTable();

        //fungsi tampil barang
        function tampil_data_barang() {
            $.ajax({
                url: '<?php echo base_url() ?>index.php/data/get_list_ppob?ds=2018-01-01&de=2018-01-31',
                async: false,
                type: 'GET',
                success: function (data) {
                    var data1 = data.replace("<title>Json</title>", "");
                    var data2 = data1.replace("(", "[");
                    var data3 = data2.replace(");", "]");
                    var dataJson = JSON.parse(data3);
                    var html = '';
                    var i;
                    for (i = 0; i < dataJson.length; i++) {
                        html += '<tr>' +
                                '<td>' + dataJson[i].date_order + '</td>' +
                                '<td>' + dataJson[i].nomor_idpel + '</td>' +
                                '<td>' + dataJson[i].jenis_produk + '</td>' +
                                '<td>' + dataJson[i].status_order + '</td>' +
                                '<td>' + dataJson[i].chat_admin + '</td>' +
                                '<td>' + dataJson[i].layanan + '</td>' +
                                '</tr>';
                    }
                    console.log(dataJson);
                    $('#show_data').html(html);
                }

            });
        }

        //GET UPDATE
        $('#show_data').on('click', '.item_edit', function () {
            var id = $(this).attr('data');
            $.ajax({
                type: "GET",
                url: "<?php echo base_url('index.php/barang/get_barang') ?>",
                dataType: "JSON",
                data: {id: id},
                success: function (data) {
                    $.each(data, function (barang_kode, barang_nama, barang_harga) {
                        $('#ModalaEdit').modal('show');
                        $('[name="kobar_edit"]').val(data.barang_kode);
                        $('[name="nabar_edit"]').val(data.barang_nama);
                        $('[name="harga_edit"]').val(data.barang_harga);
                    });
                }
            });
            return false;
        });


        //GET HAPUS
        $('#show_data').on('click', '.item_hapus', function () {
            var id = $(this).attr('data');
            $('#ModalHapus').modal('show');
            $('[name="kode"]').val(id);
        });

        //Simpan Barang
        $('#btn_simpan').on('click', function () {
            var kobar = $('#kode_barang').val();
            var nabar = $('#nama_barang').val();
            var harga = $('#harga').val();
            $.ajax({
                type: "POST",
                url: "<?php echo base_url('index.php/barang/simpan_barang') ?>",
                dataType: "JSON",
                data: {kobar: kobar, nabar: nabar, harga: harga},
                success: function (data) {
                    $('[name="kobar"]').val("");
                    $('[name="nabar"]').val("");
                    $('[name="harga"]').val("");
                    $('#ModalaAdd').modal('hide');
                    tampil_data_barang();
                }
            });
            return false;
        });

        //Update Barang
        $('#btn_update').on('click', function () {
            var kobar = $('#kode_barang2').val();
            var nabar = $('#nama_barang2').val();
            var harga = $('#harga2').val();
            $.ajax({
                type: "POST",
                url: "<?php echo base_url('index.php/barang/update_barang') ?>",
                dataType: "JSON",
                data: {kobar: kobar, nabar: nabar, harga: harga},
                success: function (data) {
                    $('[name="kobar_edit"]').val("");
                    $('[name="nabar_edit"]').val("");
                    $('[name="harga_edit"]').val("");
                    $('#ModalaEdit').modal('hide');
                    tampil_data_barang();
                }
            });
            return false;
        });

        //Hapus Barang
        $('#btn_hapus').on('click', function () {
            var kode = $('#textkode').val();
            $.ajax({
                type: "POST",
                url: "<?php echo base_url('index.php/barang/hapus_barang') ?>",
                dataType: "JSON",
                data: {kode: kode},
                success: function (data) {
                    $('#ModalHapus').modal('hide');
                    tampil_data_barang();
                }
            });
            return false;
        });

    });

</script>