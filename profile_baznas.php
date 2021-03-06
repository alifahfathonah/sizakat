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
			                	<a class="nav-link active dropdown-toggle" href="profile_baznas.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						          Profil BAZNAS TALA
						        </a>
						        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
						          <a class="dropdown-item active" href="profile_baznas.php">Profil Kami</a>
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
			                    <a class="nav-link" href="pengertian_zakat.php">Tentang Zakat</a>
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
				<div class="title-page" style="text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000">Profil BAZNAS Tanah Laut</div>
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
							LATAR BELAKANG
						</h2>
						<p class="subheading" style="color: black;" align="justify">Penunaian zakat merupakan kewajiban bagi umat Islam yang mampu sesuai dengan syariat Islam. Zakat merupakan pranata keagamaan yang bertujuan untuk meningkatkan keadilan, kesejahteraan masyarakat, dan penanggulangan kemiskinan.</p>
						<p class="subheading" style="color: black;" align="justify">Syariat zakat diturunkan kepada Rasulullah saw pada tahun kedua hijriyah. Pada masa itu, Rasulullah saw turun tangan dan mengangkat beberapa sahabat sebagai amil zakat yang bertugas menarik zakat dari muzaki, mendatanya di Baitul Maal, dan menyalurkannya kepada mustahik.</p>

						<p class="subheading" style="color: black;" align="justify">Badan Amil Zakat Nasioanal (Baznas) Tanah Laut dibentuk oleh Ditjend Bimas Islam Kementerian Agama RI No. DJ.II/568 tahun 2014, selanjutnya Pimpinan BAZNAS Kabupaten Tanah Laut periode 2016-2021 diangkat berdasarkan SK Bupati Tanah Laut No: 188.45/526-KUM/2016, tgl 3 Mei 2016 dan dilantik pada 30 Mei 2016 di Halaman Kantor Bupati Tanah Laut. BAZNAS Tanah Laut merupakan lembaga Pemerintah nonstruktural yang berbertanggung jawab kepada Ketua BAZNAS Prov. KalSel dan Bupati Tanah Laut. yang secara kelembagaan mempunyai kewenangan untuk melakukan pengumpulan, pendistribusian, dan pendayagunaan zakat secara nasional di Kab. Tanah laut.</p>
						<hr>
						<h2 class="section-heading text-left mb-4">
							LANDASAN KONSTITUSIONAL
						</h2>
						<p class="subheading" style="color: black;" align="justify">1. UURI. No. 23 Th 2011, 25 November 2011 Tentang Pengelolaan Zakat.</p>
						<p class="subheading" style="color: black;" align="justify">2. PPRI. No 14 Th 2014, 14 Februari 2014 tentang Pelaksanaan UURI No 23 tahun 2011 tentang Pengelolaan Zakat.</p>
						<p class="subheading" style="color: black;" align="justify">3.	Inpres No 3 Th 2014, 23 April 2014 tentang optimalisasi Pengumpulan zakat di Kementerian/ Lembaga/Sekretariat Jendral Lembaga Negara, Sekretariat Jenderal Komisi Negara, pemda, BUMN,BUMD melalui Badan Amil Zakat Nasional.</p>
						<p class="subheading" style="color: black;" align="justify">4. SE Mendagri RI Nomor 450.12/3302/SJ tanggal 10 Juni 2014 tentang Optimalisasi Pengumpulan Zakat.</p>
						<p class="subheading" style="color: black;" align="justify">5. Keputusan Ditjend Bimas Islam Nomor DJ.II/568 tahun 2014, 5 juni 2014, tentang Pembentukan Badan Amil Zakat Nasional Kab/Kota se Indonesia.</p>
						<p class="subheading" style="color: black;" align="justify">6. Permenag RI No.52 th 2014 ttg. Syarat & Tatacara Penghitungan Zakat</p>
						<p class="subheading" style="color: black;" align="justify">7. Perbaznas No 1 thn 2016, ttg. Pedoman Penyusunan Rencana Kerja dan Anggaran Tahunan (RKAT).</p>
						<p class="subheading" style="color: black;" align="justify">8. Perbaznas No 2 tahun 2016, ttg. Pembentukan dan Tata kerja Unit Pengumpul Zakat (UPZ).</p>
						<p class="subheading" style="color: black;" align="justify">9. SK Bupati Tanah Laut Nomor: 188.45/526-KUM/2016 ttg Pengangkatan Pimpinan (BAZNAS) Tanah Laut Periode 2016 – 2021</p>
						<p class="subheading" style="color: black;" align="justify">10. Instruksi Bupati Tala No 1 Th 2016, ttg optimalisasi Pengumpulan ZIS SKPD, BMD melalui (BAZNAS) Tala.</p>
						<hr>
						<h2 class="section-heading text-left mb-4">
							LANDASAN SYARI’AH
						</h2>
						<h4 class="text-left mb-4" style="color: black; size: 5px;">
							Al-Qur’an
						</h4>
						<p class="subheading" style="color: black;" align="justify">1. “Ambillah zakat dari sebagian harta mereka, dengan zakat itu kamu membersihkan dan mensucikan mereka dan mendo’alah untuk mereka. Sesungguh- nya do’a kamu itu (menjadi) ketentraman jiwa bagi mereka, dan Allah Maha Mendengar lagi Maha Mengetahui.” *QS At-Taubah (9) ayat 103]</p>
						<p class="subheading" style="color: black;" align="justify">2. Ada 29 ayat dalam Al-Qur’an Yang menyatakan kata zakat dirangkai dengan kata salat, antara lain: dalam QS Al baqarah ayat (43). Dan lainnya.</p>
						<h4 class="text-left mb-4" style="color: black; size: 5px;">
							Al-Hadits
						</h4>
						<p class="subheading" style="color: black;" align="justify">1. “Dari Yazid bin Amru al-Ma’afiri dari orang yang pernah mendengar ’Uqbah bin ‘Amir al Juhani, ia berkata, “Rasulullah telah mengutusku sebagai petugas zakat. Lalu saya meminta izin kepadanya bahwa kami nantinya akan memakan sebagian dari harta itu. Lalu beliau pun memberikan izin kepada kami.” (HR. Ahmad)</p>
						<p class="subheading" style="color: black;" align="justify">2. Ada bebrapa hadits tentang zakat yang diriwayatkan Bukhari-Muslim : “Sesungguhnya Allah telah mewajibkan berbuat ihsan (profesional) atas segala sesuatu.” (HR. Muslim)</p>
						<h4 class="text-left mb-4" style="color: black; size: 5px;">
							Fikih Zakat
						</h4>
						<p class="subheading" style="color: black;" align="justify">1. “Kewajiban zakat merupakan sarana paling utama untuk mengatasi kesenjangan antara yang kaya dengan yang miskin dan mewujudkan jaminan sosial dalam Islam.” (Dr. Wahbah Az-Zuhaili dalam Fiqhul Islamy, Jilid II hal 732)</p>
						<p class="subheading" style="color: black;" align="justify">2. Rasulullah bersabda: “Bersihkanlah hartamu dengan zakat dan obatilah sakit-sakit kalian dengan sadaqah dan tolaklah olehmu bencana-bencana itu dengan do’a “. (HR. Khatib dari Ibnu Mas’ud)</p>
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