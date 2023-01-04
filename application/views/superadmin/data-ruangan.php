<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-md-10">
                    <h6 class="m-0 font-weight-bold text-primary">Daftar Data Ruang Rawat Inap</h6>
                </div>
                <div class="col-md-2">
                    <a href="<?= base_url('superadmin/formRuangan') ?>" class="btn btn-sm btn-primary"><i class="fa-solid fa-plus"></i> Data Ruangan</a>
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
                            <th>Nama Ruangan</th>
                            <th>Kelas</th>
                            <th><i class="fa-solid fa-wrench"></i></th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama Ruangan</th>
                            <th>Kelas</th>
                            <th><i class="fa-solid fa-wrench"></i></th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ((array) $ruangan as $r) :
                        ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $r['nama_ruangan'] ?></td>
                                <td><?= $r['kelas'] ?></td>
                                <td>
                                    <a href="<?= base_url('superadmin/editRuangan/' . $r['id']); ?>" class="btn btn-sm btn-warning btn-circle"><i class="fa-solid fa-pen-to-square"></i></a>
                                    |
                                    <a href="<?= base_url('superadmin/deleteRuangan/' . $r['id']); ?>" class="btn btn-sm btn-danger btn-circle"><i class="fa-solid fa-trash-can"></i></a>
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