<a href="<?= base_url() ?>" class="btn btn-warning mt-5">
    <<<-- Kembali </a> &nbsp;
        <a href="<?= base_url('Fachri_Home/Fachri_createmahasiswa')?>" class=" btn btn-primary mt-5">Masukan Data
            Baru</a>
        <br />
        <div id="container" class="mt-5">
            <?php if($this->session->flashdata('flash')): ?>
            <div class="row mt-3">
                <div class="col-md-6">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        Data Mahasiswa <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
            <?php endif ; ?>

            <h1>Database Mahasiswa</h1>

            <table id="manageTable" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>NIP</th>
                        <th>Nama Lengkap</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>Password</td>
                        <th>Nomor KTP</td>
                        <th>Action</td>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1;
                     foreach ($hasil as $key => $mhs): ?>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td><?php echo $mhs['NIP']; ?></td>
                        <td><?php echo $mhs['NamaLengkap']; ?></td>
                        <td><?php echo $mhs['JenisKelamin']; ?></td>
                        <td><?php echo $mhs['Alamat']; ?></td>
                        <td><?php echo $mhs['Password']; ?></td>
                        <td><?php echo $mhs['NomorKtp']; ?></td>

                        <td>
                            <a href="<?= base_url();?>Fachri_home/Fachri_editmahasiswa/<?= $mhs['id'];?>"
                                class="badge badge-primary badge-sm float-left">edit </a>
                            <a href="<?= base_url();?>Fachri_home/Fachri_hapus/<?= $mhs['id'];?>"
                                class="badge badge-danger badge-sm float-left"
                                onclick="return confirm('anda yakin?');">delete</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>