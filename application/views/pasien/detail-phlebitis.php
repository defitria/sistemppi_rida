<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="card w-auto">
        <div class="card-body">
            <div class="row">
                <?php foreach ($phlebitis as $p) : ?>
                    <div class="col-6">
                        <h5 class="card-title" style="font-weight: bold;"><?= $p['nama_pasien'] ?></h5>
                        <p class="card-text">Jenis Surveilans: <?= $p['jenis_surveilans'] ?></p>
                        <p class="card-text">Jenis Pemasangan:
                            <?php if ($p['jenis_pemasangan'] == 1) {
                                echo 'Kateter V Perifer';
                            } elseif ($p['jenis_pemasangan'] == 2) {
                                echo 'Umbilikal';
                            } elseif ($p['jenis_pemasangan'] == 3) {
                                echo 'Double Lumen';
                            } ?>
                        </p>
                        <p class="card-text">Tujuan Pemasangan:
                            <?php if ($p['tujuan_pemasangan'] == 1) {
                                echo 'Pemberian Obat';
                            } elseif ($p['tujuan_pemasangan'] == 2) {
                                echo 'Transfusi';
                            } elseif ($p['tujuan_pemasangan'] == 3) {
                                echo 'Nutrisi Parenteral';
                            } elseif ($p['tujuan_pemasangan'] == 4) {
                                echo 'Terapi Cairan';
                            } ?>
                        </p>
                        <p class="card-text">Keterangan: <?= $p['keterangan'] ?></p>
                        <p class="card-text">Lokasi:
                            <?php if ($p['tujuan_pemasangan'] == 1) {
                                echo 'Tangan Kanan';
                            } elseif ($p['tujuan_pemasangan'] == 2) {
                                echo 'Tangan Kiri';
                            } elseif ($p['tujuan_pemasangan'] == 3) {
                                echo 'Kaki Kanan';
                            } elseif ($p['tujuan_pemasangan'] == 4) {
                                echo 'Kaki Kiri';
                            } ?>
                        </p>
                        <p class="card-text">Tanggal Pasang: <?= date('d F Y', strtotime($p['tgl_pasang'])) ?></p>
                    </div>
                    <div class="col-6">
                        <p class="card-text mt-5">Lakukan Kebersihan Tangan Sebelum dan Sesudah Pemasangan:
                            <?php if ($p['kebersihan_tangan'] == 'Y') {
                                echo 'Ya';
                            } elseif ($p['kebersihan_tangan'] == 'N') {
                                echo 'Tidak';
                            } ?>
                        </p>
                        <p class="card-text">Lakukan Pengecekan Balutan Pemasangan (Drayssing):
                            <?php if ($p['pengecekan_balutan'] == 'Y') {
                                echo 'Ya';
                            } elseif ($p['pengecekan_balutan'] == 'N') {
                                echo 'Tidak';
                            } ?>
                        </p>
                        <p class="card-text">Lakukan Pengecekan Tempat Pemasangan:
                            <?php if ($p['pengecekan_tmpt'] == 'Y') {
                                echo 'Ya';
                            } elseif ($p['pengecekan_tmpt'] == 'N') {
                                echo 'Tidak';
                            } ?>
                        </p>
                        <p class="card-text">Melepas Pemasangan Apabila Ada Keluhan/Peradangan:
                            <?php if ($p['lepas_pemasanganKeluhan'] == 'Y') {
                                echo 'Ya';
                            } elseif ($p['lepas_pemasanganKeluhan'] == 'N') {
                                echo 'Tidak';
                            } ?>
                        </p>
                        <p class="card-text">Melepas Pemasangan Apabila Lebih dari 72 Jam:
                            <?php if ($p['lepas_pemasanganJam'] == 'Y') {
                                echo 'Ya';
                            } elseif ($p['lepas_pemasanganJam'] == 'N') {
                                echo 'Tidak';
                            } ?>
                        </p>
                        <p class="card-text">Tanggal Lepas: <?= date('d F Y', strtotime($p['tgl_lepas'])) ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
</div>
<!-- End of Main Content -->