<?php 

include 'class/Umur.php';

$umur = new Umur;

 ?>


<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Website Profile - Amiruddin</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	
	
	<!-- Font -->
	
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700%7CAllura" rel="stylesheet">
	
	<!-- Stylesheets -->
	
	<link href="assets/css/bootstrap.css" rel="stylesheet">
	
	<link href="assets/css/ionicons.css" rel="stylesheet">
	
	<link href="assets/css/fluidbox.min.css" rel="stylesheet">
	
	<link href="assets/css/01-cv-portfolio/css/styles.css" rel="stylesheet">
	
	<link href="assets/css/01-cv-portfolio/css/responsive.css" rel="stylesheet">
	
</head>
<body>
	
	<header>
		<div class="container">
			<div class="heading-wrapper">
				<div class="row">
					<div class="col-sm-8 col-md-8 col-lg-4">
						<div class="info">
							<i class="icon ion-ios-location-outline"></i>
							<div class="right-area">
								<h5>Villa Mutiara Jelita</h5>
								<h5>Jl. Mutiara Boulevard</h5>
							</div><!-- right-area -->
						</div><!-- info -->
					</div><!-- col-sm-4 -->
					
					<div class="col-sm-8 col-md-8 col-lg-4">
						<div class="info">
							<i class="icon ion-ios-telephone-outline"></i>
							<div class="right-area">
								<h5>085 211 62 92 32</h5>
							</div><!-- right-area -->
						</div><!-- info -->
					</div><!-- col-sm-4 -->
					
					<div class="col-sm-8 col-md-8 col-lg-4">
						<div class="info">
							<i class="icon ion-ios-world-outline"></i>
							<div class="right-area">
								<h5>amiruddin.000webhostapp.com</h5>
							</div><!-- right-area -->
						</div><!-- info -->
					</div><!-- col-sm-4 -->

					<div class="col-sm-8 col-md-8 col-lg-4">
						<div class="info">
							<i class="icon ion-ios-email-outline"></i>
							<div class="right-area">
								<h5>alamirfarma@gmail.com</h5>
							</div><!-- right-area -->
						</div><!-- info -->
					</div><!-- col-sm-4 -->
				</div><!-- row -->
			</div><!-- heading-wrapper -->
						
			<a class="aplikasi" href="aplikasi">Aplikasi</a>
			<a class="downlad-btn" href="assets/cv/CV1.jpg">Lihat CV</a>
		</div><!-- container -->
	</header>
	
	<section class="intro-section" style="background-image: url(assets/images/slider-2.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-md-1 col-lg-2"></div>
				<div class="col-md-10 col-lg-8">
					<div class="intro">
						<div class="profile-img"><img src="assets/images/profile-1-250x250.jpg" alt=""></div><hr>
						<h2><b>Amiruddin, S.Farm., Apt.</b></h2>
						<h4 class="font-yellow">Apoteker | Web Developer</h4>
						<hr>
						<ul class="information margin-tb-30">
							<li><b>UMUR : </b><?php echo $umur->getUmur(); ?> Tahun</li>
							<li><b>TEMPAT LAHIR : </b>Belawa, Kab. Wajo</li>
							<hr>
						</ul>
					</div><!-- intro -->
				</div><!-- col-sm-8 -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- intro-section -->
	
	<section class="experience-section section">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="heading">
						<h3><b>Pendidikan</b></h3>
					</div>
				</div><!-- col-sm-4 -->
				<div class="col-sm-8">
					<div class="education-wrapper">
						<div class="education margin-b-50">
							<h4><b>SEKOLAH DASAR</b></h4>
							<h5 class="font-yellow"><b>SDN 6 LANCIRANG</b></h5>
							<h6 class="font-lite-black margin-t-10">(2001-2003)</h6>
						</div><!-- education -->

						<div class="education margin-b-50">
							<h4><b>SEKOLAH DASAR</b></h4>
							<h5 class="font-yellow"><b>SDN 4 LANCIRANG</b></h5>
							<h6 class="font-lite-black margin-t-10">(2003-2007)</h6>
						</div><!-- education -->

						<div class="education margin-b-50">
							<h4><b>SEKOLAH MENENGAH PERTAMA</b></h4>
							<h5 class="font-yellow"><b>SMPN 1 DUA PITUE</b></h5>
							<h6 class="font-lite-black margin-t-10">(2007-2010)</h6>
						</div><!-- education -->

						<div class="education margin-b-50">
							<h4><b>SEKOLAH MENENGAH ATAS</b></h4>
							<h5 class="font-yellow"><b>SMAN 1 BELAWA</b></h5>
							<h6 class="font-lite-black margin-t-10">(2010-2013)</h6>
						</div><!-- education -->
						
						<div class="education margin-b-50">
							<h4><b>S1 FARMASI</b></h4>
							<h5 class="font-yellow"><b>UIN ALAUDDIN MAKASSAR</b></h5>
							<h6 class="font-lite-black margin-t-10">(Juli 2013 - Agustus 2017)</h6>
							<p class="font-semi-white margin-tb-30">Mendapatkan gelar sarjana farmasi <b>(S.Farm)</b> yang membentuk keahlian ilmu dasar farmasi. Predikat kelulusan <b>Cumlaude</b> dengan nilai <b>IPK 3,73</b>.</p>
						</div><!-- education -->
						
						<div class="education margin-b-50">
							<h4><b>PROFESI APOTEKER</b></h4>
							<h5 class="font-yellow"><b>UNIVERSITAS HASANUDDIN</b></h5>
							<h6 class="font-lite-black margin-t-10">(Februari 2018 - Februari 2019)</h6>
							<p class="font-semi-white margin-tb-30">Mendapatkan gelar profesi apoteker <b>(Apt)</b> yang membentuk keahlian dalam hal manajerial serta pelayanan kefarmasian. Predikat kelulusan <b>Cumlaude</b> dengan nilai <b>IPK 3,84</b>.</p>
						</div><!-- education -->
					</div><!-- education-wrapper -->
				</div><!-- col-sm-8 -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- about-section -->
	
	<section class="education-section section">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="heading">
						<h3><b>Pengalaman Magang</b></h3>
					</div>
				</div><!-- col-sm-4 -->
				<div class="col-sm-8">
				
					<div class="experience margin-b-50">
						<h4><b>RUMAH SAKIT</b></h4>
						<h5 class="font-yellow"><b>RSUD LABUANG BAJI</b></h5>
						<h6 class="margin-t-10">MAKASSAR</h6>
						<p class="margin-tb-30">Mendapatkan pengalaman prescribe screening (analisis resep), drug of choice (pemilihan obat), dan counseling(konseling pasien). </p>
					</div><!-- experience -->

					<div class="experience margin-b-50">
						<h4><b>APOTEK</b></h4>
						<h5 class="font-yellow"><b>PRODYA CARE</b></h5>
						<h6 class="margin-t-10">MAKASSAR</h6>
						<p class="margin-tb-30">Mendapatkan pengalaman dalam manajemen apotek dan bisnis obat.</p>
					</div><!-- experience -->
					
					<div class="experience margin-b-50">
						<h4><b>DISTRIBUTOR (PBF)</b></h4>
						<h5 class="font-yellow"><b>PT. KIMIA FARMA TRADING AND DISTRIBUTION</b></h5>
						<h6 class="margin-t-10">MAKASSAR</h6>
						<p class="margin-tb-30">Mendapatkan pengalaman manajemen distribusi obat pada jenjang fasilitas distribusi.</p>
					</div><!-- experience -->
				</div><!-- col-sm-8 -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- experience-section -->
	
	<section class="experience-section section">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="heading">
						<h3><b>Pengalaman Organisasi</b></h3>
					</div>
				</div><!-- col-sm-4 -->
				<div class="col-sm-8">
					<div class="education-wrapper">
						<div class="education margin-b-50">
							<h4><b>STUDY CLUB AVICENNA</b></h4>
							<h5 class="font-yellow"><b>KETUA UMUM</b></h5>
						</div><!-- education -->

						<div class="education margin-b-50">
							<h4><b>SENAT MAHASISWA FAKULTAS</b></h4>
							<h5 class="font-yellow"><b>KEPALA BIDANG</b></h5>
						</div><!-- education -->

						<div class="education margin-b-50">
							<h4><b>HIMPUNAN MAHASISWA JURUSAN FARMASI</b></h4>
							<h5 class="font-yellow"><b>KEPALA BIDANG</b></h5>
						</div><!-- education -->

						<div class="education margin-b-50">
							<h4><b>KOPERASI AL-BIRUNI</b></h4>
							<h5 class="font-yellow"><b>KEPALA BIDANG</b></h5>
						</div><!-- education -->
					</div><!-- education-wrapper -->
				</div><!-- col-sm-8 -->
			</div><!-- row -->
		</div><!-- container -->
		
	</section><!-- about-section -->

	<section class="about-section section">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="heading">
						<h3><b>Skill</b></h3>
					</div>
				</div><!-- col-sm-4 -->
				<div class="col-sm-8">
					<b>Pharmacist Skills</b><hr>
					
					<div class="row">
						<div class="col-sm-6 col-md-6 col-lg-3">
							<div class="radial-prog-area margin-b-30">
								<div class="radial-progress" data-prog-percent=".6">
									<div></div>
									<h6 class="progress-title">CARE-GIVER</h6>
								</div>
							</div><!-- radial-prog-area-->
						</div><!-- col-sm-6-->
					
						<div class="col-sm-6 col-md-6 col-lg-3">
							<div class="radial-prog-area margin-b-30">
								<div class="radial-progress" data-prog-percent=".75">
									<div></div>
									<h6 class="progress-title">DECISION-MAKER</h6>
								</div>
							</div><!-- radial-prog-area-->
						</div><!-- col-sm-6-->
						
						<div class="col-sm-6 col-md-6 col-lg-3">
							<div class="radial-prog-area margin-b-30">
								<div class="radial-progress" data-prog-percent=".75">
									<div></div>
									<h6 class="progress-title">COMMUNICATOR</h6>
								</div>
							</div><!-- radial-prog-area-->
						</div><!-- col-sm-6-->
						
						<div class="col-sm-6 col-md-6 col-lg-3">
							<div class="radial-prog-area margin-b-50">
								<div class="radial-progress" data-prog-percent=".7">
									<div></div>
									<h6 class="progress-title">MANAGER</h6>
								</div>
							</div><!-- radial-prog-area-->
						</div><!-- col-sm-6-->
						
						<div class="col-sm-6 col-md-6 col-lg-3">
							<div class="radial-prog-area margin-b-50">
								<div class="radial-progress" data-prog-percent=".75">
									<div></div>
									<h6 class="progress-title">LEADER</h6>
								</div>
							</div><!-- radial-prog-area-->
						</div><!-- col-sm-6-->
												
						<div class="col-sm-6 col-md-6 col-lg-3">
							<div class="radial-prog-area margin-b-50">
								<div class="radial-progress" data-prog-percent=".8">
									<div></div>
									<h6 class="progress-title">LONG LIFE LEARNER</h6>
								</div>
							</div><!-- radial-prog-area-->
						</div><!-- col-sm-6-->
												
						<div class="col-sm-6 col-md-6 col-lg-3">
							<div class="radial-prog-area margin-b-50">
								<div class="radial-progress" data-prog-percent=".6">
									<div></div>
									<h6 class="progress-title">TEACHER</h6>
								</div>
							</div><!-- radial-prog-area-->
						</div><!-- col-sm-6-->
												
						<div class="col-sm-6 col-md-6 col-lg-3">
							<div class="radial-prog-area margin-b-50">
								<div class="radial-progress" data-prog-percent=".8">
									<div></div>
									<h6 class="progress-title">RESEARCH</h6>
								</div>
							</div><!-- radial-prog-area-->
						</div><!-- col-sm-6-->
												
						<div class="col-sm-6 col-md-6 col-lg-3">
							<div class="radial-prog-area margin-b-50">
								<div class="radial-progress" data-prog-percent=".85">
									<div></div>
									<h6 class="progress-title">ENTERPRENEUR</h6>
								</div>
							</div><!-- radial-prog-area-->
						</div><!-- col-sm-6-->
						
					</div><!-- row -->

					<b>Common Skills</b><hr>
					
						<div class="col-sm-6 col-md-6 col-lg-3">
							<div class="radial-prog-area margin-b-30">
								<div class="radial-progress" data-prog-percent=".85">
									<div></div>
									<h6 class="progress-title">MICROSOFT OFFICE</h6>
								</div>
							</div><!-- radial-prog-area-->
						</div><!-- col-sm-6-->
						
						<div class="col-sm-6 col-md-6 col-lg-3">
							<div class="radial-prog-area margin-b-30">
								<div class="radial-progress" data-prog-percent=".60">
									<div></div>
									<h6 class="progress-title">WEB DEVELOPMENT</h6>
								</div>
							</div><!-- radial-prog-area-->
						</div><!-- col-sm-6-->
						
						<div class="col-sm-6 col-md-6 col-lg-3">
							<div class="radial-prog-area margin-b-50">
								<div class="radial-progress" data-prog-percent=".75">
									<div></div>
									<h6 class="progress-title">ADOBE PHOTOSHOP</h6>
								</div>
							</div><!-- radial-prog-area-->
						</div><!-- col-sm-6-->
					</div><!-- row -->
				</div><!-- col-sm-8 -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- about-section -->
	
	<footer>
		<p class="copyright font-semi-white">
			<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<?php print (date('Y')); ?> by Amiruddin | This template is made by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
		</p>


	</footer>
	
	
	<!-- SCIPTS -->
	
	<script src="assets/js/jquery-3.2.1.min.js"></script>
	
	<script src="assets/js/tether.min.js"></script>
	
	<script src="assets/js/bootstrap.js"></script>
	
	<script src="assets/js/isotope.pkgd.min.js"></script>
	
	<script src="assets/js/jquery.waypoints.min.js"></script>
	
	<script src="assets/js/progressbar.min.js"></script>
	
	<script src="assets/js/jquery.fluidbox.min.js"></script>
	
	<script src="assets/js/scripts.js"></script>
	
</body>
</html>