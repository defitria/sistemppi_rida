<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <h6 class="m-0 font-weight-bold text-primary">Form Edit Data Dokter</h6>
            </div>
        </div>
        <div class="card-body">
            <?php foreach ($dokter as $d) : ?>
                <form class="row g-3" method="POST" action="<?= base_url('superadmin/updateDokter') ?>">
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Nama Dokter</label>
                        <input type="text" class="form-control" name="nama_dokter" value="<?= $d->nama_dokter ?>">
                        <input type="hidden" class="form-control" name="id" value="<?= $d->id ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Spesialis</label>
                        <input type="text" class="form-control" name="spesialis" value="<?= $d->spesialis ?>">
                    </div>
                    <div class="col-12 mt-3">
                        <button type="submit" class="btn btn-sm btn-primary">
                            Simpan
                        </button>
                        <a href="<?= base_url('superadmin/data_dokter') ?>" class="btn btn-sm btn-secondary"> Kembali </a>
                    </div>
                <?php endforeach; ?>
                </form>
        </div>
    </div>
</div>