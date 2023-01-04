<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laporan Surveilans Phlebitis</title>

    <!-- Custom fonts for this template-->
    <script src="https://kit.fontawesome.com/627639697e.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body style="font-size: 12px;">
    <div class="row">
        <div class="col-4">
            <img src="<?= base_url('') ?>assets/img/logo-rs.png" style="width: 100px;" alt="">
        </div>
    </div>
    <h5 class="text-center mb-5">Laporan Surveilans Bulan <?= date('F Y') ?></h5>
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Nama Pasien</th>
                    <th>Jenis Infeksi</th>
                    <th>Jenis Pemasangan</th>
                    <th>Diagnosis</th>
                    <th>Penatalaksanaan</th>
                    <th>Area Luka Tekan</th>
                    <th>Stadium</th>
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
                        <td><?php if ($p['jenis_pemasangan'] == 1) {
                                echo 'Kateter V Perifer';
                            } elseif ($p['jenis_pemasangan'] == 2) {
                                echo 'Umbilikal';
                            } elseif ($p['jenis_pemasangan'] == 3) {
                                echo 'Double Lumen';
                            } ?></td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
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
                        <td><?php if ($p['jenis_pemasangan'] == 1) {
                                echo 'SPP';
                            } elseif ($p['jenis_pemasangan'] == 2) {
                                echo 'Dauer';
                            } elseif ($p['jenis_pemasangan'] == 3) {
                                echo 'Intermiten';
                            } elseif ($p['jenis_pemasangan'] == 4) {
                                echo 'Kondom';
                            } ?></td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
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
                        <td>-</td>
                        <td><?= $i['diagnosis'] ?></td>
                        <td><?= $i['penatalaksanaan'] ?></td>
                        <td>-</td>
                        <td>-</td>
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
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td><?= $i['area_lukatekan'] ?></td>
                        <td><?= $i['stadium'] ?></td>
                        <td><?= $i['keterangan'] ?></td>
                        <td><?= date('d-m-Y', strtotime($i['tgl_kejadian'])) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <!-- /.container-fluid -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>