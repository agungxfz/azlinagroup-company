<link href="<?php echo base_url() ?>assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link href="<?php echo base_url() ?>assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" rel="stylesheet">-->
<!--<link href="<?php echo base_url() ?>assets/js/jquery.3.2.1.min.js" rel="stylesheet">-->
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/themes/ui-darkness/jquery-ui.min.css"></script>
<script src="<?php echo base_url() ?>assets/lib/jquery/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js"></script>

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
    <form id="hotel" name="hotel" action="" method="post">
        <div class="col-md-12 col-xs-12" style="padding-top: 10px;">
            <div class="section-title-divider"></div>
            <div class="col-md-12 col-xs-12 form-group">
                <label for="kota_tujuan"><i class="fa fa-map-marker"></i>&nbsp;&nbsp;Kota Tujuan</label>
                <select name="kota_tujuan" id="kota_tujuan" class="form-control">
                    <option  value=""></option>
                    <option  value="Ambarawa">Ambarawa</option>
                    <option  value="Padang Sidempuan">Padang Sidempuan</option>
                    <option  value="Ambon">Ambon</option>
                    <option  value="Anyer">Anyer</option>
                    <option  value="Banjarmasin">Banjarmasin</option>
                    <option  value="Bandung">Bandung</option>
                    <option  value="Bondowoso">Bondowoso</option>
                    <option  value="Berau">Berau</option>
                    <option  value="Bogor">Bogor</option>
                    <option  value="Biak">Biak</option>
                    <option  value="Banjarnegara">Banjarnegara</option>
                    <option  value="Bojonegoro">Bojonegoro</option>
                    <option  value="Banjarbaru">Banjarbaru</option>
                    <option  value="Bangka">Bangka</option>
                    <option  value="Bukit Lawang">Bukit Lawang</option>
                    <option  value="Bekasi">Bekasi</option>
                    <option  value="Bukittinggi">Bukittinggi</option>
                    <option  value="Bengkulu">Bengkulu</option>
                    <option  value="Belitung">Belitung</option>
                    <option  value="Bromo">Bromo</option>
                    <option  value="Bima">Bima</option>
                    <option  value="Balikpapan">Balikpapan</option>
                    <option  value="Berastagi">Berastagi</option>
                    <option  value="Bintan">Bintan</option>
                    <option  value="Baturaden">Baturaden</option>
                    <option  value="Batam">Batam</option>
                    <option  value="Banda Aceh">Banda Aceh</option>
                    <option  value="Batusangkar">Batusangkar</option>
                    <option  value="Blitar">Blitar</option>
                    <option  value="Batu">Batu</option>
                    <option  value="Batulicin">Batulicin</option>
                    <option  value="Baubau">Baubau</option>
                    <option  value="Banyuwangi">Banyuwangi</option>
                    <option  value="Bontang">Bontang</option>
                    <option  value="Cianjur">Cianjur</option>
                    <option  value="Cirebon">Cirebon</option>
                    <option  value="Candidasa">Candidasa</option>
                    <option  value="Jakarta">Jakarta</option>
                    <option  value="Cikarang">Cikarang</option>
                    <option  value="Cilegon">Cilegon</option>
                    <option  value="Cepu">Cepu</option>
                    <option  value="Cipanas">Cipanas</option>
                    <option  value="Cisarua">Cisarua</option>
                    <option  value="Central Java (Jawa Tengah)">Central Java (Jawa Tengah)</option>
                    <option  value="Cilacap">Cilacap</option>
                    <option  value="Jambi">Jambi</option>
                    <option  value="Jayapura">Jayapura</option>
                    <option  value="Depok">Depok</option>
                    <option  value="Bali">Bali</option>
                    <option  value="Dompu">Dompu</option>
                    <option  value="Dumai">Dumai</option>
                    <option  value="East Java (Jawa Timur)">East Java (Jawa Timur)</option>
                    <option  value="Flores">Flores</option>
                    <option  value="Gili Trawangan">Gili Trawangan</option>
                    <option  value="Gili Aiir">Gili Aiir</option>
                    <option  value="Garut">Garut</option>
                    <option  value="Gresik">Gresik</option>
                    <option  value="Gorontalo">Gorontalo</option>
                    <option  value="Indramayu">Indramayu</option>
                    <option  value="Irian jaya">Irian jaya</option>
                    <option  value="Jember">Jember</option>
                    <option  value="Jombang">Jombang</option>
                    <option  value="Yogyakarta">Yogyakarta</option>
                    <option  value="Jepara">Jepara</option>
                    <option  value="Java (Jawa)">Java (Jawa)</option>
                    <option  value="Kebumen">Kebumen</option>
                    <option  value="Kendari">Kendari</option>
                    <option  value="Kediri">Kediri</option>
                    <option  value="Kudus">Kudus</option>
                    <option  value="Kalimantan">Kalimantan</option>
                    <option  value="Kuningan">Kuningan</option>
                    <option  value="Medan">Medan</option>
                    <option  value="Karawang">Karawang</option>
                    <option  value="Kuta Cane">Kuta Cane</option>
                    <option  value="Ketapang">Ketapang</option>
                    <option  value="Kutai">Kutai</option>
                    <option  value="Klaten">Klaten</option>
                    <option  value="Karimun Jawa">Karimun Jawa</option>
                    <option  value="Lubuk Linggau">Lubuk Linggau</option>
                    <option  value="Lembongan Island">Lembongan Island</option>
                    <option  value="Labuan Bajo">Labuan Bajo</option>
                    <option  value="Labuhanbatu">Labuhanbatu</option>
                    <option  value="Legian">Legian</option>
                    <option  value="Lumajang">Lumajang</option>
                    <option  value="Lamongan">Lamongan</option>
                    <option  value="Lombok">Lombok</option>
                    <option  value="Lampung">Lampung</option>
                    <option  value="Luwuk">Luwuk</option>
                    <option  value="Madura">Madura</option>
                    <option  value="Manado">Manado</option>
                    <option  value="Madiun">Madiun</option>
                    <option  value="Magelang">Magelang</option>
                    <option  value="Mojokerto">Mojokerto</option>
                    <option  value="Mamuju">Mamuju</option>
                    <option  value="Manokwari">Manokwari</option>
                    <option  value="Malang">Malang</option>
                    <option  value="Maluku">Maluku</option>
                    <option  value="Maumere">Maumere</option>
                    <option  value="Muara Enim">Muara Enim</option>
                    <option  value="Moyo Island">Moyo Island</option>
                    <option  value="Nusa Dua">Nusa Dua</option>
                    <option  value="Prabumulih">Prabumulih</option>
                    <option  value="Probolinggo">Probolinggo</option>
                    <option  value="Puncak">Puncak</option>
                    <option  value="Padang">Padang</option>
                    <option  value="Pandaan">Pandaan</option>
                    <option  value="Pengandaran">Pengandaran</option>
                    <option  value="Pangandaran">Pangandaran</option>
                    <option  value="Pekalongan">Pekalongan</option>
                    <option  value="Pangkalan Bun">Pangkalan Bun</option>
                    <option  value="Pekanbaru">Pekanbaru</option>
                    <option  value="Palangkaraya">Palangkaraya</option>
                    <option  value="Palembang">Palembang</option>
                    <option  value="Pulau Samosir">Pulau Samosir</option>
                    <option  value="Pelabuhan Ratu">Pelabuhan Ratu</option>
                    <option  value="Palu">Palu</option>
                    <option  value="Pemalang">Pemalang</option>
                    <option  value="Pamekasan">Pamekasan</option>
                    <option  value="Pematang Siantar">Pematang Siantar</option>
                    <option  value="Panakkukang">Panakkukang</option>
                    <option  value="Pontianak">Pontianak</option>
                    <option  value="Ponorogo">Ponorogo</option>
                    <option  value="Papua">Papua</option>
                    <option  value="Pare - pare">Pare - pare</option>
                    <option  value="Pasuruan">Pasuruan</option>
                    <option  value="Pati">Pati</option>
                    <option  value="Kolaka">Kolaka</option>
                    <option  value="Purwakarta">Purwakarta</option>
                    <option  value="Purwokerto">Purwokerto</option>
                    <option  value="Purwodadi Grobogan">Purwodadi Grobogan</option>
                    <option  value="Lahat">Lahat</option>
                    <option  value="Rembang">Rembang</option>
                    <option  value="Riau">Riau</option>
                    <option  value="Sumba">Sumba</option>
                    <option  value="Subang">Subang</option>
                    <option  value="Sumbawa Besar">Sumbawa Besar</option>
                    <option  value="Sidoarjo">Sidoarjo</option>
                    <option  value="Singaraja">Singaraja</option>
                    <option  value="Sungailiat">Sungailiat</option>
                    <option  value="Parapat">Parapat</option>
                    <option  value="Singkawang">Singkawang</option>
                    <option  value="Sukabumi">Sukabumi</option>
                    <option  value="Salatiga">Salatiga</option>
                    <option  value="Sulawesi">Sulawesi</option>
                    <option  value="Sumatra">Sumatra</option>
                    <option  value="Seminyak">Seminyak</option>
                    <option  value="Sampit">Sampit</option>
                    <option  value="Samosir">Samosir</option>
                    <option  value="Sanur">Sanur</option>
                    <option  value="Solo City">Solo City</option>
                    <option  value="Sorong">Sorong</option>
                    <option  value="Serang">Serang</option>
                    <option  value="Sragen">Sragen</option>
                    <option  value="Semarang">Semarang</option>
                    <option  value="Samarinda">Samarinda</option>
                    <option  value="Sarangan">Sarangan</option>
                    <option  value="Situbondo">Situbondo</option>
                    <option  value="Surabaya">Surabaya</option>
                    <option  value="Sumenep">Sumenep</option>
                    <option  value="Sumbawa">Sumbawa</option>
                    <option  value="Tuban">Tuban</option>
                    <option  value="Tabanan">Tabanan</option>
                    <option  value="Tangerang">Tangerang</option>
                    <option  value="Tegal">Tegal</option>
                    <option  value="Tenggarong">Tenggarong</option>
                    <option  value="Timika">Timika</option>
                    <option  value="Tanjung Benoa">Tanjung Benoa</option>
                    <option  value="Tanjung Balai Karimun">Tanjung Balai Karimun</option>
                    <option  value="Tanjung Lesung">Tanjung Lesung</option>
                    <option  value="Tanjung Selor">Tanjung Selor</option>
                    <option  value="Bandar Lampung">Bandar Lampung</option>
                    <option  value="Taliwang">Taliwang</option>
                    <option  value="Tulungagung">Tulungagung</option>
                    <option  value="Tanjung Pinang">Tanjung Pinang</option>
                    <option  value="Toraja">Toraja</option>
                    <option  value="Tarakan">Tarakan</option>
                    <option  value="Tasikmalaya">Tasikmalaya</option>
                    <option  value="Ternate">Ternate</option>
                    <option  value="Tana Toraja">Tana Toraja</option>
                    <option  value="Tretes">Tretes</option>
                    <option  value="Tawangmangu">Tawangmangu</option>
                    <option  value="Ujung Pandang (Makassar)">Ujung Pandang (Makassar)</option>
                    <option  value="Makassar">Makassar</option>
                    <option  value="Waingapu">Waingapu</option>
                    <option  value="West Java (Jawa Barat)">West Java (Jawa Barat)</option>
                    <option  value="Wamena">Wamena</option>
                    <option  value="Wonosobo">Wonosobo</option>
                    <option  value="West Sumatra (Sumatra Barat)">West Sumatra (Sumatra Barat)</option>
                </select>
            </div>
            <div class="col-md-6 col-xs-12 form-group">
                <p><i class="fa fa-calendar"></i>&nbsp;&nbsp;Check - In</p>
                <input type="date" class="form-control" name="checkin" placeholder="" tabindex="3">
            </div>
            <div class="col-md-6 col-xs-12 form-group">
                <p><i class="fa fa-calendar"></i>&nbsp;&nbsp;Check - Out</p>
                <input type="date" class="form-control" name="checkout" placeholder="" tabindex="4">
            </div>
            <div class="col-md-6 col-xs-6 form-group no-padding">
                <label for="jml_kamar"><i class="fa fa-building"></i>&nbsp;&nbsp;Jumlah Kamar</label>
                <select  id="jml_kamar" name="jml_kamar" class="form-control">
                    <option value=""></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
            <div class="col-md-6 col-xs-6 form-group no-padding">
                <label for="jml_tamu"><i class="fa fa-user"></i>&nbsp;&nbsp;Jumlah Dewasa</label>
                <select id="jml_tamu" name="jml_tamu" class="form-control">
                    <option value=""></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
            </div>
        </div>
        <h3 style="text-align: center">Pesan Sekarang!</h3>
        <div class="col-md-12 col-xs-12 btn-group">
            <button type="button" id="admin1" class="btn btn-success fa fa-whatsapp" style="width: 50%">&nbsp;&nbsp;ADMIN 1</button>
            <button type="button" id="admin2" class="btn btn-success fa fa-whatsapp" style="width: 50%">&nbsp;&nbsp;ADMIN 2</button>
        </div>
    </form>
