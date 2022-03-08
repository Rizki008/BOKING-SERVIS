<!-- footer -->
<footer class="footer">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-md-6 col-lg-3">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            Alamat
                        </h3>
                        <p class="footer_text"> Jl. Raya Jalaksana, Sadamantra, Kec Jalaksana <br>
                            Kuningan 45554</p>
                        <a href="#" class="line-button"></a>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-3">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            Kontak
                        </h3>
                        <p class="footer_text">085314459134 <br>
                            Solusi.laptop@yahoo.co.id</p>
                    </div>
                </div>
                <div class="col-xl-2 col-md-6 col-lg-2">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            Navigation
                        </h3>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Rooms</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">News</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            Newsletter
                        </h3>
                        <form action="#" class="newsletter_form">
                            <input type="text" placeholder="Enter your mail">
                            <button type="submit">Sign Up</button>
                        </form>
                        <p class="newsletter_text">Subscribe newsletter to get updates</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copy-right_text">
        <div class="container">
            <div class="footer_border"></div>
            <div class="row">
                <div class="col-xl-8 col-md-7 col-lg-9">
                    <p class="copy_right">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </div>
                <div class="col-xl-4 col-md-5 col-lg-3">
                    <div class="socail_links">
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fa fa-facebook-square"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- link that opens popup -->

<!-- form itself end-->
<form id="test-form" class="white-popup-block mfp-hide" action="<?= base_url('boking/add_boking') ?>" method="POST">
    <?php $no_boking = date('Ymd') . strtoupper(random_string('alnum', 8)); ?>
    <div class="popup_box ">
        <div class="popup_inner">
            <h3>Booking</h3><br>
            <h4>Silahkan Boking Servis Leptop Bermasalah Anda. Biaya Pengambilan dan Pengembalian Cuma Rp. 10.000</h4><br>
            <form action="<?= base_url('boking/add_boking') ?>" method="POST">
                <?php $no_boking = date('Ymd') . strtoupper(random_string('alnum', 8)); ?>
                <div class="row">
                    <div class="col-xl-6">
                        <div class="form-group">
                            <input class="form-control" name="nama_barang" placeholder="Nama Barang" type="text" required>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="form-group">
                            <input class="form-control" name="tipe_barang" id="email" placeholder="Tipe Barang" type="text" required>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="form-group">
                            <input class="form-control" name="kerusakan_barang" id="mobile" placeholder="Kerusakan" type="text" required>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <input name="no_boking" value="<?= $no_boking ?>" hidden>
                        <button type="submit" class="boxed-btn3">Booking</button>
                        <a href="<?= base_url('home') ?>" type="submit" class="genric-btn danger-border">
                            Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</form>
<!-- form itself end -->

<!-- JS here -->
<script src="<?= base_url() ?>montana-master/js/vendor/modernizr-3.5.0.min.js"></script>
<script src="<?= base_url() ?>montana-master/js/vendor/jquery-1.12.4.min.js"></script>
<script src="<?= base_url() ?>montana-master/js/popper.min.js"></script>
<script src="<?= base_url() ?>montana-master/js/bootstrap.min.js"></script>
<script src="<?= base_url() ?>montana-master/js/owl.carousel.min.js"></script>
<script src="<?= base_url() ?>montana-master/js/isotope.pkgd.min.js"></script>
<script src="<?= base_url() ?>montana-master/js/ajax-form.js"></script>
<script src="<?= base_url() ?>montana-master/js/waypoints.min.js"></script>
<script src="<?= base_url() ?>montana-master/js/jquery.counterup.min.js"></script>
<script src="<?= base_url() ?>montana-master/js/imagesloaded.pkgd.min.js"></script>
<script src="<?= base_url() ?>montana-master/js/scrollIt.js"></script>
<script src="<?= base_url() ?>montana-master/js/jquery.scrollUp.min.js"></script>
<script src="<?= base_url() ?>montana-master/js/wow.min.js"></script>
<script src="<?= base_url() ?>montana-master/js/nice-select.min.js"></script>
<script src="<?= base_url() ?>montana-master/js/jquery.slicknav.min.js"></script>
<script src="<?= base_url() ?>montana-master/js/jquery.magnific-popup.min.js"></script>
<script src="<?= base_url() ?>montana-master/js/plugins.js"></script>
<script src="<?= base_url() ?>montana-master/js/gijgo.min.js"></script>

<!--contact js-->
<script src="<?= base_url() ?>montana-master/js/contact.js"></script>
<script src="<?= base_url() ?>montana-master/js/jquery.ajaxchimp.min.js"></script>
<script src="<?= base_url() ?>montana-master/js/jquery.form.js"></script>
<script src="<?= base_url() ?>montana-master/js/jquery.validate.min.js"></script>
<script src="<?= base_url() ?>montana-master/js/mail-script.js"></script>

<script src="<?= base_url() ?>montana-master/js/main.js"></script>
<script>
    $('#datepicker').datepicker({
        iconsLibrary: 'fontawesome',
        icons: {
            rightIcon: '<span class="fa fa-caret-down"></span>'
        }
    });
    $('#datepicker2').datepicker({
        iconsLibrary: 'fontawesome',
        icons: {
            rightIcon: '<span class="fa fa-caret-down"></span>'
        }

    });
</script>

<script>
    console.log = function() {}
    $("#vocher").on('change', function() {

        $(".vocher").html($(this).find(':selected').attr('data-vocher'));
        $(".vocher").val($(this).find(':selected').attr('data-vocher'));
    });
</script>

</body>

</html>