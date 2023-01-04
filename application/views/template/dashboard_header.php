<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard PPI RS Erba</title>

    <!-- Custom fonts for this template-->
    <script src="https://kit.fontawesome.com/627639697e.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="<?= base_url('assets/'); ?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>css/custom.css" rel="stylesheet">




</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('superadmin') ?>">
                <div class="sidebar-brand-text mx-3">
                    <?php
                    if ($this->session->userdata('role_id') == 1) {
                        echo "Super Admin";
                    } elseif ($this->session->userdata('role_id') == 2) {
                        echo "Perawat";
                    } elseif ($this->session->userdata('role_id') == 3) {
                        echo $this->session->userdata('name');
                    }
                    ?>
                </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <?php
            if ($this->session->userdata('role_id') == 1) {
            ?>
                <!-- Nav Item - Dashboard -->
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('superadmin') ?>">
                        <i class="fa-solid fa-house"></i>
                        <span>Dashboard</span></a>
                </li>

            <?php } elseif ($this->session->userdata('role_id') == 2) { ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('perawat') ?>">
                        <i class="fa-solid fa-house"></i>
                        <span>Homepage</span></a>
                </li>
            <?php } else { ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('pasien') ?>">
                        <i class="fa-solid fa-hospital-user"></i>
                        <span>Riwayat Medis</span></a>
                </li>
            <?php } ?>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Menu
            </div>

            <?php
            if ($this->session->userdata('role_id') == 1) {
            ?>
                <!-- Nav Item - Dashboard -->
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('superadmin/data_user') ?>">
                        <i class="fa-solid fa-users"></i>
                        <span> Data User Manager</span></a>
                </li>

                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fa-solid fa-table"></i>
                        <span>Data</span>
                    </a>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item" href="<?= base_url('superadmin/data_pasien'); ?>">Pasien</a>
                            <a class="collapse-item" href="<?= base_url('superadmin/data_dokter'); ?>">Dokter</a>
                            <a class="collapse-item" href="<?= base_url('superadmin/data_ruangan'); ?>">Ruang Rawat Inap</a>
                            <a class="collapse-item" href="<?= base_url('superadmin/laporan'); ?>">Laporan Surveilans</a>
                        </div>
                    </div>
                </li>
            <?php } elseif ($this->session->userdata('role_id') == 2) { ?>

                <!-- Nav Item - Utilities Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                        <i class="fa-solid fa-clipboard-list"></i>
                        <span>Form Surveilans</span>
                    </a>
                    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item" href="<?= base_url('perawat/phlebitis'); ?>">Phlebitis</a>
                            <a class="collapse-item" href="<?= base_url('perawat/scabies'); ?>">Scabies</a>
                            <a class="collapse-item" href="<?= base_url('perawat/isk'); ?>">ISK</a>
                            <a class="collapse-item" href="<?= base_url('perawat/dekubitus'); ?>">Dekubitus</a>
                            <a class="collapse-item" href="<?= base_url('perawat/laporan'); ?>">Laporan Bulanan</a>
                        </div>
                    </div>
                </li>

            <?php } elseif ($this->session->userdata('role_id') == 3) { ?>
                <!-- Nav Item - Dashboard -->
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('pasien/data_diri') ?>">
                        <i class="fa-solid fa-address-card"></i>
                        <span> Data Diri</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('pasien/changepass') ?>">
                        <i class="fa-solid fa-key"></i>
                        <span> Ubah Password </span></a>
                </li>
            <?php } ?>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('auth/logout'); ?>">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <span>Logout</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">


                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <div class="sidebar-brand-icon">
                        <img src="<?= base_url('assets/img/logo-rs.png') ?>" style="width: 100px;" alt="">
                    </div>

                </nav>
                <!-- End of Topbar -->