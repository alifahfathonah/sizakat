<?php
include "config/koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIZAKAT</title>
    <meta name="description" content="">
    <meta name="author" content="rometheme.net">  
	
	<!-- ==============================================
	Favicons
	=============================================== -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/rsia.jpg">
	<link rel="apple-touch-icon" sizes="72x72" href="images/rsia.jpg">
	<link rel="apple-touch-icon" sizes="114x114" href="images/rsia.jpg">
	
	<!-- ==============================================
	CSS VENDOR
	=============================================== -->
	<link rel="stylesheet" type="text/css" href="css/vendor/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="css/vendor/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/vendor/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="css/vendor/owl.theme.default.min.css">
	<link rel="stylesheet" type="text/css" href="css/vendor/magnific-popup.css">
	<link rel="stylesheet" type="text/css" href="css/vendor/animate.min.css">
	
	<!-- ==============================================
	Custom Stylesheet
	=============================================== -->
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	
    <script src="js/vendor/modernizr.min.js"></script>

</head>

<body data-spy="scroll" data-target="#navbar-example" text="black">

	<!-- LOAD PAGE -->
	<div class="animationload">
		<div class="loader"></div>
	</div>
	
	<!-- BACK TO TOP SECTION -->
	<a href="#0" class="cd-top cd-is-visible cd-fade-out">Top</a>

	<!-- HEADER -->
    <div class="header header-1">

    	<!-- TOPBAR -->
    	<div class="topbar d-none d-md-block">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-sm-4 col-md-2 col-lg-4">
						<p class="mb-0"><em>BAZNAS Tanah Laut</em></p>
					</div>
					<div class="col-sm-8 col-md-10 col-lg-8">
						<div class="info pull-right">
							
							<div class="info-item">
								<i class="fa fa-phone"></i> Call Us : (0512) 2021002
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- NAVBAR SECTION -->
		<div class="navbar-main">
			<div class="container">
			    <nav id="navbar-main" class="navbar navbar-expand-lg">
			        <a class="navbar-brand" href="index.php">
						<img src="images/baznas_tala_header.png" alt="" style="width: 60px;
    height: 35px;" />
					</a>
			        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			            <span class="navbar-toggler-icon"></span>
			        </button>
			        <div class="collapse navbar-collapse" id="navbarNavDropdown">
			            <ul class="navbar-nav">
			                <li class="nav-item dropdown">
			                <li class="nav-item">
			                    <a class="nav-link" href="index.php">Home</a>
			                </li>
			                <li class="nav-item dropdown">
			                	<a class="nav-link dropdown-toggle" href="profile_baznas.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						          Program BAZNAS TALA
						        </a>
						        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
						          <a class="dropdown-item" href="tala_cerdas.php">Program TALA Cerdas</a>
						          <a class="dropdown-item" href="tala_makmur.php">Program TALA Makmur</a>
						          <a class="dropdown-item" href="tala_peduli.php">Program TALA Peduli</a>
						          <a class="dropdown-item" href="tala_sehat.php">Program TALA Sehat</a>
						          <a class="dropdown-item" href="tala_taqwa.php">Program TALA Taqwa</a>
						        </div>
						     </li>
			                <li class="nav-item dropdown">
			                	<a class="nav-link dropdown-toggle" href="profile_baznas.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						          Profil BAZNAS TALA
						        </a>
						        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
						          <a class="dropdown-item" href="profile_baznas.php">Profil Kami</a>
						          <a class="dropdown-item" href="visi_misi.php">Visi & Misi</a>
						          <a class="dropdown-item" href="struktur_organisasi.php">Struktur Organisasi</a>
						        </div>
						    </li>
						    <li class="nav-item dropdown">
			                	<a class="nav-link dropdown-toggle" href="sop.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						          Aturan dan Ketentuan
						        </a>
						        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
						          <a class="dropdown-item" href="sop.php">SOP Penerimaan ZIS</a>
						          <a class="dropdown-item" href="pengelolaan_zis.php">Pengelolaan ZIS</a>
						          <a class="dropdown-item" href="syarat_pengajuan_bantuan.php">Syarat Pengajuan Bantuan/Santunan</a>
						        </div>
						      </li>
			          		<li class="nav-item">
			                    <a class="nav-link active" href="pengertian_zakat.php">Tentang Zakat</a>
			                </li>
			                <li class="nav-item">
			                    <a class="nav-link" href="login">Login</a>
			                </li>
			            </ul>
			        </div>
			    </nav> <!-- -->
			</div>
		</div>

    </div>

	<!-- BANNER -->
    <div class="section banner-page" data-background="images/baznas_tala.jpg">
		<div class="content-wrap pos-relative">
			<div class="d-flex justify-content-center bd-highlight mb-3">
				<div class="title-page" style="text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000">Sistem Infomasi Badan Amil Zakat Nasional Kabupaten Tanah Laut</div>
			</div>
			<div class="d-flex justify-content-center bd-highlight mb-3">
			    <nav aria-label="breadcrumb">
				  <ol class="breadcrumb ">
				   
				  </ol>
				</nav>
		  	</div>
		</div>
	</div>		

	<!-- CONTENT -->
	<div class="section">
		<div class="content-wrap">
			<div class="container">
				<div class="row">

					<div class="col-sm-12 col-md-12 col-lg-8">
						
						<h2 class="section-heading text-left mb-4">
							Zakat Perusahaan
						</h2>
						<p class="subheading" style="color: black;" align="justify">Para ulama peserta Muktamar Internasional Pertama tentang zakat di Kuwait (29 Rajab 1404 H), menganalogikan zakat perusahaan kepada zakat perdagangan. Hal ini dikarenakan, jika dipandang dari aspek legal dan ekonomi, kegiatan sebuah perusahaan intinya berpijak pada kegiatan trading atau perdagangan.</p>
						<p class="subheading" style="color: black;" align="justify">Oleh karena itu, secara umum pola pembayaran dan penghitungan zakat perusahaan dianggap sama dengan zakat perdagangan begitu pun dengan kadar nisabnya setara dengan 85 gram emas.</p>
						<p class="subheading" style="color: black;" align="justify">Sebuah perusahaan biasanya memiliki harta yang tidak akan terlepas dari tiga bentuk: Pertama, harta dalam bentuk barang. baik yang berupa sarana dan prasarana maupun yang merupakan komoditas perdagangan. Kedua, harta dalam bentuk uang tunai yang biasanya disimpan di bank-bank. Ketiga, harta dalam bentuk piutang.</p>
						<p class="subheading" style="color: black;" align="justify">Maka yang dimaksud dengan harta perusahaan yang harus dizakati adalah ketiga bentuk harta tersebut dikurangi harta dalam bentuk sarana dan prasarana serta kewajiban mendesak lainnya, seperti utang yang jatuh tempo atau yang harus dibayar saat itu juga.</p>
						<p class="subheading" style="color: black;" align="justify">Abu Ubaid (wafat tahun 224 H) di dalam Al-Amwaal menyatakan bahwa;</p>
						<p class="subheading" style="color: black;" align="justify">"Apabila engkau telah sampai batas waktu membayar zakat (yaitu usaha engkau telah berlangsung selama satu tahun, misalnya usaha dimulai pada bulan Zulhijjah 1421 H dan telah sampai pada Zulhijjah 1422 H), perhatikanlah apa yang engkau miliki, baik berupa uang (kas) ataupun barang yang siap diperdagangkan (persediaan), kemudian nilailah dengan nilai uang dan hitunglah utang-utang engkau atas apa yang engkau miliki".</p>
						<p class="subheading" style="color: black;" align="justify">Dari penjelasan di atas, maka dapatlah diketahui bahwa pola perhitungan zakat perusahaan didasarkan pada laporan keuangan (neraca) dengan mengurangkan kewajiban atas asset lancar, atau seluruh harta (di luar sarana dan prasarana) ditambah keuntungan, dikurangi pembayaran utang dan kewajiban lainnya, lalu dikeluarkan 2,5 persen sebagai zakatnya. Sementara pendapat lain menyatakan bahwa yang wajib dikeluarkan zakatnya itu hanyalah keuntungannya saja.</p>
						<p class="subheading" style="color: black;" align="justify">Cara menghitung zakat perusahaan:</p>
						<p class="subheading" style="color: black;" align="justify">2,5% x (aset lancar – hutang jangka pendek)</p>
						<p class="subheading" style="color: black;" align="justify">Contoh:

