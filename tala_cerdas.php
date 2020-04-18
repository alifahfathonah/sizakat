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
	<!-- newww -->

	<link rel='stylesheet' id='dwqa-style-css'  href='https://baznastala.or.id/content/plugins/dw-question-answer/templates/assets/css/style.css' type='text/css' media='all' />
<link rel='stylesheet' id='dwqa-rtl-css'  href='https://baznastala.or.id/content/plugins/dw-question-answer/templates/assets/css/rtl.css' type='text/css' media='all' />
<link rel='stylesheet' id='rs-plugin-settings-css'  href='https://baznastala.or.id/content/plugins/revslider/public/assets/css/settings.css' type='text/css' media='all' />
<style id='rs-plugin-settings-inline-css' type='text/css'>
#rs-demo-id {}
</style>
<link rel='stylesheet' id='js_composer_front-css'  href='https://baznastala.or.id/content/plugins/js_composer/assets/css/js_composer.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='charity-zozo-main-min-style-css'  href='https://baznastala.or.id/content/themes/charity/css/charity-main-min.css' type='text/css' media='all' />
<link rel='stylesheet' id='charity-zozo-theme-style-css'  href='https://baznastala.or.id/content/themes/charity/style.css' type='text/css' media='all' />
<link rel='stylesheet' id='charity-zozo-color-scheme-style-css'  href='https://baznastala.or.id/content/themes/charity/color-schemes/charity-grey.css' type='text/css' media='all' />
<link rel='stylesheet' id='charity-zozo-custom-css'  href='//baznastala.or.id/content/uploads/charity/theme_1.css' type='text/css' media='all' />
<style id='charity-zozo-custom-inline-css' type='text/css'>
#main-wrapper #content {  padding-bottom: 0; }

</style>
<link rel='stylesheet' id='google-fonts-css'  href='//fonts.googleapis.com/css?family=Hind%3A300%2C400%2C500%2C600%2C700%7CRaleway%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900%2C100italic%2C200italic%2C300italic%2C400italic%2C500italic%2C600italic%2C700italic%2C800italic%2C900italic%26subset%3Dlatin%2Clatin-ext' type='text/css' media='all' />
<link rel='stylesheet' id='zozo-shortcodes-css'  href='https://baznastala.or.id/content/plugins/charitythemes-core/shortcodes.css' type='text/css' media='all' />
<link rel='stylesheet' id='charity-zozo-child-style-css'  href='https://baznastala.or.id/content/themes/charity-child/style.css' type='text/css' media='all' />
<link rel='stylesheet' id='redux-google-fonts-zozo_options-css'  href='https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A200%2C300%2C400%2C600%2C700%2C900%2C200italic%2C300italic%2C400italic%2C600italic%2C700italic%2C900italic%7CLora%3A400%2C700%2C400italic%2C700italic%7CPoppins%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900%2C100italic%2C200italic%2C300italic%2C400italic%2C500italic%2C600italic%2C700italic%2C800italic%2C900italic' type='text/css' media='all' />
<script type='text/javascript'>
/* <![CDATA[ */
var charity_js_vars = {"zozo_template_uri":"https:\/\/baznastala.or.id\/content\/themes\/charity","isRTL":"false","isOriginLeft":"true","zozo_sticky_height":"60px","zozo_sticky_height_alt":"60px","zozo_ajax_url":"https:\/\/baznastala.or.id\/site\/wp-admin\/admin-ajax.php","zozo_back_menu":"Back","zozo_CounterYears":"Years","zozo_CounterMonths":"Months","zozo_CounterWeeks":"Weeks","zozo_CounterDays":"Days","zozo_CounterHours":"Hours","zozo_CounterMins":"Mins","zozo_CounterSecs":"Secs","zozo_CounterYear":"Year","zozo_CounterMonth":"Month","zozo_CounterWeek":"Week","zozo_CounterDay":"Day","zozo_CounterHour":"Hour","zozo_CounterMin":"Min","zozo_CounterSec":"Sec"};
/* ]]> */
</script>
<script type='text/javascript' src='https://baznastala.or.id/site/wp-includes/js/jquery/jquery.js'></script>
<script type='text/javascript' src='https://baznastala.or.id/site/wp-includes/js/jquery/jquery-migrate.min.js'></script>
<script type='text/javascript' src='https://baznastala.or.id/content/plugins/revslider/public/assets/js/jquery.themepunch.tools.min.js'></script>
<script type='text/javascript' src='https://baznastala.or.id/content/plugins/revslider/public/assets/js/jquery.themepunch.revolution.min.js'></script>
<script type='text/javascript' src='https://baznastala.or.id/content/themes/charity/js/plugins/charity-theme-init.min.js'></script>
<link rel='https://api.w.org/' href='https://baznastala.or.id/wp-json/' />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://baznastala.or.id/site/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://baznastala.or.id/site/wp-includes/wlwmanifest.xml" /> 






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
			                <li class="nav-item">
			                    <a class="nav-link" href="index.php">Home</a>
			                </li>
			                <li class="nav-item dropdown">
			                	<a class="nav-link active dropdown-toggle" href="profile_baznas.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						          Program BAZNAS TALA
						        </a>
						        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
						          <a class="dropdown-item active" href="tala_cerdas.php">Program TALA Cerdas</a>
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
				<div class="title-page" style="text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000">Visi & Misi BAZNAS Tanah Laut</div>
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
<!-- #header -->
		<div id="section-top" class="zozo-top-anchor"></div>
	<div class="zozo-main-wrapper">
	<div id="main" class="main-section">

		<!-- ============ Page Header ============ -->
		<div data-zozo-parallax="2" data-zozo-parallax-position="left top" class="page-title-section page-titletype-default page-titleskin-default page-titlealign-default zozo-parallax">
	
		
	<div class="page-title-wrapper clearfix">
		<div class="container">
			<div class="page-title-container">
						<div class="page-title-captions">
									<h1 class="entry-title">Program TALA Cerdas</h1>													
							</div>
		
							<div class="page-title-breadcrumbs">
					<div id="breadcrumb" class="breadcrumb zozo-breadcrumbs"><a href="https://baznastala.or.id/">Home</a>  <span class="current"></span></div>				</div>
						</div>
		</div>
	</div>
	
