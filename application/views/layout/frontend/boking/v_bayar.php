<div class="bradcam_area breadcam_bg">
    <h3><?= $title ?></h3>
</div>
<div class="whole-wrap">
    <div class="container box_1170">
        <div class="section-top-border">
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <h3 class="mb-30"><?= $title ?></h3>
                    <?php
                    echo validation_errors('<div class="alert alert-warning alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-exclamation-triangle"></i>', '</h5></div>');

                    //notifikasi gagal upload gambar
                    if (isset($error_upload)) {
                        echo '<div class="alert alert-warning alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-exclamation-triangle"></i>' . $error_upload . '</h5></div>';
                    }
                    foreach ($pesanan as $key => $items) {
                        echo form_open_multipart('boking/bayar/' . $items->id_boking)
                    ?>
                        <div class="mt-10">
                            <input type="text" name="atas_nama" placeholder="Atas Nama" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Atas Nama'" required class="single-input">
                        </div>
                        <div class="mt-10">
                            <input type="file" name="bukti_bayar" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required class="single-input">
                        </div>
                        <div class="input-group-icon mt-10">
                            <div class="icon"><i class="fa fa-money" aria-hidden="true"></i></div>
                            <div class="form-select" id="default-select">
                                <select id="vocher" name="id_boking">
                                    <option value="">---Vocher Boking---</option>
                                    <?php foreach ($pesanan as $key => $value) { ?>
                                        <option data-vocher="<?= $value->harga_bayar - $value->vocher ?>">Rp. <?= $value->vocher ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <input type="text" class="vocher" name="jumlah_bayar" hidden>
                        <div class="mt-10">
                            <button type="submit" class="genric-btn success circle">Bayar</button>
                        </div>

                        <?php echo form_close() ?>
                    <?php } ?>
                </div>
                <div class="col-lg-3 col-md-4 mt-sm-30">
                    <div class="single-element-widget">
                        <h3 class="mb-30">Jumlah Bayar</h3>
                        <?php foreach ($barang as $key => $value) { ?>
                            <div class="row">
                                <div class="form-control">
                                    <div class="switch-wrap d-flex justify-content-between">
                                        <p><?= $value->nama_barang ?></p>
                                        <p>Rp. <?= number_format($value->harga_bayar, 0) ?></p>
                                    </div>
                                </div>
                                <div class="form-control">
                                    <div class="switch-wrap d-flex justify-content-between">
                                        <span>Total Bayar</span>
                                        <span>Rp. <label class="vocher"></label></span>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>