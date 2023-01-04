<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-md-10">
                    <h6 class="m-0 font-weight-bold text-primary">Daftar Surveilans Bulan <?= date('F Y') ?></h6>
                </div>
                <div class="col-md-2">
                    <a href="<?= base_url('exportpdf/exportLaporan') ?>" class="btn btn-sm btn-block btn-danger"><i class="fa-solid fa-file-pdf"></i> Export</a>
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
                            <th>Jenis Infeksi</th>
                            <th>Keterangan</th>
                            <th>Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($phlebitis as $p) :
                        ?>
                            <tr>
                                <td><?= $p['nama_pasien'] ?></td>
                                <td><?= $p['jenis_surveilans'] ?></td>
                                <td><?= $p['keterangan'] ?></td>
                                <td><?= date('d-m-Y', strtotime($p['tgl_pasang'])) ?></td>
                            </tr>
                        <?php endforeach; ?>
                        <?php
                        $no = 1;
                        foreach ($isk as $i) :
                        ?>
                            <tr>
                                <td><?= $i['nama_pasien'] ?></td>
                                <td><?= $i['jenis_surveilans'] ?></td>
                                <td><?= $i['keterangan'] ?></td>
                                <td><?= date('d-m-Y', strtotime($i['tgl_pemeriksaan'])) ?></td>
                            </tr>
                        <?php endforeach; ?>
                        <?php
                        $no = 1;
                        foreach ($scabies as $i) :
                        ?>
                            <tr>
                                <td><?= $i['nama_pasien'] ?></td>
                                <td><?= $i['jenis_surveilans'] ?></td>
                                <td><?= $i['keterangan'] ?></td>
                                <td><?= date('d-m-Y', strtotime($i['tgl_pemeriksaan'])) ?></td>
                            </tr>
                        <?php endforeach; ?>
                        <?php
                        $no = 1;
                        foreach ($dekubitus as $i) :
                        ?>
                            <tr>
                                <td><?= $i['nama_pasien'] ?></td>
                                <td><?= $i['jenis_surveilans'] ?></td>
                                <td><?= $i['keterangan'] ?></td>
                                <td><?= date('d-m-Y', strtotime($i['tgl_kejadian'])) ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->