<?php include_once 'head.php'; ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<body class="index">
	<header class="index">
		<div class="container">
			<nav>
				<div class="nav-start">
					<div class="dummy"></div>
					<a href="index" id="home" class="home">
						<img id="logo" src="img/logo-blanco.svg" alt="Home">
					</a>
					<a href="#" id="nav-toggle" class="nav-toggle"><div></div><div></div><div></div></a>
				</div>
				<div id="nav-menu" class="nav-menu">
					<?php if ($language == 'es'): ?>
					<a href="about" class="nav-link">La Historia</a>
					<a href="process.php" class="nav-link">Nuestro Proceso</a>
					<a href="products" class="nav-link">Productos</a>
					<a href="contact" class="nav-link">Contáctanos</a>
					<?php elseif ($language == 'en'): ?>
					<a href="about" class="nav-link">The Story</a>
					<a href="process.php" class="nav-link">Our Process</a>
					<a href="products" class="nav-link">Products</a>
					<a href="contact" class="nav-link">Contact Us</a>
					<?php endif ?>
				</div>
				<div class="nav-end">
					<?php include_once 'lang.php' ?>
				</div>
			</nav>
		</div>
	</header>