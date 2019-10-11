<?php include 'header.php'; ?>
<div class="container">
	<div class="tabmenu">
		<a href="#keitt" class="yellow active tab">Mango Keitt</a>
		<a href="#kent" class="orange tab">Mango Kent</a>
		<a href="#redglobe" class="red tab"><?php if ($language == 'es'): ?>Uva<?php elseif ($language == 'en'): ?>Grape<?php endif ?> Red Globe</a>
	</div>
	<div class="pane active" id="keitt">
		<h1>Mango</h1>
		<div class="columns">
			<div class="column is-4 is-offset-1">
				<h3>Keitt</h3>
				<?php if ($language == 'es'): ?>
				<p>Posee un tamaño mediano grande, pesando aproximadamente 600 gr. es de forma ovalada, y se disfruta en su etapa de maduración verde o hasta encurtidos. Sabor dulce y afrutado. De pulpa firme y jugosa.</p>
				<h4>Destinos de Exportación</h4>
				<h5>Marítimo</h5>
				<ul>
					<li><strong>Estados Unidos</strong> (Costa Este y Costa Oeste)</li>
				</ul>
				<h5>Aéreo</h5>
				<ul>
					<li><strong>Envíos a todo el mundo.</strong></li>
				</ul>
				<?php elseif ($language == 'en'): ?>
				<p>It has a large medium size, weighing approximately 600 gr. It is oval in shape, and is enjoyed in its green ripening stage or even pickled. Sweet and fruity taste. Firm and juicy pulp.</p>
				<h4>Export Destinations</h4>
				<h5>Maritime</h5>
				<ul>
					<li><strong>United States</strong> (East Coast and West Coast)</li>
				</ul>
				<h5>Aerial</h5>
				<ul>
					<li><strong>Worldwide shipping.</strong></li>
				</ul>
				<?php endif ?>
			</div>
			<div class="column is-6">
				<img src="img/world_keitt.png" alt="Destinos de Exportación">
			</div>
		</div>
		<?php if ($language == 'es'): ?>
		<h4>Temporada de Cosecha</h4>
		<?php elseif ($language == 'en'): ?>
		<h4>Harvest Season</h4>
		<?php endif ?>
		<div class="timeline columns">
			<div class="column is-3-mobile"><span><?php if ($language == 'es'){ echo 'Ene'; } elseif($language == 'en'){ echo 'Jan'; } ?></span><div class="timeline-dot animate no-1 harvest yellow"></div></div>
			<div class="column is-3-mobile"><span>Feb</span><div class="timeline-dot animate no-2 harvest yellow"></div></div>
			<div class="column is-3-mobile"><span>Mar</span><div class="timeline-dot animate no-3"></div></div>
			<div class="column is-3-mobile"><span><?php if ($language == 'es'){ echo 'Abr'; } elseif($language == 'en'){ echo 'Apr'; } ?></span><div class="timeline-dot animate no-4"></div></div>
			<div class="column is-3-mobile"><span>May</span><div class="timeline-dot animate no-5"></div></div>
			<div class="column is-3-mobile"><span>Jun</span><div class="timeline-dot animate no-6"></div></div>
			<div class="column is-3-mobile"><span>Jul</span><div class="timeline-dot animate no-7"></div></div>
			<div class="column is-3-mobile"><span><?php if ($language == 'es'){ echo 'Ago'; } elseif($language == 'en'){ echo 'Aug'; } ?></span><div class="timeline-dot animate no-8"></div></div>
			<div class="column is-3-mobile"><span><?php if ($language == 'es'){ echo 'Set'; } elseif($language == 'en'){ echo 'Sep'; } ?></span><div class="timeline-dot animate no-9"></div></div>
			<div class="column is-3-mobile"><span>Oct</span><div class="timeline-dot animate no-10"></div></div>
			<div class="column is-3-mobile"><span>Nov</span><div class="timeline-dot animate no-11"></div></div>
			<div class="column is-3-mobile"><span>Dec</span><div class="timeline-dot animate no-12"></div></div>
		</div>
		<div class="columns">
			<div class="column is-6">
				<img src="img/mango1.jpg" alt="">
			</div>
			<div class="column is-4 is-offset-1">
				<?php if ($language == 'es'): ?>
				<h4>Categoría</h4>
				<h5>Premium</h5>
				<ul>
					<li>
						<h6>Marítimo</h6>
						<p>Mayor vida en anaquel.</p>
						<p>Mango fresco, de buena calidad con forma y color característica de la variedad, enviado a un grado brix de 8° lo que permite obtener una mejor llegada a destino. Esta alternativa permite aumentar considerablemente los volúmenes de exportación.</p>
					</li>
				</ul>
				<?php elseif ($language == 'en'): ?>
				<h4>Category</h4>
				<h5>Premium</h5>
				<ul>
					<li>
						<h6>Maritime</h6>
						<p>Longer shelf life.</p>
						<p>Fresh, good quality mango with the shape and color characteristic of the variety, sent to a brix grade of 8 ° which allows a better arrival at destination. This alternative allows to significantly increase export volumes.</p>
					</li>
				</ul>
				<?php endif ?>

			</div>
		</div>
	</div>
	<div class="pane" id="kent">
		<h1>Mango</h1>
		<div class="columns">
			<div class="column is-4 is-offset-1">
				<h3>Kent</h3>
				<?php if ($language == 'es'): ?>
					<p>Fruta de color amarillo con verde con coloración rojiza, bajo en fibra, jugoso y con sabor dulce y agradable, es de excelente calidad para el consumo. Ésta variedad tiene una cáscara fuerte que resiste el tratamiento hidrotérmico.</p>
					<h4>Destinos de Exportación</h4>
					<h5>Marítimo</h5>
					<ul>
						<li><strong>Estados Unidos</strong> (Costa Este y Costa Oeste)</li>
						<li><strong>Holanda</strong> (Róterdam)</li>
						<li><strong>Italia</strong> (Livorno)</li>
						<li><strong>España</strong> (Algeciras)</li>
					</ul>
					<h5>Aéreo</h5>
					<ul>
						<li><strong>Envíos a todo el mundo.</strong></li>
					</ul>
				<?php elseif ($language == 'en'): ?>
					<p>Yellow with green fruit with reddish coloration, low fiber, juicy and sweet and pleasant flavor, it is of excellent quality for consumption. This variety has a strong shell that resists hydrothermal treatment.</p>
					<h4>Export Destinations</h4>
					<h5>Maritime</h5>
					<ul>
						<li><strong>United States</strong> (East Coast and West Coast)</li>
						<li><strong>Netherlands</strong> (Rotterdam)</li>
						<li><strong>Italy</strong> (Livorno)</li>
						<li><strong>Spain</strong> (Algeciras)</li>
					</ul>
					<h5>Aerial</h5>
					<ul>
						<li><strong>Worldwide shipping.</strong></li>
					</ul>
				<?php endif ?>

			</div>
			<div class="column is-6">
				<img src="img/world_kent.png" alt="Destinos de Exportación">
			</div>
		</div>
		<h4>Temporada de Cosecha</h4>
		<div class="timeline columns">
			<div class="column is-3-mobile"><span><?php if ($language == 'es'){ echo 'Ene'; } elseif($language == 'en'){ echo 'Jan'; } ?><div class="timeline-dot no-1 harvest orange"></div></div>
			<div class="column is-3-mobile"><span>Feb</span><div class="timeline-dot no-2 harvest orange"></div></div>
			<div class="column is-3-mobile"><span>Mar</span><div class="timeline-dot no-3"></div></div>
			<div class="column is-3-mobile"><span><?php if ($language == 'es'){ echo 'Abr'; } elseif($language == 'en'){ echo 'Apr'; } ?><div class="timeline-dot no-4"></div></div>
			<div class="column is-3-mobile"><span>May</span><div class="timeline-dot no-5"></div></div>
			<div class="column is-3-mobile"><span>Jun</span><div class="timeline-dot no-6"></div></div>
			<div class="column is-3-mobile"><span>Jul</span><div class="timeline-dot no-7"></div></div>
			<div class="column is-3-mobile"><span><?php if ($language == 'es'){ echo 'Ago'; } elseif($language == 'en'){ echo 'Aug'; } ?><div class="timeline-dot no-8"></div></div>
			<div class="column is-3-mobile"><span><?php if ($language == 'es'){ echo 'Set'; } elseif($language == 'en'){ echo 'Sep'; } ?><div class="timeline-dot no-9"></div></div>
			<div class="column is-3-mobile"><span>Oct</span><div class="timeline-dot no-10"></div></div>
			<div class="column is-3-mobile"><span>Nov</span><div class="timeline-dot no-11 harvest orange"></div></div>
			<div class="column is-3-mobile"><span>Dec</span><div class="timeline-dot no-12 harvest orange"></div></div>
		</div>
		<div class="columns">
			<div class="column is-6">
				<img src="img/mango2.jpg" alt="">
			</div>
			<div class="column is-4 is-offset-1">
				<?php if ($language == 'es'): ?>
					<h4>Categoría</h4>
					<h5>Premium</h5>
					<ul>
						<li>
							<h6>Aéreo</h6>
							<p>Listo para comer.</p>
							<p>Mangos de calidad, fresco, madurado en árbol, lo que permite saborear un mango con todo su sabor y frescura. Se diferencia por la madurez y el grado brix 14° con el que se envía. Se envía en caja de 6 kg (tapa y fondo).</p>
						</li>
						<li>
							<h6>Marítimo</h6>
							<p>Mayor vida en anaquel.</p>
							<p>Mango fresco, de buena calidad con forma y color característica de la variedad, enviado a un grado brix de 8° lo que permite obtener una mejor llegada a destino. Esta alternativa permite aumentar considerablemente los volúmenes de exportación.</p>
						</li>
					</ul>
					<h5>Industria</h5>
					<ul>
						<li>
							<h6>Marítimo</h6>
							<p>Disponibilidad todo el año.</p>
							<p>Fruto de primera calidad en su interior, no necesita color, que pueden presentar defectos que no deterioren aspecto, calidad y conservación del fruto.</p>
						</li>
					</ul>
				<?php elseif ($language == 'en'): ?>
					<h4>Category</h4>
					<h5>Premium</h5>
					<ul>
						<li>
							<h6>Aerial</h6>
							<p>Ready to eat.</p>
							<p>Quality mangoes, fresh, ripened on the tree, allowing you to taste a mango with all its flavor and freshness. It differs by maturity and the brix degree 14 ° with which it is sent. Ships in a 6 kg box (cover and bottom).</p>
						</li>
						<li>
							<h6>Maritime</h6>
							<p>Longer shelf life.</p>
							<p>Fresh, good quality mango with the shape and color characteristic of the variety, sent to a brix grade of 8 ° which allows a better arrival at destination. This alternative allows to significantly increase export volumes.</p>
						</li>
					</ul>
					<h5>Industry</h5>
					<ul>
						<li>
							<h6>Maritime</h6>
							<p>Availability all year.</p>
							<p>Fruit of first quality in its interior, it does not need color, that can present defects that do not deteriorate aspect, quality and conservation of the fruit.</p>
						</li>
					</ul>
				<?php endif ?>
			</div>
		</div>
	</div>
	<div class="pane" id="redglobe">
		<h1>Uva</h1>
		<div class="columns">
			<div class="column is-4 is-offset-1">
				<h3>Red Globe</h3>
				<?php if ($language == 'es'): ?>
				<p>Tiene unas uvas de tamaño muy grande, forma elipsoide globosa, piel gruesa y consistente, color rojo violáceo, pulpa carnosa y de sabor afrutado, con semillas de tamaño medio. De fácil desprendimiento.</p>
				<h4>Destinos de Exportación</h4>
				<h5>Marítimo</h5>
				<ul>
					<li><strong>Estados Unidos</strong> (Costa Este y Costa Oeste)</li>
					<li><strong>Puerto Rico</strong></li>
					<li><strong>Países Bajos</strong></li>
				</ul>
				<h5>Aéreo</h5>
				<ul>
					<li><strong>Envíos a todo el mundo.</strong></li>
				</ul>
				<?php elseif ($language == 'en'): ?>
				<p>It has very large sized grapes, globose ellipsoid shape, thick and consistent skin, purplish red color, fleshy pulp and fruity flavor, with medium sized seeds. Easy detachment.</p>
				<h4>Export Destinations</h4>
				<h5>Maritime</h5>
				<ul>
					<li><strong>United States</strong> (East Coast and West Coast)</li>
					<li><strong>Puerto Rico</strong></li>
					<li><strong>Netherlands</strong></li>
				</ul>
				<h5>Aerial</h5>
				<ul>
					<li><strong>Worldwide shipping.</strong></li>
				</ul>
				<?php endif ?>
			</div>
			<div class="column is-6">
				<img src="img/world_redglobe.png" alt="Destinos de Exportación">
			</div>
		</div>
		<h4>Temporada de Cosecha</h4>
		<div class="timeline columns">
			<div class="column is-3-mobile"><span><?php if ($language == 'es'){ echo 'Ene'; } elseif($language == 'en'){ echo 'Jan'; } ?><div class="timeline-dot no-1 harvest red"></div></div>
			<div class="column is-3-mobile"><span>Feb</span><div class="timeline-dot no-2"></div></div>
			<div class="column is-3-mobile"><span>Mar</span><div class="timeline-dot no-3"></div></div>
			<div class="column is-3-mobile"><span><?php if ($language == 'es'){ echo 'Abr'; } elseif($language == 'en'){ echo 'Apr'; } ?><div class="timeline-dot no-4"></div></div>
			<div class="column is-3-mobile"><span>May</span><div class="timeline-dot no-5 harvest red"></div></div>
			<div class="column is-3-mobile"><span>Jun</span><div class="timeline-dot no-6 harvest red"></div></div>
			<div class="column is-3-mobile"><span>Jul</span><div class="timeline-dot no-7 harvest red"></div></div>
			<div class="column is-3-mobile"><span><?php if ($language == 'es'){ echo 'Ago'; } elseif($language == 'en'){ echo 'Aug'; } ?><div class="timeline-dot no-8 harvest red"></div></div>
			<div class="column is-3-mobile"><span><?php if ($language == 'es'){ echo 'Set'; } elseif($language == 'en'){ echo 'Sep'; } ?><div class="timeline-dot no-9 harvest red"></div></div>
			<div class="column is-3-mobile"><span>Oct</span><div class="timeline-dot no-10 harvest red"></div></div>
			<div class="column is-3-mobile"><span>Nov</span><div class="timeline-dot no-11 harvest red"></div></div>
			<div class="column is-3-mobile"><span>Dec</span><div class="timeline-dot no-12 harvest red"></div></div>
		</div>
		<div class="columns">
			<div class="column is-10 is-offset-1">
				<div class="slick">
					<img src="img/donafrida-grapes-03.jpg" alt="">
					<img src="img/donafrida-grapes-02.jpg" alt="">
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript" src="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js"></script>
<script>
	$('.pane.active .slick').slick({
		arrows: false,
		dots: true,
		fade: true,
		adaptiveHeight: true
	})
</script>
<script src="fruitnav.js"></script>
<?php include 'foot.php'; ?>