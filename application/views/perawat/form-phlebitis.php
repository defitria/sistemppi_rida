<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-10">
                    <h6 class="m-0 font-weight-bold text-primary">Form Surveilans Phlebitis</h6>
                </div>
                <div class="col-2">
                    <a href="<?= base_url('perawat/phlebitis') ?>" class="btn btn-sm btn-secondary btn-block"> Kembali </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form method="POST" action="<?= base_url('perawat/addPhlebitis') ?>">
                <div class="mb-3">
                    <div class="row">
                        <div class="col-md-6">
                            <label class="form-label">Jenis Surveilans Infeksi</label>
                            <input type="text" class="form-control" id="jenis_surveilans" value="Phlebitis" name="jenis_surveilans" disabled>
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
                        <div class="col-md-3">
                            <label class="form-label" style="margin-right: 20px;">Jenis Pemasangan:</label>
                        </div>
                        <div class="col-md-3">
                            <input class="" type="radio" name="jenis_pemasangan" id="jenis_pemasangan" value="1" required>
                            <label class="form-check-label" for="jenis_pemasangan">Kateter V Perifer</label>
                        </div>
                        <div class="col-md-3">
                            <input class="" type="radio" name="jenis_pemasangan" id="jenis_pemasangan" value="2" required>
                            <label class="form-check-label" for="jenis_pemasangan">Umbilikal</label>
                        </div>
                        <div class="col-md-3">
                            <input class="" type="radio" name="jenis_pemasangan" id="jenis_pemasangan" value="3" required>
                            <label class="form-check-label" for="jenis_pemasangan">Double Lumen</label>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col-md-3">
                            <label class="form-label" style="margin-right: 20px;">Tujuan Pemasangan:</label>
                        </div>
                        <div class="col-md-2">
                            <input class="" type="radio" name="tujuan_pemasangan" value="1" required>
                            <label class="form-check-label">Pemberian Obat</label>
                        </div>
                        <div class="col-md-2">
                            <input class="" type="radio" name="tujuan_pemasangan" value="2" required>
                            <label class="form-check-label">Transfusi</label>
                        </div>
                        <div class="col-md-2">
                            <input class="" type="radio" name="tujuan_pemasangan" value="3" required>
                            <label class="form-check-label">Nutrisi Parenteral</label>
                        </div>
                        <div class="col-md-2">
                            <input class="" type="radio" name="tujuan_pemasangan" value="4" required>
                            <label class="form-check-label">Terapi Cairan</label>
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="form-label col-sm-2">Keterangan: </label>
                    <div class="col-10">
                        <textarea class="form-control" name="keterangan" placeholder="Keterangan Tujuan Pemasangan ..."></textarea>

                    </div>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col-md-3">
                            <label class="form-label" style="margin-right: 20px;">Lokasi:</label>
                        </div>
                        <div class="col-md-2">
                            <input class="" type="radio" name="lokasi" value="1" required>
                            <label class="form-check-label">Tangan Kanan</label>
                        </div>
                        <div class="col-md-2">
                            <input class="" type="radio" name="lokasi" value="2" required>
                            <label class="form-check-label">Tangan Kiri</label>
                        </div>
                        <div class="col-md-2">
                            <input class="" type="radio" name="lokasi" value="3" required>
                            <label class="form-check-label">Kaki Kanan</label>
                        </div>
                        <div class="col-md-2">
                            <input class="" type="radio" name="lokasi" value="4" required>
                            <label class="form-check-label">Kaki Kiri</label>
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="form-label col-sm-2">Tanggal Pasang: </label>
                    <div class="col-10">
                        <input type="date" class="form-control" name="tgl_pasang" required>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-6">
                        <div class="row">
                            <div class="col-md-4" style="text-align: right;">
                                <label class="form-label" style="margin-right: 20px;">Lakukan Kebersihan Tangan Sebelum dan Sesudah Pemasangan</label>
                            </div>
                            <div class="col-md-4">
                                <input class="" type="radio" name="kebersihan_tangan" value="Y" required>
                                <label class="form-check-label">Ya</label>
                            </div>
                            <div class="col-md-4">
                                <input class="" type="radio" name="kebersihan_tangan" value="N" required>
                                <label class="form-check-label">Tidak</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row">
                            <div class="col-md-4" style="text-align: right;">
                                <label class="form-label" style="margin-right: 20px;">Melepas Pemasangan Apabila Ada Keluhan/Peradangan</label>
                            </div>
                            <div class="col-md-4">
                                <input class="" type="radio" name="lepas_pemasanganKeluhan" value="Y" required>
                                <label class="form-check-label">Ya</label>
                            </div>
                            <div class="col-md-4">
                                <input class="" type="radio" name="lepas_pemasanganKeluhan" value="N" required>
                                <label class="form-check-label">Tidak</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-6">
                        <div class="row">
                            <div class="col-md-4" style="text-align: right;">
                                <label class="form-label" style="margin-right: 20px;">Lakukan Pengecekan Balutan Pemasangan (Drayssing)</label>
                            </div>
                            <div class="col-md-4">
                                <input class="" type="radio" name="pengecekan_balutan" value="Y" required>
                                <label class="form-check-label">Ya</label>
                            </div>
                            <div class="col-md-4">
                                <input class="" type="radio" name="pengecekan_balutan" value="N" required>
                                <label class="form-check-label">Tidak</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row">
                            <div class="col-md-4" style="text-align: right;">
                                <label class="form-label" style="margin-right: 20px;">Melepas Pemasangan Apabila Lebih dari 72 Jam</label>
                            </div>
                            <div class="col-md-4">
                                <input class="" type="radio" name="lepas_pemasanganJam" value="Y" required>
                                <label class="form-check-label">Ya</label>
                            </div>
                            <div class="col-md-4">
                                <input class="" type="radio" name="lepas_pemasanganJam" value="N" required>
                                <label class="form-check-label">Tidak</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-6">
                        <div class="row">
                            <div class="col-md-4" style="text-align: right;">
                                <label class="form-label" style="margin-right: 20px;">Lakukan Pengecekan Tempat Pemasangan</label>
                            </div>
                            <div class="col-md-4">
                                <input class="" type="radio" name="pengecekan_tmpt" value="Y" required>
                                <label class="form-check-label">Ya</label>
                            </div>
                            <div class="col-md-4">
                                <input class="" type="radio" name="pengecekan_tmpt" value="N" required>
                                <label class="form-check-label">Tidak</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="form-label col-sm-2">Tanggal Lepas: </label>
                    <div class="col-10">
                        <input type="date" class="form-control" name="tgl_lepas" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-sm btn-primary">
                    Simpan
                </button>
                <a href="<?= base_url('perawat/phlebitis') ?>" class="btn btn-sm btn-secondary"> Kembali </a>
            </form>
        </div>
    </div>
</div>