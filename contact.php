<?php include 'header.php'; ?>
<div class="container">
	<div class="columns">
		<div class="column">
			<h1><?php if ($language == 'es'): ?>Contacto<?php elseif ($language == 'en'): ?>Contact<?php endif ?></h1>
		</div>
	</div>
	<div class="columns">
		<div class="column">
			<h4><?php if ($language == 'es'): ?>Dirección<?php elseif ($language == 'en'): ?>Address<?php endif ?></h4>
			<h6><?php if ($language == 'es'): ?>Oficina<?php elseif ($language == 'en'): ?>Office<?php endif ?></h6>
			<p>Calle Buenaventura Raygada Mz. B, Lote 5, Of. 202</br>Urb. San Isidro, Piura - Piura, Perú</p>
			<h6><?php if ($language == 'es'): ?>Fundo<?php elseif ($language == 'en'): ?>Field<?php endif ?></h6>
			<p>Km. 1066 Carretera Sullana, Tambogrande</p>	
			<h4><?php if ($language == 'es'): ?>Teléfono<?php elseif ($language == 'en'): ?>Phone<?php endif ?></h4>
			<h6><?php if ($language == 'es'): ?>Oficina<?php elseif ($language == 'en'): ?>Office<?php endif ?></h6>
			<p><a href="tel:+51950921208">+51 950 921 208</a></p>
			<h6><?php if ($language == 'es'): ?>Fundo<?php elseif ($language == 'en'): ?>Field<?php endif ?></h6>
			<p><a href="tel:073320196">073 320 196</a></p>
			<h4><?php if ($language == 'es'): ?>Correo Electrónico<?php elseif ($language == 'en'): ?>Email<?php endif ?></h4>
			<p>exportaciones@agropall.com</p>
		</div>
		<div class="column is-6">
			<div class="map" data-aos="fade-up">
				<iframe 
				width="600"
				height="450"
				frameborder="0"
				style="border:0;"
				allowfullscreen=""
				src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d993.363112956367!2d-80.63898487079858!3d-5.191336299764554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x904a1a847918b3d7%3A0x9730e23aa8a789b6!2sJiron%20Buenaventura%20Raygada%20160%2C%20Piura%2020001!5e0!3m2!1ses!2spe!4v1569450331758!5m2!1ses!2spe?key=AIzaSyCctKCgfWMbnfbm3ifKCD2ckBBL-9xpgkI"></iframe>
			</div>
		</div>
	</div>
</div>
<?php include 'foot.php'; ?>