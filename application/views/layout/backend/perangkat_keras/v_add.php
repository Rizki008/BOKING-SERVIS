<div class="clearfix"></div>

<div class="content-wrapper">
    <div class="container-fluid">

        <div class="row mt-3">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">Round Vertical Form</div>
                        <hr>
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
                        echo form_open_multipart('perangkat_keras/add') ?>
                        <div class="form-group">
                            <label for="input-6">Nama Perangkat Keras</label>
                            <input type="text" name="nama_produk" class="form-control form-control-rounded" value="<?= set_value('nama_produk') ?>" placeholder="nama produk">
                        </div>
                        <div class="form-group">
                            <label for="input-7">Harga</label>
                            <input type="text" name="harga" class="form-control form-control-rounded" value="<?= set_value('harga') ?>" placeholder="harga">
                        </div>
                        <div class="form-group">
                            <label for="input-8">Deskripsi</label>
                            <textarea type="text" name="deskripsi" class="form-control form-control-rounded" value="<?= set_value('deskripsi') ?>" placeholder="Deskripsi"> </textarea>
                        </div>
                        <div class="form-group">
                            <label for="input-9">Gambar</label>
                            <input type="file" name="gambar" class="form-control form-control-rounded" placeholder="gambar">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-light btn-round px-5"><i class="icon-lock"></i> Save</button>
                        </div>
                        <?php echo form_close() ?>
                    </div>
                </div>
            </div>
        </div>
        <!--End Row-->
    </div>
</div>