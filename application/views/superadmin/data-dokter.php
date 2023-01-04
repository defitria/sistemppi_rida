<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-md-10">
                    <h6 class="m-0 font-weight-bold text-primary">Daftar Data Dokter </h6>
                </div>
                <div class="col-md-2">
                    <a href="<?= base_url('superadmin/formDokter') ?>" class="btn btn-sm btn-primary"><i class="fa-solid fa-plus"></i> Data Dokter</a>
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
                            <th>Nama Dokter</th>
                            <th>Spesialis</th>
                            <th><i class="fa-solid fa-wrench"></i></th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama Dokter</th>
                            <th>Spesialis</th>
                            <th><i class="fa-solid fa-wrench"></i></th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ((array) $dokter as $d) :
                        ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $d['nama_dokter'] ?></td>
                                <td><?= $d['spesialis'] ?></td>
                                <td>
                                    <a href="<?= base_url('superadmin/editDokter/' . $d['id']); ?>" class="btn btn-sm btn-warning btn-circle"><i class="fa-solid fa-pen-to-square"></i></a>
                                    |
                                    <a href="<?= base_url('superadmin/deleteDokter/' . $d['id']); ?>" class="btn btn-sm btn-danger btn-circle"><i class="fa-solid fa-trash-can"></i></a>
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