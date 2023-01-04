<!-- Begin Page Content -->
<div class="container-fluid">


    <h2 style="font-weight: bold;" class="text-center"> DASHBOARD KEJADIAN INFEKSI </h2>
    <h4 style="font-weight: bold;" class="text-center"> Bulan <?= date('F Y') ?> </h4>
    <?= $this->session->flashdata('message'); ?>
    <div class="row">
        <div class="col-6">
            <!-- ROW PERTAMA -->
            <h5 style="font-weight: bold;" class="text-center"> Ruang Rawat Inap </h5>
            <div class="row mt-3">
                <div class="col-md-4">
                    <div class="card w-auto">
                        <div class="card-body text-center">
                            <?php
                            if (empty($anyelir->result_array()) == FALSE) {
                                foreach ($anyelir->result_array() as $an) :
                                    $ruangan = $an['ruang_rawatinap'];
                                    $total = $an['jml_pasien'];
                            ?>
                                    <h5 class="card-title" style="font-weight: bold;"><?= $ruangan; ?></h5>
                                    <p class="card-text"><?= $total; ?> Pasien </p>
                                    <a href="<?= base_url('superadmin/seeRuangan/' . $an['ruang_rawatinap']); ?>" class="btn btn-sm btn-primary btn-block">Detail</a>
                                <?php
                                endforeach;
                            } else {
                                ?>
                                <h5 class="card-title" style="font-weight: bold;">Anyelir</h5>
                                <p class="card-text">0 Pasien</p>
                                <button class="btn btn-sm btn-primary btn-block" disabled>Detail</button>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card w-auto">
                        <div class="card-body text-center">
                            <?php
                            if (empty($ICU->result_array()) == FALSE) {
                                foreach ($ICU->result_array() as $an) :
                                    $ruangan = $an['ruang_rawatinap'];
                                    $total = $an['jml_pasien'];
                            ?>
                                    <h5 class="card-title" style="font-weight: bold;"><?= $ruangan; ?></h5>
                                    <p class="card-text"><?= $total; ?> Pasien </p>
                                    <a href="<?= base_url('superadmin/seeRuangan/' . $an['ruang_rawatinap']); ?>" class="btn btn-sm btn-primary btn-block">Detail</a>
                                <?php
                                endforeach;
                            } else {
                                ?>
                                <h5 class="card-title" style="font-weight: bold;">ICU</h5>
                                <p class="card-text">0 Pasien</p>
                                <button class="btn btn-sm btn-primary btn-block" disabled>Detail</button>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card w-auto">
                        <div class="card-body text-center">
                            <?php
                            if (empty($alamanda->result_array()) == FALSE) {
                                foreach ($alamanda->result_array() as $an) :
                                    $ruangan = $an['ruang_rawatinap'];
                                    $total = $an['jml_pasien'];
                            ?>
                                    <h5 class="card-title" style="font-weight: bold;"><?= $ruangan; ?></h5>
                                    <p class="card-text"><?= $total; ?> Pasien </p>
                                    <a href="<?= base_url('superadmin/seeRuangan/' . $an['ruang_rawatinap']); ?>" class="btn btn-sm btn-primary btn-block">Detail</a>
                                <?php
                                endforeach;
                            } else {
                                ?>
                                <h5 class="card-title" style="font-weight: bold;">Alamanda</h5>
                                <p class="card-text">0 Pasien</p>
                                <button class="btn btn-sm btn-primary btn-block" disabled>Detail</button>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END OF ROW PERTAMA -->

            <!-- ROW KEDUA -->
            <div class="row">
                <div class="col-md-4">
                    <div class="card w-auto mt-3">
                        <div class="card-body text-center">
                            <?php
                            if (empty($dahlia->result_array()) == FALSE) {
                                foreach ($dahlia->result_array() as $an) :
                                    $ruangan = $an['ruang_rawatinap'];
                                    $total = $an['jml_pasien'];
                            ?>
                                    <h5 class="card-title" style="font-weight: bold;"><?= $ruangan; ?></h5>
                                    <p class="card-text"><?= $total; ?> Pasien </p>
                                    <a href="<?= base_url('superadmin/seeRuangan/' . $an['ruang_rawatinap']); ?>" class="btn btn-sm btn-primary btn-block">Detail</a>
                                <?php
                                endforeach;
                            } else {
                                ?>
                                <h5 class="card-title" style="font-weight: bold;">Dahlia</h5>
                                <p class="card-text">0 Pasien</p>
                                <button class="btn btn-sm btn-primary btn-block" disabled>Detail</button>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card w-auto mt-3">
                        <div class="card-body text-center">
                            <?php
                            if (empty($catleya->result_array()) == FALSE) {
                                foreach ($catleya->result_array() as $an) :
                                    $ruangan = $an['ruang_rawatinap'];
                                    $total = $an['jml_pasien'];
                            ?>
                                    <h5 class="card-title" style="font-weight: bold;"><?= $ruangan; ?></h5>
                                    <p class="card-text"><?= $total; ?> Pasien </p>
                                    <a href="<?= base_url('superadmin/seeRuangan/' . $an['ruang_rawatinap']); ?>" class="btn btn-sm btn-primary btn-block">Detail</a>
                                <?php
                                endforeach;
                            } else {
                                ?>
                                <h5 class="card-title" style="font-weight: bold;">Catleya</h5>
                                <p class="card-text">0 Pasien</p>
                                <button class="btn btn-sm btn-primary btn-block" disabled>Detail</button>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card w-auto mt-3">
                        <div class="card-body text-center">
                            <?php
                            if (empty($flamboyan->result_array()) == FALSE) {
                                foreach ($flamboyan->result_array() as $an) :
                                    $ruangan = $an['jenis_surveilans'];
                                    $total = $an['jml_surveilans'];
                            ?>
                                    <h5 class="card-title" style="font-weight: bold;"><?= $ruangan; ?></h5>
                                    <p class="card-text"><?= $total; ?> Pasien </p>
                                    <a href="<?= base_url('superadmin/seeRuangan/' . $an['ruang_rawatinap']); ?>" class="btn btn-sm btn-primary btn-block">Detail</a>
                                <?php
                                endforeach;
                            } else {
                                ?>
                                <h5 class="card-title" style="font-weight: bold;">Flamboyan</h5>
                                <p class="card-text">0 Pasien</p>
                                <button class="btn btn-sm btn-primary btn-block" disabled>Detail</button>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END OF ROW KEDUA -->

            <!-- ROW KETIGA -->
            <div class="row">
                <div class="col-md-4">
                    <div class="card w-auto mt-3 mb-3">
                        <div class="card-body text-center">
                            <?php
                            if (empty($anggrek->result_array()) == FALSE) {
                                foreach ($anggrek->result_array() as $an) :
                                    $ruangan = $an['ruang_rawatinap'];
                                    $total = $an['jml_pasien'];
                            ?>
                                    <h5 class="card-title" style="font-weight: bold;"><?= $ruangan; ?></h5>
                                    <p class="card-text"><?= $total; ?> Pasien </p>
                                    <a href="<?= base_url('superadmin/seeRuangan/' . $an['ruang_rawatinap']); ?>" class="btn btn-sm btn-primary btn-block">Detail</a>
                                <?php
                                endforeach;
                            } else {
                                ?>
                                <h5 class="card-title" style="font-weight: bold;">Anggrek</h5>
                                <p class="card-text">0 Pasien</p>
                                <button class="btn btn-sm btn-primary btn-block" disabled>Detail</button>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card w-auto mt-3 mb-3">
                        <div class="card-body text-center">
                            <?php
                            if (empty($tulip->result_array()) == FALSE) {
                                foreach ($tulip->result_array() as $an) :
                                    $ruangan = $an['ruang_rawatinap'];
                                    $total = $an['jml_pasien'];
                            ?>
                                    <h5 class="card-title" style="font-weight: bold;"><?= $ruangan; ?></h5>
                                    <p class="card-text"><?= $total; ?> Pasien </p>
                                    <a href="<?= base_url('superadmin/seeRuangan/' . $an['ruang_rawatinap']); ?>" class="btn btn-sm btn-primary btn-block">Detail</a>
                                <?php
                                endforeach;
                            } else {
                                ?>
                                <h5 class="card-title" style="font-weight: bold;">Tulip</h5>
                                <p class="card-text">0 Pasien</p>
                                <button class="btn btn-sm btn-primary btn-block" disabled>Detail</button>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card w-auto mt-3 mb-3">
                        <div class="card-body text-center">
                            <?php
                            if (empty($kemuning->result_array()) == FALSE) {
                                foreach ($kemuning->result_array() as $an) :
                                    $ruangan = $an['ruang_rawatinap'];
                                    $total = $an['jml_pasien'];
                            ?>
                                    <h5 class="card-title" style="font-weight: bold;"><?= $ruangan; ?></h5>
                                    <p class="card-text"><?= $total; ?> Pasien </p>
                                    <a href="<?= base_url('superadmin/seeRuangan/' . $an['ruang_rawatinap']); ?>" class="btn btn-sm btn-primary btn-block">Detail</a>
                                <?php
                                endforeach;
                            } else {
                                ?>
                                <h5 class="card-title" style="font-weight: bold;">Kemuning</h5>
                                <p class="card-text">0 Pasien</p>
                                <button class="btn btn-sm btn-primary btn-block" disabled>Detail</button>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END OF ROW KETIGA -->
        </div>
        <div class="col-6">
            <h5 style="font-weight: bold;" class="text-center"> Jenis Infeksi </h5>
            <div class="row mt-3">
                <div class="col-md-4">
                    <div class="card w-auto">
                        <div class="card-body text-center">
                            <?php
                            foreach ($phlebitis as $ph) :
                                if ($ph['jenis_surveilans'] != NULL) {
                            ?>

                                    <h5 class="card-title" style="font-weight: bold;"><?= $ph['jenis_surveilans']; ?></h5>
                                    <p class="card-text"><?= $ph['jml_surveilans']; ?> Pasien </p>
                                    <a href="<?= base_url('superadmin/detailPhlebitis/' . $ph['jenis_surveilans']); ?>" class="btn btn-sm btn-primary btn-block">Detail</a>
                                <?php
                                } else {
                                ?>
                                    <h5 class="card-title" style="font-weight: bold;">Phlebitis</h5>
                                    <p class="card-text">0 Pasien</p>
                                    <button class="btn btn-sm btn-primary btn-block" disabled>Detail</button>
                            <?php
                                }
                            endforeach;
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card w-auto">
                        <div class="card-body text-center">
                            <?php
                            foreach ($scabies as $sc) :
                                if ($sc['jenis_surveilans'] != NULL) {
                            ?>
                                    <h5 class="card-title" style="font-weight: bold;"><?= $sc['jenis_surveilans']; ?></h5>
                                    <p class="card-text"><?= $sc['jml_surveilans']; ?> Pasien </p>
                                    <a href="<?= base_url('superadmin/detailScabies/' . $sc['jenis_surveilans']); ?>" class="btn btn-sm btn-primary btn-block">Detail</a>
                                <?php
                                } else {
                                ?>
                                    <h5 class="card-title" style="font-weight: bold;"> Scabies </h5>
                                    <p class="card-text">0 Pasien</p>
                                    <button class="btn btn-sm btn-primary btn-block" disabled>Detail</button>
                            <?php
                                }
                            endforeach;
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card w-auto">
                        <div class="card-body text-center">
                            <?php
                            foreach ($isk as $i) :
                                if ($i['jenis_surveilans'] != NULL) {
                            ?>

                                    <h5 class="card-title" style="font-weight: bold;"><?= $i['jenis_surveilans']; ?></h5>
                                    <p class="card-text"><?= $i['jml_surveilans']; ?> Pasien </p>
                                    <a href="<?= base_url('superadmin/detailISK/' . $i['jenis_surveilans']); ?>" class="btn btn-sm btn-primary btn-block">Detail</a>
                                <?php
                                } else {
                                ?>
                                    <h5 class="card-title" style="font-weight: bold;">ISK</h5>
                                    <p class="card-text">0 Pasien</p>
                                    <button class="btn btn-sm btn-primary btn-block" disabled>Detail</button>
                            <?php
                                }
                            endforeach;
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-3">
                    <div class="card w-auto">
                        <div class="card-body text-center">
                            <?php
                            foreach ($dekubitus as $d) :
                                if ($d['jenis_surveilans'] != NULL) {
                            ?>

                                    <h5 class="card-title" style="font-weight: bold;"><?= $d['jenis_surveilans']; ?></h5>
                                    <p class="card-text"><?= $d['jml_surveilans']; ?> Pasien </p>
                                    <a href="<?= base_url('superadmin/detailDekubitus/' . $d['jenis_surveilans']); ?>" class="btn btn-sm btn-primary btn-block">Detail</a>
                                <?php
                                } else {
                                ?>
                                    <h5 class="card-title" style="font-weight: bold;">ISK</h5>
                                    <p class="card-text">0 Pasien</p>
                                    <button class="btn btn-sm btn-primary btn-block" disabled>Detail</button>
                            <?php
                                }
                            endforeach;
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-3">
                    <div class="card w-auto">
                        <div class="card-body text-center">
                            <?php
                            foreach ($phlebitis as $ph) :
                                foreach ($scabies as $s) :
                                    foreach ($isk as $i) :
                                        foreach ($dekubitus as $d) :
                                            $jmlPasien = $ph['jml_surveilans'] + $s['jml_surveilans'] + $i['jml_surveilans'] + $d['jml_surveilans'];
                                        endforeach;
                                    endforeach;
                                endforeach;
                            endforeach;
                            ?>
                            <h6 style="font-weight: bold;"> Jumlah pasien bulan <?= date('F') ?> : <?= $jmlPasien ?> Pasien</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->