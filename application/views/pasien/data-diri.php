<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="card w-auto">
        <div class="card-body">
            <?php foreach ($pasien as $p) : ?>
                <h5 class="card-title" style="font-weight: bold;"><?= $p['nama'] ?></h5>
                <p class="card-text">NIK: <?= $p['nik'] ?></p>
                <p class="card-text">No. Rekam Medis: <?= $p['no_rm'] ?></p>
                <p class="card-text">Tanggal Lahir: <?= date('d F Y', strtotime($p['tgl_lahir'])) ?></p>
                <p class="card-text">Jenis Kelamin: <?= $p['jenis_kelamin'] ?></p>
                <p class="card-text">Alamat: <?= $p['alamat'] ?></p>
            <?php endforeach; ?>
            <a href="<?= base_url('pasien') ?>" class="btn btn-sm btn-secondary"><i class="fa-solid fa-arrow-left"></i> Kembali</a>
        </div>
    </div>
</div>
</div>
<!-- End of Main Content -->