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
    <h5 class="text-center mb-5">Laporan Surveilans Scabies <?= date('F Y') ?></h5>
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Nama Pasien</th>
                    <th>Diagnosis</th>
                    <th>Penatalaksanaan</th>
                    <th>Keterangan</th>
                    <th>Tgl Pemeriksaan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ((array) $scabies as $p) :
                ?>
                    <tr>
                        <td><?= $p['nama_pasien'] ?></td>
                        <td><?= $p['diagnosis'] ?></td>
                        <td><?= $p['penatalaksanaan'] ?></td>
                        <td><?= $p['keterangan'] ?></td>
                        <td><?= date('d-m-Y', strtotime($p['tgl_pemeriksaan'])) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>