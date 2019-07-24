<link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/lib/datatables/css/jquery.dataTables.css' ?>">
<script type="text/javascript" src="<?php echo base_url() . 'assets/lib/datatables/js/jquery.dataTables.js' ?>"></script>
<script type="text/javascript" src="<?php echo base_url() . 'assets/js/moment.js' ?>"></script>
<style>
    .dataTable th, .dataTable td {
        max-width: 200px;
        min-width: 70px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }
</style>
<div class="col-md-12 col-xs-12">
    <div class="row">
        <h1><small><?= $table_title ?></small>
            <div class="pull-right"><a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#ModalaAdd"><span class="fa fa-plus"></span> Tambah Barang</a></div>
        </h1>
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
                        <th scope="col">Judul</th>
                        <th scope="col">Isi</th>
                        <th scope="col">Meta Desc</th>
                        <th scope="col">Meta Key</th>
                        <th scope="col">Meta Robots</th>
                        <th scope="col">Author</th>
                        <th scope="col">Location</th>
                        <th scope="col">Created Date</th>
                        <th scope="col">Image</th>
                        <th style="text-align: right;">Aksi</th>
                    </tr>
                </thead>
                <tbody id="show_data">

                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- MODAL ADD -->
<div class="modal fade" id="ModalaAdd" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 class="modal-title" id="myModalLabel">Tambah Barang</h3>
            </div>
            <form class="form-horizontal">
                <div class="modal-body">

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Kode Barang</label>
                        <div class="col-xs-9">
                            <input name="kobar" id="kode_barang" class="form-control" type="text" placeholder="Kode Barang" style="width:335px;" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama Barang</label>
                        <div class="col-xs-9">
                            <input name="nabar" id="nama_barang" class="form-control" type="text" placeholder="Nama Barang" style="width:335px;" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Harga</label>
                        <div class="col-xs-9">
                            <input name="harga" id="harga" class="form-control" type="text" placeholder="Harga" style="width:335px;" required>
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info" id="btn_simpan">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--END MODAL ADD-->

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
                url: '<?php echo base_url() ?>index.php/data/get_static_article',
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
                                '<td>' + dataJson[i].article_judul + '</td>' +
                                '<td>' + dataJson[i].article_isi + '</td>' +
                                '<td>' + dataJson[i].article_meta_desc + '</td>' +
                                '<td>' + dataJson[i].article_meta_key + '</td>' +
                                '<td>' + dataJson[i].article_meta_robots + '</td>' +
                                '<td>' + dataJson[i].article_author + '</td>' +
                                '<td>' + dataJson[i].article_location + '</td>' +
                                '<td>' + dataJson[i].create_date + '</td>' +
                                '<td>' + dataJson[i].article_image + '</td>' +
                                '<td style="text-align:right;">' +
                                '<a href="javascript:;" class="btn btn-info btn-xs item_edit" data="' + data[i].barang_kode + '">Edit</a>' + ' ' +
                                '<a href="javascript:;" class="btn btn-danger btn-xs item_hapus" data="' + data[i].barang_kode + '">Hapus</a>' +
                                '</td>' +
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