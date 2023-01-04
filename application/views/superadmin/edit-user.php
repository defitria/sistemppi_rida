<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <h6 class="m-0 font-weight-bold text-primary">Form Edit User</h6>
            </div>
        </div>
        <div class="card-body">
            <?php foreach ($user as $dtuser) : ?>
                <form method="POST" action="<?= base_url('superadmin/updateUser') ?>">
                    <div class="mb-3">
                        <input type="hidden" name="id" value="<?= $dtuser->id ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama Perawat</label>
                        <input type="text" class="form-control" id="name" name="name" value="<?= $dtuser->name ?>">
                        <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email" value="<?= $dtuser->email ?>">
                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <button type="submit" class="btn btn-sm btn-primary">
                        Update
                    </button>
                    <a href="<?= base_url('superadmin/data_user') ?>" class="btn btn-sm btn-secondary"> Kembali </a>
                </form>
            <?php endforeach; ?>
        </div>
    </div>
</div>