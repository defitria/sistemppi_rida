<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-md-10">
                    <h6 class="m-0 font-weight-bold text-primary">Daftar Surveilans ISK</h6>
                </div>
                <div class="col-md-2">
                    <a href="<?= base_url('superadmin') ?>" class="btn btn-sm btn-block btn-secondary"><i class="fa-solid fa-arrow-left"></i> Kembali</a>
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
                            <th>Jenis Pemasangan</th>
                            <th>Pemeriksaan</th>
                            <th>Tanggal Pemeriksaan</th>
                            <th>Ket</th>
                            <th>Tanggal Pasang</th>
                            <th><i class="fa-solid fa-wrench"></i></th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nama Pasien</th>
                            <th>Jenis Pemasangan</th>
                            <th>Pemeriksaan</th>
                            <th>Tanggal Pemeriksaan</th>
                            <th>Ket</th>
                            <th>Tanggal Pasang</th>
                            <th><i class="fa-solid fa-wrench"></i></th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ((array) $isk as $p) :
                        ?>
                            <tr>
                                <td><?= $p['nama_pasien'] ?></td>
                                <td>
                                    <?php if ($p['jenis_pemasangan'] == 1) {
                                        echo 'SPP';
                                    } elseif ($p['jenis_pemasangan'] == 2) {
                                        echo 'Dauer';
                                    } elseif ($p['jenis_pemasangan'] == 3) {
                                        echo 'Intermiten';
                                    } elseif ($p['jenis_pemasangan'] == 4) {
                                        echo 'Kondom';
                                    } ?>
                                </td>
                                <td>
                                    <?php if ($p['pemeriksaan'] == 1) {
                                        echo 'Urine';
                                    } elseif ($p['pemeriksaan'] == 2) {
                                        echo 'Bukan Urine';
                                    } ?>
                                </td>
                                <td><?= date('d-m-Y', strtotime($p['tgl_pemeriksaan'])) ?></td>
                                <td><?= $p['keterangan'] ?></td>
                                <td><?= date('d-m-Y', strtotime($p['tgl_pasang'])) ?></td>
                                <td>
                                    <a href="<?= base_url('superadmin/seeISK/' . $p['id']); ?>" class="btn btn-sm btn-info btn-circle"><i class="fa-solid fa-eye"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <a href="<?= base_url('superadmin') ?>" class="btn btn-sm btn-secondary mt-3"><i class="fa-solid fa-arrow-left"></i> Kembali</a>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->