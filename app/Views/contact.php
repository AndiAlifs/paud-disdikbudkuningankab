<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>paud-disdikbudKab.Kuningan</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="" />
	<meta name="author" content="http://webthemez.com" />
	<!-- css -->
	<link href="<?= base_url() ?>/template/css/bootstrap.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="<?= base_url() ?>/template/simple-line-icons/css/simple-line-icons.css">
	<link href="<?= base_url() ?>/template/css/fancybox/jquery.fancybox.css" rel="stylesheet">
	<link href="<?= base_url() ?>/template/css/flexslider.css" rel="stylesheet" />
	<link href="<?= base_url() ?>/template/js/owl-carousel/owl.carousel.css" rel="stylesheet">
	<link href="<?= base_url() ?>/template/css/style.css" rel="stylesheet" />



</head>

<body>
	<div id="wrapper" class="home-page">
		<!-- start header -->
		<header>
			<div class="navbar navbar-default navbar-static-top">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<img src="<?= base_url() ?>/template/img/logo-paud.png" alt="logo" width="100px;" length="200px;" /></a>

					</div>
					<div class="navbar-collapse collapse ">
						<ul class="nav navbar-nav">
							<li><a href="<?= site_url('home') ?>">BERANDA</a></li>
							<li class="dropdown">
								<a href="#" data-toggle="dropdown" class="dropdown-toggle">TENTANG <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="https://disdikbud.kuningankab.go.id/">DISDIKBUD</a></li>
									<li><a href="<?= site_url('aboutpaud') ?>">PAUD</a></li>
									<li><a href="<?= site_url('abouttim') ?>">TIM PERANCANG</a></li>

								</ul>
							</li>
							<li><a href="https://disdikbud.kuningankab.go.id/user/login">FORMULIR</a></li>
							<li><a href="<?= site_url('persyaratan') ?>">PERSYARATAN</a></li>

							<li class="active"><a href="<?= site_url('contact') ?>">KOTAK SARAN</a></li>
						</ul>
					</div>
				</div>
			</div>
		</header>
		<!-- end header -->
		<section id="inner-headline">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h2 class="pageTitle">Kotak Saran</h2>
					</div>
				</div>
			</div>
		</section>
		<section id="content">

			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div>
							<p>Berikan kritik, saran , dan pesan anda untuk halaman website ini ataupun untuk penyebaran informasi terkait Pendidikan Anak Usia Dini di Kabupaten Kuningan.</p>
						</div>
						<br>
					</div>
				</div>
				<div class="row">
					<div class="col-md-5">
						<!-- Form itself -->
						<form name="sentMessage" id="contactForm" novalidate>
							<h3>Isilah Formulir Berikut</h3>
							<div class="control-group">
								<div class="controls">
									<input type="text" class="form-control" placeholder="Nama Lengkap" id="name" required data-validation-required-message="Please enter your name" />
									<p class="help-block"></p>
								</div>
							</div>
							<div class="control-group">
								<div class="controls">
									<input type="email" class="form-control" placeholder="Email" id="email" required data-validation-required-message="Please enter your email" />
								</div>
							</div>

							<div class="control-group">
								<div class="controls">
									<textarea rows="10" cols="100" class="form-control" placeholder="Pesan" id="message" required data-validation-required-message="Please enter your message" minlength="5" data-validation-minlength-message="Min 5 characters" maxlength="999" style="resize:none"></textarea>
								</div>
							</div>
							<div id="success"> </div> <!-- For success/fail messages -->
							<button type="submit" class="btn btn-primary pull-right">Send</button><br />
						</form>
					</div>
					<div class="col-md-offset-1 col-md-6">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3330.1667301085117!2d108.45927289212399!3d-6.978858056974471!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f16743512727f%3A0xa21d77c5a76b8fe8!2sDinas%20Pendidikan%20dan%20Kebudayaan%20Kabupaten%20Kuningan!5e0!3m2!1sid!2sid!4v1625839772674!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
					</div>
				</div>

		</section>
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<div class="widget">
							<h5 class="widgetheading">Hubungi Kami</h5>
							<address>
								<strong>Dinas Pendidikan dan Kebudayaan
									Kabupaten Kuningan
								</strong><br>
								Jl. Sukamulya No.06 Cigugur - Kuningan 45552<br>
								Telp./Fax : (0232) 875905.
							</address>
							<p>
								<i class="icon-phone"></i> (123) 456-789 - 1255-12584 <br>
								<i class="icon-envelope-alt"></i> Info@disdikbud.kuningankab.go.id
							</p>
						</div>
					</div>

				</div>
			</div>
			<div id="sub-footer">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<div class="copyright">
								<p>
									<span>&copy; copyright by ARS_PROJECT and Template By <span> <a href="https://webthemez.com/tag/free" target="_blank">WebThemez.com.</a>
								</p>
							</div>
						</div>
						<div class="col-lg-6">
							<ul class="social-network">
								<li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
								<li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>
	<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
	<!-- javascript
    ================================================== -->
	<script src="<?= base_url() ?>/template/js/jquery.js"></script>
	<script src="<?= base_url() ?>/template/js/jquery.easing.1.3.js"></script>
	<script src="<?= base_url() ?>/template/js/bootstrap.min.js"></script>
	<script src="<?= base_url() ?>/template/js/jquery.fancybox.pack.js"></script>
	<script src="<?= base_url() ?>/template/js/jquery.fancybox-media.js"></script>
	<script src="<?= base_url() ?>/template/js/portfolio/jquery.quicksand.js"></script>
	<script src="<?= base_url() ?>/template/js/portfolio/setting.js"></script>
	<script src="<?= base_url() ?>/template/js/jquery.flexslider.js"></script>
	<script src="<?= base_url() ?>/template/js/animate.js"></script>
	<script src="<?= base_url() ?>/template/js/custom.js"></script>
	<script src="<?= base_url() ?>/template/js/owl-carousel/owl.carousel.js"></script>
</body>

</html>