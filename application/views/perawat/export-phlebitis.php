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
    <h5 class="text-center mb-5">Laporan Surveilans Phlebitis <?= date('F Y') ?></h5>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Nama Pasien</th>
                    <th>Jenis Pemasangan</th>
                    <th>Tujuan Pemasangan</th>
                    <th>Lokasi</th>
                    <th>Keterangan</th>
                    <th>Tgl Pasang</th>
                    <th>Tgl Lepas</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ((array) $phlebitis as $p) :
                ?>
                    <tr>
                        <td><?= $p['nama_pasien'] ?></td>
                        <td>
                            <?php if ($p['jenis_pemasangan'] == 1) {
                                echo 'Kateter V Perifer';
                            } elseif ($p['jenis_pemasangan'] == 2) {
                                echo 'Umbilikal';
                            } elseif ($p['jenis_pemasangan'] == 3) {
                                echo 'Double Lumen';
                            } ?>
                        </td>
                        <td>
                            <?php if ($p['tujuan_pemasangan'] == 1) {
                                echo 'Pemberian Obat';
                            } elseif ($p['tujuan_pemasangan'] == 2) {
                                echo 'Transfusi';
                            } elseif ($p['tujuan_pemasangan'] == 3) {
                                echo 'Nutrisi Parenteral';
                            } elseif ($p['tujuan_pemasangan'] == 4) {
                                echo 'Terapi Cairan';
                            } ?>
                        </td>
                        <td>
                            <?php if ($p['lokasi'] == 1) {
                                echo 'Tangan Kanan';
                            } elseif ($p['lokasi'] == 2) {
                                echo 'Tangan Kiri';
                            } elseif ($p['lokasi'] == 3) {
                                echo 'Kaki Kanan';
                            } elseif ($p['lokasi'] == 4) {
                                echo 'Kaki Kiri';
                            } ?>
                        </td>
                        <td><?= $p['keterangan'] ?></td>
                        <td><?= date('d-m-Y', strtotime($p['tgl_pasang'])) ?></td>
                        <td><?= date('d-m-Y', strtotime($p['tgl_lepas'])) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>