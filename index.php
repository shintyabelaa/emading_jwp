<?php
    $ROOT = "../";
    require('app/database/db.php');

    $articles = getAllArticles();
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Untree.co">
	<link rel="shortcut icon" href="favicon.png">

	<meta name="description" content="" />
	<meta name="keywords" content="bootstrap, bootstrap5" />

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;600;700&display=swap" rel="stylesheet">


	<link rel="stylesheet" href="assets/landing/fonts/icomoon/style.css">
	<link rel="stylesheet" href="assets/landing/fonts/flaticon/font/flaticon.css">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

	<link rel="stylesheet" href="assets/landing/css/tiny-slider.css">
	<link rel="stylesheet" href="assets/landing/css/aos.css">
	<link rel="stylesheet" href="assets/landing/css/glightbox.min.css">
	<link rel="stylesheet" href="assets/landing/css/style.css">

	<link rel="stylesheet" href="assets/landing/css/flatpickr.min.css">
	<link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">


	<title>JeWePe &mdash; Free Bootstrap 5 Website Template by Untree.co</title>
</head>
<body>

	<div class="site-mobile-menu site-navbar-target">
		<div class="site-mobile-menu-header">
			<div class="site-mobile-menu-close">
				<span class="icofont-close js-menu-toggle"></span>
			</div>
		</div>
		<div class="site-mobile-menu-body"></div>
	</div>

	<nav class="site-nav" style="background-color: #8B008B;">
		<div class="container">
			<div class="menu-bg-wrap">
				<div class="site-navigation">
					<div class="row g-0 align-items-center">
						<div class="col-2">
							<a href="index.php" class="logo m-0 float-start">JEWEPE<span class="text-primary">.</span></a>
						</div>
						<div class="col-8 text-center">
							<form action="#" class="search-form d-inline-block d-lg-none">
								<input type="text" class="form-control" placeholder="Search...">
								<span class="bi-search"></span>
							</form>

							<ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu mx-auto">
								<li class="active"><a href="index.php">Home</a></li>
								<li><a href="category.html">Article</a></li>
								<li><a href="#profile">Profile</a></li>
								<li><a href="#contact">Contact</a></li>
							</ul>
						</div>
						<div class="col-2 text-end">
							<a href="#" class="burger ms-auto float-end site-menu-toggle js-menu-toggle d-inline-block d-lg-none light">
								<span></span>
							</a>
							<a href="./login.php" class="btn btn-secondary d-grid" style="width: 100px; background-color: #ffffff; color:black;">
								Login
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</nav>

	<!-- Start posts-entry -->
	<section class="section posts-entry">
		<div class="container">
			<div class="row mb-4">
				<div class="w-100">
					<h2 class="posts-entry-title">Emading Sekolah Tinggi JeWePe</h2>
					<p class="posts-entry-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec fermentum est vitae lectus convallis, vel auctor augue placerat. Nunc felis est, gravida quis mauris ac, congue convallis turpis. Cras convallis risus justo, a finibus tortor faucibus et. Maecenas porta tristique vehicula. Phasellus venenatis in nibh sed scelerisque. Nam placerat maximus lectus at rhoncus. Quisque at vulputate ex. Sed ac pretium mi. Morbi nisi enim, pellentesque nec eros pellentesque, porttitor interdum ligula. Proin blandit a est ut cursus. Integer lacinia pellentesque tellus viverra vulputate. Maecenas sit amet magna sed odio maximus dignissim. Etiam non faucibus quam.</p>	
				</div>
			</div>
		</div>
	</section>
	<!-- End posts-entry -->


	<section class="section">
		<div class="container">
			<div class="row mb-4 w-100">
				<div class="col-sm-6 w-100 d-flex justify-content-center gap-3">
					<a href="category-new.html" class="btn btn-primary mr-2" style="background-color: #8B008B;">New Release</a>
					<a href="category-articles.html" class="btn">Articles</a>
				</div>
			</div>

			<div class="row">
				<?php foreach ($articles as $article): ?>
				<div class="col-lg-4 mb-4">
					<div class="post-entry-alt">
						<a href="single.php?id=<?= $article['article_id'] ?>" class="img-link"><img src="admin/articles/image.php?article_id=<?= $article['article_id'] ?>" title="Article Image" class="img-fluid"></a>
						<div class="excerpt">
						<h2><a href="single.php?id=<?= $article['article_id'] ?>"><?= $article['title'] ?></a></h2>
                            <div class="post-meta align-items-center text-left clearfix">
                                <span class="d-inline-block mt-1">By <a href="#"><?= $article['name'] ?></a></span>
                                <span>&nbsp;-&nbsp; <?= $article['created_at'] ?></span>
                            </div>
							<p><?= substr($article['content'],0, ), "..." ?></p>
                            <p><a href="single.php?id=<?= $article['article_id'] ?>" class="read-more">Continue Reading</a></p>
                        </div>
					</div>
				</div>
				<?php endforeach; ?>
			</div>	
		</div>
	</section>

	<section id="profile" class="section posts-entry" style="background-color: #8B008B;">
		<div class="container">
			<div class="row mb-4">
				<div class="w-100 d-flex flex-column align-items-center">
					<h2 class="posts-entry-title" style="color: #FFFFFF;">Emading Sekolah Tinggi JeWePe</h2>
					<p class="posts-entry-sm" style="color: #FFFFFF; margin-top: 20px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec fermentum est vitae lectus convallis, vel auctor augue placerat. Nunc felis est, gravida quis mauris ac, congue convallis turpis. Cras convallis risus justo, a finibus tortor faucibus et. Maecenas porta tristique vehicula. Phasellus venenatis in nibh sed scelerisque. Nam placerat maximus lectus at rhoncus. Quisque at vulputate ex. Sed ac pretium mi. Morbi nisi enim, pellentesque nec eros pellentesque, porttitor interdum ligula. Proin blandit a est ut cursus. Integer lacinia pellentesque tellus viverra vulputate. Maecenas sit amet magna sed odio maximus dignissim. Etiam non faucibus quam.</p>	
				</div>
			</div>
		</div>
	</section>

	<div id="contact" style="position: relative">
		<div class="section featured-img" style="background-image: url('assets/landing/images/building.jpg'); background-repeat: no-repeat; background-size: cover; height: 50vh;"></div>
		<div class="container" style="height: 200px;"></div>
		<div style="position: absolute; bottom: 70px; width: 100%; display:flex; justify-content:center;">
				<div style="
					width: auto;
					height: 200px;
					border: 1px solid #ccc;
					border-radius: 8px;
					padding: 16px;
					margin: 16px;
					box-sizing: border-box;
					display: inline-block;
					background:  #ffffff;">
					<h2>Sekolah Tinggi JeWePe</h2>
					<div style="display: flex; gap: 10px;">
						<i class="bi bi-pin-map-fill"></i>	
						<p>Jalan Stasiun Cakung No. 99 RT.002, RW.08, Kelurahan Pulogebang,</br> Kecamatan Cakun</p>
					</div>
					<div style="display: flex; gap: 10px;">
						<i class="bi bi-telephone-fill"></i>
						<p>(0362) 22570</p>
					</div>
					<div style="display: flex; gap: 10px;">
						<i class="bi bi-envelope-fill"></i>
						<p>humas@jewepe.ac.id</p>
					</div>
				</div>

				<!-- Card kedua -->
				<div style="
					width: auto;
					height: 200px;
					border: 1px solid #ccc;
					border-radius: 8px;
					padding: 16px;
					margin: 16px;
					box-sizing: border-box;
					display: flex;
					flex-direction: column;
					background: #ffffff;">
					<h2>Our Social Media</h2>
					<div style="display: flex; justify-content: center; gap: 10px; margin-top: 10px">
						<i class="bi bi-twitter-x" style="font-size: 3rem;"></i>
						<i class="bi bi-instagram" style="font-size: 3rem;"></i>
						<i class="bi bi-youtube" style="font-size: 3rem;"></i>
					</div>
				</div>
			</div>
	</div>


	<footer class="site-footer" style="background-color: #8B008B;">
		<div class="container">
			<div class="row">
            <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; Designed with love by <a href="https://untree.co">Untree.co</a>  Distributed by <a href="https://themewagon.com">ThemeWagon</a> <!-- License information: https://untree.co/license/ --></p>
          </div>
        </div>
      </div> <!-- /.container -->
    </footer> <!-- /.site-footer -->

    <!-- Preloader -->
    <div id="overlayer"></div>
    <div class="loader">
    	<div class="spinner-border text-primary" role="status">
    		<span class="visually-hidden">Loading...</span>
    	</div>
    </div>


    <script src="assets/landing/js/bootstrap.bundle.min.js"></script>
    <script src="assets/landing/js/tiny-slider.js"></script>

    <script src="assets/landing/js/flatpickr.min.js"></script>


    <script src="assets/landing/js/aos.js"></script>
    <script src="assets/landing/js/glightbox.min.js"></script>
    <script src="assets/landing/js/navbar.js"></script>
    <script src="assets/landing/js/counter.js"></script>
    <script src="assets/landing/js/custom.js"></script>
	<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Select the "Profile" link in the navbar
        var profileLink = document.querySelector('a[href="#profile"]');

        // Add a click event listener to the link
        profileLink.addEventListener("click", function (event) {
            event.preventDefault();

            // Get the target section (Profile) using the href attribute
            var targetSection = document.querySelector(profileLink.getAttribute("href"));

            // Scroll smoothly to the target section
            targetSection.scrollIntoView({ behavior: "smooth" });
        });
    });
	</script>
	<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Select the "Profile" link in the navbar
        var profileLink = document.querySelector('a[href="#contact"]');

        // Add a click event listener to the link
        contactLink.addEventListener("click", function (event) {
            event.preventDefault();

            // Get the target section (Profile) using the href attribute
            var targetSection = document.querySelector(contactLink.getAttribute("href"));

            // Scroll smoothly to the target section
            targetSection.scrollIntoView({ behavior: "smooth" });
        });
    });
	</script>

    
  </body>
  </html>