</div>
<!-- ============ Page Header Ends ============ --><div class="container">
	<div id="main-wrapper" class="zozo-row row">
		<div id="single-sidebar-container" class="single-sidebar-container main-col-full">
			<div class="zozo-row row">
				<div id="primary" class="content-area content-col-small">
					<div id="content" class="site-content">
																			<h4>Untuk mutahik yang memerlukan bantuan pendidikan: beasiswa, pendukung kelengkapan pendidikan dan sejenisnya.</h4><br>
																		<div class="zozo-portfolio-grid-wrapper zozo-isotope-grid-system clearfix"><div class="zozo-isotope-wrapper"><div id="zozo_portfolio_7" class="zozo-portfolio zozo-isotope-layout default-grid-style portfolio-cols-4" data-columns="4" data-gutter="30" data-type="masonry" data-layout="fitRows">
									<div id="portfolio-2494" class="portfolio-item isotope-post post-iso-w3 post-iso-h3 post-2494 zozo_portfolio type-zozo_portfolio status-publish has-post-thumbnail hentry portfolio_categories-program-tala-cerdas">
									<div class="post-inside-wrapper margin-top-30 animate_when_almost_visible zoom-in" data-delay="300">

										<div class="portfolio-content">
											<div class="portfolio-image-overlay-wrapper"><div class="portfolio-img zoomin"><img class="img-responsive" src="https://baznastala.or.id/content/uploads/2020/02/TCBM.jpg" width="1924" height="1920" alt="TALA CERDAS &#8211; BANTUAN DANA NON BEASISWA" /></div><div class="portfolio-overlay default"></div></div><div class="portfolio-mask overlay-mask position-center"><div class="portfolio-title"><h4><a title="TALA CERDAS &#8211; BANTUAN DANA NON BEASISWA" href="https://baznastala.or.id/portfolio/tala-cerdas-bantuan-dana-non-beasiswa/">TALA CERDAS &#8211; BANTUAN DANA NON BEASISWA</a></h4><p>BANTUAN DANA NON BEASISWA KEPADA</p></div><ul class="overlay-buttons fade-up"><li><a href="https://baznastala.or.id/content/uploads/2020/02/TCBM.jpg" class="pf-icon-zoom" data-rel="prettyPhoto[gallery7]" title="TALA CERDAS &#8211; BANTUAN DANA NON BEASISWA"><i class="simple-icon icon-size-fullscreen"></i></a></li><li><a href="https://baznastala.or.id/portfolio/tala-cerdas-bantuan-dana-non-beasiswa/" class="pf-icon-link" title="TALA CERDAS &#8211; BANTUAN DANA NON BEASISWA"><i class="simple-icon icon-share-alt"></i></a></li></ul></div>
										</div>

									</div>
									</div><!-- #post -->

								
									<div id="portfolio-1725" class="portfolio-item isotope-post post-iso-w3 post-iso-h3 post-1725 zozo_portfolio type-zozo_portfolio status-publish has-post-thumbnail hentry portfolio_categories-program-tala-cerdas">
									<div class="post-inside-wrapper margin-top-30 animate_when_almost_visible zoom-in" data-delay="300">

										<div class="portfolio-content">
											<div class="portfolio-image-overlay-wrapper"><div class="portfolio-img zoomin"><img class="img-responsive" src="https://baznastala.or.id/content/uploads/2017/11/IMG-20171113-WA0014.jpg" width="1024" height="768" alt="Bantuan Biaya Pendidikan" /></div><div class="portfolio-overlay default"></div></div><div class="portfolio-mask overlay-mask position-center"><div class="portfolio-title"><h4><a title="Bantuan Biaya Pendidikan" href="https://baznastala.or.id/portfolio/bantuan-biaya-pendidikan/">Bantuan Biaya Pendidikan</a></h4><p>Bantuan Biaya Pendidikan atas nama</p></div><ul class="overlay-buttons fade-up"><li><a href="https://baznastala.or.id/content/uploads/2017/11/IMG-20171113-WA0014.jpg" class="pf-icon-zoom" data-rel="prettyPhoto[gallery7]" title="Bantuan Biaya Pendidikan"><i class="simple-icon icon-size-fullscreen"></i></a></li><li><a href="https://baznastala.or.id/portfolio/bantuan-biaya-pendidikan/" class="pf-icon-link" title="Bantuan Biaya Pendidikan"><i class="simple-icon icon-share-alt"></i></a></li></ul></div>
										</div>

									</div>
									</div><!-- #post -->

								
									<div id="portfolio-97" class="portfolio-item isotope-post post-iso-w3 post-iso-h3 post-97 zozo_portfolio type-zozo_portfolio status-publish has-post-thumbnail hentry portfolio_categories-program-tala-cerdas">
									<div class="post-inside-wrapper margin-top-30 animate_when_almost_visible zoom-in" data-delay="300">

										<div class="portfolio-content">
											<div class="portfolio-image-overlay-wrapper"><div class="portfolio-img zoomin"><img class="img-responsive" src="https://baznastala.or.id/content/uploads/2017/03/Bantuan-Paket-Sekolah-Utk-Anak-Panti-Asuhan-Total-Rp-137-Jt.jpg" width="1365" height="768" alt="Bantuan Paket Sekolah Untuk Anak Panti Asuhan" /></div><div class="portfolio-overlay default"></div></div><div class="portfolio-mask overlay-mask position-center"><div class="portfolio-title"><h4><a title="Bantuan Paket Sekolah Untuk Anak Panti Asuhan" href="https://baznastala.or.id/portfolio/bantuan-paket-sekolah-untuk-anak-panti-asuhan/">Bantuan Paket Sekolah Untuk Anak Panti Asuhan</a></h4><p>Bantuan Paket Sekolah Untuk Anak</p></div><ul class="overlay-buttons fade-up"><li><a href="https://baznastala.or.id/content/uploads/2017/03/Bantuan-Paket-Sekolah-Utk-Anak-Panti-Asuhan-Total-Rp-137-Jt.jpg" class="pf-icon-zoom" data-rel="prettyPhoto[gallery7]" title="Bantuan Paket Sekolah Untuk Anak Panti Asuhan"><i class="simple-icon icon-size-fullscreen"></i></a></li><li><a href="https://baznastala.or.id/portfolio/bantuan-paket-sekolah-untuk-anak-panti-asuhan/" class="pf-icon-link" title="Bantuan Paket Sekolah Untuk Anak Panti Asuhan"><i class="simple-icon icon-share-alt"></i></a></li></ul></div>
										</div>

									</div>
									</div><!-- #post -->

								
									<div id="portfolio-1409" class="portfolio-item isotope-post post-iso-w3 post-iso-h3 post-1409 zozo_portfolio type-zozo_portfolio status-publish has-post-thumbnail hentry portfolio_categories-program-tala-cerdas">
									<div class="post-inside-wrapper margin-top-30 animate_when_almost_visible zoom-in" data-delay="300">

										<div class="portfolio-content">
											<div class="portfolio-image-overlay-wrapper"><div class="portfolio-img zoomin"><img class="img-responsive" src="https://baznastala.or.id/content/uploads/2017/10/Bantuan-Pendidikan-Santri-Syuhada.jpg" width="1280" height="768" alt="Bantuan Pendidikan Santri Syuhada" /></div><div class="portfolio-overlay default"></div></div><div class="portfolio-mask overlay-mask position-center"><div class="portfolio-title"><h4><a title="Bantuan Pendidikan Santri Syuhada" href="https://baznastala.or.id/portfolio/bantuan-pendidikan-santri-syuhada/">Bantuan Pendidikan Santri Syuhada</a></h4><p></p></div><ul class="overlay-buttons fade-up"><li><a href="https://baznastala.or.id/content/uploads/2017/10/Bantuan-Pendidikan-Santri-Syuhada.jpg" class="pf-icon-zoom" data-rel="prettyPhoto[gallery7]" title="Bantuan Pendidikan Santri Syuhada"><i class="simple-icon icon-size-fullscreen"></i></a></li><li><a href="https://baznastala.or.id/portfolio/bantuan-pendidikan-santri-syuhada/" class="pf-icon-link" title="Bantuan Pendidikan Santri Syuhada"><i class="simple-icon icon-share-alt"></i></a></li></ul></div>
										</div>

									</div>
									</div><!-- #post -->

								
									<div id="portfolio-1407" class="portfolio-item isotope-post post-iso-w3 post-iso-h3 post-1407 zozo_portfolio type-zozo_portfolio status-publish has-post-thumbnail hentry portfolio_categories-program-tala-cerdas">
									<div class="post-inside-wrapper margin-top-30 animate_when_almost_visible zoom-in" data-delay="300">

										<div class="portfolio-content">
											<div class="portfolio-image-overlay-wrapper"><div class="portfolio-img zoomin"><img class="img-responsive" src="https://baznastala.or.id/content/uploads/2017/10/Bantuan-Pendidikan-an.-Erik-Y-Total-Rp-15-Jt.jpg" width="1024" height="768" alt="Bantuan Pendidikan an. Erik Y." /></div><div class="portfolio-overlay default"></div></div><div class="portfolio-mask overlay-mask position-center"><div class="portfolio-title"><h4><a title="Bantuan Pendidikan an. Erik Y." href="https://baznastala.or.id/portfolio/bantuan-pendidikan-an-erik-y/">Bantuan Pendidikan an. Erik Y.</a></h4><p>Bantuan Pendidikan an. Erik Y.</p></div><ul class="overlay-buttons fade-up"><li><a href="https://baznastala.or.id/content/uploads/2017/10/Bantuan-Pendidikan-an.-Erik-Y-Total-Rp-15-Jt.jpg" class="pf-icon-zoom" data-rel="prettyPhoto[gallery7]" title="Bantuan Pendidikan an. Erik Y."><i class="simple-icon icon-size-fullscreen"></i></a></li><li><a href="https://baznastala.or.id/portfolio/bantuan-pendidikan-an-erik-y/" class="pf-icon-link" title="Bantuan Pendidikan an. Erik Y."><i class="simple-icon icon-share-alt"></i></a></li></ul></div>
										</div>

									</div>
									</div><!-- #post -->

								
									<div id="portfolio-110" class="portfolio-item isotope-post post-iso-w3 post-iso-h3 post-110 zozo_portfolio type-zozo_portfolio status-publish has-post-thumbnail hentry portfolio_categories-program-tala-cerdas">
									<div class="post-inside-wrapper margin-top-30 animate_when_almost_visible zoom-in" data-delay="300">

										<div class="portfolio-content">
											<div class="portfolio-image-overlay-wrapper"><div class="portfolio-img zoomin"><img class="img-responsive" src="https://baznastala.or.id/content/uploads/2017/03/Bantuan-Biaya-Pend.-Siswa-MIN-2-Plh-Total-Rp-16-Jt4.jpg" width="1152" height="768" alt="Bantuan Biaya Pend. Siswa MIN 2 Plh" /></div><div class="portfolio-overlay default"></div></div><div class="portfolio-mask overlay-mask position-center"><div class="portfolio-title"><h4><a title="Bantuan Biaya Pend. Siswa MIN 2 Plh" href="https://baznastala.or.id/portfolio/bantuan-biaya-pend-siswa-min-2-plh/">Bantuan Biaya Pend. Siswa MIN 2 Plh</a></h4><p>Bantuan Biaya Pend. Siswa MIN</p></div><ul class="overlay-buttons fade-up"><li><a href="https://baznastala.or.id/content/uploads/2017/03/Bantuan-Biaya-Pend.-Siswa-MIN-2-Plh-Total-Rp-16-Jt4.jpg" class="pf-icon-zoom" data-rel="prettyPhoto[gallery7]" title="Bantuan Biaya Pend. Siswa MIN 2 Plh"><i class="simple-icon icon-size-fullscreen"></i></a></li><li><a href="https://baznastala.or.id/portfolio/bantuan-biaya-pend-siswa-min-2-plh/" class="pf-icon-link" title="Bantuan Biaya Pend. Siswa MIN 2 Plh"><i class="simple-icon icon-share-alt"></i></a></li></ul></div>
										</div>

									</div>
									</div><!-- #post -->

								
									<div id="portfolio-108" class="portfolio-item isotope-post post-iso-w3 post-iso-h3 post-108 zozo_portfolio type-zozo_portfolio status-publish has-post-thumbnail hentry portfolio_categories-program-tala-cerdas">
									<div class="post-inside-wrapper margin-top-30 animate_when_almost_visible zoom-in" data-delay="300">

										<div class="portfolio-content">
											<div class="portfolio-image-overlay-wrapper"><div class="portfolio-img zoomin"><img class="img-responsive" src="https://baznastala.or.id/content/uploads/2017/03/Bantuan-Biaya-Pend.-utk-Sekolah-GuruSiswa-SDSMP.SMA-Luar-Biasa-PLH-Total-Rp-9-Jt-4.jpg" width="1280" height="768" alt="Bantuan Biaya Pend. utk Sekolah Luar Biasa PLH" /></div><div class="portfolio-overlay default"></div></div><div class="portfolio-mask overlay-mask position-center"><div class="portfolio-title"><h4><a title="Bantuan Biaya Pend. utk Sekolah Luar Biasa PLH" href="https://baznastala.or.id/portfolio/bantuan-biaya-pend-utk-sekolah-luar-biasa-plh/">Bantuan Biaya Pend. utk Sekolah Luar Biasa PLH</a></h4><p>Bantuan Biaya Pend. utk Sekolah,</p></div><ul class="overlay-buttons fade-up"><li><a href="https://baznastala.or.id/content/uploads/2017/03/Bantuan-Biaya-Pend.-utk-Sekolah-GuruSiswa-SDSMP.SMA-Luar-Biasa-PLH-Total-Rp-9-Jt-4.jpg" class="pf-icon-zoom" data-rel="prettyPhoto[gallery7]" title="Bantuan Biaya Pend. utk Sekolah Luar Biasa PLH"><i class="simple-icon icon-size-fullscreen"></i></a></li><li><a href="https://baznastala.or.id/portfolio/bantuan-biaya-pend-utk-sekolah-luar-biasa-plh/" class="pf-icon-link" title="Bantuan Biaya Pend. utk Sekolah Luar Biasa PLH"><i class="simple-icon icon-share-alt"></i></a></li></ul></div>
										</div>

									</div>
									</div><!-- #post -->

								
									<div id="portfolio-106" class="portfolio-item isotope-post post-iso-w3 post-iso-h3 post-106 zozo_portfolio type-zozo_portfolio status-publish has-post-thumbnail hentry portfolio_categories-program-tala-cerdas">
									<div class="post-inside-wrapper margin-top-30 animate_when_almost_visible zoom-in" data-delay="300">

										<div class="portfolio-content">
											<div class="portfolio-image-overlay-wrapper"><div class="portfolio-img zoomin"><img class="img-responsive" src="https://baznastala.or.id/content/uploads/2017/03/Bantuan-Biaya-Pendidikan-untuk-Siswa-SD-Mts.jpg" width="1365" height="768" alt="Bantuan Biaya Pendidikan untuk Siswa SD &#038; Mts" /></div><div class="portfolio-overlay default"></div></div><div class="portfolio-mask overlay-mask position-center"><div class="portfolio-title"><h4><a title="Bantuan Biaya Pendidikan untuk Siswa SD &#038; Mts" href="https://baznastala.or.id/portfolio/bantuan-biaya-pendidikan-untuk-siswa-sd-mts/">Bantuan Biaya Pendidikan untuk Siswa SD &#038; Mts</a></h4><p>Bantuan Biaya Pendidikan untuk Siswa</p></div><ul class="overlay-buttons fade-up"><li><a href="https://baznastala.or.id/content/uploads/2017/03/Bantuan-Biaya-Pendidikan-untuk-Siswa-SD-Mts.jpg" class="pf-icon-zoom" data-rel="prettyPhoto[gallery7]" title="Bantuan Biaya Pendidikan untuk Siswa SD &#038; Mts"><i class="simple-icon icon-size-fullscreen"></i></a></li><li><a href="https://baznastala.or.id/portfolio/bantuan-biaya-pendidikan-untuk-siswa-sd-mts/" class="pf-icon-link" title="Bantuan Biaya Pendidikan untuk Siswa SD &#038; Mts"><i class="simple-icon icon-share-alt"></i></a></li></ul></div>
										</div>

									</div>
									</div><!-- #post -->

								
									<div id="portfolio-112" class="portfolio-item isotope-post post-iso-w3 post-iso-h3 post-112 zozo_portfolio type-zozo_portfolio status-publish has-post-thumbnail hentry portfolio_categories-program-tala-cerdas">
									<div class="post-inside-wrapper margin-top-30 animate_when_almost_visible zoom-in" data-delay="300">

										<div class="portfolio-content">
											<div class="portfolio-image-overlay-wrapper"><div class="portfolio-img zoomin"><img class="img-responsive" src="https://baznastala.or.id/content/uploads/2017/03/Bantuan-Biaya-Pend.-Ke-Al-Azhar-Mesir-2-Org-Total-Rp-28-Jt.jpg" width="1024" height="768" alt="Bantuan Biaya Pendidikan Ke Al Azhar Mesir" /></div><div class="portfolio-overlay default"></div></div><div class="portfolio-mask overlay-mask position-center"><div class="portfolio-title"><h4><a title="Bantuan Biaya Pendidikan Ke Al Azhar Mesir" href="https://baznastala.or.id/portfolio/bantuan-biaya-pendidikan-ke-al-azhar-mesir/">Bantuan Biaya Pendidikan Ke Al Azhar Mesir</a></h4><p>Bantuan Biaya Pendidikan Ke Al-Azhar</p></div><ul class="overlay-buttons fade-up"><li><a href="https://baznastala.or.id/content/uploads/2017/03/Bantuan-Biaya-Pend.-Ke-Al-Azhar-Mesir-2-Org-Total-Rp-28-Jt.jpg" class="pf-icon-zoom" data-rel="prettyPhoto[gallery7]" title="Bantuan Biaya Pendidikan Ke Al Azhar Mesir"><i class="simple-icon icon-size-fullscreen"></i></a></li><li><a href="https://baznastala.or.id/portfolio/bantuan-biaya-pendidikan-ke-al-azhar-mesir/" class="pf-icon-link" title="Bantuan Biaya Pendidikan Ke Al Azhar Mesir"><i class="simple-icon icon-share-alt"></i></a></li></ul></div>
										</div>

									</div>
									</div><!-- #post -->

								
									<div id="portfolio-105" class="portfolio-item isotope-post post-iso-w3 post-iso-h3 post-105 zozo_portfolio type-zozo_portfolio status-publish has-post-thumbnail hentry portfolio_categories-program-tala-cerdas">
									<div class="post-inside-wrapper margin-top-30 animate_when_almost_visible zoom-in" data-delay="300">

										<div class="portfolio-content">
											<div class="portfolio-image-overlay-wrapper"><div class="portfolio-img zoomin"><img class="img-responsive" src="https://baznastala.or.id/content/uploads/2017/10/Bantuan-Biaya-Pendidikan-Untuk-Mahasiswa-Al-Azhar-Mesir-Rp.-10-juta.jpg" width="768" height="576" alt="Bantuan Biaya Pendidikan Untuk Mahasiswa Al-Azhar Mesir" /></div><div class="portfolio-overlay default"></div></div><div class="portfolio-mask overlay-mask position-center"><div class="portfolio-title"><h4><a title="Bantuan Biaya Pendidikan Untuk Mahasiswa Al-Azhar Mesir" href="https://baznastala.or.id/portfolio/bantuan-biaya-pendidikan-untuk-mahasiswa-al-azhar-mesir/">Bantuan Biaya Pendidikan Untuk Mahasiswa Al-Azhar Mesir</a></h4><p>Bantuan Biaya Pendidikan Untuk Mahasiswa</p></div><ul class="overlay-buttons fade-up"><li><a href="https://baznastala.or.id/content/uploads/2017/10/Bantuan-Biaya-Pendidikan-Untuk-Mahasiswa-Al-Azhar-Mesir-Rp.-10-juta.jpg" class="pf-icon-zoom" data-rel="prettyPhoto[gallery7]" title="Bantuan Biaya Pendidikan Untuk Mahasiswa Al-Azhar Mesir"><i class="simple-icon icon-size-fullscreen"></i></a></li><li><a href="https://baznastala.or.id/portfolio/bantuan-biaya-pendidikan-untuk-mahasiswa-al-azhar-mesir/" class="pf-icon-link" title="Bantuan Biaya Pendidikan Untuk Mahasiswa Al-Azhar Mesir"><i class="simple-icon icon-share-alt"></i></a></li></ul></div>
										</div>

									</div>
									</div><!-- #post -->

																</div>

								<div class="zozo-pagination-wrapper">
								</div>
								<br><br>
								</div>
							</div>

												
					</div><!-- #content -->
				</div><!-- #primary -->
				<div id="sidebar" class="primary-sidebar sidebar pm-sidebar">
						<div id="nav_menu-2" class="widget widget_nav_menu">
						<h3 class="widget-title">Program BAZNAS TALA</h3>
						<div class="menu-program-baznas-menu-container">
						<ul id="menu-program-baznas-menu" class="menu">
						<li id="menu-item-1515" class="menu-item menu-item-type-taxonomy menu-item-object-portfolio_categories menu-item-1515"><a href="tala_cerdas.php">Program TALA Cerdas</a>
						</li>
						<li id="menu-item-1516" class="menu-item menu-item-type-taxonomy menu-item-object-portfolio_categories menu-item-1516"><a href="tala_peduli.php">Program TALA Peduli</a>
						</li>
						<li id="menu-item-1517" class="menu-item menu-item-type-taxonomy menu-item-object-portfolio_categories menu-item-1517"><a href="tala_sehat.php">Program TALA Sehat</a>
						</li>
						<li id="menu-item-1518" class="menu-item menu-item-type-taxonomy menu-item-object-portfolio_categories current-menu-item menu-item-1518"><a href="tala-taqwa.php">Program TALA Taqwa</a>
						</li>
						<li id="menu-item-1519" class="menu-item menu-item-type-taxonomy menu-item-object-portfolio_categories menu-item-1519"><a href="tala_makmur.php">Program TALA Makmur</a>
						</li>
						</ul>
						</div>
						</div>		
			</div>
			</div>
		</div>
		
		<!-- MAPS -->
		

	</div>
	
	<!-- CTA -->


	<!-- FOOTER SECTION -->
	<div class="footer" style="width: 100%;">
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
	<script type='text/javascript' src='https://baznastala.or.id/content/themes/charity/js/charity-theme-min.js'></script>
<script type='text/javascript' src='https://baznastala.or.id/content/themes/charity/js/charity-custom.js'></script>
<script type='text/javascript' src='https://baznastala.or.id/site/wp-includes/js/wp-embed.min.js'></script>
	<script src="js/script.js"></script>

</body>
</html>