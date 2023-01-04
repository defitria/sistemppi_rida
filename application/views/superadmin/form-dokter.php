<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <h6 class="m-0 font-weight-bold text-primary">Form Tambah Data Dokter</h6>
            </div>
        </div>
        <div class="card-body">
            <form method="POST" action="<?= base_url('superadmin/addDokter') ?>">
                <div class="mb-3">
                    <label class="form-label">Nama Dokter</label>
                    <input type="text" class="form-control" id="name" name="nama_dokter">
                </div>
                <div class="mb-3">
                    <label class="form-label">Spesialis</label>
                    <input type="text" class="form-control" id="email" name="spesialis">
                </div>
                <button type="submit" class="btn btn-sm btn-primary">
                    Simpan
                </button>
                <a href="<?= base_url('superadmin/data_dokter') ?>" class="btn btn-sm btn-secondary"> Kembali </a>
            </form>
        </div>
    </div>
</div>