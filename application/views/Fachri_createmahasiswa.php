<div class="container">
    <div class="row" mt-3>
        <div class="col-md-8">

            <div class="card">
                <div class="card-header">
                    Form Tambah Data Mahasiswa
                </div>
                <div class="card-body">

                    <form action="<?= base_url();?>Fachri_home/Fachri_createmahasiswa" method="post">
                        <div class="form-group">
                            <label for="nip">NIP</label>
                            <input type="text" class="form-control" id="nip" name="nip" value="<?= set_value('nip'); ?>"
                                placeholder="Masukan NIP">
                            <small class="form-text text-danger"><?= form_error('nip');?></small>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama" name="nama"
                                value="<?= set_value('nama'); ?>" placeholder="Masukan Nama Lengkap">
                            <small class="form-text text-danger"><?= form_error('nama');?></small>
                        </div>
                        <div class="mt-3">
                            <label>
                                Jenis Kelamin <br>
                                <input type="radio" value="L" class="option-input radio" name="jeniskelamin" />
                                Laki laki
                            </label>
                            <label>
                                <input type="radio" value="P" class="option-input radio" name="jeniskelamin" />
                                Perempuan
                            </label>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat"
                                value="<?= set_value('alamat'); ?>" placeholder="Masukan Alamat">
                            <small class="form-text text-danger"><?= form_error('alamat');?></small>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password"
                                value="<?= set_value('password'); ?>" placeholder="Masukan Password">
                            <small class="form-text text-danger"><?= form_error('password');?></small>
                        </div>
                        <div class="form-group">
                            <label for="password">Konfirmasi Password</label>
                            <input type="password" class="form-control" id="password2" name="password2"
                                value="<?= set_value('password2'); ?>" placeholder="Masukan Password">
                            <small class="form-text text-danger"><?= form_error('password2');?></small>
                        </div>

                        <div class="form-group">
                            <label for="nomorktp">Nomor KTP</label>
                            <input type="text" class="form-control" id="ktp" name="ktp" value="<?= set_value('ktp'); ?>"
                                placeholder="Masukan Nomor KTP">
                            <small class="form-text text-danger"><?= form_error('ktp');?></small>
                        </div>

                        <button type="submit" name="tambah" class="btn btn-primary mb-3">Submit</button>
                    </form>
                </div>
            </div>



        </div>
    </div>
</div>