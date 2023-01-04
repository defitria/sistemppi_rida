<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-10">
                    <h6 class="m-0 font-weight-bold text-primary">Form Surveilans Dekubitus</h6>
                </div>
                <div class="col-2">
                    <a href="<?= base_url('perawat/dekubitus') ?>" class="btn btn-sm btn-secondary btn-block"> Kembali </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form method="POST" action="<?= base_url('perawat/addDekubitus') ?>">
                <div class="mb-3 row">
                    <div class="col-md-6">
                        <label class="form-label">Jenis Surveilans Infeksi</label>
                        <input type="text" class="form-control" id="jenis_surveilans" value="Dekubitus" name="jenis_surveilans" disabled>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Nama Pasien</label>
                        <select class="form-control js-select2" id="" name="nama_pasien" aria-label="Floating label select example">
                            <option selected>-- Pilih Pasien --</option>
                            <?php foreach ($dekubitus as $i) : ?>
                                <option value="<?= $i['nama'] ?>" required><?= $i['nama'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="form-label col-sm-2">Tanggal Kejadian: </label>
                    <div class="col-10">
                        <input type="date" class="form-control" name="tgl_kejadian" required>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col-md-3">
                            <label class="form-label" style="margin-right: 20px;">Kejadian:</label>
                        </div>
                        <div class="col-md-2">
                            <input class="" type="radio" name="kejadian" value="Di RS" required>
                            <label class="form-check-label">Di RS</label>
                        </div>
                        <div class="col-md-2">
                            <input class="" type="radio" name="kejadian" value="Di Rumah" required>
                            <label class="form-check-label">Di Rumah</label>
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="form-label col-sm-2">Diagnosa Medis: </label>
                    <div class="col-10">
                        <textarea class="form-control" name="keterangan" placeholder="Diangnosa Medis..."></textarea>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col-md-3">
                            <label class="form-label" style="margin-right: 20px;">Braden Score MRS:</label>
                        </div>
                        <div class="col-md-2">
                            <input class="" type="radio" name="braden_score" id="braden_score" value="12-14" required>
                            <label class="form-check-label">12-14</label>
                        </div>
                        <div class="col-md-2">
                            <input class="" type="radio" name="braden_score" id="braden_score" value="15-18" required>
                            <label class="form-check-label">15-18</label>
                        </div>
                        <div class="col-md-2">
                            <input class="" type="radio" name="braden_score" id="braden_score" value=">18" required>
                            <label class="form-check-label">>18</label>
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="form-label col-sm-2">Braden Score Ditemukan: </label>
                    <div class="col-10">
                        <input class="form-control" name="bradenscore_ditemukan" required>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col-md-3">
                            <label class="form-label" style="margin-right: 20px;">Area Luka Tekan:</label>
                            <br>
                            <input class="" type="radio" name="area_lukatekan" value="Sacrum" required>
                            <label class="form-check-label">Sacrum</label>
                            <br>
                            <input class="" type="radio" name="area_lukatekan" value="Heel Dextra" required>
                            <label class="form-check-label">Heel Dextra</label>
                            <br>
                            <input class="" type="radio" name="area_lukatekan" value="Heel Sinistra" required>
                            <label class="form-check-label">Heel Sinistra</label>
                        </div>
                        <div class="col-md-3">
                            <br>
                            <input class="" type="radio" name="area_lukatekan" value="Trochanter Mayor Dextra" required>
                            <label class="form-check-label">Trochanter Mayor Dextra</label>
                            <br>
                            <input class="" type="radio" name="area_lukatekan" value="Trochanter Mayor Sinistra" required>
                            <label class="form-check-label">Trochanter Mayor Sinistra</label>
                            <br>
                            <input class="" type="radio" name="area_lukatekan" value="Trochanter Minor Dextra" required>
                            <label class="form-check-label">Trochanter Minor Dextra</label>
                        </div>
                        <div class="col-md-3">
                            <br>
                            <input class="" type="radio" name="area_lukatekan" value="Trochanter Minor Sinistra" required>
                            <label class="form-check-label">Trochanter Minor Sinistra</label>
                            <br>
                            <input class="" type="radio" name="area_lukatekan" value="Occipitalis" required>
                            <label class="form-check-label">Occipitalis</label>
                            <br>
                            <input class="" type="radio" name="area_lukatekan" value="Telinga Dextra" required>
                            <label class="form-check-label">Telinga Dextra</label>
                        </div>
                        <div class="col-md-3">
                            <br>
                            <input class="" type="radio" name="area_lukatekan" value="Maleolus Dextra" required>
                            <label class="form-check-label">Maleolus Dextra</label>
                            <br>
                            <input class="" type="radio" name="area_lukatekan" value="Maleolus Sinistra" required>
                            <label class="form-check-label">Maleolus Sinistra</label>
                            <br>
                            <input class="" type="radio" name="area_lukatekan" value="Lain-lain" required>
                            <label class="form-check-label">Lain-lain</label>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col-md-3">
                            <label class="form-label" style="margin-right: 20px;">Stadium Luka Tekan:</label>
                            <br>
                            <input class="" type="radio" name="stadium" value="Stadium I" required>
                            <label class="form-check-label">Stadium I</label>
                            <br>
                            <input class="" type="radio" name="stadium" value="Stadium II" required>
                            <label class="form-check-label">Stadium II</label>
                        </div>
                        <div class="col-md-3">
                            <br>
                            <input class="" type="radio" name="stadium" value="Stadium III" required>
                            <label class="form-check-label">Stadium III</label>
                            <br>
                            <input class="" type="radio" name="stadium" value="Stadium IV" required>
                            <label class="form-check-label">Stadium IV</label>

                        </div>
                        <div class="col-md-3">
                            <br>
                            <input class="" type="radio" name="stadium" value="Unstageable" required>
                            <label class="form-check-label">Unstageable</label>
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <div class="col-md-3">
                        <label class="form-label">Albumin:</label>
                        <input type="text" class="form-control" id="albumin" name="albumin">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Hb:</label>
                        <input type="text" class="form-control" id="hb" name="hb">
                    </div>
                    <div class="col-md-2">
                        <label class="form-label">Suhu:</label>
                        <input type="text" class="form-control" id="suhu" name="suhu">
                    </div>
                    <div class="col-md-2">
                        <label class="form-label">Td:</label>
                        <input type="text" class="form-control" id="td" name="td">
                    </div>
                    <div class="col-md-2">
                        <label class="form-label">Lain-lain:</label>
                        <input type="text" class="form-control" id="lainnya" name="lainnya">
                    </div>
                </div>
                <div class="my-5 row">
                    <label class="form-label col-sm-2">Deskripsi Kejadian: </label>
                    <div class="col-10">
                        <textarea class="form-control" name="deskripsi_kejadian" placeholder="Deskripsi Kejadian..."></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-sm btn-primary">
                    Simpan
                </button>
                <a href="<?= base_url('perawat/isk') ?>" class="btn btn-sm btn-secondary"> Kembali </a>
            </form>
        </div>
    </div>
</div>