<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>E-Shop For Mobiles</title>

	<!-- Bootstrap CDN -->
	<link
		href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
		rel="stylesheet"
		integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
		crossorigin="anonymous" />

	<!-- Owl-carousel CDN -->
	<link
		rel="stylesheet"
		href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
		integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
		crossorigin="anonymous"
		referrerpolicy="no-referrer" />
	<link
		rel="stylesheet"
		href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"
		integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA=="
		crossorigin="anonymous"
		referrerpolicy="no-referrer" />

	<!-- font awesome icons -->
	<link
		rel="stylesheet"
		href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
		integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
		crossorigin="anonymous"
		referrerpolicy="no-referrer" />

	<!-- Custom CSS file -->
	<link rel="stylesheet" href="style.css" />

	<?php
	// require functions.php
	require 'functions.php';
	?>
</head>

<body>
	<!-- start #header -->
	<header id="header">
		<div class="strip d-flex justify-content-between px-4 py-1 bg-light">
			<p class="font-rale font-size-12 text-black-50 m-0">
				HopSoft-Tech 14 Ikeja Street, Lagos, Nigeria +234 806 500 3208
			</p>
			<div class="font-rale font-size-14">
				<a href="#" class="px-3 border-right border-left text-dark">Login</a>
				<a href="#" class="px-3 border-right text-dark">Wishlist (0)</a>
			</div>
		</div>

		<!-- Primary Navigation -->
		<nav class="navbar navbar-expand-lg navbar-dark color-second-bg">
			<div class="container-fluid">
				<a class="navbar-brand" href="index.php">Mobile Shop</a>
				<button
					class="navbar-toggler"
					type="button"
					data-bs-toggle="collapse"
					data-bs-target="#navbarNav"
					aria-controls="navbarNav"
					aria-expanded="false"
					aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav m-auto font-rubik">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="#">On Sale</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Category</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Products <i class="fas fa-chevron-down"></i></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Blog</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Category <i class="fas fa-chevron-down"></i></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Coming Soon</a>
						</li>
					</ul>
					<form action="#" class="font-size-14 font-rale">
						<a href="cart.php" class="py-2 rounded-pill color-primary-bg">
							<span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
							<span class="px-3 py-2 rounded-pill text-dark bg-light"><?php echo count($product->getData('cart'));?></span>
						</a>
					</form>
				</div>
			</div>
		</nav>
		<!-- Primary Navigation -->
	</header>
	<!-- start #header -->

	<!-- start #main-site -->
	<main id="main-site">