<!DOCTYPE html>
<html lang="en">
<head>
	 <script language='JavaScript'>
        var tulisan=" Selamat Datang Dihalaman Topik Terhangat SMA Negeri 2 Indramayu ";
        var kecepatan = 200;
        var fress = null;
        function jalan() { 
          document.title = tulisan;
          tulisan = tulisan.substring(1,tulisan.length) + tulisan.charAt(0);
          fress = setTimeout("jalan()",kecepatan);
        }jalan();
    </script>

	<!-- Favicon -->   
	<link href="assets2/img/logosma.png" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="assets2/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="assets2/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="assets2/css/themify-icons.css"/>
	<link rel="stylesheet" href="assets2/css/owl.carousel.css"/>
	<link rel="stylesheet" href="assets2/css/style.css"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- header section -->
	<header class="header-section">
		<div class="container text-left">
			<!-- logo -->
			<a href="index.html" class="site-logo"><img src="assets2/img/logosma.png" alt="" width="60px"; height="60px"></a>
			<div class="nav-switch">
				<i class="fa fa-bars"></i>
			</div>
			<div class="header-info">
				<div class="hf-item" style="padding-top: 20px">
					<i class="fa fa-clock-o"></i>
					<p><span>Waktu Kerja:</span>Senin - Jum'at: 08.00 - 17.00 WIB</p>
				</div>
				<div class="hf-item">
					<i class="fa fa-map-marker"></i>
					<p><span>Alamat Sekolah:</span>Jl. Pahlawan No.37, Margadadi - Indramayu Jawa Barat</p>
				</div>
			</div>
		</div>
	</header>
	<!-- header section end-->


	<!-- Header section  -->
	<nav class="nav-section">
		<div class="container">
			<div class="nav-right">
				<a href="login.php"><i class="fas fa-list-alt"></i></a>
			</div>
			<ul class="main-menu">
				<li><a href="index.php">Beranda</a></li>
				<li><a href="about.php">Tentang Kami</a></li>
				<li><a href="kegiatan.php">Kegiatan</a></li>
				<li class="active"><a href="topik.php">Hot Topik </a></li>
				<li><a href="login.php">Pendaftaran</a></li>
			</ul>
		</div>
	</nav>
	<!-- Header section end -->


	<!-- Breadcrumb section -->
	<div class="site-breadcrumb">
		<div class="container">
			<a href="#"><i class="fa fa-home"></i> Beranda</a> <i class="fa fa-angle-right"></i>
			<span>Hot Topik</span>
		</div>
	</div>
	<!-- Breadcrumb section end -->


		<!-- Courses section -->
	<section class="courses-section spad">
		<div class="container">
			<div class="row">
				<!-- course item -->
				<div class="col-lg-4 col-md-6 course-item">
					<div class="course-thumb">
						<img src="assets2/img/course/foto5.jpg" alt="">
						<div class="course-cat">
							<span>BAKTI SOSIAL</span>
						</div>
					</div>
					<div class="course-info">
						<div class="date"><i class="fa fa-clock-o"></i> 13 April 2020 </div>
						<h4>Pemberian Bantuan Sosial <br>Kepada Masyarakat</h4>
					</div>
				</div>
				<!-- course item -->
				<div class="col-lg-4 col-md-6 course-item">
					<div class="course-thumb">
						<img src="assets2/img/course/images.jfif" style="height: 270px" alt="">
						<div class="course-cat">
							<span>UNBK</span>
						</div>
					</div>
					<div class="course-info">
						<div class="date"><i class="fa fa-clock-o"></i> 22 Maret 2018</div>
						<h4>SMAN 2 Indramayu Melaksanakan<br> Ujian Nasional Berbasis Komputer </h4>
					</div>
				</div>
				<!-- course item -->
				<div class="col-lg-4 col-md-6 course-item">
					<div class="course-thumb">
						<img src="assets2/img/course/foto7.jpg" alt="">
						<div class="course-cat">
							<span>Sosialisasi Kejaksaan</span>
						</div>
					</div>
					<div class="course-info">
						<div class="date"><i class="fa fa-clock-o"></i> 10 Maret 2020</div>
						<h4>Pentingnya Hukum Di lingkungan<br> Sekolah dan Masyarakat</h4>
					</div>
				</div>
				<!-- course item -->
				<div class="col-lg-4 col-md-6 course-item">
					<div class="course-thumb">
						<img src="assets2/img/course/foto4.jpg" style="height: 240px" alt="">
						<div class="course-cat">
							<span>Pelepasan Siswa/i</span>
						</div>
					</div>
					<div class="course-info">
						<div class="date"><i class="fa fa-clock-o"></i> 13 Juni 2020</div>
						<h4>SMAN 2 Indramayu Melepaskan Siswa/i Angkatan Tahun 2020 </h4>
					</div>
				</div>
				<!-- course item -->
				<div class="col-lg-4 col-md-6 course-item">
					<div class="course-thumb">
						<img src="assets2/img/course/foto6.jpg" style="height: 240px" alt="">
						<div class="course-cat">
							<span>Pentas Seni</span>
						</div>
					</div>
					<div class="course-info">
						<div class="date"><i class="fa fa-clock-o"></i> 20 Februari 2020</div>
						<h4>SMAN 2 Indramayu Melaksanakan <br>Pentas Seni Setiap Tahunnya </h4>
					</div>
				</div>
				<!-- course item -->
				<div class="col-lg-4 col-md-6 course-item">
					<div class="course-thumb">
						<img src="assets2/img/course/osis.jfif" alt="">
						<div class="course-cat">
							<span>Pelantikan Osis 2020</span>
						</div>
					</div>
					<div class="course-info">
						<div class="date"><i class="fa fa-clock-o"></i> 10 Januari 2020</div>
						<h4>Osis SMAN 2 Indramayu <br>kembali menyeleksi osis baru</h4>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Courses section end-->

	<!-- Footer section -->
	<footer class="footer-section">
		<div class="container footer-top">
			<div class="row">
				<!-- widget -->
				<div class="col-sm-6 col-lg-3 footer-widget">
					<div class="about-widget">
						<img src="assets2/img/logosma.png" alt="" width="100px"; height="100px">
						<p>Mewujudkan sekolah sebagai pusat pendidikan yang bernuansa religious, unggul dalam prestasi dan kompeten dalam lulusan (RESIK).</p>
						<div class="social pt-1">
							<a href=""><i class="fa fa-twitter-square"></i></a>
							<a href=""><i class="fa fa-facebook-square"></i></a>
							<a href=""><i class="fa fa-google-plus-square"></i></a>
							<a href=""><i class="fa fa-linkedin-square"></i></a>
							<a href=""><i class="fa fa-rss-square"></i></a>
						</div>
					</div>
				</div>
				<!-- widget -->
				<div class="col-sm-6 col-lg-3 footer-widget">
					<h6 class="fw-title">Tautan Berguna</h6>
					<div class="dobule-link">
						<ul>
							<li><a href="index.php">Beranda</a></li>
							<li><a href="about.php">Tentang Kami</a></li>
							<li><a href="topik.php">Hot Topik</a></li>
							<li><a href="login.php">Pendaftaran</a></li>
							<li><a href="">Contact</a></li>
						</ul>
						<ul>
							<li><a href="">Policy</a></li>
							<li><a href="">Term</a></li>
							<li><a href="">Help</a></li>
							<li><a href="">FAQs</a></li>
							<li><a href="">Site map</a></li>
						</ul>
					</div>
				</div>
				<!-- widget -->
				<div class="col-sm-6 col-lg-3 footer-widget">
					<h6 class="fw-title">Post Terkini</h6>
					<ul class="recent-post">
						<li>
							<p>SMAN 2 Indramayu meraih rekor terbaru yang kali ini menjuarai lomba duta bahasa tingkat Provinsi Jawa Barat.</p>
							<span><i class="fa fa-clock-o"></i>30 Maret 2020</span>
						</li>
						<li>
							<p>SMAN 2 Indramayu kembali mencetak <br> rekor tingkat provinsi pada lomba duta bahasa indonesia.</p>
							<span><i class="fa fa-clock-o"></i>18 Januari 2020</span>
						</li>
					</ul>
				</div>
				<!-- widget -->
				<div class="col-sm-6 col-lg-3 footer-widget">
					<h6 class="fw-title">CONTACT</h6>
					<ul class="contact">
						<li><p><i class="fa fa-map-marker"></i> Jl. Pahlawan No.37, Margadadi - Indramayu Jawa Barat</p></li>
						<li><p><i class="fa fa-phone"></i> (+62) 895 339 866 254</p></li>
						<li><p><i class="fa fa-envelope"></i> sman2indramayu@gmail.com</p></li>
						<li><p><i class="fa fa-clock-o"></i> Senin - Jum'at: 08.00 - 17.00 WIB</p></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- copyright -->
		<div class="copyright">
			<div class="container">
				<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				Copyright &copy;<script>document.write(new Date().getFullYear());
				</script> SMA Negeri 2 Indramayu | Developed 
					<i class="fa fa-heart-o" aria-hidden="true"></i> by
						 <a href="https://colorlib.com" target="_blank">Sultan Bisri</a>
				<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
			</div>		
		</div>
	</footer>
	<!-- Footer section end-->


	<!--====== Javascripts & Jquery ======-->
	<script src="assets2/js/jquery-3.2.1.min.js"></script>
	<script src="assets2/js/owl.carousel.min.js"></script>
	<script src="assets2/js/jquery.countdown.js"></script>
	<script src="assets2/js/masonry.pkgd.min.js"></script>
	<script src="assets2/js/magnific-popup.min.js"></script>
	<script src="assets2/js/main.js"></script>
	
</body>
</html>