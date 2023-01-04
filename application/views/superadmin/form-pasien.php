<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <h6 class="m-0 font-weight-bold text-primary">Form Tambah Data Pasien</h6>
            </div>
        </div>
        <div class="card-body">
            <form class="row g-3" method="POST" action="<?= base_url('superadmin/addPasien') ?>">
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Nama Pasien</label>
                    <input type="text" class="form-control" name="nama">
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">No. Rekam Medik</label>
                    <input type="text" class="form-control" name="no_rm">
                </div>
                <div class="col-md-6 mt-3">
                    <label for="inputEmail4" class="form-label">NIK</label>
                    <input type="text" class="form-control" name="nik">
                </div>
                <div class="col-md-6 mt-3">
                    <label for="inputPassword4" class="form-label">Jenis Kelamin</label>
                    <input type="text" class="form-control" name="jenis_kelamin">
                </div>
                <div class="col-md-6 mt-3">
                    <label for="inputEmail4" class="form-label datepicker">Tanggal Lahir</label>
                    <input type="date" id="datepicker" class="form-control" name="tgl_lahir">
                </div>
                <div class="col-md-6 mt-3">
                    <label for="inputPassword4" class="form-label">Alamat</label>
                    <input type="text" class="form-control" name="alamat">
                </div>
                <div class="col-md-6 mt-3">
                    <label for="inputEmail4" class="form-label">Jenis Asuransi</label>
                    <input type="text" class="form-control" name="jenis_asuransi">
                </div>
                <div class="col-md-6 mt-3">
                    <label for="inputPassword4" class="form-label">DPJP</label>
                    <select class="form-select form-control js-select2" name="dpjp" aria-label="Floating label select example">
                        <option selected>-- Pilih Dokter --</option>
                        <?php foreach ($dokter as $d) : ?>
                            <option value="<?= $d['nama_dokter'] ?>"><?= $d['nama_dokter'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col-md-6 mt-3">
                    <label for="inputPassword4" class="form-label">Ruang Rawat Inap</label>
                    <select class="form-select form-control js-select2" name="ruang_rawatinap" aria-label="Floating label select example">
                        <option selected>-- Pilih Ruangan --</option>
                        <?php foreach ($ruang_rawatinap as $r) : ?>
                            <option value="<?= $r['nama_ruangan'] ?>"><?= $r['nama_ruangan'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col-12 mt-3">
                    <button type="submit" class="btn btn-sm btn-primary">
                        Simpan
                    </button>
                    <a href="<?= base_url('superadmin/data_pasien') ?>" class="btn btn-sm btn-secondary"> Kembali </a>
                </div>
            </form>
        </div>
    </div>
</div>