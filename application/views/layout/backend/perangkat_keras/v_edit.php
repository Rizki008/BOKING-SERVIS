<div class="clearfix"></div>

<div class="content-wrapper">
    <div class="container-fluid">

        <div class="row mt-3">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">Round Vertical Form</div>
                        <hr>
                        <?php echo form_open_multipart('perangkat_keras/update/' . $perangkat->id_perangkat) ?>
                        <div class="form-group">
                            <label for="input-6">Nama Perangkat Keras</label>
                            <input type="text" name="nama_produk" class="form-control form-control-rounded" value="<?= $perangkat->nama_produk ?>">
                        </div>
                        <div class="form-group">
                            <label for="input-7">Harga</label>
                            <input type="text" name="harga" class="form-control form-control-rounded" value="<?= $perangkat->harga ?>">
                        </div>
                        <div class="form-group">
                            <label for="input-8">Deskripsi</label>
                            <textarea name="deskripsi" class="form-control form-control-rounded" value="<?= $perangkat->deskripsi ?>"><?= $perangkat->deskripsi ?> </textarea>
                        </div>
                        <div class="form-group">
                            <label for="input-9">Gambar</label>
                            <input type="file" name="gambar" class="form-control form-control-rounded" placeholder="gambar">
                        </div>
                        <div class="form-group">
                            <a href="<?= base_url('perangkat_keras') ?>" class="btn btn-light btn-round px-5"><i class="icon-action-undo"></i>Back</a>
                            <button type="submit" class="btn btn-light btn-round px-5"><i class="icon-lock"></i> SAve</button>
                        </div>
                        <?php echo form_close() ?>
                    </div>
                </div>
            </div>
        </div>
        <!--End Row-->
    </div>
</div>