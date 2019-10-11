<?php include_once 'header.php'; ?>
<main class="container">
	<h1>Procesos del Mango</h1>
	<div class="tabmenu">
		<a href="process.php#mango" class="blue"> ← <?php if ($language == 'es'): ?>Regresar a Procesos<?php elseif ($language == 'en'): ?>Return to Processes<?php endif ?></a>
		<a href="#one" class="yellow tab active"><?php if ($language == 'es'): ?>Procesos de Producción<?php elseif ($language == 'en'): ?>Production<?php endif ?></a>
		<a href="#two" class="yellow tab"><?php if ($language == 'es'): ?>Procesos en Planta<?php elseif ($language == 'en'): ?>Processing<?php endif ?></a>
	</div>
	<div class="pane active" id="one">
		<div class="columns">
			<div class="column">
				<?php if ($language == 'es'): ?>
				<h3>Proceso de Producción</h3>
				<?php elseif ($language == 'en'): ?>
				<h3>Production Process</h3>
				<?php endif ?>
			</div>
		</div>
		<div class="columns has-padding-bottom">
			<div class="column is-5">
				<?php if ($language == 'es'): ?>
				<h4>Labores de Siembra</h4>
				<p>El marco de la plantación va a depender del manejo que se le dará al huerto. Los distanciamientos usados en las plantaciones de mango van desde los tradicionales 8 x 8 m hasta 6 x 6 m. Si la plantación será establecida en lugares con pendientes mayores al 5% pero menores al 25%, los árboles deben ser plantados siguiendo curvas de nivel.</p>
				<p>Los trasplantes tienen que ser sometidos a riego antes de ser trasladadas. Después, en el campo son extraídos de la bolsa y son plantados cuidadosamente para no dañar el sistema radicular.</p>
				<h4>Segunda Fase: Formación</h4>
				<p>La fase de formación abarca el periodo de mantenimiento hasta llegar a su primera producción, periodo que por lo general oscila entre 3 y 4 años. Muchas de las actividades que corresponden a producción se realizan también en esta fase.</p>
				<h4>Tercera Fase: Producción</h4>
				<p>La fase de producción es el lapso en el que periódicamente se obtiene la producción de los árboles y puede extenderse hasta 15 o 20 años. En el campo de Agropall tenemos arboles de hasta 19 años.</p>
				<?php elseif ($language == 'en'): ?>
				<h4> Sowing Work </h4>
				<p> The plantation framework will depend on the management that will be given to the garden. The distances used in mango plantations range from traditional 8 x 8 m to 6 x 6 m. If the plantation will be established in places with slopes greater than 5% but less than 25%, the trees should be planted following contours. </p>
				<p> Transplants have to be irrigated before being transferred. Then, in the field they are removed from the bag and carefully planted so as not to damage the root system. </p>
				<h4> Second Phase: Training </h4>
				<p> The training phase covers the maintenance period until it reaches its first production, a period that usually ranges from 3 to 4 years. Many of the activities that correspond to production are also carried out in this phase. </p>
				<h4> Third Phase: Production </h4>
				<p> The production phase is the period in which periodically the production of trees is obtained and can be extended up to 15 or 20 years. In the Agropall field we have trees up to 19 years old. </p>
			<?php endif ?>
			</div>
			<div class="column is-6 is-offset-1">
				<img src="img/foto.jpg" alt="">
			</div>
		</div>
		<div class="columns has-padding-bottom">
			<div class="column is-6">
				<img src="img/mango3.jpg" alt="">
			</div>
			<div class="column is-5 is-offset-1">
				<?php if ($language == 'es'): ?>

				<h4>Labores de Manejo</h4>
				<ul>
					<li>
						<h6>Deshierbo</h6>
						<p>Lo hacemos una vez al año, normalmente el mes de abril el número de jornales está en función a la cantidad de maleza que ha crecido. Esta actividad normalmente se desarrolla con machete.</p>
					</li>
					<li>
						<h6>Poda</h6>
						<p>Es recomendable realizar poda de formación, eliminando las yemas o ramales que crecen hacia adentro (chupones). También se realiza las podas de limpieza como eliminación de ramas secas y enfermas. </p>
					</li>
					<li>
						<h6>Riego</h6>
						<p>Contamos con 3 reservorios que almacenamos el agua para la alimentación de la planta, un 20 % es riego a gravedad y 80% es riego por goteo.</p>
					</li>
					<li>
						<h6>Control fitosanitario</h6>
						<p>La plaga predominante es la mosca de la fruta. Se sabe de la alta presencia de mosca de la fruta, y algunos productores utilizan cebos para controlar su diseminación, aspecto que es común para todos. Otras plagas que también afectan a la planta son el TRIPS, OIDIUM, ANTRACNOSIS.</p>
					</li>
					<li>
						<h6>Floración y cuaje del fruto</h6>
						<p>La técnica de inducción para la floración se realiza mediante la aplicación de nitrato. También se procede a fumigar con azufre, calcio y zinc para inducir que la flor cuaje en fruto.</p>
					</li>
					<li>
						<h6>Crecimiento</h6>
						<p>Fertlizamos los campos y se continuamos con la aplicación de calcio.</p>
					</li>
				</ul>
				<h4>Labores de Cosecha</h4>
				<p>Iniciamos la cosecha cuando el fruto alcanzó la madurez fisiológica y cuando sus características de color, sabor, firmeza y resistencia al empacado y transporte sean mejores.</p>
				<?php elseif ($language == 'en'): ?>
				<h4> Management Work </h4>
				<ul>
					<li>
						<h6> Weeding </h6>
						<p> We do it once a year, normally in April the number of wages is based on the amount of weeds that have grown. This activity usually takes place with a machete. </p>
					</li>
					<li>
						<h6> Pruning </h6>
						<p> It is advisable to perform training pruning, eliminating the buds or branches that grow inwards (pacifiers). Cleaning pruning is also performed as removal of dry and diseased branches. </p>
					</li>
					<li>
						<h6> Irrigation </h6>
						<p> We have 3 reservoirs that store water for plant feed, 20% is gravity irrigation and 80% is drip irrigation. </p>
					</li>
					<li>
						<h6> Phytosanitary control </h6>
						<p> The predominant pest is the fruit fly. The high presence of fruit flies is known, and some producers use baits to control their spread, which is common for everyone. Other pests that also affect the plant are TRIPS, OIDIUM, ANTRACNOSIS. </p>
					</li>
					<li>
						<h6> Flowering and fruit setting </h6>
						<p> The induction technique for flowering is done by applying nitrate. It is also fumigated with sulfur, calcium and zinc to induce the flower to set in fruit. </p>
					</li>
					<li>
						<h6> Growth </h6>
						<p> We fertilize the fields and continue with the application of calcium. </p>
					</li>
				</ul>
				<h4> Harvest Work </h4>
				<p> We started harvesting when the fruit reached physiological maturity and when its characteristics of color, flavor, firmness and resistance to packaging and transport are better. </p>
				<?php endif ?>
			</div>
		</div>
	</div>
	<div class="pane" id="two">
		<div class="columns">
			<div class="column">
				<h3>Proceso en planta</h3>
			</div>
		</div>
		<div class="columns has-padding-bottom">
			<div class="column is-5">
				<?php if ($language == 'es'): ?>
				<h4>1. Recepción y pesado de materia prima</h4>
				<p>Transportamos la prima desde el fundo a la planta en jabas de 20 Kg de capacidad aproximadamente.</p>
				<h4>2. Lavado y Desinfección de materia prima</h4>
				<p>Lavamos con agua potable a temperatura ambiente en una tina de acero inoxidable con 3 m³ de capacidad, así eliminamos impurezas de la superficie del mango.</p>
				<h4>3. Escobillado y Secado</h4>
				<p>Cepillamos y desinfectamos la fruta para que quede libre de toda impureza, luego la secamos para calibrarla.</p>
				<h4>4. Selección y calibrado</h4>
				<p>Contamos con personal capacitado para seleccionar  la fruta, en este proceso separamos los mangos que no cumplen con los parámetros de calidad.</p>
				<h4>5. Tratamiento Hidrotérmico</h4>
				<p>Para la fruta que va con tratamiento se coloca las jabas en canastillas. La labor de encanastillado se realiza apilándose en parihuelas metálicas llevando un control de la fruta por lote, calibre, cliente, etc. Respetando la trazabilidad y los tiempos de tratamiento.</p>
				<h6>Fruta sin tratamiento hidrotérmico</h6>
				<p>La fruta que no ingresa a tratamiento hidrotérmico, es recepcionada, calibrada y llevada directamente al cepillado, encerado y lustrado.</p>
				<h4>6. Hidroenfriado</h4>
				<p>Después del tratamiento Hidrotérmico la fruta pasa a los tanques de agua fría a temperatura ambiente, el hidroenfriado es por un tiempo de 15 a 20 minutos.</p>
				<h4>7. Reposo de la fruta tratada</h4>
				<p>Dejamos reposar la fruta de 4 a 12 horas (tiempo establecido en el protocolo firmado por APHIS/SENASA).</p>
				<?php elseif ($language == 'en'): ?>
				<h4> 1. Reception and weighing of raw material </h4>
				<p> We transport the premium from the farm to the plant in approximately 20 kg capacity. </p>
				<h4> 2. Washing and Disinfection of raw material </h4>
				<p> We wash with drinking water at room temperature in a stainless steel tub with 3 m³ capacity, thus removing impurities from the surface of the handle. </p>
				<h4> 3. Brushing and Drying </h4>
				<p> Brush and disinfect the fruit so that it is free of any impurity, then dry it to calibrate it. </p>
				<h4> 4. Selection and calibration </h4>
				<p> We have trained personnel to select the fruit, in this process we separate the mangoes that do not meet the quality parameters. </p>
				<h4> 5. Hydrothermal Treatment </h4>
				<p> For the fruit that goes with treatment the baskets are placed in baskets. The work of encanastillado is carried out by stacking in metal parihuelas keeping a control of the fruit by batch, caliber, customer, etc. Respecting traceability and treatment times. </p>
				<h6> Fruit without hydrothermal treatment </h6>
				<p> Fruit that does not enter hydrothermal treatment is received, calibrated and taken directly to brushing, waxing and polishing. </p>
				<h4> 6. Hydrocooled </h4>
				<p> After the Hydrothermal treatment the fruit passes to the cold water tanks at room temperature, the hydrocooling is for a time of 15 to 20 minutes. </p>
				<h4> 7. Rest of treated fruit </h4>
				<p> Let the fruit stand for 4 to 12 hours (time established in the protocol signed by APHIS / SENASA). </p>
				<?php endif ?>

			</div>
			<div class="column is-6 is-offset-1">
				<img src="img/mango3.jpg" alt="">
			</div>
		</div>
		<div class="columns has-padding-bottom">
			<div class="column is-6">
				<img src="img/foto.jpg" alt="">
			</div>
			<div class="column is-5 is-offset-1">
				<?php if ($language == 'es'): ?>
				<h4>8. Cepillado, encerado y lustrado</h4>
				<p>Pasado el tiempo de reposo, escobillamos la fruta para terminar de eliminar las impurezas adheridas a la superficie de la fruta.</p>
				<h4>9. Secado</h4>
				<p>Una vez que la fruta ha sido encerada, esta se transporta por medio de polines  por  el  túnel  de  secado  donde  se  utilizan  ventiladores para  tal propósito.</p>
				<h4>10. Empaque, pesado y etiquetado</h4>
				<p>Nuestro personal capacitado coloca el mango en cajas de cartón de 4.050 a 4.200Kg, de acuerdo a los parámetros establecidos por cliente, validando el peso en balanzas calibradas. </p>
				<p>En este punto hacemos un segundo descarte de la fruta que no cumple con los parámetros de calidad.</p>
				<p>Para la fruta con tratamiento hidrotérmico se coloca un sticker con PLU, que identifica al cliente y el calibre, el cual es proporcionado por el cliente. La fruta sin tratamiento hidrotérmico no lleva sticker con PLU.</p>
				<h4>11. Paletizado y enzunchado</h4>
				<p>Colocamos las cajas empacadas tomando en cuenta que cada paleta debe albergar fruta del mismo calibre salvo alguna instrucción diferente del cliente.</p>
				<?php elseif ($language == 'en'): ?>
				<h4> 8. Brushed, waxed and polished </h4>
				<p> After the resting time, brush the fruit to finish removing the impurities attached to the surface of the fruit. </p>
				<h4> 9. Drying </h4>
				<p> Once the fruit has been waxed, it is transported through polines through the drying tunnel where fans are used for this purpose. </p>
				<h4> 10. Packaging, weighing and labeling </h4>
				<p> Our trained staff places the handle in cardboard boxes from 4,050 to 4,200 kg, according to the parameters established by the client, validating the weight on calibrated scales. </p>
				<p> At this point we make a second discard of the fruit that does not meet the quality parameters. </p>
				<p> For the fruit with hydrothermal treatment a sticker with PLU is placed, which identifies the client and the caliber, which is provided by the client. Fruit without hydrothermal treatment has no sticker with PLU. </p>
				<h4> 11. Palletizing and unfinished </h4>
				<p> We place the packed boxes taking into account that each pallet must house fruit of the same caliber unless otherwise instructed by the client. </p>
				<?php endif ?>

			</div>
		</div>
		<div class="columns has-padding-bottom">
			<div class="column is-5">
				<?php if ($language == 'es'): ?>
				<h4>12.Enfriado en túneles</h4>
				<p>La fruta palletizada es colocada en los túneles de frío el cual cumple la función de bajar la Temperatura desde que ingresa la fruta y de esta forma retardar el proceso de maduración prolongando la vida útil de la fruta. 
				</p>
				<p>Hacemos monitoreo de la temperatura de pulpa de la fruta y se lleva un registro en cada embarque. </p>
				<h4>13. Almacenamiento del producto terminado</h4>
				<p>Los pallets son almacenados en las cámaras de refrigeración. Contamos con cuatro cámaras, donde se lleva un control de la temperatura y del stock de los pallets diarios así como un reporte diario de movimientos en cámara.</p>
				<h4>14. Despacho</h4>
				<p>Antes de la carga, nuestro supervisor de calidad verifica que el contenedor esté limpio, desinfectado y  la funcionalidad del equipo de frio. Cuando el producto está listo para embarcarse deberá tener su etiqueta de identificación, la cual servirá para el registro en el programa.</p>
				<p>Al momento de embarcar el contenedor se hace el packing list (detallado el Procedimiento de Trazabilidad). Así mismo se genera una guía de salida del contenedor y certificados fitosanitarios que emite SENASA.</p>
				<?php elseif ($language == 'en'): ?>
				<h4> 12. Cooling </h4>
				<p> The palletized fruit is placed in the cold tunnels which fulfills the function of lowering the Temperature since the fruit enters and thus retarding the ripening process by prolonging the fruit's shelf life.
				</p>
				<p> We monitor the temperature of the pulp of the fruit and keep track of each shipment. </p>
				<h4> 13. Storage of the finished product </h4>
				<p> The pallets are stored in the refrigeration chambers. We have four cameras, where you keep track of the temperature and stock of the daily pallets as well as a daily report of camera movements. </p>
				<h4> 14. Office </h4>
				<p> Before loading, our quality supervisor verifies that the container is clean, disinfected and the functionality of the cold equipment. When the product is ready to ship, it must have its identification tag, which will be used for registration in the program. </p>
				<p> At the time of shipping the container the packing list is made (detailed Traceability Procedure). Likewise, a container exit guide and phytosanitary certificates issued by SENASA are generated. </p>
				<?php endif ?>

			</div>
			<div class="column is-6 is-offset-1">
				<img src="img/mango3.jpg" alt="">
			</div>
		</div>
	</div>
</main>
<script src="fruitnav.js"></script>
<?php include_once 'foot.php'; ?>