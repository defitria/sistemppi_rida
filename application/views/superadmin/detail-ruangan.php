<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-md-10 mb-3">
                    <h6 class="m-0 font-weight-bold text-primary">Daftar Pasien Pada Ruangan <?= $this->uri->segment('3'); ?></h6>
                </div>
                <div class="col-md-2">
                    <a href="<?= base_url('superadmin') ?>" class="btn btn-sm btn-secondary btn-block"><i class="fa-solid fa-arrow-left"></i> Kembali </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>No. RM</th>
                            <th>NIK</th>
                            <th>Jenis Kelamin</th>
                            <th>Tgl Lahir</th>
                            <th>Alamat</th>
                            <th>Jenis Asuransi</th>
                            <th>DPJP</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nama</th>
                            <th>No. RM</th>
                            <th>NIK</th>
                            <th>Jenis Kelamin</th>
                            <th>Tgl Lahir</th>
                            <th>Alamat</th>
                            <th>Jenis Asuransi</th>
                            <th>DPJP</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ((array) $pasien as $p) :
                        ?>
                            <tr>
                                <td><?= $p['nama'] ?></td>
                                <td><?= $p['no_rm'] ?></td>
                                <td><?= $p['nik'] ?></td>
                                <td><?= $p['jenis_kelamin'] ?></td>
                                <td><?= date('d-m-Y', strtotime($p['tgl_lahir'])) ?></td>
                                <td><?= $p['alamat'] ?></td>
                                <td><?= $p['jenis_asuransi'] ?></td>
                                <td><?= $p['dpjp'] ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <div class="row mt-3 mb-3 ">
                    <div class="col-md-10">

                    </div>
                    <div class="col-md-2">
                        <a href="<?= base_url('superadmin') ?>" class="btn btn-sm btn-secondary btn-block"><i class="fa-solid fa-arrow-left"></i> Kembali </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->