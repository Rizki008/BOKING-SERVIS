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
                                        <th>Shipping</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($diagnosa as $key => $value) { ?>
                                        <tr>
                                            <td><?= $value->nama_barang ?></td>
                                            <td><?= $value->tipe_barang ?></td>
                                            <td><?= $value->kerusakan_barang ?></td>
                                            <td><?= $value->no_boking ?></td>
                                            <td><?= $value->tgl_boking ?></td>
                                            <td><?php if ($value->status_boking == 2) { ?>
                                                    <span class="badge badge-primary">Cek Diagnosa</span>
                                                <?php } ?>
                                            </td>
                                            <td>
                                                <button class="btn btn-primary btn-flat" data-toggle="modal" data-target="#cek<?= $value->id_boking ?>">Input Kerusakan</button>
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


<!--Model-->
<?php foreach ($diagnosa as $key => $value) { ?>
    <div class="modal fade" id="cek<?= $value->id_boking ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><?= $value->no_boking ?></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php echo form_open('diagnosa/kerusakan/' . $value->id_boking) ?>
                    <table class="table">
                        <tr class="text-warning mb-0">
                            <th>Nama Barang</th>
                            <th>:</th>
                            <td><?= $value->nama_barang ?></td>
                        </tr>
                        <tr class="text-warning mb-0">
                            <th>Tipe Barang</th>
                            <th>:</th>
                            <td><?= $value->tipe_barang ?></td>
                        </tr>
                        <tr class="text-warning mb-0">
                            <th>Kerusakan</th>
                            <th>:</th>
                            <td class="text-warning mb-0"><?= $value->kerusakan_barang ?></td>
                        </tr>
                        <tr class="text-warning mb-0">
                            <th>Hasil Diagnosa</th>
                            <th>:</th>
                            <td><input name="catatan" id="input-5" class="form-control" placeholder="Catatan" required></td>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
                <?php echo form_close() ?>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
<?php } ?>