<?php include 'header.php'; ?>
<div class="container">
	<div class="columns">
		<div class="column">
			<?php if ($language == 'es'): ?>
			<h1>Del campo a tu mesa</h1>
			<?php elseif ($language == 'en'): ?>
			<h1>From the field to your table</h1>
			<?php endif ?>
		</div>
	</div>
	<div class="columns has-padding-bottom">
		<div class="column is-4 is-offset-1">
			<?php if ($language == 'es'): ?>
			<p>Nuestros años de experiencia en el manejo de los cultivos nos permite brindar un producto de altísima calidad.</p>
			<p>Nuestro valor diferencial se basa en que manejamos directamente todos los eslabones de la cadena de producción: desde la siembra de la fruta, pasando por la cosecha, el empaque y culminando con la exportación.</p>
			<p>La "Planta Agroindustrial Korikancha” fue la número uno en exportaciones al mercado americano en los periodos 2017-2018 y 2018-2019.</p>
			<?php elseif ($language == 'en'): ?>
			<p>Our years of experience in crop management allow us to provide a high quality product.</p>
			<p>Our differential value is based on the fact that we directly manage all the links in the production chain: from the sowing of the fruit, through the harvest, the packaging and culminating with the export.</p>
			<p>Our “Korikancha” agroindustrial plant was number one in exports to the American market in the periods 2017-2018 and 2018-2019.</p>
			<?php endif ?>
			<div class="certifications">
				<img src="img/certification_sedex.png" alt="Sedex/Smeta" data-aos="fade-up" data-aos-delay="50">
				<img src="img/certification_brc.png" alt="BRC Food" data-aos="fade-up" data-aos-delay="100">
				<img src="img/certification_sgs.png" alt="HACCP SGS" data-aos="fade-up" data-aos-delay="150">
				<img src="img/certification_grasp.png" alt="GLOBAL G.A.P. Grasp" data-aos="fade-up" data-aos-delay="200">
				<img src="img/certification_fda.png" alt="FDA Food Safety" data-aos="fade-up" data-aos-delay="250">
				<img src="img/certification_globalgap.png" alt="GLOBAL G.A.P." data-aos="fade-up" data-aos-delay="350">
			</div>
		</div>
		<div class="column is-6 is-offset-1">
			<img src="img/donafrida-grapes-05.jpg" alt="" data-aos="fade-up">
		</div>
	</div>

	<div class="columns" id="mango">
		<div class="column">
			<?php if ($language == 'es'): ?>
			<h2>Nuestro Mango</h2>
			<?php elseif ($language == 'en'): ?>
			<h2>Our Mangoes</h2>
			<?php endif ?>
		</div>
	</div>
	<div class="columns has-padding-bottom">
		<div class="column is-4 is-offset-1">
			<?php if ($language == 'es'): ?>
			<p>De marzo a noviembre hacemos trabajo de campo, empezamos con la poda eliminando las yemas o ramales que crecen hacia adentro, así como la eliminación de ramas secas y enfermas.</p>
			<p>Para el riego contamos con 3 reservorios que almacenan agua para la alimentación de la planta, un 20 % es riego a gravedad y 80% es riego por goteo.</p>
			<p>Desde diciembre a febrero tenemos nuestra cosecha cuando el fruto alcanza su madurez, color indicado, sabor, firmeza y resistencia para ser empacado y transportado a la mesa de nuestros exigentes consumidores.</p>
			<?php elseif ($language == 'en'): ?>
			<p>From March to November we do field work, we begin with pruning by removing the buds or branches that grow inwards, as well as the elimination of dry and diseased branches.</p>
			<p>For irrigation, we have 3 reservoirs that store water for plant feeding, 20% is gravity irrigation and 80% is drip irrigation.</p>
			<p>From December to February we have our harvest when the fruit reaches maturity, indicated color, taste, firmness and resistance to be packed and transported to the table of our demanding consumers.</p>
			<?php endif ?>
			<div class="tabmenu single"><a href="process-mango" class="yellow"><?php if ($language == 'es'): ?>Procesos de Producción y de Planta<?php elseif ($language == 'en'): ?>Production and Processing<?php endif ?></a></div>
		</div>
		<div class="column is-6 is-offset-1">
			<img src="img/mango1.jpg" alt="" data-aos="fade-up">
		</div>
	</div>
	<div class="columns has-padding-bottom" id="grape">
		<div class="column is-6">
			<img src="img/donafrida-grapes-01.jpg" alt="" data-aos="fade-up">
		</div>
		<div class="column is-4 is-offset-1">
			<?php if ($language == 'es'): ?>
			<h2>Nuestras Uvas</h2>
			<?php elseif ($language == 'en'): ?>
			<h2>Our Grapes</h2>
			<?php endif ?>
			<?php if ($language == 'es'): ?>
			<p>Nuestro cultivo de uva Red Globe se encuentra en Tambogrande en la provincia de Piura en Perú. La Variedad Red Globe presenta racimos de tamaño grande, bayas voluminosas que pueden asemejarse a una ciruela, es un fruto con semillas en su interior y de sabor dulce.</p>
			<p>Se mantiene en buenas condiciones en frío y es bastante resistente al transporte. No presenta problemas fitosanitarios, pero es sensible a la sobrecarga de frutos, ya que se resiente el vigor.</p>
			<?php elseif ($language == 'en'): ?>
			<p>From March to November we do field work, we begin with pruning by removing the buds or branches that grow inwards, as well as the elimination of dry and diseased branches.</p>
			<p>For irrigation, we have 3 reservoirs that store water for plant feeding, 20% is gravity irrigation and 80% is drip irrigation.</p>
			<p>From December to February we have our harvest when the fruit reaches maturity, indicated color, taste, firmness and resistance to be packed and transported to the table of our demanding consumers.</p>
			<?php endif ?>
			<div class="tabmenu single"><a href="process-grape" class="red"><?php if ($language == 'es'): ?>Procesos de Producción y de Planta<?php elseif ($language == 'en'): ?>Production and Processing<?php endif ?></a></div>
		</div>
	</div>
</div>
<script type="text/javascript" src="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js"></script>
<script src="slick.js"></script>
<?php include 'foot.php'; ?>