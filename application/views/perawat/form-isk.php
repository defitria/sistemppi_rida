<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-10">
                    <h6 class="m-0 font-weight-bold text-primary">Form Surveilans ISK (Infeksi Saluran Kemih)</h6>
                </div>
                <div class="col-2">
                    <a href="<?= base_url('perawat/isk') ?>" class="btn btn-sm btn-secondary btn-block"> Kembali </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form method="POST" action="<?= base_url('perawat/addISK') ?>">
                <div class="mb-3">
                    <div class="row">
                        <div class="col-md-6">
                            <label class="form-label">Jenis Surveilans Infeksi</label>
                            <input type="text" class="form-control" id="jenis_surveilans" value="Infeksi Saluran Kemih (ISK)" name="jenis_surveilans" disabled>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Nama Pasien</label>
                            <select class="form-control js-select2" id="" name="nama_pasien" aria-label="Floating label select example">
                                <option selected>-- Pilih Pasien --</option>
                                <?php foreach ($isk as $i) : ?>
                                    <option value="<?= $i['nama'] ?>" required><?= $i['nama'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col-md-3">
                            <label class="form-label" style="margin-right: 20px;">Jenis Pemasangan:</label>
                        </div>
                        <div class="col-md-2">
                            <input class="" type="radio" name="jenis_pemasangan" id="jenis_pemasangan" value="1" required>
                            <label class="form-check-label" for="jenis_pemasangan">SPP</label>
                        </div>
                        <div class="col-md-2">
                            <input class="" type="radio" name="jenis_pemasangan" id="jenis_pemasangan" value="2" required>
                            <label class="form-check-label" for="jenis_pemasangan">Dauer</label>
                        </div>
                        <div class="col-md-2">
                            <input class="" type="radio" name="jenis_pemasangan" id="jenis_pemasangan" value="3" required>
                            <label class="form-check-label" for="jenis_pemasangan">Intermiten</label>
                        </div>
                        <div class="col-md-2">
                            <input class="" type="radio" name="jenis_pemasangan" id="jenis_pemasangan" value="3" required>
                            <label class="form-check-label" for="jenis_pemasangan">Kondom</label>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col-md-3">
                            <label class="form-label" style="margin-right: 20px;">Pemeriksaan:</label>
                        </div>
                        <div class="col-md-2">
                            <input class="" type="radio" name="pemeriksaan" value="1" required>
                            <label class="form-check-label">Urine</label>
                        </div>
                        <div class="col-md-2">
                            <input class="" type="radio" name="pemeriksaan" value="2" required>
                            <label class="form-check-label">Bukan Urine</label>
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="form-label col-sm-2">Tanggal Pemeriksaan: </label>
                    <div class="col-10">
                        <input type="date" class="form-control" name="tgl_pemeriksaan" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="form-label col-sm-2">Keterangan: </label>
                    <div class="col-10">
                        <textarea class="form-control" name="keterangan" placeholder="Hasil Pemeriksaan ..."></textarea>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="form-label col-sm-2">Tanggal Pasang: </label>
                    <div class="col-10">
                        <input type="date" class="form-control" name="tgl_pasang" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-6">
                        <div class="row">
                            <div class="col-md-4" style="text-align: right;">
                                <label class="form-label" style="margin-right: 20px;">Pemasangan DC Sesuai Indikasi</label>
                            </div>
                            <div class="col-md-2">
                                <input class="" type="radio" name="pemasangan_dc" value="Y" required>
                                <label class="form-check-label">Ya</label>
                            </div>
                            <div class="col-md-2">
                                <input class="" type="radio" name="pemasangan_dc" value="N" required>
                                <label class="form-check-label">Tidak</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row">
                            <div class="col-md-4" style="text-align: right;">
                                <label class="form-label" style="margin-right: 20px;">Pemasangan Menggunakan Alat Steril</label>
                            </div>
                            <div class="col-md-2">
                                <input class="" type="radio" name="pemasangan_alatsteril" value="Y" required>
                                <label class="form-check-label">Ya</label>
                            </div>
                            <div class="col-md-2">
                                <input class="" type="radio" name="pemasangan_alatsteril" value="N" required>
                                <label class="form-check-label">Tidak</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-6">
                        <div class="row">
                            <div class="col-md-4" style="text-align: right;">
                                <label class="form-label" style="margin-right: 20px;">Melakukan Hand Hygiene</label>
                            </div>
                            <div class="col-md-2">
                                <input class="" type="radio" name="hand_hygiene" value="Y" required>
                                <label class="form-check-label">Ya</label>
                            </div>
                            <div class="col-md-2">
                                <input class="" type="radio" name="hand_hygiene" value="N" required>
                                <label class="form-check-label">Tidak</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row">
                            <div class="col-md-4" style="text-align: right;">
                                <label class="form-label" style="margin-right: 20px;">Segera Dilepas Jika Tidak Indikasi</label>
                            </div>
                            <div class="col-md-2">
                                <input class="" type="radio" name="segera_dilepas" value="Y" required>
                                <label class="form-check-label">Ya</label>
                            </div>
                            <div class="col-md-2">
                                <input class="" type="radio" name="segera_dilepas" value="N" required>
                                <label class="form-check-label">Tidak</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-6">
                        <div class="row">
                            <div class="col-md-4" style="text-align: right;">
                                <label class="form-label" style="margin-right: 20px;">Fiksasi Kateter dengan Plester</label>
                            </div>
                            <div class="col-md-2">
                                <input class="" type="radio" name="fiksasi_kateter" value="Y" required>
                                <label class="form-check-label">Ya</label>
                            </div>
                            <div class="col-md-2">
                                <input class="" type="radio" name="fiksasi_kateter" value="N" required>
                                <label class="form-check-label">Tidak</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row">
                            <div class="col-md-4" style="text-align: right;">
                                <label class="form-label" style="margin-right: 20px;">Pengisian Balon sesuai Indikasi (30mL)</label>
                            </div>
                            <div class="col-md-2">
                                <input class="" type="radio" name="pengisian_balon" value="Y" required>
                                <label class="form-check-label">Ya</label>
                            </div>
                            <div class="col-md-2">
                                <input class="" type="radio" name="pengisian_balon" value="N" required>
                                <label class="form-check-label">Tidak</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-6">
                        <div class="row">
                            <div class="col-md-4" style="text-align: right;">
                                <label class="form-label" style="margin-right: 20px;">ADP Tepat</label>
                            </div>
                            <div class="col-md-2">
                                <input class="" type="radio" name="adp_tepat" value="Y" required>
                                <label class="form-check-label">Ya</label>
                            </div>
                            <div class="col-md-2">
                                <input class="" type="radio" name="adp_tepat" value="N" required>
                                <label class="form-check-label">Tidak</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row">
                            <div class="col-md-4" style="text-align: right;">
                                <label class="form-label" style="margin-right: 20px;">Urine Bag Menggantung</label>
                            </div>
                            <div class="col-md-2">
                                <input class="" type="radio" name="urine_bag" value="Y" required>
                                <label class="form-check-label">Ya</label>
                            </div>
                            <div class="col-md-2">
                                <input class="" type="radio" name="urine_bag" value="N" required>
                                <label class="form-check-label">Tidak</label>
                            </div>
                        </div>
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