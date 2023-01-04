<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-10">
                    <h6 class="m-0 font-weight-bold text-primary">Form Surveilans Scabies</h6>
                </div>
                <div class="col-2">
                    <a href="<?= base_url('perawat/scabies') ?>" class="btn btn-sm btn-secondary btn-block"> Kembali </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form method="POST" action="<?= base_url('perawat/addScabies') ?>">
                <div class="mb-3">
                    <div class="row">
                        <div class="col-md-6">
                            <label class="form-label">Jenis Surveilans Infeksi</label>
                            <input type="text" class="form-control" id="jenis_surveilans" value="Scabies" name="jenis_surveilans" disabled>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Nama Pasien</label>
                            <select class="form-control js-select2" id="" name="nama_pasien" aria-label="Floating label select example">
                                <option selected>-- Pilih Pasien --</option>
                                <?php foreach ($pasien as $p) : ?>
                                    <option value="<?= $p['nama'] ?>" required><?= $p['nama'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col-md-1">
                            <label class="form-label" style="margin-right: 20px;">Diagnosis:</label>
                        </div>
                        <div class="col-md-2">
                            <input class="" type="radio" name="diagnosis" id="diagnosis" value="Dermatitis Atopik" required>
                            <label class="form-check-label" for="diagnosis">Dermatitis Atopik</label>
                        </div>
                        <div class="col-md-2">
                            <input class="" type="radio" name="diagnosis" id="diagnosis" value="Dermatitis Kontak" required>
                            <label class="form-check-label" for="diagnosis">Dermatitis Kontak
                            </label>
                        </div>
                        <div class="col-md-2">
                            <input class="" type="radio" name="diagnosis" id="diagnosis" value="Insect Bite" required>
                            <label class="form-check-label" for="diagnosis">Insect Bite
                            </label>
                        </div>
                        <div class="col-md-2">
                            <input class="" type="radio" name="diagnosis" id="diagnosis" value="Dishidrosis" required>
                            <label class="form-check-label" for="diagnosis">Dishidrosis</label>
                        </div>
                        <div class="col-md-2">
                            <input class="" type="radio" name="diagnosis" id="diagnosis" value="Pioderma" required>
                            <label class="form-check-label" for="diagnosis">Pioderma</label>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col-md-3">
                            <label class="form-label" style="margin-right: 20px;">Penatalaksanaan:</label>
                        </div>
                        <div class="col-md-3">
                            <input class="" type="radio" name="penatalaksanaan" value="Non Medikamentosa" required>
                            <label class="form-check-label">Non Medikamentosa</label>
                        </div>
                        <div class="col-md-3">
                            <input class="" type="radio" name="penatalaksanaan" value="Medikamentosa" required>
                            <label class="form-check-label">Medikamentosa</label>
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="form-label col-sm-2">Keterangan: </label>
                    <div class="col-10">
                        <textarea class="form-control" name="keterangan" placeholder="Rincian Penatalaksanaan ..."></textarea>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="form-label col-sm-2">Tanggal Pemeriksaan: </label>
                    <div class="col-10">
                        <input type="date" class="form-control" name="tgl_pemeriksaan" required>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col-md-3">
                            <label class="form-label" style="margin-right: 20px;">Melakukan Hand Hygiene:</label>
                        </div>
                        <div class="col-md-2">
                            <input class="" type="radio" name="hand_hygiene" value="Ya" required>
                            <label class="form-check-label">Ya</label>
                        </div>
                        <div class="col-md-2">
                            <input class="" type="radio" name="hand_hygiene" value="Tidak" required>
                            <label class="form-check-label">Tidak</label>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-sm btn-primary">
                    Simpan
                </button>
                <a href="<?= base_url('perawat/scabies') ?>" class="btn btn-sm btn-secondary"> Kembali </a>
            </form>
        </div>
    </div>
</div>