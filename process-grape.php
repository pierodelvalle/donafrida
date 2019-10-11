<?php include_once 'header.php' ?>
<div class="container">
	<h1>Procesos de la Uva</h1>
	<div class="tabmenu">
		<a href="process.php#grape" class="blue"> ← <?php if ($language == 'es'): ?>Regresar a Procesos<?php elseif ($language == 'en'): ?>Return to Processes<?php endif ?></a>
		<a href="#one" class="red tab active"><?php if ($language == 'es'): ?>Procesos de Producción<?php elseif ($language == 'en'): ?>Harvest<?php endif ?></a>
		<a href="#two" class="red tab"><?php if ($language == 'es'): ?>Procesos en Planta<?php elseif ($language == 'en'): ?>Processing<?php endif ?></a>
	</div>
	<div class="pane active" id="one">
		<div class="columns">
			<div class="column"><h3>Labores culturales</h3></div>
		</div>
		<div class="columns has-padding-bottom">
			<div class="column is-5">
				<?php if ($language == 'es'): ?>
				<h4>1. La poda</h4>
				<p>La labor más importante en el cultivo de la vid. Se realiza dos veces durante la campaña. La primera poda, llamada “poda seca”, se realiza luego de la cosecha, y sirve para regular la producción de los siguientes años y equilibrar los crecimientos vegetativos tras la fructificación. Con esto, se logra una mayor producción y mejor calidad de fruta por un número mayor de años. </p>
				<h4>2. El raleo</h4>
				<p>Esta labor es de suma importancia, ya que pretende obtener una uva de mesa de calidad exportable, ya que regula el volumen de la producción para balancear su cantidad y calidad. Esta operación consiste en disminuir la producción potencial mediante el arreglo manual del racimo, con la finalidad de aumentar la relación hojas/frutos. </p>
				<p>Con esto se obtienen bayas de mejor calibre, se evita el atraso de la madurez por sobreproducción y se mejora la uniformidad de color en las uvas negras y rosadas. </p>
				<h4>3. Riego</h4>
				<p>Se utiliza riego tecnificado. Para que el crecimiento y otras funciones de la planta se realicen adecuadamente, debe de mantenerse el suelo húmedo en ciertas etapas críticas del ciclo vegetativo.</p>
				<p>Una vez realizada la cosecha, se da el último riego antes de que la planta entre en un periodo de agoste, en el que la frecuencia de riego disminuye considerablemente. </p>
				<?php elseif ($language == 'en'): ?>
				<h4> 1. Pruning </h4>
				<p> The most important work in the cultivation of the vine. It is done twice during the campaign. The first pruning, called "dry pruning", is done after harvest, and serves to regulate the production of the following years and balance vegetative growth after fruiting. With this, greater production and better quality of fruit is achieved for a greater number of years. </p>
				<h4> 2. The thinning </h4>
				<p> This work is of the utmost importance, since it aims to obtain an exportable table grape, since it regulates the volume of production to balance its quantity and quality. This operation consists in reducing the potential production by means of the manual arrangement of the cluster, with the purpose of increasing the leaf / fruit ratio. </p>
				<p> With this, berries of better caliber are obtained, overdue maturity due to overproduction is avoided and the uniformity of color in black and pink grapes is improved. </p>
				<h4> 3. Irrigation </h4>
				<p> Technified irrigation is used. For the growth and other functions of the plant to be carried out properly, the moist soil must be kept in certain critical stages of the vegetative cycle. </p>
				<p> Once the harvest is done, the last irrigation is given before the plant enters a period of agoste, in which the frequency of irrigation decreases considerably. </p>
				<?php endif ?>

			</div>
			<div class="column is-6 is-offset-1">
				<img src="img/donafrida-grapes-04.jpg" alt="">
			</div>
		</div>
		<div class="columns">
			<div class="column is-6">
				<img src="img/donafrida-grapes-03.jpg" alt="">
			</div>
			<div class="column is-5 is-offset-1">
				<?php if ($language == 'es'): ?>
				<h4>4. Fertilización</h4>
				<p>El cultivo extrae grandes cantidades de nutrientes del suelo, por lo que es necesario que estos sean repuestos continuamente para poder lograr un buen crecimiento, calidad y rendimientos de la cosecha. </p>
				<p>Las cantidades necesarias dependerán de la calidad del suelo bajo el cual se está cultivando la vid. Sin embargo, podríamos decir que 80-120 unidades de Nitrógeno, 80 de Fósforo y 250 de Potasio por hectárea es la dosis promedio a aplicar.</p>
				<h4>5. Cosecha</h4>
				<p>Esta etapa se da cuando la fruta esta totalmente madura para su consumo, puesto que la uva no continúa madurando después de haber sido desprendida de la planta. Para la uva de mesa, el índice comúnmente utilizado es el nivel de azúcar expresado como sólidos solubles, los cuales son medidos por un refractómetro portátil.</p>
				<p>En general, cuando se tienen lecturas por encima del 16% la fruta esta lista para ser cosechada. El proceso es selectivo por lo que se recolectan sólo aquellos frutos que han alcanzado la madurez, la cosecha dura entre 30 y 45 días, realizándose en total 3 pasadas por el campo.</p>
				<?php elseif ($language == 'en'): ?>
				<h4> 4. Fertilization </h4>
				<p> The crop extracts large amounts of nutrients from the soil, so it is necessary that these are continually replenished in order to achieve good growth, quality and crop yields. </p>
				<p> The quantities needed will depend on the quality of the soil under which the vine is being grown. However, we could say that 80-120 units of Nitrogen, 80 of Phosphorus and 250 of Potassium per hectare is the average dose to apply. </p>
				<h4> 5. Harvest </h4>
				<p> This stage occurs when the fruit is fully ripe for consumption, since the grapes do not continue to ripen after being detached from the plant. For table grapes, the commonly used index is the level of sugar expressed as soluble solids, which are measured by a portable refractometer. </p>
				<p> In general, when you have readings above 16% the fruit is ready to be harvested. The process is selective, so only those fruits that have reached maturity are harvested, the harvest lasts between 30 and 45 days, with a total of 3 passes through the field. </p>
				<?php endif ?>
			</div>
		</div>
	</div>
	<div class="pane" id="two">
		<div class="columns has-padding-bottom">
			<div class="column is-5">
				<h4>1. Limpieza y Clasificación</h4>
				<p>Una vez cosechada la uva, limpiamos y clasificamos sus racimos. Esta labor se realiza manualmente, con mucho cuidado para no deteriorar la fruta. Para clasificar la fruta se deberá de tener en cuenta el color y el tamaño de los racimos. Luego, la fruta se coloca en jabas de plástico para posteriormente ser enviada al proceso de empaque.</p>
			</div>
			<div class="column is-6 is-offset-1">
				<img src="img/donafrida-grapes-05.jpg" alt="">
			</div>
		</div>
		<div class="columns">
			<div class="column is-6">
				<img src="img/donafrida-grapes-04.jpg" alt="">
			</div>
			<div class="column is-5 is-offset-1">
				<h4>2. Empaque</h4>
				<p>En esta etapa la uva es pesada y preseleccionada. Antes de introducir la fruta a las respectivas cajas, los racimos se limpian con tijeras especiales, extrayéndose las bayas defectuosas.</p>
				<p>En esta etapa del proceso es importante la calidad de la mano de obra, la cual requiere de una previa capacitación y cierta experticia para realizar una labor correcta. El tamaño de las cajas utilizadas para la comercialización depende básicamente del mercado al que se destine el producto.</p>
				<p>Antes de cerrar la caja, se coloca un generador de anhídrido sulfuroso, el cual tiene como finalidad evitar el crecimiento de algunos microorganismos causantes de enfermedades. Posteriormente, se colocan las cajas en pallets de madera, para luego realizar el tratamiento con fumigantes químicos destinados a eliminar la presencia de posibles plagas.</p>
				<p>
				Luego la uva es conducida a cámaras de enfriamiento que operan con aire forzado a temperaturas que oscilan entre los -5° C y -7° C. Este golpe de frío permite disminuir la temperatura de la fruta hasta un nivel cercano a los 0°C, lo que facilita su ingreso posterior a la cámara de almacenamiento refrigerado, entre 0°C y 2°C, y a una humedad relativa de entre 85% y 95%. Al ser un fruto muy delicado, el transporte de la uva debe de ser muy cuidadoso. Así, a lo largo de todas las etapas logísticas, desde la cámara hasta el consumidor final no debe de romperse la cadena de frío.</p>
			</div>
		</div>
	</div>
</div>
<script src="fruitnav.js"></script>
<?php include_once 'foot.php' ?>