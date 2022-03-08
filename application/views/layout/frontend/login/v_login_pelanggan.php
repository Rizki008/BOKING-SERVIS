<div class="bradcam_area breadcam_bg_2">
	<h3>Login</h3>
</div>
<section class="contact-section">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2 class="contact-title">Login</h2>
			</div>
			<div class="col-lg-8">
				<?php

				echo validation_errors('<div class="alert alert-warning alert-dismissible">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
<h5><i class="icon fas fa-exclamation-triangle"></i> Coba Lagi</h5>', '</div>');

				if ($this->session->flashdata('error')) {
					echo '<div class="alert alert-danger alert-dismissible">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
<h5><i class="icon fas fa-ban"></i> Gagal</h5>';
					echo $this->session->flashdata('error');
					echo '</div>';
				}

				if ($this->session->flashdata('pesan')) {
					echo '<div class="alert alert-success alert-dismissible">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
<h5><i class="icon fas fa-check"></i> Sukses</h5>';
					echo $this->session->flashdata('pesan');
					echo '</div>';
				}
				?>
				<form id="contactform" class="form-contact contact_form" id="contactForm" novalidate="novalidate" action="<?= base_url('pelanggan/login') ?>" name="contactform" method="post">
					<fieldset class="row row-fluid">
						<div class="col-sm-6">
							<div class="form-group">
								<input type="text" name="nama" value="<?= set_value('nama') ?>" id="first_name" class="form-control " placeholder="Your Name">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<input type="password" name="password" value="<?= set_value('password') ?>" id="last_name" class="form-control valid" placeholder="Password">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<button type="submit" value="SEND" id="submit" class="button button-contactForm boxed-btn">Login</button>
								<a href="<?= base_url('pelanggan/register') ?>" class="button button-contactForm boxed-btn">Register</a>
							</div>
						</div>
					</fieldset>
				</form>
			</div>

			<div class="col-lg-3 offset-lg-1">
				<div class="media contact-info">
					<span class="contact-info__icon"><i class="ti-home"></i></span>
					<div class="media-body">
						<h3>Jl. Raya Jalaksana, Kec Jalaksana</h3>
						<p>Kuningan 45554</p>
					</div>
				</div>
				<div class="media contact-info">
					<span class="contact-info__icon"><i class="ti-tablet"></i></span>
					<div class="media-body">
						<h3>085314459134</h3>
						<p>Buka Jam 07.00-21.00</p>
					</div>
				</div>
				<div class="media contact-info">
					<span class="contact-info__icon"><i class="ti-email"></i></span>
					<div class="media-body">
						<h3>solusi.laptop@yahoo.co.id</h3>
						<p>Hubungi Kami Lewat Email</p>
					</div>
				</div>
			</div>
		</div>
</section>
