<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <h6 class="m-0 font-weight-bold text-primary">Form Ubah Password</h6>
            </div>
        </div>
        <div class="card-body">
            <?= $this->session->flashdata('message'); ?>
            <?php $email = $this->session->userdata('email') ?>
            <form action="<?= base_url('pasien/changepass') ?>" method="POST">
                <div class="mb-3">
                    <input type="hidden" name="email" value="<?= $email ?>">
                </div>
                <div class="mb-3">
                    <label for="pass_baru1" class="form-label">Password Baru</label>
                    <input type="password" class="form-control" id="pass_baru1" name="pass_baru1">
                    <?= form_error('pass_baru1', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="mb-3">
                    <label for="pass_baru2" class="form-label">Ulangi Password Baru</label>
                    <input type="password" class="form-control" id="pass_baru2" name="pass_baru2">
                    <?= form_error('pass_baru2', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <button type="submit" class="btn btn-sm btn-primary">
                    Update Password
                </button>
                <a href="<?= base_url('pasien') ?>" class="btn btn-sm btn-secondary"> Kembali </a>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->