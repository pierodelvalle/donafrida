<?php 

if (isset($_POST['lang'])) {
	$lang = $_POST['lang'];
	setcookie('lang', $lang, 2147483647, "/", "donafrida.test");
	//setcookie('lang', $lang, 2147483647, "/", "blackpeppa.pe");
	header("Refresh:0");
}

$language = isset($_COOKIE['lang']) ? $_COOKIE['lang'] : 'es';

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>Doña Frida</title>
	<link rel="stylesheet" href="https://use.typekit.net/bnw3tfy.css">
	<link rel="stylesheet" href="style.css">

	<!-- Open Graph Data -->
	<meta property="og:type" content="business.business">
	<meta property="og:title" content="Doña Frida">
	<meta property="og:url" content="http://donafrida.pe/">
	<meta property="og:image" content="http://donafrida.pe/preview.jpg">
	<meta property="business:contact_data:street_address" content="Calle Buenaventura Raygada Mz. B Lote 5 Of. 202, Urb. San Isidro">
	<meta property="business:contact_data:locality" content="Piura">
	<meta property="business:contact_data:region" content="Piura">
	<meta property="business:contact_data:postal_code" content="20001">
	<meta property="business:contact_data:country_name" content="Peru">

	<!-- Favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/site.webmanifest">
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffaf47">
	
	<script
	  src="https://code.jquery.com/jquery-3.4.1.min.js"
	  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
	  crossorigin="anonymous"></script>
	<!-- Add the slick-theme.css if you want default styling -->
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css"/>
	<!-- Add the slick-theme.css if you want default styling -->
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css"/>
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>