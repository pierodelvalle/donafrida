<form action="" method="post" class="form" id="lang">
	<button onclick="this.form.submit()" name="lang" value="es" class="<?php if(isset($_COOKIE["lang"]) && $_COOKIE["lang"] == 'es') { echo 'active'; } ?>">Español<span class="flag flag-sp"></span></button>
	<button onclick="this.form.submit()" name="lang" value="en" class="<?php if(isset($_COOKIE["lang"]) && $_COOKIE["lang"] == 'en') { echo 'active'; } ?>">English<span class="flag flag-us"></span></button>
</form>
