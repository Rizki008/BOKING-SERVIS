<div class="slider_area">
    <div class="slider_active owl-carousel">
        <div class="single_slider d-flex align-items-center justify-content-center slider_bg_1">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="slider_text text-center">
                            <h3>Laptop Solusindo</h3>
                            <p>Solusi Perbaikan Laptop</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single_slider  d-flex align-items-center justify-content-center slider_bg_2">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="slider_text text-center">
                            <h3>Laptop Solusindo</h3>
                            <p>Solusi Perbaikan Laptop</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single_slider d-flex align-items-center justify-content-center slider_bg_1">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="slider_text text-center">
                            <h3>Laptop Solusindo</h3>
                            <p>Solusi Perbaikan Laptop</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single_slider  d-flex align-items-center justify-content-center slider_bg_2">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="slider_text text-center">
                            <h3>Laptop Solusindo</h3>
                            <p>Perbaiki Semua Kerusakan Laptop</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- about_area_start -->
<div class="about_area">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-5">
                <div class="about_info">
                    <div class="section_title mb-20px">

                        <h3>APA ITU <br>
                            LAPTOP ?</h3>
                    </div>
                    <p>Laptop adalah komputer bergerak (bisa dipindahkan dengan mudah) yang berukuran relatif kecil dan ringan, beratnya berkisar dari 1-6 kg, tergantung ukuran, bahan, dari spesifikasi laptop tersebut, laptop dapat digunakan dalam lingkungan yang berbeda dari komputer. Mereka termasuk layar, keyboard, dan trackpad atau trackball, yang berfungsi sebagai mouse . Karena laptop dimaksudkan untuk digunakan di mana saja, Laptop memiliki baterai yang memungkinkan untuk beroperasi tanpa terhubung ke stopkontak (sumber listrik). Laptop juga termasuk adaptor daya yang memungkinkan untuk menggunakan daya dari stopkontak dan mengisi kembali baterai. <br>
                    </p>
                </div>
            </div>
            <div class="col-xl-7 col-lg-7">
                <div class="about_thumb d-flex">
                    <div class="img_1">
                        <img src="<?= base_url('assets/gambar/unnamed.jpg') ?>" alt="">
                    </div>
                    <div class="img_2">
                        <img src="<?= base_url('assets/gambar/laptop2.jpg') ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- about_area_end -->

<!-- offers_area_start -->
<div class="offers_area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section_title text-center mb-100">
                    <span></span>
                    <h3>Perangkat Keras</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach ($perangkat as $key => $value) { ?>
                <div class="col-xl-4 col-md-4">
                    <div class="single_offers">
                        <div class="about_thumb">
                            <img src="<?= base_url('assets/gambar/' . $value->gambar) ?>" alt="">
                        </div>
                        <h3><?= $value->nama_produk ?></h3>

                        <li><?= $value->deskripsi ?></li>

                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- offers_area_end -->

<!-- video_area_start -->

<!-- about_area_end -->

<!-- instragram_area_start -->
<div class="instragram_area">
    <div class="single_instagram">
        <img src="<?= base_url() ?>montan-master/img/instragram/1.png" alt="">
        <div class="ovrelay">
            <a href="#">
                <i class="fa fa-instagram"></i>
            </a>
        </div>
    </div>
    <div class="single_instagram">
        <img src="<?= base_url() ?>montan-master/img/instragram/2.png" alt="">
        <div class="ovrelay">
            <a href="#">
                <i class="fa fa-instagram"></i>
            </a>
        </div>
    </div>
    <div class="single_instagram">
        <img src="<?= base_url() ?>montan-master/img/instragram/3.png" alt="">
        <div class="ovrelay">
            <a href="#">
                <i class="fa fa-instagram"></i>
            </a>
        </div>
    </div>
    <div class="single_instagram">
        <img src="<?= base_url() ?>montan-master/img/instragram/4.png" alt="">
        <div class="ovrelay">
            <a href="#">
                <i class="fa fa-instagram"></i>
            </a>
        </div>
    </div>
    <div class="single_instagram">
        <img src="<?= base_url() ?>montan-master/img/instragram/5.png" alt="">
        <div class="ovrelay">
            <a href="#">
                <i class="fa fa-instagram"></i>
            </a>
        </div>
    </div>
</div>
<!-- instragram_area_end -->