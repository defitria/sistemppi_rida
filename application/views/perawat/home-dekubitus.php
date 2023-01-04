<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-md-10">
                    <h6 class="m-0 font-weight-bold text-primary">Daftar Surveilans Dekubitus</h6>
                </div>
                <div class="col-md-2">
                    <a href="<?= base_url('perawat') ?>" class="btn btn-sm btn-block btn-secondary"><i class="fa-solid fa-arrow-left"></i> Kembali</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <?= $this->session->flashdata('message'); ?>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama Pasien</th>
                            <th>Tanggal Kejadian</th>
                            <th>Kejadian</th>
                            <th>Braden Score MRS</th>
                            <th>Area Luka Tekan</th>
                            <th>Stadium</th>
                            <th><i class="fa-solid fa-wrench"></i></th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nama Pasien</th>
                            <th>Tanggal Kejadian</th>
                            <th>Kejadian</th>
                            <th>Braden Score MRS</th>
                            <th>Area Luka Tekan</th>
                            <th>Stadium</th>
                            <th><i class="fa-solid fa-wrench"></i></th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ((array) $dekubitus as $p) :
                        ?>
                            <tr>
                                <td><?= $p['nama_pasien'] ?></td>
                                <td><?= date('d-m-Y', strtotime($p['tgl_kejadian'])) ?></td>
                                <td><?= $p['kejadian'] ?></td>
                                <td><?= $p['braden_score'] ?></td>
                                <td><?= $p['area_lukatekan'] ?></td>
                                <td><?= $p['stadium'] ?></td>
                                <td>
                                    <a href="<?= base_url('perawat/seeDekubitus/' . $p['id']); ?>" class="btn btn-sm btn-info btn-circle"><i class="fa-solid fa-eye"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <a href="<?= base_url('perawat') ?>" class="btn btn-sm btn-secondary mt-3"><i class="fa-solid fa-arrow-left"></i> Kembali</a>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->