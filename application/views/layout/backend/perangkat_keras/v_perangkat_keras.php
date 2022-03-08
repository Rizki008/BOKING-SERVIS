<div class="clearfix"></div>

<div class="content-wrapper">
    <div class="container-fluid">

        <div class="row mt-3">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?= $title ?></h5>
                        <a href="<?= base_url('perangkat_keras/add') ?>" class="btn btn-primary" type="button">Add</a>
                        <div class="table-responsive">
                            <table class="table align-items-center table-flush table-borderless">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Photo</th>
                                        <th>harga</th>
                                        <th>Deskripsi</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($perangkat as $key => $value) { ?>
                                        <tr>
                                            <td><?= $value->nama_produk ?></td>
                                            <td><img src="<?= base_url('assets/gambar/' . $value->gambar) ?>" class="product-img" alt="product img"></td>
                                            <td><?= $value->harga ?></td>
                                            <td><?= $value->deskripsi ?></td>
                                            <td>
                                                <a href="<?= base_url('perangkat_keras/update/' . $value->id_perangkat) ?>" class="btn btn-warning" type="button"><i class="zmdi zmdi-brush"></i></a>
                                                <a href="<?= base_url('perangkat_keras/delete/' . $value->id_perangkat) ?>" type="submit" class="btn btn-danger"><i class="zmdi zmdi-bug"></i></a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Row-->
        </div>
    </div>
</div>