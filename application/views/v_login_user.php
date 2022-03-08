<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<title>Dashtreme Admin - Free Dashboard for Bootstrap 4 by Codervent</title>
	<!-- loader-->
	<link href="<?= base_url() ?>dashtreme-master/assets/css/pace.min.css" rel="stylesheet" />
	<script src="<?= base_url() ?>dashtreme-master/assets/js/pace.min.js"></script>
	<!--favicon-->
	<link rel="icon" href="<?= base_url() ?>dashtreme-master/assets/images/favicon.ico" type="image/x-icon">
	<!-- Bootstrap core CSS-->
	<link href="<?= base_url() ?>dashtreme-master/assets/css/bootstrap.min.css" rel="stylesheet" />
	<!-- animate CSS-->
	<link href="<?= base_url() ?>dashtreme-master/assets/css/animate.css" rel="stylesheet" type="text/css" />
	<!-- Icons CSS-->
	<link href="<?= base_url() ?>dashtreme-master/assets/css/icons.css" rel="stylesheet" type="text/css" />
	<!-- Custom Style-->
	<link href="<?= base_url() ?>dashtreme-master/assets/css/app-style.css" rel="stylesheet" />

</head>

<body class="bg-theme bg-theme1">

	<!-- start loader -->
	<div id="pageloader-overlay" class="visible incoming">
		<div class="loader-wrapper-outer">
			<div class="loader-wrapper-inner">
				<div class="loader"></div>
			</div>
		</div>
	</div>
	<!-- end loader -->

	<!-- Start wrapper-->
	<div id="wrapper">

		<div class="loader-wrapper">
			<div class="lds-ring">
				<div></div>
				<div></div>
				<div></div>
				<div></div>
			</div>
		</div>
		<div class="card card-authentication1 mx-auto my-5">
			<div class="card-body">
				<div class="card-content p-2">
					<div class="text-center">
						<img src="<?= base_url() ?>dashtreme-master/assets/images/logo-icon.png" alt="logo icon">
					</div>
					<div class="card-title text-uppercase text-center py-3">Sign In</div>
					<?php

					echo validation_errors('<div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fa fa-exclamation-triangle"></i> Coba Lagi</h5>', '</div>');

					if ($this->session->flashdata('error')) {
						echo '<div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fa fa-ban"></i> Gagal</h5>';
						echo $this->session->flashdata('error');
						echo '</div>';
					}

					if ($this->session->flashdata('pesan')) {
						echo '<div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fa fa-check"></i> Gagal</h5>';
						echo $this->session->flashdata('pesan');
						echo '</div>';
					}

					echo form_open('auth/login_user')
					?>
					<div class="form-group">
						<label for="exampleInputUsername" class="sr-only">Username</label>
						<div class="position-relative has-icon-right">
							<input type="text" id="exampleInputUsername" name="nama" class="form-control input-shadow" placeholder="Enter Username">
							<div class="form-control-position">
								<i class="icon-user"></i>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="exampleInputPassword" class="sr-only">Password</label>
						<div class="position-relative has-icon-right">
							<input type="password" id="exampleInputPassword" name="password" class="form-control input-shadow" placeholder="Enter Password">
							<div class="form-control-position">
								<i class="icon-lock"></i>
							</div>
						</div>
					</div>
					<button type="submit" class="btn btn-light btn-block">Sign In</button>
					<?php echo form_close() ?>
				</div>
			</div>
		</div>


	</div>
	<!--wrapper-->

	<!-- Bootstrap core JavaScript-->
	<script src="<?= base_url() ?>dashtreme-master/assets/js/jquery.min.js"></script>
	<script src="<?= base_url() ?>dashtreme-master/assets/js/popper.min.js"></script>
	<script src="<?= base_url() ?>dashtreme-master/assets/js/bootstrap.min.js"></script>

	<!-- sidebar-menu js -->
	<script src="<?= base_url() ?>dashtreme-master/assets/js/sidebar-menu.js"></script>

	<!-- Custom scripts -->
	<script src="<?= base_url() ?>dashtreme-master/assets/js/app-script.js"></script>

</body>

</html>
