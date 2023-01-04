<!-- Begin Page Content -->
<div class="container-fluid">
    <h3 style="font-weight: bold;" class="text-center" style="text-transform: uppercase;"> Riwayat medis <?= $this->session->userdata('name') ?> </h3>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
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
                            <th><i class="fa-solid fa-wrench"></i></th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nama Pasien</th>
                            <th>Jenis Infeksi</th>
                            <th>Keterangan</th>
                            <th>Tanggal</th>
                            <th><i class="fa-solid fa-wrench"></i></th>
                        </tr>
                    </tfoot>
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
                                <td>
                                    <a href="<?= base_url('perawat/seePhlebitis/' . $p['id']); ?>" class="btn btn-sm btn-info btn-circle"><i class="fa-solid fa-eye"></i></a>
                                </td>
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
                                <td>
                                    <a href="<?= base_url('perawat/seeISK/' . $i['id']); ?>" class="btn btn-sm btn-info btn-circle"><i class="fa-solid fa-eye"></i></a>
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