Perusahaan A memiliki aset usaha senilai Rp2.000.000.000,- dengan hutang jangka pendek senilai Rp500.000.000,-. Jika harga emas saat ini Rp622.000,-/gram, maka nishab zakat senilai Rp52.870.000,-. Sehingga Perusahaan A sudah wajib zakat atas perusahaannya. Zakat perusahaan yang perlu ditunaikan sebesar 2,5% x (Rp2.000.000.000,- - Rp500.000.000,-) = Rp37.500.000,-.</p>
					</div>

					<div class="col-sm-12 col-md-12 col-lg-4">
						<h2 class="section-heading text-left mb-5">
							Detail Kontak
						</h2>
						<!-- Item 1 -->
						<div class="rs-icon-info-2">
							<div class="info-icon">
								<i class="fa fa-map-marker"></i>
							</div>
							<div class="body-text">
								<h4>Alamat</h4>
								<p>Jalan A. Yani, Angsau, Pelaihari, Kabupaten Tanah Laut Kalimantan Selatan 70812</p>
							</div>
						</div>
						<!-- Item 2 -->
						<div class="rs-icon-info-2">
							<div class="info-icon">
								<i class="fa fa-phone"></i>
							</div>
							<div class="body-text">
								<h4>Phone</h4>
								<p>(0512) 2021002 <br></p>
							</div>
						</div>
						<!-- Item 3 -->
						

					</div>
					
				</div>
			</div>
		</div>
		
		<!-- MAPS -->
		

	</div>
	
	<!-- CTA -->


	<!-- FOOTER SECTION -->
	<div class="footer">
		<div class="content-wrap pb-0">
			<div class="container">
				
				<div class="row">
					<div class="col-sm-6 col-md-6 col-lg-3">
						<!-- <div class="footer-item">
							<img src="images/logo2.png" alt="logo bottom" class="logo-bottom">
							<div class="spacer-30"></div>
							<p>RSU Borneo Citra Medika Tanah Laut - Memberikan Kenyamanan Pelayanan Kesehatan Ibu, Anak, Keluarga, dan Masyarakat Khususnya di Kabupaten Tanah Laut.</p>
							
						</div> -->
					</div>	

					

								

					<div class="col-sm-6 col-md-6 col-lg-3">
						<div class="footer-item">
							<div class="footer-title">
								INFO KONTAK
							</div>
							
							<ul class="list-info">
								<li>
									<div class="info-icon">
										<span class="fa fa-map-marker"></span>
									</div>
									<div class="info-text">Jalan A. Yani, Angsau, Pelaihari, Kabupaten Tanah Laut Kalimantan Selatan 70812</div> </li>
								<li>
									<div class="info-icon">
										<span class="fa fa-phone"></span>
									</div>
									<div class="info-text">(0512) 2021002</div>
								</li>
								
								<li>
									<div class="info-icon">
										<span class="fa fa-clock-o"></span>
									</div>
									<div class="info-text">7 x 24 Jam</div>
								</li>
							</ul>

						</div>
					</div>

				</div>
			</div>
		</div>
		
		<div class="fcopy">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-12">
						<p class="ftex">Copyright 2019 &copy; <span class="color-primary">BAZNAS Tanah Laut</span><span class="color-primary"></span></p> 
					</div>
				</div>
			</div>
		</div>
		
	</div>

	
	<!-- JS VENDOR -->
	        <script src="js/jquery.2.1.1.min.js"></script>

	<script src="js/vendor/jquery.min.js"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/vendor/owl.carousel.js"></script>
	<script src="js/vendor/jquery.magnific-popup.min.js"></script>
	<script src="js/vendor/isotope.pkgd.min.js"></script>
	<script src="js/vendor/imagesloaded.pkgd.min.js"></script>

	<!-- SENDMAIL -->
	<script src="js/vendor/validator.min.js"></script>
	<script src="js/vendor/form-scripts.js"></script>

	<!-- GOOGLEMAP -->
	<script src="js/googlemap-setting.js"></script>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-CE0deH3Jhj6GN4YvdCFZS7DpbXexzGU&callback=initMap"> </script>

	<script src="js/script.js"></script>

</body>
</html>