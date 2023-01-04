<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="card w-auto">
        <div class="card-body">
            <div class="row">
                <?php foreach ($isk as $p) : ?>
                    <div class="col-6">
                        <h5 class="card-title" style="font-weight: bold;"><?= $p['nama_pasien'] ?></h5>
                        <p class="card-text">Jenis Surveilans: <?= $p['jenis_surveilans'] ?></p>
                        <p class="card-text">Jenis Pemasangan:
                            <?php if ($p['jenis_pemasangan'] == 1) {
                                echo 'SPP';
                            } elseif ($p['jenis_pemasangan'] == 2) {
                                echo 'Dauer';
                            } elseif ($p['jenis_pemasangan'] == 3) {
                                echo 'Intermiten';
                            } elseif ($p['jenis_pemasangan'] == 4) {
                                echo 'Kondom';
                            } ?>
                        </p>
                        <p class="card-text">Tujuan Pemasangan:
                            <?php if ($p['pemeriksaan'] == 1) {
                                echo 'Urine';
                            } elseif ($p['pemeriksaan'] == 2) {
                                echo 'Bukan Urine';
                            } ?>
                        </p>
                        <p class="card-text">Tanggal Pemeriksaan: <?= date('d F Y', strtotime($p['tgl_pemeriksaan'])) ?></p>
                        <p class="card-text">Keterangan: <?= $p['keterangan'] ?></p>
                        <p class="card-text">Tanggal Pasang: <?= date('d F Y', strtotime($p['tgl_pasang'])) ?></p>
                    </div>
                    <div class="col-6">
                        <p class="card-text">Pemasangan DC Sesuai Indikasi:
                            <?php if ($p['pemasangan_dc'] == 1) {
                                echo 'Ya';
                            } elseif ($p['pemasangan_dc'] == 2) {
                                echo 'Tidak';
                            } ?>
                        </p>
                        <p class="card-text">Melakukan Hand Hygiene:
                            <?php if ($p['hand_hygiene'] == 'Y') {
                                echo 'Ya';
                            } elseif ($p['hand_hygiene'] == 'N') {
                                echo 'Tidak';
                            } ?>
                        </p>
                        <p class="card-text">Fiksasi Kateter dengan Plester:
                            <?php if ($p['fiksasi_kateter'] == 'Y') {
                                echo 'Ya';
                            } elseif ($p['fiksasi_kateter'] == 'N') {
                                echo 'Tidak';
                            } ?>
                        </p>
                        <p class="card-text">ADP Tepat:
                            <?php if ($p['adp_tepat'] == 'Y') {
                                echo 'Ya';
                            } elseif ($p['adp_tepat'] == 'N') {
                                echo 'Tidak';
                            } ?>
                        </p>
                        <p class="card-text">Pemasangan Menggunakan Alat Steril:
                            <?php if ($p['pemasangan_alatsteril'] == 'Y') {
                                echo 'Ya';
                            } elseif ($p['pemasangan_alatsteril'] == 'N') {
                                echo 'Tidak';
                            } ?>
                        </p>
                        <p class="card-text">Segera Dilepas Jika Tidak Indikasi:
                            <?php if ($p['segera_dilepas'] == 'Y') {
                                echo 'Ya';
                            } elseif ($p['segera_dilepas'] == 'N') {
                                echo 'Tidak';
                            } ?>
                        </p>
                        <p class="card-text">Pengisian Balon Sesuai Indikasi (30mL):
                            <?php if ($p['pengisian_balon'] == 'Y') {
                                echo 'Ya';
                            } elseif ($p['pengisian_balon'] == 'N') {
                                echo 'Tidak';
                            } ?>
                        </p>
                        <p class="card-text">Urine Bag Menggantung:
                            <?php if ($p['urine_bag'] == 'Y') {
                                echo 'Ya';
                            } elseif ($p['urine_bag'] == 'N') {
                                echo 'Tidak';
                            } ?>
                        </p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
</div>
<!-- End of Main Content -->