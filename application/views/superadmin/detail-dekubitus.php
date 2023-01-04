<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="card w-auto">
        <div class="card-body">
            <div class="row">
                <?php foreach ($dekubitus as $p) : ?>
                    <div class="col-6">
                        <h5 class="card-title" style="font-weight: bold;"><?= $p['nama_pasien'] ?></h5>
                        <p class="card-text">Jenis Surveilans: <?= $p['jenis_surveilans'] ?></p>
                        <p class="card-text">Tanggal Kejadian: <?= $p['tgl_kejadian'] ?></p>
                        <p class="card-text">Kejadian: <?= $p['kejadian'] ?></p>
                        <p class="card-text">Keterangan: <?= $p['keterangan'] ?></p>
                        <p class="card-text">Braden Score MRS: <?= $p['braden_score'] ?></p>
                        <p class="card-text">Braden Score saat ditemukan: <?= $p['bradenscore_ditemukan'] ?></p>
                    </div>
                    <div class="col-6">
                        <p class="card-text">Area Luka Tekan: <?= $p['area_lukatekan'] ?></p>
                        <p class="card-text">Stadium: <?= $p['stadium'] ?></p>
                        <p class="card-text">Albumin: <?= $p['albumin'] ?></p>
                        <p class="card-text">Hb: <?= $p['hb'] ?></p>
                        <p class="card-text">Suhu: <?= $p['suhu'] ?></p>
                        <p class="card-text">Td: <?= $p['td'] ?></p>
                        <p class="card-text">Lainnya: <?= $p['lainnya'] ?></p>
                        <p class="card-text">Deksripsi Kejadian: <?= $p['deskripsi_kejadian'] ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
</div>
<!-- End of Main Content -->