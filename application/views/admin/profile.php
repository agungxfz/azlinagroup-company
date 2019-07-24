<style>
    input {
        border: 1px solid graytext;
    }
</style>
<div>
    <h1>Ubah Profile <b style="font-style: italic;"><?php echo $profile->long_name?></b></h1>
    <div class="divider"></div>
    <div class="col-md-12 col-xs-12">
        <div class="col-md-6 col-xs-6">
            <img alt="Profile Picture" src="<?php echo base_url() . 'assets/img/' . $profile->profile_pict ?>" width="320px">
        </div>
        <div class="col-md-6 col-xs-6">
            <form>
                <div class="form-group">
                    <label for="usr">Nama Lengkap</label>
                    <input type="text" class="form-control" id="username" value="<?php echo $profile->long_name?>">
                </div>
                <div class="form-group">
                    <label for="pwd">Password Baru</label>
                    <input type="password" class="form-control" id="password_new" placeholder="Masukkan Password Baru">
                </div>
                <div class="form-group">
                    <label for="pwd">Konfirmasi Password</label>
                    <input type="password" class="form-control" id="password_con" placeholder="Konfirmasi Password Baru">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-default" id="btn_change">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>