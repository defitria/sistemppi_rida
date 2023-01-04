<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <h6 class="m-0 font-weight-bold text-primary">Form Tambah User Perawat</h6>
            </div>
        </div>
        <div class="card-body">
            <form method="POST" action="<?= base_url('superadmin/addUser') ?>">
                <div class="mb-3">
                    <label class="form-label">Nama Perawat</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?= set_value('name'); ?>">
                    <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" name="email" value="<?= set_value('email'); ?>">
                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" value="<?= set_value('password'); ?>">
                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <button type="submit" class="btn btn-sm btn-primary">
                    Simpan
                </button>
                <a href="<?= base_url('superadmin/data_user') ?>" class="btn btn-sm btn-secondary"> Kembali </a>
            </form>
        </div>
    </div>
</div>