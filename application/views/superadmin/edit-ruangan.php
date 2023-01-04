<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <h6 class="m-0 font-weight-bold text-primary">Form Edit Data Ruangan</h6>
            </div>
        </div>
        <div class="card-body">
            <?php foreach ($ruangan as $r) : ?>
                <form class="row g-3" method="POST" action="<?= base_url('superadmin/updateRuangan') ?>">
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Nama Ruangan</label>
                        <input type="text" class="form-control" name="nama_ruangan" value="<?= $r->nama_ruangan ?>">
                        <input type="hidden" class="form-control" name="id" value="<?= $r->id ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Kelas</label>
                        <input type="text" class="form-control" name="kelas" value="<?= $r->kelas ?>">
                    </div>
                    <div class="col-12 mt-3">
                        <button type="submit" class="btn btn-sm btn-primary">
                            Simpan
                        </button>
                        <a href="<?= base_url('superadmin/data_ruangan') ?>" class="btn btn-sm btn-secondary"> Kembali </a>
                    </div>
                <?php endforeach; ?>
                </form>
        </div>
    </div>
</div>