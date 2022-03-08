<div class="bradcam_area breadcam_bg_2">
    <h3>Profil</h3>
</div>
<div class="about_area">
    <div class="container">
        <?php foreach ($profil as $key => $value) { ?>
            <div class="row">
                <div class="col-xl-5 col-lg-5">
                    <div class="about_info">
                        <div class="section_title mb-20px">
                            <h3>Akun
                                Profil</h3>
                        </div>
                        <p><?= $value->nama ?></p>
                        <p>No Telpon : <?= $value->no_tlpn ?></p>
                        <p>Email : <?= $value->email ?></p>
                        <p>Password : <?= $value->password ?></p>
                        <p>Vocher : Rp. <?= number_format($value->vocher, 0) ?></p>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7">
                    <div class="about_thumb d-flex">
                        <div class="img_1">
                            <img src="<?= base_url() ?>quickloud-master/images/avatar04.png" alt="">
                        </div>
                        <div class="img_2">
                            <!-- <img src="img/about/about_2.png" alt=""> -->
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>