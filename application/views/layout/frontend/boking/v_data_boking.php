<div class="bradcam_area breadcam_bg">
    <h3>Data Booking</h3>
</div>
<div class="whole-wrap">
    <div class="container box_1170">
        <div class="section-top-border">
            <h3 class="mb-30"><?= $title ?></h3>
            <div class="row">
                <div class="section-top-border">
                    <div class="progress-table-wrap">
                        <div class="progress-table">
                            <div class="table-head">
                                <div class="country">No Boking</div>
                                <div class="country">Tanggal Boking</div>
                                <div class="visit">Nama Barang</div>
                                <div class="country">Kerusakan</div>
                                <div class="country">Hasil Diagnosa</div>
                                <div class="country">Estimasi</div>
                                <div class="country">Jumlah Pembayaran</div>
                                <div class="percentage">Status Boking</div>
                            </div>
                            <?php
                            foreach ($data_boking as $key => $value) { ?>
                                <div class="table-row">

                                    <div class="country"><?= $value->no_boking ?></div>
                                    <div class="country"><?= $value->tgl_boking ?></div>
                                    <div class="visit"><?= $value->nama_barang ?></div>
                                    <div class="country"><?= $value->kerusakan_barang ?></div>
                                    <div class="country"><?= $value->catatan ?></div>
                                    <div class="country"><?= $value->estimasi ?></div>
                                    <div class="country"><?= $value->harga_bayar ?></div>
                                    <div class="percentage">
                                        <?php if ($value->status_boking == 0) { ?>
                                            <span class="badge badge-warning">Menunggu <br> Pengambilan Barang</span>
                                        <?php } elseif ($value->status_boking == 1) { ?>
                                            <span class="badge badge-warning">Diagnosa Keusakan</span>
                                        <?php } elseif ($value->status_boking == 3) { ?>
                                            <span class="badge badge-warning">Proses Perbaibaikan</span>
                                            <a href="<?= base_url('boking/konfirmasiservis/' . $value->id_boking) ?>" type="submit" class="btn btn-success">Konfirmasi</a><br />
                                            <a href="<?= base_url('boking/batalservis/' . $value->id_boking) ?>" type="submit" class="btn btn-danger">Batalkan</a>
                                        <?php } elseif ($value->status_boking == 4) { ?>
                                            <span class="badge badge-danger">Silahkan Bayar</span>
                                            <a href="<?= base_url('boking/bayar/' . $value->id_boking) ?>" class="btn btn-success">Bayar</a>
                                        <?php } elseif ($value->status_boking == 5) { ?>
                                            <span class="badge badge-dark">Proses Pengiriman Barang</span>
                                        <?php } elseif ($value->status_boking == 6) { ?>
                                            <span class="badge badge-success">Selesai Servis</span>
                                        <?php } elseif ($value->status_boking == 7) { ?>
                                            <span class="badge badge-danger">Batal Servis</span>
                                        <?php } elseif ($value->status_boking == 8) { ?>
                                            <span class="badge badge-danger">Barang Servis Dikembalikan</span>
                                        <?php } ?>
                                    </div>

                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>