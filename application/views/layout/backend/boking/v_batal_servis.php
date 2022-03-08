<div class="clearfix"></div>

<div class="content-wrapper">
    <div class="container-fluid">

        <div class="row mt-3">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?= $title ?></h5>
                        <div class="table-responsive">
                            <table class="table align-items-center table-flush table-borderless">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Photo</th>
                                        <th>Booking ID</th>
                                        <th>Amount</th>
                                        <th>Date</th>
                                        <th>Alamat</th>
                                        <th>Shipping</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($boking_batal as $key => $value) { ?>
                                        <tr>
                                            <td><?= $value->nama_barang ?></td>
                                            <td><?= $value->tipe_barang ?></td>
                                            <td><?= $value->kerusakan_barang ?></td>
                                            <td><?= $value->no_boking ?></td>
                                            <td><?= $value->tgl_boking ?></td>
                                            <td><?php if ($value->status_boking == 7) { ?>
                                                    <span class="badge badge-warning">Batal Perbaikan Servis</span>
                                                <?php } ?>
                                            </td>
                                            <td><?= $value->alamat ?></td>
                                            <td>
                                                <a href="<?= base_url('boking_masuk/kirim_barang_batal_pesan/' . $value->id_boking) ?>" class="btn btn-warning">Kirim Barang</a>
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