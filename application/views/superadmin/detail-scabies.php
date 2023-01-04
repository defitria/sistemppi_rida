<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="card w-auto">
        <div class="card-body">
            <div class="row">
                <?php foreach ($scabies as $p) : ?>
                    <div class="col-6">
                        <h5 class="card-title" style="font-weight: bold;"><?= $p['nama_pasien'] ?></h5>
                        <p class="card-text">Jenis Surveilans: <?= $p['jenis_surveilans'] ?></p>
                        <p class="card-text">Diagnosis: <?= $p['diagnosis'] ?></p>
                        <p class="card-text">Penatalaksanaan: <?= $p['penatalaksanaan'] ?></p>
                        <p class="card-text">Keterangan: <?= $p['keterangan'] ?></p>
                        <p class="card-text">Tanggal Pemeriksaan: <?= date('d F Y', strtotime($p['tgl_pemeriksaan'])) ?></p>
                        <p class="card-text">Hand Hygiene: <?= $p['hand_hygiene'] ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
</div>
<!-- End of Main Content -->