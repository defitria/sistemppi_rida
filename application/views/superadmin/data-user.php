<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-md-10">
                    <h6 class="m-0 font-weight-bold text-primary">Daftar User</h6>
                </div>
                <div class="col-md-2">
                    <a href="<?= base_url('superadmin/formUser') ?>" class="btn btn-sm btn-primary"><i class="fa-solid fa-plus"></i> User Perawat</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <?= $this->session->flashdata('message'); ?>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Hak Akses</th>
                            <th>Status Akun</th>
                            <th><i class="fa-solid fa-wrench"></i></th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Hak Akses</th>
                            <th>Status Akun</th>
                            <th><i class="fa-solid fa-wrench"></i></th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ((array) $user as $dtuser) :
                        ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $dtuser['name'] ?></td>
                                <td><?= $dtuser['email'] ?></td>
                                <td>
                                    <?php
                                    if ($dtuser['role_id'] == 1) {
                                        echo 'Super Admin';
                                    } elseif ($dtuser['role_id'] == 2) {
                                        echo 'Perawat';
                                    } elseif ($dtuser['role_id'] == 3) {
                                        echo 'Pasien';
                                    }
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if ($dtuser['is_active'] == 0) {
                                        echo 'Akun tidak aktif';
                                    } elseif ($dtuser['is_active'] == 1) {
                                        echo 'Akun aktif';
                                    }
                                    ?>
                                </td>
                                <td>
                                    <?php if ($dtuser['role_id'] == 3) { ?>
                                        <a href="<?= base_url('superadmin/editUser/' . $dtuser['id']); ?>" class="btn btn-sm btn-warning btn-circle"><i class="fa-solid fa-pen-to-square"></i></a>
                                        |
                                        <a href="<?= base_url('superadmin/deleteUser/' . $dtuser['id']); ?>" class="btn btn-sm btn-danger btn-circle"><i class="fa-solid fa-trash-can"></i></a>
                                    <?php } else { ?>

                                        <a href="<?= base_url('superadmin/changepass/' . $dtuser['id']); ?>" class="btn btn-sm btn-outline-dark">Ubah Password</a>
                                        |
                                        <a href="<?= base_url('superadmin/editUser/' . $dtuser['id']); ?>" class="btn btn-sm btn-warning btn-circle"><i class="fa-solid fa-pen-to-square"></i></a>
                                        |
                                        <a href="<?= base_url('superadmin/deleteUser/' . $dtuser['id']); ?>" class="btn btn-sm btn-danger btn-circle"><i class="fa-solid fa-trash-can"></i></a>
                                    <?php } ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->