</div>
<?php $this->view('template/foot_only'); ?>
<script>
    $('#admin1').click(function () {
        var kota_tujuan = $("#hotel select[name=kota_tujuan]").val();
        var checkin = $("#hotel input[name=checkin]").val();
        var checkout = $("#hotel input[name=checkout]").val();
        var jml_kamar = $("#hotel select[name=jml_kamar]").val();
        var jml_tamu = $("#hotel select[name=jml_tamu]").val();
        var postData = {
            'kota_tujuan': kota_tujuan,
            'checkin': checkin,
            'checkout': checkout,
            'jml_kamar': jml_kamar,
            'jml_tamu': jml_tamu,
            'admin': 'admin_1'
        };

        $.ajax({
            type: "POST",
            url: "<?php echo base_url() ?>index.php/sip/insert_hotel",
            data: postData,
            success: function (msg) {

            }
        });
        if (kota_tujuan !== "" && checkin !== "" && checkout !== "" && jml_kamar !== "" && jml_tamu !== "") {
            var url = 'https://api.whatsapp.com/send?text=Hai%20Admin%20Azlina%2C%20saya%20ingin%20pesan%20kamar%20hotel%20untuk%20tanggal%20' + checkin + '%20sampai%20dengan%20' + checkout + '%20di%3A%0AKota%20%3A%20' + kota_tujuan + '%0AJumlah%20kamar%20%3A%20' + jml_kamar + '%0AJumlah%20tamu%20%3A%20' + jml_tamu + '%0ATerima%20kasih&phone=6285311446150';
            window.open(url, '_blank');
        }
    });

    $('#admin2').click(function () {
        var kota_tujuan = $("#hotel select[name=kota_tujuan]").val();
        var checkin = $("#hotel input[name=checkin]").val();
        var checkout = $("#hotel input[name=checkout]").val();
        var jml_kamar = $("#hotel select[name=jml_kamar]").val();
        var jml_tamu = $("#hotel select[name=jml_tamu]").val();
        var postData = {
            'kota_tujuan': kota_tujuan,
            'checkin': checkin,
            'checkout': checkout,
            'jml_kamar': jml_kamar,
            'jml_tamu': jml_tamu,
            'admin': 'admin_2'
        };

        $.ajax({
            type: "POST",
            url: "<?php echo base_url() ?>index.php/sip/insert_hotel",
            data: postData,
            success: function (msg) {

            }
        });
        if (kota_tujuan !== "" && checkin !== "" && checkout !== "" && jml_kamar !== "" && jml_tamu !== "") {
            var url = 'https://api.whatsapp.com/send?text=Hai%20Admin%20Azlina%2C%20saya%20ingin%20pesan%20kamar%20hotel%20untuk%20tanggal%20' + checkin + '%20sampai%20dengan%20' + checkout + '%20di%3A%0AKota%20%3A%20' + kota_tujuan + '%0AJumlah%20kamar%20%3A%20' + jml_kamar + '%0AJumlah%20tamu%20%3A%20' + jml_tamu + '%0ATerima%20kasih&phone=6285311446150';
            window.open(url, '_blank');
        }
    });
</script>