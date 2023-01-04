<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-md-10">
                    <h6 class="m-0 font-weight-bold text-primary">Daftar Data Pasien</h6>
                </div>
                <div class="col-md-2">
                    <a href="<?= base_url('superadmin/formPasien') ?>" class="btn btn-sm btn-primary"><i class="fa-solid fa-plus"></i> Data Pasien</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <?= $this->session->flashdata('message'); ?>
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
                            <th>Ruang Rawat Inap</th>
                            <th><i class="fa-solid fa-wrench"></i></th>
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
                            <th>Ruang Rawat Inap</th>
                            <th><i class="fa-solid fa-wrench"></i></th>
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
                                <td><?= $p['ruang_rawatinap'] ?></td>
                                <td>
                                    <a href="<?= base_url('superadmin/editPasien/' . $p['id']); ?>" class="btn btn-sm btn-warning btn-circle"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a href="<?= base_url('superadmin/deletePasien/' . $p['id']); ?>" class="btn btn-sm btn-danger btn-circle mt-3"><i class="fa-solid fa-trash-can"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->