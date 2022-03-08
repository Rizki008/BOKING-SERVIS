<div class="row align-items-center no-gutters">
    <div class="col-xl-5 col-lg-6">
        <div class="main-menu  d-none d-lg-block">
            <nav>
                <ul id="navigation">
                    <li><a class="active" href="<?= base_url('home') ?>">Home</a></li>
                    <li><a class="" href="<?= base_url('boking') ?>">Data Booking</a></li>
                    <li>
                        <?php if (
                            $this->session->userdata('email') == ""
                        ) { ?>
                            <a href="#">Akun <i class="ti-angle-down"></i></a>
                            <ul class="submenu">
                                <li><a href="<?= base_url('pelanggan/login') ?>">Login/Register</a></li>
                            </ul>
                        <?php } else { ?>
                            <a href="#"><?= $this->session->userdata('nama'); ?><i class="ti-angle-down"></i></a>
                            <ul class="submenu">
                                <li><a class="dropdown-item" href="<?= base_url('pelanggan/logout') ?>">Log Out</a>
                                    <a class="dropdown-item" href="<?= base_url('pelanggan/akun') ?>">Akun</a>
                                </li>
                            </ul>
                        <?php } ?>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="col-xl-2 col-lg-2">
        <div class="logo-img">
            <a href="<?= base_url('home') ?>">
                <img src="<?= base_url() ?>montana-master/img/logo1.png" alt="">
            </a>
        </div>
    </div>
    <div class="col-xl-5 col-lg-4 d-none d-lg-block">
        <div class="book_room">

            <div class="book_btn d-none d-lg-block">
                <a class="popup-with-form" href="#test-form">Booking Servis</a>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="mobile_menu d-block d-lg-none"></div>
    </div>
</div>
</div>
</div>
</div>
</header>
<!-- slider_area_start -->

<!-- slider_area_end -->