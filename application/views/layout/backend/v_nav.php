<body class="bg-theme bg-theme1">

    <!-- Start wrapper-->
    <div id="wrapper">

        <!--Start sidebar-wrapper-->
        <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
            <div class="brand-logo">
                <a href="<?= base_url('admin') ?>">
                    <img src="<?= base_url() ?>dashtreme-master/assets/images/logoadmin.png" class="logo-icon" alt="logo icon">
                    <h5 class="logo-text">SOLUSINDO ADMIN</h5>
                </a>
            </div>
            <ul class="sidebar-menu do-nicescrol">
                <li class="sidebar-header">MAIN NAVIGATION</li>
                <li>
                    <a href="<?= base_url('admin') ?>">
                        <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="<?= base_url('perangkat_keras') ?>">
                        <i class="zmdi zmdi-format-list-bulleted"></i> <span>Perangkat Keras</span>
                    </a>
                </li>

                <li>
                    <a href="<?= base_url('boking_masuk') ?>">
                        <i class="zmdi zmdi-notifications-active animated infinite pulse zmdi-hc-fw mdc-text-blue"></i> <span>Boking Masuk</span>
                        <small class="badge float-right badge-light">New</small>
                    </a>
                </li>

                <li>
                    <a href="<?= base_url('boking_masuk/pickup') ?>">
                        <i class="zmdi zmdi-settings zmdi-hc-spin"></i> <span>Diagnosa</span>
                    </a>
                </li>

                <li>
                    <a href="<?= base_url('boking_masuk/pembayaran') ?>">
                        <i class="zmdi zmdi-money"></i> <span>Data Harga Servis</span>
                        <!-- <i class="fa fa-mo"></i> -->
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('boking_masuk/proses_pembayaran') ?>">
                        <i class="zmdi zmdi-money"></i> <span>Pembayaran</span>
                    </a>
                </li>

                <li>
                    <a href="<?= base_url('diagnosa') ?>">
                        <i class="zmdi zmdi-settings zmdi-hc-spin"></i> <span>Data Diagnosa</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('boking_masuk/proses_kirim') ?>">
                        <i class="zmdi zmdi-directions-bike animated infinite fadeInLeft zmdi-hc-fw"></i> <span>Pickup Kirim</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('boking_masuk/proses_kirim_barang') ?>">
                        <i class="zmdi zmdi-directions-bike animated infinite fadeInLeft zmdi-hc-fw"></i> <span>Batal Boking</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('laporan') ?>">
                        <i class="zmdi zmdi-inbox zmdi-hc-fw"></i> <span>Laporan</span>
                        <!-- <i class="fa fa-bookmark"></i> -->
                    </a>
                </li>

            </ul>

        </div>
        <!--End sidebar-wrapper-->