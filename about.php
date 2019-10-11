<?php include 'header.php' ?>
<main>
<div class="container">
	<div class="columns">
		<div class="column is-4">
			<?php if ($language == 'es'): ?>
			<h1>Trabajando nuestra tierra desde 1998</h1>
			<?php elseif ($language == 'en'): ?>
			<h1>Working our land since 1998</h1>
			<?php endif ?>
		</div>
	</div>
	<div class="columns">
		<div class="column is-4 is-offset-1">
			<?php if ($language == 'es'): ?>
			<p>El fundo Dona Frida, cuya empresa matriz es Agropall, se encuentra en Tambogrande - Piura; cuenta con 200 hectáreas de terreno de las cuales fueron destinadas, 60 hectáreas al cultivo del mango, 15 hectáreas al cultivo de la uva, 15 hectáreas a caminos, instalaciones y reservorios; quedando aún más de 100 hectáreas de terreno por desarrollar.</p>
			<p>Doña Frida, en un inicio estuvo enfocada principalmente a la venta de fruta de exportación a través de terceros. A partir del 2012 con una producción que superaba las 1,500 toneladas de mango y 500 toneladas de uva, ambos de primera calidad, incursionó en la exportación directa de sus propios productos.</p>
			<p>Primero, con su empresa matriz Agropall, tercerizó los servicios de empaque y luego con gran esfuerzo se construyó la “Planta Agroindustrial Koricancha”, con una capacidad para recibir más de 300 toneladas diarias de mangos y uvas en temporada de cosecha. En el proceso, la fruta es pesada, calibrada, empacada y refrigerada hasta quedar lista para ser enviada al mercado americano y europeo.</p>	
			<?php elseif ($language == 'en'): ?>
			<p> Fundo Doña Frida is located in Tambogrande - Piura; It has 200 hectares of land of which 60 hectares were used for mango cultivation, 15 hectares for grape cultivation, 15 hectares for roads, facilities and reservoirs; still more than 100 hectares of land to be developed. </p>
			<p> Doña Frida, initially focused mainly on the sale of export fruit through third parties. As of 2012, with a production that exceeded 1,500 tons of mango and 500 tons of grapes, both of first quality, ventured into the direct export of its own products. </p>
			<p> First, it took third-party packaging services and then with great effort we built the "Korikancha" agroindustrial plant, which has the capacity to receive more than 300 tons of mango and grapes per day during the harvest season. In the process, the fruit is heavy, calibrated, packed and refrigerated until it is ready to be sent to the American and European markets. </p>
			<?php endif ?>

		</div>
		<div class="column is-6 is-offset-1">
			<div class="slick" data-aos="fade-up">
				<img src="img/donafrida-workers-02.jpg" alt="">
				<img src="img/donafrida-workers-01.jpg" alt="">
				<img src="img/donafrida-workers-03.jpg" alt="">
				<img src="img/donafrida-field-01.jpg" alt="">
			</div>
		</div>
	</div>
</div>
</main>
<script type="text/javascript" src="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js"></script>
<script src="slick.js"></script>
<?php include 'foot.php' ?>